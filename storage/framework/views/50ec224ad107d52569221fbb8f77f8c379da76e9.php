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
            class=" with-screen-titel row justify-content-between align-items-center p-2 br-10 bg-light mx-0 mb-3 mt-3 mt-md-0">
            <div class="col-auto title-with-icon d-flex align-items-center px-1">
                <span class="mr-2">
                    <img src="<?php echo asset('site/img/bell-48.png'); ?>" width="25">
                </span>
                <span class="fs-14 text-bold"><?php echo $title; ?></span>
            </div>
        </div>


        <?php if($notifications->isEmpty()): ?>
            <img src="<?php echo asset('site/images/noRecordFound.svg'); ?>" class="img-fluid" id="no_data_img" title="<?php echo __('site.no_notifications'); ?>">
        <?php else: ?>
            <div class="student_notifications_table">
                <?php echo $__env->make('student.notifications-paging', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        function fetch_data(page) {
            $.ajax({
                url: "/<?php echo Lang(); ?>/student/notifications/paging?page=" + page,
                success: function(data) {
                    console.log(data);
                    //$('#programs_data').html(data);
                    /*$('html, body').animate({
                        scrollTop: $("#programs_section").offset().top
                    }, 1000);*/
                }
            });
        }

        $('body').on('click', '.read_student_notification', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo route('student.notifications.read'); ?>",
                type: "post",
                data: {
                    id,
                    id
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    $('#student_notifications_section').load("<?php echo route('student.get.header.notificatoins'); ?>");
                    $(".notification-table").load(location.href + " .notification-table");
                }
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/student/notifications.blade.php ENDPATH**/ ?>