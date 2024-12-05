@extends("user.layout.MasterApp")
@section("content")
        <!-- Product List area start -->
        <div class="product-list">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product">
                        <div class="image">
                            <a href="{{route('product-details')}}">
                                <img src="{{asset('user/assets/img/sofa/sofa-one.png')}}" alt="">
                                <div class="secondary-imgae">
                                    <img src="{{asset('user/assets/img/sofa/sofa-one-2.png')}}" alt="">
                                </div>
                            </a>
                            <div class="add-cart">
                                <a href="">add to cart</a>
                            </div>
                        </div>
                        <div class="product-content">
                            <a href="product-details.html"><h4>arnold sofa</h4></a>
                            <span>39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product">
                        <div class="image">
                            <a href="">
                                <img src="{{asset('user/assets/img/sofa/sofa-two.png')}}" alt="">
                                <div class="secondary-imgae">
                                    <img src="{{asset('user/assets/img/sofa/sofa-two-2.png')}}" alt="">
                                </div>
                            </a>
                            <div class="add-cart">
                                <a href="">add to cart</a>
                            </div>
                        </div>
                        <div class="product-content">
                            <a href=""><h4>arnold sofa</h4></a>
                            <span>39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product">
                        <div class="image">
                            <a href="">
                                <img src="{{asset('user/assets/img/sofa/sofa-three.png')}}" alt="">
                                <div class="secondary-imgae">
                                    <img src="{{asset('user/assets/img/sofa/sofa-three-2.png')}}" alt="">
                                </div>
                            </a>
                            <div class="add-cart">
                                <a href="">add to cart</a>
                            </div>
                        </div>
                        <div class="product-content">
                            <a href=""><h4>arnold sofa</h4></a>
                            <span>39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product">
                        <div class="image">
                            <a href="">
                                <img src="{{asset('user/assets/img/sofa/sofa-one.png')}}" alt="">
                            </a>
                            <div class="add-cart">
                                <a href="">add to cart</a>
                            </div>
                        </div>
                        <div class="product-content">
                            <a href=""><h4>arnold sofa</h4></a>
                            <span>39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product">
                        <div class="image">
                            <a href="">
                                <img src="{{asset('user/assets/img/sofa/sofa-two.png')}}" alt="">
                            </a>
                            <div class="add-cart">
                                <a href="">add to cart</a>
                            </div>
                        </div>
                        <div class="product-content">
                            <a href=""><h4>arnold sofa</h4></a>
                            <span>39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product">
                        <div class="image">
                            <a href="">
                                <img src="{{asset('user/assets/img/sofa/sofa-three.png')}}" alt="">
                            </a>
                            <div class="add-cart">
                                <a href="">add to cart</a>
                            </div>
                        </div>
                        <div class="product-content">
                            <a href=""><h4>arnold sofa</h4></a>
                            <span>39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                        </div>

                    </div>
                </div>
            </div>
         </div>
        <!-- Product List area end -->
@endsection