<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form class="form" action="<?php echo e(route('admin.testimonial.store')); ?>" method="POST" id="form_testimonials_add">
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
                            <a href="<?php echo e(route('admin.testimonials')); ?>" class="text-muted">
                                <?php echo e(__('menu.testimonials')); ?>

                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                <?php echo e(__('menu.add_new_testimonial')); ?>

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
                                                    <div class="form-group row d-none">
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-lg"
                                                            name='site_lang_ar' id='site_lang_ar'
                                                            value='<?php echo setting()->site_lang_ar; ?>'>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.photo')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="image-input image-input-outline"
                                                                id="kt_testimonial_photo">

                                                                <!--  style="background-image: url()"-->
                                                                <div class="image-input-wrapper"></div>
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
                                                            <span class="form-text text-danger" id="photo_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.name_ar')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="name_ar" id="name_ar" type="text"
                                                                placeholder=" <?php echo e(__('testimonials.enter_name_ar')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger" id="name_ar_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.name_en')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="name_en" id="name_en" type="text"
                                                                placeholder=" <?php echo e(__('testimonials.enter_name_en')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger" id="name_en_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.age')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="age" id="age" type="text"
                                                                placeholder=" <?php echo e(__('testimonials.enter_age')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger" id="age_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.gender')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">

                                                            <select class="form-control form-control-solid form-control-lg"
                                                                name="gender" id="gender" type="text">
                                                                <option value="">
                                                                    <?php echo e(__('general.select_from_list')); ?>

                                                                </option>
                                                                <option value="male">
                                                                    <?php echo e(__('testimonials.male')); ?>

                                                                </option>
                                                                <option value="female">
                                                                    <?php echo e(__('testimonials.female')); ?>

                                                                </option>
                                                            </select>
                                                            <span class="form-text text-danger" id="gender_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.country')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">

                                                            <select class="form-control form-control-solid form-control-lg"
                                                                name="country" id="country" type="text">
                                                                <option value=""><?php echo __('general.select_from_list'); ?></option>
                                                                <?php $__currentLoopData = \App\Models\Country::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($country->id); ?>">
                                                                        <?php echo $country->{'name_' . Lang()}; ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <span class="form-text text-danger" id="country_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->

                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.job_title_ar')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="job_title_ar" id="job_title_ar" type="text"
                                                                placeholder=" <?php echo e(__('testimonials.enter_job_title_ar')); ?>"
                                                                autocomplete="off" />

                                                            <span class="form-text text-danger"
                                                                id="job_title_ar_error"></span>

                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.job_title_en')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-solid form-control-lg"
                                                                name="job_title_en" id="job_title_en" type="text"
                                                                placeholder=" <?php echo e(__('testimonials.enter_job_title_en')); ?>"
                                                                autocomplete="off" />
                                                            <span class="form-text text-danger"
                                                                id="job_title_en_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.rating')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">

                                                            <select class="form-control form-control-solid form-control-lg"
                                                                name="rating" id="rating" type="text">

                                                                <option value="">
                                                                    <?php echo e(__('general.select_from_list')); ?>

                                                                </option>

                                                                <option value="1">
                                                                    <?php echo e(__('testimonials.one_star')); ?>

                                                                </option>

                                                                <option value="2">
                                                                    <?php echo e(__('testimonials.two_star')); ?>

                                                                </option>
                                                                <option value="3">
                                                                    <?php echo e(__('testimonials.three_star')); ?>

                                                                </option>
                                                                <option value="4">
                                                                    <?php echo e(__('testimonials.four_star')); ?>

                                                                </option>
                                                                <option value="5">
                                                                    <?php echo e(__('testimonials.five_star')); ?>

                                                                </option>

                                                            </select>
                                                            <span class="form-text text-danger" id="rating_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.opinion_ar')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <textarea rows="10" class="form-control form-control-solid form-control-lg" name="opinion_ar" id="opinion_ar"
                                                                type="text" placeholder=" <?php echo e(__('testimonials.enter_opinion_ar')); ?>" autocomplete="off"></textarea>
                                                            <span class="form-text text-danger"
                                                                id="opinion_ar_error"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Group-->


                                                    <!--begin::Group-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <?php echo e(__('testimonials.opinion_en')); ?>

                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <textarea rows="10" class="form-control form-control-solid form-control-lg" name="opinion_en" id="opinion_en"
                                                                type="text" placeholder=" <?php echo e(__('testimonials.enter_opinion_en')); ?>" autocomplete="off"></textarea>
                                                            <span class="form-text text-danger"
                                                                id="opinion_en_error"></span>
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
        ////////////////////////////////////////////////////
        var testimonial_photo = new KTImageInput('kt_testimonial_photo');

        $('#form_testimonials_add').on('submit', function(e) {
            e.preventDefault();
            //////////////////////////////////////////////////////////////
            $('#title_ar').css('border-color', '');
            $('#photo').css('border-color', '');
            $('#language').css('border-color', '');
            $('#opinion_ar').css('border-color', '');
            $('#opinion_en').css('border-color', '');
            $('#name_ar').css('border-color', '');
            $('#name_en').css('border-color', '');
            $('#age').css('border-color', '');
            $('#country').css('border-color', '');
            $('#gender').css('border-color', '');
            $('#job_title_ar').css('border-color', '');
            $('#job_title_en').css('border-color', '');
            $('#rating').css('border-color', '');


            $('#photo_error').text('');
            $('#language_error').text('');
            $('#opinion_ar_error').text('');
            $('#opinion_en_error').text('');
            $('#name_ar_error').text('');
            $('#name_en_error').text('');
            $('#age_error').text('');
            $('#country_error').text('');
            $('#gender_error').text('');
            $('#job_title_ar_error').text('');
            $('#job_title_en_error').text('');
            $('#rating_error').text('');
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
                                confirmButton: 'add_testimonials_button'
                            }
                        });
                        $('.add_testimonials_button').click(function() {
                            window.location.href = "<?php echo e(route('admin.testimonials')); ?>";
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/testimonials/create.blade.php ENDPATH**/ ?>