<footer>
    <section class="section-footer mt-10">
        <div class=" container">
            <div class="row">

                <div class=" col-lg-4">
                    <div class="logo-footer  mt-4 mt-md-0">
                        <img data-aos="fade-down" data-aos-duration="1000" src="<?php echo asset('site/img/logo.svg'); ?>" width="170"
                            alt="">
                    </div>
                    <p data-aos="fade-down" data-aos-duration="700" class="text-white my-3">
                        <?php echo Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en; ?>

                    </p>
                    <ul class="list-social-media" data-aos="fade-down" data-aos-duration="300">
                        <li>
                            <a onclick="return <?php echo setting()->site_facebook ? 'true' : 'false'; ?>;" href="<?php echo setting()->site_facebook; ?>" target="_blank">
                                <img src="<?php echo asset('site/img/facebook.svg'); ?>" alt="<?php echo __('site.facebook'); ?>">
                            </a>
                        </li>
                        <li>
                            <a onclick="return <?php echo setting()->site_instagram ? 'true' : 'false'; ?>;" href="<?php echo setting()->site_instagram; ?>" target="_blank">
                                <img src="<?php echo asset('site/img/insta.svg'); ?>" alt="<?php echo __('site.instagram'); ?>">
                            </a>
                        </li>
                        <li>
                            <a onclick="return <?php echo setting()->site_twitter ? 'true' : 'false'; ?>;" href="<?php echo setting()->site_twitter; ?>"
                                target="_blank">
                                <img src="<?php echo asset('site/img/twitter.svg'); ?>" alt="<?php echo __('site.twitter'); ?>">
                            </a>
                        </li>
                        <li>
                            <a onclick="return <?php echo setting()->site_youtube ? 'true' : 'false'; ?>;" href="<?php echo setting()->site_youtube; ?>"
                                target="_blank">
                                <img src="<?php echo asset('site/img/youtube.svg'); ?>" alt="<?php echo __('site.youtube'); ?>">
                            </a>
                        </li>
                        <li>
                            <a onclick="return <?php echo setting()->site_mobile ? 'true' : 'false'; ?>;" href="https://wa.me/<?php echo setting()->site_mobile; ?>"
                                target="_blank">
                                <img src="<?php echo asset('site/img/whatsapp.svg'); ?>" alt="<?php echo __('site.whatsapp'); ?>">
                            </a>
                        </li>
                        <li>
                            <a onclick="return <?php echo setting()->site_gmail ? 'true' : 'false'; ?>;" href="mailto:<?php echo setting()->site_gmail; ?>"
                                target="_blank">
                                <img src="<?php echo asset('site/img/gmail.svg'); ?>" alt="<?php echo __('site.gmail'); ?>">
                            </a>
                        </li>


                    </ul>
                </div>


                <div class=" col-lg-4" data-aos="fade-in" data-aos-duration="1200">
                    <h3 class=" text-primary text-bold mb-3  mt-4 mt-md-0"><?php echo __('site.related_links'); ?></h3>
                    <div class="row footer-links">

                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="<?php echo route('index'); ?>">
                                <?php echo __('site.index'); ?>

                            </a>
                        </div>

                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="<?php echo route('courses'); ?>">
                                <?php echo __('site.courses'); ?>

                            </a>
                        </div>

                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="<?php echo route('videos'); ?>">
                                <?php echo __('site.videos'); ?>

                            </a>
                        </div>
                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="<?php echo route('photo.albums'); ?>">
                                <?php echo __('site.photo_albums'); ?>

                            </a>
                        </div>
                        <div class="col-md-4 mb-1 pb-1">
                            <a class=" text-white fs-14" href="<?php echo route('faq'); ?>">
                                <?php echo __('site.faq'); ?>

                            </a>
                        </div>

                    </div>
                </div>

                <!-- Begin: Media --------------------------------------------------------------------------->
                <div class=" col-lg-4">
                    <h3 class=" text-primary text-bold mb-3 mt-4 mt-md-0"><?php echo __('site.media'); ?></h3>
                    <div class="media-footer">
                        <div class="row" uk-lightbox>


                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e1.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e1.jpg'); ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e2.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e2.jpg'); ?>" alt="">
                                </a>
                            </div>

                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e3.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e3.jpg'); ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e4.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e4.jpg'); ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e5.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e5.jpg'); ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e6.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e6.jpg'); ?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e7.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e7.jpg'); ?>" alt="">
                                </a>
                            </div>

                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e8.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e8.jpg'); ?>" alt="">
                                </a>
                            </div>

                            <div class="col-md-4 col-6 px-2" data-aos="fade-down" data-aos-duration="1700">
                                <a href="<?php echo asset('site/img/e9.jpg'); ?>">
                                    <img src="<?php echo asset('site/img/e9.jpg'); ?>" alt="">
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

    <?php if(Lang() == 'ar'): ?>
        . <?php echo date('Y'); ?> <?php echo __('site.copy_right'); ?>

        <a href="<?php echo route('index'); ?>"><?php echo __('site.index'); ?></a>
        ©
    <?php else: ?>
        <?php echo __('site.copy_right'); ?> © <?php echo date('Y'); ?>

        <a href="<?php echo route('index'); ?>"><?php echo __('site.home'); ?></a>
        - <?php echo __('site.copy_right'); ?> .
    <?php endif; ?>



</section>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/includes/footer.blade.php ENDPATH**/ ?>