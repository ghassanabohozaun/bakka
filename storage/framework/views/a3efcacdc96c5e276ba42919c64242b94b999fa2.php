<div class="tab-pane  fade " id="service_details_ar" role="tabpanel" aria-labelledby="details_ar_tab">
    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
        <div class="col-xl-12 col-xxl-10">

            <div class="row justify-content-center">
                <div class="col-xl-9">

                    <!--begin::body-->
                    <div class="my-5">

                        <!--begin::Group-->
                        <div class="form-group">
                            <label>
                                <?php echo e(__('services.title_ar')); ?>

                            </label>
                            <input type="text" class="form-control form-control-solid form-control-lg"
                                name="title_ar" id="title_ar" placeholder="<?php echo e(__('services.enter_title_ar')); ?>"
                                autocomplete="off" value="<?php echo $service->title_ar; ?>">
                            <span class="form-text text-danger" id="title_ar_error"></span>
                        </div>
                        <!--end::Group-->

                        <!--begin::Group-->
                        <div class="form-group">
                            <label>
                                <?php echo e(__('services.summary_ar')); ?>

                            </label>
                            <input type="text" class="form-control form-control-solid form-control-lg"
                                name="summary_ar" id="summary_ar" placeholder="<?php echo e(__('services.enter_summary_ar')); ?>"
                                autocomplete="off" value="<?php echo $service->summary_ar; ?>">
                            <span class="form-text text-danger" id="summary_ar_error"></span>
                        </div>
                        <!--end::Group-->

                        <!--begin::Group-->
                        <div class="form-group">
                            <label> <?php echo e(__('services.details_ar')); ?></label>
                            <textarea class="form-control summernote" name="details_ar" id="details_ar"><?php echo $service->details_ar; ?></textarea>
                            <span class="form-text text-danger" id="details_ar_error"></span>
                        </div>
                        <!--end::Group-->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/services/update_tabs/details_ar.blade.php ENDPATH**/ ?>