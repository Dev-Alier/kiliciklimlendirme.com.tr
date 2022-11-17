<!-- Slider Section 1 -->
<div id="home-revslider" class="slider-section container-fluid no-padding d-xs-none">
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper  d-xs-none">
        <div id="home-slider1" class="rev_slider" data-version="5.0">
            <ul>
                @foreach ($sliders as $slider)
                    <li data-transition="zoomout" data-slotamount="default" data-easein="easeInOut"
                        data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade"
                        data-fsmasterspeed="1500" data-fsslotamount="7" style="text-align: center">
                        <img src="{{ asset('assets') }}/images/sliders/{{ $slider->image }}"
                            alt="slider" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    </li>
                @endforeach

            </ul>
        </div><!-- END REVOLUTION SLIDER -->
    </div><!-- END OF SLIDER WRAPPER -->
    <div class="goto-next"><a href="#category-section"><i class="icon icon-Mouse bounce"></i></a></div>
</div><!-- Slider Section 1 /- -->
