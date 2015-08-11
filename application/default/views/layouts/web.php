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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('themes/desktop/css/main.css') ?>" />
</head>
<body>
    <nav class="nav-menu">
        <div class="container">
            <div class="pull-left">
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
                </div>
            </div>
            <div class="pull-right">
                <ul class="flat topbar">
                    <li><a href="#">Home</a></li>
                    <li>
                        <a class="down">Products
                            <i class="xn xn-angle-down"></i>
                        </a>
                        <ul class="subMenu">
                            <li>
                                <a href="<?php echo base_url('') ?>">All Product</a>
                            </li>
                            <li>
                                <a href="#">Category A</a>
                            </li>
                            <li>
                                <a href="#">Category B</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">Special Order</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="toggleMenu">
            <ul>
                <li>
                    <a href="#" class="row">
                        <span>Home</span>
                        <i class="xn xn-angle-right"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="row">
                        <span>Category A</span>
                        <i class="xn xn-angle-right"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="row">
                        <span>Category B</span>
                        <i class="xn xn-angle-right"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="row">
                        <span>About Us</span>
                        <i class="xn xn-angle-right"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="row">
                        <span>Promo</span>
                        <i class="xn xn-angle-right"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="row">
                        <span>Special Order</span>
                        <i class="xn xn-angle-right"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="row">
                        <span>Contact Us</span>
                        <i class="xn xn-angle-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="content">
        <?php echo $this->load->view($CI->_view, $CI->_data, true) ?>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <p class="copyright">
                    <i class="logo"></i>
                    <span>
                        © 2015 Hubert &amp; Faust. Some right reserved.
                    </span>
                </p>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="<?php echo base_url('vendor/jquery/dist/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('vendor/owl-carousel/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('themes/desktop/js/main.js') ?>"></script>

</body>
</html>