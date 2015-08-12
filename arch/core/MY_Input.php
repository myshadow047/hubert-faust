<?php

class MY_Input extends CI_Input {
	var $is_ajax = '-';

    public function __construct() {
        parent::__construct();
        $this->is_ajax_request();
    }

    function is_ajax_request() {
        if ($this->is_ajax === '-') {
            $this->is_ajax = ($this->server('HTTP_X_REQUESTED_WITH') === 'XMLHttpRequest') || (isset($_REQUEST['HTTP_X_REQUESTED_WITH']) && $_REQUEST['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest');
            unset($_REQUEST['HTTP_X_REQUESTED_WITH']);
            unset($_POST['HTTP_X_REQUESTED_WITH']);
            unset($_GET['HTTP_X_REQUESTED_WITH']);
        }
        return $this->is_ajax;
    }

    function location() {
        return '';
    }

    function referer() {
        if (empty($this->referer)) {
            $referer = new stdClass;

            $url = $this->server('HTTP_REFERER');
            $segments = explode(base_url(), $url);

            if (empty($segments[1])) {
                $segments = '';
            } else {
                $segments = explode('/', $segments[1]);
                unset($segments[0]);
            }


            $referer->url = $url;
            $referer->segments = $segments;
            $referer->uri = @implode('/', $segments);


            $this->referer = $referer;
        }

        return $this->referer;
    }
}

