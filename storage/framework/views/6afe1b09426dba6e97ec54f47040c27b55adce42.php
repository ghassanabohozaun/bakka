<!doctype html>
<html <?php if(Lang() == 'ar'): ?> lang="ar" dir="rtl" <?php else: ?> lang="en" dir="ltr" <?php endif; ?>
    xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->yieldContent('metaTags'); ?>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="icon" type="image/jpg" href="<?php echo asset('adminBoard/uploadedImages/logos/' . setting()->site_icon); ?>">
    <link rel="shortcut icon" href="<?php echo asset('adminBoard/uploadedImages/logos/' . setting()->site_icon); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo asset('adminBoard/uploadedImages/logos/' . setting()->site_icon); ?>">
    <?php if(Lang() == 'ar'): ?>
        <link href="<?php echo asset('site/css/style-ar.css'); ?>" rel="stylesheet">
    <?php else: ?>
        <link href="<?php echo asset('site/css/style-en.css'); ?>" rel="stylesheet">
    <?php endif; ?>
    <link href="<?php echo asset('site/css/pagination.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('site/css/bootstrap-datepicker.min.css'); ?>" />
    <link href="<?php echo asset('site/css/my-style.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('site/player/css/audioplayer.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('site/css/my-sweet-alert-style.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('site/css/testimonials.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('site/css/faqs.css'); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>

</head>

<body>
    <?php echo $__env->make('site.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('site.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo asset('site/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/slick.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/aos.js'); ?>"></script>
    <script src="<?php echo asset('site/js/uikit.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/jquery.countTo.js'); ?>"></script>
    <script src="<?php echo asset('site/js/js.js'); ?>"></script>
    <script src="<?php echo asset('site/js/sweetalert2@11.js'); ?>"></script>
    <script src="<?php echo asset('site/js/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/testimonials.js'); ?>"></script>
    <script src="<?php echo asset('site/js/faqs.js'); ?>"></script>


    <?php echo $__env->yieldPushContent('js'); ?>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</body>

</html>
<?php /**PATH C:\laragon\www\bakka\resources\views/layouts/site.blade.php ENDPATH**/ ?>