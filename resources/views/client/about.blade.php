@extends('client.layouts.master')
@section('title')
    @lang('translation.about')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css') }}">
    <style>
        .main-content {
            margin-left: auto !important;
        }

        .card-header {
            border-radius: 0 0 50% 50% !important;
            padding: 35px !important;
            background-image: url('assets/images/bg-about.jpg') !important;
            background-position: center center !important;
            background-size: cover !important;
        }
    </style>
@endsection

@section('content')
<div class="about-section container-fluid no-padding" style="background: linear-gradient(179deg, #e2e2e2, transparent)">
    <!-- Container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header" style="margin-top: 50px">
            <h3><span class="text-uppercase" style="color: #b6795f">Kılıç İklimlendirme</span> Hakkında</h3>

            <img src="{{ asset('assets') }}/client/images/section-seprator.png" alt="section-seprator">
        </div><!-- Section Header /- -->
        <div class="col-md-6 col-sm-6 col-xs-6">
            <img src="{{ asset('assets') }}/client/images/about.png" alt="about">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6" style="margin-top: -28px">
            <div class="about-content">
              <p>{!! $about->description !!}</p>
            </div>
        </div>
    </div><!-- Container /- -->
</div>
@endsection

@section('script')
    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/index.min.js') }}"></script>
@endsection
