<?php $__env->startSection('title'); ?>
    <?php echo $title; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('metaTags'); ?>
    <meta name="description" content="<?php echo Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en; ?>">
    <meta name="keywords" content="<?php echo Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en; ?>">
    <meta name="application-name" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
    <meta name="author" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="c-panel">
        <div class="">

            <div class="row mx-0 ">

                <!-- begin:left ------------------------------------------------------------->
                <div class="col-lg-6 px-0 left-background-login d-none d-lg-block ">
                    <div class="img-left-login ">
                        <img src="<?php echo asset('site/img/img-login.jpg'); ?>" class=" uk-background-fixed" width="100%" alt="">
                    </div>
                </div>
                <!-- end:left ------------------------------------------------------------->


                <!-- begin:right ------------------------------------------------------------->
                <div class="col-lg-6 block-login">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">


                            <!-- begin:sing up ------------------------------------------------------------->
                            <div class="p-5 text-center sigin_up_section">
                                <div class="title-block-login text-bold text-warning fs-24">
                                    <?php echo trans('site.sign_up'); ?>

                                </div>

                                <form action="<?php echo route('student.signup.store'); ?>" method="POST" enctype="multipart/form-data"
                                    id="student_signup_form">
                                    <?php echo csrf_field(); ?>

                                    <input type="hidden" id="hidden_update" value="hidden_update">

                                    <div class="form-group text-left mt-4 ">
                                        <label for="Name" class=" "><?php echo __('students.name_ar'); ?>.</label>
                                        <input type="text" class="form-control" id="name_ar" name="name_ar"
                                            autocomplete="off" placeholder="<?php echo __('students.enter_name_ar'); ?>">
                                    </div>


                                    <div class="form-group text-left mt-4 ">
                                        <label for="Name" class=" "><?php echo __('students.name_en'); ?>.</label>
                                        <input type="text" class="form-control" id="name_en" name="name_en"
                                            autocomplete="off" placeholder="<?php echo __('students.enter_name_en'); ?>">
                                    </div>


                                    <div class="form-group text-left">
                                        <label for="nPassword"><?php echo trans('students.password'); ?>.</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            autocomplete="off" placeholder="<?php echo trans('students.enter_password'); ?>">
                                    </div>

                                    <div class="form-group text-left">
                                        <label for="cnPassword"><?php echo trans('students.confirm_password'); ?>.</label>
                                        <input type="password" class="form-control" id="confirm_password"
                                            name="confirm_password" autocomplete="off"
                                            placeholder="<?php echo trans('students.enter_confirm_password'); ?>">
                                    </div>


                                    <div class="form-group text-left mt-4 ">
                                        <label for="Name" class=" "><?php echo __('students.mobile'); ?>.</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            autocomplete="off" placeholder="<?php echo __('students.enter_mobile'); ?>">
                                    </div>

                                    <div class="form-group text-left mt-4 ">
                                        <label for="Name" class=" "><?php echo __('students.email'); ?>.</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            autocomplete="off" placeholder="<?php echo __('students.enter_email'); ?>">
                                    </div>

                                    <div class="form-group text-left mt-4 ">
                                        <label for="Name" class=" "><?php echo __('students.whatsapp'); ?>.</label>
                                        <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                            autocomplete="off" placeholder="<?php echo __('students.enter_whatsapp'); ?>">
                                    </div>

                                    <div class="form-group text-left">
                                        <label for="gender"><?php echo trans('students.gender'); ?>.</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="">
                                                <?php echo e(trans('general.select_from_list')); ?>

                                            </option>
                                            <option value="male">
                                                <?php echo e(trans('general.male')); ?>

                                            </option>
                                            <option value="female">
                                                <?php echo e(trans('general.female')); ?>

                                            </option>
                                        </select>
                                    </div>


                                    <button type="submit" class="btn btn-primary px-5 br-20">
                                        <?php echo trans('site.sign_up'); ?>

                                    </button>
                                </form>
                            </div>
                            <!-- begin:sing up ------------------------------------------------------------->

                        </div>
                    </div>


                    <!-- end:right ------------------------------------------------------------->


                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('adminBoard/assets/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>

    <script type="text/javascript">
        $('#student_signup_form').validate({
            rules: {
                name_ar: {
                    required: true,
                },
                name_en: {
                    required: true,
                },
                mobile: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10

                },
                whatsapp: {
                    required: true,
                },

                email: {
                    required: true,
                    email: true,
                },

                gender: {
                    required: true,
                },

                password: {
                    required: true,
                    minlength: 6,
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                }

            },
            messages: {
                name_ar: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },

                name_en: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },

                mobile: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                    digits: '<?php echo e(trans('site.digits')); ?>',
                    minlength: '<?php echo e(trans('site.mobile_number_validation')); ?>',
                    maxlength: '<?php echo e(trans('site.mobile_number_validation')); ?>',

                },

                whatsapp: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },

                email: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },

                gender: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },

                password: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                    minlength: '<?php echo e(trans('site.min_length')); ?>',

                },
                confirm_password: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                    minlength: '<?php echo e(trans('site.min_length')); ?>',
                    equalTo: '<?php echo e(trans('site.equalTo')); ?>',

                },
            },
        });

        ////////////////////////////////////////////////////
        $(document).on('submit', 'form', function(e) {
            e.preventDefault();
            //////////////////////////////////////////////////////////////
            $('#name_ar').css('border-color', '');
            $('#name_en').css('border-color', '');
            $('#password').css('border-color', '');
            $('#gender').css('border-color', '');
            $('#mobile').css('border-color', '');
            $('#email').css('border-color', '');
            $('#whatsapp').css('border-color', '');


            $('#name_ar_error').text('');
            $('#name_en_error').text('');
            $('#password_error').text('');
            $('#gender_error').text('');
            $('#mobile_error').text('');
            $('#email_error').text('');
            $('#whatsapp_error').text('');
            /////////////////////////////////////////////////////////////
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

                },
                success: function(data) {
                    console.log(data);
                    if (data.status == true) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 2500,
                            timerProgressBar: false,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: data.msg
                        })

                        setTimeout(function() {
                            window.location.href = "<?php echo route('index'); ?>"
                        }, 2505)

                    } else if (data.status == false) {
                        Swal.fire({
                            title: data.msg,
                            icon: "warning",
                            allowOutsideClick: false,
                            showDenyButton: false,
                            showCancelButton: true,
                            cancelButtonText: `<?php echo trans('site.cancel'); ?>`,
                            confirmButtonText: `<?php echo trans('site.login'); ?>`,
                            customClass: {
                                confirmButton: 'registration_confirm_button'
                            }

                        });
                        $('.registration_confirm_button').click(function() {
                            window.location.href = "<?php echo route('get.student.login'); ?>";
                        });

                    } //end else
                    // $('#student_signup_form')[0].reset();
                },

                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key + '_error').text(value[0]);
                        $('#' + key).css('border-color', 'red');
                    });
                },
                complete: function() {},
            })

        }); //end submit
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.student-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/student/auth/signup.blade.php ENDPATH**/ ?>