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
                            <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Stylish Swing Chair</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                    <li>
                        <div class="cart-img">
                            <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
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
@endsection
@section('content')
    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 data-aos="fade-up" data-aos-delay="200">Shop</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="index.html">Home</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>Shop Right Sidebar</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
            <img src="assets/images/banner/breadcrumb-1.png" alt="">
        </div>
        <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
            <img src="assets/images/banner/breadcrumb-2.png" alt="">
        </div>
    </div>
    <div class="shop-area shop-page-responsive pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop-topbar-wrapper mb-40">
                        <div class="shop-topbar-left">
                            <div class="showing-item">
                                <span>Showing 1–12 of 60 results</span>
                            </div>
                        </div>
                        <div class="shop-topbar-right">
                            <div class="shop-sorting-area">
                                <select class="nice-select nice-select-style-1">
                                    <option>Default Sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by latest</option>
                                </select>
                            </div>
                            <div class="shop-view-mode nav">
                                <a class="active" href="#shop-1" data-bs-toggle="tab"><i class=" ti-layout-grid3 "></i> </a>
                                <a href="#shop-2" data-bs-toggle="tab" class=""><i class=" ti-view-list-alt "></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach($products as $product)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                            <div class="product-img img-zoom mb-25">
                                                <a href="{{route('detail', $product->id)}}">
                                                    <img src="{{ \Storage::url($product->image)  }}" alt="">
                                                </a>
                                                <div class="product-badge badge-top badge-right badge-pink">
                                                    <span>-10%</span>
                                                </div>
                                                <div class="product-action-wrap">
                                                    <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                    <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="pe-7s-look"></i>
                                                    </button>
                                                </div>
                                                <div class="product-action-2-wrap">
                                                    <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="{{route('detail', $product->id)}}">{{$product->name}}</a></h3>
                                                <div class="product-price">
                                                    <span class="new-price">{{number_format($product->price)}} VND</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-widget mb-40" data-aos="fade-up" data-aos-delay="200">
                            <div class="search-wrap-2">
                                <form class="search-2-form" action="#">
                                    <input placeholder="Search*" type="text">
                                    <button class="button-search"><i class=" ti-search "></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                            <div class="sidebar-widget-title mb-30">
                                <h3>Filter By Price</h3>
                            </div>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <div class="label-input">
                                        <label>Price:</label>
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                    <button type="button">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                            <div class="sidebar-widget-title mb-25">
                                <h3>Product Categories</h3>
                            </div>
                            <div class="sidebar-list-style">
                                <ul>
                                    <li><a href="shop.html">Accessories <span>4</span></a></li>
                                    <li><a href="shop.html">Book <span>9</span></a></li>
                                    <li><a href="shop.html">Clothing <span>5</span></a></li>
                                    <li><a href="shop.html">Homelife <span>3</span></a></li>
                                    <li><a href="shop.html">Kids & Baby <span>4</span></a></li>
                                    <li><a href="shop.html">Stationery <span>8</span></a></li>
                                    <li><a href="shop.html">Health & Beauty <span>3</span></a></li>
                                    <li><a href="shop.html">Home Appliances <span>4</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                            <div class="sidebar-widget-title mb-25">
                                <h3>Choose Colour</h3>
                            </div>
                            <div class="sidebar-widget-color sidebar-list-style">
                                <ul>
                                    <li><a class="black" href="#">Black <span>4</span></a></li>
                                    <li><a class="blue" href="#">Blue <span>9</span></a></li>
                                    <li><a class="brown" href="#">Brown <span>5</span></a></li>
                                    <li><a class="red" href="#">Red <span>3</span></a></li>
                                    <li><a class="orange" href="#">Orange <span>4</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-widget-border mb-40 pb-35" data-aos="fade-up" data-aos-delay="200">
                            <div class="sidebar-widget-title mb-25">
                                <h3>Size</h3>
                            </div>
                            <div class="sidebar-widget-size sidebar-list-style">
                                <ul>
                                    <li><a href="#">XL <span>4</span></a></li>
                                    <li><a href="#">M <span>9</span></a></li>
                                    <li><a href="#">LM <span>5</span></a></li>
                                    <li><a href="#">L <span>3</span></a></li>
                                    <li><a href="#">ML <span>4</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="200">
                            <div class="sidebar-widget-title mb-25">
                                <h3>Tags</h3>
                            </div>
                            <div class="sidebar-widget-tag">
                                <a href="#">All, </a>
                                <a href="#">Clothing, </a>
                                <a href="#"> Kids, </a>
                                <a href="#">Accessories, </a>
                                <a href="#">Stationery, </a>
                                <a href="#">Homelife, </a>
                                <a href="#">Appliances, </a>
                                <a href="#">Clothing, </a>
                                <a href="#">Baby, </a>
                                <a href="#">Beauty </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



