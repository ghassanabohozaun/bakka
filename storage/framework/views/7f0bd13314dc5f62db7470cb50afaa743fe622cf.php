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
    <?php echo $__env->make('site.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="sub-header">
        <div class=" container text-center content-header">
            <h2 class="mb-3"> <?php echo $title; ?></h2>
            <p class="text-center fs-16-i"> </p>
        </div>
        <div class="back-sub-header">
            <img src="<?php echo asset('site/img/Success-Stories.png'); ?>" alt="">
        </div>
    </section>


    <br />
    </br /> </br /> </br /> </br /> </br />
    <section id="photo_albums_section">
        <div class=" container my-5">
            <div class="row">

                <!-- begin : Videos ------------------------------------------>
                <div class="row justify-content-center">
                    <div class="col-lg-12">

                        <?php if($photoAlbums->isEmpty()): ?>
                            <img src="<?php echo asset('site/images/noRecordFound.svg'); ?>" class="img-fluid" id="no_data_img"
                                title="<?php echo __('site.no_date'); ?>">
                        <?php else: ?>
                            <div id="photo_album_data">
                                <?php echo $__env->make('site.photo-albums-paging', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endif; ?>

                    </div>

                    <!-- end : Videos ------------------------------------------>

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
                url: '/<?php echo Lang(); ?>/photo-albums-paging/' + '?page=' + page,
                success: function(data) {
                    $('#photo_album_data').html(data);
                    $('html, body').animate({
                        scrollTop: $("#photo_albums_section").offset().top
                    }, 1000);
                }
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/site/photo-albums.blade.php ENDPATH**/ ?>