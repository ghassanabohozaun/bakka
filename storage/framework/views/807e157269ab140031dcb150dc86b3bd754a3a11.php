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
                        <a href="javascript:void(0);" class="text-muted">
                            <?php echo e(__('menu.support_center')); ?>

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

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <a href="<?php echo route('admin.support.center.create'); ?>" class="btn btn-primary btn-sm font-weight-bold font-size-base  mr-1">
                    <i class="fa <?php echo Lang() == 'ar' ? ' fa-angle-double-left' : 'fa-angle-double-right'; ?>"></i>
                    <?php echo e(__('supportCenter.send_message')); ?>

                </a>
                &nbsp;
            </div>
            <!--end::Toolbar-->
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
                                                            <th><?php echo __('supportCenter.name'); ?></th>
                                                            <th><?php echo __('supportCenter.email'); ?></th>
                                                            <th><?php echo __('supportCenter.title'); ?></th>
                                                            <th><?php echo __('supportCenter.status'); ?></th>
                                                            <th><?php echo __('supportCenter.show_message'); ?></th>
                                                            <th><?php echo __('general.actions'); ?></th>
                                                            <th><?php echo __('general.delete'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $supportCenters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supportCenter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr>
                                                                <td><?php echo e($supportCenter->name); ?></td>
                                                                <td><?php echo e($supportCenter->email); ?></td>
                                                                <td><?php echo e($supportCenter->title); ?></td>
                                                                <td>
                                                                    <?php if($supportCenter->status == 'new'): ?>
                                                                        <span
                                                                            class="label label-lg font-weight-bold label-light-warning label-inline">
                                                                            <?php echo __('supportCenter.new'); ?>

                                                                        </span>
                                                                    <?php elseif($supportCenter->status == 'contacted'): ?>
                                                                        <span
                                                                            class="label label-lg font-weight-bold label-light-ifo label-inline">
                                                                            <?php echo __('supportCenter.contacted'); ?>

                                                                        </span>
                                                                    <?php elseif($supportCenter->status == 'solved'): ?>
                                                                        <span
                                                                            class="label label-lg font-weight-bold label-light-success label-inline">
                                                                            <?php echo __('supportCenter.solved'); ?>

                                                                        </span>
                                                                    <?php endif; ?>
                                                                </td>

                                                                <td><?php echo $__env->make('admin.support-center.parts.show-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                                                                <td><?php echo $__env->make('admin.support-center.parts.options', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="btn btn-hover-danger btn-icon btn-pill delete_support_center_message_btn"
                                                                        data-id="<?php echo e($supportCenter->id); ?>"
                                                                        title="<?php echo e(__('general.delete')); ?>">
                                                                        <i class="fa fa-trash fa-1x"></i>
                                                                    </a>

                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <tr>
                                                                <td colspan="7" class="text-center">
                                                                    <?php echo __('supportCenter.no_messages_found'); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="7">
                                                                <div class="float-right">
                                                                    <?php echo $supportCenters->appends(request()->all())->links(); ?>

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
                            <!--end: Datatable-->

                        </div>

                        <form class="d-none" id="form_category_delete">
                            <input type="hidden" id="offer_category_id">
                        </form>
                        <!--end::Form-->

                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->

        <!--begin::Form-->
    </div>
    <!--end::content-->


    <?php echo $__env->make('admin.support-center.show_message_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        ////////////////////////////////////////////////////////////////////////////////
        // change message status to contacted
        $('body').on('click', '.support_center_message_status_contacted_btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                url: "<?php echo route('admin.support.center.change.status'); ?>",
                type: 'post',
                data: {
                    id: id,
                    status: 'contacted'
                },
                beforeSend: function() {
                    KTApp.blockPage({
                        overlayColor: '#000000',
                        state: 'danger',
                        message: "<?php echo e(__('general.please_wait')); ?>",
                    });
                },
                success: function(data) {
                    KTApp.unblockPage();
                    console.log(data);
                    if (data.status == true) {
                        Swal.fire({
                            title: data.msg,
                            text: "",
                            icon: "success",
                            allowOutsideClick: false,
                            customClass: {
                                confirmButton: 'change_message_status_button'
                            }
                        });
                        $('.change_message_status_button').click(function() {
                            $('#myTable').load(location.href + (' #myTable'));
                        });
                    }
                },

            })

        });

        ////////////////////////////////////////////////////////////////////////////////
        // change message status
        $('body').on('click', '.support_center_message_status_solved_btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                url: "<?php echo route('admin.support.center.change.status'); ?>",
                type: 'post',
                data: {
                    id: id,
                    status: 'solved'
                },
                beforeSend: function() {
                    KTApp.blockPage({
                        overlayColor: '#000000',
                        state: 'danger',
                        message: "<?php echo e(__('general.please_wait')); ?>",
                    });
                },
                success: function(data) {
                    KTApp.unblockPage();
                    console.log(data);
                    if (data.status == true) {
                        Swal.fire({
                            title: data.msg,
                            text: "",
                            icon: "success",
                            allowOutsideClick: false,
                            customClass: {
                                confirmButton: 'change_message_status_button'
                            }
                        });
                        $('.change_message_status_button').click(function() {
                            $('#myTable').load(location.href + (' #myTable'));
                        });
                    }
                },

            })

        });


        ////////////////////////////////////////////////////////////////////////////////////
        //  show support center message show modal
        $(document).on('click', '.support_center_message_show_btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo route('admin.support.center.get.one.message'); ?>",
                data: {
                    id: id
                },
                type: 'get',
                dateType: 'json',
                success: function(data) {
                    console.log(data);
                    console.log(data.status);

                    if (data.status == true) {
                        $('#title').val(data.data.title);
                        $('#message').val(data.data.message);
                    }
                    $('#modal_support_center_message_show').modal('show');
                }
            })

        });
        ////////////////////////////////////////////////////////////////////////////////////
        //  close support center message show modal By cancel
        $('body').on('click', '#cancel_support_center_message_btn', function(e) {
            e.preventDefault();
            $('#modal_support_center_message_show').modal('hide');
        });
        ////////////////////////////////////////////////////////////////////////////////////
        //  close support center message show modal By event
        $('#modal_support_center_message_show').on('hidden.bs.modal', function(e) {
            e.preventDefault();
            $('#modal_support_center_message_show').modal('hide');
        });

        /////////////////////////////////////////////////////////////////
        ///  delete support Center Message
        $(document).on('click', '.delete_support_center_message_btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: "<?php echo e(__('general.ask_delete_record')); ?>",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "<?php echo e(__('general.yes')); ?>",
                cancelButtonText: "<?php echo e(__('general.no')); ?>",
                reverseButtons: false,
                allowOutsideClick: false,
            }).then(function(result) {
                if (result.value) {
                    //////////////////////////////////////
                    // Delete User
                    $.ajax({
                        url: '<?php echo route('admin.support.center.message.destroy'); ?>',
                        data: {
                            id,
                            id
                        },
                        type: 'post',
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            if (data.status == true) {
                                Swal.fire({
                                    title: "<?php echo __('general.deleted'); ?>",
                                    text: data.msg,
                                    icon: "success",
                                    allowOutsideClick: false,
                                    customClass: {
                                        confirmButton: 'delete_support_center_message_button'
                                    }
                                });
                                $('.delete_support_center_message_button').click(function() {
                                    $('#myTable').load(location.href + (' #myTable'));
                                });
                            } else if (data.status == false) {
                                Swal.fire({
                                    title: "<?php echo __('general.deleted'); ?>",
                                    text: data.msg,
                                    icon: "warning",
                                    allowOutsideClick: false,
                                    customClass: {
                                        confirmButton: 'delete_support_center_message_button'
                                    }
                                });
                            }
                        }, //end success
                    });

                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        title: "<?php echo __('general.cancelled'); ?>",
                        text: "<?php echo __('general.cancelled_message'); ?>",
                        icon: "error",
                        allowOutsideClick: false,
                        customClass: {
                            confirmButton: 'cancel_delete_support_center_message_button'
                        }
                    })
                }
            });

        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/support-center/index.blade.php ENDPATH**/ ?>