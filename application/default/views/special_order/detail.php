<?php $title = humanize(get_class($CI)). ' Detail' ?>
<?php
echo $this->admin_panel->breadcrumb(array(
    array('uri' => $CI->_get_uri('listing'), 'title' => l(humanize(get_class($CI)))),
    array('uri' => $CI->uri->uri_string, 'title' => $title),
))
?>

<div class="clearfix"></div>
<fieldset>
    <legend><?php echo 'Special Order' ?></legend>
    <div>
        <label><?php echo l('Name') ?></label>
        <span><?php echo $data['name'] ?></span>
    </div>
    <div>
        <label><?php echo l('Email') ?></label>
        <span><?php echo $data['email'] ?></span>
    </div>
    <div>
        <label><?php echo l('Phone') ?></label>
        <span><?php echo $data['phone'] ?></span>
    </div>
    <div>
        <label><?php echo l('Ingredients') ?></label>
        <span><?php echo $data['ingredients'] ?></span>
    </div>
    <div>
        <label><?php echo l('Dimension') ?></label>
        <span><?php echo $data['dimension'] ?></span>
    </div>
    <div>
        <label><?php echo l('Detail') ?></label>
        <span><?php echo $data['detail'] ?></span>
    </div>
    <div>
        <label><?php echo l('Images') ?></label>
        <div class="img-special-order">
            <?php foreach($data['images'] as $image): ?>
                <a href="<?php echo base_url('data/special_order/image/'.$image['image_name']) ?>">
                    <img width="200" height="200" src="<?php echo base_url('data/special_order/image/'.$image['image_name']) ?>">
                </a>
            <?php endforeach ?>
        </div>
    </div>
</fieldset>