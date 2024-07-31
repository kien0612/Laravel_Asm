<!DOCTYPE html>
<html lang="zxx">
    <!--
        **********************************************************************************************************
        Copyright (c) 2017 Webaashi.
        ********************************************************************************************************** 
        -->
    
<!-- Mirrored from webaashi.com/TF/html/aashi-fashion-shop-html/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2024 13:47:23 GMT -->
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
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <link href="assets/css/color.css" rel="stylesheet" id="colors">
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
                            <a class="logo hidden-xs" href="{{ route('/')}}">
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
                                        <a href="{{ Route('checkout') }}" class="theme-button">Checkout</a>
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
                                                <a href="{{route('login')}}">Account</a>
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
                                            <li><a href="{{ route('/') }}">Home</a></li>
                                            <li>
                                                <a href="#">Shop Pages <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu">
                                                    {{-- <li><a href="collection-grid-sidebar.html">Collection Grid Sidebar</a></li>
                                                    <li><a href="collection-list-sidebar.html">Collection List Sidebar</a></li>
                                                    <li><a href="collection-grid-fullwidth.html">Collection Grid fullwidth</a></li>
                                                    <li><a href="collection-list-fullwidth.html">Collection List fullwidth</a></li> --}}
                                                    <li><a href="{{  route('productdetail')}}">Product detail</a></li>
                                                    <li><a href="{{ route('cart')}}">Cart Page</a></li>
                                                    <li><a href="{{ route('checkout')}}">Checkout Page</a></li>
                                                </ul>
                                            </li>
                                          
                                            <li><a href="{{ route('product')}}">Categories</a></li>
                                            <li>
                                                <a href="#">Pages <span class="caret menu-arrow"></span><span class="sub-arrow">...</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('404')  }}">404 Error page</a></li>
                                                    {{-- <li><a href="FAQ.html">FAQs</a></li> --}}
                                                    <li><a href="{{ route('login') }}">Login Area</a></li>
                                                    <li><a href="{{ route('defaultpage') }}">Default Page</a></li>
                                                </ul>
                                            </li>
                                            {{-- <li>
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
                                            </li> --}}
                                            <li><a href="{{ route('contact')}}">Contact</a></li>
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
                                                <a href="{{route('login')}}" class="userIcon">
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
        <!--//==Page Header Start==//-->	  
        <div class="page-header black-overlay">
            <div class="container breadcrumb-section">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <h2>product Detail</h2>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="active">product Detail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//==Page Header End==//-->
        <!--//=========product Detail Start=========//-->
        <section class="page_single">
            <div class="container">
                <div class="row padTB100">
                    <div class="prod-info-section">
                        <div class="clearfix">
                            <!--Thumbnail Column-->
                            <div class="carousel-column col-lg-6 col-md-6 col-sm-5 col-xs-12">
                                <div class="wa-product-main-image marB20">
                                    <a href="assets/img/product/product-detail.jpg" class="fancybox" data-fancybox-group="group" title="Product Title Here"> <img src="assets/img/product/product-detail.jpg" alt=""> </a>
                                </div>
                                <div id="wa-slide-image" class="owl-carousel  wa-slide-image carousel-style-1">
                                    <a href="assets/img/product/product-detail-1.jpg" class="fancybox" data-fancybox-group="group" title="Product Title Here"> <img src="assets/img/product/product-detail-1.jpg" alt=""> </a>  
                                    <a href="assets/img/product/product-detail-2.jpg" class="fancybox" data-fancybox-group="group" title="Product Title Here"> <img src="assets/img/product/product-detail-2.jpg" alt=""> </a>
                                    <a href="assets/img/product/product-detail-3.jpg" class="fancybox" data-fancybox-group="group" title="Product Title Here"> <img src="assets/img/product/product-detail-3.jpg" alt=""> </a>
                                    <a href="assets/img/product/product-detail-4.jpg" class="fancybox" data-fancybox-group="group" title="Product Title Here"> <img src="assets/img/product/product-detail-4.jpg" alt=""> </a>
                                    <a href="assets/img/product/product-detail-5.jpg" class="fancybox" data-fancybox-group="group" title="Product Title Here"> <img src="assets/img/product/product-detail-5.jpg" alt=""> </a>  
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-lg-6 col-md-6 col-sm-7 col-xs-12">
                                <div class="outer wow fadeInRight">
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
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies .</p>
                                            <p>It has survived not only five centuries, but also the leap into ele ctronic typesetting, remaining essentially un changed The industry's standard dummy text ever 
                                                since.
                                            </p>
                                        </div>
                                        <div class="clear"></div>
                                        <!--Options-->
                                        <div class="prod-options marB10">
                                            <div class="clearfix">
                                                <div class="col-md-2 col-sm-3 padL0">
                                                    <div class="form-group">
                                                        <label><strong>Qty :</strong> </label>
                                                        <div class="clear"></div>
                                                        <input type="number" name="qty" value="2" max="10" min="0" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-4 padL0">
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
                                                <div class="col-md-5 col-sm-4 padL0">
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
                                                <div class="form-group col-sm-12 padL0 quantity">
                                                    <label><strong>Tags</strong></label>
                                                    <div class="tag-list">
                                                        <a class="btnlight" href="#"><i class="fa fa-tags" aria-hidden="true"></i> E-Commerce</a> 
                                                        <a class="btnlight" href="#"><i class="fa fa-tags" aria-hidden="true"></i> Html</a>   
                                                        <a class="btnlight" href="#"><i class="fa fa-tags" aria-hidden="true"></i> red</a>
                                                        <a class="btnlight" href="#"><i class="fa fa-tags" aria-hidden="true"></i> brands</a>    
                                                        <a class="btnlight" href="#"><i class="fa fa-tags" aria-hidden="true"></i>dresses</a>
                                                        <a class="btnlight" href="#"><i class="fa fa-tags" aria-hidden="true"></i> responsive</a>
                                                        <a class="btnlight" href="#"><i class="fa fa-tags" aria-hidden="true"></i> template</a>
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
        </section>
        <!--//=========product Detail End=========//-->
        <!--//==product Description Start==//-->
        <section class="page_single">
            <div class="container">
                <div class="row">
                    <div class="prod-info-section">
                        <div class="clearfix">
                            <div class="col-md-12">
                                <div class="block-caption">
                                    <div class="left-title">
                                        <h2>Product Discription <span class="heading-border"></span></h2>
                                        <div class="clear"></div>
                                    </div>
                                    <p>Nam quis magna in dui fringilla sodales et at ante. Nulla condimentum sed magna ut Maecenas lacus ante, mattis sed euismod sed, iaculis sed libInteger tortor tellus, varius ac maximus at, vehicula nec purus. Ut at posuere sapien, ut molestie nisi. Donec mauris justo, Praesent sed interdum arcu, eget interdum elit. Proin quis sapien a ex ultrices condimentum eu vel neque. Donec maximus, erat eu mattis feugiat, nisl tellus vehicula lorem, ut ullamcorper ex risus eu magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    <p>Condimentum sed magna ut Maecenas lacus ante, mattis sed euismod sed, iaculis sed libInteger tortor tellus, varius ac maximus at, vehicula nec purus. Ut at posuere sapien, ut molestie nisi. Donec mauris justo, Praesent sed interdum arcu, eget interdum elit. Proin quis sapien a ex ultrices condimentum eu vel neque. Donec maximus, erat eu mattis feugiat, nisl tellus vehicula lorem, ut ullamcorper ex risus eu magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur luctus felis vitae ante gravida, quis imperdiet mauris convallis. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//==product Description End==//-->
        <!--//==product Review Section Start==//-->	
        <section class="page_single">
            <div class="container">
                <div class="row padTB100">
                    <div class="prod-info-section">
                        <div class="clearfix">
                            <div class="col-md-12 padT0">
                                <div class="left-title">
                                    <h2>Product Reviews <span class="heading-border"></span></h2>
                                    <div class="clear"></div>
                                </div>
                                <!--//==Comment List Start==//-->
                                <div class="reviews-container padT20">
                                    <!--//==Comment Item==//-->
                                    <article class="review-box clearfix">
                                        <!--//==Thumbnail==//-->
                                        <figure class="rev-thumb">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </figure>
                                        <!--//==Comment content==//-->
                                        <div class="rev-content">
                                            <div class="row">
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                    <h4>john doe | <span>20 Jan 2017</span></h4>
                                                </div>
                                                <div class="rev-text col-md-12 col-sm-12 col-xs-12">
                                                    <p>sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui posuere. sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui posuere. massa, convallis a pellentesq ue neCurabitu</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!--//==Comment Item==//-->
                                    <article class="review-box clearfix">
                                        <!--//==Thumbnail==//-->
                                        <figure class="rev-thumb">
                                            <img src="assets/img/author/2.jpg" alt="">
                                        </figure>
                                        <!--//==Comment content==//-->
                                        <div class="rev-content">
                                            <div class="row">
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                    <h4>john doe | <span>10 Feb 2017</span></h4>
                                                </div>
                                                <div class="rev-text col-md-12 col-sm-12 col-xs-12">
                                                    <p>sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui posuere. sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui posuere. massa, convallis a pellentesq ue neCurabitu</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!--//==Comment Item==//-->
                                    <article class="review-box clearfix">
                                        <!--//==Thumbnail==//-->
                                        <figure class="rev-thumb">
                                            <img src="assets/img/author/3.jpg" alt="">
                                        </figure>
                                        <!--//==Comment content==//-->
                                        <div class="rev-content">
                                            <div class="row">
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                    <h4>john doe | <span>15 May 2017</span></h4>
                                                </div>
                                                <div class="rev-text col-md-12 col-sm-12 col-xs-12">
                                                    <p>sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui posuere. sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui posuere. massa, convallis a pellentesq ue neCurabitu</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!--//==Comment List End==//-->
                            </div>
                            <div class="col-md-12 padT30">
                                <!--//==Section Heading Start==//-->
                                <div class="left-title">
                                    <h2>Leave Review <span class="heading-border"></span></h2>
                                    <div class="clear"></div>
                                </div>
                                <!--//==Section Heading End==//-->
                                <div class="row">
                                    <div class="contact-form-section">
                                        <!--//==Comment Form Start==//-->
                                        <form class="contact-form">
                                            <div class="col-md-6 form-group">
                                                <input type="text" placeholder="Your Name">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="email" id="exampleInputEmail" placeholder="Your Email">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea name="contact_message" class="textarea-message" placeholder="Your Message" rows="10"></textarea>							
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <button type="submit" class="col-md-3 theme-button">submit </button>
                                            </div>
                                        </form>
                                        <!--//==Comment Form End==//-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//==product Review Section Start==//-->	
        <!--//=============Related Product Section Start============//-->
        <div class="wa-products-main padTB100 grey-bg">
            <div class="container">
                <div class="row">
                    <!--//==Section Heading Start==//-->
                    <div class="col-md-12">
                        <div class="centered-title">
                            <h2>Related Product <span class="heading-border"></span></h2>
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
        <!--//=============Related Product Section End============//-->	
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
        <script src="assets/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/menu/js/hover-dropdown-menu.js"></script> 
        <script type="text/javascript" src="assets/plugins/menu/js/jquery.hover-dropdown-menu-addon.js"></script>	
        <script src="assets/plugins/owl-carousel/js/owl.carousel.js"></script> 
        <script src="assets/plugins/fancymedia/js/jquery.fancybox.pack.js"></script>
        <script src="assets/plugins/fancymedia/js/jquery.fancybox-media.js"></script>      
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from webaashi.com/TF/html/aashi-fashion-shop-html/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2024 13:47:36 GMT -->
</html>
