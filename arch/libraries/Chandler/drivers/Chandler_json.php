<?php

class chandler_json extends CI_Driver {
	function on_restricted() {
		$this->show_error('Restricted area',401);
	}

	function show_error($message,$status) {
        if (!is_cli_request()) {
            set_status_header($status);
            header('Content-type: application/json');
        }

		$data = array(
			'message' => $message,
		);

		echo json_encode($data);
		exit;
	}

	function display_output() {
		global $BM;
		header('Content-Type: application/json');

		$data = (!empty($this->ci->_data['data'])) ? $this->ci->_data['data'] : '';

		// if ($this->ci->config->item('enable_profiler')) {
		// 	$data['_execution_profile'] = array(
		// 		'elapsed_time' => $BM->elapsed_time('total_execution_time_start', 'total_execution_time_end'),
		// 		'memory_usage' => ( ! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 2).'MB',
		// 	);
		// }
        echo json_encode($data);
	}
}