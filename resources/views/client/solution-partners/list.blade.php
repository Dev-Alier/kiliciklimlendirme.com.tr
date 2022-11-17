@extends('client.layouts.master')
@section('title')
    Çözüm Ortakları
@endsection
@section('description')
    Çözüm Ortaklarımız
@endSection
@section('content')
<div class="container" style="margin-top: 50px">
    <div class="section-header">
        <h3>Çözüm Ortaklarımız</h3>
        <p>Hizmet Sürecimizde Birlikte Çalıştığımız Firmalar</p>
        <img src="{{ asset('assets/client') }}/images/section-seprator.png" alt="section-seprator" />
    </div>
    <div class="row solution-partners">
        @foreach ($partners as $partner)
        <div class="col-md-2">
            <div class="card" style="padding-bottom: 50px">
                <div class="card-content partners">
                    <img src="{{ asset('assets/images/solution_partners/'.$partner->image) }}" style="max-height: 200px" alt="">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
