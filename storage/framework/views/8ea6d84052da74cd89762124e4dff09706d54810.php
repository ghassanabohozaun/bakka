<?php $__env->startSection('title'); ?>
    <?php echo $title; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('metaTags'); ?>
    <meta name="description" content="<?php echo Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en; ?>">
    <meta name="keywords" content="<?php echo Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en; ?>">
    <meta name="application-name" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
    <meta name="author" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="sub-header">
        <div class=" container text-center content-header">
            <h2 class="mb-3"><?php echo $title; ?></h2>
            <p class="text-center fs-16-i">
            </p>
        </div>
        <div class="back-sub-header"><img src="<?php echo asset('site/img/Courses.jpg'); ?>" alt=""></div>
    </section>

    <section class=" content-section py-5 px-4 px-md-0 my-5 pb-6">
        <div class=" container">
            <div class=" mt-5 mb-2 fs-24"><span class="text-bold text-warning">&nbsp;</span>
            </div>
            <p class="mb-5 ">
                <!---courses description --->
            </p>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="col-lg-11 px-md-0">
                        <?php if($courses->isEmpty()): ?>
                            <img src="<?php echo asset('site/images/noRecordFound.svg'); ?>" class="img-fluid" id="no_data_img"
                                title="<?php echo __('site.no_date'); ?>">
                        <?php else: ?>
                            <div id="courses_data">
                                <?php echo $__env->make('site.courses-paging', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                url: '/<?php echo Lang(); ?>/courses-paging/' + '?page=' + page,
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

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/site/courses.blade.php ENDPATH**/ ?>