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
    <section class="sub-header">
        <div class=" container text-center content-header">
            <h2 class="mb-3">{!! $title !!}</h2>
            <p class="text-center fs-16-i">
            </p>
        </div>
        <div class="back-sub-header"><img src="{!! asset('site/img/Courses.jpg') !!}" alt=""></div>
    </section>

    <section class=" content-section py-5 px-4 px-md-0 my-5 pb-6">
        <div class=" container">
            <div class=" mt-5 mb-2 fs-24"><span class="text-bold text-warning">&nbsp;</span>
            </div>
            <p class="mb-5 ">
                <!---courses description --->
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="col-lg-11 px-md-0">
                        @if ($courses->isEmpty())
                            <img src="{!! asset('site/images/noRecordFound.svg') !!}" class="img-fluid" id="no_data_img"
                                title="{!! __('site.no_date') !!}">
                        @else
                            <div id="courses_data">
                                @include('site.courses-paging')
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: '/{!! Lang() !!}/courses-paging/' + '?page=' + page,
                success: function(data) {
                    $('#courses_data').html(data);
                    $('html, body').animate({
                        scrollTop: $("#courses_section").offset().top
                    }, 1000);
                }
            });
        }
    </script>
@endpush
