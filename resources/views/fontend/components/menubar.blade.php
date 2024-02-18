<header class="header_wrap">
    <div class="top-header light_skin bg_dark d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="header_topbar_info">
                        <div class="header_offer">
                            <span>Free Ground Shipping Over $250</span>
                        </div>
                        <div class="download_wrap">
                            <span class="me-3">Download App</span>
                            <ul class="icon_list text-center text-lg-start">
                                <li><a href="#"><i class="fab fa-apple"></i></a></li>
                                <li><a href="#"><i class="fab fa-android"></i></a></li>
                                <li><a href="#"><i class="fab fa-windows"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="lng_dropdown">
                            <select name="countries" class="custome_select">
                                <option value='en' data-image="{{ asset('fontend') }}/images/eng.png"
                                    data-title="English">English
                                </option>
                                <option value='fn' data-image="{{ asset('fontend') }}/images/fn.png"
                                    data-title="France">France
                                </option>
                                <option value='us' data-image="{{ asset('fontend') }}/images/us.png"
                                    data-title="United States">
                                    United States</option>
                            </select>
                        </div>
                        <div class="ms-3">
                            <select name="countries" class="custome_select">
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>
                                <option value='GBR' data-title="GBR">GBR</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header dark_skin">
        <div class="container">
            <div class="nav_block">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img class="logo_light" src="{{ asset('fontend') }}/images/logo_light.png" alt="logo">
                    <img class="logo_dark" src="{{ asset('fontend') }}/images/logo_dark.png" alt="logo">
                </a>
                <div class="product_search_form radius_input search_form_btn">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null not_chosen" id="alCategory">
                                        <option value="">All Category</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" placeholder="Search Product..." required="" type="text">
                            <button type="submit" class="search_btn3">Search</button>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span
                                class="wishlist_count">0</span></a></li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                            data-bs-toggle="dropdown"><i class="linearicons-bag2"></i><span
                                class="cart_count">2</span><span class="amount"><span
                                    class="currency_symbol">$</span>159.00</span></a>
                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{ asset('fontend') }}/images/cart_thamb1.jpg"
                                            alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{ asset('fontend') }}/images/cart_thamb2.jpg"
                                            alt="cart_thumb2">Ornare
                                        sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                            class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View
                                        Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                    <div class="categories_wrap">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent"
                            aria-expanded="false" class="categories_btn categories_menu">
                            <span>All Categories </span><i class="linearicons-menu"></i>
                        </button>
                        <div id="navCatContent" class="navbar nav collapse">
                            <ul id="CategoryItem">
                            </ul>
                            <div class="more_categories">More Categories</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:;" class="nav-link pr_search_trigger"><i
                                    class="linearicons-magnifier"></i></a>
                        </div>
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            <ul class="navbar-nav">
                                <li class="dropdown">
                                    <a class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav-link" href="#"
                                        data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="/policy?type=about">About
                                                    Us</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="/policy?type=contact">Contact
                                                    Us</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="/policy?type=how t buy">How To Buy</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item" href="/policy?type=complain">Complain</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="/policy?type=refund">Refund</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="login.html">Login</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="signup.html">Register</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="/policy?type=terms">Terms and Conditions</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-toggle nav-link" href="#"
                                        data-bs-toggle="dropdown">Products</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Woman's</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-left-sidebar.html">Donec porttitor</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-right-sidebar.html">Donec vitae facilisis</a>
                                                    </li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-list.html">Curabitur tempus</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-load-more.html">Vivamus in tortor</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Men's</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-cart.html">Donec vitae ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="checkout.html">Etiam ac rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="wishlist.html">Quisque condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="compare.html">Curabitur laoreet</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="order-completed.html">Vivamus in tortor</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Kid's</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail.html">Donec vitae facilisis</a>
                                                    </li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-left-sidebar.html">Quisque
                                                            condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-right-sidebar.html">Etiam ac
                                                            rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-thumbnails-left.html">Donec vitae
                                                            ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-thumbnails-left.html">Donec
                                                            porttitor</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Accessories</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail.html">Donec vitae facilisis</a>
                                                    </li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-left-sidebar.html">Quisque
                                                            condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-right-sidebar.html">Etiam ac
                                                            rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-thumbnails-left.html">Donec vitae
                                                            ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="shop-product-detail-thumbnails-left.html">Donec
                                                            porttitor</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="d-lg-flex menu_banners row g-3 px-3">
                                            <div class="col-lg-6">
                                                <div class="header-banner">
                                                    <div class="sale-banner">
                                                        <a class="hover_effect1" href="#">
                                                            <img src="{{ asset('fontend') }}/images/shop_banner_img7.jpg"
                                                                alt="shop_banner_img7">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="header-banner">
                                                    <div class="sale-banner">
                                                        <a class="hover_effect1" href="#">
                                                            <img src="{{ asset('fontend') }}/images/shop_banner_img8.jpg"
                                                                alt="shop_banner_img8">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class=" nav-link" href="#">Shop</a>
                                </li>
                                <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>123-456-7689</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


<script>
    async function MenuCategory() {
        let res = await axios.get("/CategoryList");
        $("#CategoryItem").empty()
        res.data['data'].forEach((item, i) => {
            let EachItem = `<li><a class="dropdown-item nav-link nav_item" href="/by-category?id=${item['id']}"><i
            class = "ion-ios-arrow-right" > </i> <span>${item['categoryName']}</span > </a></li> `
            $("#CategoryItem").append(EachItem);
        })
    }
    Category();
    async function Category() {
        let res = await axios.get("/CategoryList");
        $("#alCategory").empty()
        res.data['data'].forEach((item, i) => {
            let EachItem = ` <option value="">${item['categoryName']}</option> `
            $("#alCategory").append(EachItem);
        })
    }
</script>
