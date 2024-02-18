<div class="section small_pb small_pt">
	<div class="container">
    	<div class="row justify-content-center">
			<div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>Top Categories</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
            </div>
		</div>
        <div class="row align-items-center">
            <div class="col-12">
                <div class="cat_slider cat_style1 mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "576":{"items": "4"}, "768":{"items": "5"}, "991":{"items": "6"}, "1199":{"items": "7"}}' id="categorys">

                </div>
            </div>
        </div>
    </div>
</div>


<script>

    async function TopCategory() {
        let res = await axios.get("/CategoryList");
        $("#categorys").empty()
        res.data['data'].forEach((item, i) => {
            let EachItem = `<div class="item">
                        <div class="categories_box">
                            <a href="#">
                                <img src="${item['categoryImg']}" alt="cat_img1"/>
                                <span>${item['categoryName']}</span>
                            </a>
                        </div>
                    </div> `
            $("#categorys").append(EachItem);
        })
    }
</script>
