

        <!-- Navbar area start -->
        <nav class="navbar-top navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home')}}">E-commerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex justify-content-start w-100">
                        <form class="d-flex me-auto" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Categories
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Living</a></li>
                                    <li><a class="dropdown-item" href="#">Dining</a></li>
                                    <li><a class="dropdown-item" href="#">Bedroom</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                                <div class="cart">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="image">
                                                <a href=""><img src="{{asset('user/assets/img/sofa/sofa-one.png')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-info">
                                                <!-- <p><a href="">arnold sofa</a></p>
                                                <p><a href="">arnold sofa</a></p>
                                                <span>39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span> -->
                                                <ul>
                                                    <li><a href="">arnold sofa</a></li>
                                                    <li><a href="">AFL-OTD-102</a></li>
                                                    <li>1*39803 <i class="fa-solid fa-bangladeshi-taka-sign"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="price">
                                                <span>89775 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="delete">
                                                <a href=""><i class="fa-sharp fa-solid fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-price">
                                        <p>subtotal</p>
                                        <span>78945 <i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                                    </div>
                                    <div class="cart-actions">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="view-cart">
                                                    <a href="{{route('view-cart')}}">view cart</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="checkout">
                                                    <a href="{{route('checkout')}}">checkout</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="clear-all">
                                                    <a href="">clear all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link disabled">Disabled</a> -->
                                <a class="nav-link" href="{{route('login')}}">
                                    <i class="fa-solid fa-user"></i>
                                    <span>Sign in</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navlink navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">E-commerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex justify-content-start w-100">
                        <!-- <form class="d-flex me-auto" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                        <ul class="navbar-nav mr-auto mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    bedroom
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">bed</a></li>
                                    <li><a class="dropdown-item" href="#">wardrobes</a></li>
                                    <li><a class="dropdown-item" href="#">dresser</a></li>
                                    <li><a class="dropdown-item" href="#">chest of drawer</a></li>
                                    <li><a class="dropdown-item" href="#">night stand</a></li>
                                    <li><a class="dropdown-item" href="#">stool</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    living
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('product-list')}}">sofa</a></li>
                                    <li><a class="dropdown-item" href="#">center table</a></li>
                                    <li><a class="dropdown-item" href="#">shoe cabinet</a></li>
                                    <li><a class="dropdown-item" href="#">side table</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    dining
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">dining table</a></li>
                                    <li><a class="dropdown-item" href="#">dining chair</a></li>
                                    <li><a class="dropdown-item" href="#">display cabinet</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    office
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">directors table</a></li>
                                    <li><a class="dropdown-item" href="#">swivel chair</a></li>
                                    <li><a class="dropdown-item" href="#">fixed chair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar area end -->