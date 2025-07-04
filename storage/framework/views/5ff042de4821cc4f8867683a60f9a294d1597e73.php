<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form" action="<?php echo e(route('admin.articles.update')); ?>" method="POST" id="form_article_update"
        enctype="multipart/form-data">
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
                            <a href="<?php echo e(route('admin.articles')); ?>" class="text-muted">
                                <?php echo e(__('menu.articles')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                <?php echo e(__('articles.update_article')); ?>

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
                        <div class="card card-custom" id="card_languages">
                            <div class="card-body">

                                <div class="row justify-content-center ">
                                    <div class="col-xl-12">
                                        <!--begin::body-->
                                        <div class="my-5">
                                            <div class="alert alert-danger alert_errors d-none" style="padding-top: 20px">
                                                <ul></ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <ul class="nav  nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="article_settings_tab" data-toggle="tab"
                                            href="#article_settings">
                                            <span class="nav-icon"><i class="flaticon2-settings"></i></span>
                                            <span class="nav-text"><?php echo e(__('articles.article_settings_tab')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="article_details_en_tab" data-toggle="tab"
                                            href="#article_details_en" aria-controls="profile">
                                            <span class="nav-icon"><i class="flaticon2-layers-1"></i></span>
                                            <span class="nav-text"><?php echo e(__('articles.article_details_en_tab')); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="article_details_ar_tab" data-toggle="tab"
                                            href="#article_details_ar" aria-controls="profile">
                                            <span class="nav-icon"><i class="flaticon2-layers-1"></i></span>
                                            <span class="nav-text"><?php echo e(__('articles.article_details_ar_tab')); ?></span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content mt-5">
                                    <?php echo $__env->make('admin.articles.update_tabs.settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('admin.articles.update_tabs.details_en', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('admin.articles.update_tabs.details_ar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::content-->
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $('#form_article_update').on('submit', function(e) {
            e.preventDefault();

            ////////////////////////////////////////////////////////////////////
            $('#photo_error').text('');
            // $('#file_error').text('');
            $('#publish_date_error').text('');
            $('#publisher_name_error').text('');
            $('#title_ar_error').text('');
            $('#abstract_ar_error').text('');
            $('#title_en_error').text('');
            $('#abstract_en_error').text('');

            $('#photo').css('border-color', '');
            // $('#file').css('border-color', '');
            $('#publish_date').css('border-color', '');
            $('#publisher_name').css('border-color', '');
            $('#title_ar').css('border-color', '');
            $('#abstract_ar').css('border-color', '');
            $('#title_en').css('border-color', '');
            $('#abstract_en').css('border-color', '');
            ///////////////////////////////////////////////////////////////////

            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = $(this).attr('action');

            $.ajax({
                url: url,
                type: type,
                dataType: 'json',
                data: data,
                contentType: false,
                processData: false,
                cache: false,
                beforeSend: function() {
                    KTApp.blockPage({
                        overlayColor: '#000000',
                        state: 'danger',
                        message: "<?php echo e(__('general.please_wait')); ?>",
                    });
                },
                success: function(data) {
                    KTApp.unblockPage();
                    console.log(data);
                    if (data.status == true) {
                        Swal.fire({
                            title: data.msg,
                            text: "",
                            icon: "success",
                            allowOutsideClick: false,
                            customClass: {
                                confirmButton: 'update_article_button'
                            }
                        });
                        $('.update_article_button').click(function() {
                            window.location.href = "<?php echo e(route('admin.articles')); ?>";
                        });
                    }

                }, //end success
                error: function(reject) {
                    KTApp.unblockPage();
                    $('html, body').animate({
                        scrollTop: 20
                    }, 300);
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key + '_error').text(value[0])
                        $('#' + key).css('border-color', '#F64E60 ')
                        $('.note-editor.note-frame').css('border', '1px solid #c92d51; ')
                    });
                    ArticlePrintErrors(response.errors)
                }, //end error
                complete: function() {
                    KTApp.unblockPage();
                }, //end complete
            }); //end ajax

        }); //end submit
        ////////////////////////////////////
        ////// Print Errors Function
        function ArticlePrintErrors(msg) {

            $('.alert_errors').find('ul').empty();
            $('.alert_errors').removeClass('d-none');
            $('.alert_success').addClass('d-none');
            $('.loading_save_continue').addClass('d-none');
            $.each(msg, function(key, value) {
                $('.alert_errors').find('ul').append("<li>" + value + "</li>");
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/articles/update.blade.php ENDPATH**/ ?>