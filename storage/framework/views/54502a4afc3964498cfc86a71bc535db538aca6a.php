<?php $__env->startSection('title'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <form class="form" action="<?php echo route('admin.role.store'); ?>" method="POST" id="form_role_add">
    <?php echo csrf_field(); ?>
    <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div
                class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">


                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.roles')); ?>" class="text-muted">
                                <?php echo e(__('menu.permissions')); ?>

                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                <?php echo e(__('menu.add_new_permission')); ?>

                            </a>
                        </li>
                    </ul>

                    <!--end::Actions-->
                </div>
                <!--end::Info-->

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <button type="submit"
                            class="btn btn-primary btn-sm font-weight-bold font-size-base  mr-1">
                        <i class="fa fa-save"></i>
                        <?php echo e(__('general.save')); ?>

                    </button>

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
                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0" id="card_languages_add">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">

                                        <div class="row justify-content-center">
                                            <div class="col-xl-9">

                                                <!--begin::body-->
                                                <div class="my-5">

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('roles.role_name_ar')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="role_name_ar" id="role_name_ar" type="text"
                                                                placeholder=" <?php echo e(__('roles.enter_role_name_ar')); ?>"
                                                                autocomplete="off"/>
                                                            <span class="form-text text-danger"
                                                                  id="role_name_ar_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('roles.role_name_en')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="role_name_en" id="role_name_en" type="text"
                                                                placeholder=" <?php echo e(__('roles.enter_role_name_en')); ?>"
                                                                autocomplete="off"/>
                                                            <span class="form-text text-danger"
                                                                  id="role_name_en_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <div class="form-group row">
                                                        <label
                                                            class="col-3 col-form-label"><?php echo e(__('roles.permissions')); ?></label>
                                                        <div class="col-9 col-form-label">
                                                            <?php $__currentLoopData = config('global.permissions'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="checkbox-inline" style="margin-top: 5px">
                                                                    <label class="checkbox checkbox-primary">
                                                                        <input type="checkbox" name="permissions[]"
                                                                               id="permissions[]" value="<?php echo e($name); ?>">
                                                                        <span></span>
                                                                        <?php echo e(__(config('global.permissions.',$value))); ?>

                                                                    </label>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            <br/>
                                                            <span class="form-text text-danger" id="permissions_error"></span>
                                                        </div>

                                                        <?php echo e(__(config('global.dashboard'))); ?>

                                                    </div>

                                                </div>
                                                <!--begin::body-->

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>

            </div>
        </div>
        <!--end::content-->

    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">

        $('#form_role_add').on('submit', function (e) {
            e.preventDefault();
            ///////////////////////////////////////////////////////////////////////////
            $('#role_name_ar_error').text('');
            $('#role_name_en_error').text('');
            $('#permissions_error').text('');

            $('#role_name_ar').css('border-color', '');
            $('#role_name_en').css('border-color', '');
            ///////////////////////////////////////////////////////////////////////////

            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = $(this).attr('action');

            $.ajax({
                url: url,
                data: data,
                type: type,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    KTApp.blockPage({
                        overlayColor: '#000000',
                        state: 'danger',
                        message: "<?php echo e(__('general.please_wait')); ?>",
                    });
                },

                success: function (data) {
                    KTApp.unblockPage();
                    console.log(data);
                    if (data.status == true) {
                        Swal.fire({
                            title: data.msg,
                            text: "",
                            icon: "success",
                            allowOutsideClick: false,
                            customClass: {confirmButton: 'add_role_button'}
                        });
                        $('.add_role_button').click(function () {
                            window.location.href = "<?php echo e(route('admin.roles')); ?>";
                        });
                    }

                },

                error: function (reject) {
                    KTApp.unblockPage();
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function (key, value) {
                        $('#' + key + '_error').text(value[0]);
                        $('#' + key).css('border-color', '#F64E60');
                        $('html,body').animate({scrollTop: 20}, 300);
                    });
                },

                complete: function () {
                    KTApp.unblockPage();
                },
            });//end ajax

        });//end submit

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/roles/create.blade.php ENDPATH**/ ?>