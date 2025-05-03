<?php if($service->is_treatment_area == 'no'): ?>
    <span class="label label-light-danger label-inline mr-2">
        <?php echo $service->is_treatment_area; ?>

    </span>
<?php else: ?>
    <span class="label label-light-info label-inline mr-2">
        <?php echo $service->is_treatment_area; ?>

    </span>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/services/parts/is_treatment_area.blade.php ENDPATH**/ ?>