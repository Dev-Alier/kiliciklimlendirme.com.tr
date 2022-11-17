@extends('client.layouts.master')

@section('title')
    Hizmetlerimiz
@endsection
@section('css')
@endsection


@section('content')
    <div class="service-section latest-blog container-fluid"
        style="padding-top: 25px;
background: #ebebebb9; margin-bottom:15px; padding-bottom:25px">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2><span class="uppercase">{{ $serviceName }}</span> Kategorisindeki Hizmetler</h2>
                    <img src="{{ asset('assets/client') }}/images/section-seprator.png" alt="section-seprator" />
                </div>
                @if (count($services) > 0)
                    @foreach ($services as $service)
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="type-post">
                                <div class="entry-cover" style="display: flex;justify-content: center;">
                                    <a href="{{ route('service.detail', $service->slug) }}"><img
                                            src="{{ asset('assets/images/services') . '/' . $service->image }}"
                                            alt="{{ $service->slug }}" style="height: 191px"></a>
                                    <span class="post-date"><a href="#"><i
                                                class="fa fa-calendar-o"></i>{{ $service->created_at->translatedFormat('F Y') }}</a></span>
                                </div>
                                <div class="blog-content">
                                    <h3 class="entry-title"><a href="blog-post.html"
                                            title="new Collectios are imported In Our shop.">{{ $service->name }}</a></h3>

                                    <div class="entry-content">
                                        <p>
                                            {!! Str::substr($service->description, 0, 200) !!}
                                        </p>
                                        <a href="{{ route('service.detail', $service->slug) }}" title="Read More"
                                            class="read-more">Devamını Oku<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row bg-warning">
                        <div class="col text-center">
                            <h2>Bu Kategoriye Ait Hizmet Bulunamadı</h2>
                        </div>
                    </div>
                @endif
            </div>

        </div><!-- Container /- -->
    </div>
@endsection

@section('js')
@endsection
