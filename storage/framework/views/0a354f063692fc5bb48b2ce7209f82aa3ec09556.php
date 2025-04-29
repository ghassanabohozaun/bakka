<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form" action="<?php echo e(route('admin.students.update')); ?>" method="POST" id="form_students_update">
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
                            <a href="<?php echo e(route('admin.students')); ?>" class="text-muted">
                                <?php echo e(__('menu.students')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.students.edit', $student->id)); ?>" class="text-muted">
                                <?php echo e(__('students.student_update')); ?>

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
                                                    <div class="form-group row d-none">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            ID
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input type="hidden" value="<?php echo e($student->id); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="id" id="id" autocomplete="off" />
                                                            <input type="hidden"
                                                                class="form-control form-control-solid form-control-lg"
                                                                id='site_lang_en' name="site_lang_en"
                                                                value="<?php echo setting()->site_lang_en; ?>">

                                                            <input type="hidden"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="hidden_update" value="hidden_update">
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('students.photo')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="image-input image-input-outline"
                                                                id="kt_student_photo">
                                                                <div class="image-input-wrapper"
                                                                    style="background-image: url(<?php echo e(asset('/adminBoard/uploadedImages/students/' . $student->photo)); ?>">

                                                                </div>
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
                                                            <?php echo e(__('students.name_ar')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo e($student->name_ar); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="name_ar" id="name_ar" type="text"
                                                                placeholder=" <?php echo e(__('students.enter_name_ar')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-danger" id="name_ar_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('students.name_en')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo e($student->name_en); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="name_en" id="name_en" type="text"
                                                                placeholder=" <?php echo e(__('students.enter_name_en')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger" id="name_en_error"></span>

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
                                                            <?php echo e(__('students.gender')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">

                                                            <select class="form-control form-control-solid form-control-lg"
                                                                name="gender" id="gender" type="text">
                                                                <option value="">
                                                                    <?php echo e(__('general.select_from_list')); ?>

                                                                </option>
                                                                <option value="male" <?php echo $student->gender == 'male' ? 'selected' : ''; ?>>
                                                                    <?php echo e(__('general.male')); ?>

                                                                </option>
                                                                <option value="female" <?php echo $student->gender == 'female' ? 'selected' : ''; ?>>
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
                                                            <?php echo e(__('students.mobile')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo e($student->mobile); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="mobile" id="mobile" type="text"
                                                                placeholder=" <?php echo e(__('students.enter_mobile')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger" id="mobile_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('students.email')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo $student->email; ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="email" id="email" type="text"
                                                                placeholder=" <?php echo e(__('students.enter_email')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-danger" id="email_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('students.whatsapp')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo $student->whatsapp; ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="whatsapp" id="whatsapp" type="text"
                                                                placeholder=" <?php echo e(__('students.enter_whatsapp')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-danger"
                                                                id="whatsapp_error"></span>
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
        var student_photo = new KTImageInput('kt_student_photo');

        ///-------------------------------------------------------------------////

        $('#form_students_update').on('submit', function(e) {
            e.preventDefault();
            //////////////////////////////////////////////////////////////

            $('#name_ar').css('border-color', '');
            $('#name_en').css('border-color', '');
            $('#password').css('border-color', '');



            $('#name_ar_error').text('');
            $('#name_en_error').text('');
            $('#password_error').text('');

            /////////////////////////////////////////////////////////////
            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = $(this).attr('action');

            $.ajax({
                url: url,
                data: data,
                type: type,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    KTApp.blockPage({
                        overlayColor: '#000000',
                        state: 'danger',
                        message: "<?php echo e(__('general.please_wait')); ?>",
                    });
                }, //end beforeSend

                success: function(data) {
                    KTApp.unblockPage();
                    if (data.status == true) {
                        Swal.fire({
                            title: data.msg,
                            text: "",
                            icon: "success",
                            allowOutsideClick: false,
                            customClass: {
                                confirmButton: 'update_student_button'
                            }
                        });
                        $('.update_student_button').click(function() {
                            window.location.href = "<?php echo e(route('admin.students')); ?>";
                        });
                    }
                }, //end success

                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key + '_error').text(value[0]);
                        $('#' + key).css('border-color', '#F64E60');
                        $('html, body').animate({
                            scrollTop: 20
                        }, 300);

                    });

                }, //end error

                complete: function() {
                    KTApp.unblockPage();
                }, //end complete

            });

        }); //end submit
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/students/update.blade.php ENDPATH**/ ?>