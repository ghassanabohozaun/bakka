<div class="row">
    @foreach ($courses as $course)
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="item-course small-img">
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
                            {!! $course->{'title_' . Lang()} !!}

                        </a>
                    </div>
                    <p class="mb-3 fs-12">
                        {!! $course->{'description_' . Lang()} !!}
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
                {{ $courses->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</section>
