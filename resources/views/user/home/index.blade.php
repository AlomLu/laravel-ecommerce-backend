
@extends("user.layout.MasterApp")
@section("content")
        <!-- Slider area start -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('user/assets/img/slider-one.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="{{asset('user/assets/img/slider-two.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="{{asset('user/assets/img/slider-three.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Slider area end -->

        <!-- Category area start -->
         <div class="categories">
            <h3>shop by category</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/bed.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">bed</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/night-stand.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">night stand</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/wardrobe.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">wardrobe</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/dresser.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">dresser</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/stool.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">stool</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/chest-of-drawer.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">chest of drawer</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/sofa.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">sofa</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/center-table.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">center table</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/shoe-cabinet.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">shoe cabinet</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/side-table.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">side table</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>

                
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/dining-table.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">dining table</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/dining-chair.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">dining chair</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/display-cabinet.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">display cabinet</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/swivel-chair.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">swivel cahir</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/fixed-chair.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">fixed cahir</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('user/assets/img/category/director-table.png')}}" alt="">
                        </a>
                    </div>
                    <div class="image-content">
                        <a href="">swivel cahir</a>
                        <!-- <span>40 products</span> -->
                    </div>
                </div>
            </div>
         </div>
        <!-- Category area end -->

        <!-- choose-us area start -->
         <div class="choose-us">
            <h2>why choose us</h2>
            <div class="choose-us-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="choose-us-content">
                            <i class="fa-solid fa-truck"></i>
                            <h3>fastest delivery</h3>
                            <p>Fastest home delivery with assembling
                                inside Dhaka 1-2 Days &
                                Out of Dhaka City 3-4 days.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="choose-us-content">
                            <i class="fa-solid fa-phone"></i>
                            <h3>warranty & support</h3>
                            <p>We provides an easy, hassle-free servicing
                                system where we pick up your product from
                                your home if there is any problem and get it back to you.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="choose-us-content">
                            <i class="fa-brands fa-creative-commons-remix"></i>
                            <h3>EMI policy</h3>
                            <p>To avail EMI, Place your order through
                                Website and share your order ID in our Inbox.
                                We will share the EMI payment link.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- choose-us area end -->
@endsection
             