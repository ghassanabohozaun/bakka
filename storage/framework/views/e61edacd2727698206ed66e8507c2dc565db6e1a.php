<section class=" content-section py-5 px-4 px-md-0">
    <div class=" container">
        <div class=" mt-4 mb-2  fs-24  "><?php echo trans('site.latest'); ?>

            <span class="text-bold text-warning"><?php echo trans('site.courses'); ?></span>
        </div>
        <p class="mb-5 ">
            <!---courses description --->
        </p>

        <div class="row justify-content-center">
            <div class="col-lg-12">


                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                    <ul
                        class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid d-flex  justify-content-center">

                        <?php $__currentLoopData = $latestCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="item-course">
                                    <div class="img-course">
                                        <?php if($latestCourse->photo): ?>
                                            <img src="<?php echo asset('adminBoard/uploadedImages/courses/' . $latestCourse->photo); ?>" alt="<?php echo Lang() == 'ar' ? $latestCourse->title_ar : $latestCourse->title_en; ?>">
                                        <?php else: ?>
                                            <img src="<?php echo asset('site/images/noRecordFound.svg'); ?>" alt="<?php echo Lang() == 'ar' ? $latestCourse->title_ar : $latestCourse->title_en; ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content-item">
                                        <div class="row justify-content-between align-items-center">
                                            <div class=" col-auto date-item fs-12">

                                            </div>
                                            <div class="col-auto">
                                                <span class=" btn bg-warning-light py-1 br-20 text-warning">
                                                    <?php echo $latestCourse->hours; ?> <?php echo trans('site.hours'); ?>

                                                </span>
                                            </div>
                                        </div>
                                        <div class="fs-16 text-bold my-2 text-dark">
                                            <?php echo Lang() == 'ar' ? $latestCourse->title_ar : $latestCourse->title_en; ?>

                                        </div>
                                        <p class="mb-3 fs-12">
                                            <?php echo Lang() == 'ar' ? $latestCourse->description_ar : $latestCourse->description_en; ?>

                                        </p>

                                        <div class="row mt-4 mb-4 mx-0 bg-light text-dark p-2 br-5">
                                            <div class="col-lg-6 px-1">
                                                <div class="fs-12">
                                                    <span><?php echo trans('site.start_at'); ?></span>
                                                    <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $latestCourse->start_at; ?>

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 px-1">
                                                <div class="fs-12">
                                                    <span><?php echo trans('site.end_at'); ?></span>
                                                    <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $latestCourse->end_at; ?>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="file-link d-flex justify-content-between align-items-center mt-3 mb-4 px-2 py-2 br-5"
                                            style="background: #fcf3e7">
                                            <div class="fs-14">
                                                <img src="<?php echo asset('site/img/pdf-file.svg'); ?>" width="16" alt="">
                                                <span class="d-inline-block text-dark">
                                                    <?php echo trans('site.course_details_download'); ?>

                                                </span>
                                            </div>
                                            
                                        </div>


                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">

                                                <a href="#" class="btn btn-primary br-30 text-bold">
                                                    <?php echo trans('site.enroll_now'); ?>

                                                </a>
                                                <div class="col-auto d-flex align-items-center">
                                                    <?php if($latestCourse->discount != null): ?>
                                                        <span class="net-price mr-2"><?php echo $latestCourse->discount; ?>$</span>
                                                        <span class="old-price"><?php echo $latestCourse->cost; ?>$</span>
                                                    <?php else: ?>
                                                        <span class="my_price"><?php echo $latestCourse->cost; ?>$</span>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                        uk-slidenav-previous uk-slider-item="previous">
                    </a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                        uk-slidenav-next uk-slider-item="next">
                    </a>
                </div>


            </div>
        </div>
    </div>


</section>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/courses/latest-courses.blade.php ENDPATH**/ ?>