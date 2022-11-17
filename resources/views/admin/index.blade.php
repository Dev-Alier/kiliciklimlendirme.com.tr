@extends('admin.layouts.master')
@section('title')
    @lang('translation.dashboard')
@endsection
@section('css')
    @include('admin.layouts.datatable-css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
    <style>
        .card-body {
            height: 100vh;
            display: flex;
            justify-content: center;
            background: #f4f5f8;
        }
        .card-body img{
            height: 57%
        }
    </style>
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Panel
        @endslot
        @slot('title')
        @endslot
    @endcomponent

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                       <img src="{{ asset('assets/images/'.$setting->logo) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="row">
        <div class="col-xl-4 col-md-12">
            <!-- card -->
            <div class="card card-h-100"
                style="display: flex;align-items: center;padding-top:10px;background-color:aquamarine">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="mb-3">
                                Teklifler({{ $count['offer'] }})
                            </h4>

                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-12">
            <!-- card -->
            <div class="card card-h-100"
                style="display: flex;align-items: center;padding-top:10px;background-color:#ffe44c">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="mb-3">
                                Domainler({{ $count['domain'] }})
                            </h4>

                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-xl-4 col-md-12">
            <!-- card -->
            <div class="card card-h-100"
                style="display: flex;align-items: center;padding-top:10px;background-color:#4baaff">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="mb-3">
                                Blog({{ $count['blog'] }})
                            </h4>

                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->

    <div class="row">
        <div class="col-xl-12">
            <div class="row data-list">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>{{ __('translation.name_surname') }}</th>
                                        <th>{{ __('translation.domain') }}</th>
                                        <th>{{ __('translation.message') }}</th>
                                        <th>{{ __('translation.phone') }}</th>
                                        <th>{{ __('translation.process') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $lst)
                                        <tr data-id="1" style="font-weight: {{ !$lst->read ? 'bold' : 'italic' }}">
                                            <td data-field="title">{{ $lst->name }}</td>
                                            <td data-field="title">{{ $lst->domain->name ?? '' }}</td>
                                            <td data-field="description">
                                                {!! Str::limit($lst->message, 50, '...') !!}
                                            </td>
                                            <td data-field="title">{{ $lst->phone }}</td>
                                            <td>

                                                <a href="" class="btn btn-outline-secondary btn-sm edit"
                                                    style="margin-left: 55px" id="showOffer" data-toggle="modal"
                                                    data-target='#practice_modal' data-id="{{ $lst->id }}">
                                                    <i class="fas fa-eye"></i>
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


            <!-- start show offer modal -->
            <x-show-offer />
            <!-- end show offer modal -->
        </div>


        <!-- end col -->
    </div> --}}
    <!-- end row-->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.js') }}"></script>

    <!-- datatables -->
    @include('admin.layouts.datatable-js')

    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/custom.js') }}"></script>

    <script></script>
@endsection
