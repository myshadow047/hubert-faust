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

        $where = array('status' => 1);
        $contact_us = $this->db->get_where('contact_us', $where)->row_array();
        $this->_data['contact_us'] = $contact_us;
    }

    function special_order() {

    }

    function product($category) {
        $sql = 'SELECT * FROM product p LEFT JOIN product_image pi ON p.id = pi.product WHERE p.category = ?';
        $products = $this->db->query($sql, array(1))->result_array();

        $this->_data['products'] = $products;
    }

    function detail_product($category, $product_id) {
        $sql = 'SELECT * FROM product p LEFT JOIN product_image pi ON p.id = pi.product WHERE p.id = ?';
        $product = $this->db->query($sql, array($product_id))->row_array();

        $this->_data['product'] = $product;
    }

    function about_us() {

    }

    function contact_us() {

    }
}