@extends("user.layout.MasterApp")
@section("content")
        <!-- View Cart area start -->
        <div class="view-cart">
            <div class="row">
                <div class="col-md-8">
                    <div class="cart-header">
                        <div class="row">
                            <div class="col-md-5">
                                <p>product</p>
                            </div>
                            <div class="col-md-2">
                                <p>price</p>
                            </div>
                            <div class="col-md-3">
                                <p>quantity</p>
                            </div>
                            <div class="col-md-2">
                                <p>subtotal</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="image">
                                    <a href=""><img src="asset/img/sofa/sofa-one.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-info">
                                    <ul>
                                        <li><a href="">arnold sofa</a></li>
                                        <li><a href="">AFL-OTD-102</a></li>
                                        <li>1*39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="product-price">
                                    <!-- <span>78945 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span> -->
                                <span>tk 78945</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="quantity">
                                    <input type="button" class="minus" value="-">
                                    <input type="number">
                                    <input type="button" class="plus" value="+">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sub-price">
                                    <!-- <span>78945 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span> -->
                                    <span>tk 78945</span>
                                </div>
                                <div class="delete">
                                    <a href=""><i class="fa-solid fa-xmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="image">
                                    <a href=""><img src="asset/img/sofa/sofa-one.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-info">
                                    <ul>
                                        <li><a href="">arnold sofa</a></li>
                                        <li><a href="">AFL-OTD-102</a></li>
                                        <li>1*39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="product-price">
                                    <!-- <span>78945 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span> -->
                                <span>tk 78945</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="quantity">
                                    <input type="button" class="minus" value="-">
                                    <input type="number">
                                    <input type="button" class="plus" value="+">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sub-price">
                                    <!-- <span>78945 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span> -->
                                    <span>tk 78945</span>
                                </div>
                                <div class="delete">
                                    <a href=""><i class="fa-solid fa-xmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="image">
                                    <a href=""><img src="asset/img/sofa/sofa-one.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-info">
                                    <ul>
                                        <li><a href="">arnold sofa</a></li>
                                        <li><a href="">AFL-OTD-102</a></li>
                                        <li>1*39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="product-price">
                                    <!-- <span>78945 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span> -->
                                <span>tk 78945</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="quantity">
                                    <input type="button" class="minus" value="-">
                                    <input type="number">
                                    <input type="button" class="plus" value="+">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sub-price">
                                    <!-- <span>78945 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span> -->
                                    <span>tk 78945</span>
                                </div>
                                <div class="delete">
                                    <a href=""><i class="fa-solid fa-xmark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart-totals">
                        <h4>cart totals</h4>
                        <ul>
                            <li>
                                <div class="cart-total-label">
                                    <span>subtotal</span>
                                </div>
                                <div class="cart-total-value">
                                    <span>tk 7895</span>
                                </div>
                            </li>
                            <li>
                                <p>Tax included and shipping calculated at checkout</p>
                            </li>
                        </ul>
                        <div class="cart-actions">
                            <a href="{{route('checkout')}}" class="cart-checkout">proceed to checkout</a>
                            <a href="home" class="continue-shopping">continue shopping</a>
                        </div>
                    </div>
                    
                </div>
            </div>
         </div>
        <!-- View Cart area end -->
@endsection