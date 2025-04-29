<div class="row justify-content-between align-items-center my-3">
    <div class="col-auto">
        <div class="logo-header">
            <a href="<?php echo route('index'); ?>">
                <img src="<?php echo asset('site/img/logo.svg'); ?>" width="120" alt="">
            </a>
        </div>
    </div>
    <div class="col-lg-4 col text-right">
        <div class="row justify-content-end">


            <?php if(student()->check()): ?>
                <!-- begin:user image --------------------------------------------------->
                <div class="col-auto pr-0">
                    <a href="<?php echo route('student.portfolio'); ?>" class="img-after-login  br-5 fs-14">
                        <?php if(student()->user()->photo == null): ?>
                            <?php if(student()->user()->gender == 'male'): ?>
                                <img src="<?php echo e(asset('adminBoard/images/male.jpeg')); ?>" alt="">
                            <?php else: ?>
                                <img src="<?php echo e(asset('adminBoard/images/female.jpeg')); ?>" alt="">
                            <?php endif; ?>
                        <?php else: ?>
                            <img src="<?php echo asset('adminBoard/uploadedImages/students/' . student()->user()->photo); ?>" alt="">
                        <?php endif; ?>
                    </a>
                </div>
                <!-- end:user image --------------------------------------------------->
                <!-- begin:user notifications --------------------------------------------------->

                <div class="col-auto px-2  ">
                    <a href="#" class="bell-after-login student_notifications_count">
                        <div> <span>0</span><i class="fas fa-bell"></i></div>
                    </a>
                    <div class="p-2 br-5 box-noty" uk-dropdown="mode: click ; pos: top-right">
                        <span id="student_notify_section"></span>
                    </div>
                </div>

                <!-- end:user notifications --------------------------------------------------->
            <?php else: ?>
                <div class="col-auto pl-0">
                    <a href="<?php echo route('get.student.login'); ?>" class="btn btn-primary px-3 br-20 fs-14">
                        <?php echo trans('site.login'); ?>

                    </a>
                </div>
                <div class="col-auto pl-0">
                    <a href="<?php echo route('student.signup'); ?>" class=" btn btn-outline-light br-20 mx-1 fs-14">
                        <?php echo trans('site.sign_up'); ?>

                    </a>
                </div>
            <?php endif; ?>


            <?php if(setting()->lang_front_button_status == 'on'): ?>
                <?php if(Lang() == 'ar'): ?>
                    <div class="col-auto pl-0">
                        <a href="/en" class="btn btn-outline-light br-50 fs-14 w-h">
                            <?php echo trans('site.ar'); ?>

                        </a>
                    </div>
                <?php else: ?>
                    <div class="col-auto pl-0">
                        <a href="/ar" class="btn btn-outline-light br-20 fs-14 w-h">
                            <?php echo trans('site.en'); ?>

                        </a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        </div>
    </div>
</div>


<?php $__env->startPush('js'); ?>
    <script type="text/javascript"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/includes/top-header.blade.php ENDPATH**/ ?>