<?php

class category extends app_crud_controller {

    function _config_grid() {
        $fields = array_keys($this->_model($this->_name)->list_fields(true));
        $config = array(
            'fields' => $fields,
            'formats' => array(),
            'sorts' => $fields,
            'actions' => array(
                'edit' => $this->_get_uri('edit'),
                'delete' => $this->_get_uri('trash'),
            ),
        );

        if ($this->CAN_DELETE) {
            $config['actions']['delete'] = $this->_get_uri('delete');
        }

        return $config;
    }

}