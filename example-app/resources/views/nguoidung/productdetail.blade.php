@extends('nguoidung.layout')
@section('content')
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
    @foreach($sanpham as $item)
        
    @endforeach
    <section class="page_single">
        <div class="container">
            <div class="row padTB100">
                <div class="prod-info-section">
                    <div class="clearfix">
                        <!--Thumbnail Column-->
                        <div class="carousel-column col-lg-6 col-md-6 col-sm-5 col-xs-12">
                            <div class="wa-product-main-image marB20">
                                <a href="assets/img/product/product-detail.jpg" class="fancybox" data-fancybox-group="group"
                                    title="Product Title Here"> <img src="assets/img/product/product-detail.jpg"
                                        alt=""> </a>
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-lg-6 col-md-6 col-sm-7 col-xs-12">
                            <div class="outer wow fadeInRight">
                                <div class="title-box">
                                    <div class="inner marB30">
                                        <h2 class="marB10">Product Title Here.</h2>
                                        <p class="availability in-stock"><strong>Availability:</strong> <span>In
                                                stock</span></p>
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
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor
                                            sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies .
                                        </p>
                                        <p>It has survived not only five centuries, but also the leap into ele ctronic
                                            typesetting, remaining essentially un changed The industry's standard dummy text
                                            ever
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
                                                    <input type="number" name="qty" value="2" max="10"
                                                        min="0" placeholder="">
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-5 col-sm-4 padL0">
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
                                            </div> --}}
                                            {{-- <div class="form-group col-sm-12 padL0 quantity">
                                                <label><strong>Tags</strong></label>
                                                <div class="tag-list">
                                                    <a class="btnlight" href="#"><i class="fa fa-tags"
                                                            aria-hidden="true"></i> E-Commerce</a>
                                                    <a class="btnlight" href="#"><i class="fa fa-tags"
                                                            aria-hidden="true"></i> Html</a>
                                                    <a class="btnlight" href="#"><i class="fa fa-tags"
                                                            aria-hidden="true"></i> red</a>
                                                    <a class="btnlight" href="#"><i class="fa fa-tags"
                                                            aria-hidden="true"></i> brands</a>
                                                    <a class="btnlight" href="#"><i class="fa fa-tags"
                                                            aria-hidden="true"></i>dresses</a>
                                                    <a class="btnlight" href="#"><i class="fa fa-tags"
                                                            aria-hidden="true"></i> responsive</a>
                                                    <a class="btnlight" href="#"><i class="fa fa-tags"
                                                            aria-hidden="true"></i> template</a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <!--Add-->
                                <div class="add-options">
                                    <button type="button" class="theme-button">Order Now</button>
                                    <button type="button" class="theme-button"><span
                                            class="fa fa-heart"></span></button>
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
                                <p>Nam quis magna in dui fringilla sodales et at ante. Nulla condimentum sed magna ut
                                    Maecenas lacus ante, mattis sed euismod sed, iaculis sed libInteger tortor tellus,
                                    varius ac maximus at, vehicula nec purus. Ut at posuere sapien, ut molestie nisi. Donec
                                    mauris justo, Praesent sed interdum arcu, eget interdum elit. Proin quis sapien a ex
                                    ultrices condimentum eu vel neque. Donec maximus, erat eu mattis feugiat, nisl tellus
                                    vehicula lorem, ut ullamcorper ex risus eu magna. Cum sociis natoque penatibus et magnis
                                    dis parturient montes, nascetur ridiculus mus.</p>
                                <p>Condimentum sed magna ut Maecenas lacus ante, mattis sed euismod sed, iaculis sed
                                    libInteger tortor tellus, varius ac maximus at, vehicula nec purus. Ut at posuere
                                    sapien, ut molestie nisi. Donec mauris justo, Praesent sed interdum arcu, eget interdum
                                    elit. Proin quis sapien a ex ultrices condimentum eu vel neque. Donec maximus, erat eu
                                    mattis feugiat, nisl tellus vehicula lorem, ut ullamcorper ex risus eu magna. Cum sociis
                                    natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur
                                    luctus felis vitae ante gravida, quis imperdiet mauris convallis. </p>
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
                                                <p>sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui
                                                    posuere. sapien massa, convallis a pellentesq ue neCurabitur aliquet
                                                    quam id dui posuere. massa, convallis a pellentesq ue neCurabitu</p>
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
                                                <p>sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui
                                                    posuere. sapien massa, convallis a pellentesq ue neCurabitur aliquet
                                                    quam id dui posuere. massa, convallis a pellentesq ue neCurabitu</p>
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
                                                <p>sapien massa, convallis a pellentesq ue neCurabitur aliquet quam id dui
                                                    posuere. sapien massa, convallis a pellentesq ue neCurabitur aliquet
                                                    quam id dui posuere. massa, convallis a pellentesq ue neCurabitu</p>
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
                    <div class="col-md-12">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/back-2.jpg" alt="">
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
                    <div class="col-md-12">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/front-3.jpg" alt="">
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
                    <div class="col-md-12">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/back-4.jpg" alt="">
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
                    <div class="col-md-12">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/back-5.jpg" alt="">
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
                    <div class="col-md-12">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/back-6.jpg" alt="">
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
                    <div class="col-md-12">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/back-7.jpg" alt="">
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
                    <div class="col-md-12">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="assets/img/product/back-9.jpg" alt="">
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
@endsection
