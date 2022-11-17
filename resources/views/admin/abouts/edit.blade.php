@extends('admin.layouts.master')
@section('title')
    Hakkımızda
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Hakkımızda
        @endslot
        @slot('title')
            @lang('translation.about')
        @endslot
    @endcomponent

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body" style="padding: 20px !important">
                @include('alerts.success')
                @include('alerts.danger')
                <div class="text-center">
                    <h3>
                        {{ __('translation.edit_about') }}
                    </h3>
                </div>

                <form class="needs-validation" novalidate method="post" action="{{ route('post.about') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $about->id }}" />
                    <textarea class="ckeditor" name="description"  @error('description') is-invalid @enderror">{!! old('description') ?? $about->description !!}</textarea>

                    <div class="text-center mt-3">
                        <!-- button componentine address bilgisini gönderiyoruz. announcements->id var ise "güncelle" yazacak yoksa kaydet yazacak -->
                        <x-button :value="$about->id ? 'Güncelle' : 'Kaydet'" :class="'btn btn-primary saveButton'" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@section('script')
    @include('admin.layouts.ckeditor-js')

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/custom.js') }}"></script>
@endsection
