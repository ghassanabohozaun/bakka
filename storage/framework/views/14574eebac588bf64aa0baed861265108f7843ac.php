<?php $__env->startSection('title'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div
            class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <!--begin::Actions-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);" class="text-muted">
                            <?php echo e(__('menu.users')); ?>

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
                <a href="<?php echo route('users.trashed'); ?>"
                   class="btn btn-light-danger trash_btn" title="<?php echo e(__('general.trash')); ?>">
                    <i class="fa fa-trash"></i>
                </a>
                &nbsp;
                <a href="<?php echo route('user.create'); ?>"
                   class="btn btn-primary btn-sm font-weight-bold font-size-base mr-1">
                    <i class="fa fa-plus-square"></i>
                    <?php echo e(__('menu.add_new_user')); ?>

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
                                                        <th><?php echo __('users.photo'); ?></th>
                                                        <th><?php echo __('users.name'); ?></th>
                                                        <th><?php echo __('users.email'); ?></th>
                                                        <th><?php echo __('users.mobile'); ?></th>
                                                        <th><?php echo __('users.role_id'); ?></th>
                                                        <th><?php echo __('users.status'); ?></th>
                                                        <th class="text-center" style="width: 100px;"><?php echo __('general.actions'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <tr>
                                                            <td>
                                                                <?php if($user->photo == null): ?>
                                                                    <?php if($user->gender == __('general.male')): ?>
                                                                        <img
                                                                            src="<?php echo e(asset('adminBoard/images/male.jpeg')); ?>"
                                                                            class="img-fluid img-thumbnail table-image "/>
                                                                    <?php else: ?>
                                                                        <img
                                                                            src="<?php echo e(asset('adminBoard/images/female.jpeg')); ?>"
                                                                            class="img-fluid img-thumbnail table-image "/>
                                                                    <?php endif; ?>

                                                                <?php else: ?>
                                                                    <img
                                                                        src="<?php echo e(asset('adminBoard/uploadedImages/admin/'.$user->photo)); ?>"
                                                                        class="img-fluid img-thumbnail table-image "/>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><?php echo e($user->name); ?></td>
                                                            <td><?php echo e($user->email); ?></td>
                                                            <td><?php echo e($user->mobile); ?></td>
                                                            <td>

                                                                <?php if(Lang()=='ar'): ?>
                                                                    <span class="text-info">
                                                                                      <?php echo $user->role->role_name_ar; ?>

                                                                    </span>
                                                                <?php else: ?>
                                                                    <span class="text-info">
                                                                                       <?php echo $user->role->role_name_en; ?>

                                                                    </span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <div class="cst-switch switch-sm">
                                                                    <input type="checkbox"
                                                                           id="change_status"
                                                                           <?php echo e($user->status == 'on' ? 'checked':''); ?>  data-id="<?php echo e($user->id); ?>"
                                                                           class="change_status">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(route('user.edit',$user->id)); ?>"
                                                                   class="btn btn-hover-primary btn-icon btn-pill "
                                                                   title="<?php echo e(__('general.edit')); ?>">
                                                                    <i class="fa fa-edit fa-1x"></i>
                                                                </a>

                                                                <a href="#"
                                                                   class="btn btn-hover-danger btn-icon btn-pill delete_user_btn"
                                                                   data-id="<?php echo e($user->id); ?>"
                                                                   title="<?php echo e(__('general.delete')); ?>">
                                                                    <i class="fa fa-trash fa-1x"></i>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <tr>
                                                            <td colspan="7" class="text-center">
                                                                <?php echo __('users.no_users_found'); ?>

                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <td colspan="7">
                                                            <div class="float-right">
                                                                <?php echo $users->appends(request()->all())->links(); ?>

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

                        <form class="d-none" id="form_user_delete">
                            <input type="text" id="user_delete_id">
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

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

    <script type="text/javascript">

        ///////////////////////////////////////////////////
        /// Show user Delete Notify
        $(document).on('click', '.delete_user_btn', function (e) {
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
            }).then(function (result) {
                if (result.value) {
                    //////////////////////////////////////
                    // Delete User
                    $.ajax({
                        url: '<?php echo route('user.destroy'); ?>',
                        data: {id, id},
                        type: 'post',
                        dataType: 'json',
                        success: function (data) {
                            console.log(data);
                            if (data.status == true) {
                                Swal.fire({
                                    title: "<?php echo __('general.deleted'); ?>",
                                    text: data.msg,
                                    icon: "success",
                                    allowOutsideClick: false,
                                    customClass: {confirmButton: 'delete_user_button'}
                                });
                                $('.delete_user_button').click(function () {
                                    //updateDataTable
                                    $('#myTable').load(location.href + (' #myTable'));
                                });
                            }
                        },//end success
                    });

                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        title: "<?php echo __('general.cancelled'); ?>",
                        text: "<?php echo __('general.cancelled_message'); ?>",
                        icon: "error",
                        allowOutsideClick: false,
                        customClass: {confirmButton: 'cancel_delete_user_button'}
                    })
                }
            });

        })


        // switch english language
        var switchStatus = false;
        $('body').on('change', '.change_status', function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            if ($(this).is(':checked')) {
                switchStatus = $(this).is(':checked');
            } else {
                switchStatus = $(this).is(':checked');
            }

            $.ajax({
                url: "<?php echo e(route('user.change.status')); ?>",
                data: {switchStatus: switchStatus, id: id},
                type: 'post',
                dataType: 'JSON',
                beforeSend: function () {
                    KTApp.blockPage({
                        overlayColor: '#000000',
                        state: 'danger',
                        message: "<?php echo e(__('general.please_wait')); ?>",
                    });
                },//end beforeSend
                success: function (data) {
                    KTApp.unblockPage();
                    console.log(data);
                    if (data.status == true) {
                        Swal.fire({
                            title: data.msg,
                            text: "",
                            icon: "success",
                            allowOutsideClick: false,
                            customClass: {confirmButton: 'switch_status_toggle'}
                        });
                        $('.switch_status_toggle').click(function () {
                        });
                    }
                },//end success
            })
        });


    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/users/index.blade.php ENDPATH**/ ?>