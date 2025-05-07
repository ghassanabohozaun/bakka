@extends('layouts.site')
@section('title')
    {!! $article->{'title_' . Lang()} !!}
@endsection
@section('metaTags')
    <meta name="description" content="{!! Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en !!}">
    <meta name="keywords" content="{!! Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en !!}">
    <meta name="application-name" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}" />
    <meta name="author" content="{!! Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en !!}" />
@endsection

@section('content')
    @include('student.includes.orange-header')

    <section class="content-section mt-4 mb-4 py-4 px-4 px-md-0 ">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="row justify-content-between align-items-center">


                <!-- begin::article -------------------------------------------------------------------------------->
                <div class="col-lg-12 col-md-12 mb-12">
                    <div class="box-program p-4 br-5">
                        <div class=" container py-4">

                            <div class="course-dt">
                                <div class="cor-img">


                                    @if ($article->photo)
                                        <img src="{!! asset('adminBoard/uploadedImages/articles/' . $article->photo) !!}" width="100%" alt="{!! $article->{'title_' . Lang()} !!}">
                                    @else
                                        <img src="{!! asset('site/images/articles.jpg') !!}" class="img-fluid" alt="{!! $article->{'title_' . Lang()} !!}">
                                    @endif


                                </div>
                                <div class="row  py-3 mt-4">
                                    <div class="col-md-10">
                                        <div class="text-bold">
                                            {!! $article->{'title_' . Lang()} !!}
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">

                                    </div>
                                </div>

                                <div class="row mt-1 mx-0 bg-light p-2 br-5">
                                    <div class="col-lg-6 px-1">
                                        <div class="fs-12">
                                            <span>{!! trans('site.publish_date') !!}</span> :
                                            <span class="text-bold" dir="{!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}"> {!! $article->publish_date !!}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <div class="fs-12 text-right">
                                            <span>{!! trans('site.publisher') !!}</span> :
                                            <span class="text-bold" dir="{!! Lang() == 'ar' ? 'rtl' : 'ltr' !!}"> {!! $article->publisher_name !!}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="fs-18 mt-3 text-bold mb-2">{!! trans('site.article_details') !!}</div>
                                    <div class="fs-14 mb-4 my_lead">
                                        {!! $article->{'abstract_' . Lang()} !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::article ---------------------------------------------------------------------------------->

            </div>
        </div>
    </section>
@endsection
