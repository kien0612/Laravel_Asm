<!DOCTYPE html>
<html lang="en">
    <!--
        **********************************************************************************************************
        Copyright (c) 2017 Webaashi.
        ********************************************************************************************************** 
        -->
    
<!-- Mirrored from webaashi.com/TF/html/aashi-fashion-shop-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2024 13:46:55 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Fashion Shop - Multipurpose Ecommerce Responsive Html Template" />
        <meta name="author" content="webaashi.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Fashion Shop - Multipurpose Ecommerce Responsive Html Template</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        <!-- Master Css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}"  id="colors">
       
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--//==Preloader Start==//-->
        <div class="preloader">
            <div class="thecube">
                <div class="loader"></div>
                <h4>Loading</h4>
            </div>
        </div>
        <!--//==Preloader End==//-->  
        <!--//==Header Start==//-->
        <header id="main-header">
            <!--//==Topbar Start==//-->
            <div id="top-bar" class="hidden-xs">
                <div class="container">
                    <div class="row">
                        <!--
                            <div class="col-md-6 col-sm-4 col-xs-12">
                            <form class="wa-search-bar">
                            <input type="text" name="search" placeholder="Search..">
                            <button type="submit" class="default-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                            </div>-->
                        <div class="col-md-4 col-sm-4">
                            <!-- Logo Desktop-->
                            <a class="logo hidden-xs" href="index.html">
                            <img class="site_logo" alt="Site Logo"  src="assets/img/logo.png" />
                            </a>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <form class="wa-search-bar marT10">
                                <input type="text" name="search" placeholder="Search..">
                                <button type="submit" class="default-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="col-md-3 col-sm-3 text-center">
                            <ul class="inline top-ecommerce-icons light-section-icon">
                                <li>
                                    <a href="#" class="whishlistIcon">
                                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                    <sup>03</sup>
                                    </a>
                                    <div class="shopping-cart">
                                        <a class="closeCart"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                        <ul class="shopping-cart-items">
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart1.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Product Title Here...</span></a>
                                                <span class="item-price">$849.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart2.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Product Title Here...</span></a>
                                                <span class="item-price">$1,249.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart3.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Mauris et pulvinar...</span></a>
                                                <span class="item-price">$129.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <span class="lighter-text pull-left">Total:</span>
                                                <span class="main-color-text pull-right">$2,229.97</span>
                                            </div>
                                        </div>
                                        <!--end shopping-cart-footer -->
                                        <a href="#" class="theme-button">Checkout</a>
                                    </div>
                                    <!--end shopping-cart -->
                                </li>
                                <li>
                                    <a href="#" class="userIcon">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <sup>User</sup>
                                    </a>
                                    <div class="user-menu">
                                        <a class="closeMenu"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                        <ul class="user-menu-items">
                                            <li class="clearfix">
                                                <a href="#">Account</a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#">Track Order</a>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end user-menu -->
                                </li>
                                <li>
                                    <a href="#" class="cartIcon">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>											
                                    <sup >03</sup>
                                    </a>
                                    <div class="shopping-cart">
                                        <a class="closeCart"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                        <ul class="shopping-cart-items">
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart1.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Product Title Here...</span></a>
                                                <span class="item-price">$849.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart2.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Product Title Here...</span></a>
                                                <span class="item-price">$1,249.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                            <li class="clearfix">
                                                <img src="assets/img/product/cart3.jpg" width="70" height="70" alt="cart item" />
                                                <a href="#"><span class="item-name">Mauris et pulvinar...</span></a>
                                                <span class="item-price">$129.99</span>
                                                <span class="item-quantity">x 01</span>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <span class="lighter-text pull-left">Total:</span>
                                                <span class="main-color-text pull-right">$2,229.97</span>
                                            </div>
                                        </div>
                                        <!--end shopping-cart-footer -->
                                        <a href="#" class="theme-button">Checkout</a>
                                    </div>
                                    <!--end shopping-cart -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--//==Topbar End==//-->
            <!--//==Navbar Start==//-->
            <div id="main-menu" class="wa-main-menu">
                <div class="wathemes-menu relative">
                    <div class="navbar navbar-default navbar-bg-light" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="navbar-header">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span></button> 
                                        <!-- Logo -->
                                        <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="index.html">
                                        <img class="site_logo" alt="Site Logo"  src="assets/img/logo-2.png" />
                                        </a>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <!-- Right nav Start -->
                                        <ul class="nav navbar-nav">
                                            <li><a href="index.html">Home</a></li>
                                            <li>
                                                <a href="#">Shop Pages <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="collection-grid-sidebar.html">Collection Grid Sidebar</a></li>
                                                    <li><a href="collection-list-sidebar.html">Collection List Sidebar</a></li>
                                                    <li><a href="collection-grid-fullwidth.html">Collection Grid fullwidth</a></li>
                                                    <li><a href="collection-list-fullwidth.html">Collection List fullwidth</a></li>
                                                    <li><a href="product-detail.html">Product detail</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu">
                                                <a href="#" class="has-submenu">Categories <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu wv_menu_color sm-nowrap">
                                                    <li>
                                                        <!-- Home Mage Menu grids Begins -->
                                                        <div class="row">
                                                            <!-- Home Variation 1 Block -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">E-Commerce</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">Collection</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">dresses</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">red</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">brandeds</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-sidebar.html">summer</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Home Variation 1 Block -->
                                                            <!-- Home Variation 2 Block -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Html</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">Top Collection</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">brandeds</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">summer</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">responsive</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-grid-fullwidth.html">Sink</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Home Variation 2 Block -->
                                                            <!-- One Page variation 1 -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">template</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">Bath Tub</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">Old Style</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">Collection</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">brands</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-sidebar.html">red</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- One Page variation 1 -->
                                                            <!-- One Page variation 2 -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Brand</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Quia dolori</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Dimile homini</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Pulvinar risus</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="collection-list-fullwidth.html">Tincidunt </a>
                                                                    </div>
                                                                    <div>																		
                                                                        <a href="collection-list-fullwidth.html">Asoori Drrm</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- One Page variation 2 -->
                                                        </div>
                                                        <!-- Ends Home Mage Menu Block -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pages <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="404.html">404 Error page</a></li>
                                                    <li><a href="FAQ.html">FAQs</a></li>
                                                    <li><a href="login-area.html">Login Area</a></li>
                                                    <li><a href="default-page.html">Default Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">blog <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a> 
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-style1.html">Blogs List Style1</a></li>
                                                    <li><a href="blog-style3.html">Blogs List Style2</a></li>
                                                    <li><a href="blog-style2.html">Blogs Grid Sidebar</a></li>
                                                    <li><a href="blog-style4.html">Blogs Grid Fullwidth</a></li>
                                                    <li>
                                                        <a href="#">Blog Detail</a>										  
                                                        <ul class="dropdown-menu">
                                                            <li><a href="blog-single-sidebar.html">With Sidebar</a></li>
                                                            <li><a href="blog-single-full-width.html">Without Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <!-- /.Right nav  End-->
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.nav Col -->
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="hidden-lg hidden-md hidden-sm">
                                        <ul class="inline top-ecommerce-icons light-section-icon">
                                            <li>
                                                <a href="#" class="whishlistIcon">
                                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                                <sup>03</sup>
                                                </a>
                                                <div class="shopping-cart">
                                                    <a class="closeCart"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                                    <ul class="shopping-cart-items">
                                                        <li class="clearfix">
                                                            <img src="assets/img/product/cart1.jpg" width="70" height="70" alt="cart item" />
                                                            <a href="#"><span class="item-name">Product Title Here...</span></a>
                                                            <span class="item-price">$849.99</span>
                                                            <span class="item-quantity">x 01</span>
                                                        </li>
                                                        <li class="clearfix">
                                                            <img src="assets/img/product/cart2.jpg" width="70" height="70" alt="cart item" />
                                                            <a href="#"><span class="item-name">Product Title Here...</span></a>
                                                            <span class="item-price">$1,249.99</span>
                                                            <span class="item-quantity">x 01</span>
                                                        </li>
                                                        <li class="clearfix">
                                                            <img src="assets/img/product/cart3.jpg" width="70" height="70" alt="cart item" />
                                                            <a href="#"><span class="item-name">Mauris et pulvinar...</span></a>
                                                            <span class="item-price">$129.99</span>
                                                            <span class="item-quantity">x 01</span>
                                                        </li>
                                                    </ul>
                                                    <div class="shopping-cart-footer">
                                                        <div class="shopping-cart-total">
                                                            <span class="lighter-text pull-left">Total:</span>
                                                            <span class="main-color-text pull-right">$2,229.97</span>
                                                        </div>
                                                    </div>
                                                    <!--end shopping-cart-footer -->
                                                    <a href="#" class="theme-button">Checkout</a>
                                                </div>
                                                <!--end shopping-cart -->
                                            </li>
                                            <li>
                                                <a href="#" class="userIcon">
                                                <i class="fa fa-user-o" aria-hidden="true"></i>
                                                <sup>User</sup>
                                                </a>
                                                <div class="user-menu">
                                                    <a class="closeMenu"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                                    <ul class="user-menu-items">
                                                        <li class="clearfix">
                                                            <a href="#">Account</a>
                                                        </li>
                                                        <li class="clearfix">
                                                            <a href="#">Track Order</a>
                                                        </li>
                                                        <li class="clearfix">
                                                            <a href="#">Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end user-menu -->
                                            </li>
                                            <li>
                                                <a href="#" class="cartIcon">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>											
                                                <sup >03</sup>
                                                </a>
                                                <div class="shopping-cart">
                                                    <a class="closeCart"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                                    <ul class="shopping-cart-items">
                                                        <li class="clearfix">
                                                            <img src="assets/img/product/cart1.jpg" width="70" height="70" alt="cart item" />
                                                            <a href="#"><span class="item-name">Product Title Here...</span></a>
                                                            <span class="item-price">$849.99</span>
                                                            <span class="item-quantity">x 01</span>
                                                        </li>
                                                        <li class="clearfix">
                                                            <img src="assets/img/product/cart2.jpg" width="70" height="70" alt="cart item" />
                                                            <a href="#"><span class="item-name">Product Title Here...</span></a>
                                                            <span class="item-price">$1,249.99</span>
                                                            <span class="item-quantity">x 01</span>
                                                        </li>
                                                        <li class="clearfix">
                                                            <img src="assets/img/product/cart3.jpg" width="70" height="70" alt="cart item" />
                                                            <a href="#"><span class="item-name">Mauris et pulvinar...</span></a>
                                                            <span class="item-price">$129.99</span>
                                                            <span class="item-quantity">x 01</span>
                                                        </li>
                                                    </ul>
                                                    <div class="shopping-cart-footer">
                                                        <div class="shopping-cart-total">
                                                            <span class="lighter-text pull-left">Total:</span>
                                                            <span class="main-color-text pull-right">$2,229.97</span>
                                                        </div>
                                                    </div>
                                                    <!--end shopping-cart-footer -->
                                                    <a href="#" class="theme-button">Checkout</a>
                                                </div>
                                                <!--end shopping-cart -->
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carousel slide advert-single menubar-ads carousel-fade hidden-xs">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <figure><a href="#"><img src="assets/img/all/1.png" alt=""></a></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                </div>
            </div>
            <!--//==Navbar End==//-->
        </header>
        <!--//==Header End==//-->
        <!--//=======Main Slider=======//--> 	 			
        <div class="wa_main_bn_wrap">
            <div id="home1-main-slider" class="owl-carousel owl-theme">
                <div class="item">
                    <figure>
                        <img src="assets/img/slider/1.jpg" class="hidden-xs hidden-sm " alt=""/>
                        <img src="assets/img/slider/1xs.jpg" class="hidden-lg hidden-md" alt=""/>
                        <figcaption>
                            <div class="container">
                                <span class="special">latest Collection</span>								
                                <h2><span>Smart is the New Sexy</span></h2>
                                <span>flat 60% off for first 30 Customer.</span>
                                <p>Quis est tam dissimile homini. Quia dolori non voluptas.</p>
                                <a href="collection-grid-sidebar.html" class="theme-button wa-theme-bg">Shop Now</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="assets/img/slider/2.jpg" class="hidden-xs hidden-sm " alt=""/>
                        <img src="assets/img/slider/2xs.jpg" class="hidden-lg hidden-md" alt=""/>
                        <figcaption>
                            <div class="container">
                                <span class="special">Sexy Collection</span>								
                                <h2><span>Being a Sexy Is Not Crime</span></h2>
                                <span>flat 60% off for first 30 Customer.</span>
                                <p>Quis est tam dissimile homini. Quia dolori non voluptas.</p>
                                <a href="collection-grid-sidebar.html" class="theme-button wa-theme-bg">Shop Now</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="item">
                    <figure>
                        <img src="assets/img/slider/3.jpg" class="hidden-xs hidden-sm" alt=""/>
                        <img src="assets/img/slider/3xs.jpg" class="hidden-lg hidden-md" alt=""/>
                        <figcaption>
                            <div class="container">
                                <span class="special">Fashion Style</span>
                                <h2><span>Branded Collections</span></h2>
                                <span>flat 60% off for first 30 Customer.</span>
                                <p>Quis est tam dissimile homini. Quia dolori non voluptas.</p>
                                <a href="collection-grid-sidebar.html" class="theme-button wa-theme-bg">Shop Now</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <!--//=======Main Slider End=======//--> 
        <!--//=============Services Start============//-->
        <section class="services text-center padTB100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            <!--//==Services Item Start==//-->
                            <div class="col-md-3 col-sm-3">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h4>Free Shipping</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//==Services Item End==//-->
                            <!--//==Services Item Start==//-->
                            <div class="col-md-3 col-sm-3">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <i class="fa fa-headphones" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h4>24/7 Support</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//==Services Item End==//-->
                            <!--//==Services Item Start==//-->
                            <div class="col-md-3 col-sm-3">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h4>Money back</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//==Services Item End==//-->	
                            <!--//==Services Item Start==//-->
                            <div class="col-md-3 col-sm-3">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h4>FREE COUPONS</h4>
                                    </div>
                                </div>
                            </div>
                            <!--//==Services Item End==//-->	
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=============Services End============//-->
        <!--//=========Adverts Section Start=========//-->
        <div class="page_single banner-ads marB0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <figure class="banners-border">
                            <a href="collection-grid-fullwidth.html"><img src="assets/img/banners/3.jpg" alt="Thumbnail"></a>						  
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <figure class="banners-border">
                            <a href="collection-grid-fullwidth.html"><img src="assets/img/banners/4.jpg" alt="Thumbnail"></a>						  
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <figure class="banners-border">
                            <a href="collection-grid-fullwidth.html"><img src="assets/img/banners/5.jpg" alt="Thumbnail"></a>						  
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!--//=========Adverts Section End=========//-->
        <!--//=============product Start============//-->
        <div class="wa-products-main padTB100">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Latest product <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                            tristique sit amet odio sit amet aliquet.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                </div>
                <div class="row" id="MixItUp1">
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-1.jpg" alt="">						
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix " >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-4.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-5.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix " >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-6.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-7.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-8.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-9.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix " >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-10.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-11.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix" >
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-12.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">Product Title</a></h2>
                                <div class="clear"></div>
                                <ul class="ratings">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                </ul>
                                <div class="clear"></div>
                                <span class="price">
                                <del>$200</del>
                                $100
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!--//=============product End============//-->	
        <!--//=======Banner Section Start=======//--> 
        <section class="banners-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="latest-banners-item">
                                <div class="wa-banners">
                                    <div class="wa-banners-thumbnail item our-banners-item wa-item">
                                        <img src="assets/img/banners/1.jpg" alt="">
                                        <div class="caption">
                                            <div class="caption-text">
                                                <div class="clear"></div>
                                                <div class="wa-banners-caption text-left">
                                                    <span class="special">Branded Watches</span>
                                                    <h2>UP TO 60% OFF</h2>
                                                    <div class="clear"></div>
                                                    <a href="collection-grid-fullwidth.html" class="theme-button marT10">view detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="latest-banners-item">
                                <div class="wa-banners">
                                    <div class="wa-banners-thumbnail item our-banners-item wa-item">
                                        <img src="assets/img/banners/2.jpg" alt="">
                                        <div class="caption">
                                            <div class="caption-text">
                                                <div class="clear"></div>
                                                <div class="wa-banners-caption text-right">
                                                    <span class="special">top Selling Bags</span>
                                                    <h2>UP TO 60% OFF</h2>
                                                    <div class="clear"></div>
                                                    <a href="collection-grid-fullwidth.html" class="theme-button marT10">view detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=======Banner Section End=======//-->
        <!--//=============Best Seller Section Start============//-->
        <div class="wa-products-main padT100 padB80">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Best Seller <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                            tristique sit amet odio sit amet aliquet.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                </div>
                <div class="row">
                    <div id="best-seller" class="owl-carousel owl-theme carousel-style-1">
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/front-1.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>$200</del>
                                    $100
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/back-2.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>$200</del>
                                    $100
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/front-3.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>$200</del>
                                    $100
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/back-4.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>$200</del>
                                    $100
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12" >
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/back-5.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>$200</del>
                                    $100
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12">
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/back-6.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>$200</del>
                                    $100
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12">
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/back-7.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>$200</del>
                                    $100
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--//==product Item==//-->
                        <div class="col-md-12">
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/back-9.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-products-caption">
                                    <h2><a href="product-detail.html">Product Title</a></h2>
                                    <div class="clear"></div>
                                    <ul class="ratings">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                    <span class="price">
                                    <del>$200</del>
                                    $100
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!--//=============Best Seller Section End============//-->	
        <!--//=======Collection Section Start=======//--> 
        <section class="collection-section collection-res padB100">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="assets/img/collection/4.jpg" class="hidden-xs hidden-sm " alt=""/>
                                    <img src="assets/img/collection/4-xs.jpg" class="hidden-lg hidden-md" alt=""/>	
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <span class="special">New Brand</span>
                                                <h2>Designer Product</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="latest-collection-item">
                            <div class="wa-collection active">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="assets/img/collection/2.jpg" class="hidden-xs hidden-sm " alt=""/>
                                    <img src="assets/img/collection/3-xs.jpg" class="hidden-lg hidden-md" alt=""/>	
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <span class="special">New Brand</span>
                                                <h2>New Brand</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-4 col-sm-6 pull-right">
                        <div class="latest-collection-item">
                            <div class="wa-collection">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="assets/img/collection/3.jpg" class="hidden-xs hidden-sm " alt=""/>
                                    <img src="assets/img/collection/2-xs.jpg" class="hidden-lg hidden-md" alt=""/>	
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <span class="special">New Brand</span>
                                                <h2>Collection Title</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="latest-collection-item">
                            <div class="wa-collection active">
                                <div class="wa-collection-thumbnail item our-collection-item wa-item">
                                    <img src="assets/img/collection/1.jpg" class="hidden-xs hidden-sm " alt=""/>
                                    <img src="assets/img/collection/1-xs.jpg" class="hidden-lg hidden-md" alt=""/>									
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <span class="special">New Brand</span>
                                                <h2>Latest Men collections</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=======Collection Section End=======//-->	
        <!--//=========Home Blogs Start=========//-->	 
        <section class="blogs_main home-blogs-main padTB100 grey-bg">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Our  Blog <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                            tristique sit amet odio sit amet aliquet.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="wa-theme-design-block strict-no-border marB30">
                                    <div class="col-md-12 col-sm-5">
                                        <div class="row">
                                            <figure class="dark-theme">
                                                <img src="assets/img/all/wa-blog-01.jpg" alt="Thumbnail">   
                                                <div class="hover-style"></div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-7">
                                        <div class="row">
                                            <div class="blog-list-caption block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris pulvinar lorem</a></h4>
                                                <div class="meta-block">
                                                    <ul class="inline">
                                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> john doe</a></li>
                                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> May 30 2017 </a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Offal yuccie meggings everyday carry skateboard direct trade, tumblr literally migas biodiesel vinyl banjo. Offal yuccie meggings everyday carry skateboard direct trade, tumblr 
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="wa-theme-design-block strict-no-border marB30">
                                    <div class="col-md-6 col-sm-5 pull-right">
                                        <div class="row">
                                            <figure class="dark-theme">
                                                <img src="assets/img/all/wa-blog-2.jpg" alt="Thumbnail">   
                                                <div class="hover-style"></div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-7">
                                        <div class="row">
                                            <div class="blog-list-caption block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris pulvinar lorem</a></h4>
                                                <div class="meta-block">
                                                    <ul class="inline">
                                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> john doe</a></li>
                                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> May 30 2017 </a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Offal yuccie meggings everyday carry skateboard direct trade, tumblr literally migas biodiesel vinyl banjo.
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-theme-design-block strict-no-border marB30">
                                    <div class="col-md-6 col-sm-5">
                                        <div class="row">
                                            <figure class="dark-theme">
                                                <img src="assets/img/all/wa-blog-3.jpg" alt="Thumbnail">   
                                                <div class="hover-style"></div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-7">
                                        <div class="row">
                                            <div class="blog-list-caption block-caption">
                                                <h4><a href="blog-single-sidebar.html">Mauris pulvinar lorem</a></h4>
                                                <div class="meta-block">
                                                    <ul class="inline">
                                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> john doe</a></li>
                                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> May 30 2017 </a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Offal yuccie meggings everyday carry skateboard direct trade, tumblr literally migas biodiesel vinyl banjo.
                                                </p>
                                                <a href="blog-single-sidebar.html" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=========Home Blogs End=========//-->	
        <!--//=========Partners Start=========//-->
        <section class="wa-partners padTB100">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Partners With Us<span class="heading-border"></span></h2>
                            <div class="clear"></div>
                            <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                            tristique sit amet odio sit amet aliquet.</em>
                        </div>
                    </div>
                    <!--//==Section Heading End==//-->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="wa-partner-carousel owl-carousel-style1 text-center owl-carousel owl-theme">
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="assets/img/partner/1.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="assets/img/partner/2.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="assets/img/partner/3.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="assets/img/partner/4.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="assets/img/partner/5.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="assets/img/partner/6.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="assets/img/partner/7.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="assets/img/partner/8.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=========Partners End=========//-->	
        <!--//=========instagram-gallery start=========//-->	
        <div class="instagram-gallery page_single">
            <div class="container-fluid">
                <div class="row">
                    <div class="insta-waterark">
                        <h4>Instagram</h4>
                    </div>
                    <div id="insta-gallery" class="owl-carousel owl-theme carousel-style-2">
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-1.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-2.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-3.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-4.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-5.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-6.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-7.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-8.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-1.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-2.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-3.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <figure class="dark-theme">
                                    <img src="assets/img/all/wa-blog-4.jpg" alt="Thumbnail">   
                                    <div class="hover-style"></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//=========instagram-gallery end=========//-->
        <!--//=========Footer Start=========//-->
        <footer id="main-footer" class="dark-footer footer-style1">
            <!--Upper Footer Block-->
            <div class="upper-footer wv_footer">
                <div class="container">
                    <div class="row pad-s15">
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced Search</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp; Condition</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>Category</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced Search</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp; Condition</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h4>Account</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced Search</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp; Condition</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget contact-widget">
                                <h4>Contact</h4>
                                <p>
                                    At vero eos et accusamus et iusto lits agnissmos ducimus.
                                </p>
                                <p><span class="rounded-icon"><i class="fa fa-map-marker"></i></span>PO Box 16122 Collins Street <br>
                                    West Victoria 8007 Australia
                                </p>
                                <p><span class="rounded-icon"><i class="fa fa-phone"></i></span>+123 456 7890 <br>
                                    +123 456 7890
                                </p>
                                <p><span class="rounded-icon"><i class="fa fa-envelope-o"></i></span>+123 456 7890<br>
                                    +123 456 7890
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//=============Newsletter Start============//-->
            <div class="newsletter">
                <div class="container">
                    <div class="padTB30 row">
                        <!--//==Section Heading Start==//-->
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="news-letter-title">
                                <h3>Sign Up For Newsletter</h3>
                                <div class="clear"></div>
                                <p>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem.</p>
                            </div>
                        </div>
                        <!--//==Section Heading End==//-->
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <form class="wa-news-letter marT10 marB10">
                                <input type="text" name="search" placeholder="Search..">
                                <button type="submit" class="default-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--//=============Newsletter End============//-->           
            <!--Copyright Footer Block-->
            <div class="bottom-footer">
                <div class="container">
                    <div class="row pad-s15">
                        <div class="col-md-12 copy-right text-center">
                            <p>Copyright &copy; 2017 Fashion Shop, All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//=========Footer End=========//--> 
        <!--//=========Newsletter Popup Start =========//-->	 
        {{-- <section id="newsLetterPopup" class="news-letter-popup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                        <div class="popup-inner">
                            <a href="#" class="close-news-letter"><i class="fa fa-times"></i></a>							
                            <div class="special-style col-md-offset-0 pull-right">
                                <div class="bg-image" style="background-image:url('assets/img/backgrounds/bg4.jpg');"></div>
                            </div>
                            <div class="popup-content">
                                <div class="col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0 marT100 marB100 popup-data">
                                    <div class="left-title">
                                        <h2>Sign Up For Newsletter <span class="heading-border"></span></h2>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                    <p>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt . Maecenas tristique sit</p>
                                    <form class="wa-news-letter marT10 marB10">
                                        <input type="text" name="search" placeholder="Search..">
                                        <button type="submit" class="default-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </form>
                                    <div class="popup-showout"><input id="stop-popup" type="checkbox" name="stop-popup" value="stop-popup"><label for="stop-popup"> Do not show popup again<span></span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--//=========Newsletter Popup End=========//-->	
        <!--//=========Quickview Popup Start =========//-->	 
        <section class="quick-view-popup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                        <div class="popup-inner">
                            <a href="#" class="close-quick-view"><i class="fa fa-times"></i></a>
                            <div class="popup-content padT15 padB15">
                                <div class="prod-info-section">
                                    <div class="clearfix">
                                        <!--Thumbnail Column-->
                                        <div class="carousel-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="wa-product-main-image">
                                                <img src="assets/img/product/8.jpg" alt="">
                                            </div>
                                        </div>
                                        <!--Content Column-->
                                        <div class="content-column col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="outer padT30">
                                                <div class="title-box">
                                                    <div class="inner marB30">
                                                        <h2 class="marB10">Product Title Here.</h2>
                                                        <p class="availability in-stock"><strong>Availability:</strong> <span>In stock</span></p>
                                                        <ul class="ratings">
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                        </ul>
                                                        <span class="price marB10">								
                                                        $100
                                                        <del>$200</del>														
                                                        <span class="clear"></span>
                                                        </span>
                                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <!--Options-->
                                                    <div class="prod-options marB10">
                                                        <div class="clearfix">
                                                            <div class="col-md-3 col-sm-3 padL0">
                                                                <div class="form-group">
                                                                    <label><strong>Qty :</strong> </label>
                                                                    <div class="clear"></div>
                                                                    <input type="number" name="qty" value="2" max="10" min="0" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-4 padL0">
                                                                <div class="form-group">
                                                                    <label><strong>Color :</strong> </label>
                                                                    <div class="clear"></div>
                                                                    <select name="sel-color">
                                                                        <option>Select Color</option>
                                                                        <option>Red</option>
                                                                        <option>Green</option>
                                                                        <option>Yellow</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 col-sm-5 padL0">
                                                                <div class="form-group">
                                                                    <label><strong>Size :</strong> </label>
                                                                    <div class="clear"></div>
                                                                    <select name="sel-color">
                                                                        <option>Select Size</option>
                                                                        <option>Small</option>
                                                                        <option>Medium</option>
                                                                        <option>Large</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Add-->
                                                <div class="add-options">
                                                    <button type="button" class="theme-button">Order Now</button>
                                                    <button type="button" class="theme-button"><span class="fa fa-heart"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//=========Quickview Popup End=========//-->	 
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <link href="assets/css/responsive.css" rel="stylesheet">

        <script src="assets/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/menu/js/hover-dropdown-menu.js"></script> 
        <script type="text/javascript" src="assets/plugins/menu/js/jquery.hover-dropdown-menu-addon.js"></script>	
        <script src="assets/plugins/owl-carousel/js/owl.carousel.js"></script>   
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from webaashi.com/TF/html/aashi-fashion-shop-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2024 13:47:19 GMT -->
</html>