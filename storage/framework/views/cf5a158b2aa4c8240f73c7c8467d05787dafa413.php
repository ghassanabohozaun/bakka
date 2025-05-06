<img <?php if($article->photo): ?> src="<?php echo e(asset('adminBoard/uploadedImages/articles/' . $article->photo)); ?>"
  <?php else: ?>
  src="<?php echo e(asset('adminBoard/images/images-empty.png')); ?>" <?php endif; ?>
    class="img-fluid img-thumbnail table-image " width="100" height="100" />
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/articles/parts/photo.blade.php ENDPATH**/ ?>