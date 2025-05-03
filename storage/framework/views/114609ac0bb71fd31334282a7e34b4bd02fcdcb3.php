<div class="col-lg-3">
    <div class="left-list-cp" id="student_profile_photo">
        <div class="content-user">
            <div class="flex-with-img d-flex ">
                <?php if(student()->user()->photo == null): ?>
                    <?php if(student()->user()->gender == 'male'): ?>
                        <div class="img-user">
                            <img src="<?php echo e(asset('adminBoard/images/male.jpeg')); ?>" alt="">
                        </div>
                    <?php else: ?>
                        <div class="img-user">
                            <img src="<?php echo e(asset('adminBoard/images/female.jpeg')); ?>" alt="">
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="img-user">
                        <img src="<?php echo asset('adminBoard/uploadedImages/students/' . student()->user()->photo); ?>" alt="">
                    </div>
                <?php endif; ?>

                <div class="name-title ml-2">
                    <div class="name">
                        <?php echo student()->user()->{'name_' . Lang()}; ?>

                    </div>
                    <div class="title"> </div>
                </div>
            </div>
            <div class="list-contact-icons">
                <ul>
                    
                    <li>
                        <span class="icon"><i class="fas fa-phone"></i></span>
                        <span class="text"><?php echo student()->user()->mobile; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fab fa-whatsapp"></i></span>
                        <span class="text"><?php echo student()->user()->whatsapp; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="text">
                            <?php if(student()->user()->gender == 'male'): ?>
                                <?php echo __('general.male'); ?>

                            <?php else: ?>
                                <?php echo __('general.female'); ?>

                            <?php endif; ?>
                        </span>
                    </li>
                </ul>
            </div>
        </div>


        <div class="list-links-pages p-4 bg-light">
            <ul>

                <li>
                    <a href="<?php echo route('student.courses'); ?>" class="<?php if(str_contains(url()->current(), 'courses') || str_contains(url()->current(), 'course')): ?> active <?php endif; ?>">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30">
                                <g id="Courses" transform="translate(0 -0.474)">
                                    <g id="Group_41166" data-name="Group 41166" transform="translate(-599 -994.526)">
                                        <rect id="Rectangle_1568" data-name="Rectangle 1568" width="30"
                                            height="30" transform="translate(599 995)" fill="none" />
                                        <g id="online-course" transform="translate(599 995.357)">
                                            <path id="Path_28" data-name="Path 28"
                                                d="M21,17a.5.5,0,0,1-.213-.047l-8.5-4a.5.5,0,0,1,0-.905l8.5-4a.5.5,0,0,1,.426,0l8.5,4a.5.5,0,0,1,0,.905l-8.5,4A.5.5,0,0,1,21,17Zm-7.325-4.5L21,15.947,28.326,12.5,21,9.052Z"
                                                transform="translate(-6 -4)" fill="#f28705" />
                                            <path id="Path_29" data-name="Path 29"
                                                d="M23.5,26.177a.5.5,0,0,1-.223-.052l-6-3A.5.5,0,0,1,17,22.677V18.853a.5.5,0,0,1,.713-.452L23.5,21.124,29.287,18.4a.5.5,0,0,1,.713.452v3.824a.5.5,0,0,1-.277.448l-6,3A.5.5,0,0,1,23.5,26.177Z"
                                                transform="translate(-8.5 -9.177)" fill="#f28705" />
                                            <path id="Path_30" data-name="Path 30"
                                                d="M38,17H29.5a.5.5,0,0,1,0-1H38a.5.5,0,0,1,0,1Z"
                                                transform="translate(-14.5 -8)" fill="#f28705" />
                                            <path id="Path_31" data-name="Path 31"
                                                d="M46.5,21.5A.5.5,0,0,1,46,21V16.5a.5.5,0,0,1,1,0V21A.5.5,0,0,1,46.5,21.5Z"
                                                transform="translate(-23 -8)" fill="#f28705" />
                                            <path id="Path_32" data-name="Path 32"
                                                d="M29.5,17a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,1,0v2A.5.5,0,0,1,29.5,17Z"
                                                transform="translate(-14.5 -7)" fill="#f28705" />
                                            <path id="Path_33" data-name="Path 33"
                                                d="M44.5,27.5a.5.5,0,0,1-.416-.778l1-1.5a.5.5,0,0,1,.832.555l-1,1.5A.5.5,0,0,1,44.5,27.5Z"
                                                transform="translate(-22 -12.499)" fill="#f28705" />
                                            <path id="Path_34" data-name="Path 34"
                                                d="M47.5,27.5a.5.5,0,0,1-.417-.222l-1-1.5a.5.5,0,0,1,.832-.555l1,1.5a.5.5,0,0,1-.416.777Z"
                                                transform="translate(-23 -12.499)" fill="#f28705" />
                                            <path id="Path_35" data-name="Path 35"
                                                d="M29.5,26.5A.5.5,0,0,1,29,26V24.5a.5.5,0,1,1,1,0V26A.5.5,0,0,1,29.5,26.5Z"
                                                transform="translate(-14.5 -12)" fill="#f28705" />
                                            <path id="Path_36" data-name="Path 36"
                                                d="M29.5,19H.5a.5.5,0,0,1-.5-.5V2A2,2,0,0,1,2,0H28a2,2,0,0,1,2,2V18.5A.5.5,0,0,1,29.5,19ZM1,18H29V2a1,1,0,0,0-1-1H2A1,1,0,0,0,1,2Z"
                                                transform="translate(0 0)" fill="#f28705" />
                                            <path id="Path_37" data-name="Path 37"
                                                d="M28,41H2a2,2,0,0,1-2-2V36.5A.5.5,0,0,1,.5,36h29a.5.5,0,0,1,.5.5V39A2,2,0,0,1,28,41Z"
                                                transform="translate(0 -18)" fill="#f28705" />
                                            <path id="Path_38" data-name="Path 38"
                                                d="M29.5,41h-3a.5.5,0,0,1,0-1h3a.5.5,0,1,1,0,1Z"
                                                transform="translate(-13 -20)" fill="#f28705" />
                                            <path id="Path_39" data-name="Path 39"
                                                d="M29.5,21H4.5a.5.5,0,0,1-.5-.5V4.5A.5.5,0,0,1,4.5,4h25a.5.5,0,0,1,.5.5v16A.5.5,0,0,1,29.5,21ZM5,20H29V5H5Z"
                                                transform="translate(-2 -2)" fill="#f28705" />
                                            <path id="Path_40" data-name="Path 40"
                                                d="M28.5,55h-13a1.5,1.5,0,0,1,0-3h13a1.5,1.5,0,1,1,0,3Z"
                                                transform="translate(-7 -26)" fill="#f28705" />
                                            <path id="Path_41" data-name="Path 41"
                                                d="M18,48.5a.5.5,0,0,1,.5-.5c1.659,0,2.5-1.177,2.5-3.5a.5.5,0,0,1,.5-.5h5a.5.5,0,0,1,.5.5c0,2.323.841,3.5,2.5,3.5a.5.5,0,0,1,.5.5C30,48.776,18,48.776,18,48.5Zm2.935-.5h6.13a4.785,4.785,0,0,1-1.051-3H21.986A4.787,4.787,0,0,1,20.935,48Z"
                                                transform="translate(-9 -22)" fill="#f28705" />
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <span class="title">
                            <?php echo __('site.courses'); ?>

                        </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo route('student.notifications'); ?>" class="<?php if(str_contains(url()->current(), 'notifications')): ?> active <?php endif; ?>">
                        <span class="icon">
                            <img src="<?php echo asset('site/img/bell-48.png'); ?>">
                        </span>
                        <span class="title">
                            <?php echo __('site.notifications'); ?>

                        </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo route('student.update.account'); ?>" class="<?php if(str_contains(url()->current(), 'update-account')): ?> active <?php endif; ?>">
                        <span class="icon">
                            <img src="<?php echo asset('site/img/profile.png'); ?>">
                        </span>
                        <span class="title">
                            <?php echo __('site.update_account'); ?>

                        </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo route('student.logout'); ?>">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30.001"
                                viewBox="0 0 30 30.001">
                                <defs>
                                    <style>
                                        .a {
                                            fill: #f28705;
                                        }
                                    </style>
                                </defs>
                                <path class="a"
                                    d="M21.653,22.97v2.344A4.693,4.693,0,0,1,16.966,30H5.188A4.693,4.693,0,0,1,.5,25.314V4.688A4.693,4.693,0,0,1,5.188,0H16.966a4.693,4.693,0,0,1,4.688,4.688V7.032a1.172,1.172,0,1,1-2.344,0V4.688a2.347,2.347,0,0,0-2.344-2.344H5.188A2.347,2.347,0,0,0,2.844,4.688V25.314a2.347,2.347,0,0,0,2.344,2.344H16.966a2.347,2.347,0,0,0,2.344-2.344V22.97a1.172,1.172,0,1,1,2.344,0Zm7.99-9.982-2.624-2.624a1.172,1.172,0,0,0-1.657,1.657l1.867,1.867H13.157a1.172,1.172,0,1,0,0,2.344H27.228L25.362,18.1a1.172,1.172,0,1,0,1.657,1.657l2.624-2.624a2.933,2.933,0,0,0,0-4.143Zm0,0"
                                    transform="translate(-0.5)" />
                            </svg></span>
                        <span class="title">
                            <?php echo __('site.logout'); ?>

                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\bakka\resources\views/student/includes/sidebar.blade.php ENDPATH**/ ?>