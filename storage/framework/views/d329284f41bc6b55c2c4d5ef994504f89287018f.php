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
                        <a href="<?php echo route('admin.courses'); ?>" class="text-muted">
                            <?php echo e(__('menu.courses')); ?>

                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);" class="text-muted">
                            <?php echo e(__('courses.enrolled_list')); ?>

                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);" class="text-muted"> <?php echo $course->{'title_' . Lang()}; ?></a>
                    </li>
                </ul>

                <!--end::Actions-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary btn-sm font-weight-bold font-size-base mr-1 add_new_course_student"
                    id='add_new_course_student' data-id="<?php echo $course->id; ?>">
                    <i class="fa fa-plus-square"></i>
                    <?php echo e(__('courses.enroll_student')); ?>

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
                                                            <th><?php echo __('courses.student_name'); ?></th>
                                                            <th><?php echo __('courses.email'); ?></th>
                                                            <th><?php echo __('courses.mobile'); ?></th>
                                                            <th><?php echo __('courses.enrolled_date'); ?></th>
                                                            <th><?php echo __('courses.has_certitfication'); ?></th>
                                                            <th><?php echo __('courses.enroll_agreement'); ?></th>
                                                            <th class="text-center" style="width: 100px;">
                                                                <?php echo __('general.actions'); ?>

                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__empty_1 = true; $__currentLoopData = $courseStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courseStudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tr>
                                                                <td><?php echo $loop->iteration; ?></td>
                                                                <td><?php echo e($courseStudent->{'name_' . Lang()}); ?> </td>
                                                                <td><?php echo e($courseStudent->email); ?></td>
                                                                <td><?php echo e($courseStudent->mobile); ?></td>
                                                                <td><?php echo e($courseStudent->pivot->enrolled_date); ?> </td>
                                                                <td><?php echo $__env->make('admin.courses.enroll-list.parts.certification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                                                                <td>
                                                                    <div class="cst-switch switch-sm">
                                                                        <input type="checkbox" id="enroll_agreement_status"
                                                                            <?php echo e($courseStudent->pivot->enroll_agreement == 'on' ? 'checked' : ''); ?>

                                                                            data-id="<?php echo e($courseStudent->pivot->id); ?>"
                                                                            class="enroll_agreement_status">
                                                                    </div>

                                                                </td>

                                                                <td> <?php echo $__env->make('admin.courses.enroll-list.parts.options', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <tr>
                                                                <td colspan="8" class="text-center">
                                                                    <?php echo __('courses.no_students_found'); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="8">
                                                                <div class="float-right">
                                                                    <?php echo $courseStudents->appends(request()->all())->links(); ?>

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

                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>

    <?php echo $__env->make('admin.courses.enroll-list.modals.add-new-student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.courses.enroll-list.modals.add-student-certification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.courses.enroll-list.modals.update-student-certification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--end::content-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        ///  change enroll agreement status
        var enrollAgreementStatusSwitch = false;
        $(document).on('click', '.enroll_agreement_status', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            if ($(this).is(':checked')) {
                enrollAgreementStatusSwitch = $(this).is(':checked');
                var messageText = "<?php echo e(__('courses.do_you_want_to_enroll_agreement')); ?>";
                var iconValue = "warning";
            } else {
                enrollAgreementStatusSwitch = false;
                var messageText = "<?php echo e(__('courses.do_you_want_to_cancel_enroll_agreement')); ?>";
                var iconValue = "error";
            }

            Swal.fire({
                title: messageText,
                icon: iconValue,
                showCancelButton: true,
                confirmButtonText: "<?php echo e(__('general.yes')); ?>",
                cancelButtonText: "<?php echo e(__('general.no')); ?>",
                reverseButtons: false,
                allowOutsideClick: false,
            }).then(function(result) {
                if (result.value) {

                    $.ajax({
                        url: '<?php echo route('admin.course.enroll.agreement.status'); ?>',
                        data: {
                            enrollAgreementStatusSwitch: enrollAgreementStatusSwitch,
                            id: id
                        },
                        type: 'post',
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            if (data.status == true) {
                                Swal.fire({
                                    title: "<?php echo __('courses.enroll_agreement'); ?>",
                                    text: data.msg,
                                    icon: "success",
                                    allowOutsideClick: false,
                                    customClass: {
                                        confirmButton: 'enroll_agreement_button'
                                    }
                                });
                                $('.enroll_agreement_button').click(function() {
                                    $('#myTable').load(location.href + (' #myTable'));
                                });
                            } else if (data.status == false) {
                                Swal.fire({
                                    title: "<?php echo __('courses.cancel_enroll_agreement'); ?>",
                                    text: data.msg,
                                    icon: "warning",
                                    allowOutsideClick: false,
                                    customClass: {
                                        confirmButton: 'cancel_enroll_agreement_button'
                                    }
                                });
                                $('.cancel_enroll_agreement_button').click(function() {
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
                            confirmButton: 'cancel_enroll_agreement_button'
                        }
                    })
                }
            });

        })


        //delete enrolled student
        $(document).on('click', '.delete_enrolled_student', function(e) {
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
                    // delete enrolled student
                    $.ajax({
                        url: '<?php echo route('admin.course.enroll.student.delete'); ?>',
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
                                        confirmButton: 'delete_enrolled_student_button'
                                    }
                                });
                                $('.delete_enrolled_student_button').click(function() {
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
                            confirmButton: 'cancel_delete_enrolled_student_button'
                        }
                    })
                }
            });

        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/courses/enroll-list/index.blade.php ENDPATH**/ ?>