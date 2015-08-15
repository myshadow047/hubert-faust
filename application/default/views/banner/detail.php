<?php $title = humanize(get_class($CI)). ' Detail' ?>
<?php
echo $this->admin_panel->breadcrumb(array(
    array('uri' => $CI->_get_uri('listing'), 'title' => l(humanize(get_class($CI)))),
    array('uri' => $CI->uri->uri_string, 'title' => $title),
))
?>

<div class="clearfix"></div>
<fieldset>
    <legend><?php echo $title ?></legend>
    <div>
        <label><?php echo l('Name') ?></label>
        <span><?php echo $data['name'] ?></span>
    </div>
    <div>
        <label><?php echo l('Images') ?></label>
        <a href="<?php echo base_url('data/banner/image/'.$data['image']) ?>">
            <img width="300" height="300" src="<?php echo base_url('data/banner/image/'.$data['image']) ?>">
        </a>
    </div>
</fieldset>