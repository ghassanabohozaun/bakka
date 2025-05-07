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
    <link rel="stylesheet" type="text/css" href="<?php echo asset('site/css/fancybox/jquery.fancybox.min.css'); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="sub-header">
        <div class=" container text-center content-header">
            <h2 class="mb-3"> <?php echo $title; ?></h2>
            <p class="text-center fs-16-i"> </p>
        </div>
        <div class="back-sub-header">
            <img src="<?php echo asset('site/img/Success-Stories.png'); ?>" alt="">
        </div>
    </section>



    <section id="photo_albums_section">
        <div class=" container my-5">
            <div class=" mt-5 mb-2 fs-24"><span class="text-bold text-warning">&nbsp;</span>
            </div>
            <p class="mb-5 "> </p>


            <!-- begin : albums ------------------------------------------>
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

                <!-- end : albums ------------------------------------------>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo asset('site/js/fancybox/jquery.fancybox.min.js'); ?>"></script>

    <script type="text/javascript">
        $('.content-item a').fancybox({
            caption: function(instance, item) {
                return $(this).parent().find('.card-text').html();
            }
        });

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: '/<?php echo Lang(); ?>/photo-albums-paging/' +
                    '?page=' + page,
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