@if (!$sliders->isEmpty())
    <div class="slider">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($sliders as $key => $slider)
                    @if ($slider)
                        <div class="carousel-item {!! $key == 0 ? 'active' : '' !!}">
                            <img uk-scrollspy="cls: uk-animation-kenburns; repeat: true" src="{!! asset('/adminBoard/uploadedImages/sliders/' . $slider->photo) !!}"
                                class="d-block w-100" alt="{!! $slider->title_en !!}">
                            <div class="carousel-caption d-none d-md-block">
                                <div class=" container">
                                    <div class=" row align-items-center">
                                        <div class="col">
                                            @if ($slider->details_status == __('sliders.show'))
                                                <h2 class="text-bold fs-31-i">{!! Lang() == 'ar' ? $slider->title_ar : $slider->title_en !!}</h2>
                                                <p class="my-3 text-white fs-16-i">
                                                    {!! Lang() == 'ar' ? $slider->details_ar : $slider->details_en !!}
                                                </p>
                                            @endif
                                            @if ($slider->button_status == __('sliders.show'))
                                                <div>
                                                    <a href="{!! $slider->{'url_' . Lang()} !!}" target="_blank"
                                                        class="btn btn-primary br-20 px-3 fs-14 mr-2">
                                                        {!! __('site.show') !!}
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif
