@extends('nguoidung.layout')
@section('content')  
        <div class="page-header black-overlay">
            <div class="container breadcrumb-section">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <h2>Cart Page</h2>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="active">Cart Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//==Page Header End==//-->
        <!--//==Orders Section Start==//-->	  
        <section class="cart-page padTB100">
            <div class="container">
                <div class="row wv-pads15">
                    <div class="col-md-12 col-sm-12">
                        <!--//==Section Heading Start==//-->
                        <div class="left-title">
                            <h2>Your Orders <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                        </div>
                        <!--//==Section Heading End==//-->
                        <div class="clear"></div>
                        <!--//==Order Table titles Start==//-->
                        <div class="hidden-xs">
                            <div class="col-md-2 col-sm-2 grey-bg">
                                <div class="order-data text-center pad15">
                                    <strong>Item</strong>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 grey-bg">
                                <div class="order-data text-center pad15">
                                    <strong>product</strong>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 grey-bg">
                                <div class="order-data  text-center pad15">
                                    <strong>price</strong>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 grey-bg">
                                <div class="order-data text-center pad15">
                                    <strong>Quantity</strong>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 grey-bg">
                                <div class="order-data text-center pad15">
                                    <strong>Total</strong>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 grey-bg">
                                <div class="order-data text-center pad15">
                                    <strong>Status</strong>
                                </div>
                            </div>
                        </div>
                        <!--//==Order Table titles End==//-->
                        <!--//==Order Table Row ==//-->
                        <div class="row">

                          
                          
                            @if(session('cart'))
                            @php $total = 0 @endphp
                                @foreach(session('cart') as $id_san_pham => $details)
                                @php $total += $details['gia'] * $details['so_luong'] @endphp
                                 <tr rowId="{{ $id_san_pham }}">
                                    <div class="col-md-12">
                                        <div class="order-row padTB20" >
                                            <div class="col-md-2 col-sm-2">
                                                <div class="order-data order-table text-center padTB15">
                                                    <div class="order-table-cell">
                                                        <a href="product-detail.html"><img src="{{ Storage::url($details['hinh_anh']) }}" alt=""></a>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="order-data order-table text-center">
                                                    <div class="order-table-cell order-text">           
                                                        <strong><a href="product-detail.html">{{ $details['ten_san_pham'] }}</a></strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="order-data order-table text-center">
                                                    <div class="order-table-cell order-text">
                                                        <strong>{{ $details['gia'] }} $</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="order-data order-table text-center">
                                                    <div class="order-table-cell order-text">
                                                        <input type="number" value="{{ $details['so_luong'] }}" class="qty" name="qty1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="order-data order-table text-center">
                                                    <div class="order-table-cell order-text">
                                                        <strong>$ {{ $total }}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="order-data order-table text-center">
                                                    <div class="order-table-cell order-text">
                                                      
                                                     <strong>  <button class="fa fa-trash delete-product">XÓA </button></strong>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </tr>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//==Order Section End==//-->
        <!--//== Order Price Section Start ==//-->
        <section class="cart-page padB100">
            <div class="container">
                <div class="row">
                    <!--//== Apply Coupon Section Start ==//-->
                    <div class="col-xs-12 col-sm-6 col-md-5 wv_shipping_outer">
                        <!--//==Section Heading Start==//-->
                        <div class="left-title">
                            <h2>Apply Coupon<span class="heading-border"></span></h2>
                            <div class="clear"></div>
                        </div>
                        <!--//==Section Heading End==//-->
                        <div class="wv_shipping responsive_coupon grey-bg">
                            <div class="wv_subtotaling marB20">
                                <div class="col-xs-12 col-md-12  wv_subtotal_left textL">
                                    <p>Enter Coupon Code</p>
                                </div>
                            </div>
                            <div class="row">
                                <form class="contact-form">
                                    <!--//==Contact Input Field==//-->
                                    <div class="col-md-12 form-group wv_form_field marB30">
                                        <input class="wv_form_focus" type="text" placeholder="Example 'B589276A'">
                                    </div>
                                    <div class="col-md-12 wv_form_field">
                                        <button type="submit" class="theme-button col-xs-12 marT0">apply code</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--//== Apply Coupon Section End ==//-->
                    <!--//== Price Calculation Section Start ==//-->
                    <div class="col-xs-12 col-sm-6 col-md-7 wv_subtotal">
                        <!--//==Section Heading Start==//-->
                        <div class="left-title">
                            <h2>Price Calculation<span class="heading-border"></span></h2>
                            <div class="clear"></div>
                        </div>
                        <!--//==Section Heading End==//-->
                        <div class="wv_shipping">
                            <div class="wv_subtotaling">
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <p>Cộng Tổng</p>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <p>$ {{ $total }}</p>
                                </div>
                            </div>
                            <div class="wv_subtotaling">
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <p>Khấu trừ</p>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <p>-$15.00</p>
                                </div>
                            </div>
                            <div class="wv_totaling">
                                <div class="col-xs-6 col-md-6 wv_total_left textL">
                                    <p>Phải trả</p>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_total_right textR">
                                    <p>$ {{ $total }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6 wv_checkout wv_form_field">							   
                                    <button type="submit" class="theme-button col-xs-12 marT0">checkout</button>
                                </div>
                                <div class="col-xs-12 col-md-6 wv_checkout wv_form_field1 responsive_field1">
                                    <button type="submit" class="theme-button col-xs-12 marT0">continue ordeing </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//== Price Calculation Section End ==//-->
                </div>
            </div>
        </section>
        <!--//== Order Price Section End ==//-->
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

