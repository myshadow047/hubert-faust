<section class="content home">
    <article class="heroBanner">
        <?php foreach($banners as $banner): ?>
            <div class="bannerSlide">
                <a href="#" style="background: url(<?php echo base_url('data/banner/image/'.$banner['image']) ?>) center no-repeat; background-size: cover;"></a>
            </div>
        <?php endforeach; ?>
    </article>

    <article class="container-fluid">
        <div class="productView row">
            <?php foreach($products as $k => $product): ?>
                <div class="xlarge-3 large-3 medium-6 small-12 tiny-12 thumbArea">
                    <div class="thumbView">
                        <div class="descript">
                            <a href="#">
                                <span class="category"><?php echo $product['category_name'] ?></span>
                                <hr>
                                <span class="name"><?php echo $product['name'] ?></span>
                            </a>
                        </div>
                        <div class="image">
                            <span class="hover animated fadeIn">
                                <h6>
                                    <?php echo word_limiter($product['description'], 10) ?>
                                    <a href="<?php echo site_url('web/product/'.$product['category'].'/detail/'.$product['id']) ?>">Read More <i class="xn xn-angle-right"></i></a>
                                </h6>
                            </span>
                            <a href="<?php echo site_url('web/product/'.$product['category'].'/detail/'.$product['id']) ?>" style="background: url(<?php echo base_url('data/product/image/'.$product['image']['image_name']) ?>) center no-repeat; background-size: cover;"></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <div class="xlarge-3 large-3 medium-6 small-12 tiny-12 thumbArea promoArea">
                <div class="promo">
                    <?php foreach($promos as $promo): ?>
                        <div class="thumbView">
                            <div class="descript">
                                <a href="detail.php">
                                    <span class="category">Promo</span>
                                    <hr>
                                    <span class="name"><?php echo $promo['name'] ?></span>
                                </a>
                            </div>
                            <div class="image">
                                <span class="promoImage"></span>
                                <span class="hover animated fadeIn">
                                    <h6>
                                        <?php echo word_limiter($promo['description'], 10) ?>
                                        <a href="<?php echo site_url('web/product/'.$promo['category'].'/detail/'.$promo['id']) ?>">Read More <i class="xn xn-angle-right"></i></a>
                                    </h6>
                                </span>
                                <div class="slideImage">
                                    <a href="<?php echo site_url('web/product/'.$promo['category'].'/detail/'.$promo['id']) ?>" style="background: url(<?php echo base_url('data/product/image/'.$promo['image']['image_name']) ?>) center no-repeat; background-size: cover;"></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </article>

    <article class="contact">
        <div class="container">
            <div class="contactArea row">
                <div class="xlarge-7 large-7 medium-7 small-12 tiny-12">
                    <div class="wrapper">
                        <div class="wording">
                            <h4>
                                <?php echo $about_us['tagline'] ?>
                            </h4>
                            <a href="<?php echo site_url('web/special_order') ?>" class="button">Special Order</a>
                        </div>
                    </div>
                </div>
                <div class="xlarge-5 large-5 medium-5 small-12 tiny-12">
                    <div class="wrapper">
                        <div class="contactUs">
                            <div class="rowInner">
                                <h3><i class="xn xn-envelope-o"></i>Email us:</h3>
                                <a href="mailto:mail@hubertfaust.com"><?php echo isset($contact_us['email'])? $contact_us['email'] : '' ?></a>
                            </div>
                            <hr>
                            <div class="rowInner">
                                <h3><i class="xn xn-mobile"></i>Call us:</h3>
                                <a href="tel:+622188888888"><?php echo isset($contact_us['phone'])? $contact_us['phone'] : '' ?></a>
                            </div>
                            <hr>
                            <div class="rowInner">
                                <h3><i class="xn xn-map-marker"></i>Address:</h3>
                                <p class="">
                                    <?php echo isset($contact_us['address'])? $contact_us['address'] : '' ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>