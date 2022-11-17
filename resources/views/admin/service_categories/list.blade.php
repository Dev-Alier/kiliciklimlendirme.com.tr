@extends('admin.layouts.master')
@section('title')
    @lang('Hizmet Kategori')
@endsection
@section('css')
    @include('admin.layouts.datatable-css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Hizmet Kategori
        @endslot
        @slot('title')
            Hizmet Kategori Listesi
        @endslot
    @endcomponent

    <div class="row data-list">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="list-head text-center">
                        <h3>{{ __('Hizmet Kategori Listesi') }}</h3>
                    </div>
                    @include('alerts.danger')
                    <x-circle-add-button :route="'add.serviceCategory'" />

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Resim</th>
                                <th>Kategori Adı</th>
                                <th width="20%">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $lst)
                                <tr data-id="1">
                                    <td>
                                        <img src="{{ asset('assets') }}/images/service_categories/{{ $lst->image }}" width="75" height="75" alt="">
                                    </td>
                                    <td data-field="title" style="padding-top: 4%">{{ $lst->name }}</td>

                                    <td class="process" style="margin-top: 15%">
                                        <a class="btn btn-outline-secondary btn-sm edit"
                                            style="float: left; margin-left: 5px"
                                            href="{{ route('edit.serviceCategory',$lst->id) }}}}" type="submit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i> Düzenle
                                        </a>
                                        <a>
                                            <form method="post" action="{{ route('delete.serviceCategory', ['id' => $lst->id]) }}">
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
