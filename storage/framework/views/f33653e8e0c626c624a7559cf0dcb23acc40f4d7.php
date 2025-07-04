<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form" action="<?php echo e(route('admin.sliders.update')); ?>" method="POST" id="form_sliders_update">
        <?php echo csrf_field(); ?>
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">

                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">
                                <?php echo e(__('menu.landing_page')); ?>

                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.sliders')); ?>" class="text-muted">
                                <?php echo e(__('menu.sliders')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.sliders.edit', $slider->id)); ?>" class="text-muted">
                                <?php echo e(__('sliders.slider_update')); ?>

                            </a>
                        </li>
                    </ul>

                    <!--end::Actions-->
                </div>
                <!--end::Info-->

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">

                    <button type="submit" class="btn btn-primary btn-sm font-weight-bold font-size-base  mr-1">
                        <i class="fa fa-save"></i>
                        <?php echo e(__('general.save')); ?>

                    </button>

                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->


        <!--begin::content-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container-fluid ">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0" id="card_languages_add">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">

                                        <div class="row justify-content-center">
                                            <div class="col-xl-9">

                                                <!--begin::body-->
                                                <div class="my-5">

                                                    <!--begin::Group-->
                                                    <div class="d-none form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            ID
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input type="hidden" value="<?php echo e($slider->id); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="id" id="id" autocomplete="off" />
                                                            <input type="hidden"
                                                                class="form-control form-control-solid form-control-lg"
                                                                id='site_lang_en' name="site_lang_en"
                                                                value="<?php echo setting()->site_lang_en; ?>">

                                                            <input type="hidden"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="hidden_photo" value="hidden_photo">
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.photo')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="image-input image-input-outline"
                                                                id="kt_slider_photo">
                                                                <!--  style="background-image: url()"-->
                                                                <div class="image-input-wrapper"
                                                                    style="background-image: url(<?php echo e(asset('adminBoard/uploadedImages/sliders/' . $slider->photo)); ?>">

                                                                </div>
                                                                <label
                                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                                    data-action="change" data-toggle="tooltip"
                                                                    title=""
                                                                    data-original-title="<?php echo e(__('general.change_image')); ?>">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="photo" id="photo"
                                                                        class="table-responsive-sm">
                                                                    <input type="hidden" name="photo_remove" />
                                                                </label>

                                                                <span
                                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                                    data-action="cancel" data-toggle="tooltip"
                                                                    title="Cancel avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                            <span
                                                                class="form-text text-muted"><?php echo e(__('general.image_format_allow')); ?>

                                                            </span>
                                                            <span
                                                                class="form-text text-info"><?php echo e(__('sliders.slider_size')); ?>

                                                            </span>
                                                            <span class="form-text text-danger" id="photo_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.details_status')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-md-9" style="margin-top: 10px">
                                                            <div class="form-check pl-0 radio-inline">
                                                                <label class="radio radio-outline">
                                                                    <input type="radio" id="details_status"
                                                                        name="details_status"
                                                                        <?php echo e($slider->details_status == __('sliders.show') ? 'checked' : ''); ?>

                                                                        value="show" />
                                                                    <span></span>
                                                                    <?php echo e(__('sliders.show')); ?>

                                                                </label>
                                                                <label class="radio radio-outline">
                                                                    <input type="radio" id="details_status"
                                                                        name="details_status"
                                                                        <?php echo e($slider->details_status == __('sliders.hide') ? 'checked' : ''); ?>

                                                                        value="hide" />
                                                                    <span></span>
                                                                    <?php echo e(__('sliders.hide')); ?>

                                                                </label>

                                                            </div>
                                                        </div>
                                                        <!--begin::body-->

                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.button_status')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-md-9" style="margin-top: 10px">
                                                            <div class="form-check pl-0 radio-inline">
                                                                <label class="radio radio-outline">
                                                                    <input type="radio" id="button_status"
                                                                        name="button_status"
                                                                        <?php echo e($slider->button_status == __('sliders.show') ? 'checked' : ''); ?>

                                                                        value="show" />
                                                                    <span></span>
                                                                    <?php echo e(__('sliders.show')); ?>

                                                                </label>
                                                                <label class="radio radio-outline">
                                                                    <input type="radio" id="button_status"
                                                                        name="button_status"
                                                                        <?php echo e($slider->button_status == __('sliders.hide') ? 'checked' : ''); ?>

                                                                        value="hide" />
                                                                    <span></span>
                                                                    <?php echo e(__('sliders.hide')); ?>

                                                                </label>

                                                            </div>
                                                        </div>
                                                        <!--begin::body-->

                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.order')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo e($slider->order); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="order" id="order" type="text"
                                                                placeholder=" <?php echo e(__('sliders.enter_order')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-muted">
                                                                <?php echo e(__('sliders.exist_number')); ?>

                                                                &nbsp;
                                                                <?php echo e(App\Models\Slider::select('order')->orderBy('order', 'desc')->pluck('order')); ?>

                                                            </span>
                                                            <span class="form-text text-danger" id="order_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.title_ar')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo e($slider->title_ar); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="title_ar" id="title_ar" type="text"
                                                                placeholder=" <?php echo e(__('sliders.enter_title_ar')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger"
                                                                id="title_ar_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.title_en')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo e($slider->title_en); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="title_en" id="title_en" type="text"
                                                                placeholder=" <?php echo e(__('sliders.enter_title_en')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger"
                                                                id="title_en_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.details_ar')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <textarea rows="5" class="form-control form-control-solid form-control-lg" name="details_ar" id="details_ar"
                                                                type="text" placeholder=" <?php echo e(__('sliders.enter_details_ar')); ?>" autocomplete="off"><?php echo e($slider->details_ar); ?></textarea>

                                                            <span class="form-text text-danger"
                                                                id="details_ar_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.details_en')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <textarea rows="5" class="form-control form-control-solid form-control-lg" name="details_en" id="details_en"
                                                                type="text" placeholder=" <?php echo e(__('sliders.enter_details_en')); ?>" autocomplete="off"><?php echo e($slider->details_en); ?></textarea>

                                                            <span class="form-text text-danger"
                                                                id="details_en_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.url_ar')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo e($slider->url_ar); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="url_ar" id="url_ar" type="text"
                                                                placeholder=" <?php echo e(__('sliders.enter_url_ar')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger" id="url_ar_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('sliders.url_en')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input value="<?php echo e($slider->url_en); ?>"
                                                                class="form-control form-control-solid form-control-lg"
                                                                name="url_en" id="url_en" type="text"
                                                                placeholder=" <?php echo e(__('sliders.enter_url_en')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger" id="url_en_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->
                                                </div>
                                                <!--begin::body-->

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>

            </div>
        </div>
        <!--end::content-->

    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        var slider_photo = new KTImageInput('kt_slider_photo');

        ///-------------------------------------------------------------------////

        $('#form_sliders_update').on('submit', function(e) {
            e.preventDefault();
            //////////////////////////////////////////////////////////////

            $('#title_ar').css('border-color', '');
            $('#title_en').css('border-color', '');
            $('#details_ar').css('border-color', '');
            $('#details_en').css('border-color', '');
            //$('#order').css('border-color', '');


            $('#title_ar_error').text('');
            $('#title_en_error').text('');
            $('#details_ar_error').text('');
            $('#details_en_error').text('');
            //$('#order_error').text('');
            /////////////////////////////////////////////////////////////
            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = $(this).attr('action');

            $.ajax({
                url: url,
                data: data,
                type: type,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    KTApp.blockPage({
                        overlayColor: '#000000',
                        state: 'danger',
                        message: "<?php echo e(__('general.please_wait')); ?>",
                    });
                }, //end beforeSend

                success: function(data) {
                    KTApp.unblockPage();
                    if (data.status == true) {
                        Swal.fire({
                            title: data.msg,
                            text: "",
                            icon: "success",
                            allowOutsideClick: false,
                            customClass: {
                                confirmButton: 'update_user_button'
                            }
                        });
                        $('.update_user_button').click(function() {
                            window.location.href = "<?php echo e(route('admin.sliders')); ?>";
                        });
                    }
                }, //end success

                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key + '_error').text(value[0]);
                        $('#' + key).css('border-color', '#F64E60');
                        $('html, body').animate({
                            scrollTop: 20
                        }, 300);

                    });

                }, //end error

                complete: function() {
                    KTApp.unblockPage();
                }, //end complete

            });

        }); //end submit
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/landing-page/sliders/update.blade.php ENDPATH**/ ?>