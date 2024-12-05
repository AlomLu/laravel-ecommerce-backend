@extends("user.layout.MasterApp")
@section("content")
        <!-- Product Details area start -->
        <div class="product-details">
            <div class="row">
                <div class="col-md-7">
                    <div class="image">
                        <img src="{{asset('user/assets/img/sofa/sofa-one.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="product-content">
                        <h3>Arnold Sofa</h3>
                        <h5>AFL-OTD-102</h4>
                        <span>39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                        <div class="product-description">
                            <ul>
                                <li>aaaaa</li>
                                <li>aaaaa</li>
                                <li>aaaaa</li>
                            </ul>
                        </div>
                        <div class="add-to-cart">
                            <div class="quantity">
                                <input type="button" class="minus" value="-">
                                <input type="number">
                                <input type="button" class="plus" value="+">
                            </div>
                            <a href="">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- Product Details area end -->
@endsection