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



        <?php if($studentCourses->isEmpty()): ?>
            <h1 class="py-4  fs-30 justify-content-center">
                <img src="<?php echo asset('site/images/noRecordFound.svg'); ?>" class="img-fluid" id="no_data_img" title="<?php echo __('site.no_date'); ?>">
            </h1>
        <?php else: ?>
            <div id="courses_data">
                <?php echo $__env->make('student.courses-paging', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: '/<?php echo Lang(); ?>/student/courses-paging/' + '?page=' + page,
                success: function(data) {
                    $('#courses_data').html(data);
                    $('html, body').animate({
                        scrollTop: $("#courses_section").offset().top
                    }, 1000);
                }
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.student', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/student/courses.blade.php ENDPATH**/ ?>