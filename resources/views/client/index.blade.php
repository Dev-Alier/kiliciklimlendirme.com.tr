@extends('client.layouts.master')
@section('title')
    @lang('translation.HomePage')
@endsection
@section('css')
    <link href="{{ URL::asset('/https://www.ucay.com.tr/assets/libs/admin-resources/admin-resources.min.css') }}"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('/https://www.ucay.com.tr/assets/css/style.css') }}" />
    <style>
        .main-content {
            margin-left: auto !important;
        }
    </style>
@endsection
@section('content')
    <!-- BEGIN: Slider -->
    @include('client.pages.slider')
    <!-- BEGIN: Slider -->



    <!-- BEGIN: Blog Section -->
    <x-blog :blogs="$blogs" :showTitle="true"></x-blog>
    <!-- END: Blog Section -->


    <!-- BEGIN: Services Section -->
    @include('client.pages.showroom-products')
    <!-- END: Showroom Products Section -->

    <!-- BEGIN: Showroom Products Section -->
    @include('client.pages.services')
    <!-- END: Services Section -->


    <!-- BEGIN: Showroom Products Section -->
    @include('client.pages.solution-partners')
    <!-- END: Services Section -->



@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.min.js"></script>
@endsection
