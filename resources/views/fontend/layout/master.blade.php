<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

<!-- SITE TITLE -->
<title>Shopwise - eCommerce Bootstrap 5 HTML Template</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend')}}/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset('fontend')}}/css/animate.css">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{asset('fontend')}}/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{asset('fontend')}}/css/all.min.css">
<link rel="stylesheet" href="{{asset('fontend')}}/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('fontend')}}/css/themify-icons.css">
<link rel="stylesheet" href="{{asset('fontend')}}/css/linearicons.css">
<link rel="stylesheet" href="{{asset('fontend')}}/css/flaticon.css">
<link rel="stylesheet" href="{{asset('fontend')}}/css/simple-line-icons.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{asset('fontend')}}/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('fontend')}}/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="{{asset('fontend')}}/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{asset('fontend')}}/css/magnific-popup.css">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{asset('fontend')}}/css/slick.css">
<link rel="stylesheet" href="{{asset('fontend')}}/css/slick-theme.css">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('fontend')}}/css/style.css">
<link rel="stylesheet" href="{{asset('fontend')}}/css/responsive.css">

<script src="{{asset('fontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('fontend/js/axios.min.js')}}"></script>
 <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@stack('js')
</head>

<body>

<!-- LOADER -->
{{-- <div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div> --}}
<!-- END LOADER -->

{{-- <!-- Home Popup Section --> --}}
{{-- ('fontend.components.popup') --}}
{{-- <!-- End Screen Load Popup Section --> --}}

{{-- <!-- START HEADER --> --}}
    @include('fontend.components.menubar')
{{-- <!-- END HEADER --> --}}

<!-- END MAIN CONTENT -->
@yield('content')
{{-- <!-- END SECTION SHOP INFO --> --}}
@include('fontend.components.footer')
{{-- <!-- END FOOTER --> --}}

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="{{asset('fontend')}}/js/jquery-3.7.1.min.js"></script>
<!-- popper min js -->
<script src="{{asset('fontend')}}/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{asset('fontend')}}/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="{{asset('fontend')}}/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="{{asset('fontend')}}/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="{{asset('fontend')}}/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="{{asset('fontend')}}/js/parallax.js"></script>
<!-- countdown js  -->
<script src="{{asset('fontend')}}/js/jquery.countdown.min.js"></script>
<!-- imagesloaded js -->
<script src="{{asset('fontend')}}/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="{{asset('fontend')}}/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="{{asset('fontend')}}/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="{{asset('fontend')}}/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="{{asset('fontend')}}/js/jquery.elevatezoom.js"></script>
<!-- scripts js -->
<script src="{{asset('fontend')}}/js/scripts.js"></script>

</body>
</html>
