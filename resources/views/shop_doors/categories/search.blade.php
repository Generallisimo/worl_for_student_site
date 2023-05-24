<!-- подключаем основной файл с разметкой -->
@extends('shop_doors.layouts.master')
<!-- даем название странице -->
@section('title', 'Search')
<!-- вставляем контент -->
@section('content')

<main class="main--wrapper">

<!-- shop area start -->
<div class="product shop-page pt-80 pb-80 fix">
    <div class="container">
        <div class="row mt-30">
        @if($search->count() > 0)
        @foreach($search as $item)
            <div class="col-sm-3" >
                    <div class="product__single"  >
                        <div class="product__box" >
                            <div class="product__thumb">
                                <a href="{{route('shop_view', ['product_id'=>$item])}}" class="img-wrapper" style="text-align: center;">
                                    <img class="img" src="{{asset('images/'.$item->image)}}" alt="" style="max-height: 300px;">
                                </a>
                            </div>
                            <div class="product__content--top">
                                    <span class="cate-name">{{$item->name}}</span>
                                <h6 class="product__title mine__shaft-color f-700 mb-0"><a href="{{route('shop_view', ['product_id'=>$item])}}">{{substr($item->description, 0 ,100)}}...</a></h6>
                                <div class="product__content--rating d-flex justify-content-between mt-3">
                                    <div class="price">
                                        <h5 class="grenadier-color f-600">$ {{$item->price}}</h5>
                                    </div>
                                    <div class="price">
                                        <a class="a-my" href="{{route('shop_view', ['product_id'=>$item])}}" >View &#8594;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<!-- shop area end -->

</main>
<!-- Main End -->

@endsection