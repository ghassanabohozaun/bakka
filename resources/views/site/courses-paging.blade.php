<div class="row justify-content-center">
    @foreach ($courses as $course)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-course">
                <div class="img-course">
                    @if ($course->photo)
                        <img src="{!! asset('adminBoard/uploadedImages/courses/' . $course->photo) !!}" alt="{!! Lang() == 'ar' ? $course->title_ar : $course->title_en !!}">
                    @else
                        <img src="{!! asset('site/images/courses.jpg') !!}" alt="{!! Lang() == 'ar' ? $course->title_ar : $course->title_en !!}">
                    @endif

                </div>

                <div class="content-item">
                    <div class="row justify-content-between align-items-center">
                        <div class=" col-auto date-item fs-12">
                        </div>
                        <div class="col-auto">
                            @if (!empty($course->hours))
                                <span class=" btn bg-warning-light py-1 br-20 text-warning">
                                    {!! $course->hours !!} {!! __('site.hours') !!}
                                </span>
                            @endif
                        </div>

                    </div>


                    <div class="fs-16 text-bold my-2 text-dark">
                        {!! Lang() == 'ar' ? $course->title_ar : $course->title_en !!}
                    </div>
                    <p class="mb-3 fs-12">
                        {!! Lang() == 'ar' ? $course->description_ar : $course->description_en !!}
                    </p>


                    <div class="row mt-4 mb-2 mx-0 bg-light p-2 br-5">
                        <div class="col-lg-6 px-1">
                            <div class="fs-12">
                                <span>{!! __('site.start_at') !!}</span>
                                <span dir="{!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}"> {!! $course->start_at !!} </span>
                            </div>
                        </div>
                        <div class="col-lg-6 px-1">
                            <div class="fs-12">
                                <span>{!! __('site.end_at') !!}</span>
                                <span dir="{!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}"> {!! $course->end_at !!} </span>
                            </div>
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

                    </div>
                </div>
            </div>
        </div>
    @endforeach


    {{-- <div class="d-none">
        @if (student()->check())
            <input type="hidden" id="mawhob_id" value="{!! student()->user()->id !!}" />
        @endif
    </div> --}}

</div>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="pagination_section">
                {{ $courses->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</section>

@push('js')
@endpush
