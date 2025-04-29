<div class="row">
    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="item-course small-img">
                <div class="img-course">
                    <?php if($course->photo): ?>
                        <img src="<?php echo asset('adminBoard/uploadedImages/courses/' . $course->photo); ?>" alt="<?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?>">
                    <?php else: ?>
                        <img src="<?php echo asset('site/images/courses.jpg'); ?>" alt="<?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?>">
                    <?php endif; ?>
                </div>
                <div class="content-item">
                    <div class="row justify-content-between align-items-center">
                        <div class=" col-auto date-item fs-12">
                        </div>
                        <div class="col-auto">
                            <span class=" btn bg-warning-light py-1 br-20 text-warning">
                                <?php if(!empty($course->hours)): ?>
                                    <?php echo $course->hours; ?>

                                    <?php echo trans('site.hours'); ?>

                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <div class="fs-16 text-bold my-2 text-dark">
                        <a href="#">
                            <?php echo $course->{'title_' . Lang()}; ?>


                        </a>
                    </div>
                    <p class="mb-3 fs-12">
                        <?php echo $course->{'description_' . Lang()}; ?>

                    </p>

                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="pagination_section">
                <?php echo e($courses->links('vendor.pagination.bootstrap-4')); ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\bakka\resources\views/student/courses-paging.blade.php ENDPATH**/ ?>