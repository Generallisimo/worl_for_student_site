<!-- подключаем основной файл с разметкой -->
@extends('shop_doors.layouts.master')
<!-- даем название странице -->
@section('title', 'Home')
<!-- вставляем контент -->
@section('content')

    <!-- Main -->
    <main class="main--wrapper">

        <!-- hero  -->
        <section class="hero hero__area">
            <div class="hero__active slider-active">
                <div class="single__hero single-slider hero__bg pt-140 pb-120" data-background="img/bg/h1__hero__bg.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="hero__caption">
                                    <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">End Season Sale</span>
                                    <a href="#" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__hero single-slider hero__bg pt-140 pb-120" data-background="img/bg/h1__hero__bg.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="hero__caption">
                                    <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">End Season Sale</span>
                                    <!-- <h2 class="product--name__hero white-color f-200 mb-50" data-animation="fadeInUp" data-delay=".5s">Wooden Furniture</h2>
                                    <p class="product--price__hero white-color mb-20" data-animation="fadeInLeft" data-delay=".7s"><span class="f-300">Wide Rang Start From</span><span class="price f-800"><sup>$</sup>260.00</span></p> -->
                                    <a href="#" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__hero single-slider hero__bg pt-140 pb-120" data-background="img/bg/h1__hero__bg.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="hero__caption">
                                    <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">End Season Sale</span>
                                    <!-- <h2 class="product--name__hero white-color f-200 mb-50" data-animation="fadeInUp" data-delay=".5s">Wooden Furniture</h2>
                                    <p class="product--price__hero white-color mb-20" data-animation="fadeInLeft" data-delay=".7s"><span class="f-300">Wide Rang Start From</span><span class="price f-800"><sup>$</sup>260.00</span></p> -->
                                    <a href="#" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__hero single-slider hero__bg pt-140 pb-120" data-background="img/bg/h1__hero__bg.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="hero__caption">
                                    <span class="offer--title__hero white-color f-800" data-animation="fadeInDown" data-delay=".2s">End Season Sale</span>
                                    <!-- <h2 class="product--name__hero white-color f-200 mb-50" data-animation="fadeInUp" data-delay=".5s">Wooden Furniture</h2>
                                    <p class="product--price__hero white-color mb-20" data-animation="fadeInLeft" data-delay=".7s"><span class="f-300">Wide Rang Start From</span><span class="price f-800"><sup>$</sup>260.00</span></p> -->
                                    <a href="#" class="btn orange-bg-btn f-700" data-animation="fadeInDown" data-delay=".9s">Start Buying</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero end -->

        <!-- Discover All Product  -->
        <section class="all__product pt-80 pb-20">
            <div class="all__product--nav">
                <div class="container">
                    <div class="row all__product--row align-items-center justify-content-between">
                        <div class="col-xl-9 col-md-9">
                            <div class="all__product--menu mb-30">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link btn gray-bg-btn pure__black-color" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Popular Product</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="all__product--link text-right mb-30">
                                <a class="all-link" href="shop-collection.html">Discover All Products<span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all__product--body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="product__active owl-carousel">
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__01.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__02.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__02.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__04.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__03.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__05.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__04.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__06.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__05.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__07.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__06.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__08.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__07.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__09.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="product__active owl-carousel">
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__01.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__02.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__02.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__04.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__03.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__05.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__04.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__06.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__05.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__07.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__06.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__08.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__07.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__09.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="product__active owl-carousel">
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__01.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__02.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__02.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__04.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__03.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__05.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__04.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__06.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__05.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__07.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__06.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__08.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                        <div class="product__single">
                                            <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="product-details.html" class="img-wrapper">
                                                        <img class="img" src="img/allproducts/products__thumb__07.jpg" alt="">
                                                        <img class="img secondary-img" src="img/allproducts/products__thumb__09.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">SAMSUNG</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                            Degree</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="rating">
                                                        <ul class="list-inline">
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li class="rating-active"><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">$2,299.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                                <a href="#"><span class="lnr lnr-eye"></span></a>
                                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                                <a href="#"><span class="lnr lnr-sync"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Discover All Product end -->

        <!-- Top Featured Area  -->
        <div class="top__featured--area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2">
                        <div class="top__featured--title">
                            <span class="dusty__gray-color text-uppercase">Top Featured</span>
                            <h3 class="pure__black-color mb-120"><span class="f-300">Discover Top</span> <span class="f-800">Categories</span></h3>
                            <a class="grenadier-color" href="shop-collection.html">View All Category</a>
                        </div>
                    </div>
                    <div class="col-xl-10">
                        <div class="categories-active row position-relative">
                            <div class="single-categories col-sm-12">
                                <div class="categories-box position-relative">
                                    <div class="categories-thumb">
                                        <a href="#"><img class="img" src="img/categories/cate__thumb1.jpg" alt=""></a>
                                        <h6 class="f-800 pure__black-color cate-title"><a href="#">Relexing Chair</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-categories col-sm-12">
                                <div class="categories-box position-relative">
                                    <div class="categories-thumb">
                                        <a href="#"><img class="img" src="img/categories/cate__thumb2.jpg" alt=""></a>
                                        <h6 class="f-800 pure__black-color cate-title"><a href="#">Mattresses</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-categories col-sm-12">
                                <div class="categories-box position-relative">
                                    <div class="categories-thumb">
                                        <a href="#"><img class="img" src="img/categories/cate__thumb3.jpg" alt=""></a>
                                        <h6 class="f-800 pure__black-color cate-title"><a href="#">Wooden Table</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-categories col-sm-12">
                                <div class="categories-box position-relative">
                                    <div class="categories-thumb">
                                        <a href="#"><img class="img" src="img/categories/cate__thumb4.jpg" alt=""></a>
                                        <h6 class="f-800 pure__black-color cate-title"><a href="#">Light & Lamp</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-categories col-sm-12">
                                <div class="categories-box position-relative">
                                    <div class="categories-thumb">
                                        <a href="#"><img class="img" src="img/categories/cate__thumb2.jpg" alt=""></a>
                                        <h6 class="f-800 pure__black-color cate-title"><a href="#">Light & Lamp</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Featured Area end -->

        <!-- offer heading  -->
        <div class="offer__heading grenadier-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="offer__heading--title text-center">
                            <p class="mb-0"><a class="white-color" href="#">Don’t Miss Our Furniture, Lighting & Decorative
                                    Piece Discount 70% Special Offer - <strong class="f-800">‘NEW01’</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offer heading end -->

        <!-- Product  -->
        <div class="product pt-60 fix">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-6">
                        <div class="product-section mb-30">
                            <h6 class="product--section__title f-800 white-color grenadier-bg">Featured Items</h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="all__product--link text-right mb-30">
                            <a class="all-link" href="shop-collection.html">Discover All Products<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product__active owl-carousel mb-20">
                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="product-details.html" class="img-wrapper">
                                            <img class="img" src="img/allproducts/products__thumb__06.jpg" alt="">
                                            <img class="img secondary-img" src="img/allproducts/products__thumb__08.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name">SAMSUNG</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                Degree</a></h6>
                                    </div>
                                    <div class="product__content--rating d-flex justify-content-between">
                                        <div class="rating">
                                            <ul class="list-inline">
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5 class="grenadier-color f-600">$2,299.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-eye"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                    <a href="#"><span class="lnr lnr-sync"></span></a>
                                </div>
                            </div>
                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="product-details.html" class="img-wrapper">
                                            <img class="img" src="img/allproducts/products__thumb__07.jpg" alt="">
                                            <img class="img secondary-img" src="img/allproducts/products__thumb__09.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name">SAMSUNG</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                Degree</a></h6>
                                    </div>
                                    <div class="product__content--rating d-flex justify-content-between">
                                        <div class="rating">
                                            <ul class="list-inline">
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5 class="grenadier-color f-600">$2,299.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-eye"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                    <a href="#"><span class="lnr lnr-sync"></span></a>
                                </div>
                            </div>
                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="product-details.html" class="img-wrapper">
                                            <img class="img" src="img/allproducts/products__thumb__08.jpg" alt="">
                                            <img class="img secondary-img" src="img/allproducts/products__thumb__05.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name">SAMSUNG</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                Degree</a></h6>
                                    </div>
                                    <div class="product__content--rating d-flex justify-content-between">
                                        <div class="rating">
                                            <ul class="list-inline">
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5 class="grenadier-color f-600">$2,299.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-eye"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                    <a href="#"><span class="lnr lnr-sync"></span></a>
                                </div>
                            </div>
                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="product-details.html" class="img-wrapper">
                                            <img class="img" src="img/allproducts/products__thumb__09.jpg" alt="">
                                            <img class="img secondary-img" src="img/allproducts/products__thumb__03.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name">SAMSUNG</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                Degree</a></h6>
                                    </div>
                                    <div class="product__content--rating d-flex justify-content-between">
                                        <div class="rating">
                                            <ul class="list-inline">
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5 class="grenadier-color f-600">$2,299.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-eye"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                    <a href="#"><span class="lnr lnr-sync"></span></a>
                                </div>
                            </div>
                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="product-details.html" class="img-wrapper">
                                            <img class="img" src="img/allproducts/products__thumb__10.jpg" alt="">
                                            <img class="img secondary-img" src="img/allproducts/products__thumb__02.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name">SAMSUNG</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                Degree</a></h6>
                                    </div>
                                    <div class="product__content--rating d-flex justify-content-between">
                                        <div class="rating">
                                            <ul class="list-inline">
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5 class="grenadier-color f-600">$2,299.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-eye"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                    <a href="#"><span class="lnr lnr-sync"></span></a>
                                </div>
                            </div>
                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="product-details.html" class="img-wrapper">
                                            <img class="img" src="img/allproducts/products__thumb__11.jpg" alt="">
                                            <img class="img secondary-img" src="img/allproducts/products__thumb__06.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name">SAMSUNG</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                Degree</a></h6>
                                    </div>
                                    <div class="product__content--rating d-flex justify-content-between">
                                        <div class="rating">
                                            <ul class="list-inline">
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5 class="grenadier-color f-600">$2,299.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-eye"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                    <a href="#"><span class="lnr lnr-sync"></span></a>
                                </div>
                            </div>
                            <div class="product__single">
                                <div class="product__box">
                                    <div class="product__thumb">
                                        <a href="product-details.html" class="img-wrapper">
                                            <img class="img" src="img/allproducts/products__thumb__08.jpg" alt="">
                                            <img class="img secondary-img" src="img/allproducts/products__thumb__04.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__content--top">
                                        <span class="cate-name">SAMSUNG</span>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">Wireless Audioing Systems Purple
                                                Degree</a></h6>
                                    </div>
                                    <div class="product__content--rating d-flex justify-content-between">
                                        <div class="rating">
                                            <ul class="list-inline">
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li class="rating-active"><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5 class="grenadier-color f-600">$2,299.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <a href="#"><span class="lnr lnr-heart"></span></a>
                                    <a href="#"><span class="lnr lnr-eye"></span></a>
                                    <a href="#"><span class="lnr lnr-cart"></span></a>
                                    <a href="#"><span class="lnr lnr-sync"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product end -->
        
        <!-- what shop-max offer -->
        <section class="offer gray-bg pt-60 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="offer__section--text pt-25 mb-75">
                            <h4 class="offer-title f-800 black-color position-relative mb-40">What Shopmax Offer?</h4>
                            <p>Lorem Ipsum is simply dummy texting of the printings and typesettingi amet industry. Simply Dummy
                                has been the industry's standard dummy text ever since 1500s exting of the printing and
                                typesetting amet industry.</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="features mb-25">
                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                        <div class="features--box__text">
                                            <h5 class="f-700 pure__black-color"><a href="#">Easy & Free Return</a></h5>
                                            <p>All Over Worldwide</p>
                                        </div>
                                        <div class="features--box__icon">
                                            <i><img src="img/icon/money-back-gurantee.svg" alt=""></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                        <div class="features--box__text">
                                            <h5 class="f-700 pure__black-color"><a href="#">Money Guarantee</a></h5>
                                            <p>Seal Of Trusts</p>
                                        </div>
                                        <div class="features--box__icon">
                                            <i><img src="img/icon/money-back-gurantee.svg" alt=""></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                        <div class="features--box__text">
                                            <h5 class="f-700 pure__black-color"><a href="#">Online Need Helps</a></h5>
                                            <p>24/7 Online Support</p>
                                        </div>
                                        <div class="features--box__icon">
                                            <i><img src="img/icon/money-back-gurantee.svg" alt=""></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 d-lg-none d-xl-block">
                                    <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                        <div class="features--box__text">
                                            <h5 class="f-700 pure__black-color"><a href="#">Gift Card & Voucher</a></h5>
                                            <p>Item per Month</p>
                                        </div>
                                        <div class="features--box__icon">
                                            <i><img src="img/icon/money-back-gurantee.svg" alt=""></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- what shop-max offer end -->

        <!-- Brand -->
        <div class="brand">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="brand-active">
                            <div class="single-brand">
                                <img src="img/brand/brand-logo1.png" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="img/brand/brand-logo2.png" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="img/brand/brand-logo3.png" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="img/brand/brand-logo4.png" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="img/brand/brand-logo5.png" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="img/brand/brand-logo2.png" alt="">
                            </div>
                            <div class="single-brand">
                                <img src="img/brand/brand-logo1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

    </main>
    <!-- Main End -->

@endsection