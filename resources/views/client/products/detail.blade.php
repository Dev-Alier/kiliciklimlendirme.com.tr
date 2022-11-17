@extends('client.layouts.master')

@section('title')
    {{ $product->name }}
@endsection
@section('css')
@endsection


@section('content')
    <!-- Shop Single -->
    <div class="shop-single container-fluid no-padding" style="margin-top: 150px">
        <!-- Container -->
        <div class="container">
            <div class="product-views">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="carousel-item">
                        @foreach ($product->images as $image)
                            <div class="item">
                                <img src="{{ asset('assets') }}/images/products/{{ $image->name }}"
                                    alt="{{ $image->name }}" height="200" width="200"  />
                            </div>
                            @if (count($product->images) == 1)
                                <div class="item">
                                    <img src="{{ asset('assets') }}/images/products/{{ $image->name }}"
                                        alt="{{ $image->name }}" />
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <!-- Entry Summary -->
                <div class="col-md-6 col-sm-6 col-xs-12 entry-summary" style="font-size:25px">
                    <h3 class="product_title" style="font-size: 25px">{{ $product->name }}</h3>
                    <hr style="border-top: 1px solid rgb(102, 102, 102)">
                    <p class="stock in-stock uppercase" style="color: {{ $product->stock ? 'green' : 'darkred' }};font-weight:bold;font-size:17px"><span style="font-weight: 500">Stok Durumu:</span> {{ $product->stock ? 'Stokta Var' : 'Stokta Yok' }}</p>
                    <p class="stock in-stock mt15" style="font-size: 20px"><span>Ürün Kodu:</span> {{ $product->sku}}</p>

                    <span class="price mt15">{{ number_format($product->price). ' TL' }}</span>
                    <div class="mt15">
                        <a href="https:/wa.me/905050705701" target="_blank" class="uppercase">Whatsapp Üzerinden Bilgi Alın</a>
                    </div>
                    <div class="mt15 stock" style="font-size:18px">
                        <span> Ürün Dökümanı:</span>
                        <a href="{{ route('detail.catalog',$product->slug) }}" target="_blank"> {{ $product->catalog }}</a>
                    </div>
                </div><!-- Entry Summary /- -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 description">
                <h5>Ürün Açıklaması</h5>
                <p>
                {!! $product->description !!}
                </p>
            </div>

        </div><!-- Container /- -->
    </div><!-- Shop Single /- -->
@endsection

@section('js')
@endsection
