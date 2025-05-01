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
    <style href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css' rel="stylesheet"> </style>
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
    <section class=" content-section  px-4  my-5 pb-5" id="courses_section">
        <div class=" container">
            <div class="row justify-content-center">
                <div class="col-lg-12 ">

                    <div class="wrapper  text-center">
                        @if ($faqs->isEmpty())
                            <h2>{!! __('site.no_faqs') !!}</h2>
                        @else
                            @foreach ($faqs as $faq)
                                <div class="faq_container">
                                    <div class="faq_question">
                                        {!! $faq->{'question_' . Lang()} !!}
                                    </div>

                                    <div class="answercont">
                                        <div class="faq_answer"> {!! $faq->{'answer_' . Lang()} !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
