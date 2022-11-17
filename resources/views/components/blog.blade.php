@props(['blogs','showTitle'])
<div class="blog-section latest-blog container-fluid" style="padding-top: 25px;
background: #ebebebb9; margin-bottom:15px; padding-bottom:25px">
    <!-- Container -->
    <div class="container">
        @if ($showTitle)
        <!-- Section Header -->
        <div class="section-header">
            <h3>BLOG</h3>
            <p>Hizmetlerimiz ve Çalışma Alanlarımız Hakkında Bilgi Paylaşımı</p>
            <img src="{{ asset('assets/client') }}/images/section-seprator.png" alt="section-seprator" />
        </div><!-- Section Header /- -->
        @endif
        @foreach ($blogs as $blog)
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="type-post">
                    <div class="entry-cover" style="display: flex;justify-content: center;">
                        <a href="{{ route('blog.detail', $blog->slug) }}"><img src="{{ asset('assets/images/blogs') . '/' . $blog->image }}"
                                alt="{{ $blog->slug }}" style="height: 191px" ></a>
                        <span class="post-date"><a href="#"><i
                                    class="fa fa-calendar-o"></i>{{ $blog->created_at->translatedFormat('F Y') }}</a></span>
                    </div>
                    <div class="blog-content">
                        <h3 class="entry-title"><a href="blog-post.html"
                                title="{{ $blog->title }}">{{ $blog->title }}</a></h3>

                        <div class="entry-content">
                            <p>
                                {!! Str::substr($blog->description, 0, 200)!!}
                            </p>
                            <a href="{{ route('blog.detail', $blog->slug) }}" title="Read More" class="read-more">Devamını Oku<i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if($showTitle)
        <div class="row allBlog">
            <div class="col-12" style="text-align: end">
                <a type="button" href="/blog" class="btn btn-warning uppercase">Tüm Yazıları Gör <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endif
    </div><!-- Container /- -->
</div>
