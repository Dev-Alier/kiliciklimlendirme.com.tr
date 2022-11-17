@extends('client.layouts.master')

@section('title')
    Ürün Kataloğu
@endsection
@section('css')

@endsection


@section('content')
<iframe src="{{ asset('assets/pdf/'. $catalog) }}" height="1000"  width="100%"></iframe>
@endsection

@section('js')

@endsection
