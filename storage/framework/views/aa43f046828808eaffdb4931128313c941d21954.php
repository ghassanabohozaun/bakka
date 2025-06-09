<div class="row justify-content-center ">

    <?php $__currentLoopData = $photoAlbums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photoAlbum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-4  mb-2">
            <a href="<?php echo asset('adminBoard/uploadedImages/albums/' . $photoAlbum->main_photo); ?>" data-fancybox="images-preview-<?php echo $photoAlbum->id; ?>" data-width="1500"
                data-height="1000" data-thumbs='{"autoStart":true}'>

                <div class="card item-course">

                    <?php if($photoAlbum->main_photo): ?>
                        <img class="card-img-top" src="<?php echo asset('adminBoard/uploadedImages/albums/' . $photoAlbum->main_photo); ?>" alt="<?php echo $photoAlbum->{'title_' . Lang()}; ?>">
                    <?php else: ?>
                        <img class="card-img-top" src="<?php echo asset('site/images/no_photo_albums.jpg'); ?>" alt="<?php echo $photoAlbum->{'title_' . Lang()}; ?>">
                    <?php endif; ?>


                    <div class="card-body content-item">
                        <p class="card-text col-auto date-item fs-14 text-bold text-dark pt-3 pb-2">
                            <?php echo $photoAlbum->{'title_' . Lang()}; ?>

                        </p>
                    </div>
                </div>
            </a>

            <div style="display: none;">
                <?php if(\App\UploadFile::where('relation_id', $photoAlbum->id)->count() > 0): ?>
                    <?php $__currentLoopData = \App\UploadFile::get()->where('relation_id', $photoAlbum->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo asset('adminBoard/uploadedImages/albums/' . $file->full_path_after_upload); ?>" data-fancybox="images-preview-<?php echo $photoAlbum->id; ?>"
                            data-width="1500" data-height="1000" data-thumb="<?php echo asset('adminBoard/uploadedImages/albums/' . $file->full_path_after_upload); ?>"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
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
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/photo-albums-paging.blade.php ENDPATH**/ ?>