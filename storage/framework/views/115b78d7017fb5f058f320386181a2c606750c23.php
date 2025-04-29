<section class="contact-us mb-5" id="contactUs">
    <div class=" container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <h2 class=" text-bold text-center mb-3"><?php echo trans('site.be_in_touch'); ?></h2>
                <form method="POST" enctype="multipart/form-data" action="<?php echo route('send.contact'); ?>"
                    id="form_contact_message_send">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" autocomplete="off"
                            placeholder="<?php echo trans('site.full_name'); ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" autocomplete="off"
                            placeholder="<?php echo trans('site.email'); ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" autocomplete="off"
                            placeholder="<?php echo trans('site.mobile'); ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" autocomplete="off"
                            placeholder="<?php echo trans('site.title'); ?>">
                    </div>


                    <div class="form-group">
                        <textarea class="form-control" rows="3" id="message" name="message" autocomplete="off"
                            placeholder="<?php echo trans('site.message'); ?>"></textarea>
                    </div>


                    <div class="form-group">
                        <div class="captcha">
                            <span><?php echo captcha_img(); ?></span>
                            <button type="button" class="btn btn-primary" class="reload" id="reload">
                                &#x21bb;
                            </button>
                        </div>

                        <div class="form-group mb-4">
                            <input id="captcha" type="text" class="form-control"
                                placeholder="<?php echo trans('site.enter_captcha'); ?>" name="captcha" autocomplete="off">
                            <span class="form-text text-danger" id="captcha_error"></span>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary w-50 br-10">
                            <?php echo trans('site.send'); ?>

                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('adminBoard/assets/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>

    <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });


        /////////////////////////////////////////////////////////////////////
        // Validation
        $('#form_contact_message_send').validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                },
                title: {
                    required: true,
                },
                message: {
                    required: true,
                },
                captcha: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },
                email: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                    email: '<?php echo e(trans('site.it_is_email')); ?>',
                },
                mobile: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },
                title: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },
                message: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },
                captcha: {
                    required: '<?php echo e(trans('site.it_is_required')); ?>',
                },
            },
        });

        ////////////////////////////////////////////////////
        $(document).on('submit', 'form', function(e) {
            e.preventDefault();
            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = $(this).attr('action');

            $.ajax({
                url: url,
                type: type,
                data: data,
                dataType: false,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {},

                success: function(data) {
                    console.log(data);
                    $('#form_contact_message_send')[0].reset();
                    if (data.status == true) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: data.msg
                        })
                    }
                },

                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key + '_error').text(value[0]);
                        $('#' + key).css('border-color', 'red');
                    });
                },
                complete: function() {},
            })

        }); //end submit
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/index/contact-us.blade.php ENDPATH**/ ?>