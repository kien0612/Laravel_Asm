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
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}" id="colors">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!--//==Preloader Start==//-->
    {{-- <div class="preloader">
            <div class="thecube">
                <div class="loader"></div>
                <h4>Loading</h4>
            </div>
        </div> --}}
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
                        <a class="logo hidden-xs" href="{{ route('/') }}">
                            <img class="site_logo" alt="Site Logo" src="assets/img/logo.png" />
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <form class="wa-search-bar marT10">
                            <input type="text" name="search" placeholder="Search..">
                            <button type="submit" class="default-btn"><i class="fa fa-paper-plane"
                                    aria-hidden="true"></i></button>
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
                                            <img src="assets/img/product/cart1.jpg" width="70" height="70"
                                                alt="cart item" />
                                            <a href="#"><span class="item-name">Product Title Here...</span></a>
                                            <span class="item-price">$849.99</span>
                                            <span class="item-quantity">x 01</span>
                                        </li>
                                        <li class="clearfix">
                                            <img src="assets/img/product/cart2.jpg" width="70" height="70"
                                                alt="cart item" />
                                            <a href="#"><span class="item-name">Product Title Here...</span></a>
                                            <span class="item-price">$1,249.99</span>
                                            <span class="item-quantity">x 01</span>
                                        </li>
                                        <li class="clearfix">
                                            <img src="assets/img/product/cart3.jpg" width="70" height="70"
                                                alt="cart item" />
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
                                            <a href="{{ route('login') }}">Login</a>
                                        </li>
                                        <li class="clearfix">
                                            <a href="{{ route('cart') }}">Track Order</a>
                                        </li>
                                        <li class="clearfix">
                                            <a href="{{ route('logout') }}">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end user-menu -->
                            </li>
                            <li>
                                <a href="#" class="cartIcon">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <sup>{{ count((array) session('cart')) }}</sup>
                                </a>
                                <div class="shopping-cart">
                                    <a class="closeCart"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                    <ul class="shopping-cart-items">
                                        @if (session('cart'))
                                            @foreach (session('cart') as $id_san_pham => $details)
                                                <li class="clearfix">
                                                    <img src="{{ Storage::url($details['hinh_anh']) }}" width="70"
                                                        height="70" alt="cart item" />
                                                    <a href="#"><span
                                                            class="item-name">{{ $details['ten_san_pham'] }}</span></a>
                                                    <span class="item-price">VND{{ $details['gia'] }}</span> <br>
                                                    <span class="item-quantity">Sl{{ $details['so_luong'] }}</span>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>

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
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span></button>
                                    <!-- Logo -->
                                    <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="index.html">
                                        <img class="site_logo" alt="Site Logo" src="assets/img/logo-2.png" />
                                    </a>
                                </div>
                                <!-- Navbar Collapse -->
                                <div class="navbar-collapse collapse">
                                    <!-- Right nav Start -->
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{ route('/') }}">Home</a></li>
                                        <li>
                                            <a href="#">Shop Pages <span class="caret menu-arrow"></span><span
                                                    class="sub-arrow">...</span></a>
                                            <ul class="dropdown-menu">
                                                {{-- <li><a href="collection-grid-sidebar.html">Collection Grid Sidebar</a></li>
                                                    <li><a href="collection-list-sidebar.html">Collection List Sidebar</a></li>
                                                    <li><a href="collection-grid-fullwidth.html">Collection Grid fullwidth</a></li>
                                                    <li><a href="collection-list-fullwidth.html">Collection List fullwidth</a></li> --}}
                                                <li><a href="{{ route('productdetail') }}">Product detail</a></li>
                                                <li><a href="{{ route('cart') }}">Cart Page</a></li>
                                                <li><a href="{{ route('checkout') }}">Checkout Page</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('product') }}">Categories</a></li>
                                        <li>
                                            <a href="#">Pages <span class="caret menu-arrow"></span><span
                                                    class="sub-arrow">...</span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('404') }}">404 Error page</a></li>
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
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
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
                                                <a class="closeCart"><i class="fa fa-times-circle"
                                                        aria-hidden="true"></i></a>
                                                <ul class="shopping-cart-items">
                                                    <li class="clearfix">
                                                        <img src="assets/img/product/cart1.jpg" width="70"
                                                            height="70" alt="cart item" />
                                                        <a href="#"><span class="item-name">Product Title
                                                                Here...</span></a>
                                                        <span class="item-price">$849.99</span>
                                                        <span class="item-quantity">x 01</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="assets/img/product/cart2.jpg" width="70"
                                                            height="70" alt="cart item" />
                                                        <a href="#"><span class="item-name">Product Title
                                                                Here...</span></a>
                                                        <span class="item-price">$1,249.99</span>
                                                        <span class="item-quantity">x 01</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="assets/img/product/cart3.jpg" width="70"
                                                            height="70" alt="cart item" />
                                                        <a href="#"><span class="item-name">Mauris et
                                                                pulvinar...</span></a>
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
                                            <a href="{{ route('login') }}" class="userIcon">
                                                <i class="fa fa-user-o" aria-hidden="true"></i>
                                                <sup>User</sup>
                                            </a>
                                            <div class="user-menu">
                                                <a class="closeMenu"><i class="fa fa-times-circle"
                                                        aria-hidden="true"></i></a>
                                                <ul class="user-menu-items">
                                                    <li class="clearfix">
                                                        <a href="">Login</a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <a href="">Track Order</a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <a href="">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--end user-menu -->
                                        </li>
                                        <li>
                                            <a href="#" class="cartIcon">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                <sup></sup>
                                            </a>
                                            <div class="shopping-cart">
                                                <a class="closeCart"><i class="fa fa-times-circle"
                                                        aria-hidden="true"></i></a>
                                                <ul class="shopping-cart-items">
                                                    <li class="clearfix">
                                                        <img src="assets/img/product/cart1.jpg" width="70"
                                                            height="70" alt="cart item" />
                                                        <a href="#"><span class="item-name">Product Title
                                                                Here...</span></a>
                                                        <span class="item-price">$849.99</span>
                                                        <span class="item-quantity">x 01</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="assets/img/product/cart2.jpg" width="70"
                                                            height="70" alt="cart item" />
                                                        <a href="#"><span class="item-name">Product Title
                                                                Here...</span></a>
                                                        <span class="item-price">$1,249.99</span>
                                                        <span class="item-quantity">x 01</span>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="assets/img/product/cart3.jpg" width="70"
                                                            height="70" alt="cart item" />
                                                        <a href="#"><span class="item-name">Mauris et
                                                                pulvinar...</span></a>
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
                                            <figure><a href="#"><img src="assets/img/all/1.png"
                                                        alt=""></a></figure>
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

    {{-- <div class="wa_main_bn_wrap">
            <div id="home1-main-slider" class="owl-carousel owl-theme">
                <div class="item">
                    <figure>
                        <img src="assets/img/slider/1.jpg" class="hidden-xs hidden-sm " alt="" />
                        <img src="assets/img/slider/1xs.jpg" class="hidden-lg hidden-md" alt="" />
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
                        <img src="assets/img/slider/2.jpg" class="hidden-xs hidden-sm " alt="" />
                        <img src="assets/img/slider/2xs.jpg" class="hidden-lg hidden-md" alt="" />
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
                        <img src="assets/img/slider/3.jpg" class="hidden-xs hidden-sm" alt="" />
                        <img src="assets/img/slider/3xs.jpg" class="hidden-lg hidden-md" alt="" />
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
        </div> --}}


    <div>
        <br> @yield('content')
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
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced
                                        Search</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp;
                                        Condition</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget Block-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>Category</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced
                                        Search</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp;
                                        Condition</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget Block-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4>Account</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Products</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Advanced
                                        Search</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Site Map</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> FAQ</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Location</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Terms &amp;
                                        Condition</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right wv_circle"></i> Privacy
                                        Policy</a></li>
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
                            <p><span class="rounded-icon"><i class="fa fa-map-marker"></i></span>PO Box 16122 Collins
                                Street <br>
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
                            <button type="submit" class="default-btn"><i class="fa fa-paper-plane"
                                    aria-hidden="true"></i></button>
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
    {{-- <section class="quick-view-popup">
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
        </section> --}}
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
<script type="text/javascript">
 $(".delete-product").click(function (e) {
    e.preventDefault();

    var ele = $(this);

    if (confirm("Bạn có muốn xóa không?")) {
     
        $.ajax({
            url: '{{ route('delete.cart.product') }}',
            method: "DELETE",
            data: {
                _token: '{{ csrf_token() }}',
                id_san_pham: ele.parents("tr").attr("rowId")
            },
           
        });    
    }
});
</script>
<!-- Mirrored from webaashi.com/TF/html/aashi-fashion-shop-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2024 13:47:19 GMT -->

</html>
