<a href="<?php echo e(route('admin.services.edit', $service->id)); ?>" class="btn btn-hover-primary btn-icon btn-pill "
    title="<?php echo e(__('general.edit')); ?>">
    <i class="fa fa-edit fa-1x"></i>
</a>

<a href="#" class="btn btn-hover-danger btn-icon btn-pill delete_service_btn" data-id="<?php echo e($service->id); ?>"
    title="<?php echo e(__('general.delete')); ?>">
    <i class="fa fa-trash fa-1x"></i>
</a>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/services/parts/options.blade.php ENDPATH**/ ?>