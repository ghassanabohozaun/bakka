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
        <div class="  ">
            <div class="row mx-0 align-items-center">
                <!-- begin:left ------------------------------------------------------------->

                <div class="col-lg-6 px-0 left-background-login d-none d-lg-block">
                    <div class="img-left-login ">
                        <img src="<?php echo asset('site.img/img-login.jpg'); ?>img/img-login.jpg" class=" uk-background-fixed" width="100%"
                            alt="">
                    </div>
                </div>
                <!-- end:left ------------------------------------------------------------->

                <!-- begin:right ------------------------------------------------------------->
                <div class="col-lg-6 block-login">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="  p-5 text-center">
                                <div class="title-block-login text-bold text-warning fs-24">
                                    <?php echo __('site.login'); ?>

                                </div>
                                <div class="fs-12 my-3">
                                    <?php echo __('site.login_description'); ?>


                                </div>
                                <form action="<?php echo route('student.login'); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <?php if(\Illuminate\Support\Facades\Session::has('error')): ?>
                                        <div class="alert alert-danger font-weight-bold" role="alert">
                                            <?php echo e(\Illuminate\Support\Facades\Session::get('error')); ?>

                                        </div>
                                    <?php endif; ?>


                                    <div class="form-group text-left mt-4">
                                        <label for="Mobile" class=" "><?php echo __('students.email'); ?></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            autocomplete="off" placeholder="<?php echo __('students.enter_email'); ?>">

                                        <?php $__errorArgs = ['mawhob_mobile_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger font-weight-bold"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>


                                    <div class="form-group text-left">
                                        <label for="exampleInputPassword1"><?php echo __('students.password'); ?></label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="<?php echo __('students.enter_password'); ?>">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger font-weight-bold"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>


                                    <div class="form-group  text-left">
                                        <?php echo __('site.dont_have_account'); ?>

                                        <a href="<?php echo route('student.signup'); ?>" class=" text-dark text-bold">
                                            <?php echo __('site.create_account'); ?>

                                        </a>
                                    </div>
                                    <button class="btn btn-primary px-5 br-20"><?php echo __('site.login'); ?>

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end:right ------------------------------------------------------------->

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.student-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/student/auth/login.blade.php ENDPATH**/ ?>