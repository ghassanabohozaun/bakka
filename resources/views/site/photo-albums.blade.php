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
    <link rel="stylesheet" type="text/css" href="{!! asset('site/css/fancybox/jquery.fancybox.min.css') !!}">
@endpush

@section('content')
    <section class="sub-header">
        <div class=" container text-center content-header">
            <h2 class="mb-3"> {!! $title !!}</h2>
            <p class="text-center fs-16-i"> </p>
        </div>
        <div class="back-sub-header">
            <img src="{!! asset('site/img/Success-Stories.png') !!}" alt="">
        </div>
    </section>



    <section id="photo_albums_section">
        <div class=" container my-5">
            <div class=" mt-5 mb-2 fs-24"><span class="text-bold text-warning">&nbsp;</span>
            </div>
            <p class="mb-5 "> </p>


            <!-- begin : albums ------------------------------------------>
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    @if ($photoAlbums->isEmpty())
                        <img src="{!! asset('site/images/noRecordFound.svg') !!}" class="img-fluid" id="no_data_img"
                            title="{!! __('site.no_date') !!}">
                    @else
                        <div id="photo_album_data">
                            @include('site.photo-albums-paging')
                        </div>
                    @endif

                </div>

                <!-- end : albums ------------------------------------------>

            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{!! asset('site/js/fancybox/jquery.fancybox.min.js') !!}"></script>

    <script type="text/javascript">
        $('.content-item a').fancybox({
            caption: function(instance, item) {
                return $(this).parent().find('.card-text').html();
            }
        });

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: '/{!! Lang() !!}/photo-albums-paging/' +
                    '?page=' + page,
                success: function(data) {
                    $('#photo_album_data').html(data);
                    $('html, body').animate({
                        scrollTop: $("#photo_albums_section").offset().top
                    }, 1000);
                }
            });
        }
    </script>
@endpush
