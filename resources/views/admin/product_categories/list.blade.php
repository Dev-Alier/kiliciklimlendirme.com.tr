@extends('admin.layouts.master')
@section('title')
    @lang('Ürün Kategori Listesi')
@endsection
@section('css')
    @include('admin.layouts.datatable-css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Ürün Kategori
        @endslot
        @slot('title')
            Kategori Listesi
        @endslot
    @endcomponent

    <div class="row data-list">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="list-head text-center">
                        <h3>{{ __('Ürün Kategori Listesi') }}</h3>
                    </div>
                    @include('alerts.danger')
                    {{-- <x-circle-add-button :route="'add.product'" /> --}}

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Kategori Adı</th>
                                <th width="20%">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $lst)
                                <tr data-id="1">
                                    <td data-field="title">{{ $lst->name }}</td>

                                    <td class="process">
                                        <a class="btn btn-outline-secondary btn-sm edit"
                                            style="float: left; margin-left: 5px"
                                            href="{{ route('list.productCategory',$lst->id) }}}}" type="submit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i> Düzenle
                                        </a>
                                        <a>
                                            <form method="post" action="{{ route('delete.productCategory', ['id' => $lst->id]) }}">
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
                    @include('alerts.danger')
                    <div class="text-center">
                        <h3>
                            {{ $category->id ? __('Kategori Düzenle') : __('Kategori Ekle') }}
                        </h3>
                    </div>
                    <form class="needs-validation" novalidate method="post" action="{{ route('add.productCategory') }}"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $category->id }}" />
                        @csrf
                        <x-form :data="$data" />
                        <div class="button text-end mt-3">
                            @if ($errors->any())
                                {!! '<div style="padding: 7px;float: left;margin-left: 95px;color: red;">* Zorunlu alanları doldurunuz</div>' !!}
                            @endif
                            <x-button :value="$category->id ? 'Güncelle' : 'Kaydet'" :class="'btn btn-primary saveButton'" />
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
