@extends('admin.layouts.master')
@section('title')
    @lang('translation.Addresses')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Adres
        @endslot
        @slot('title')
            @lang('translation.edit_address')
        @endslot
    @endcomponent

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @include('alerts.success')
                @include('alerts.danger')
                <div class="text-center">
                    <h3>
                        {{ __('translation.edit_address') }}
                    </h3>
                </div>

                <form class="needs-validation" novalidate method="post" action="{{ route('post.address') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $address->id }}" />
                    <x-form :data="$data" />
                    <table>
                        <tr>
                            <td style="width: 215px">
                                <label> Harita Konumu</label>
                            </td>
                            <td>
                                <textarea rows="6" name="maps" class="form-control">{!! $address->maps !!}</textarea>
                            </td>
                        </tr>
                    </table>
                    <div class="text-center mt-3">
                        <!-- button componentine address bilgisini gönderiyoruz. announcements->id var ise "güncelle" yazacak yoksa kaydet yazacak -->
                        <x-button :value="$address->id ? 'Güncelle':'Kaydet'" :class="'btn btn-primary saveButton'" />
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
