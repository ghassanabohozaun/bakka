<div class="row">
    @foreach ($studentCourses as $course)
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="item-course small-img">
                <div class="img-course">
                    @if ($course->photo)
                        <img src="{!! asset('adminBoard/uploadedImages/courses/' . $course->photo) !!}" alt="{!! $course->{'title_' . Lang()} !!}">
                    @else
                        <img src="{!! asset('site/images/courses.jpg') !!}" alt="{!! $course->{'title_' . Lang()} !!}">
                    @endif
                </div>
                <div class="content-item">
                    <div class="row justify-content-between align-items-center">
                        <div class=" col-auto date-item fs-12">
                        </div>
                        <div class="col-auto">
                            <span class=" btn bg-warning-light py-1 br-20 text-warning">
                                @if (!empty($course->hours))
                                    {!! $course->hours !!}
                                    {!! trans('site.hours') !!}
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="fs-16 text-bold my-2 text-dark">
                        <a href="#">
                            @if (Lang() == 'en' && !$course->title_en)
                                {!! $course->title_ar !!}
                            @else
                                {!! $course->{'title_' . Lang()} !!}
                            @endif
                        </a>
                    </div>
                    <p class="mb-3 fs-12">
                        @if (Lang() == 'en' && !$course->description_en)
                            {!! $course->description_ar !!}
                        @else
                            {!! $course->{'description_' . Lang()} !!}
                        @endif
                    </p>

                </div>
            </div>
        </div>
    @endforeach

</div>


<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="pagination_section">
                {{ $studentCourses->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</section>
