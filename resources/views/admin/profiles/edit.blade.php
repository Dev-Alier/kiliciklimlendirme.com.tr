@extends('admin.layouts.master')
@section('title')
    @lang('translation.profile')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            {{ __('translation.profile') }}
        @endslot
        @slot('title')
        @endslot
    @endcomponent

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @include('alerts.success')
                @include('alerts.danger')
                <div class="text-center">
                    <h3>
                        {{ __('translation.edit_profile') }}
                    </h3>
                </div>

                <form class="needs-validation" novalidate method="post" action="{{ route('post.profile') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}" />
                    <x-form :data="$data" />
                    <div class="text-center mt-3">
                        <!-- button componentine address bilgisini gönderiyoruz. announcements->id var ise "güncelle" yazacak yoksa kaydet yazacak -->
                        <x-button :value="$user->id ? 'Güncelle':'Kaydet'" :class="'btn btn-primary saveButton'" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/custom.js') }}"></script>

    <script>
        function updateColor(cssClass, cssProperty, newColor) {
            if (cssClass == "form-control button-color") {
                const color = document.querySelector('.button-color');
                color.value = newColor;
                color.style.backgroundColor = newColor;
            }
            if (cssClass == "form-control button-text-color") {
                const color = document.querySelector('.button-text-color');
                color.value = newColor;
                color.style.backgroundColor = newColor;
            }
            if (cssClass == "form-control text-color") {
                const color = document.querySelector('.text-color');
                color.value = newColor;
                color.style.backgroundColor = newColor;
            }
        }
    </script>
@endsection
