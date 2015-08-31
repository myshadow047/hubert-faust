<div class="label">
    <hr>
    <h4>Promo</h4>
</div>
<article class="news">
    <div class="container">
        <div id="news" class="resp-vtabs">
            <div class="newsContent">
                <ul class="resp-tabs-list">
                    <li><i class="xn xn-bullhorn"></i> Promo</li>
                </ul>
                <section class="resp-tabs-container">
                    <div class="row">
                        <?php foreach($promos as $promo): ?>
                            <div class="promoBanner">
                                <a href="<?php echo site_url('web/detail_news') ?>">
                                    <img src="<?php echo base_url('data/product/image/'.$promo['image']['image_name']) ?>" alt="">
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</article>