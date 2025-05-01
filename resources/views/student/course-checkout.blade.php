@extends('layouts.site')
@section('title')
    {!! $title !!}
@endsection
@section('metaTags')
    <meta name="description" content="{!! Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords" content="{!! Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
    <meta name="application-name" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}" />
    <meta name="author" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}" />
@endsection

@push('css')
@endpush
@section('content')
    @include('student.includes.orange-header')


    <section class="content-section mt-4 mb-4 py-4 px-4 px-md-0 ">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="row justify-content-between align-items-center">


                <!-- begin::course -------------------------------------------------------------------------------->
                <div class="col-lg-12 col-md-12 mb-12">
                    <div class="box-program p-4 br-5">
                        <div class=" container py-4">

                            <div class="course-dt">

                                <div class="cor-img">
                                    @if ($course->photo)
                                        <img src="{!! asset('adminBoard/uploadedImages/courses/' . $course->photo) !!}" width="100%" style="height: 60%"
                                            alt="{!! $course->{'title_' . Lang()} !!}">
                                    @else
                                        <img src="{!! asset('site/images/courses.jpg') !!}" width="100%" style="height: 60%"
                                            alt="{!! $course->{'title_' . Lang()} !!}">
                                    @endif

                                </div>
                                <div class="row  py-3 mt-4">
                                    <div class="col-md-10">
                                        <div class="text-bold">
                                            {!! Lang() == 'ar' ? $course->title_ar : $course->title_en !!}
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        @if ($course->discount != null || $course->discount != 0)
                                            <span class="net-price mr-2">{!! $course->discount !!}$</span>
                                            <span class="old-price">{!! $course->cost !!}$</span>
                                        @else
                                            <span class="my_price">{!! $course->cost !!}$</span>
                                        @endif
                                    </div>
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

                                <div class="row mt-4">
                                    @if (!App\Models\CourseStudent::where('student_id', student()->id())->where('course_id', $course->id)->get()->count())
                                        <!-- begin:  ------------------------------------------------------------>
                                        <div>
                                            <form action="{!! route('student.enroll.course') !!}" method="post"
                                                enctype="multipart/form-data" id='form_student_enroll_course'>
                                                @csrf

                                                <input class="form-control" type="hidden" name="item_type" value="course">
                                                <input class="form-control" type="hidden" name="course_id"
                                                    value="{!! $course->id !!}">
                                                <input class="form-control" type="hidden" name="student_id"
                                                    value="{!! student()->id() !!}">


                                                <button type="submit" class=" btn btn-primary   btn-block mt-2">
                                                    <div class=" d-flex align-items-center justify-content-between">
                                                        <div>{!! trans('site.enroll_now') !!}</div>
                                                        <div></div>
                                                    </div>
                                                </button>
                                            </form>

                                        </div>
                                        <!-- end:  -------------------------------------------------------------->
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::course ---------------------------------------------------------------------------------->

            </div>
        </div>
    </section>
@endsection
@push('js')
    <script type="text/javascript">
        // enroll student
        $('#form_student_enroll_course').on('submit', function(e) {
            e.preventDefault();

            /////////////////////////////////////////////////////////////
            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = $(this).attr('action');

            $.ajax({
                url: url,
                data: data,
                type: type,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data.status == true) {
                        Swal.fire({
                            icon: 'success',
                            title: data.msg,
                            allowOutsideClick: false,
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: `{!! trans('site.ok') !!}`,
                            customClass: {
                                confirmButton: 'success_student_enroll_course_button'
                            }
                        });
                        $('.success_student_enroll_course_button').click(function() {
                            window.location.href = "{!! route(name: 'student.courses') !!}";
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: data.msg,
                            allowOutsideClick: false,
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: `{!! trans('site.ok') !!}`,
                            customClass: {
                                confirmButton: 'error_student_enroll_course_button'
                            }
                        });
                        $('.error_student_enroll_course_button').click(function() {
                            window.location.href = "{!! route(name: 'index') !!}";
                        })
                    }
                }, //end success
            });

        }); //end submit
    </script>
@endpush
