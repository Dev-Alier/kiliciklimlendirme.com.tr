<section class="w100 faaliyet open">
    <!-- Section Header -->
    <div class="section-header">
        <h3 style="font-family: Arial, Helvetica, sans-serif">Hizmetlerimiz</h3>
        <img src="{{ asset('assets') }}/images/clients/section-seprator.png" alt="section-seprator" />
    </div>
    <!-- Section Header /- -->
    <div class="w100 homeFaaliyet">
        @foreach ($services as $service)
            <div class="faaliyetBox" style="max-height: 250px">
                <div class="hoverHref">
                    <span class="hrefTitle uppercase">{{ $service->name }}</span>
                    <span class="hrefText">
                        {!! $service->description !!}
                    </span>
                    <span class="incele"><a href="/hizmetler/{{ $service->slug }}" style="text-decoration: none;color:white"> Detay</a></span>
                </div>
                <div class="fimg lazyload" data-0="background-position:15% 0px" data-end="background-position:50% 0px"
                    style="background-image: url('{{ asset('assets/images/service_categories/' . $service->image) }}');">
                    <img class="lazyload" alt="Kılıç Mühendislik faaliyet alanları"
                        src="{{ asset('assets/images/service_categories/' . $service->image) }}">
                </div>
                <div class="fTitle uppercase">{{ $service->name }}</div>
            </div>
        @endforeach

    </div>
</section>
