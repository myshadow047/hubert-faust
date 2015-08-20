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

    function product($category_id, $offset = 0) {
        $this->load->library('pagination');

        $where = array('status' => 1, 'id' => $category_id);
        $category = $this->db->get_where('category', $where)->row_array();
        $this->_data['category'] = $category;

        $count = 0;
        $per_page = 8;
        $this->_data['products'] = $this->_model()->find($per_page, $offset, $count, $category_id);

        $this->load->library('pagination');
        $param = array(
            'total_rows' => $count,
            'per_page' => $per_page,
            'base_url' => site_url('web/product'.'/'.$category_id),
            'uri_segment' => 4
        );

        if (!empty($_GET)) {
            $param['suffix'] = '?'.http_build_query($_GET, '', '&');
        }
        $this->pagination->initialize($param);
    }

    function detail_product($category, $page, $product_id) {
        $where = array('status' => 1, 'id' => $product_id);
        $product = $this->db->get_where('product', $where)->row_array();

        $where = array('status' => 1, 'product' => $product_id);
        $product_image = $this->db->get_where('product_image', $where)->result_array();

        $product['images'] = $product_image;

        $this->_data['product'] = $product;
    }

    function about_us() {
        $where = array('status' => 1);
        $about_us = $this->db->get_where('about_us', $where)->row_array();
        $this->_data['about_us'] = $about_us;
    }

    function contact_us() {

    }

    function news() {

    }

    function detail_news() {

    }
}