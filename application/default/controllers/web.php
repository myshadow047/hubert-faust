<?php

class web extends app_crud_controller {

    function __construct() {
        parent::__construct();
        $this->_layout_view = 'layouts/web';

        $where = array('status' => 1);
        $categories = $this->_model()->_db()->get_where('category', $where)->result_array();
        $this->_data['categories'] = $categories;
    }

    function _check_access() {
        return TRUE;
    }

    function index() {
        $where = array('status' => 1);
        $banners = $this->db->get_where('banner', $where)->result_array();

        $this->_data['banners'] = $banners;
    }
}