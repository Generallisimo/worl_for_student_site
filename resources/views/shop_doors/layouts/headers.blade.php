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
                                <h5 class="f-700 pure__black-color"><a class="logo__link" href="index.html">Doors Store</a></h5>
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
                                    <li><a href="#"><i class="fal fa-user-plus"></i></a></li>
                                    <li><a class="mini__cart--link" href="#"><i class="fal fa-bags-shopping"><span class="cart__count">3</span></i><span class="cart__amount">$ 3550</span></a></li>
                                </ul>
                            </div>
                            <div class="mini__cart--box">
                                <ul>
                                    <li class="mb-20">
                                        <div class="cart-image">
                                            <a href="#"><img src="img/allproducts/cart__thumb__1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-text">
                                            <a href="#" class="title f-400 cod__black-color">Pink Jacket</a>
                                            <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                        </div>
                                        <div class="del-button">
                                            <a href="#"><i class="icofont-close-line"></i></a>
                                        </div>
                                    </li>
                                    <li class="mb-20">
                                        <div class="cart-image">
                                            <a href="#"><img src="img/allproducts/cart__thumb__2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-text">
                                            <a href="#" class="title f-400 cod__black-color">Silk Glows</a>
                                            <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                        </div>
                                        <div class="del-button">
                                            <a href="#"><i class="icofont-close-line"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="total-text d-flex justify-content-between">
                                            <span class="f-800 cod__black-color">Total Bag </span>
                                            <span class="f-800 cod__black-color">$ 99.00</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="checkout">Checkout</a>
                                            <a href="#" class="viewcart">View Cart</a>
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
                                <li><a href="#"><i class="fal fa-user-plus"></i></a></li>
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a class="mini__cart--link" href="#"><i class="fal fa-bags-shopping"><span class="cart__count">3</span></i><span class="cart__amount">$ 3550</span></a></li>
                            </ul>
                        </div>
                        <div class="mini__cart--box">
                            <ul>
                                <li class="mb-20">
                                    <div class="cart-image">
                                        <a href="#"><img src="img/allproducts/cart__thumb__1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-text">
                                        <a href="#" class="title f-400 cod__black-color">Pink Jacket</a>
                                        <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                    </div>
                                    <div class="del-button">
                                        <a href="#"><i class="icofont-close-line"></i></a>
                                    </div>
                                </li>
                                <li class="mb-20">
                                    <div class="cart-image">
                                        <a href="#"><img src="img/allproducts/cart__thumb__2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-text">
                                        <a href="#" class="title f-400 cod__black-color">Silk Glows</a>
                                        <span class="cart-price f-400 dusty__gray-color">2 x <span class="price f-800 cod__black-color">$ 78.00</span></span>
                                    </div>
                                    <div class="del-button">
                                        <a href="#"><i class="icofont-close-line"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="total-text d-flex justify-content-between">
                                        <span class="f-800 cod__black-color">Total Bag </span>
                                        <span class="f-800 cod__black-color">$ 99.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="checkout">Checkout</a>
                                        <a href="#" class="viewcart">View Cart</a>
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
                                    <ul class="dept__menu--dropdown open">
                                        <li><a class="dept__menu--dlink" href="#">Internal Doors</a></li>
                                        <li><a class="dept__menu--dlink" href="#">External Front Doors</a></li>
                                        <li><a class="dept__menu--dlink" href="#">Handles</a></li>
                                        <li><a class="dept__menu--dlink" href="#">Frames & Mouldings</a></li>
                                        <li><a class="dept__menu--dlink" href="#">Other Products</a></li>
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
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
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
