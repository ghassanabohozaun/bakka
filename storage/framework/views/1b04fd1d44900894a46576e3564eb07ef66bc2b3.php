<?php if($video->photo == null): ?>
    <img src="http://img.youtube.com/vi/<?php echo e($video->link); ?>/0.jpg" width="100" height="80"
        class="img-fluid img-thumbnail" />
<?php else: ?>
    <img src="<?php echo e(asset('adminBoard/uploadedImages/videos/' . $video->photo)); ?>" width="100" height="80"
        class="img-fluid img-thumbnail" />
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/videos/parts/photo.blade.php ENDPATH**/ ?>