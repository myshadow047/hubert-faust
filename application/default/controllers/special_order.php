<?php

class special_order extends app_crud_controller {

    function _config_grid() {
        $fields = array_keys($this->_model($this->_name)->list_fields(true));
        $config = array(
            'fields' => array('name', 'email', 'phone', 'ingredients', 'dimension', 'detail'),
            'formats' => array('row_detail'),
            'sorts' => $fields,
            'actions' => array(
                'delete' => $this->_get_uri('trash')
            ),
        );

        if ($this->CAN_DELETE) {
            $config['actions']['delete'] = $this->_get_uri('delete');
        }

        return $config;
    }

    function _save($id = null) {
        if ($_POST) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['upload_path'] = 'data/special_order/image';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);

            if (!file_exists('./data/special_order/image')) {
                mkdir('./data/special_order/image', 0777, true);
            }

            $_POST['id'] = $id;
            try {
                $id = $this->_model()->save($_POST, $id);

                if (array_filter($_FILES['special_order_image']['name'])) {
                    foreach ($_FILES as $k => $file) {
                        $this->upload->do_upload('special_order_image');
                        $images = $this->upload->data();
                    }

                    foreach ($images as $image) {
                        $data = array(
                            'special_order' => $id,
                            'image_name' => $image['file_name']
                        );
                        $this->_model()->before_save($data);
                        $this->db->insert('special_order_image', $data);
                    }
                }

                $referrer = $this->session->userdata('referrer');
                if (empty($referrer)) {
                    $referrer = site_url('web/special_order');
                }

                add_info( ($id) ? l('Record updated') : l('Record added') );

                if (!$this->input->is_ajax_request()) {
                    redirect(site_url('web/special_order'));
                }
            } catch (Exception $e) {
                add_error(l($e->getMessage()));
            }
        } else {
            if ($id !== null) {
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

    function request() {
        $this->_save();
    }

    function detail($id) {
        $this->load->helper('format');
        $this->_data['fields'] = $this->_model()->list_fields(true);
        $data = $this->_model()->get($id);

        $images = $this->db->query('SELECT * FROM special_order_image WHERE special_order = ?', array($id))->result_array();
        $data['images'] = $images;

        $this->_data['data'] = $data;
    }
}