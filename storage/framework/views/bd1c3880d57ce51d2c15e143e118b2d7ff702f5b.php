<a href="<?php echo route('admin.course.enroll.student', $course->id); ?>" class="btn btn-hover-info btn-icon btn-pill"
    title="<?php echo e(trans('courses.enrolled_list')); ?>">
    <i class="fa fa-users fa-1x"></i>
</a>

<a href="<?php echo e(route('admin.courses.edit', $course->id)); ?>" class="btn btn-hover-primary btn-icon btn-pill "
    title="<?php echo e(__('general.edit')); ?>">
    <i class="fa fa-edit fa-1x"></i>
</a>

<a href="#" class="btn btn-hover-danger btn-icon btn-pill delete_course_btn" data-id="<?php echo e($course->id); ?>"
    title="<?php echo e(__('general.delete')); ?>">
    <i class="fa fa-trash fa-1x"></i>
</a>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/courses/parts/options.blade.php ENDPATH**/ ?>