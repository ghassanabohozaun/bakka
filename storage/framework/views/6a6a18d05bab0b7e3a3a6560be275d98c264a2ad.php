<?php if($student->photo): ?>
    <img src="<?php echo e(asset('adminBoard/uploadedImages/students/' . $student->photo)); ?>" width="80" height="80"
        class="img-fluid img-thumbnail table-image" />
<?php else: ?>
    <?php if($student->gender == 'male'): ?>
        <img src="<?php echo e(asset('/adminBoard/images/male.jpeg')); ?>" width="80" height="80"
            class="img-fluid img-thumbnail table-image" />
    <?php elseif($student->gender == 'female'): ?>
        <img src="<?php echo e(asset('/adminBoard/images/female.jpeg')); ?>" width="80" height="80"
            class="img-fluid img-thumbnail table-image" />
    <?php endif; ?>

<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/students/parts/photo.blade.php ENDPATH**/ ?>