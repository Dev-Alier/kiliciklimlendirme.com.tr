@extends('client.layouts.master')
@section('title')
    @lang('translation.contact')
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
            background: radial-gradient(#f0f0f063, transparent);
        }
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        {!! $address->maps !!}
    </div>
    <div class="row contact-form">
        <div class="col-md-4">
            <p class="contact-icon">
                <i class="fa fa-phone fa-4x"></i>
                <p class="fs20">Telefon</p>
                <p class="fs16"><a href="tel:05050705701">05050705701</a></p>
            </p>
        </div>
        <div class="col-md-4">
            <p class="contact-icon">
                <i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
                <p class="fs20">Adres</p>
                <p class="fs16">{{ $address->address .' '. $address->city.'/'.$address->province }}</p>
            </p>
        </div>
        <div class="col-md-4">
            <p class="contact-icon">
                <i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
                <p class="fs20">E posta</p>
                <p class="fs16"><a href="mailto:{{ $address->email }}">{{ $address->email }}</a></p>
            </p>
        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/index.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/custom.js') }}"></script>
@endsection
