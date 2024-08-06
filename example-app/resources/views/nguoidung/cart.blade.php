@extends('nguoidung.layout')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Phần còn lại của mã HTML để hiển thị giỏ hàng -->

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
                    @foreach ($cart->items as $item)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="order-row padTB20">
                                    <div class="col-md-2 col-sm-2">
                                        <div class="order-data order-table text-center padTB15">
                                            <div class="order-table-cell">
                                                <a href="product-detail.html"><img src="{{ Storage::url($item->hinh_anh) }}"
                                                        alt=""></a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="order-data order-table text-center">
                                            <div class="order-table-cell order-text">
                                                <strong><a href="product-detail.html">{{ $item->ten_san_pham }}</a></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="order-data order-table text-center">
                                            <div class="order-table-cell order-text">
                                                <strong>{{ $item->gia }}$</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="order-data order-table text-center">
                                            <div class="order-table-cell order-text">
                                                <input type="number" min="1" class="qty" name="qty1"
                                                    value="{{ $item->so_luong }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="order-data order-table text-center">
                                            <div class="order-table-cell order-text">
                                                <strong>{{ $item->gia * $item->so_luong }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="order-data order-table text-center">
                                            <div class="order-table-cell order-text">
                                                <strong><a onclick="return confirm('Ban co muon xoa ? ')"
                                                        href="{{ route('cart.delete', $item->id_san_pham) }}"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></a></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="hidden-xs">
                        <div class="col-md-4 col-sm-2 grey-bg">
                            <div class="order-data text-center pad15">
                                <h3>Tổng tiền : </h3>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-2 grey-bg">
                            <div class="order-data text-right pad15">
                                <h3 style="color: red">{{ $cart->totalPrice }}</h3>
                            </div>
                        </div>

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
                                <p>subtotal</p>
                            </div>
                            <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                <p>{{ $cart->totalPrice }}</p>
                            </div>
                        </div>
                        <div class="wv_subtotaling">
                            <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                <p>Deduction</p>
                            </div>
                            <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                <p>-$15.00</p>
                            </div>
                        </div>
                        <div class="wv_totaling">
                            <div class="col-xs-6 col-md-6 wv_total_left textL">
                                <p>Total</p>
                            </div>
                            <div class="col-xs-6 col-md-6 wv_total_right textR">
                                <p>{{ $cart->totalPrice - 15.00 }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6 wv_checkout wv_form_field">
                                <form action="{{ route('cart.checkout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="theme-button col-xs-12 marT0">Checkout</button>
                                </form>
                            </div>
                            <div class="col-xs-12 col-md-6 wv_checkout wv_form_field1 responsive_field1">
                                <a href="{{ route('product') }}" class="theme-button col-xs-12 marT0">Continue Ordering</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--//== Price Calculation Section End ==//-->
            </div>
        </div>
    </section>
@endsection
