@extends('client.layout.master')
@section('banner')
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">
            <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
            <div class="cart-content">
                <h3>Shopping Cart</h3>
                <ul>
                    <li>
                        <div class="cart-img">
                            <a href="#"><img src="{{asset('client/assets/images/cart/cart-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="cart-title">{{asset('client/')}}
                            <h4><a href="#">Stylish Swing Chair</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                    <li>
                        <div class="cart-img">
                            <a href="#"><img src="{{asset('client/assets/images/cart/cart-2.jpg')}}" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Modern Chairs</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                </ul>
                <div class="cart-total">
                    <h4>Subtotal: <span>$170.00</span></h4>
                </div>
                <div class="cart-btn btn-hover">
                    <a class="theme-color" href="cart.html">view cart</a>
                </div>
                <div class="checkout-btn btn-hover">
                    <a class="theme-color" href="checkout.html">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">Blog</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="index.html">Home</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>Blog Standard </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
            <img src="{{asset('client/assets/images/banner/breadcrumb-1.png')}}" alt="">
        </div>
        <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
            <img src="{{asset('client/assets/images/banner/breadcrumb-2.png')}}" alt="">
        </div>
    </div>
@endsection
@section('content')
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="200">
                        <div class="blog-img-date-wrap mb-25">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{asset('client/assets/images/blog/blog-1.png')}}" alt=""></a>
                            </div>
                            <div class="blog-date">
                                <h5>05 <span>May</span></h5>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#">Furniture</a>,</li>
                                    <li>By:<a href="#"> Admin</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Lorem ipsum dolor consectet.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labo et dolore magna aliqua.</p>
                            <div class="blog-btn-2 btn-hover">
                                <a class="btn hover-border-radius theme-color" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="400">
                        <div class="blog-img-date-wrap mb-25">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{asset('client/assets/images/blog/blog-2.png')}}" alt=""></a>
                            </div>
                            <div class="blog-date">
                                <h5>03 <span>Jun.</span></h5>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#">Furniture</a>,</li>
                                    <li>By:<a href="#"> Admin</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Duis et volutpat pellentesque.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labo et dolore magna aliqua.</p>
                            <div class="blog-btn-2 btn-hover">
                                <a class="btn hover-border-radius theme-color" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="600">
                        <div class="blog-img-date-wrap mb-25">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{asset('client/assets/images/blog/blog-3.png')}}" alt=""></a>
                            </div>
                            <div class="blog-date">
                                <h5>07 <span>Feb.</span></h5>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#">Furniture</a>,</li>
                                    <li>By:<a href="#"> Admin</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Vivamus vitae dolor convallis.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labo et dolore magna aliqua.</p>
                            <div class="blog-btn-2 btn-hover">
                                <a class="btn hover-border-radius theme-color" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="200">
                        <div class="blog-img-date-wrap mb-25">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{asset('client/assets/images/blog/blog-2.png')}}" alt=""></a>
                            </div>
                            <div class="blog-date">
                                <h5>08 <span>Dec.</span></h5>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#">Furniture</a>,</li>
                                    <li>By:<a href="#"> Admin</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Vivamus amet tristique orci.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labo et dolore magna aliqua.</p>
                            <div class="blog-btn-2 btn-hover">
                                <a class="btn hover-border-radius theme-color" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="400">
                        <div class="blog-img-date-wrap mb-25">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{asset('client/assets/images/blog/blog-3.png')}}" alt=""></a>
                            </div>
                            <div class="blog-date">
                                <h5>02 <span>Nov.</span></h5>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#">Furniture</a>,</li>
                                    <li>By:<a href="#"> Admin</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Pellentesque pretium place.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labo et dolore magna aliqua.</p>
                            <div class="blog-btn-2 btn-hover">
                                <a class="btn hover-border-radius theme-color" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="600">
                        <div class="blog-img-date-wrap mb-25">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="{{asset('client/assets/images/blog/blog-1.png')}}" alt=""></a>
                            </div>
                            <div class="blog-date">
                                <h5>09 <span>Oct.</span></h5>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#">Furniture</a>,</li>
                                    <li>By:<a href="#"> Admin</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Sed euismod tristique dolor.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labo et dolore magna aliqua.</p>
                            <div class="blog-btn-2 btn-hover">
                                <a class="btn hover-border-radius theme-color" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-style-1" data-aos="fade-up" data-aos-delay="200">
                <ul>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="next" href="#"><i class=" ti-angle-double-right "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection


