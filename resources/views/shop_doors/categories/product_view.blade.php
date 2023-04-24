<!-- подключаем основной файл с разметкой -->
@extends('shop_doors.layouts.master')
<!-- даем название странице -->
@section('title', 'Product')
<!-- вставляем контент -->
@section('content')

    <!-- Main -->
    <main class="main--wrapper">


        <!-- Shop-details start -->
        <section class="shop-details-area pb-80">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 order-2 order-lg-1">
                    <div class="cart-wrapper">
                            <h2>Check List</h2>
                            <div class="price mt-15 mb-20">
                                <h4>$ {{$products->price}}</h4>
                            </div>
                            <form action="{{route('shop_view_add', ['product_id'=>$products])}}" method="POST">
                                @csrf
                                <div class="field ">
                                    <label>Quantity:</label>
                                    <input type="hidden" name="product_id" value="{{$products->id}}">
                                    <input type="number" name="quantety" value="1">
                                </div>
                                @if(auth()->check())
                                <a class="cart-button mt-1 mb-1"><button type="submit" class="btn_s" style="background: none;border:none;color:white;">Add To Cart</button></a>
                                @else
                                <a href="{{route('shop_auth')}}" class="cart-button mt-1 mb-1 btn_s">Add To Cart</a>
                                @endif
                            </form>
                            <a href="{{route('shop_cart')}}" class="buy-button mb-5 ">To My Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 order-1 order-lg-2">
                        <div class="pro-img">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5"><img src="{{asset('images/'.$products->image)}}" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 order-3 order-lg-3">
                        <div class="pro-content">
                            <span>{{$products->category->name}}</span>
                            <h5 class="title">{{$products->name}}</h5>
                            <div class="about-pro">
                                <p class="f-400">{{$products->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop-details end -->

        <!-- Product  -->
            <div class="product pt-75 product-h-two">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-12">
                            <div class="section-header">
                                <div class="row align-items-center">
                                    <div class="col-xl-9 col-sm-6">
                                        <div class="product-section2">
                                            <h6 class="product--section__title2"><span>Best Product</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($prod as $item)
                        <div class="col-sm-3">
                            <div class="product__single">
                                <div class="product__box ">
                                        <div class="product__content--top">
                                            <span class="cate-name">{{$item->name}}</span>
                                        </div>
                                        <div class="product__thumb">
                                            <a href="{{route('shop_view', ['product_id'=>$item])}}" class="img-wrapper">
                                                <img class="img" src="{{asset('images/'.$item->image)}}" alt="" style="height:300px">
                                            </a>
                                        </div>
                                        <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="product-details.html">{{substr($item->description, 0 ,30)}}...</a></h6>
                                        <div class="product__content--rating d-flex justify-content-between">
                                            <div class="price">
                                                <h5 class="grenadier-color f-600">$ {{$item->price}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
            <!-- Product end -->

    </main>
    <!-- Main End -->

@endsection