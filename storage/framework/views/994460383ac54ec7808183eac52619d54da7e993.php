<section class="sub-footer p-3 bg-light text-center fs-14">
    <?php if(Lang() == 'ar'): ?>
        . <?php echo date('Y'); ?> <?php echo __('site.copy_right'); ?>

        <a href="<?php echo route('index'); ?>"><?php echo __('site.home'); ?></a>
        ©
    <?php else: ?>
        <?php echo __('site.copy_right'); ?> © <?php echo date('Y'); ?>

        <a href="<?php echo route('index'); ?>"><?php echo __('site.home'); ?></a>
        - <?php echo __('site.copy_right'); ?> .
    <?php endif; ?>
</section>
<?php /**PATH C:\laragon\www\bakka\resources\views/student/includes/footer.blade.php ENDPATH**/ ?>