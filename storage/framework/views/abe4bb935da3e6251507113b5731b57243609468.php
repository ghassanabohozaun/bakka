<?php if($slider->details_status == __('sliders.show')): ?>
    <span class="label label-light-info label-inline mr-2">
        <?php echo $slider->details_status; ?>

    </span>
<?php else: ?>
    <span class="label label-light-danger label-inline mr-2">
        <?php echo $slider->details_status; ?>

    </span>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/landing-page/sliders/parts/details-status.blade.php ENDPATH**/ ?>