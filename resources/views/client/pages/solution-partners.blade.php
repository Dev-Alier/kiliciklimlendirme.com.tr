
<!-- Solution Partners -->
<div class="clients container-fluid">
    <!-- Container -->
    <div class="container" style="margin-top: 57%">
        <!-- Section Header -->
        <div class="section-header">
            <h3>Çözüm Ortakları</h3>
            <img src="{{ asset('assets/client') }}/images/section-seprator.png" alt="section-seprator" />
        </div><!-- Section Header /- -->
        <div class="clients-carousel">
            @foreach ($partners as $partner)
                <div class="col-md-12 item">
                    <div class="pages" title="client">
                        <div class="page"
                            style="height: 100px;width: 100px;background-image: url('{{ asset('assets/images/solution_partners/'.$partner->image) }}')">
                            {{-- <div class="row">
                                <p style="position: absolute;top: 100px;">
                                    <a href="https://{{ $partner->platform_name.'.com/'.$page->name }}" >
                                        {{ $page->name }}
                                    </a>
                                </p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div><!-- Container /- -->
</div>
<!-- Solution Partners -->
