<article class="heroBanner">
    <?php foreach($banners as $banner): ?>
        <div class="bannerSlide">
            <a href="#" style="background: url(<?php echo base_url('data/banner/image/'.$banner['image']) ?>) center no-repeat; background-size: cover;"></a>
        </div>
    <?php endforeach; ?>
</article>

<article class="container-fluid">
    <div class="productView row">
        <div class="xlarge-3 large-3 medium-6 small-12 tiny-12 thumbArea">
            <div class="thumbView">
                <div class="image">
                    <a href="#" style="background: url(<?php echo base_url('themes/desktop/img/banner3.jpg') ?>) center no-repeat; background-size: cover;"></a>
                </div>
                <a href="#" class="animated fadeIn overlay promo">
                    <div class="desc">
                        <span class="category"><i class="xn xn-star-o"></i>Promo!</span>
                        <span class="name">Promo Product Product 1</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="xlarge-3 large-3 medium-6 small-12 tiny-12 thumbArea">
            <div class="thumbView">
                <div class="image">
                    <a href="#" style="background: url(<?php echo base_url('themes/desktop/img/banner2.jpg') ?>) center no-repeat; background-size: cover;"></a>
                </div>
                <a href="#" class="animated fadeIn overlay">
                    <div class="desc">
                        <span class="category">Category 1</span>
                        <span class="name">Name Product 1</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="xlarge-3 large-3 medium-6 small-12 tiny-12 thumbArea">
            <div class="thumbView">
                <div class="image">
                    <a href="#" style="background: url(<?php echo base_url('themes/desktop/img/banner1.jpg') ?>) center no-repeat; background-size: cover;"></a>
                </div>
                <a href="#" class="animated fadeIn overlay">
                    <div class="desc">
                        <span class="category">Category 2</span>
                        <span class="name">Name Product 2</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="xlarge-3 large-3 medium-6 small-12 tiny-12 thumbArea">
            <div class="thumbView">
                <div class="image">
                    <a href="#" style="background: url(<?php echo base_url('themes/desktop/img/banner4.jpg') ?>) center no-repeat; background-size: cover;"></a>
                </div>
                <a href="#" class="animated fadeIn overlay">
                    <div class="desc">
                        <span class="category">Category 3</span>
                        <span class="name">Name Product 3</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</article>