<img <?php if($slider->photo): ?> src="<?php echo e(asset('adminBoard/uploadedImages/sliders/' . $slider->photo)); ?>"
<?php else: ?>
src="<?php echo e(asset('adminBoard/images/images-empty.png')); ?>" <?php endif; ?>
    width="100" height="80" class="img-fluid img-thumbnail table-image" />
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/landing-page/sliders/parts/photo.blade.php ENDPATH**/ ?>