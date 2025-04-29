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
                <span class="fs-14 text-bold"> {!! $title !!}</span>
            </div>
            {{-- <div class="col-auto px-md-0">
              <a href="#" class=" btn btn-info px-4 br-10 fs-14">{!! trans('site.add_work') !!}</a>
             </div> --}}
        </div>
    </div>
@endsection

@push('js')
@endpush
