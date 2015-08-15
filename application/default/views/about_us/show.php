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
                <label><?php echo l('About Us') ?></label>
                <textarea id="about_us" name="about_us" placeholder="About Us"><?php echo set_value('about_us') ?></textarea>
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
    CKEDITOR.replace('about_us');
</script>