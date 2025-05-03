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
    <div class=" col-lg-9">
        <div
            class=" with-screen-titel row justify-content-between
                                align-items-center p-2 br-10 bg-light mx-0 mb-3 mt-3 mt-md-0">
            <div class="col-auto title-with-icon d-flex align-items-center px-1">
                <span class="mr-2">
                    <img src="<?php echo asset('site/img/suitcase.svg'); ?>" width="25" alt="">
                </span>
                <span class="fs-14 text-bold"> <?php echo $title; ?> </span>
            </div>
            
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <form action="<?php echo route('student.update.account'); ?>" method="POST" enctype="multipart/form-data"
                        id="student_update_account_form">
                        <?php echo csrf_field(); ?>


                        <div class="row d-none">
                            <div class="col-lg-6">
                                <div class="form-group text-left">
                                    <label for="Name" class=" ">ID</label>
                                    <input type="hidden" class="form-control" id="id" name="id"
                                        value="<?php echo student()->user()->id; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group text-left">
                                    <label for="Name" class=" "><?php echo __('site.student_photo'); ?>.</label>
                                    <input type="file" class="form-control" id="photo" name="photo">
                                    <span class="error" id='photo_error'></span>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text-left">
                                    <label for="Name" class=" "><?php echo __('site.student_name_ar'); ?>.</label>
                                    <input type="text" disabled class="form-control" id="name_ar" name="name_ar"
                                        autocomplete="off" value="<?php echo student()->user()->name_ar; ?>"
                                        placeholder="<?php echo __('site.student_name_ar'); ?>">
                                    <span class="error" id='name_ar_error'></span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group text-left">
                                    <label for="Name" class=" "><?php echo __('site.student_name_en'); ?>.</label>
                                    <input type="text" disabled class="form-control" id="name_en" name="name_en"
                                        autocomplete="off" value="<?php echo student()->user()->name_en; ?>"
                                        placeholder="<?php echo __('site.student_name_en'); ?>">
                                    <span class="error" id='name_en_error'></span>

                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group text-left ">
                                    <label for="email" class="">
                                        <?php echo __('site.student_email'); ?>.
                                    </label>
                                    <input type="text" class="form-control" autocomplete="off" id="email" disabled
                                        name="email" value="<?php echo student()->user()->email; ?>"
                                        placeholder="<?php echo __('site.student_email'); ?>">
                                    <span class="error" id='email_error'></span>

                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group text-left ">
                                    <label for="whatsapp" class="">
                                        <?php echo __('site.student_mobile'); ?>.
                                    </label>
                                    <input type="text" class="form-control" autocomplete="off" id="mobile"
                                        name="mobile" value="<?php echo student()->user()->mobile; ?>"
                                        placeholder="<?php echo __('site.student_mobile'); ?>">
                                    <span class="error" id='mobile_error'></span>

                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group text-left ">
                                    <label for="whatsapp" class="">
                                        <?php echo __('site.student_whatsapp'); ?>.
                                    </label>
                                    <input type="text" class="form-control" autocomplete="off" id="whatsapp"
                                        name="whatsapp" value="<?php echo student()->user()->whatsapp; ?>"
                                        placeholder="<?php echo __('site.student_whatsapp'); ?>">
                                    <span class="error" id='photo_error'></span>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group text-left">
                                    <label for="Talent"><?php echo __('site.student_gender'); ?></label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="">
                                            <?php echo e(__('general.select_from_list')); ?>

                                        </option>
                                        <option value="male" <?php echo student()->user()->gender == 'male' ? 'selected' : ''; ?>>
                                            <?php echo e(__('general.male')); ?>

                                        </option>
                                        <option value="female" <?php echo student()->user()->gender == 'female' ? 'selected' : ''; ?>>
                                            <?php echo e(__('general.female')); ?>

                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group text-left">
                                    <label for="nPassword"><?php echo __('site.student_new_passowrd'); ?></label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        autocomplete="off" placeholder="<?php echo __('site.student_new_passowrd'); ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group text-left">
                                    <label for="cnPassword"><?php echo __('site.student_confirm_password'); ?></label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" autocomplete="off"
                                        placeholder="<?php echo __('site.student_confirm_password'); ?>">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary px-5 br-20">
                            <?php echo __('site.update'); ?>

                        </button>
                    </form>
                </div>


            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('adminBoard/assets/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>

    <script type="text/javascript">
        $('#student_update_account_form').validate({
            rules: {

                name_ar: {
                    required: true,
                },
                name_en: {
                    required: true,
                },
                whatsapp: {
                    required: true,
                },
                mobile: {
                    required: true,
                },
                email: {
                    required: true,
                },
                gender: {
                    required: true,
                },

                password: {
                    minlength: 6,
                },
                confirm_password: {
                    minlength: 6,
                    equalTo: "#password"
                }


            },
            messages: {
                name_ar: {
                    required: '<?php echo e(__('site.it_is_required')); ?>',
                },
                name_en: {
                    required: '<?php echo e(__('site.it_is_required')); ?>',
                },
                whatsapp: {
                    required: '<?php echo e(__('site.it_is_required')); ?>',
                },
                mobile: {
                    required: '<?php echo e(__('site.it_is_required')); ?>',
                },
                email: {
                    required: '<?php echo e(__('site.it_is_required')); ?>',
                },
                gender: {
                    required: '<?php echo e(__('site.it_is_required')); ?>',
                },
                password: {
                    minlength: '<?php echo e(__('site.min_length')); ?>',

                },
                confirm_password: {
                    minlength: '<?php echo e(__('site.min_length')); ?>',
                    equalTo: '<?php echo e(__('site.equalTo')); ?>',
                },
            },
        });

        ////////////////////////////////////////////////////
        $(document).on('submit', 'form', function(e) {
            e.preventDefault();

            //////////////////////////////////////////////////////////////
            $('#photo').css('border-color', '');
            $('#name_ar').css('border-color', '');
            $('#name_en').css('border-color', '');
            $('#whatsapp').css('border-color', '');
            $('#mobile').css('border-color', '');
            $('#email').css('border-color', '');
            $('#gender').css('border-color', '');
            $('#password').css('border-color', '');

            $('#photo_error').text('');
            $('#name_ar_error').text('');
            $('#name_en_error').text('');
            $('#whatsapp_error').text('');
            $('#mobile_error').text('');
            $('#email_error').text('');
            $('#gendet_error').text('');
            $('#password_error').text('');
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
                            title: data.msg,
                        });
                        $('#student_profile_photo').load(location.href + (' #student_profile_photo'));
                        setTimeout(function() {
                            window.location.href = "<?php echo route('student.update.account'); ?>"
                        }, 2500);
                    }

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

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/student/account-update.blade.php ENDPATH**/ ?>