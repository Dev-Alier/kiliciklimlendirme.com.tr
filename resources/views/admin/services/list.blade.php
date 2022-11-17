@extends('admin.layouts.master')
@section('title')
    Hizmetler
@endsection
@section('css')
    @include('admin.layouts.datatable-css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Hizmetler
        @endslot
        @slot('title')
            Hizmet Listesi
        @endslot
    @endcomponent

    <div class="row data-list">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="list-head text-center">
                        <h3>{{ __('Hizmetler') }}</h3>
                    </div>
                    @include('alerts.danger')
                    <x-circle-add-button :route="'add.service'" />

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th width="10%">Resim</th>
                                <th width="30%">Başlık</th>
                                <th width="20%">Açıklama</th>
                                <th width="20%">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $lst)
                                <tr data-id="1">
                                    <td data-field="image" style="width: 80px">
                                        <img src="{{ asset('/assets/images/services/' . $lst->image) }}" alt=""
                                            width="50" height="50">
                                    </td>
                                    <td data-field="title">{{ $lst->name }}</td>
                                    <td data-field="description">
                                        {!! Str::limit($lst->description, 50, '...') !!}
                                    </td>
                                    <td class="process">
                                        <a class="btn btn-outline-secondary btn-sm edit"
                                            style="float: left; margin-left: 5px"
                                            href="{{ route('edit.service',$lst->id) }}" type="submit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i> Düzenle
                                        </a>
                                        <a>
                                            <form method="post" action="{{ route('delete.service', ['id' => $lst->id]) }}">
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
