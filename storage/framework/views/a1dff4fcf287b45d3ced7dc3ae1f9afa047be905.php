<?php if($courseStudent->pivot->enroll_agreement == 'on'): ?>
    <span class="text-success"> <?php echo __('courses.payed'); ?></span>
<?php else: ?>
    <span class="text-danger"> <?php echo __('courses.not_payed'); ?></span>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/courses/enroll-list/parts/payed.blade.php ENDPATH**/ ?>