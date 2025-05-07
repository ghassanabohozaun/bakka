<img <?php if($course->photo): ?> src="<?php echo e(asset('adminBoard/uploadedImages/courses/' . $course->photo)); ?>"
<?php else: ?>
src="<?php echo e(asset('adminBoard/images/images-empty.png')); ?>" <?php endif; ?>
    width="100" height="80" class="img-fluid img-thumbnail table-image" />
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/courses/parts/photo.blade.php ENDPATH**/ ?>