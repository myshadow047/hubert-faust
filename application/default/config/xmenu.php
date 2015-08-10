<?php

/**
 * xmenu.php
 *
 * @package     arch-php
 * @author      jafar <jafar@xinix.co.id>
 * @copyright   Copyright(c) 2012 PT Sagara Xinix Solusitama.  All Rights Reserved.
 *
 * Created on 2011/11/21 00:00:00
 *
 * This software is the proprietary information of PT Sagara Xinix Solusitama.
 *
 * History
 * =======
 * (dd/mm/yyyy hh:mm:ss) (author)
 * 2011/11/21 00:00:00   jafar <jafar@xinix.co.id>
 *
 *
 */

$config = array();
// $config['xmenu_source'] = 'model:menu:find_admin_panel';

$config['xmenu_source'] = 'inline';

$config['xmenu_items'][0]['title'] = 'Home';
$config['xmenu_items'][0]['uri'] = '/';

$config['xmenu_items'][1]['title'] = 'System';

$config['xmenu_items'][1]['children'][0]['title'] = 'User';
$config['xmenu_items'][1]['children'][0]['uri'] = 'user/listing';
$config['xmenu_items'][1]['children'][1]['title'] = 'Role';
$config['xmenu_items'][1]['children'][1]['uri'] = 'role/listing';
$config['xmenu_items'][1]['children'][2]['title'] = 'Organization';
$config['xmenu_items'][1]['children'][2]['uri']   = 'organization/listing';
$config['xmenu_items'][1]['children'][3]['title'] = 'Parameter';
$config['xmenu_items'][1]['children'][3]['uri']   = 'sysparam/listing';
$config['xmenu_items'][1]['children'][4]['title'] = 'Module';
$config['xmenu_items'][1]['children'][4]['uri']   = 'module/listing';

