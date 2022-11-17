@extends('client.layouts.master')

@section('title')
    Yazılar
@endsection
@section('css')
@endsection


@section('content')
    <div class="container-fluid no-padding" style="background: #f3f4f6">
        <!-- Container -->
        <div class="container" style="margin-top: 60px">
            <!-- Content Area -->
            <div class="content-area blog-section blog-post col-md-8 col-sm-8 col-xs-12">
                @foreach ($blogs as $blog)
                    <article class="type-post text-center">
                        <div class="entry-cover">
                            <img src="{{ asset('assets/images/blogs') . '/' . $blog->image }}" alt="{{ $blog->title }}"
                                style="width: 100%">
                        </div>
                        <div class="blog-content">
                            <h3 class="entry-title"><span>{{ $blog->title }}</span></h3>
                            <hr>
                            <div class="entry-content">
                                <span>
                                    {!! Str::substr($blog->description, 0, 400) !!}...
                                </span>
                                <a href="{{ route('blog.detail', $blog->slug) }}" title="Read More"
                                    class="read-more btn btn-info text-white">Devamını Oku<i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <!-- Content Area /- -->

            <!-- Widget Area -->
            <div class="col-md-4 col-sm-4 col-xs-12 widget-area">
                <aside class="widget widget_latest_post">
                    <h3 class="widget-title uppercase">Son Yazılar</h3>
                    @foreach ($blogs as $blog)
                        <div class="latest-box">
                            <div class="post-box">
                                <a href="{{ route('blog.detail', $blog->slug) }}"><img
                                        src="{{ asset('assets/images/blogs') . '/' . $blog->image }}"
                                        alt="{{ $blog->title }}" width="70"></a>
                                <h5><a href="{{ route('blog.detail', $blog->slug) }}"
                                        title="need max shop.">{{ $blog->title }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </aside>
            </div><!-- Widget Area /- -->
        </div><!-- Container /- -->
    </div>
@endsection

@section('js')
@endsection
