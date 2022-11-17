@extends('client.layouts.master')
@section('title')
    @lang('translation.search_domain')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css') }}">
    <style>
        .main-content {
            margin-left: auto !important;
        }
    </style>
@endsection

@section('content')
<section class="domain-section">
    <div class="section-content domain-list">

        <div class="container mt-4">
            <div class="row">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>DOMAİNLERİMİZ</h3>
                    <p>İyi Bir Domain Şimdiye Kadar Yapılmış En İyi Yatırımdır.</p>
                    <img src="{{ asset('assets/client') }}/images/section-seprator.png" alt="section-seprator" />
                </div><!-- Section Header /- -->

                <div class="row input-row pb-4" style="display: block;margin-left: 29%;width: 50%;">
                            @include('components.search')

                </div>
                <div class="domain-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Domain Adı</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $domain)
                                <tr>
                                    <td>{{ $domain->name }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-sm btn-warning offerBtn" href="/teklif/{{ $domain->slug }}">Teklif
                                                Ver</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@section('script')

    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/index.min.js') }}"></script>

@endsection
