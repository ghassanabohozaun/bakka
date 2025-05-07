<?php $__env->startSection('title'); ?>
    <?php echo $article->{'title_' . Lang()}; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('metaTags'); ?>
    <meta name="description" content="<?php echo Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en; ?>">
    <meta name="keywords" content="<?php echo Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en; ?>">
    <meta name="application-name" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
    <meta name="author" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('student.includes.orange-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="content-section mt-4 mb-4 py-4 px-4 px-md-0 ">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="row justify-content-between align-items-center">


                <!-- begin::article -------------------------------------------------------------------------------->
                <div class="col-lg-12 col-md-12 mb-12">
                    <div class="box-program p-4 br-5">
                        <div class=" container py-4">

                            <div class="course-dt">
                                <div class="cor-img">


                                    <?php if($article->photo): ?>
                                        <img src="<?php echo asset('adminBoard/uploadedImages/articles/' . $article->photo); ?>" width="100%" alt="<?php echo $article->{'title_' . Lang()}; ?>">
                                    <?php else: ?>
                                        <img src="<?php echo asset('site/images/articles.jpg'); ?>" class="img-fluid" alt="<?php echo $article->{'title_' . Lang()}; ?>">
                                    <?php endif; ?>


                                </div>
                                <div class="row  py-3 mt-4">
                                    <div class="col-md-10">
                                        <div class="text-bold">
                                            <?php echo $article->{'title_' . Lang()}; ?>

                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">

                                    </div>
                                </div>

                                <div class="row mt-1 mx-0 bg-light p-2 br-5">
                                    <div class="col-lg-6 px-1">
                                        <div class="fs-12">
                                            <span><?php echo trans('site.publish_date'); ?></span> :
                                            <span class="text-bold" dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $article->publish_date; ?>

                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <div class="fs-12 text-right">
                                            <span><?php echo trans('site.publisher'); ?></span> :
                                            <span class="text-bold" dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $article->publisher_name; ?>

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="fs-18 mt-3 text-bold mb-2"><?php echo trans('site.article_details'); ?></div>
                                    <div class="fs-14 mb-4 my_lead">
                                        <?php echo $article->{'abstract_' . Lang()}; ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/site/blog/article.blade.php ENDPATH**/ ?>