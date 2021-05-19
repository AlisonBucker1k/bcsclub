<?php global $config;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_NAME;?> - <?php echo $viewData['title'];?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo BASE_URL.'assets/geral/images/fav-icon.png';?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/animated-headline.css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/chosen.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/blog/';?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" />
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
            START HEADER AREA
================================= -->
<header class="header-area" style="<?php echo (isset($viewData['bg-color']))?"background-color: {$viewData['bg-color']};":''?>">
    <div class="header-top-bar bg-dark-opacity py-2 padding-right-30px padding-left-30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center header-top-info font-size-14">
                    <!-- <div class="user-chosen-select-container mr-3">
                        <select class="user-chosen-select">
                            <option value="1" selected>English</option>
                            <option value="2">Espanol</option>
                            <option value="3">Deutsch</option>
                            <option value="4">Türkçe</option>
                            <option value="5">Polski</option>
                            <option value="6">Português</option>
                            <option value="7">Italiano</option>
                            <option value="8">Dansk</option>
                            <option value="9">French</option>
                            <option value="10">German</option>
                        </select>
                    </div> -->
                    <!-- <p class="login-and-signup-wrap">
                        <a href="#" data-toggle="modal" data-target="#loginModal">
                            <span class="mr-1 la la-sign-in"></span>Login
                        </a>
                        <span class="or-text px-2">or</span>
                        <a href="#" data-toggle="modal" data-target="#signUpModal">
                            <span class="mr-1 la la-user-plus"></span>Sign Up
                        </a>
                    </p> -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 d-flex align-items-center justify-content-end header-top-info">
                    <span class="mr-2 text-white font-weight-semi-bold font-size-14">Siga-nos nas redes sociais:</span>
                    <ul class="social-profile social-profile-colored">
                        <?php if(!empty($config['facebook'])):?><li><a href="<?php echo $config['facebook'];?>" class="facebook-bg"><i class="lab la-facebook-f"></i></a></li><?php endif;?>
                        <?php if(!empty($config['twitter'])):?><li><a href="<?php echo $config['twitter'];?>" class="twitter-bg"><i class="lab la-twitter"></i></a></li><?php endif;?>
                        <?php if(!empty($config['instagram'])):?><li><a href="<?php echo $config['instagram'];?>" class="instagram-bg"><i class="lab la-instagram"></i></a></li><?php endif;?>
                        <!-- <li><a href="<?php echo $config[''];?>" class="dribbble-bg"><i class="la la-dribbble"></i></a></li> -->
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top-bar -->
    <div class="header-menu-wrapper padding-right-30px padding-left-30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="<?php echo BASE_URL;?>"><img src="<?php echo BASE_URL.'assets/geral/images/logo-bcs-clubw.png';?>" alt="logo bcs club" width="150px"></a>
                            <div class="d-flex align-items-center">
                                <!-- <a href="add-listing.html" class="btn-gray add-listing-btn-show font-size-24 mr-2 flex-shrink-0" data-toggle="tooltip" data-placement="left" title="Add Listing">
                                    <i class="la la-plus"></i>
                                </a> -->
                                <div class="menu-toggle">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div><!-- end menu-toggle -->
                            </div>
                        </div><!-- end logo -->
                        <div class="quick-search-form d-flex align-items-center">
                            <!-- <form action="#" class="w-100">
                                <div class="header-search position-relative">
                                    <i class="la la-search form-icon"></i>
                                    <input type="search" placeholder="What are you looking for?">
                                    <div class="instant-results">
                                        <ul class="instant-results-list">
                                            <li><a href="#" class="d-flex align-items-center"><span class="icon-element bg-1 mr-2"><i class="la la-glass"></i></span>Food & Drinks</a></li>
                                            <li><a href="#" class="d-flex align-items-center"><span class="icon-element bg-2 mr-2"><i class="la la-hotel"></i></span>Travel & Hotel</a></li>
                                            <li><a href="#" class="d-flex align-items-center"><span class="icon-element bg-3 mr-2"><i class="la la-cutlery"></i></span>Restaurants</a></li>
                                            <li><a href="#" class="d-flex align-items-center"><span class="icon-element bg-4 mr-2"><i class="la la-television"></i></span>Entertainment</a></li>
                                            <li><a href="#" class="d-flex align-items-center"><span class="icon-element bg-5 mr-2"><i class="la la-shopping-bag"></i></span> Shopping</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </form> -->
                        </div><!-- end quick-search-form -->
                        <div class="main-menu-content ml-auto">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="<?php echo BASE_URL;?>">home </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL.'pages/about/';?>">sobre</a>
                                    </li>
                                    <li>
                                        <a href="#">categorias <span class="la la-angle-down"></span></a>
                                        <div class="dropdown-menu-item <?php echo (count($viewData['listCategories']) > 6?'mega-menu':'');?>">
                                            <ul class="row no-gutters">
                                                <li class="col-lg-4 mega-menu-item">
                                                    <ul>
                                                        <?php for($q=0;$q<count($viewData['listCategories']);$q++):?>
                                                            <li><a href="<?php echo BASE_URL."categories/index/".$viewData['listCategories'][$q]['id'];?>"> <?php echo $viewData['listCategories'][$q]['title'];?> <!--<span class="ribbon">Hot</span>--></a></li>
                                                            <?php if($q == 7 || $q == 15 || $q == 22 || $q == 30 || $q == 34):?>
                                                                </ul>
                                                            </li>
                                                            <li class="col-lg-4 mega-menu-item">
                                                                <ul>
                                                            <?php endif;?>
                                                        <?php endfor;?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL."pages/contact";?>">contato </span></a>
                                        <!-- <ul class="dropdown-menu-item">
                                            <li><a href="blog-full-width.html">full width</a></li>
                                            <li><a href="blog-grid.html">blog grid</a></li>
                                            <li><a href="blog-left-sidebar.html">left sidebar </a></li>
                                            <li><a href="blog-right-sidebar.html">right sidebar </a></li>
                                            <li><a href="blog-single.html">blog detail</a></li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content --
                        <div class="nav-right-content">
                            <a href="add-listing.html" class="theme-btn gradient-btn shadow-none add-listing-btn-hide">
                                <i class="la la-plus mr-2"></i>Add Listing
                            </a>
                        </div>-- end nav-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->

<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area bg-gradient-gray padding-top-100px padding-bottom-30px position-relative">
    <span class="circle-bg circle-bg-1 position-absolute"></span>
    <span class="circle-bg circle-bg-2 position-absolute"></span>
    <span class="circle-bg circle-bg-3 position-absolute"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="<?php echo BASE_URL?>" class="foot-logo"><img src="<?php echo BASE_URL.'assets/geral/images/logo-bcs-club.png';?>" style="width: 200px;" alt="logo"></a>
                    </div><!-- end footer-logo -->
                    <ul class="list-items contact-links pt-3">
                        <li><span class="d-block text-color mb-1"><i class="la la-map mr-1 text-color-2"></i>Endereço:</span> Ed. Jusmar Rua Dr. Aristíddes Campos, 35- Sl 509, 5º Andar Centro, Vitória-Es</li>
                        <li><span class="d-block text-color mb-1"><i class="la la-phone mr-1 text-color-2"></i>Telefone:</span><a href="#">27 4105-3060</a></li>
                        <li><span class="d-block text-color mb-1"><i class="la la-envelope mr-1 text-color-2"></i>Email:</span><a href="#">contato@bcsclub.com.br</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="footer__title">Company</h4>
                    <div class="stroke-shape mb-3"></div>
                    <ul class="list-items">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="career.html">Careers</a></li>
                        <li><a href="blog-grid.html">Press</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Content Guidelines</a></li>
                        <li><a href="#">Ad Choices</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="footer__title">Discover</h4>
                    <div class="stroke-shape mb-3"></div>
                    <ul class="list-items">
                        <li><a href="#">Listhub Project Cost Guides</a></li>
                        <li><a href="#">The Local Listhub</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">Listhub Mobile</a></li>
                        <li><a href="blog-grid.html">Listhub Blog</a></li>
                        <li><a href="contact.html">Support</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="footer__title">Listhub for Business</h4>
                    <div class="stroke-shape mb-3"></div>
                    <ul class="list-items">
                        <li><a href="#">Claim your Business</a></li>
                        <li><a href="#">Advertise on Listhub</a></li>
                        <li><a href="#">Add Restaurant</a></li>
                        <li><a href="#">Business Support</a></li>
                        <li><a href="#">Products for Businesses</a></li>
                        <li><a href="#">Business Success Stories</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row pt-4 footer-action-wrap">
            <div class="col-lg-4">
                <h4 class="font-size-17 pb-3">Siga</h4>
                <ul class="social-profile social-profile-styled">
                    <?php if(!empty($config['facebook'])):?><li><a href="<?php echo $config['facebook']?>" class="facebook-bg" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="lab la-facebook-f"></i></a></li><?php endif;?>
                    <?php if(!empty($config['twitter'])):?><li><a href="<?php echo $config['twitter']?>" class="twitter-bg" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="lab la-twitter"></i></a></li><?php endif;?>
                    <?php if(!empty($config['instagram'])):?><li><a href="<?php echo $config['instagram']?>" class="instagram-bg" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="lab la-instagram"></i></a></li><?php endif;?>
                    <!-- <li><a href="#" class="dribbble-bg" data-toggle="tooltip" data-placement="top" title="Dribble"><i class="la la-dribbble"></i></a></li> -->
                </ul>
            </div>
            
        </div>
        <div class="section-block-2 my-4"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right d-flex align-items-center justify-content-between">
                    <p class="copy__desc">
                        &copy; Copyright BCS Bank <script> document.write(new Date().getFullYear()); </script>. Dev By
                        <span class="la la-heart-o"></span> by <a href="https://bckcode.com.br">BCKCode</a>
                    </p>
                    <ul class="list-items term-list text-right">
                        <li class="font-size-14"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                        <li class="font-size-14"><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- Modal -->
<div class="modal fade modal-container login-form" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center mh-bg">
                <h5 class="modal-title" id="loginModalTitle">Hey, Welcome back!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times-circle"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="form-box">
                    <div class="input-box">
                        <label class="label-text">Username or email</label>
                        <div class="form-group">
                            <span class="la la-user form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="text" placeholder="Username or email address">
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Password</label>
                        <div class="form-group">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="text" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="input-box d-flex align-items-center justify-content-between pb-4 user-action-meta">
                        <div class="custom-checkbox">
                            <input type="checkbox" id="keepMeSignedChb">
                            <label for="keepMeSignedChb" class="font-size-14">Keep me signed in</label>
                        </div>
                        <a href="javascript:void(0)" class="margin-bottom-10px lost-pass-btn font-size-14">Lost Password?</a>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn gradient-btn w-100">
                            <i class="la la-sign-in mr-1"></i> Login to Account
                        </button>
                        <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                            New to Listhub? <a class="text-color-2 signup-btn" href="javascript:void(0)">Create account</a>
                        </p>
                    </div>
                    <div class="icon-element font-size-16 font-weight-semi-bold mt-5 mb-4 mx-auto">
                        OR
                    </div>
                    <div class="text-center">
                        <p class="font-size-15 font-weight-medium">Login with your social network</p>
                        <ul class="social-profile social-profile-colored py-3">
                            <li>
                                <a href="#" class="google-bg mx-1" data-toggle="tooltip" data-placement="top" title="Google">
                                    <i class="lab la-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="facebook-bg mx-1" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg mx-1" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram-bg mx-1" data-toggle="tooltip" data-placement="top" title="Instagram">
                                    <i class="lab la-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-container signup-form" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center mh-bg-2">
                <h5 class="modal-title" id="signUpModalTitle">Welcome! create your listhub account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times-circle"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="form-box">
                    <div class="input-box">
                        <label class="label-text">Username</label>
                        <div class="form-group">
                            <span class="la la-user form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="text" placeholder="Username">
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Email</label>
                        <div class="form-group">
                            <span class="la la-envelope form-icon"></span>
                            <input class="form-control form-control-styled" type="email" name="text" placeholder="Email address">
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Password</label>
                        <div class="form-group">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="text" placeholder="Enter password">
                        </div>
                        <p class="font-size-14 mt-n2">Your password must be at least 6 characters long and must contain letters, numbers and special characters. Cannot contain whitespace.</p>
                    </div>
                    <div class="input-box py-4 user-action-meta">
                        <div class="custom-checkbox">
                            <input type="checkbox" id="agreeChb">
                            <label for="agreeChb" class="font-size-14">By signing up, you agree to our <a href="privacy-policy.html" class="text-color-2">Privacy Policy.</a></label>
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn gradient-btn w-100">
                            <i class="la la-user-plus mr-1"></i> Register Account
                        </button>
                        <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                            Already on Listhub? <a class="text-color-2 login-btn" href="javascript:void(0)">Log in</a>
                        </p>
                    </div>
                    <div class="icon-element font-size-16 font-weight-semi-bold mt-5 mb-4 mx-auto">
                        OR
                    </div>
                    <div class="text-center">
                        <p class="font-size-15 font-weight-medium">Connect with social network</p>
                        <ul class="social-profile social-profile-colored py-3">
                            <li>
                                <a href="#" class="google-bg mx-1" data-toggle="tooltip" data-placement="top" title="Google">
                                    <i class="lab la-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="facebook-bg mx-1" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="lab la-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg mx-1" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="lab la-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram-bg mx-1" data-toggle="tooltip" data-placement="top" title="Instagram">
                                    <i class="lab la-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <p class="font-size-15 pb-3">Don't worry, we never any post to your social profile.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-container recover-form" id="recoverModal" tabindex="-1" role="dialog" aria-labelledby="recoverModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center mh-bg">
                <h5 class="modal-title" id="recoverModalTitle">Reset password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times-circle"></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="font-size-15 font-weight-medium pb-3">
                    Enter your username or email to reset your password.
                    You will receive an email with instructions on how to reset your password. If you are experiencing problems
                    resetting your password <a href="contact.html" class="text-color-2">contact us</a> or <a href="#" class="text-color-2">send us an email</a>
                </p>
                <form method="post" class="form-box">
                    <div class="input-box">
                        <label class="label-text">Username or email</label>
                        <div class="form-group">
                            <span class="la la-user form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="text" placeholder="Username or email address">
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn gradient-btn w-100">
                            Get New Password <i class="la la-arrow-right ml-1"></i>
                        </button>
                        <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                            Not a member? <a class="text-color-2 signup-btn" href="javascript:void(0)">Create account</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Template JS Files -->
<script src="<?php echo BASE_URL.'assets/blog/';?>js/jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/jquery-ui.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/popper.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/owl.carousel.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/jquery.fancybox.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/animated-headline.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/chosen.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/moment.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/datedropper.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/waypoints.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/jquery.counterup.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/jquery-rating.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/tilt.jquery.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/jquery-supperslides.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/superslider-script.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/jquery.lazy.min.js"></script>
<script src="<?php echo BASE_URL.'assets/blog/';?>js/main.js"></script>
</body>
</html>