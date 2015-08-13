<?php $title = l((empty($id) ? 'Add %s' : 'Edit %s'), array(l(humanize(get_class($CI))))) ?>

<?php
echo $this->admin_panel->breadcrumb(array(
    array('uri' => $CI->_get_uri('listing'), 'title' => l(humanize(get_class($CI)))),
    array('uri' => $CI->uri->uri_string, 'title' => $title),
))
?>
<div class="clearfix"></div>

<form action="<?php echo current_url() ?>" method="post" class="ajaxform" enctype="multipart/form-data">
    <fieldset>
        <legend><?php echo $title ?></legend>
            <div>
                <label><?php echo l('Category') ?></label>
                <?php echo form_dropdown('category', $categories) ?>
            </div>

            <div>
                <label><?php echo l('Product Name') ?></label>
                <input type="text" name="name" value="<?php echo set_value('name') ?>" placeholder="Product Name" />
            </div>

            <div>
                <label><?php echo l('Description Product') ?></label>
                <textarea name="description" placeholder="Description Product"><?php echo set_value('description') ?></textarea>
            </div>

            <div>
                <label><?php echo l('Ingredient') ?></label>
                <input type="text" name="ingredient" value="<?php echo set_value('ingredient') ?>" placeholder="Ingredient" />
            </div>

            <div>
                <label><?php echo l('Dimention') ?></label>
                <textarea name="dimention" placeholder="Dimention"><?php echo set_value('dimention') ?></textarea>
            </div>

            <?php if(!empty($images)): ?>
                <div>
                    <label><?php echo l('Image') ?></label>

                    <?php foreach($images as $image): ?>
                        <img width="200" src="<?php echo base_url('data/product/image/'.$image['image_name']) ?>">
                        <a href="<?php echo site_url('product/delete_one_image/'.$image['id'].'/'.$id) ?>">x</a>
                    <?php endforeach ?>
                </div>
            <?php else: ?>
                <div>
                    <label><?php echo l('Image') ?></label>
                    <input type="file" name="images[]" multiple>
                </div>
            <?php endif ?>

    </fieldset>
    <div class="action-buttons btn-group">
        <input type="submit" />
        <a href="<?php echo site_url($CI->_get_uri('listing')) ?>" class="btn cancel"><?php echo l('Cancel') ?></a>
    </div>
</form>