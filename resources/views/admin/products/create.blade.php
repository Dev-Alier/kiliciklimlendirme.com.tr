@extends('admin.layouts.master')
@section('title')
    @lang('Ürün Ekle-Düzenle')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">

@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Ürünler
        @endslot
        @slot('title')
            {{ $product->id ? __('Ürünü Düzenle') : __('Yeni Ürün Ekle') }}
        @endslot
    @endcomponent


    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @include('alerts.danger')
                <div class="text-center">
                    <h3>
                        {{ $product->id ? __('Ürünü Düzenle') : __('Ürünü Ekle') }}
                    </h3>
                </div>
                <form class="needs-validation" novalidate method="post" action="{{ route('add.product.post') }}"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $product->id }}" />
                    @csrf

                    <div class="row mt-5">
                        @if ($product->id)
                            @foreach (App\Models\Image::where('product_id', $product->id)->get() as $image)
                                <div class="col-md-2 text-center" id="image-{{ $image->id }}">
                                    <img src="{{ asset('/assets/images/products/' . $image->name) }}" alt=""
                                        width="150" height="150">
                                    <p class="text-center mt-2">
                                        <button class="btn btn-sm btn-danger" type="button"
                                            onclick="removeImage({{ $image->id }})"><i class="fa fa-trash"></i></button>
                                    </p>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="row mt-5">

                        <table class="form-table" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td style="width: 15%;">
                                        <label for="pdf">Katalog</label>
                                    </td>
                                    <td>
                                        <div style="display: flex;align-items: center;">
                                            <input type="file" id="pdf" name="catalog" class="form-control"
                                                style="width: 50%;" accept=".pdf">
                                            @if ($product->catalog)
                                                <span style="margin-left: 10px;">{{ $product->catalog }}</span>
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <x-form :data="$data"/>
                    <div class="button text-end mt-3">
                        @if ($errors->any())
                            {!! '<div style="padding: 7px;float: left;margin-left: 95px;color: red;">* Zorunlu alanları doldurunuz</div>' !!}
                        @endif
                        <x-button :value="$product->id ? 'Güncelle' : 'Kaydet'" :class="'btn btn-primary saveButton'" />
                </form>
            </div>
        </div>
    </div>

    <!-- end row -->
@endsection
@section('script')
    @include('admin.layouts.ckeditor-js')

    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/pristinejs/pristinejs.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/custom.js') }}"></script>
    <script>
        function removeImage(id) {
            var token = $("meta[name='csrf-token']").attr("content");
            var id = id;
            var confirmation = confirm("Resim Silinsin mi?");
            if (confirmation) {
                $.ajax({
                    url: "/panel/ürünler/deleteImage/" + id,
                    type: 'DELETE',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function(response) {
                        if (response)
                            $('#image-' + id).remove();
                    },

                });
            }
        }
    </script>
@endsection
