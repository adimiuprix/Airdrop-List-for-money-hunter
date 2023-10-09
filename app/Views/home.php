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
                                                <a href="<?php echo base_url(); ?>"><i class="flaticon-null-1"></i>Homepage</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('hot'); ?>"><i class="flaticon-null-1"></i>Hot Airdrop</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>"><i class="flaticon-null-1"></i>Price</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>"><i class="flaticon-null-1"></i>About</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>"><i class="flaticon-null-1"></i>Listing</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!--=====================================-->
                <!--=         Connections Start         =-->
                <!--=====================================-->
                <div class="container">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="connections-page">
                            <div class="heading-area">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <h4 class="text-body text-xtrabold text-md-left text-center">Latest airdrops added to Airdrop King</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <?php foreach ($airdrops as $list) : ?>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="connection-box">
                                            <div class="item-img">
                                                <img src="<?= base_url(); ?>/public/media/airdroplist/1.jpeg" alt="Thumb">
                                            </div>
                                            <div class="item-content">
                                                <h3 class="item-title"><?= $list['name_project']; ?></h3>
                                                <div class="item-designation">Approx value</div>
                                                <div class="item-company">$<?= $list['value']; ?></div>
                                                <div class="social-area">
                                                    <div class="social-icon">
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                    </div>
                                                    <div class="btn-wrap">
                                                        <a href="<?= site_url('airdrop-detail/' . $list['slug']); ?>" class="item-btn">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <li><a href="#">Help</a></li>
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

    <script>var page_name = "connections.html";</script>
</body>

</html>