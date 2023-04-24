<!-- Создали файл с шапкой профиля, чтобы потом её вставить в основной файл(сделано для того, чтобы не повторять код) -->
<!-- Header -->
<header class="header">
    <div class="top header__top gray-bg d-none d-md-block">
    </div>
    <div class="middle header__middle bg--header__middle pt-35 pb-35">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content--header__middle d-flex align-items-center justify-content-between">
                        <div class="logo--header__middle">
                            <div class="logo">
                                <h5 class="f-700 pure__black-color"><a class="logo__link" href="{{route('shop_home')}}">Doors Store</a></h5>
                            </div>
                        </div>
                        <div class="search--header__middle h1search--header__middle">
                            <form class="search--header__form position-relative" action="#">
                                <div class="header--search__box">
                                    <input class="header--search__query" type="text" placeholder="Search For Products...">
                                    <button class="header--search__btn"><i class="icofont-search-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="cart--header__middle d-none d-md-block">
                            <div class="cart--header__list">
                                <ul class="list-inline">
                                    <!-- меняемя кнопку на авторизации -->
                                    @if(auth()->check())
                                    <!-- добавляем админку вход в админку -->
                                        @if(auth()->user()->hasRole('admin'))
                                            <li><a href="{{route('admin')}}"><i class="fal fa-user-shield"></i></a></li>
                                        @endif
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button class="btn btn_shop" style="color: black; background:none; border:none; font-size:20px; padding:0;"><i class=" btn_shop fal fa-sign-out"></i></button>
                                            </form>
                                        </li>
                                    @else
                                        <li><a href="{{route('shop_auth')}}"><i class="fal fa-sign-in"></i></a></li>
                                    @endif
                                    <li><a class="mini__cart--link" href="#"><i class="fal fa-bags-shopping"><span class="cart__count">{{$quant}}</span></i><span class="cart__amount">$ {{$total}}</span></a></li>
                                </ul>
                            </div>
                            <div class="mini__cart--box">
                                <ul>
                                    @foreach($carts as $cart)
                                    <li class="mb-20">
                                        <div class="cart-image">
                                            <a href="#"><img src="{{asset('images/'.$cart->product->image)}}" alt=""></a>
                                        </div>
                                        <div class="cart-text">
                                            <a href="#" class="title f-400 cod__black-color">{{$cart->product->name}}</a>
                                            <span class="cart-price f-400 dusty__gray-color">{{$cart->quantety}} x <span class="price f-800 cod__black-color">$ {{$cart->product->price}}</span></span>
                                        </div>
                                        <form action="{{route('shop_delete_cart', $cart)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <div class="del-button">
                                                <button type="submit" class="btn_shop" style="border: none; background:none;">X</button>
                                            </div>
                                        </form>    
                                    </li>
                                    <li>
                                    @endforeach
                                        <div class="total-text d-flex justify-content-between">
                                            <span class="f-800 cod__black-color">Total Bag </span>
                                            <span class="f-800 cod__black-color">$ {{$total}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{route('shop_cart')}}" class="viewcart">View Cart</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom header__bottom header__bottom--border custom-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5 col-10">
                    <!-- Extra shopping cart for mobile device start -->
                    <div class="cart--header__middle d-block d-md-none">
                        <div class="cart--header__list">
                            <ul class="list-inline">
                                <!-- проверка на авторизацию -->

                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a class="mini__cart--link" href="#"><i class="fal fa-bags-shopping"><span class="cart__count">{{$quant}}</span></i><span class="cart__amount">$ {{$total}}</span></a></li>
                            </ul>
                        </div>
                        <div class="mini__cart--box">
                            <ul>
                            @foreach($carts as $cart)
                                <li class="mb-20">
                                    <div class="cart-image">
                                        <a href="#"><img src="{{asset('images/'.$cart->product->image)}}" alt=""></a>
                                    </div>
                                    <div class="cart-text">
                                        <a href="#" class="title f-400 cod__black-color">{{$cart->product->name}}</a>
                                        <span class="cart-price f-400 dusty__gray-color">{{$cart->quantety}} x <span class="price f-800 cod__black-color">$ {{$cart->product->price}}</span></span>
                                    </div>
                                    <form action="{{route('shop_delete_cart', $cart)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <div class="del-button">
                                            <button type="submit" style="border: none; background:none;">X</button>
                                        </div>
                                    </form>    
                                </li>
                                <li>
                                @endforeach
                                    <div class="total-text d-flex justify-content-between">
                                        <span class="f-800 cod__black-color">Total Bag </span>
                                        <span class="f-800 cod__black-color">$ {{$total}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Extra shopping cart for mobile device end -->
                    <div class="dept__menu position-relative d-none d-md-block">
                        <nav>
                            <ul class="dept__menu--list">
                                <li><a class="dept__menu-mlink f-900 cod__gray-color" href="JavaScript:Void(0);">Category</a>
                                    <ul class="dept__menu--dropdown">
                                    @foreach($categories as $category)
                                        <li><a class="dept__menu--dlink" href="{{route('shop_categories', ['id' => $category->id])}}">{{$category->name}}</a></li>
                                    @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 col-2">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="{{route('shop_home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('shop_about')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('shop_blog')}}">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header end /-->
