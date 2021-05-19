<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrativo | <?php echo SITE_NAME;?></title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/animated-headline.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/chosen.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/blog/css/style.css">
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- end per-loader -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-wrap d-flex">
    <ul class="navbar-nav dashboard-sidebar">
        <li>
            <span id="sidebar-close">
                <i class="la la-times"></i>
            </span>
        </li>
        <li>
            <a class="sidebar-brand" href="<?php echo BASE_URL;?>">
                <img src="<?php echo BASE_URL;?>assets/geral/images/logo-bcs-clubw.png" width="145px" alt="logo">
            </a>
        </li>
        <li class="sidebar-heading pt-3">Principal</li>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo BASE_URL.'admin/';?>">
                <i class="la la-dashboard font-size-18 mr-1"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>">
                <i class="la la-shopping-bag font-size-18 mr-1"></i>
                <span>Adicionar Comércio</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard-bookmark.html">
                <i class="la la-bookmark font-size-18 mr-1"></i>
                <span>Bookmarks</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard-messages.html">
                <i class="la la-envelope font-size-18 mr-1"></i>
                <span>Messages <span class="badge badge-success">3</span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard-wallet.html">
                <i class="la la-wallet font-size-18 mr-1"></i>
                <span>Wallet</span>
            </a>
        </li> -->
        <li><hr class="sidebar-divider border-top-color"></li>
        <li class="sidebar-heading">Comercios</li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>admin/listPost">
                <i class="la la-file-text-o font-size-18 mr-1"></i>
                <span>Listar Comércios</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>admin/insertPost">
                <i class="la la-plus-circle font-size-18 mr-1"></i>
                <span>Adicionar Comércios</span>
            </a>
        </li>

        <li><hr class="sidebar-divider border-top-color"></li>
        <li class="sidebar-heading">Categorias</li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>admin/listCategories">
                <i class="la la-file-text-o font-size-18 mr-1"></i>
                <span>Listar Categorias</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>admin/insertCategory">
                <i class="la la-plus-circle font-size-18 mr-1"></i>
                <span>Adicionar Categoria</span>
            </a>
        </li>

        <li><hr class="sidebar-divider border-top-color"></li>
        <li class="sidebar-heading">Contatos</li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>admin/contacts">
                <i class="la la-file-text-o font-size-18 mr-1"></i>
                <span>Listar Contatos</span>
            </a>
        </li>
        
        <li><hr class="sidebar-divider border-top-color"></li>
        <li class="sidebar-heading">Conta</li>
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL;?>admin/logout">
                <i class="la la-power-off font-size-18 mr-1"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
    <div class="dashboard-body d-flex flex-column">
        <div class="dashboard-inner-body flex-grow-1">
            <nav class="navbar navbar-expand bg-navbar dashboard-topbar mb-4">
                <button id="sidebarToggleTop" class="btn rounded-circle mr-3">
                    <i class="la la-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle after-none" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-search"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="search-box">
                                <div class="input-group">
                                    <label class="input-label mb-0">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                    </label>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="la la-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle after-none" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-bell"></i>
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="generic-list-header">Alerts Center</h6>
                            <div class="generic-list scrollable-content scrollbar-hidden">
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-1">
                                        <i class="la la-file-alt text-white"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 12, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">A new monthly report is ready to download!</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-2">
                                        <i class="la la-donate"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 7, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">$290.29 has been deposited into your account!</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-3">
                                        <i class="la la-exclamation-triangle"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 4, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Spending Alert: We've noticed unusually high spending for your account.</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-4">
                                        <i class="la la-check-circle"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 1, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Your listing Hotel Govendor has been approved! </p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-5">
                                        <i class="la la-check-circle"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 1, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Your listing Burger House has been approved! </p>
                                    </div>
                                </a>
                            </div><!-- end generic-list -->
                            <a class="dropdown-item text-center small text-gray font-weight-medium py-2" href="#">Show All Alerts</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle after-none" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-envelope"></i>
                            <span class="badge badge-warning badge-counter">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="generic-list-header">Messages Center</h6>
                            <div class="generic-list scrollable-content scrollbar-hidden">
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img.jpg" alt="author-image">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Hi there! I am wondering if you can help me with a problem I've been having.</p>
                                        <p class="small text-gray">Udin Cilok · 1m</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img2.jpg" alt="author-image">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                        <p class="small text-gray">Joynal Ali · 4m</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img3.jpg" alt="author-image">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                        <p class="small text-gray">Colin Smith · 10m</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img4.jpg" alt="author-image">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                        <p class="small text-gray">Alex Smith · 1h</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img5.jpg" alt="author-image">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                        <p class="small text-gray">Kamran adi · Yesterday</p>
                                    </div>
                                </a>
                            </div><!-- end generic-list -->
                            <a class="dropdown-item text-center small text-gray font-weight-medium py-2" href="#">Read More Messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown border-left pl-3 ml-4">
                        <a class="nav-link dropdown-toggle after-none" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-thumb user-thumb-sm position-relative">
                                <img src="<?php echo BASE_URL;?>assets/blog/images/avatar-img.jpg" alt="author-image">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <span class="ml-2 small font-weight-medium d-none d-lg-inline">Alison Bucker</span>
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right animated--grow-in py-2" aria-labelledby="userDropdown">
                            <a class="dropdown-item text-color font-size-15" href="dashboard-my-profile.html">
                                <i class="la la-user mr-2 text-gray font-size-18"></i>
                                Profile
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="dashboard-messages.html">
                                <i class="la la-envelope mr-2 text-gray font-size-18"></i>
                                Messages
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="dashboard-booking.html">
                                <i class="la la-shopping-bag mr-2 text-gray font-size-18"></i>
                                Bookings
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="dashboard-bookmark.html">
                                <i class="la la-bookmark mr-2 text-gray font-size-18"></i>
                                Bookmarks
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="add-listing.html">
                                <i class="la la-plus-circle mr-2 text-gray font-size-18"></i>
                                Add Listing
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="index.html">
                                <i class="la la-power-off mr-2 text-gray font-size-18"></i>
                                Logout
                            </a>
                        </div> -->
                    </li>
                </ul>
            </nav><!-- end dashboard-topbar -->
            <div class="container-fluid dashboard-inner-body-container">
                <div class="breadcrumb-content d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="section-heading">
                        <h2 class="sec__title font-size-24 mb-0">Olá, Administrador!</h2>
                    </div>
                    <ul class="list-items bread-list bread-list-2">
                        <li><a href="index.html">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
                
				<?php $this->loadViewInTemplate($viewName, $viewData); ?>


            </div><!-- end dashboard-inner-body-container -->
        </div><!-- end dashboard-inner-body -->
        <div class="dashboard-footer bg-white">
            <div class="container-fluid">
                <div class="copy-right d-flex align-items-center justify-content-between">
                    <p class="copy__desc">
                        &copy; Copyright BCS Bank <script> document.write(new Date().getFullYear()); </script>. Dev
                        <span class="la la-heart-o"></span> By <a href="https://bckcode.com.br">BCKCode</a>
                    </p>
                    <!-- <ul class="list-items term-list text-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div><!-- end dashboard-body -->
</section>
<!-- ================================
    START DASHBOARD AREA
================================= -->

<!-- Template JS Files -->
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery-ui.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/popper.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/owl.carousel.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery.fancybox.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/animated-headline.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/chosen.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/moment.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/datedropper.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/waypoints.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/jquery.counterup.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/chart.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/line-chart.js"></script>
<script src="<?php echo BASE_URL;?>assets/blog/js/main.js"></script>
</body>
</html>