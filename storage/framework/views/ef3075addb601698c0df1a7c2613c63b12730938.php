<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <form class="form" action="<?php echo e(route('user.store')); ?>" method="POST" id="form_user_store" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">

                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="<?php echo route('users'); ?>" class="text-muted">
                                <?php echo e(__('menu.users')); ?>

                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                <?php echo e(__('menu.add_new_user')); ?>

                            </a>
                        </li>

                    </ul>

                    <!--end::Actions-->
                </div>
                <!--end::Info-->

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">

                    <button type="submit" class="btn btn-primary btn-sm font-weight-bold font-size-base  mr-1">
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
                        <div class="card card-custom card-shadowless rounded-top-0" id="card_settings_store">
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
                                                            <?php echo e(__('users.photo')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="image-input image-input-outline" id="kt_user_photo">
                                                                <div class="image-input-wrapper"></div>
                                                                <label
                                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                                    data-action="change" data-toggle="tooltip"
                                                                    title=""
                                                                    data-original-title="<?php echo e(__('general.change_image')); ?>">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="photo" id="photo"
                                                                        class="table-responsive-sm">
                                                                    <input type="hidden" name="photo_remove" />
                                                                </label>

                                                                <span
                                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                                    data-action="cancel" data-toggle="tooltip"
                                                                    title="Cancel avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                            <span
                                                                class="form-text text-muted"><?php echo e(__('general.image_format_allow')); ?>

                                                            </span>
                                                            <span class="form-text text-danger" id="photo_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('users.name')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="name" id="name" type="text"
                                                                placeholder=" <?php echo e(__('users.enter_name')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-danger" id="name_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('users.gender')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">

                                                            <select class="form-control form-control-solid form-control-lg"
                                                                name="gender" id="gender" type="text">

                                                                <option value="">
                                                                    <?php echo e(__('general.select_from_list')); ?>

                                                                </option>

                                                                <option value="male">
                                                                    <?php echo e(__('general.male')); ?>

                                                                </option>

                                                                <option value="female">
                                                                    <?php echo e(__('general.female')); ?>

                                                                </option>

                                                            </select>
                                                            <span class="form-text text-danger" id="gender_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('users.email')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="email" id="email" type="email"
                                                                placeholder=" <?php echo e(__('users.enter_email')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-danger" id="email_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('users.password')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="password" id="password" type="password"
                                                                placeholder=" <?php echo e(__('users.enter_password')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-danger"
                                                                id="password_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('users.role_id')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">

                                                            <select class="form-control form-control-solid form-control-lg"
                                                                name="role_id" id="role_id" type="text">

                                                                <option value="">
                                                                    <?php echo e(__('general.select_from_list')); ?>

                                                                </option>

                                                                <?php if($roles && $roles->count() > 0): ?>
                                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo $role->id; ?>">
                                                                            <?php if(Lang() == 'ar'): ?>
                                                                                <?php echo $role->role_name_ar; ?>

                                                                            <?php else: ?>
                                                                                <?php echo $role->role_name_en; ?>

                                                                            <?php endif; ?>
                                                                        </option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>

                                                            </select>
                                                            <span class="form-text text-danger" id="role_id_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('users.mobile')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="mobile" id="mobile" type="text"
                                                                placeholder=" <?php echo e(__('users.enter_mobile')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-danger" id="mobile_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->



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
        //////////////////////////////////////////////////////
        var user_photo = new KTImageInput('kt_user_photo');

        /////////////////////////////////////////////////////////
        // Store User
        $('#form_user_store').on('submit', function(e) {
            e.preventDefault();
            ////////////////////////////////////////////////////
            $('#name_error').text('');
            $('#email_error').text('');
            $('#password_error').text('');
            $('#photo_error').text('');
            $('#mobile_error').text('');
            $('#gender_error').text('');
            $('#role_id_error').text('');

            $('#name').css('border-color', '');
            $('#email').css('border-color', '');
            $('#password').css('border-color', '');
            $('#photo').css('border-color', '');
            $('#mobile').css('border-color', '');
            $('#gender').css('border-color', '');
            $('#role_id').css('border-color', '');

            ////////////////////////////////////////////////////

            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = $(this).attr('action');

            $.ajax({
                url: url,
                type: type,
                data: data,
                dataType: false,
                contentType: false,
                cache: false,
                processData: false,
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
                                confirmButton: 'add_user_button'
                            }
                        });
                        $('.add_user_button').click(function() {
                            window.location.href = "<?php echo e(route('users')); ?>";
                        });
                    }
                },

                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key + '_error').text(value[0]);
                        $('#' + key).css('border-color', 'red');
                        $('body,html').animate({
                            scrollTop: 20
                        }, 300);
                    });
                },
                complete: function() {
                    KTApp.unblockPage();
                },
            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/users/create.blade.php ENDPATH**/ ?>