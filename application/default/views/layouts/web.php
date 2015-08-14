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

    <script type="text/javascript" src="<?php echo base_url('vendor/jquery/dist/jquery.min.js') ?>"></script>
</head>

<body>

    <nav class="nav-menu animated slideInDown">
        <div class="container">
            <div class="row">
                <ul class="topbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="logo">
                        <h1 class="brand">
                            <a href="index.php" class="desktop">Hubert &amp; Faust</a>
                            <a href="index.php" class="mobile">Hubert &amp; Faust</a>
                        </h1>
                        <div class="toggleDown">
                            <div class="menu-toggle-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="down">Products
                            <i class="xn xn-angle-down"></i>
                        </a>
                        <ul class="subMenu">
                            <li>
                                <a href="category.php">Category A</a>
                            </li>
                            <li>
                                <a href="category.php">Category B</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="special-order.php">Special Order</a></li>
                </ul>
            </div>
            <div class="toggleMenu">
                <ul>
                    <li>
                        <a href="about.php" class="row">
                            <span>About Us</span>
                            <i class="xn xn-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="category.php" class="row">
                            <span>Category A</span>
                            <i class="xn xn-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="category.php" class="row">
                            <span>Category B</span>
                            <i class="xn xn-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="special-order.php" class="row">
                            <span>Special Order</span>
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


    <script type="text/javascript" src="<?php echo base_url('vendor/owl-carousel/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('themes/desktop/js/main.js') ?>"></script>

    <section class="footer">
        <div class="container">
            <div class="row">
                <nav class="copyLogo">
                    <p class="copyright">
                        <i class="logo"></i>
                        <span>
                            © 2015 Hubert &amp; Faust. Some right reserved.
                        </span>
                    </p>
                </nav>
                <hr>
                <nav class="findUs">
                    <p>Get in touch</p>
                    <ul class="social flat">
                        <li><a href="#" class="fb xn xn-facebook-square"></a></li>
                        <li><a href="#" class="pin xn xn-pinterest-square"></a></li>
                        <li><a href="#" class="ins xn xn-instagram"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</body>
</html>