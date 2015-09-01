<div class="header">
    <div class="pull-left"><?php echo $this->admin_panel->breadcrumb() ?></div>
    <div class="pull-right btn-group"></div>
    <div class="clearfix"></div>
</div>

<div class="grid-top">
    <div class="pull-left btn-group"></div>
    <div class="pull-right"></div>
    <div class="clearfix"></div>
</div>

<?php echo $this->listing_grid->show($data['items']) ?>
