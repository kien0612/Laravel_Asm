@extends('nguoidung.layout')
@section('content')	  
        <div class="page-header black-overlay">
            <div class="container breadcrumb-section">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <h2>Checkout Page</h2>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="active">Checkout Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//==Page Header End==//-->
        <!--//== Order Billing and shipping Section Start ==//-->  
        <section class="checkout-page padT100 padB50">
            <div class="container">
                <div class="row product-checkout pad-s15">
                    <!--//==Billings and Shipping Form Start==//-->	
                    <form class="contact-form">
                        <div class="col-sm-6 col-md-6 wv_checkout_left marT30">
                            <!--//== Section Heading Start ==//-->
                            <div class="left-title">
                                <h2>Billings details <span class="heading-border"></span></h2>
                                <div class="clear"></div>
                            </div>
                            <!--//== Section Heading End ==//-->
                            <!--//==Billings Form Start==//-->	
                            <div class="row">
                                <!--//==Billings Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="First Name:">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Last Name:">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Company Name:">
                                </div>
                                <!--//==Billings Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="email" id="exampleInputEmail" placeholder="Email:">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="number" placeholder="Phone Number:">
                                </div>
                                <!--//==Billings Input Field==//-->
                                <div class="col-md-12 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Street Address:">
                                </div>
                                <!--//==Billings Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Town/City:">
                                </div>
                                <!--//==Billings Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Postcode/zip:">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 marT30">
                            <!--//== Section Heading Start ==//-->
                            <div class="left-title">
                                <h2 id="ship-to-different-address">Different Shipping Detail?<span class="heading-border"></span>
                                    <input type="checkbox" value="1" name="ship_to_different_address" class="input-checkbox" id="ship-to-different-address-checkbox">
                                </h2>
                                <div class="clear"></div>
                            </div>
                            <div class="row shipping-fields">
                                <!--//==Shipping Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="First Name:">
                                </div>
                                <!--//==Shipping Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Last Name:">
                                </div>
                                <!--//==Shipping Input Field==//-->
                                <div class="col-md-12 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Company Name:">
                                </div>
                                <!--//==Shipping Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="email" id="exampleInputEmail1" placeholder="Email:">
                                </div>
                                <!--//==Shipping Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="number" placeholder="Phone Number:">
                                </div>
                                <!--//==Shipping Input Field==//-->
                                <div class="col-md-12 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Street Address:">
                                </div>
                                <!--//==Shipping Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Town/City:">
                                </div>
                                <!--//==Shipping Input Field==//-->
                                <div class="col-md-6 form-group">
                                    <input class="wv_form_focus" type="text" placeholder="Postcode/zip:">
                                </div>
                            </div>
                            <!--//==Shipping Form End==//-->	
                            <div class="row">
                                <!--//==Extra Message Field==//-->
                                <div class="col-md-12 form-group">
                                    <textarea name="contact_message" class="textarea-message wv_form_focus wv_checkout_tarea" placeholder="Notes about your order, e.g. special notes for delivery." rows="8"></textarea>							
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--//==Billings and Shipping Form End==//-->	
                </div>
            </div>
        </section>
        <!--//== Order Billing and shipping Section End ==//-->  	
        <!--//== Place Order Start ==//-->  
        <section class="cart-page padB100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 wv_subtotal">
                        <!--//== Section Heading Start ==//-->
                        <div class="left-title">
                            <h2>Order Detail <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                        </div>
                        <!--//== Section Heading End ==//-->
                        <!--//== Total Price Section Start ==//-->
                        <div class="wv_shipping">
                            <div class="wv_subtotaling wv_checkout_subtotal">
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <p>Products</p>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <p>Total</p>
                                </div>
                            </div>
                            <div class="wv_subtotaling wv_checkout_subtotal1 padT10">
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <span>product Name Here x 1</span>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <span>$170.00</span>
                                </div>
                                <div class="clear"></div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <span>product Name Here x 1</span>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <span>$170.00</span>
                                </div>
                            </div>
                            <div class="wv_subtotaling">
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <p>subtotal</p>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <p>$340.00</p>
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
                                    <p>$325.00</p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!--//== Total Price Section End ==//-->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 wv_subtotal">
                        <!--//== Section Heading Start ==//-->
                        <div class="left-title">
                            <h2>Payment method <span class="heading-border"></span></h2>
                            <div class="clear"></div>
                        </div>
                        <!--//== Section Heading End ==//-->
                        <!--//== Total Price Section Start ==//-->
                        <div class="wv_shipping">
                            <div class="wv_subtotaling wv_checkout_subtotal1">
                                <div class="checkout-payment" id="payment">
                                    <ul class="payment_methods methods">
                                        <li>
                                            <span>Nam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas
                                            tristique sit amet odio sit amet aliquet.</span>
                                        </li>
                                        <li class="payment_method_cheque">
                                            <input type="radio"  value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                            <label for="payment_method_cheque">Cheque Payment </label>
                                        </li>
                                        <li class="payment_method_paypal">
                                            <input type="radio"  value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                                            <label for="payment_method_paypal">PayPal <a title="What is PayPal?" class="about_paypal" href="#"> What is PayPal?</a>
                                            </label>
                                        </li>
                                        <li class="payment_method_cod">
                                            <input type="radio" value="cod" name="payment_method" class="input-radio" id="payment_method_cod">
                                            <label for="payment_method_cod">Cash On Delivery 
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <!--//== Total Price Section End ==//-->
                            <div class="wv_checkout wv_form_field1 responsive_field1">
                                <button type="submit" class="theme-button col-xs-12 marT0">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//== Place Order End ==//-->
        <!--//=========instagram-gallery start=========//-->	
@endsection
        {{-- <div class="instagram-gallery page_single">
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
        </div> --}}
