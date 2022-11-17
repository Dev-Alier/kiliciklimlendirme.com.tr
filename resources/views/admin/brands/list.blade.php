@extends('admin.layouts.master')
@section('title')
    @lang('translation.brands')
@endsection
@section('css')
    @include('admin.layouts.datatable-css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Markalar
        @endslot
        @slot('title')
            Marka Listesi
        @endslot
    @endcomponent

    <div class="row data-list">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="list-head text-center">
                        <h3>{{ __('translation.brand_list') }}</h3>
                    </div>
                    @include('alerts.danger')
                    <x-circle-add-button :route="'add.brand'" />

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th width="50%">{{ __('translation.domain_name') }}</th>
                                <th width="30%">{{ __('translation.status') }}</th>
                                <th width="20%">{{ __('translation.offer_count') }}</th>
                                <th width="20%">{{ __('translation.process') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $lst)
                                <tr data-id="1">
                                    <td data-field="title">{{ $lst->name }}</td>
                                    <td data-field="active">
                                        <span style="font-weight: bold"
                                            class="{{ $lst->active ? 'text-success' : 'text-danger' }} p-2">
                                            {{ $lst->active == 0 ? 'Pasif' : 'Aktif' }} </span>
                                    </td>

                                    <td data-field="title"><a
                                            href="{{ route('list.offers') }}">{{ $lst->offer_count ?? '-' }}</a> </td>
                                    <td class="process">
                                        <a>
                                            <form method="post"
                                            action="{{ route('change.brand', ['id' => $lst->id, 'active' => $lst->active == true ? 0 : 1]) }}">
                                            @csrf
                                                <button class="btn btn-sm {{ !$lst->active ? 'bg-success' : 'bg-danger' }} text-white"
                                                    id="changeactiveBtn-{{ $lst->id }}"
                                                    onclick="changeText({{ $lst->id }})">
                                                    {{ $lst->active ? 'Pasif Et' : 'Aktif Et' }}</button>
                                        </form>

                                        </a>
                                        <a class="btn btn-sm btn-primary"
                                        href="{{ route('edit.brand', ['id' => $lst->id]) }}"><i
                                            class="fas fa-pencil-alt"></i> Düzenle
                                        </a>
                                    <a>
                                        <form method="post" action="{{ route('delete.brand', ['id' => $lst->id]) }}">
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
