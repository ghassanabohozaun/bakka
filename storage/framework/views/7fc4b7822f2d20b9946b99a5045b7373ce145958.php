<div class="tab-pane fade" id="article_details_en" role="tabpanel" aria-labelledby="article_details_en_tab">
    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
        <div class="col-xl-12 col-xxl-10">

            <div class="row justify-content-center">
                <div class="col-xl-9">

                    <!--begin::body-->
                    <div class="my-5">

                        <!--begin::Group-->
                        <div class="form-group">
                            <label>
                                <?php echo e(__('articles.title_en')); ?>

                            </label>
                            <input type="text" class="form-control form-control-solid form-control-lg"
                                name="title_en" id="title_en" value="<?php echo e($article->title_en); ?>"
                                placeholder="<?php echo e(__('articles.enter_title_en')); ?>" autocomplete="off" readonly>
                            <span class="form-text text-danger" id="title_en_error"></span>

                        </div>
                        <!--end::Group-->

                        <!--begin::Group-->
                        <div class="form-group">
                            <label> <?php echo e(__('articles.abstract_en')); ?></label>
                            <textarea class="form-control form-control-solid form-control-lg summernote"
                                placeholder="<?php echo e(__('articles.enter_abstract_en')); ?>" name="abstract_en" id="abstract_en"><?php echo e($article->abstract_en); ?></textarea>
                            <span class="form-text text-danger" id="abstract_en_error"></span>
                        </div>
                        <!--end::Group-->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/articles/update_tabs/details_en.blade.php ENDPATH**/ ?>