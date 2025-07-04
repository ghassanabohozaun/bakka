<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <!--begin::Actions-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="<?php echo route('admin.notifications'); ?>" class="text-muted">
                            <?php echo e(__('menu.notifications')); ?>

                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">
                            <?php echo e(__('menu.show_all')); ?>

                        </a>
                    </li>
                </ul>

                <!--end::Actions-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::content-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom" id="card_posts">
                        <div class="card-body">

                            <!--begin: Datatable-->
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="scroll">
                                            <div class="table-responsive">
                                                <table class="table myTable table-hover" id="myTable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th> <?php echo __('notifications.title_ar'); ?></th>
                                                            <th> <?php echo __('notifications.title_en'); ?></th>
                                                            <th> <?php echo __('notifications.details_ar'); ?></th>
                                                            <th> <?php echo __('notifications.details_en'); ?></th>
                                                            <th> <?php echo __('notifications.date'); ?></th>

                                                            <th class="text-center" style="width: 100px;">
                                                                <?php echo __('general.actions'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr>
                                                                <td><?php echo e($loop->iteration); ?></td>
                                                                <td><?php echo e($notification->title_ar); ?></td>
                                                                <td><?php echo e($notification->title_en); ?></td>
                                                                <td><?php echo e($notification->details_ar); ?></td>
                                                                <td><?php echo e($notification->details_en); ?></td>
                                                                <td><?php echo e($notification->created_at); ?></td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-secondary btn-icon btn-pill  btn-sm mr-3  read_admin_notification_btn"
                                                                        data-id="<?php echo e($notification->id); ?>"
                                                                        title="<?php echo e(__('general.show')); ?>">
                                                                        <i
                                                                            class="flaticon-bell <?php echo $notification->notify_class == 'read' ? 'text-info' : 'text-danger'; ?>  icon-lg">
                                                                        </i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <tr>
                                                                <td colspan="7" class="text-center">
                                                                    <?php echo __('notifications.no_notifications_found'); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="7">
                                                                <div class="float-right">
                                                                    <?php echo $notifications->appends(request()->all())->links(); ?>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: DataTable-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->

    </div>
    <!--end::content-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        // read Notification
        $('body').on('click', '.read_admin_notification_btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo route('admin.notification.make.read'); ?>",
                type: "post",
                data: {
                    id,
                    id
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    $('#myTable').load(location.href + (' #myTable'));
                    $('#notify_section').load("<?php echo route('admin.get.notifications'); ?>");
                    $(".notifications_count").load(location.href + " .notifications_count");
                }
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/home/notifications.blade.php ENDPATH**/ ?>