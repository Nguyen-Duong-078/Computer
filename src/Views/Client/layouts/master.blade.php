<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/client/images/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" href="/assets/client/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/client/css/font.awesome.css" />
    <link rel="stylesheet" href="/assets/client/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="/assets/client/css/animate.min.css">
    <link rel="stylesheet" href="/assets/client/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/client/css/venobox.css">
    <link rel="stylesheet" href="/assets/client/css/jquery-ui.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/client/css/style.css">
</head>

<body>
    <div class="main-wrapper">

        <!-- HEADER -->
        @include('layouts.header')
        <!--/ HEADER -->

        <div class="offcanvas-overlay"></div>

        <div id=" " class="offcanvas offcanvas-wishlist">
            <div class="inner">
                <div class="head">
                    <span class="title">Wishlist</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="/assets/client/images/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="/assets/client/images/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="/assets/client/images/product-image/3.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Smart Music Box</a>
                                <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons">
                        <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
            <div class="inner">
                <div class="head">
                    <span class="title">Cart</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="/assets/client/images/product-image/1.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Modern Smart Phone</a>
                                <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="/assets/client/images/product-image/2.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Bluetooth Headphone</a>
                                <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="single-product.html" class="image"><img
                                    src="/assets/client/images/product-image/3.webp" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.html" class="title">Smart Music Box</a>
                                <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons mt-30px">
                        <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas-close"></button>
            <div class="user-panel">
                <ul>
                    <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                    <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
                    <li><a href="my-account.html"><i class="fa fa-user"></i> Account</a></li>
                </ul>
            </div>
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="#"><span class="menu-text">Home</span></a>
                            <ul class="sub-menu">
                                <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                                <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li>
                            <a href="#"><span class="menu-text">Pages</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">Inner Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="order-tracking.html">Order Tracking</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">Related Shop Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="my-account.html">Account Page</a></li>
                                        <li><a href="login.html">Login & Register Page</a></li>
                                        <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                        <li><a href="thank-you-page.html">Thank You Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">Shop Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                        <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                        </li>
                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">product Details Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="single-product.html">Product Single</a></li>
                                        <li><a href="single-product-variable.html">Product Variable</a></li>
                                        <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                        <li><a href="single-product-group.html">Product Group</a></li>
                                        <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                        <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                        <li><a href="single-product-slider.html">Product Slider</a></li>
                                        <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">Single Product Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="single-product-gallery-right.html">Product Gallery
                                                Right</a> </li>
                                        <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                        </li>
                                        <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                        </li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="my-account.html">Account Page</a></li>
                                        <li><a href="login.html">Login & Register Page</a></li>
                                        <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                <li><a href="blog-list.html">Blog List Page</a></li>
                                <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single Page</a></li>
                                <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social mt-auto">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section ">
            <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
                <!-- Hero slider Active -->
                <div class="swiper-wrapper">
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                        data-bg-image="/assets/client/images/hero/bg/hero-bg-2-1.webp">
                        <div class="container h-100">
                            <div class="row h-100 flex-row-reverse">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                        <h2 class="title-1">Easy Your Life <br>
                                            For Smart Device </h2>
                                        <span class="price">
                                            <span class="mini-title">Only</span>
                                            <span class="amount">$24.00</span>
                                        </span>
                                        <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Shop
                                            All Devices</a>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                    <div class="show-case">
                                        <div class="hero-slide-image slider-2">
                                            <img src="/assets/client/images/hero/inner-img/hero-2-1.png"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                        data-bg-image="/assets/client/images/hero/bg/hero-bg-2-1.webp">
                        <div class="container h-100">
                            <div class="row h-100 flex-row-reverse">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                        <h2 class="title-1">Easy Your Life <br>
                                            For Smart Device </h2>
                                        <span class="price">
                                            <span class="mini-title">Only</span>
                                            <span class="amount">$24.00</span>
                                        </span>
                                        <a href="shop-left-sidebar.html" class="btn btn-primary text-capitalize">Shop
                                            All Devices</a>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                    <div class="show-case">
                                        <div class="hero-slide-image slider-2">
                                            <img src="/assets/client/images/hero/inner-img/hero-2-1.png"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="banner-area style-two pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-banner nth-child-2 mb-lm-30px">
                            <img src="/assets/client/images/banner/6.webp" alt="">
                            <div class="banner-content nth-child-3">
                                <h3 class="title">Speaker</h3>
                                <span class="category">From $69.00</span>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i
                                        class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-banner nth-child-2">
                            <img src="/assets/client/images/banner/7.webp" alt="">
                            <div class="banner-content nth-child-2">
                                <h3 class="title">Smartphone</h3>
                                <span class="category">From $95.00</span>
                                <a href="shop-left-sidebar.html" class="shop-link">Shop Now <i
                                        class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-area pb-100px">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">New Products</h2>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="row mb-n-30px">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="/assets/client/images/product-image/1.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/client/images/product-image/1.webp"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-10%</span>
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="/assets/client/images/product-image/2.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/client/images/product-image/2.webp"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$48.50</span>
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="/assets/client/images/product-image/3.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/client/images/product-image/3.webp"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Music Box
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="/assets/client/images/product-image/4.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/client/images/product-image/1.webp"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="/assets/client/images/product-image/5.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/client/images/product-image/5.webp"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-8%</span>
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="/assets/client/images/product-image/6.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/client/images/product-image/6.webp"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Smart Table Camera
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$138.50</span>
                                            <span class="new">$112.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">Sale</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="/assets/client/images/product-image/7.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/client/images/product-image/1.webp"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Round Pocket Router
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="sale">-5%</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img src="/assets/client/images/product-image/8.webp" alt="Product" />
                                            <img class="hover-image" src="/assets/client/images/product-image/8.webp"
                                                alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <span class="category"><a href="#">Accessories</a></span>
                                        <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="old">$260.00</span>
                                            <span class="new">$238.50</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                        <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Wishlist"><i
                                                class="pe-7s-like"></i></button>
                                        <button class="action quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                        <button class="action compare" title="Compare" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal-Compare"><i
                                                class="pe-7s-refresh-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-area pt-100px pb-100px">
            <div class="container">
                <div class="feature-wrapper">
                    <div class="single-feture-col mb-md-30px mb-lm-30px">
                        <!-- single item -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="/assets/client/images/icons/1.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Free Shipping</h4>
                                <span class="sub-title">Capped at $39 per order</span>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="single-feture-col mb-md-30px mb-lm-30px">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="/assets/client/images/icons/2.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Card Payments</h4>
                                <span class="sub-title">12 Months Installments</span>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="single-feture-col">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="/assets/client/images/icons/3.png" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Easy Returns</h4>
                                <span class="sub-title">Shop With Confidence</span>
                            </div>
                        </div>
                        <!-- single item -->
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')

    </div>
    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                            class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/zoom-image/1.webp"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/zoom-image/2.webp"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/zoom-image/3.webp"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/zoom-image/4.webp"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/zoom-image/5.webp"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/small-image/1.webp"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/small-image/2.webp"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/small-image/3.webp"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/small-image/4.webp"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="/assets/client/images/product-image/small-image/5.webp"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Modern Smart Phone</h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review
                                            )</a></span>
                                </div>
                                <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do
                                    eiusmll tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip exet commodo consequat.
                                    Duis aute irure dolor</p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>SKU:</span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">ETC</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">Phone</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="/assets/client/images/icons/payment.png"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to cart successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="/assets/client/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal wishlist -->
    <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to Wishlist successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="/assets/client/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal compare -->
    <div class="modal customize-class fade" id="exampleModal-Compare" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to compare successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="/assets/client/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files -->
    <script src="/assets/client/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/assets/client/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assets/client/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="/assets/client/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="/assets/client/js/plugins/jquery.countdown.min.js"></script>
    <script src="/assets/client/js/plugins/swiper-bundle.min.js"></script>
    <script src="/assets/client/js/plugins/scrollUp.js"></script>
    <script src="/assets/client/js/plugins/venobox.min.js"></script>
    <script src="/assets/client/js/plugins/jquery-ui.min.js"></script>
    <script src="/assets/client/js/plugins/mailchimp-ajax.js"></script>

    <!--Main JS-->
    <script src="/assets/client/js/main.js"></script>
</body>

</html>
