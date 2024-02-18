<div class="section small_pt pb_70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_tab_header">
                            <div class="heading_s2">
                                <h2>Exclusive Products</h2>
                            </div>
                            <div class="tab-style2">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#tabmenubar" aria-expanded="false">
                                    <span class="ion-android-menu"></span>brandpo
                                </button>
                                <ul class="nav nav-tabs justify-content-center justify-content-md-end" id="tabmenubar"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="arrival-tab" data-bs-toggle="tab" href="#arrival"
                                            role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="populer-tab" data-bs-toggle="tab" href="#populer"
                                            role="tab" aria-controls="populer" aria-selected="false">Populer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="top-tab" data-bs-toggle="tab" href="#top"
                                            role="tab" aria-controls="top" aria-selected="false">Top</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="special-tab" data-bs-toggle="tab" href="#special"
                                            role="tab" aria-controls="special" aria-selected="false">Special Offer
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="trending-tab" data-bs-toggle="tab" href="#trending"
                                            role="tab" aria-controls="trending" aria-selected="false">Trending Offer
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">

                    {{-- ------------ New Arrival section start -------------------- --}}

                    <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                        <div class="row shop_container" id="NewItem">

                        </div>
                    </div>
                    {{-- ------------ New Arrival section end -------------------- --}}


                    {{-- ------------ populer section start -------------------- --}}
                    <div class="tab-pane fade" id="populer" role="tabpanel" aria-labelledby="populer-tab">
                        <div class="row shop_container" id="PopulerItem">

                        </div>
                    </div>
                    {{-- ------------populer section end -------------------- --}}


                    {{-- ------------ top section start -------------------- --}}
                    <div class="tab-pane fade" id="top" role="tabpanel" aria-labelledby="top-tab">
                        <div class="row shop_container" id="TopItem">

                        </div>
                    </div>
                    {{-- ------------ top section end -------------------- --}}


                    {{-- -------- special tab start -------  --}}
                    <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                        <div class="row shop_container" id="SpecialItem">

                        </div>
                    </div>
                    {{-- ------- special blog end -----  --}}

                    {{-- -------- Tending tab start -------  --}}
                    <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                        <div class="row shop_container" id="TrendingItem">

                        </div>
                    </div>
                    {{-- ------- special blog end -----  --}}
                </div>
            </div>
        </div>
    </div>
</div>

<script>

        // --- New Product ------

    async function New(){
        let res = await axios.get("/ProductListByRemark/new");
        $("#NewItem").empty()
        res.data['data'].forEach((item,i) => {
            let EachItem = `<div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="${item['image']}"
                                                alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i
                                                            class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">${item['title']}</a></h6>
                                        <div class="product_price">
                                            <span class="price">${item['price']}</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:${item['star']}%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>${item['short_des']}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>`
            $("#NewItem").append(EachItem);
        })
    }


    // --- Populer Product ------

    async function Populer(){
        let res = await axios.get("/ProductListByRemark/popular");
        $("#PopulerItem").empty()
        res.data['data'].forEach((item,i) => {
            let EachItem = `<div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="${item['image']}"
                                                alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i
                                                            class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">${item['title']}</a></h6>
                                        <div class="product_price">
                                            <span class="price">${item['price']}</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>${item['short_des']}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>`
            $("#PopulerItem").append(EachItem);
        })
    }

     // --- Top Product ------

    async function Top() {
        let res = await axios.get("/ProductListByRemark/top");
        $("#TopItem").empty()
        res.data['data'].forEach((item, i) => {
            let EachItme = `<div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="${item['image']}"
                                                alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i
                                                            class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">${item['title']}</a></h6>
                                        <div class="product_price">
                                            <span class="price">${item['price']}</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>${item['short_des']}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>`
            $("#TopItem").append(EachItme);
        })
    }

     // --- Special Product ------

    async function Special() {
        let res = await axios.get("/ProductListByRemark/special");
        $("#SpecialItem").empty()
        res.data['data'].forEach((item, i) => {
            let EachItme = `<div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="${item['image']}"
                                                alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i
                                                            class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">${item['title']}</a></h6>
                                        <div class="product_price">
                                            <span class="price">${item['price']}</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>${item['short_des']}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>`
            $("#SpecialItem").append(EachItme);
        })
    }


     // --- Trendingl Product ------
    
    async function Trending() {
        let res = await axios.get("/ProductListByRemark/trending");
        $("#TrendingItem").empty()
        res.data['data'].forEach((item, i) => {
            let EachItme = `<div class="col-lg-3 col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="${item['image']}"
                                                alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i
                                                            class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">${item['title']}</a></h6>
                                        <div class="product_price">
                                            <span class="price">${item['price']}</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>${item['short_des']}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>`
            $("#TrendingItem").append(EachItme);
        })
    }

</script>
