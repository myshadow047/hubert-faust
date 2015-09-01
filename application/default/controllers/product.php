<?php

class product extends app_crud_controller {

    function _config_grid() {
        $fields = array_keys($this->_model($this->_name)->list_fields(true));
        $config = array(
            'fields' => array('category', 'name', 'description', 'ingredient', 'dimention', 'is_promo'),
            'formats' => array('callback__category', '', 'callback__limiter', 'callback__limiter', 'callback__limiter', 'callback__set_promo'),
            'names' => array('', '', '', '', '', 'Promo'),
            'sorts' => $fields,
            'actions' => array(
                'edit' => $this->_get_uri('edit'),
                'delete' => $this->_get_uri('trash')
            ),
        );

        if ($this->CAN_DELETE) {
            $config['actions']['delete'] = $this->_get_uri('delete');
        }

        return $config;
    }

    function _limiter($v) {
        return word_limiter(strip_tags($v), 20);
    }

    function _set_promo($v, $k, $d) {
        if ($v == 1) {
            return '<a href="'.site_url('product/update_promo/'.$v.'/'.$d['id']).'">Unset Promo</a>';
        } else {
            return '<a href="'.site_url('product/update_promo/'.$v.'/'.$d['id']).'">Set Promo</a>';
        }
    }

    function update_promo($is_promo, $id) {
        if ($is_promo == 1) {
            $this->db->where('id', $id);
            $this->db->update('product', array('is_promo' => 0));
        } else {
            $this->db->where('id', $id);
            $this->db->update('product', array('is_promo' => 1));
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    function _category($val) {
        $where = array('status' => 1, 'id' => $val);
        $category = $this->db->get_where('category', $where)->row_array();

        return $category['name'];
    }

    function _save($id = null) {
        $this->_view = $this->_name . '/show';

        if ($_POST) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['upload_path'] = 'data/product/image';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);

            if (!file_exists('./data/product/image')) {
                mkdir('./data/product/image', 0777, true);
            }

            $_POST['id'] = $id;
            try {
                $id = $this->_model()->save($_POST, $id);

                if ($_FILES['images']['name'][0] ) {
                    foreach ($_FILES as $k => $file) {
                        $this->upload->do_upload('images');
                        $images = $this->upload->data();
                    }

                    foreach ($images as $image) {
                        $data = array(
                            'product' => $id,
                            'image_name' => $image['file_name']
                        );
                        $this->_model()->before_save($data);
                        $this->db->insert('product_image', $data);
                    }
                }

                $referrer = $this->session->userdata('referrer');
                if (empty($referrer)) {
                    $referrer = $this->_get_uri('listing');
                }

                add_info( ($id) ? l('Record updated') : l('Record added') );

                if (!$this->input->is_ajax_request()) {
                    redirect($referrer);
                }
            } catch (Exception $e) {
                add_error(l($e->getMessage()));
            }
        } else {
            $where = array('status' => 1);
            $categories = $this->db->get_where('category', $where)->result_array();
            $cat = array('' => 'Select Category');

            foreach ($categories as $k => $category) {
                $cat[$category['id']] = $category['name'];
            }
            $this->_data['categories'] = $cat;

            if ($id !== null) {
                $where = array('status' => 1, 'product' => $id);
                $images = $this->db->get_where('product_image', $where)->result_array();

                $this->_data['images'] = $images;
                $this->_data['id'] = $id;
                $_POST = $this->_model()->get($id);
                if (empty($_POST)) {
                    show_404($this->uri->uri_string);
                }
            }
            $this->load->library('user_agent');
            $this->session->set_userdata('referrer', $this->agent->referrer());
        }
        $this->_data['fields'] = $this->_model()->list_fields(true);
    }

    function delete_one_image($id, $product_id) {
        $data = $this->db->get_where('product_image', array('id' => $id))->row_array();

        unlink('data/product/image/' . $data['image_name']);

        $this->db->delete('product_image', array('id' => $id));

        redirect('product/edit/' . $product_id);
    }
}