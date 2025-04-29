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
        <div
            class=" with-screen-titel row justify-content-between
                                align-items-center p-2 br-10 bg-light mx-0 mb-3 mt-3 mt-md-0">
            <div class="col-auto title-with-icon d-flex align-items-center px-1">
                <span class="mr-2">
                    <img src="{!! asset('site/img/suitcase.svg') !!}" width="25" alt="">
                </span>
                <span class="fs-14 text-bold"> {!! $title !!} </span>
            </div>
            {{-- <div class="col-auto px-md-0"> <a href="#" class=" btn btn-info px-4 br-10 fs-14">{!! trans('site.add_work') !!}</a>
            </div> --}}
        </div>



        @if ($courses->isEmpty())
            <h1 class="py-4  fs-30 justify-content-center">
                <img src="{!! asset('site/images/noRecordFound.svg') !!}" class="img-fluid" id="no_data_img" title="{!! trans('site.no_date') !!}">
            </h1>
        @else
            <div id="courses_data">
                @include('student.courses-paging')
            </div>
        @endif

    </div>
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
                url: '/{!! Lang() !!}/student/courses-paging/' + '?page=' + page,
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
