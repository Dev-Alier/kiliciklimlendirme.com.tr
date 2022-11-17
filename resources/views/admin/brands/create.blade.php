@extends('admin.layouts.master')
@section('title')
    {{ $brand->id ? __('translation.edit_brand') : __('translation.add_brand') }}
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Markalar
        @endslot
        @slot('title')
            Marka Ekle - Düzelt
        @endslot
    @endcomponent


    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @include('alerts.danger')
                <div class="text-center">
                    <h3>
                        {{ $brand->id ? __('translation.edit_brand') : __('translation.add_new_brand') }}
                    </h3>
                </div>
                <form class="needs-validation" novalidate method="post" action="{{ route('post.brand') }}"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $brand->id }}" />
                    @csrf
                    <x-form :data="$data" />
                    <div class="button text-end mt-3">
                        @if ($errors->any())
                            {!! '<div style="padding: 7px;float: left;margin-left: 95px;color: red;">* Zorunlu alanları doldurunuz</div>' !!}
                        @endif
                        <x-button :value="$brand->id ? 'Güncelle':'Kaydet'" :class="'btn btn-primary saveButton'"/>
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
    {{-- <script>
        function setImage(image) {
            if (image.files && image.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(image.files[0]);
            }
        }
    </script> --}}
@endsection
