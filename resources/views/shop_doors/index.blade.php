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
                <div class="single__hero single-slider hero__bg div_back"  data-background="img/bg/slider_4.jpg"></div>
                <div class="single__hero single-slider hero__bg div_back"  data-background="img/bg/slider_2.PNG"></div>
                <div class="single__hero single-slider hero__bg div_back"  data-background="img/bg/slider_3.jpg"></div>
                <div class="single__hero single-slider hero__bg div_back"  data-background="img/bg/slider_1.png"></div>
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
                                        <a class="nav-item nav-link btn gray-bg-btn pure__black-color active show" id="nav-contact-tab" data-toggle="tab"  role="tab" aria-controls="nav-contact" aria-selected="false">Popular Product</a>
                                    </div>
                                </nav>
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
                                        @foreach($products as $product)
                                        <!-- кнопка для добавления  -->
                                        <form action="{{route('shop_add_cart')}}" method="post">
                                            @csrf
                                            <div class="product__single">
                                                <div class="product__box">
                                                <div class="product__thumb">
                                                    <a href="{{route('shop_view', ['product_id'=>$product])}}" class="img-wrapper">
                                                        <img class="img" src="{{asset('images/'.$product->image)}}" style="height: 305px;" alt="">
                                                        <!-- <img class="img secondary-img" src="img/allproducts/products__thumb__02.jpg" alt=""> -->
                                                    </a>
                                                </div>
                                                <div class="product__content--top">
                                                    <span class="cate-name">{{$product->name}}</span>
                                                    <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">{{substr($product->description,0 ,30)}}...</a></h6>
                                                </div>
                                                <div class="product__content--rating d-flex justify-content-between">
                                                    <div class="price">
                                                        <h5 class="grenadier-color f-600">${{$product->price}}</h5>
                                                    </div>
                                                </div>
                                                <!-- передаем продукт -->
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="input-group">
                                                    <input type="number" name="quantety" class="form-control" value="1" min="1" max="{{ $product->stock }}">
                                                    <div class="input-group-append">
                                                        @if(auth()->check())
                                                        <button class="btn btn-primary btn-my" type="submit">Add to cart</button>
                                                        @else
                                                        <a class="btn btn-primary btn-my" href="{{route('shop_auth')}}">Add to cart</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </form>
                                        @endforeach

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
                        <div class="top__featured--title" style="text-align: center;">
                            <span class="dusty__gray-color text-uppercase">Top Featured</span>
                            <h3 class="pure__black-color mb-120"><span class="f-300"> Top</span></br> <span class="f-800">Categories</span></h3></br>
                        </div>
                    </div>
                    <div class="col-xl-10">
                        <div class="categories-active row position-relative">
                            @foreach($categories as $category)
                            <div class="single-categories col-sm-12">
                                <div class="categories-box position-relative">
                                    <div class="categories-thumb">
                                        <a href="{{route('shop_categories', ['id'=>$category->id])}}"><img class="img img_pad" src="{{asset('images/'.$category->image)}}" alt=""></a></br></br>
                                        <h6 class="f-800 pure__black-color cate-title"><a href="{{route('shop_categories', ['id'=>$category->id])}}">{{$category->name}}</a></h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Featured Area end -->
        
        <!-- what shop-max offer -->
        <section class="offer gray-bg pt-60 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="offer__section--text pt-25 mb-75">
                            <h4 class="offer-title f-800 black-color position-relative mb-40">How it works</h4>
                            <p>It couldn't be easier to find your perfect door.</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="features mb-25">
                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                        <div class="features--box__text">
                                            <h5 class="f-700 pure__black-color"><a href="#">MEASURE YOUR DOOR OPENING</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                        <div class="features--box__text">
                                            <h5 class="f-700 pure__black-color"><a href="#">SELECT YOUR DOOR SIZE</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                        <div class="features--box__text">
                                            <h5 class="f-700 pure__black-color"><a href="#">FIND YOUR PERFECT DOOR</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 d-lg-none d-xl-block">
                                    <div class="features-box d-flex align-items-center justify-content-between mb-10">
                                        <div class="features--box__text">
                                            <h5 class="f-700 pure__black-color"><a href="#">INSTALL WITH EASE</a></h5>
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