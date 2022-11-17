@extends('admin.layouts.master')
@section('title')
    @lang('Slider')
@endsection
@section('css')
    @include('admin.layouts.datatable-css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Slider
        @endslot
        @slot('title')
            Slider Listesi
        @endslot
    @endcomponent

    <div class="row data-list">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="list-head text-center">
                        <h3>{{ __('Slider Listesi') }}</h3>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Resim</th>
                                <th width="20%">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $lst)
                                <tr data-id="1">
                                    <td data-field="title">
                                        <img src="{{ asset('/assets/images/sliders/' . $lst->image) }}"
                                        alt="{{ $lst->image }}" width="100" height="100">
                                    </td>
                                    <td class="process" style="margin-top: 25%">
                                        <a>
                                            <form method="post" action="{{ route('delete.slider', ['id' => $lst->id]) }}">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger btn-sm delete delete-confirm"
                                                    type="submit" title="Delete">
                                                    <i class="fas fa-trash-alt"></i> Sil
                                                </button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">

                    <div class="text-center">
                        <h3>
                            {{ __('Slider Ekle') }}
                        </h3>
                    </div>
                    <form class="needs-validation" novalidate method="post" action="{{ route('add.slider') }}"
                        enctype="multipart/form-data">
                            <p class="alert alert-warning">
                                Fotoğraf boyutu 1920*900 piksel olmalı
                            </p>

                        <input type="hidden" name="id" value="{{ $slider->id }}" />
                        @csrf
                        <x-form :data="$data" />
                        <div class="button text-end mt-3">
                            @include('alerts.danger')
                            <x-button :value="$slider->id ? 'Güncelle' : 'Kaydet'" :class="'btn btn-primary saveButton'" />
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end row -->
@endsection
@section('script')
    @include('admin.layouts.datatable-js')

    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweetalert.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
    <script></script>
@endsection
