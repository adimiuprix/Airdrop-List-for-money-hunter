<!doctype html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashy | Connections</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/public/media/favicon.png">

    <!-- Dependencies CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/flaticon/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/jvectormap/css/jquery-jvectormap-2.0.3.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/fullcalendar/main.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/select2/css/select2.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/bootstrap-colorpicker/bootstrap-colorpicker.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/flatpicker/css/flatpickr.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/quill/quill.core.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/quill/quill.snow.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/dependencies/meanmenu/css/meanmenu.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/app.css" type="text/css">

    <!-- Switcher Only -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/switcher/css/switcher.css" id="switcher-css" type="text/css" media="all">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400&amp;display=swap" rel="stylesheet">
</head>

<body>
    <!-- Page Loader Start -->
    <div id="preloader" class="preloader-wrap">
        <div class="preloader-content">
            <figure class="preloader-logo">
                <img src="<?= base_url(); ?>/public/media/logo.png" alt="Logo">
            </figure>
            <div class="preloader-text">Dashy</div>
        </div>
    </div>
    <!-- Page Loader End -->
    <a href="#main-wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <div id="main-wrapper" class="dsy-main-wrapper">
        <div class="dsy-page">
            <div class="dsy-page-content horizontal-menu">
                <header class="header">
                    <div class="header-menu" id="header-menu">
                        <div class="container">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-2">
                                    <div class="logo-area">
                                        <a href="<?php echo base_url(); ?>" class="temp-logo">
                                            <img src="<?= base_url(); ?>/public/media/logo-large.png" alt="logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-10 position-static d-flex justify-content-end">
                                    <nav id="dropdown" class="template-main-menu" style="display: block;">
                                        <ul>
                                            <li>
                                                <a href="<?php echo base_url('/'); ?>"><i class="flaticon-null-1"></i>Homepage</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(''); ?>"><i class="flaticon-null-28"></i>News</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(''); ?>"><i class="flaticon-star"></i>Hot Airdrop</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(''); ?>"><i class="flaticon-null-1"></i>Price</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(''); ?>"><i class="flaticon-null-1"></i>About</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(''); ?>"><i class="flaticon-null-1"></i>Listing</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <?= $this->renderSection('content') ?>

                <!--=====================================-->
                <!--=       	Footer Start     		=-->
                <!--=====================================-->
                <footer class="footer-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="copyright-text">© 2020 <span>lorem ipsum</span>.</div>
                            </div>
                            <div class="col-sm-6">
                                <ul class="footer-link">
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>    
    <!-- Dependencies Js -->
    <script src="<?= base_url(); ?>/public/dependencies/jquery/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/popper.js/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/chart.js/js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/apexchart/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/apexchart/irregular-data-series.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/apexchart/ohlc.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/jvectormap/js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/jvectormap/js/jquery-jvectormap-world-mill.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/jvectormap/js/jquery-jvectormap-us-aea.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/jvectormap/js/gdp-data.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/fullcalendar/main.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/select2/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/flatpicker/js/flatpickr.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/quill/quill.min.js"></script>
    <script src="<?= base_url(); ?>/public/dependencies/meanmenu/js/jquery.meanmenu.min.js"></script>
    <script src="<?= base_url(); ?>/public/assets/js/chart.js"></script>
    <script src="<?= base_url(); ?>/public/assets/js/apex-chart.js"></script>
    <!-- Preloader Js -->
    <script src="<?= base_url(); ?>/public/dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <!-- Custom Js -->
    <script src="<?= base_url(); ?>/public/assets/js/app.js"></script>
    <!-- Switcher -->
    <script src="<?= base_url(); ?>/public/switcher/js/switcher.js"></script>
    <?php
        // File PHP
        $base_url = base_url();
    ?>
    <script>
    /*-------------------------------------
    MeanMenu activation code
    --------------------------------------*/
    if ($.fn.meanmenu) {
        $('nav#dropdown').meanmenu({
            siteLogo: "<div class='mobile-menu-nav-back'><a class='logo-mobile' href='<?php echo $base_url; ?>'><img src='<?php echo $base_url; ?>public/media/mobile-logo.png' alt='logo' class='img-fluid'/></a></div>",
            meanMenuOpen:"<span></span><span></span><span></span>",
            meanScreenWidth: "767"
        });
    }
    </script>
</body>

</html>