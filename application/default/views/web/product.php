<div class="label">
    <hr>
    <h4><?php echo $category['name'] ?></h4>
</div>

<article class="thumbnails row">
    <?php foreach($products as $product): ?>
        <div class="xlarge-3 large-3 medium-6 small-12 tiny-12 thumbArea">
            <div class="thumb">
                <a href="<?php echo site_url('web/product/'.$category['id'].'/detail/'.$product['product']) ?>">
                    <div class="image" style="background: url(<?php echo base_url('data/product/image/'.$product['image_name']) ?>) center no-repeat; background-size: cover;"></div>
                </a>
                <div class="desc animated zoomIn">
                    <a href="<?php echo site_url('web/product/'.$category['id'].'/detail/'.$product['product']) ?>"><?php echo $product['name'] ?></a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</article>

<?php if (!$this->input->is_ajax_request()): ?>
    <?php echo $this->pagination->create_links_product() ?>
<?php endif ?>

