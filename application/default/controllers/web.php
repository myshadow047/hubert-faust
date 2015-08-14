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

    function product($category_id) {
        $where = array('status' => 1, 'id' => $category_id);
        $category = $this->db->get_where('category', $where)->row_array();
        $this->_data['category'] = $category;

        $sql = 'SELECT
                    pi.product,
                    p.category,
                    p.name,
                    p.description,
                    p.ingredient,
                    p.dimention,
                    pi.image_name
                FROM product p LEFT JOIN product_image pi ON p.id = pi.product WHERE p.category = ? GROUP BY pi.product';

        $products = $this->db->query($sql, array($category_id))->result_array();
        $this->_data['products'] = $products;
    }

    function detail_product($category, $product_id) {
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
}