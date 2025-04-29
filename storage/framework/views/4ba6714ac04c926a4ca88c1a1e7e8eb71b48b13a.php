<div id="kt_header" class="header header-fixed ">
    <!--begin::Container-->
    <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default ">
                <ul class="menu-nav ">
                    <li
                        class="menu-item  menu-item-open menu-item-here
                     menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active">
                        <a href="<?php echo route('index'); ?>" class="menu-link ">
                            <span class="menu-text"><?php echo e(__('dashboard.website')); ?></span><i class="menu-arrow"></i></a>
                    </li>

                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->

        <!--begin::Topbar-->
        <div class="topbar">




            <!--begin::Languages-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <img class="h-20px w-20px rounded-sm"
                            <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> src="<?php echo e(asset('adminBoard/assets/media/svg/flags/العربية.svg')); ?>"
                             <?php else: ?>
                                 src="<?php echo e(asset('adminBoard/assets/media/svg/flags/English.svg')); ?>" <?php endif; ?>
                            alt="" />
                    </div>
                </div>
                <!--end::Toggle-->

                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
                        <!--end::Item-->
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="navi-item">
                                <a class="navi-link" rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                    href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <span class="symbol symbol-20 mr-3">
                                        <img src="<?php echo e(asset('adminBoard/assets/media/svg/flags/' . $properties['native'] . '.svg')); ?>"
                                            alt="" />
                                    </span>
                                    <span class="navi-text"> <?php echo e($properties['native']); ?></span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Languages-->

            <!--begin::User  -->
            <div class="topbar-item ">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2 admin_topbar_item"
                    id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1"></span>
                    <span
                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?php echo e(admin()->user()->name); ?></span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <?php if(!empty(admin()->user()->photo)): ?>
                            <img src="<?php echo e(asset('adminBoard/uploadedImages/admin/' . admin()->user()->photo)); ?>" />
                        <?php else: ?>
                            <img src="<?php echo e(asset('adminBoard/images/user.jpg')); ?>">
                        <?php endif; ?>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/includes/header.blade.php ENDPATH**/ ?>