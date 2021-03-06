{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icon-font-linea.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/multirange.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/effect.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cartpage.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    @livewireStyles
</head>

<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown">
                    <a href="/">Home</a>
                </li>
                <li class="level1 active dropdown">
                    <a href="/shop">All Shop</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="home_v1.html" title="">Home 1</a></li>
                        <li class="level2"><a href="home_v2.html" title="">Home 2</a></li>
                        <li class="level2"><a href="home_v3.html" title="">Home 3</a></li>
                    </ul>
                </li>
                {{-- <li class="level1">
                    <a href="#">Pages</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="about.html" title="About Us ">About Us </a></li>
                        <li class="level2"><a href="contact.html" title="Contact">Contact</a></li>
                        <li class="level2"><a href="404.html" title="404">404</a></li>
                    </ul>
                </li> --}}
                <li class="level1">
                    <a href="/cart">Cart</a>
                </li>  
                <li class="level1">
                    <a href="/checkout">Checkout</a>
                </li>
                <li class="level1">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
    <!-- Menu Mobile -->
    <div class="menu-mobile-left-content menu-bg-white">
        <ul>
            <li><a href="#"><img src="{{asset('img/icon_hot_gray.png')}}" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_food_gray.png')}}" alt="Icon Food" /> <p>Food</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_mobile_gray.png')}}" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_electric_gray.png')}}" alt="Icon Electric Appliances" /> <p>Electric Appliances</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_computer_gray.png')}}" alt="Icon Electronics & Technology" /> <p>Electronics & Technology</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_fashion_gray.png')}}" alt="Icon Fashion" /> <p>Fashion</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_health_gray.png')}}" alt="Icon Health & Beauty" /> <p>Health & Beauty</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_mother_gray.png')}}" alt="Icon Mother & Baby" /> <p>Mother & Baby</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_book_gray.png')}}" alt="Icon Books & Stationery" /> <p>Books & Stationery</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_home_gray.png')}}" alt="Icon Home & Life" /> <p>Home & Life</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_sport_gray.png')}}" alt="Icon Sports & Outdoors" /> <p>Sports & Outdoors</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_auto_gray.png')}}" alt="Icon Auto & Moto" /> <p>Auto & Moto</p></a></li>
            <li><a href="#"><img src="{{asset('img/icon_voucher_gray.png')}}" alt="Icon Voucher Service" /> <p>Voucher Service</p></a></li>
        </ul>
    </div>
    <!-- Header Box -->
    <div class="wrappage">
        <header class="relative full-width">
            <div class=" container-web relative">
                <div class=" container">
                    <div class="row">
                        <div class=" header-top">
                            <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin">
                                <img src="{{asset('img/icon_phone_top.png')}}" alt="Icon Phone Top Header" /> Call us <span class="text-red bold">070-7782-7137</span>
                            </p>
                            <div class="menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding">
                                <ul class="clear-margin">
                                   
                                    @if (Route::has('login'))
                                        @auth
                                        @if (Auth::user()->utype==='ADM')
                                        {{-- for admin --}}
                                        <li class="relative">
                                            <a href="#">My Account</a>
                                            <ul>
                                                <li class="relative"><a href="#">{{Auth::user()->name}}</a></li>
                                                <li class="relative"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                                <li class="relative"><a href="#">ADMIN</a></li>
                                                <li class="relative"><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form id="logout-form" action="{{route('logout')}}" method="POST"> 
                                                    @csrf
                                                   </form>
                                            </ul>
                                        </li>                                          
                                        @else
                                        <li class="relative">
                                            <a href="#">My Account</a>
                                            <ul>
                                                <li class="relative"><a href="#">{{Auth::user()->name}}</a></li>
                                                <li class="relative"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                                                <li class="relative"><a href="">User</a></li>
                                                <li class="relative"><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form id="logout-form" action="{{route('logout')}}" method="POST"> 
                                                    @csrf
                                                   </form>

                                            </ul>
                                        </li>
                                        
                                      @endif
                                        @else 
                                        <li class="relative"><a href="{{route('login')}}"> Login</a></li>
                                        <li class="relative"><a href="{{route('register')}}"> Register</a></li>
                                       @endif
                                    @endif
                                    <li class="relative"><a href="#">Wishlist</a></li>
                                    <li class="relative">
                                        <a href="#">EN</a>
                                        <ul>
                                            <li class="relative"><a href="#">JP</a></li>
                                            <li class="relative"><a href="#">EN</a></li>
                                            <li class="relative"><a href="#">CN</a></li>
                                        </ul>
                                    </li>
                                    <li class="relative">
                                        <a href="#">USD</a>
                                        <ul>
                                            <li class="relative"><a href="#">AUD</a></li>
                                            <li class="relative"><a href="#">USD</a></li>
                                            <li class="relative"><a href="#">CAD</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="clearfix header-content full-width relative">
                            <div class="clearfix icon-menu-bar">
                                <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu"></i>
                            </div>
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="{{asset('img/logo.png')}}" /></a>
                            </div>
                            <div class="clearfix search-box relative float-left">
                                <form method="GET" action="/" class="">
                                    <div class="clearfix category-box relative">
                                        <select name="cate_search">
                                            <option>All Category</option>
                                            <option>Food</option>
                                            <option>Mobile & Tablet</option>
                                            <option>Electric Appliances</option>
                                            <option>Electronics & Technology</option>
                                            <option>Fashion</option>
                                            <option>Health & Beauty</option>
                                            <option>Mother & Baby</option>
                                            <option>Books & Stationery</option>
                                            <option>Home & Life</option>
                                            <option>Sports & Outdoors</option>
                                            <option>Auto & Moto</option>
                                            <option>Voucher Service</option>
                                        </select>
                                    </div>
                                    <input type="text" name="s" placeholder="Enter keyword here . . .">
                                    <button type="submit" class="animate-default button-hover-red">Search</button>
                                </form>
                            </div>
                            <div class="clearfix icon-search-mobile absolute">
                                <i onclick="showBoxSearchMobile()" class="data-icon data-icon-basic icon-basic-magnifier"></i>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="{{asset('img/icon_cart.png')}}" />
                                <p class="count-total-shopping absolute">2</p>
                            </div>
                            <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                                <img alt="Icon Cart" src="{{asset('img/icon_cart.png')}}" />
                                <p class="count-total-shopping absolute">2</p>
                            </div>
                            <div class="cart-detail-header border">
                                <div class="relative">
                                    <div class="product-cart-son clearfix">
                                        <div class="image-product-cart float-left center-vertical-image ">
                                            <a href="#"><img src="{{asset('img/product_image_6-min.png')}}" alt="" /></a>
                                        </div>
                                        <div class="info-product-cart float-left">
                                            <p class="title-product title-hover-black"><a class="animate-default" href="#">MH02-Black09</a></p>
                                            <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                        </div>
                                    </div>
                                    <div class="product-cart-son">
                                        <div class="image-product-cart float-left center-vertical-image">
                                            <a href="#"><img src="{{asset('img/product_image_7-min.png')}}" alt="" /></a>
                                        </div>
                                        <div class="info-product-cart float-left">
                                            <p class="title-product title-hover-black"><a class="animate-default" href="#">Voyage Yoga Bag</a></p>
                                            <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative border no-border-l no-border-r total-cart-header">
                                    <p class="bold clear-margin">Subtotal:</p>
                                    <p class=" clear-margin bold">$700</p>
                                </div>
                                <div class="relative btn-cart-header">
                                    <a href="#" class="uppercase bold animate-default">view cart</a>
                                    <a href="#" class="uppercase bold button-hover-red animate-default">checkout</a>
                                </div>
                            </div>
                            <div class="mask-search absolute clearfix" onclick="hiddenBoxSearchMobile()"></div>
                            <div class="clearfix box-search-mobile">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="menu-vertical hidden-md hidden-lg" onclick="showMenuMobie()">
							<span class="animate-default"><i class="fa fa-list" aria-hidden="true"></i> all categories</span>
						</a>
                    </div>
                </div>
            </div>
            <div class="menu-header-v3 hidden-ipx ">
                <div class="container">
                    <div class="row">
                        <!-- Menu Page -->
                        <div class="menu-header full-width">
                            <ul class="clear-margin">
                                <li onclick="showMenuHomeV3()"><a class="animate-default" href="#"><i class="fa fa-list" aria-hidden="true"></i> all categories</a></li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="/">Home</a>
                                    {{-- <ul class="sub-menu mega-menu">
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v1.html"><img src="{{asset('img/home_1_menu-min.png')}}" alt=""></a>
                                            <p><a href="home_v1.html">Home 1</a></p>
                                        </li>
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v2.html"><img src="{{asset('img/home_2_menu-min.png')}}" alt=""></a>
                                            <p><a href="home_v2.html">Home 2</a></p>
                                        </li>
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v3.html"><img src="{{asset('img/home_3_menu-min.png')}}" alt=""></a>
                                            <p><a href="home_v3.html">Home 3</a></p>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="/shop">All Shop</a>
                                    <div class="sub-menu mega-menu-v2">
                                        <ul>
                                            <li>Catgory Type</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Category v1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Category v1.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Category v4.2</a></li>
                                        </ul>
                                        <ul>
                                            <li>Single Product Type</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Product Single 1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Product Single 2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Product Single 3</a></li>
                                        </ul>
                                        <ul>
                                            <li>Order Page</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Cart Page</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Checkout</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Compare</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">QuickView</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Track Order</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">WishList</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="/cart">Cart</a>
                                 </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="/checkout">Checkout</a>
                                   
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="/contact">Contact</a>
                                   
                                </li>
                            </ul>
                        </div>
                        <!-- End Menu Page -->
                    </div>
                </div>
            </div>
            <div class="clearfix menu_more_header menu-web menu-bg-white">
                <ul>
                    <li><a href="#"><img src="{{asset('img/icon_hot_gray.png')}} "alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
                    <li><a href="#"><img src="{{asset('img/icon_food_gray.png')}}" alt="Icon Food" /> <p>Food</p></a></li>
                    <li><a href="#"><img src="{{asset('img/icon_mobile_gray.png')}}" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>
           
                </ul>
            </div>
            <div class="header-ontop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="clearfix logo">
                                <a href="#"><img alt="Logo" src="{{asset('img/logo.png')}}" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="menu-header">
                                <ul class="main__menu clear-margin">
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">home</a>
                                        <ul class="sub-menu mega-menu">
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v1.html"><img src="{{asset('img/home_1_menu-min.png')}}" alt=""></a>
                                                <p><a href="home_v1.html">Home 1</a></p>
                                            </li>
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v2.html"><img src="{{asset('img/home_2_menu-min.png')}}" alt=""></a>
                                                <p><a href="home_v2.html">Home 2</a></p>
                                            </li>
                                            <li class="relative">
                                                <a class="animate-default center-vertical-image" href="home_v3.html"><img src="{{asset('img/home_3_menu-min.png')}}" alt=""></a>
                                                <p><a href="home_v3.html">Home 3</a></p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">shop</a>
                                        <div class="sub-menu mega-menu-v2">
                                            <ul>
                                                <li>Catgory Type</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Category v1</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Category v1.2</a></li>
                                          
                                            </ul>
                                            <ul>
                                                <li>Single Product Type</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Product Single 1</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Product Single 2</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Product Single 3</a></li>
                                            </ul>
                                            <ul>
                                                <li>Order Page</li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Cart Page</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Checkout</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Compare</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">QuickView</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Track Order</a></li>
                                                <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">WishList</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">pages</a>
                                        <ul>
                                            <li class="title-hover-red"><a class="animate-default" href="about.html">About Us</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="contact.html">Contact</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="title-hover-red">
                                        <a class="animate-default" href="#">Blog</a>
                                        <ul>
                                            <li class="title-hover-red"><a class="animate-default" href="blog.html">Blog Category</a></li>
                                            <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
     
        @yield('login');
        {{$slot}}
     
        <footer class=" bg-gray full-width border no-border-r no-border-l footer-v3 no-border-b">
            <div class="clearfix container-web relative">
                <div class=" container clear-padding">
                    <div class="row">
                        <!-- Support -->
                        <div class="clearfix support-box support-box-v3 full-width">
                            <div class="container-web clearfix">
                                <div class=" container ">
                                    <div class="row">
                                        <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                            <img src="{{asset('img/icon_free_ship.png')}}" alt="Icon Free Ship" class="float-left" />
                                            <p class="float-left">free shipping</p>
                                            <p class="float-left">on order over $500</p>
                                        </div>
                                        <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                            <img src="{{asset('img/icon_support.png')}}" alt="Icon Supports" class="float-left">
                                            <p class="float-left">support</p>
                                            <p class="float-left">life time support 24/7</p>
                                        </div>
                                        <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                            <img src="{{asset('img/icon_patner.png')}}" alt="Icon partner" class="float-left">
                                            <p class="float-left">help partner</p>
                                            <p class="float-left">help all aspects</p>
                                        </div>
                                        <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                            <img src="{{asset('img/icon_phone_big.png')}}" alt="Icon Phone Tablet" class="float-left">
                                            <p class="float-left">contact with us</p>
                                            <p class="float-left">+07 (0) 7782 9137</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Support Box -->
                    </div>
                    <div class="row">
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>my account</p>
                            <ul class="list-footer">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">My Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Compare</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>information</p>
                            <ul class="list-footer">
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>our services</p>
                            <ul class="list-footer">
                                <li><a href="#">Product Recall</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Returns And Exchanges</a></li>
                                <li><a href="#">Shipping Options</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                            </ul>
                        </div>
                        <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                            <p>contact us</p>
                            <ul class="icon-footer">
                                <li><i class="fa fa-home" aria-hidden="true"></i> 262 Milacina Mrest, Behansed, Paris</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> contact@yourcompany.com</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> 070-7782-9137</li>
                                <li><i class="fa fa-fax" aria-hidden="true"></i> 070-7782-9138</li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 AM - 18:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Box Social -->
            <div class=" top-footer full-width">
                <div class="clearfix container-web relative">
                    <div class=" container">
                        <div class="row">
                            <div class="clearfix col-md-9 col-sm-12 clear-padding col-xs-12">
                                <div class="clearfix text-subscribe">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <p>sign up for newsletter</p>
                                    <p>Get updates on discount & counpons.</p>
                                </div>
                                <div class="clearfix form-subscribe">
                                    <input type="text" name="email-subscribe" placeholder="Enter your email . . .">
                                    <button class="animate-default button-hover-red">subscribe</button>
                                </div>
                            </div>
                            <div class="clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right">
                                <a href="#"><img src="{{asset('img/social_tw-min.png')}}" alt="Icon Social Twiter"></a>
                                <a href="#"><img src="{{asset('img/social_fa-min.png')}}" alt="Icon Social Facebook"></a>
                                <a href="#"><img src="{{asset('img/social_int-min.png')}}" alt="Icon Social Instagram"></a>
                                <a href="#"><img src="{{asset('img/social_yt-min.png')}}" alt="Icon Social Youtube" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Box Social -->
            <div class=" bottom-footer full-width">
                <div class="clearfix container-web">
                    <div class=" container">
                        <div class="row">
                            <div class="clearfix col-md-7 clear-padding copyright">
                                <p>Copyright ?? 2018 by EngoCreative. All Rights Reserved.</p>
                            </div>
                            <div class="clearfix footer-icon-bottom col-md-5 float-right clear-padding">
                                <div class="icon_logo_footer float-right">
                                    <img src="{{asset('img/image_payment_footer-min.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- End Footer Box -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}" defer=""></script>
    <script src="{{asset('js/bootstrap.min.js')}}" defer=""></script>
    <script src="{{asset('js/multirange.js')}}" defer=""></script>
    <script src="{{asset('js/sync_owl_carousel.js')}}" defer=""></script>
    <script src="{{asset('js/owl.carousel.min.js')}}" defer=""></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR8GCPpAFKo4Dke4SsPGcao1NKnn25OQA&v=3.31&callback=initMap" defer=""></script>
    <script src="{{asset('js/scripts.js')}}" defer=""></script>
    @livewireScripts
</body>

</html>