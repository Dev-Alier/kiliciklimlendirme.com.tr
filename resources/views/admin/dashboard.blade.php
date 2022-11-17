@extends('admin.layouts.master')
@section('title')
    @lang('translation.Data_Tables')
@endsection
@section('css')
  @endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Panel
        @endslot
        @slot('title')
            Panel
        @endslot
    @endcomponent

@endsection
@section('script')

@endsection
