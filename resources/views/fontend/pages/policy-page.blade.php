@extends('fontend.layout.master')
@section('content')
@include('fontend.components.policy')
@include('fontend.components.brande')

 <script>
        (async () => {
            await Category();
            await Policy()
            $(".preloader").delay(90).fadeOut(100).addClass('loaded');
            await TopBrands();
        })()
    </script>
@endsection
