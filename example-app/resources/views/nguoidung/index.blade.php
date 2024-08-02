@extends('nguoidung.layout')
@section('content')
    <div class="wa_main_bn_wrap">
        <div id="home1-main-slider" class="owl-carousel owl-theme">
          @foreach ($banner as $item)
          <div class="item">
            <figure>
                <img src="{{ Storage::url($item->hinh_anh) }}"lass="hidden-xs hidden-sm " width="1440px" height="900px" alt="" />
                <img src="{{ Storage::url($item->hinh_anh) }}" class="hidden-lg hidden-md" alt="" />
                <figcaption>
                    <div class="container">
                        <span class="special">latest Collection</span>
                        <h2><span>{{$item->ten_banner}}</span></h2>
                        <span>flat 60% off for first 30 Customer.</span>
                        <p>{{$item->mo_ta}}</p>
                        <a href="collection-grid-sidebar.html" class="theme-button wa-theme-bg">Shop Now</a>
                    </div>
                </figcaption>
            </figure>
        </div>
              
          @endforeach
       
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
            @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
            <div class="row" id="MixItUp1">
                <!--//==product Item==//-->
                @foreach ($sanpham as $item)
                    <div
                        class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                {{-- <img src="assets/img/product/front-1.jpg" alt="">						 --}}
                                <img src="{{ Storage::url($item->hinh_anh) }}" width="90px" height="200xp" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="{{ route('edit', $item->id_san_pham) }}" class="quickview-box-btn"
                                                    title="Quick View"><i class="fa fa-eye"></i></a></li>

                                            <li><a href="{{ route('addbox.to.cart',$item->id_san_pham) }}" title="Add to cart"><i
                                                        class="fa fa-shopping-basket"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2><a href="product-detail.html">{{ $item->ten_san_pham }}</a></h2>
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
                                    {{ $item->gia }} $
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                                                    <a href="collection-grid-fullwidth.html"
                                                        class="theme-button marT10">view detail</a>
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
                                                    <a href="collection-grid-fullwidth.html"
                                                        class="theme-button marT10">view detail</a>
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
                        <div class="col-md-12">
                            <div class="wa-products">
                                <div class="wa-products-thumbnail wa-item">
                                    <img src="assets/img/product/front-1.jpg" alt="">
                                    <div class="caption">
                                        <div class="caption-text">
                                            <ul class="wa-products-icon">
                                                <li><a href="#" title="Add to wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" class="quickview-box-btn" title="Quick View"><i
                                                            class="fa fa-eye"></i></a></li>
                                                <li><a href="#" title="Add to cart"><i
                                                            class="fa fa-shopping-basket"></i></a></li>
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
                        @foreach ($sanpham as $v)
                            <div class="col-md-12">
                                <div class="wa-products">
                                    <div class="wa-products-thumbnail wa-item">

                                        <img src="{{ Storage::url($v->hinh_anh) }}" alt="">
                                        <div class="caption">
                                            <div class="caption-text">
                                                <ul class="wa-products-icon">
                                                    <li><a href="#" title="Add to wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" class="quickview-box-btn" title="Quick View"><i
                                                                class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" title="Add to cart"><i
                                                                class="fa fa-shopping-basket"></i></a></li>
                                                </ul>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="wa-products-caption">
                                        <h2><a href="product-detail.html">{{ $v->ten_san_pham }}</a></h2>
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
                                            {{ $v->gia }}$
                                        </span>
                                    </div>



                                </div>
                            </div>
                        @endforeach


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
                                    <img src="assets/img/collection/4.jpg" class="hidden-xs hidden-sm " alt="" />
                                    <img src="assets/img/collection/4-xs.jpg" class="hidden-lg hidden-md"
                                        alt="" />
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <span class="special">New Brand</span>
                                                <h2>Designer Product</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view
                                                    detail</a>
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
                                    <img src="assets/img/collection/2.jpg" class="hidden-xs hidden-sm " alt="" />
                                    <img src="assets/img/collection/3-xs.jpg" class="hidden-lg hidden-md"
                                        alt="" />
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <span class="special">New Brand</span>
                                                <h2>New Brand</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view
                                                    detail</a>
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
                                    <img src="assets/img/collection/3.jpg" class="hidden-xs hidden-sm " alt="" />
                                    <img src="assets/img/collection/2-xs.jpg" class="hidden-lg hidden-md"
                                        alt="" />
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <span class="special">New Brand</span>
                                                <h2>Collection Title</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view
                                                    detail</a>
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
                                    <img src="assets/img/collection/1.jpg" class="hidden-xs hidden-sm " alt="" />
                                    <img src="assets/img/collection/1-xs.jpg" class="hidden-lg hidden-md"
                                        alt="" />
                                    <div class="caption">
                                        <div class="caption-text">
                                            <div class="clear"></div>
                                            <div class="wa-collection-caption">
                                                <span class="special">New Brand</span>
                                                <h2>Latest Men collections</h2>
                                                <div class="clear"></div>
                                                <a href="collection-grid-sidebar.html" class="theme-button marT10">view
                                                    detail</a>
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
                            <h2>Our Blog <span class="heading-border"></span></h2>
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
                                                        <li><a href="#"><i class="fa fa-user"
                                                                    aria-hidden="true"></i> john doe</a></li>
                                                        <li><a href="#"><i class="fa fa-calendar"
                                                                    aria-hidden="true"></i> May 30 2017 </a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Offal yuccie meggings everyday carry skateboard direct trade, tumblr
                                                    literally migas biodiesel vinyl banjo. Offal yuccie meggings everyday
                                                    carry skateboard direct trade, tumblr
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
                                                        <li><a href="#"><i class="fa fa-user"
                                                                    aria-hidden="true"></i> john doe</a></li>
                                                        <li><a href="#"><i class="fa fa-calendar"
                                                                    aria-hidden="true"></i> May 30 2017 </a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Offal yuccie meggings everyday carry skateboard direct trade, tumblr
                                                    literally migas biodiesel vinyl banjo.
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
                                                        <li><a href="#"><i class="fa fa-user"
                                                                    aria-hidden="true"></i> john doe</a></li>
                                                        <li><a href="#"><i class="fa fa-calendar"
                                                                    aria-hidden="true"></i> May 30 2017 </a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Offal yuccie meggings everyday carry skateboard direct trade, tumblr
                                                    literally migas biodiesel vinyl banjo.
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
    @endsection
