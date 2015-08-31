<div class="label">
    <hr>
    <h4>Detail <?php echo $product['name'] ?></h4>
</div>
<article class="detail">
    <div class="container">
        <div class="row">
            <div class="xlarge-6 large-6 medium-6 small-12 tiny-12 detailContent">
                <div class="wrapper">
                    <div id="sync1" class="imageDetail">
                        <?php foreach($product['images'] as $image): ?>
                            <div class="easyzoom easyzoom--overlay">
                                <a href="<?php echo base_url('data/product/image/'.$image['image_name']) ?>">
                                    <div class="image" style="background: url(<?php echo base_url('data/product/image/'.$image['image_name']) ?>) center no-repeat; background-size: cover;"></div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div id="sync2" class="imagePagination">
                        <?php foreach($product['images'] as $image): ?>
                            <a href="<?php echo base_url('data/product/image/'.$image['image_name']) ?>">
                                <div class="image" style="background: url(<?php echo base_url('data/product/image/'.$image['image_name']) ?>) center no-repeat; background-size: cover;"></div>
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="xlarge-6 large-6 medium-6 small-12 tiny-12 detailContent">
                <div class="wrapper">
                    <div class="detailDesc">
                        <div class="titleArea">
                            <h3><?php echo $product['name'] ?></h3>
                            <div class="nextPrev">
                                <?php if($prev): ?>
                                    <a href="<?php echo site_url('web/product/'.$prev['category'].'/detail/'.$prev['id']) ?>" class="button">
                                        <i class="xn xn-angle-left"></i>
                                    </a>
                                <?php endif ?>

                                <?php if($next): ?>
                                    <a href="<?php echo site_url('web/product/'.$next['category'].'/detail/'.$next['id']) ?>" class="button">
                                        <i class="xn xn-angle-right"></i>
                                    </a>
                                <?php endif ?>
                            </div>
                        </div>
                        <h6>Product Description</h6>
                        <p>
                            <?php echo $product['description'] ?>
                        </p>
                        <hr>
                        <h6>Product Ingredients</h6>
                        <p>
                            <?php echo $product['ingredient'] ?>
                        </p>
                        <hr>
                        <h6>Dimentions</h6>
                        <p>
                            <?php echo $product['dimention'] ?>
                        </p>
                        <hr>
                        <h6>More Detail</h6>
                        <h4>
                            <a href="<?php echo 'mailto:'.$contact_us['email'].'?Subject=Ask%20Price' ?>" target="_top">
                                <i class="xn xn-envelope-o"></i>
                                Ask Price
                            </a>
                        </h4>
                        <hr>
                        <h6>Share</h6>
                        <ul class="share flat">
                            <li>
                                <a href="#" class="button">
                                    <i class="xn xn-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="button">
                                    <i class="xn xn-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="button">
                                    <i class="xn xn-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('themes/desktop/css/easyzoom.css') ?>">
<script type="text/javascript" src="<?php echo base_url('themes/desktop/js/easyzoom.js') ?>"></script>
<script>
    var $easyzoom = $('.easyzoom').easyZoom();
</script>

