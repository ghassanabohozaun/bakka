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
            class=" with-screen-titel row justify-content-between align-items-center p-2 br-10 bg-light mx-0 mb-3 mt-3 mt-md-0">
            <div class="col-auto title-with-icon d-flex align-items-center px-1">
                <span class="mr-2">
                    <img src="{!! asset('site/img/bell-48.png') !!}" width="25">
                </span>
                <span class="fs-14 text-bold">{!! $title !!}</span>
            </div>
        </div>


        @if ($notifications->isEmpty())
            <img src="{!! asset('site/images/noRecordFound.svg') !!}" class="img-fluid" id="no_data_img" title="{!! __('site.no_notifications') !!}">
        @else
            <div class="student_notifications_table">
                @include('student.notifications-paging')
            </div>
        @endif

    </div>
@endsection

@push('js')
    <script type="text/javascript">
        function fetch_data(page) {
            $.ajax({
                url: "/{!! Lang() !!}/student/notifications/paging?page=" + page,
                success: function(data) {
                    console.log(data);
                    //$('#programs_data').html(data);
                    /*$('html, body').animate({
                        scrollTop: $("#programs_section").offset().top
                    }, 1000);*/
                }
            });
        }

        $('body').on('click', '.read_student_notification', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: "{!! route('student.notifications.read') !!}",
                type: "post",
                data: {
                    id,
                    id
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    $('#student_notifications_section').load("{!! route('student.get.header.notificatoins') !!}");
                    $(".notification-table").load(location.href + " .notification-table");
                }
            })
        });
    </script>
@endpush
