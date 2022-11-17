@extends('client.layouts.master')

@section('title')
    Hizmetlerimiz
@endsection
@section('css')

@endsection


@section('content')

<!-- Product Section -->
<div id="product-section" class="product-section container-fluid no-padding" style="margin-top: 50px;padding-bottom: 100px">
    <!-- Container -->
    <div class="container">

        <div class="row">
            <div class="section-header">
                <h2><span class="uppercase">{{ $catName }}</span> Kategorisindeki Ürünler</h2>
                <img src="{{ asset('assets/client') }}/images/section-seprator.png" alt="section-seprator" />
            </div>

            <!-- Products -->
            @if (count($products) > 0)
            @foreach ($products as $product)
            <!-- Product -->
                <div class="col-md-3 text-center" style="padding:0">
                    <div style="margin:5px;box-shadow: 0px 1px 10px 3px gainsboro;">
                        <p style="padding: 15px 15px 0 15px">
                            <a href="{{ route('product.detail',$product->slug) }}" class="text-center">
                                @foreach (App\Models\Image::where('product_id', $product->id)->get()->take(1) as $image)
                                <img src="{{ asset('/assets/images/products/' . $image->name) }}" alt="products"
                                    style="min-height: 300px">
                                    @endforeach
                                    <hr>
                                    <h5 class="uppercase">{{ $product->name }}</h5>
                                    <span class="price">{{ number_format($product->price) . ' TL'}}</span>
                                </a>
                            </p>
                        </div>
                </div>
                <!-- Product -->
            @endforeach
            @else
            <div class="row bg-warning">
                <div class="col text-center">
                    <h2>Bu Kategoriye Ait Ürün Bulunamadı</h2>
                </div>
            </div>
            @endif
            <!-- Products /- -->
        </div><!-- Row /- -->
    </div><!-- Container /- -->
</div><!-- Product Section /- -->


@endsection

@section('js')

@endsection
