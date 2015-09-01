<?php

function _profile_group($value) {
    return $value['name'];
}

$excludes = array('id', 'password');
?>

<?php
echo $this->admin_panel->breadcrumb(array(
    array('uri' => $CI->uri->uri_string, 'title' => l('Profile')),
))
?>

<div class="clearfix clear"></div>

<style type="text/css">
    #profile-fieldset { position: relative; }
    #profile-fieldset img {
        position: absolute;
        right: 0;
        margin: 10px 20px;
    }
</style>

<fieldset id="profile-fieldset">
    <legend><?php echo l('User Profile') ?></legend>

    <div>
        <label><?php echo l('Username') ?></label>
        <span><?php echo $data['username'] ?></span>
    </div>
    <div>
        <label><?php echo l('Email') ?></label>
        <span><?php echo $data['email'] ?></span>
    </div>
    <div>
        <label><?php echo l('Full Name') ?></label>
        <span><?php echo @$data['first_name'].' '.@$data['last_name'] ?></span>
    </div>

    <div>
        <label><?php echo l('Role') ?></label>
        <span>
        <?php foreach($data['role'] as $role): ?>
        <div><?php echo $role['name'] ?></div>
        <?php endforeach ?>
        </span>
    </div>
</fieldset>
