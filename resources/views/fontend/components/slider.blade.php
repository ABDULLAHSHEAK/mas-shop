<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
        <div class="carousel-inner" id="slider">


        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i
                class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i
                class="ion-chevron-right"></i></a>
    </div>
</div>
<div class="main_content">

    <script>
       
        async function Slider() {
            let res = await axios.get("/ProductListBySlider");
            $("#slider").empty()
            res.data['data'].forEach((item, i) => {
                let activeClass = ''
                if(i === 0){
                    activeClass = 'active'
                }
                let EachItem = `<div class="carousel-item active background_bg ${activeClass}" data-img-src="${item['image']}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-lg-7 col-9">
                                <div class="banner_content overflow-hidden">
                                    <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft"
                                        data-animation-delay="0.5s">${item['price']}</h5>
                                    <h2 class="staggered-animation" data-animation="slideInLeft"
                                        data-animation-delay="1s">${item['title']}</h2>
                                    <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase"
                                        href="" data-animation="slideInLeft"
                                        data-animation-delay="1.5s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>`
                $("#slider").append(EachItem);
            })
        }
    </script>
