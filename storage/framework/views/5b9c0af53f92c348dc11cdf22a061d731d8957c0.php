<a href="#" class="btn btn-hover-primary btn-icon btn-pill show_video_btn" data-id="<?php echo e($video->id); ?>"
    title="<?php echo e(__('general.show')); ?>">
    <i class="fa fa-video fa-1x"></i>
</a>


<a href="#" class="btn btn-hover-primary btn-icon btn-pill copy_video_link" data-id="<?php echo e($video->id); ?>"
    title="<?php echo e(__('general.copy')); ?>">
    <i class="fa fa-copy fa-1x"></i>
</a>


<a href="<?php echo e(route('admin.videos.edit', $video->id)); ?>" class="btn btn-hover-primary btn-icon btn-pill "
    title="<?php echo e(__('general.edit')); ?>">
    <i class="fa fa-edit fa-1x"></i>
</a>

<a href="#" class="btn btn-hover-danger btn-icon btn-pill delete_video_btn" data-id="<?php echo e($video->id); ?>"
    title="<?php echo e(__('general.delete')); ?>">
    <i class="fa fa-trash fa-1x"></i>
</a>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/videos/parts/options.blade.php ENDPATH**/ ?>