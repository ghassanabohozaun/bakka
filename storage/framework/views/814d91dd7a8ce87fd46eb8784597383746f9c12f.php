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

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/jpg" href="<?php echo asset('adminBoard/uploadedImages/logos/' . setting()->site_icon); ?>">
    <link rel="shortcut icon" href="<?php echo asset('adminBoard/uploadedImages/logos/' . setting()->site_icon); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo asset('adminBoard/uploadedImages/logos/' . setting()->site_icon); ?>">
    <meta name="application-name" content="" />
    <meta name="author" content="" />

    <link href="<?php echo asset('site/css/select2.min.css'); ?>" rel="stylesheet">
    <?php if(Lang() == 'ar'): ?>
        <link href="<?php echo asset('site/css/style-ar.css'); ?>" rel="stylesheet">
    <?php else: ?>
        <link href="<?php echo asset('site/css/style-en.css'); ?>" rel="stylesheet">
    <?php endif; ?>
    <link href="<?php echo asset('site/css/my-style.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('site/css/pagination.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('site/player/css/audioplayer.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('site/css/my-sweet-alert-style.css'); ?>" rel="stylesheet">

    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>

    <?php echo $__env->make('student.includes.orange-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-3 min_height_700">
        <div class=" container">
            <div class="row">
                <?php echo $__env->make('student.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </section>

    <?php echo $__env->make('student.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo asset('site/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/uikit.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/aos.js'); ?>"></script>
    <script src="<?php echo asset('site/js/slick.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/select2.min.js'); ?>"></script>
    <script src="<?php echo asset('site/js/js.js'); ?>"></script>
    <script src="<?php echo asset('site/js/sweetalert2@11.js'); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        var bar = document.getElementById('js-progressbar');

        UIkit.upload('.js-upload', {

            url: '/img',
            multiple: true,

            beforeSend: function() {
                console.log('beforeSend', arguments);
            },
            beforeAll: function() {
                console.log('beforeAll', arguments);
            },
            load: function() {
                console.log('load', arguments);
            },
            error: function() {
                console.log('error', arguments);
            },
            complete: function() {
                console.log('complete', arguments);
            },

            loadStart: function(e) {
                console.log('loadStart', arguments);

                bar.removeAttribute('hidden');
                bar.max = e.total;
                bar.value = e.loaded;
            },

            progress: function(e) {
                console.log('progress', arguments);

                bar.max = e.total;
                bar.value = e.loaded;
            },

            loadEnd: function(e) {
                console.log('loadEnd', arguments);

                bar.max = e.total;
                bar.value = e.loaded;
            },

            completeAll: function() {
                console.log('completeAll', arguments);

                setTimeout(function() {
                    bar.setAttribute('hidden', 'hidden');
                }, 1000);

                alert('Upload Completed');
            }

        });
    </script>

</body>

</html>
<?php /**PATH C:\laragon\www\bakka\resources\views/layouts/student.blade.php ENDPATH**/ ?>