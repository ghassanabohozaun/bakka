<?php if(!$courses->isEmpty()): ?>
    <section class="best-courses py-5 mb-5">
        <div class="container">
            <div class=" text-center">
                <h2 class=" text-bold mb-3" data-aos="fade-down" data-aos-duration="1800">
                    <?php echo __('site.best_courses'); ?>

                </h2>
                <p data-aos="fade-up" data-aos-duration="1500">
                    
                </p>
            </div>


            <div class="row mt-5 justify-content-center">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-course">

                            <div class="img-course">
                                <?php if($course->photo): ?>
                                    <img src="<?php echo asset('adminBoard/uploadedImages/courses/' . $course->photo); ?>" alt="<?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?>">
                                <?php else: ?>
                                    <img src="<?php echo asset('site/images/courses.jpg'); ?>" class="img-fluid" alt="<?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?>">
                                <?php endif; ?>

                            </div>
                            <div class="content-item">
                                <div class="row justify-content-between align-items-center">
                                    <div class=" col-auto date-item fs-12">
                                    </div>
                                    <div class="col-auto">
                                        <?php if(!empty($course->hours)): ?>
                                            <span class=" btn bg-warning-light py-1 br-20 text-warning">
                                                <?php echo $course->hours; ?> <?php echo __('site.hours'); ?>

                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="fs-16 text-bold my-2 text-dark">
                                    <?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?>

                                </div>
                                <p class="mb-3 fs-12">
                                    <?php echo Lang() == 'ar' ? $course->description_ar : $course->description_en; ?>

                                </p>


                                <div class="row mt-4 mb-2 mx-0 bg-light p-2 br-5">
                                    <div class="col-lg-6 px-1">
                                        <div class="fs-12">
                                            <span><?php echo __('site.start_at'); ?></span>
                                            <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $course->start_at; ?> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <div class="fs-12">
                                            <span><?php echo __('site.end_at'); ?></span>
                                            <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $course->end_at; ?> </span>
                                        </div>
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
                                                <a href="<?php echo route('student.checkout', $course->id); ?>"
                                                    class="btn btn-primary br-30 text-bold "
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

                                    <div class="col-auto d-flex align-items-center">
                                        <?php if(!empty($course->cost)): ?>
                                            <?php if($course->discount != null || $course->discount != 0): ?>
                                                <span class="net-price mr-2"><?php echo $course->discount; ?>$</span>
                                                <span class="old-price"><?php echo $course->cost; ?>$</span>
                                            <?php else: ?>
                                                <span class="my_price"><?php echo $course->cost; ?>$</span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>

    </section>
<?php endif; ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/index/best-courses.blade.php ENDPATH**/ ?>