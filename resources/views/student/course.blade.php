@extends('layouts.student')
@section('title')
    {!! $title !!}
@endsection
@section('metaTags')
    <meta name="description" content="{!! Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords" content="{!! Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
    <meta name="application-name" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}" />
    <meta name="author" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}" />
@endsection

@section('content')
    <div class=" col-lg-9">
        <section>
            <div class=" container py-4">
                <div class="course-dt">
                    <div class="cor-img">
                        @if ($course->photo)
                            <img src="{!! asset('adminBoard/uploadedImages/courses/' . $course->photo) !!}" style="height: 100%" alt="{!! $course->{'title_' . Lang()} !!}">
                        @else
                            <img src="{!! asset('site/images/courses.jpg') !!}" tyle="height: 100%" alt="{!! $course->{'title_' . Lang()} !!}">
                        @endif
                    </div>
                    <div class="row  py-3 mt-4">
                        <div class="col-md-10">
                            <div class="text-bold">
                                {!! $course->{'title_' . Lang()} !!}
                            </div>
                        </div>

                        <div class="col-auto d-flex align-items-center">
                            @if ($course->show_cost == 'on')
                                @if ($course->discount != null)
                                    <span class="net-price mr-2">{!! $course->discount !!}$</span>
                                    <span class="old-price">{!! $course->cost !!}$</span>
                                @else
                                    <span class="my_price">{!! $course->cost !!}$</span>
                                @endif
                            @endif
                        </div>
                    </div>

                    <div class="row mt-1 mx-0 bg-light p-2 br-5">
                        <div class="col-lg-6 px-1">
                            <div class="fs-12">
                                <span>{!! __('site.start_at') !!}</span>
                                <span dir="{!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}"> {!! $course->start_at !!} </span>
                            </div>
                        </div>
                        <div class="col-lg-6 px-1">
                            <div class="fs-12 text-right">
                                <span>{!! __('site.end_at') !!}</span>
                                <span dir="{!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}"> {!! $course->end_at !!} </span>
                            </div>
                        </div>
                    </div>

                    <!-- begin : Course Details  ----------------------------->

                    <div>
                        <div class="fs-18 mt-3 text-bold mb-2">{!! __('site.course_details') !!}</div>
                        <div class="fs-14 mb-4">
                            {!! $course->{'description_' . Lang()} !!}
                        </div>
                    </div>
                    <!-- end : Course Details  ----------------------------->

                    @if ($course->zoom_link)
                        <div>
                            <a href="{!! $course->zoom_link !!}" target="_blank" class="btn btn-primary br-30 text-bold">
                                {!! __('site.zoom_link') !!}
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script type="text/javascript"></script>
@endpush
