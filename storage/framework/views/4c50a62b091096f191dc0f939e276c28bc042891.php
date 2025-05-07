<div class="table-responsive notification-table">
    <table class="table  table-hover" style="vertical-align: middle; font-size: 14px">
        <thead>
            <tr>
                <th>#</th>
                <th><?php echo __('site.notification_title'); ?></th>
                <th><?php echo __('site.notification_details'); ?></th>
                <th><?php echo __('site.action'); ?></th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td>
                        <?php echo $notification->{'title_' . Lang()}; ?>

                    </td>
                    <td>
                        <?php echo $notification->{'details_' . Lang()}; ?>

                    </td>
                    <td>
                        <a href="#" title="<?php echo __('site.mark_as_read'); ?>" class="read_student_notification"
                            id='read_student_notification' data-id="<?php echo $notification->id; ?>">
                            <i style="font-size: 20px" class="fa fa-envelope  <?php echo $notification->notify_class == 'unread' ? 'text-danger' : 'text-info'; ?> ">
                            </i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </tbody>
    </table>

    <?php echo e($notifications->links('vendor.pagination.bootstrap-4')); ?>

</div>
<?php /**PATH C:\laragon\www\bakka\resources\views/student/notifications-paging.blade.php ENDPATH**/ ?>