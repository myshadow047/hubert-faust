<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Hubert &amp; Faust</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/naked-css/css/naked.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/lato/css/lato.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/jacket-awesome/dist/css/jacket-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/owl-carousel/owl-carousel/owl.carousel.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/owl-carousel/owl-carousel/owl.transitions.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/animate.css/animate.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/Easy-Responsive-Tabs-to-Accordion/css/easy-responsive-tabs.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('themes/desktop/css/main.css') ?>" />

    <script type="text/javascript" src="<?php echo base_url('vendor/jquery/dist/jquery.min.js') ?>"></script>
</head>

<body>

    <nav class="nav-menu animated slideInDown">
        <div class="container">
            <div class="row">
                <ul class="topbar">
                    <li>
                        <a class="down">Products
                            <i class="xn xn-angle-down"></i>
                        </a>
                        <ul class="subMenu">
                            <?php foreach($categories as $category): ?>
                                <li>
                                    <a href="<?php echo site_url('web/product/'.$category['id']) ?>"><?php echo $category['name'] ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('web/special_order') ?>">Special Order</a></li>
                    <li class="logo">
                        <h1 class="brand">
                            <a href="<?php echo base_url() ?>" class="desktop">Hubert &amp; Faust</a>
                            <a href="<?php echo base_url() ?>" class="mobile">Hubert &amp; Faust</a>
                        </h1>
                        <div class="toggleDown">
                            <div class="menu-toggle-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <p>Menu</p>
                        </div>
                    </li>
                    <li><a href="<?php echo site_url('web/news') ?>">News</a></li>
                    <li><a href="<?php echo site_url('web/about_us') ?>">About Us</a></li>
                </ul>
            </div>
            <div class="toggleMenu">
                <ul>
                    <?php foreach($categories as $category): ?>
                        <li>
                            <a href="<?php echo site_url('web/product/'.$category['id']) ?>" class="row">
                                <span><?php echo $category['name'] ?></span>
                                <i class="xn xn-angle-right"></i>
                            </a>
                        </li>
                    <?php endforeach ?>
                    <li>
                        <a href="<?php echo site_url('web/special_order') ?>" class="row">
                            <span>Special Order</span>
                            <i class="xn xn-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('web/news') ?>" class="row">
                            <span>News</span>
                            <i class="xn xn-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('web/about_us') ?>" class="row">
                            <span>About Us</span>
                            <i class="xn xn-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php if ($this->uri->original_uri == 'web/product/a'): ?>
        <section class="content container-fluid">
    <?php elseif ($this->uri->original_uri == '/'): ?>
        <section class="content home">
    <?php else: ?>
        <section class="content">
    <?php endif ?>
        <?php echo $this->load->view($CI->_view, $CI->_data, true) ?>
    </section>

    <section class="footer">
        <div class="container">
            <hr>
            <div class="row">
                <nav class="findUs">
                    <p>Get in touch</p>
                    <ul class="social flat">
                        <li><a href="#" class="fb xn xn-facebook-square"></a></li>
                        <li><a href="#" class="pin xn xn-pinterest-square"></a></li>
                        <li><a href="#" class="ins xn xn-instagram"></a></li>
                    </ul>
                </nav>
                <hr>
                <nav class="copyLogo">
                    <p class="copyright">
                        <span>
                            © 2015 Hubert &amp; Faust. Some right reserved.
                        </span>
                    </p>
                </nav>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="<?php echo base_url('vendor/owl-carousel/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendor/Easy-Responsive-Tabs-to-Accordion/js/easyResponsiveTabs.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('themes/desktop/js/main.js') ?>"></script>
    
</body>
</html>