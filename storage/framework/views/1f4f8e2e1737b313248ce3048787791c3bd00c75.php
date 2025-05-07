<div class="row justify-content-center" uk-lightbox>
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-4  mb-2">
            <div class="item-course">
                <div class="video-with-icon">
                    <div class="uk-background-cover uk-height-medium uk-panel  uk-flex uk-flex-center uk-flex-middle br-5"
                        <?php if($video->photo): ?> style="background-image: url(<?php echo asset('adminBoard/uploadedImages/videos/' . $video->photo); ?>);
                            height: 220px;"
                        <?php else: ?>
                        style="background-image: url('https://img.youtube.com/vi/WKYGTgsX2Wg/mqdefault.jpg ');
                            height: 220px;" <?php endif; ?>>


                        <p class="uk-h4">
                            <a href="https://www.youtube.com/watch?v=<?php echo $video->link; ?>" class="my_video_count"
                                data-id="<?php echo e($video->id); ?>">
                                <i class="fas fs-28 text-white fa-play-circle"></i>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="content-item">
                    <div class="row justify-content-between align-items-center mb-3">
                        <div class=" col-auto date-item fs-14 text-bold text-dark">
                            <a href="https://www.youtube.com/watch?v=<?php echo $video->link; ?>"
                                class="text-dark my_video_count" data-id="<?php echo e($video->id); ?>">
                                <?php echo $video->{'title_' . Lang()}; ?>

                            </a>
                        </div>
                        <div class="col-auto">
                            <span class=" fs-14 "><?php echo $video->duration; ?> <?php echo trans('site.minutes'); ?></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-1">
                        <div class="img-views">
                            <img src="" width="30" class="rounded-circle" alt="">
                        </div>
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
                <?php echo e($videos->links('vendor.pagination.bootstrap-4')); ?>

            </div>
        </div>
    </div>
</section>


<?php $__env->startPush('js'); ?>
    <script type="text/javascript"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/videos-paging.blade.php ENDPATH**/ ?>