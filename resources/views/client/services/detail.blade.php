@extends('client.layouts.master')

@section('title')
    {{ $service->name }}
@endsection
@section('css')
@endsection


@section('content')
    <div class="blog-section latest-blog container-fluid"
        style="background: #ebebebb9; margin-bottom:15px; padding-bottom:25px">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <h3 class="entry-title uppercase">{{ $service->name }}</h3>
                    <hr style="border-top:1px solid rgb(35, 35, 35)">
            </div>
            <div class="row">
                   <div class="col-12">
                <div class="type-post">
                    <div class="entry-cover" style="display: flex;justify-content: center;">
                        <a href="{{ route('service.detail', $service->slug) }}"><img
                                src="{{ asset('assets/images/services') . '/' . $service->image }}"
                                alt="{{ $service->slug }}"></a>
                    </div>
                    <div class="blog-content">
                        <div class="entry-content">
                            <p>
                                {!! Str::substr($service->description, 0, 200) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div><!-- Container /- -->
    </div>
@endsection

@section('js')
@endsection
