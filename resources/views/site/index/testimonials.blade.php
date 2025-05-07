@if (!$testimonials->isEmpty())
    <section class="our_testim">
        <div class=" container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <section id="testim" class="testim">
                        <div class="testim-cover">
                            <div class="wrap">
                                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                                <ul id="testim-dots" class="dots">
                                    @foreach ($testimonials as $testimonial)
                                        <li class="dot @if ($loop->first) active @endif"></li>
                                    @endforeach

                                </ul>
                                <div id="testim-content" class="cont">
                                    @foreach ($testimonials as $testimonial)
                                        <div class="@if ($loop->first) active @endif">
                                            <div class="img">
                                                @if (!empty($testimonial->photo))
                                                    <img src="{!! asset('adminBoard/uploadedImages/testimonials/' . $testimonial->photo) !!}" alt="{!! $testimonial->{'opinion_' . Lang()} !!}">
                                                @else
                                                    @if ($testimonial->gender == 'male')
                                                        <img src="{{ asset('adminBoard/images/male.jpeg') }}"
                                                            alt="{!! $testimonial->{'opinion_' . Lang()} !!}">
                                                    @else
                                                        <img src="{{ asset('adminBoard/images/female.jpeg') }}"
                                                            alt="{!! $testimonial->{'opinion_' . Lang()} !!}">
                                                    @endif
                                                @endif
                                            </div>
                                            <h2>{!! $testimonial->{'name_' . Lang()} !!} ,

                                                {!! $testimonial->gender == 'male' ? __('general.male') : __('general.female') !!} ,
                                                {!! $testimonial->age !!} {!! __('site.years') !!} ,
                                                {!! $testimonial->country !!}

                                            </h2>
                                            <p>{!! $testimonial->{'opinion_' . Lang()} !!}</p>
                                            <h2 id='testim-rating'>
                                                @if ($testimonial->rating != null)
                                                    {
                                                    <span>
                                                        @for ($i = 1; $i <= $testimonial->rating; $i++)
                                                            <i class="fa fa-star" style="color:#FFA400"></i>
                                                        @endfor
                                                    </span>
                                                    }
                                                @endif
                                                </p>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endif
