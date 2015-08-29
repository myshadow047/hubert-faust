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
                <label><?php echo l('Brand Information') ?></label>
                <textarea id="brand_information" name="brand_information" placeholder="Brand Information"><?php echo set_value('brand_information') ?></textarea>
            </div>

            <div>
                <label><?php echo l('Term & Condition') ?></label>
                <textarea id="term" name="term" placeholder="Term & Condition"><?php echo set_value('term') ?></textarea>
            </div>

            <div>
                <label><?php echo l('Freight & Rules') ?></label>
                <textarea id="freight" name="freight" placeholder="Freight & Rules"><?php echo set_value('freight') ?></textarea>
            </div>

            <div>
                <label><?php echo l('Claim Rules') ?></label>
                <textarea id="claim" name="claim" placeholder="Claim Rules"><?php echo set_value('claim') ?></textarea>
            </div>

    </fieldset>
    <div class="action-buttons btn-group">
        <input type="submit" />
        <a href="<?php echo site_url($CI->_get_uri('listing')) ?>" class="btn cancel"><?php echo l('Cancel') ?></a>
    </div>
</form>

<script type="text/javascript">
    CKEDITOR.config.width = '80%';
    CKEDITOR.config.toolbar = [
        { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
        { name: 'inserts', items: ['HorizontalRule', 'SpecialChar'] },
        { name: 'basicstyles', items: ['Bold', 'Italic', 'Strike', '-', 'removeFormat'] },
        { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
    ];
    CKEDITOR.replace('brand_information');
    CKEDITOR.replace('term');
    CKEDITOR.replace('freight');
    CKEDITOR.replace('claim');
</script>