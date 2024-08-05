@extends('nguoidung.layout')
@section('content')
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>product FullWidth</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">product FullWidth</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//=========product Page Start=========//-->
    <section class="wa-products-main padTB100">
        <div class="container">
            <div class="row">
                <!--//=========Product Sorting Section Start=========//-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="product-sorting">
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <ul class="sorting-product-option hidden-xs">
                                <li>
                                    <a href="collection-grid-fullwidth.html"><span class="fa fa-th"></span></a>
                                </li>
                                <li>
                                    <a href="collection-list-fullwidth.html"><span class="fa fa-th-list"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-5 col-xs-12">
                            <div class="row">
                                <form>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="orderby" class="orderby">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="countby" class="countby">
                                            <option value="12">12</option>
                                            <option value="15">15</option>
                                            <option value="18">18</option>
                                            <option value="21">21</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <p class="product-result-count">Showing all 12 results of product sort</p>
                        </div>
                    </div>
                </div>
                <!--//=========Product Sorting Section End=========//-->
                <!--product Item-->
                @foreach ($listSp as $item)
                    <div
                        class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                        <div class="wa-products">
                            <div class="wa-products-thumbnail wa-item">
                                <img src="{{ $item->hinh_anh }}" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-products-icon">
                                            <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            </li>
                                            <li><a href="#" class="quickview-box-btn" title="Quick View"><i
                                                        class="fa fa-eye"></i></a></li>
                                            <li><a href="#" title="Add to cart"><i
                                                        class="fa fa-shopping-basket"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-products-caption">
                                <h2>
                                    <a href="{{ route('productdetail',$item->id_san_pham) }}">{{$item->ten_san_pham}}</a>
                                </h2>
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
                                    {{ number_format($item->gia, 2) }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- {{$item->links()}} --}}
                <!--product Item-->
                {{-- <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-2.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" class="quickview-box-btn" title="Quick View"><i
                                                    class="fa fa-eye"></i></a></li>
                                        <li><a href="#" title="Add to cart"><i class="fa fa-shopping-basket"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-products-caption">
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-3.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix ">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-4.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-5.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-6.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-7.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-8.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-9.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-10.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-11.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                <!--product Item-->
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 mix ">
                    <div class="wa-products">
                        <div class="wa-products-thumbnail wa-item">
                            <img src="assets/img/product/front-12.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-products-icon">
                                        <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        </li>
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
                            <h2>
                                <a href="product-detail.html">product title</a>
                            </h2>
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
                </div> --}}
                <div class="clear"></div>
                <div class="col-md-12">
                    <!--//==Pagination Start==//-->
                    <div class="styled-pagination padB30 text-center">
                        <ul>
                            <li><a class="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!--//==Pagination End==//-->
                </div>
            </div>
        </div>
    </section>
    <!--//=========product Page End=========//-->
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
