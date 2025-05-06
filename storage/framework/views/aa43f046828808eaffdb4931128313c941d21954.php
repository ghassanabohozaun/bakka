<div class="row justify-content-center">
    <?php $__currentLoopData = $photoAlbums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6  mb-4">
            <div class="">
                <div class="video-with-icon">
                    <div class="uk-background-cover uk-height-medium uk-panel  uk-flex uk-flex-center uk-flex-middle br-5"
                        <?php if($album->main_photo): ?> style="background-image: url(<?php echo asset('adminBoard/uploadedImages/albums/' . $album->main_photo); ?>);
                            height: 220px;"
                        <?php else: ?>
                        style="background-image: url(<?php echo asset('site/images/noRecordFound.svg'); ?>);
                            height: 220px;" <?php endif; ?>>


                        
                    </div>
                </div>

                <div class="content-item">
                    <div class=" justify-content-between align-items-center mb-3">
                        <div class=" col-auto date-item fs-14 text-bold text-dark">
                            <a href="#" class="text-dark my_video_count" data-id="<?php echo e($album->id); ?>">
                                <?php echo $album->{'title_' . Lang()}; ?>

                            </a>
                        </div>
                        <div class="col-auto">
                            <span class=" fs-14 "></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-1">

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="pagination_section">
                <?php echo e($photoAlbums->links('vendor.pagination.bootstrap-4')); ?>

            </div>
        </div>
    </div>
</section>


<?php $__env->startPush('js'); ?>
    <script type="text/javascript"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/photo-albums-paging.blade.php ENDPATH**/ ?>