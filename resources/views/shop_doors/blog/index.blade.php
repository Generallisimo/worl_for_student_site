<!-- подключаем основной файл с разметкой -->
@extends('shop_doors.layouts.master')
<!-- даем название странице -->
@section('title', 'Blog')
<!-- вставляем контент -->
@section('content')

<!-- Main -->
<main class="main--wrapper">


<!-- blog area start -->
<section class="blog-area-three blog-page pb-80 pt-80">
    <div class="container">
        <div class="row small-padding">
            <div class="col-lg-3 col-sm-6">
                <div class="blog-single mb-60">
                    <div class="image">
                        <a href="#"><img src="img/offer/blog2.jpg" class="img-fluid img_pad" alt=""></a>
                    </div>
                    <div class="content">
                        <span class="dusty__gray-color f-400 pt-15">22 May 2020</span>
                        <span class="blog-title"><a href="#" class="cod__black-color f-700">How to fit an internal door: Easy Guide</a></span>
                        <p class="f-400">How to fit an internal door If you want to replace an old door, fitting an interior door isn’ ...</p>
                        <a href="{{route('shop_blog_view_one')}}" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="blog-single mb-60">
                    <div class="image">
                        <a href="#"><img src="img/offer/blog1.jpeg" class="img-fluid img_pad" alt=""></a>
                    </div>
                    <div class="content">
                        <span class="dusty__gray-color f-400 pt-15">22 May 2020</span>
                        <span class="blog-title"><a href="#" class="cod__black-color f-700">5 Benefits of a Composite Front Door</a></span>
                        <p class="f-400">Composite doors are everywhere. But what are they and why are they worth considering as an a ...</p>
                        <a href="{{route('shop_blog_view_two')}}" class="f-600 grenadier-color">Read More <i class="icofont-long-arrow-right grenadier-color"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->


</main>
<!-- Main End -->

@endsection