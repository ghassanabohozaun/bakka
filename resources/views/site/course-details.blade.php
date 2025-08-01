@extends('layouts.site')
@section('title')
    {!! Lang() == 'ar' ? $course->title_ar : $course->title_en !!}
@endsection
@section('metaTags')
    <meta name="description" content="{!! Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords" content="{!! Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
    <meta name="application-name" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}" />
    <meta name="author" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}" />
@endsection


@section('content')
    <section class="sub-header">
        <div class=" container text-center content-header">
            <h2 class="mb-3"> {!! Lang() == 'ar' ? $course->title_ar : $course->title_en !!} </h2>
            <p class="text-center fs-16-i">
            </p>
        </div>
        <div class="back-sub-header"><img src="{!! asset('site/img/Courses.jpg') !!}" alt=""></div>
    </section>



    <section class=" courses_section py-5 px-4 px-md-0 my-5 pb-6 mt-5">
        <div class="container " data-aos="fade-up" data-aos-duration="1500" style="margin-top: 100px">
            <div class="row justify-content-between align-items-center">


                <!-- begin::course -------------------------------------------------------------------------------->
                <div class="col-lg-12 col-md-12 mb-12">
                    <div class="box-program p-4 br-5">


                        <div class="course-dt">
                            <div class="cor-img">
                                <img src="{!! asset('adminBoard/uploadedImages/courses/' . $course->photo) !!}" width="100%" style="height: 100%" alt="">
                            </div>
                            <div class="row  py-3 mt-4">
                                <div class="col-md-10">
                                    <div class="text-bold">
                                        {!! Lang() == 'ar' ? $course->title_ar : $course->title_en !!}
                                    </div>
                                </div>
                                @if (!empty($course->cost) || $course->cost != '')
                                    <div class="col-auto d-flex align-items-center">
                                        @if ($course->show_cost == 'on')
                                            @if (!empty($course->hours))
                                                @if ($course->discount != null || $course->discount != 0)
                                                    <span class="net-price mr-2">{!! $course->discount !!}$</span>
                                                    <span class="old-price">{!! $course->cost !!}$</span>
                                                @else
                                                    <span class="my_price">{!! $course->cost !!}$</span>
                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <div class="row mt-1 mx-0 bg-light p-2 br-5">
                                <div class="col-lg-6 px-1">
                                    <div class="fs-12">
                                        <span>{!! trans('site.start_at') !!}</span>
                                        <span dir="{!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}"> {!! $course->start_at !!} </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 px-1">
                                    <div class="fs-12 text-right">
                                        <span>{!! trans('site.end_at') !!}</span>
                                        <span dir="{!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}"> {!! $course->end_at !!} </span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="fs-18 mt-3 text-bold mb-2">{!! trans('site.course_details') !!}</div>
                                <div class="fs-14 mb-4">
                                    {!! Lang() == 'ar' ? $course->description_ar : $course->description_en !!}
                                </div>
                            </div>




                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    @if (student()->check())
                                        @if (App\Models\CourseStudent::where('student_id', student()->id())->where('course_id', $course->id)->get()->count())
                                            <a href="javascript:void(0)" class="btn btn-primary br-30 text-bold"
                                                data-id="{!! $course->id !!}">
                                                {!! __('site.previously_enrolled') !!}
                                            </a>
                                        @else
                                            <a href="{!! route('student.checkout', $course->id) !!}" class="btn btn-primary br-30 text-bold "
                                                data-id="{!! $course->id !!}">
                                                {!! __('site.enroll_now') !!}
                                            </a>
                                        @endif
                                    @else
                                        <a href="{!! route('get.student.login') !!}" class="btn btn-primary br-30 text-bold "
                                            data-id="{!! $course->id !!}">
                                            {!! __('site.enroll_now') !!}
                                        </a>
                                    @endif
                                </div>

                            </div>

                        </div>



                    </div>
                </div>

            </div>
            <!-- end::course ---------------------------------------------------------------------------------->

        </div>
        </div>
    </section>

    @include('site.index.whatsapp')
@endsection
