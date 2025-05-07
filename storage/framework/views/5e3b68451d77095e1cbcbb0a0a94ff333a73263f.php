<?php $__env->startSection('title'); ?>
    <?php echo $title; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('metaTags'); ?>
    <meta name="description" content="<?php echo Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en; ?>">
    <meta name="keywords" content="<?php echo Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en; ?>">
    <meta name="application-name" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
    <meta name="author" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class=" col-lg-9">
        <section>
            <div class=" container py-4">
                <div class="course-dt">
                    <div class="cor-img">
                        <?php if($course->photo): ?>
                            <img src="<?php echo asset('adminBoard/uploadedImages/courses/' . $course->photo); ?>" style="height: 100%" alt="<?php echo $course->{'title_' . Lang()}; ?>">
                        <?php else: ?>
                            <img src="<?php echo asset('site/images/courses.jpg'); ?>" tyle="height: 100%" alt="<?php echo $course->{'title_' . Lang()}; ?>">
                        <?php endif; ?>
                    </div>
                    <div class="row  py-3 mt-4">
                        <div class="col-md-10">
                            <div class="text-bold">
                                <?php echo $course->{'title_' . Lang()}; ?>

                            </div>
                        </div>

                        <div class="col-auto d-flex align-items-center">
                            <?php if($course->show_cost == 'on'): ?>
                                <?php if($course->discount != null): ?>
                                    <span class="net-price mr-2"><?php echo $course->discount; ?>$</span>
                                    <span class="old-price"><?php echo $course->cost; ?>$</span>
                                <?php else: ?>
                                    <span class="my_price"><?php echo $course->cost; ?>$</span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row mt-1 mx-0 bg-light p-2 br-5">
                        <div class="col-lg-6 px-1">
                            <div class="fs-12">
                                <span><?php echo __('site.start_at'); ?></span>
                                <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $course->start_at; ?> </span>
                            </div>
                        </div>
                        <div class="col-lg-6 px-1">
                            <div class="fs-12 text-right">
                                <span><?php echo __('site.end_at'); ?></span>
                                <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $course->end_at; ?> </span>
                            </div>
                        </div>
                    </div>

                    <!-- begin : Course Details  ----------------------------->

                    <div>
                        <div class="fs-18 mt-3 text-bold mb-2"><?php echo __('site.course_details'); ?></div>
                        <div class="fs-14 mb-4">
                            <?php echo $course->{'description_' . Lang()}; ?>

                        </div>
                    </div>
                    <!-- end : Course Details  ----------------------------->

                    <?php if($course->zoom_link): ?>
                        <div>
                            <a href="<?php echo $course->zoom_link; ?>" target="_blank" class="btn btn-primary br-30 text-bold">
                                <?php echo __('site.zoom_link'); ?>

                            </a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/student/course.blade.php ENDPATH**/ ?>