<footer>
    <section class="section-footer mt-10">
        <div class=" container">
            <div class="row">

                <div class=" col-lg-4">
                    <div class="logo-footer  mt-4 mt-md-0">
                        <a href="{!! route('index') !!}">
                            @if (setting()->site_logo)
                                <img data-aos="fade-down" data-aos-duration="1000" src="{!! asset('adminBoard/uploadedImages/logos/' . setting()->site_logo) !!}"
                                    width="160" class="rounded" alt="{!! setting()->{'site_description_' . Lang()} !!}">
                            @else
                                <img data-aos="fade-down" data-aos-duration="1000" src="{!! asset('site/img/logo2.jpg') !!}"
                                    width="160" class="rounded" alt="{!! setting()->{'site_description_' . Lang()} !!}">
                            @endif
                        </a>
                    </div>

                    <p data-aos="fade-down" data-aos-duration="700" class="text-white my-3">
                        {!! Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en !!}
                    </p>
                    <ul class="list-social-media" data-aos="fade-down" data-aos-duration="300">
                        <li>
                            <a onclick="return {!! setting()->site_facebook ? 'true' : 'false' !!};" href="{!! setting()->site_facebook !!}" target="_blank">
                                <img src="{!! asset('site/img/facebook.svg') !!}" alt="{!! __('site.facebook') !!}">
                            </a>
                        </li>
                        <li>
                            <a onclick="return {!! setting()->site_instagram ? 'true' : 'false' !!};" href="{!! setting()->site_instagram !!}"
                                target="_blank">
                                <img src="{!! asset('site/img/insta.svg') !!}" alt="{!! __('site.instagram') !!}">
                            </a>
                        </li>
                        <li>
                            <a onclick="return {!! setting()->site_twitter ? 'true' : 'false' !!};" href="{!! setting()->site_twitter !!}"
                                target="_blank">
                                <img src="{!! asset('site/img/twitter.svg') !!}" alt="{!! __('site.twitter') !!}">
                            </a>
                        </li>
                        <li>
                            <a onclick="return {!! setting()->site_youtube ? 'true' : 'false' !!};" href="{!! setting()->site_youtube !!}"
                                target="_blank">
                                <img src="{!! asset('site/img/youtube.svg') !!}" alt="{!! __('site.youtube') !!}">
                            </a>
                        </li>
                        <li>
                            <a onclick="return {!! setting()->site_mobile ? 'true' : 'false' !!};" href="https://wa.me/{!! setting()->site_mobile !!}"
                                target="_blank">
                                <img src="{!! asset('site/img/whatsapp.svg') !!}" alt="{!! __('site.whatsapp') !!}">
                            </a>
                        </li>
                        <li>
                            <a onclick="return {!! setting()->site_gmail ? 'true' : 'false' !!};" href="mailto:{!! setting()->site_gmail !!}"
                                target="_blank">
                                <img src="{!! asset('site/img/gmail.svg') !!}" alt="{!! __('site.gmail') !!}">
                            </a>
                        </li>


                    </ul>
                </div>


                <div class=" col-lg-4" data-aos="fade-in" data-aos-duration="1200">
                    <h3 class=" text-primary text-bold mb-3  mt-4 mt-md-0">{!! __('site.related_links') !!}</h3>
                    <div class="row footer-links">

                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="{!! route('index') !!}">
                                {!! __('site.index') !!}
                            </a>
                        </div>

                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="{!! route('courses') !!}">
                                {!! __('site.courses') !!}
                            </a>
                        </div>

                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="{!! route('articles') !!}">
                                {!! __('site.articles') !!}
                            </a>
                        </div>

                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="{!! route('videos') !!}">
                                {!! __('site.videos') !!}
                            </a>
                        </div>
                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="{!! route('photo.albums') !!}">
                                {!! __('site.photo_albums') !!}
                            </a>
                        </div>
                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="{!! route('faq') !!}">
                                {!! __('site.faq') !!}
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Begin: Media --------------------------------------------------------------------------->
                <div class=" col-lg-4">
                    <h3 class=" text-primary text-bold mb-3 mt-4 mt-md-0">{!! __('site.media') !!}</h3>
                    <div class="media-footer">
                        <div class="row" uk-lightbox>


                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e1.jpg') !!}">
                                    <img src="{!! asset('site/img/e1.jpg') !!}" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e2.jpg') !!}">
                                    <img src="{!! asset('site/img/e2.jpg') !!}" alt="">
                                </a>
                            </div>

                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e3.jpg') !!}">
                                    <img src="{!! asset('site/img/e3.jpg') !!}" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e4.jpg') !!}">
                                    <img src="{!! asset('site/img/e4.jpg') !!}" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e5.jpg') !!}">
                                    <img src="{!! asset('site/img/e5.jpg') !!}" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e6.jpg') !!}">
                                    <img src="{!! asset('site/img/e6.jpg') !!}" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e7.jpg') !!}">
                                    <img src="{!! asset('site/img/e7.jpg') !!}" alt="">
                                </a>
                            </div>

                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e8.jpg') !!}">
                                    <img src="{!! asset('site/img/e8.jpg') !!}" alt="">
                                </a>
                            </div>

                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="{!! asset('site/img/e9.jpg') !!}">
                                    <img src="{!! asset('site/img/e9.jpg') !!}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End: Media ----------------------------------------------------------------------------->
            </div>
        </div>
    </section>
</footer>

<section class="sub-footer p-3 bg-light text-center fs-14">

    @if (Lang() == 'ar')
        . {!! date('Y') !!} {!! __('site.copy_right') !!}
        <a href="{!! route('index') !!}">{!! __('site.index') !!}</a>
        ©
    @else
        {!! __('site.copy_right') !!} © {!! date('Y') !!}
        <a href="{!! route('index') !!}">{!! __('site.home') !!}</a>
        - {!! __('site.copy_right') !!} .
    @endif



</section>
