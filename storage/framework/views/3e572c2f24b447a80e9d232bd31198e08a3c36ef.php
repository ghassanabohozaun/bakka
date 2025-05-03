<a href="#" class="bell-after-login student_notifications_count">
    <div><span class=""><?php echo $notifications->count(); ?></span><i class="fas fa-bell"></i></div>
</a>

<div class="p-2 br-5 box-noty" uk-dropdown="mode: click ; pos: top-right">
    <span>
        <?php if($notifications->isEmpty()): ?>
            <div class="item-noty  p-2 br-5">
                <a href="javascript:void(0)">
                    <div class="text-bold text-primary text-left"><?php echo __('site.no_notifications'); ?></div>
                </a>
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class=" item-noty  p-2 br-5 text-left">
                    <a href="javascript:void(0)">
                        <div class="text-bold text-primary">
                            <?php echo $notification->{'title_' . Lang()}; ?>

                        </div>
                        <div class="fs-12 text-dark">
                            <?php echo $notification->{'details_' . Lang()}; ?>

                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <a href="<?php echo route('student.notifications'); ?>" class=" btn btn-primary btn-block px-5 br-2"> <?php echo __('site.show_all_notification'); ?></a>
    </span>
</div>
<?php /**PATH C:\laragon\www\bakka\resources\views/student/includes/notifications.blade.php ENDPATH**/ ?>