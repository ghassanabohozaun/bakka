<header class="  pb-4 pt-1 custom-header">
    <div class=" container">
        <div class="row justify-content-between align-items-center my-3">
            <div class="col-auto">
                <div class="logo-header">
                    <a href="<?php echo route('index'); ?>">
                        <img src="<?php echo asset('site/img/logo-white.svg'); ?>" width="120" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col text-right">
                <div class="row justify-content-end">

                    <?php if(student()->check()): ?>
                        <!-- begin:user image --------------------------------------------------->
                        <div class="col-auto pr-0">
                            <a href="<?php echo route('student.courses'); ?>" class="img-after-login">

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
                        <div class="col-auto px-2" id="student_notifications_section"> </div>
                        <!-- end:user notifications --------------------------------------------------->
                    <?php else: ?>
                        <!-- begin:login --------------------------------------------------->
                        <div class="col-auto pr-0">
                            <a href="<?php echo route('get.student.login'); ?>" class="btn btn-light px-3 br-20 fs-14">
                                <?php echo __('site.login'); ?>

                            </a>
                        </div>
                        <!-- end:login --------------------------------------------------->

                        <!-- begin:signup --------------------------------------------------->
                        <div class="col-auto px-2">
                            <a href="<?php echo route('student.signup'); ?>" class=" btn btn-outline-light br-20 mx-1 fs-14">
                                <?php echo __('site.sign_up'); ?>

                            </a>
                        </div>
                        <!-- end:signup --------------------------------------------------->

                    <?php endif; ?>

                    <!-- begin:language --------------------------------------------------->
                    <?php if(setting()->lang_front_button_status == 'on'): ?>
                        <div class="col-auto pl-0">

                            <?php if(Lang() == 'ar'): ?>
                                <a href="/en" class="btn btn-outline-light br-50 fs-14 w-h">
                                    <?php echo __('site.en'); ?>

                                </a>
                            <?php else: ?>
                                <a href="/ar" class="btn btn-outline-light br-20 fs-14 w-h">
                                    <?php echo __('site.ar'); ?>

                                </a>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>
                    <!-- begin:language --------------------------------------------------->

                </div>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg border border-right-0 border-left-0 py-0">

            <button class="navbar-toggler  w-100" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>

            <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                <ul class="navbar-nav  d-flex align-items-center justify-content-between w-100">

                    <li class="nav-item  col active">
                        <a class="nav-link" href="<?php echo route('index'); ?>">
                            <?php echo __('site.index'); ?>

                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item  col ">
                        <a class="nav-link" href="<?php echo route('courses'); ?>">
                            <?php echo __('site.courses'); ?>

                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item  col ">
                        <a class="nav-link" href="<?php echo route('faq'); ?>">
                            <?php echo __('site.faq'); ?>

                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item col">
                        <a class="nav-link" href="<?php echo route('index'); ?>#contactUs">
                            <?php echo __('site.contact_us'); ?>

                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        //Notifications
        $('#student_notifications_section').load("<?php echo route('student.get.header.notificatoins'); ?>");
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/student/includes/orange-header.blade.php ENDPATH**/ ?>