<div class="tab-pane fade" id="article_details_ar" role="tabpanel" aria-labelledby="article_details_ar_tab">
    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
        <div class="col-xl-12 col-xxl-10">

            <div class="row justify-content-center">
                <div class="col-xl-9">

                    <!--begin::body-->
                    <div class="my-5">

                        <!--begin::Group-->
                        <div class="form-group">
                            <label>
                                <?php echo e(__('articles.title_ar')); ?>

                            </label>
                            <input type="text" class="form-control form-control-solid form-control-lg"
                                name="title_ar" id="title_ar" value="<?php echo e($article->title_ar); ?>"
                                placeholder="<?php echo e(__('articles.enter_title_ar')); ?>" autocomplete="off" readonly>
                            <span class="form-text text-danger" id="title_ar_error"></span>

                        </div>
                        <!--end::Group-->

                        <!--begin::Group-->
                        <div class="form-group">
                            <label> <?php echo e(__('articles.abstract_ar')); ?></label>
                            <textarea class="form-control form-control-solid form-control-lg summernote"
                                placeholder="<?php echo e(__('articles.enter_abstract_ar')); ?>" name="abstract_ar" id="abstract_ar"><?php echo e($article->abstract_ar); ?></textarea>
                            <span class="form-text text-danger" id="abstract_ar_error"></span>
                        </div>
                        <!--end::Group-->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/articles/update_tabs/details_ar.blade.php ENDPATH**/ ?>