<?php

class web extends app_crud_controller {

    function __construct() {
        parent::__construct();
        $this->_layout_view = 'layouts/web';
    }

    function _check_access() {
        return TRUE;
    }

    function index() {

    }
}