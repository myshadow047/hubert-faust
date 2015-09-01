<style>
    fieldset.dashboard { text-align:center }
    fieldset.dashboard .coloum2 { width:25%; float:left; text-align:center; margin-bottom: 50px; }
    h3 { text-transform: uppercase; }
    .the-content a:hover {
        text-decoration: none;
    }
</style>
<fieldset class="dashboard">
    <legend><?php echo l('Hubert & Faust Admin') ?></legend>
    <div class="coloum2" >
        <div class="middle">
            <a href="<?php echo site_url('user') ?>">
                <div class="icon">
                    <img src="<?php echo base_url('themes/desktop/img/home_icon/user.png') ?>" width="100" height="100" alt="" />
                    <h3><?php echo l('User') ?></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="coloum2" >
        <div class="middle">
            <a href="<?php echo site_url('product') ?>">
                <div class="icon">
                    <img src="<?php echo base_url('themes/desktop/img/home_icon/product.png') ?>" width="100" height="100" alt="" />
                    <h3><?php echo l('Product') ?></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="coloum2" >
        <div class="middle">
            <a href="<?php echo site_url('special_order') ?>">
                <div class="icon">
                    <img src="<?php echo base_url('themes/desktop/img/home_icon/special_order.png') ?>" width="100" height="100" alt="" />
                    <h3><?php echo l('Special Order') ?></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="coloum2" >
        <div class="middle">
            <a href="<?php echo site_url('banner') ?>">
                <div class="icon">
                    <img src="<?php echo base_url('themes/desktop/img/home_icon/banner.png') ?>" width="100" height="100" alt="" />
                    <h3><?php echo l('Banner') ?></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="coloum2" >
        <div class="middle">
            <a href="<?php echo site_url('category') ?>">
                <div class="icon">
                    <img src="<?php echo base_url('themes/desktop/img/home_icon/category.png') ?>" width="100" height="100" alt="" />
                    <h3><?php echo l('Category') ?></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="coloum2" >
        <div class="middle">
            <a href="<?php echo site_url('about_us') ?>">
                <div class="icon">
                    <img src="<?php echo base_url('themes/desktop/img/home_icon/about_us.png') ?>" width="100" height="100" alt="" />
                    <h3><?php echo l('About Us') ?></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="coloum2" >
        <div class="middle">
            <a href="<?php echo site_url('contact_us') ?>">
                <div class="icon">
                    <img src="<?php echo base_url('themes/desktop/img/home_icon/contact_us.png') ?>" width="100" height="100" alt="" />
                    <h3><?php echo l('Contact Us') ?></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="coloum2" >
        <div class="middle">
            <a href="<?php echo site_url('social_media') ?>">
                <div class="icon">
                    <img src="<?php echo base_url('themes/desktop/img/home_icon/social_media.png') ?>" width="100" height="100" alt="" />
                    <h3><?php echo l('Social Media') ?></h3>
                </div>
            </a>
        </div>
    </div>
</fieldset>
