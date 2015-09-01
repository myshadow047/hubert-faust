<?php

class about_us extends app_crud_controller {

    function _config_grid() {
        $fields = array_keys($this->_model($this->_name)->list_fields(true));
        $config = array(
            'fields' => $fields,
            'formats' => array('callback__limiter', 'callback__limiter', 'callback__limiter', 'callback__limiter', 'callback__limiter'),
            'sorts' => $fields,
            'actions' => array(
                'edit' => $this->_get_uri('edit')
            ),
            'show_checkbox' => false
        );

        if ($this->CAN_DELETE) {
            $config['actions']['delete'] = $this->_get_uri('delete');
        }

        return $config;
    }

    function _limiter($v) {
        return word_limiter(strip_tags($v), 20);
    }

    function add() {
        redirect(site_url('about_us'));
    }

    function detail($id) {
        redirect(site_url('about_us'));
    }

    function trash($id) {
        redirect(site_url('about_us'));
    }
}
