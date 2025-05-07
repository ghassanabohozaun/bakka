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
            <h2 class="mb-3"><?php echo __('site.blog'); ?></h2>
            <p class="text-center fs-16-i"> </p>
        </div>
        <div class="back-sub-header"><img src="<?php echo asset('site/img/Programs.jpg'); ?>" alt=""></div>
    </section>


    <br /><br /><br /><br /><br /><br />
    <section class="content-section  mt-5 " id="articles_section">
        <div class=" container">

            <div class="row justify-content-center">
                <div class="col-lg-11 px-md-0">
                    <?php if($articles->isEmpty()): ?>
                        <img src="<?php echo asset('site/images/noRecordFound.svg'); ?>" class="img-fluid" id="no_data_img"
                            title="<?php echo trans('site.no_date'); ?>">
                    <?php else: ?>
                        <div id="articles_data">
                            <?php echo $__env->make('site.blog.articles-paging', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endif; ?>
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
                url: "/<?php echo Lang(); ?>/articles-paging?page=" + page,
                success: function(data) {
                    $('#articles_data').html(data);
                    $('html, body').animate({
                        scrollTop: $("#articles_section").offset().top
                    }, 1000);
                }
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/site/blog/articles.blade.php ENDPATH**/ ?>