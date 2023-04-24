<!-- подключаем основной файл с разметкой -->
@extends('shop_doors.layouts.master')
<!-- даем название странице -->
@section('title', 'Category')
<!-- вставляем контент -->
@section('content')


<main class="main--wrapper">

<!-- shop area start -->
<div class="product shop-page pt-80 pb-80 fix">
    <div class="container">
        <div class="border-b">
            <div class="row">
                <div class="col-lg-5 col-md-4">
                    <div class="shop-bar d-flex align-items-center">
                        <h4 class="f-800 cod__black-color">{{$category->name}}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-30">
        @foreach($prod as $product)
            <div class="col-sm-3" >
                    <div class="product__single" >
                        <div class="product__box">
                            <div class="product__thumb">
                                <a href="{{route('shop_view', ['product_id'=>$product])}}" class="img-wrapper" style="text-align: center;">
                                    <img class="img" src="{{asset('images/'.$product->image)}}" alt="" style="max-height: 300px;">
                                </a>
                            </div>
                            <div class="product__content--top">
                                    <span class="cate-name">{{$product->name}}</span>
                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="{{route('shop_view', ['product_id'=>$product])}}">{{substr($product->description, 0 ,100)}}...</a></h6>
                                <div class="product__content--rating d-flex justify-content-between mt-3">
                                    <div class="price">
                                        <h5 class="grenadier-color f-600">$ {{$product->price}}</h5>
                                    </div>
                                    <div class="price">
                                        <a href="{{route('shop_view', ['product_id'=>$product])}}" >View...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- shop area end -->

</main>
<!-- Main End -->


@endsection