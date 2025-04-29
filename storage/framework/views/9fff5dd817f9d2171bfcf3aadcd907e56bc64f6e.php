<?php if($testimonial->photo == null || $testimonial->photo == ''): ?>
    <?php if($testimonial->gender == 'male'): ?>
        <img src="<?php echo e(asset('adminBoard/images/male.jpeg')); ?>" class="img-fluid img-thumbnail table-image" width="50"
            height="20" />
    <?php elseif($testimonial->gender == 'female'): ?>
        <img src="<?php echo e(asset('adminBoard/images/female.jpeg')); ?>" class="img-fluid img-thumbnail table-image" width="50"
            height="20" />
    <?php endif; ?>
<?php else: ?>
    <img src="<?php echo e(asset('adminBoard/uploadedImages/testimonials/' . $testimonial->photo)); ?>"
        class="img-fluid img-thumbnail table-image" width="50" height="20" />
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/testimonials/parts/photo.blade.php ENDPATH**/ ?>