<!-- Product Section -->
<div id="product-section" class="product-section container-fluid no-padding" style="margin-top: 50px">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <!-- Section Header -->
            <div class="section-header">
                <h3 style="font-family: Arial, Helvetica, sans-serif">Vitrin Ürünlerimiz</h3>
                <img src="{{ asset('assets') }}/images/clients/section-seprator.png" alt="section-seprator" />
            </div><!-- Section Header /- -->

            <!-- Products -->
            @foreach ($products as $product)
            <!-- Product -->
                <div class="col-md-3 text-center" style="padding: 0">
                    <div style="margin:5px;box-shadow: 0px 1px 10px 3px gainsboro;">
                        <p>

                            <a href="{{ route('product.detail',$product->slug) }}" class="text-center">
                                @foreach (App\Models\Image::where('product_id', $product->id)->get()->take(1) as $image)
                                <img src="{{ asset('/assets/images/products/' . $image->name) }}" alt="products"
                                    style="min-height: 300px">
                                    @endforeach
                                    <h5 class="uppercase">{{ $product->name }}</h5>
                                    <span class="price">{{ number_format($product->price) . ' TL'}}</span>
                                </a>
                            </p>
                        </div>
                </div>
                <!-- Product -->
            @endforeach
            <!-- Products /- -->
        </div><!-- Row /- -->
    </div><!-- Container /- -->
</div><!-- Product Section /- -->
