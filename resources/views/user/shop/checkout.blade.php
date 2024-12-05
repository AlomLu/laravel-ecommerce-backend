@extends("user.layout.MasterApp")
@section("content")
        <!-- checkout area start -->
        <div class="checkout-area">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="billing-address">
                            <h4>billing details</h4>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label for="">first name</label>
                                    <input type="text" name="fname" class="form-control">
                                </div>
                                <div class="form-inline">
                                    <label for="">last name</label>
                                    <input type="text" name="lname" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label for="">email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-inline">
                                    <label for="">mobile number</label>
                                    <input type="number" name="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline w-100">
                                    <label for="">full address</label>
                                    <input type="text" name="faddress" class="form-control" placeholder="House No-58, Block-C, Neharipara, Akhalia">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label for="">upazila</label>
                                    <input type="text" name="upazila" class="form-control">
                                </div>
                                <div class="form-inline">
                                    <label for="">district</label>
                                    <input type="text" name="upazila" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-inline">
                                    <label for="">city</label>
                                    <input type="text" name="upazila" class="form-control">
                                </div>
                                <div class="form-inline">
                                    <label for="">postal code</label>
                                    <input type="text" name="upazila" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="order-area">
                            <h4>your order</h4>
                            <div class="checkout-review-order">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-name">product</th>
                                            <th class="product-total">subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-name">
                                                <p>arnold sofa * 1</p>
                                                <p class="model-name">model: <span>aft-otd-102</span></p>
                                            </td>
                                            <td class="product-total">
                                                <span>tk 39803</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-name">
                                                <p>arnold sofa * 5</p>
                                                <p class="model-name">model: <span>aft-otd-102</span></p>
                                            </td class="product-total">
                                            <td class="product-total">
                                                <span>tk 39803</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="product-name">subtotal</th>
                                            <td class="product-total"><span>tk 5897</span></td>
                                        </tr>
                                        <tr>
                                            <th class="product-name">shipping</th>
                                            <td class="product-total">
                                                <ul>
                                                    <li>
                                                        <div class="">
                                                            <label class="form-check-label" for="shippingDhaka">
                                                            inide dhaka: tk 60
                                                            </label>
                                                            <input class="form-check-input" type="radio" name="shippingOption" id="flexRadioDefault1">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="">
                                                            <label class="form-check-label" for="shippingOutsideDhaka">
                                                            outside dhaka: tk 120
                                                            </label>
                                                            <input class="form-check-input" type="radio" name="shippingOption" id="flexRadioDefault1">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="product-name">total</th>
                                            <td class="product-total total_price"><span>tk 78945</span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment">
                                <h6>payment</h6>
                                <ul>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymentMethod" id="flexRadioDefault1">
                                            <label class="form-check-label" for="paymentCash">
                                            cash on delivery
                                            </label>
                                        </div>
                                        <p>pay with cash upon delivery</p>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymentMethod" id="flexRadioDefault1">
                                            <label class="form-check-label" for="paymentOnline">
                                            online payment
                                            </label>
                                        </div>
                                        <p>transactions are secure and encrypted.</p>
                                    </li>
                                </ul>
                                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="">Terms & conditions</a>.</p>
                            </div>
                            <div class="place-order">
                                <input type="submit" name="submit" value="place order">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
         </div>
        <!-- checkout area end -->
@endsection