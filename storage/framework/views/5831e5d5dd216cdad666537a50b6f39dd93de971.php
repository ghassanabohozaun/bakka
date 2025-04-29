<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-muted">
                            <?php echo e(__('menu.students')); ?>

                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('admin.students')); ?>" class="text-muted">
                            <?php echo e(__('menu.show_all')); ?>

                        </a>
                    </li>
                </ul>

                <!--end::Actions-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <a href="<?php echo route('admin.students.trashed'); ?>" class="btn btn-light-danger trash_btn" title="<?php echo e(__('general.trash')); ?>">
                    <i class="fa fa-trash"></i>
                </a>
                &nbsp;

                <a href="<?php echo e(route('admin.students.create')); ?>"
                    class="btn btn-primary btn-sm font-weight-bold font-size-base  mr-1">
                    <i class="fa fa-plus-square"></i>
                    <?php echo e(__('menu.add_new_student')); ?>

                </a>
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
                                                            <th>#</th>
                                                            <th><?php echo __('students.photo'); ?></th>
                                                            <th><?php echo __('students.name_ar'); ?></th>
                                                            <th><?php echo __('students.name_en'); ?></th>
                                                            <th><?php echo __('students.email'); ?></th>
                                                            <th><?php echo __('students.gender'); ?></th>
                                                            <th><?php echo __('students.freeze'); ?></th>
                                                            <th class="text-center" style="width: 100px;">
                                                                <?php echo __('general.actions'); ?>

                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr>
                                                                <td><?php echo $loop->iteration; ?> || <?php echo $student->id; ?></td>
                                                                <td>
                                                                    <?php echo $__env->make('admin.students.parts.photo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                </td>
                                                                <td><?php echo e($student->name_ar); ?></td>
                                                                <td><?php echo e($student->name_en); ?></td>
                                                                <td><?php echo e($student->email); ?></td>
                                                                <td><?php echo e($student->gender); ?></td>
                                                                <td>
                                                                    <?php echo $__env->make('admin.students.parts.freeze', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $__env->make('admin.students.parts.options', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <tr>
                                                                <td colspan="8" class="text-center">
                                                                    <?php echo __('students.no_students_found'); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="8">
                                                                <div class="float-right">
                                                                    <?php echo $students->appends(request()->all())->links(); ?>

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
                            <!--end: table-->

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
        //delete student
        $(document).on('click', '.delete_student_btn', function(e) {
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
                        url: '<?php echo route('admin.students.destroy'); ?>',
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
                                        confirmButton: 'delete_student_button'
                                    }
                                });
                                $('.delete_student_button').click(function() {
                                    $('#myTable').load(location.href + (' #myTable'));
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
                            confirmButton: 'cancel_delete_student_button'
                        }
                    })
                }
            });

        })

        // switch freeze status
        var switchFreeze = false;
        $('body').on('change', '.change_freeze', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            if ($(this).is(':checked')) {
                switchFreeze = $(this).is(':checked');
            } else {
                switchFreeze = $(this).is(':checked');
            }

            $.ajax({
                url: "<?php echo e(route('admin.students.change.freeze')); ?>",
                data: {
                    switchFreeze: switchFreeze,
                    id: id
                },
                type: 'post',
                dataType: 'JSON',
                beforeSend: function() {
                    KTApp.blockPage({
                        overlayColor: '#000000',
                        state: 'danger',
                        message: "<?php echo e(__('general.please_wait')); ?>",
                    });
                }, //end beforeSend
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
                                confirmButton: 'switch_status_toggle'
                            }
                        });
                        $('.switch_status_toggle').click(function() {});
                    }
                }, //end success
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/students/index.blade.php ENDPATH**/ ?>