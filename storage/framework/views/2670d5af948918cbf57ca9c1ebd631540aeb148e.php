<div class="row">
    <?php $__currentLoopData = $studentCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="item-course small-img">
                <div class="img-course">
                    <a href="<?php echo route('student.get.course', $course->id); ?>">
                        <?php if($course->photo): ?>
                            <img src="<?php echo asset('adminBoard/uploadedImages/courses/' . $course->photo); ?>" alt="<?php echo $course->{'title_' . Lang()}; ?>">
                        <?php else: ?>
                            <img src="<?php echo asset('site/images/courses.jpg'); ?>" alt="<?php echo $course->{'title_' . Lang()}; ?>">
                        <?php endif; ?>
                    </a>

                </div>
                <div class="content-item">
                    <div class="row justify-content-between align-items-center">
                        <div class=" col-auto date-item fs-12">
                        </div>
                        <div class="col-auto">
                            <span class=" btn bg-warning-light py-1 br-20 text-warning">
                                <?php if(!empty($course->hours)): ?>
                                    <?php echo $course->hours; ?>

                                    <?php echo __('site.hours'); ?>

                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <div class="fs-16 text-bold my-2 text-dark">
                        <a href="<?php echo route('student.get.course', $course->id); ?>">
                            <?php if(Lang() == 'en' && !$course->title_en): ?>
                                <?php echo $course->title_ar; ?>

                            <?php else: ?>
                                <?php echo $course->{'title_' . Lang()}; ?>

                            <?php endif; ?>
                        </a>
                    </div>
                    <p class="mb-3 fs-12">
                        <?php if(Lang() == 'en' && !$course->description_en): ?>
                            <?php echo $course->description_ar; ?>

                        <?php else: ?>
                            <?php echo $course->{'description_' . Lang()}; ?>

                        <?php endif; ?>
                    </p>
                    <p>
                        <?php if($course->pivot->certification_flag == 'on'): ?>
                            <a class="text-bold text-warning" href="<?php echo asset(
                                'adminBoard/uploadedFiles/certifications/' .
                                    App\Models\Certification::where('student_id', student()->id())->where('course_id', $course->id)->first()->file,
                            ); ?>"
                                target="_blank"><?php echo __('site.download_certitfication'); ?></a>
                        <?php else: ?>
                            <span class="text-bold  text-danger"> <?php echo __('site.certitfication_not_exist'); ?></span>
                        <?php endif; ?>
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
                <?php echo e($studentCourses->links('vendor.pagination.bootstrap-4')); ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\bakka\resources\views/student/courses-paging.blade.php ENDPATH**/ ?>