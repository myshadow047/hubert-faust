<?php

class web_model extends app_base_model {

    function find($limit = null, $offset = null, &$count = 0, $category) {
        $params = array();
        $where_str = '';
        $order_str = '';
        $limit_str = '';
        $wheres = array();
        $filter_wheres = array();
        $orders = array();

        $select_count = 'SELECT COUNT(*) count';
        $select = 'SELECT
                    pi.product,
                    p.category,
                    p.name,
                    p.description,
                    p.ingredient,
                    p.dimention,
                    pi.image_name';

        $wheres[] = 'p.status != 0';
        $wheres[] = 'p.category = ?';
        $params[] = $category;


        if (!empty($wheres)) {
            $where_str = ' WHERE '.implode(' AND ', $wheres);
        }

        $table_name = $this->_db()->_protect_identifiers('product') . ' p';

        $join = ' LEFT JOIN product_image pi ON p.id = pi.product ';
        $groupby = ' GROUP BY pi.product ';
        $sql = ' FROM '.$table_name.$join.$where_str.$groupby;
        $sqlcount = ' FROM '.$table_name.$where_str;

        $count = $this->_db()->query($select_count.$sqlcount, $params)->row()->count;

        if (!empty($limit)) {
            $limit_str = ' LIMIT ?, ?';
            $params[] = intval($offset);
            $params[] = intval($limit);
        }
        $result = $this->_db()->query($select.$sql.$limit_str, $params)->result_array();

        return $result;
    }

}