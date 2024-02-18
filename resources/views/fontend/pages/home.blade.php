@extends('fontend.layout.master')
@section('content')
    {{-- --------- SLIDER SECTION START ------------------  --}}
    @include('fontend.components.slider')
    {{-- --------- SLIDER SECTION END ------------------  --}}

    {{-- <!-- START SECTION CARD --> --}}
    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('fontend') }}/images/shop_banner_img7.jpg" alt="shop_banner_img7">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('fontend') }}/images/shop_banner_img8.jpg" alt="shop_banner_img8">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img src="{{ asset('fontend') }}/images/shop_banner_img9.jpg" alt="shop_banner_img9">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- END SECTION CARD --> --}}


    {{-- ----------- START SECTION CATEGORIES --------------- --}}
    @include('fontend.components.bycategory')
    {{-- ------------ END SECTION CATEGORIES --------------- --}}


    {{-- <!-- START SECTION SHOP --> --}}
    @include('fontend.components.shop')
    {{-- <!-- END SECTION SHOP --> --}}

    <!-- START SECTION SINGLE BANNER -->
    <div class="section bg_light_blue2 pb-0 pt-md-0">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-6 offset-md-1">
                    <div class="medium_divider d-none d-md-block clearfix"></div>
                    <div class="trand_banner_text text-center text-md-start">
                        <div class="heading_s1 mb-3">
                            <span class="sub_heading">New season trends!</span>
                            <h2>Best Summer Collection</h2>
                        </div>
                        <h5 class="mb-4">Sale Get up to 50% Off</h5>
                        <a href="shop-left-sidebar.html" class="btn btn-fill-out rounded-0">Shop Now</a>
                    </div>
                    <div class="medium_divider clearfix"></div>
                </div>
                <div class="col-md-5">
                    <div class="text-center trading_img">
                        <img src="{{ asset('fontend') }}//images/tranding_img.png" alt="tranding_img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SINGLE BANNER -->

    {{-- ---------------  LETEST PRODUCTS START --------------- --}}
    @include('fontend.components.letestProduct')
    {{-- ---------------  LETEST PRODUCTS END --------------- --}}

    {{-- ----------- START SECTION BRAND --------------- --}}
    @include('fontend.components.brande')
    {{-- ------------ END SECTION BRAND --------------- --}}
    <br><br>

    {{-- ------------ BLOG SECTION START --------------- --}}
    @include('fontend.components.blog')
    {{-- ------------ BLOG SECTION END --------------- --}}


    {{-- ----- START SECTION TESTIMONIAL ------------------- --}}
    @include('fontend.components.testimonial')
    {{-- ----- END SECTION TESTIMONIAL ------------------- --}}

    <!-- START SECTION SHOP INFO -->

    <div class="middle_footer pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shopping_info">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style2">
                                    <div class="icon">
                                        <i class="flaticon-shipped"></i>
                                    </div>
                                    <div class="icon_box_content">
                                        <h5>Free Delivery</h5>
                                        <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style2">
                                    <div class="icon">
                                        <i class="flaticon-money-back"></i>
                                    </div>
                                    <div class="icon_box_content">
                                        <h5>30 Day Returns Guarantee</h5>
                                        <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style2">
                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <div class="icon_box_content">
                                        <h5>27/4 Online Support</h5>
                                        <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (async () => {
            await Category();
            await MenuCategory();
            await Slider();
            await TopCategory();
            $(".preloader").delay(50).fadeOut(60).addClass('loaded');
            await New();
            await Populer();
            await Top();
            await Special();
            await Trending();
            
        })()
    </script>
@endsection
