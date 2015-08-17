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
                <label><?php echo l('Email') ?></label>
                <input type="text" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
            </div>
            <div>
                <label><?php echo l('Phone') ?></label>
                <input type="text" name="phone" placeholder="phone" value="<?php echo set_value('phone') ?>">
            </div>
            <div>
                <label><?php echo l('Address') ?></label>
                <textarea id="address" name="address" placeholder="Address"><?php echo set_value('address') ?></textarea>
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
    CKEDITOR.replace('address');
</script>