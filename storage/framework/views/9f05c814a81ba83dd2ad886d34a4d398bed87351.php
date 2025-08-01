<?php $__env->startSection('title'); ?>
    <?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('metaTags'); ?>
    <meta name="description" content="<?php echo Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en; ?>">
    <meta name="keywords" content="<?php echo Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en; ?>">
    <meta name="application-name" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
    <meta name="author" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <section class="sub-header">
        <div class=" container text-center content-header">
            <h2 class="mb-3"> <?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?> </h2>
            <p class="text-center fs-16-i">
            </p>
        </div>
        <div class="back-sub-header"><img src="<?php echo asset('site/img/Courses.jpg'); ?>" alt=""></div>
    </section>



    <section class=" courses_section py-5 px-4 px-md-0 my-5 pb-6 mt-5">
        <div class="container " data-aos="fade-up" data-aos-duration="1500" style="margin-top: 100px">
            <div class="row justify-content-between align-items-center">


                <!-- begin::course -------------------------------------------------------------------------------->
                <div class="col-lg-12 col-md-12 mb-12">
                    <div class="box-program p-4 br-5">


                        <div class="course-dt">
                            <div class="cor-img">
                                <img src="<?php echo asset('adminBoard/uploadedImages/courses/' . $course->photo); ?>" width="100%" style="height: 100%" alt="">
                            </div>
                            <div class="row  py-3 mt-4">
                                <div class="col-md-10">
                                    <div class="text-bold">
                                        <?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?>

                                    </div>
                                </div>
                                <?php if(!empty($course->cost) || $course->cost != ''): ?>
                                    <div class="col-auto d-flex align-items-center">
                                        <?php if($course->show_cost == 'on'): ?>
                                            <?php if(!empty($course->hours)): ?>
                                                <?php if($course->discount != null || $course->discount != 0): ?>
                                                    <span class="net-price mr-2"><?php echo $course->discount; ?>$</span>
                                                    <span class="old-price"><?php echo $course->cost; ?>$</span>
                                                <?php else: ?>
                                                    <span class="my_price"><?php echo $course->cost; ?>$</span>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="row mt-1 mx-0 bg-light p-2 br-5">
                                <div class="col-lg-6 px-1">
                                    <div class="fs-12">
                                        <span><?php echo trans('site.start_at'); ?></span>
                                        <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $course->start_at; ?> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 px-1">
                                    <div class="fs-12 text-right">
                                        <span><?php echo trans('site.end_at'); ?></span>
                                        <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $course->end_at; ?> </span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="fs-18 mt-3 text-bold mb-2"><?php echo trans('site.course_details'); ?></div>
                                <div class="fs-14 mb-4">
                                    <?php echo Lang() == 'ar' ? $course->description_ar : $course->description_en; ?>

                                </div>
                            </div>




                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <?php if(student()->check()): ?>
                                        <?php if(App\Models\CourseStudent::where('student_id', student()->id())->where('course_id', $course->id)->get()->count()): ?>
                                            <a href="javascript:void(0)" class="btn btn-primary br-30 text-bold"
                                                data-id="<?php echo $course->id; ?>">
                                                <?php echo __('site.previously_enrolled'); ?>

                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo route('student.checkout', $course->id); ?>" class="btn btn-primary br-30 text-bold "
                                                data-id="<?php echo $course->id; ?>">
                                                <?php echo __('site.enroll_now'); ?>

                                            </a>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <a href="<?php echo route('get.student.login'); ?>" class="btn btn-primary br-30 text-bold "
                                            data-id="<?php echo $course->id; ?>">
                                            <?php echo __('site.enroll_now'); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>

                            </div>

                        </div>



                    </div>
                </div>

            </div>
            <!-- end::course ---------------------------------------------------------------------------------->

        </div>
        </div>
    </section>

    <?php echo $__env->make('site.index.whatsapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/site/course-details.blade.php ENDPATH**/ ?>