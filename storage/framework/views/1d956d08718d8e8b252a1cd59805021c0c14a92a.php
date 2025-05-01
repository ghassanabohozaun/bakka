<?php $__env->startSection('title'); ?>
    <?php echo $title; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('metaTags'); ?>
    <meta name="description" content="<?php echo Lang() == 'ar' ? setting()->site_description_ar : setting()->site_description_en; ?>">
    <meta name="keywords" content="<?php echo Lang() == 'ar' ? setting()->site_keywords_ar : setting()->site_keywords_en; ?>">
    <meta name="application-name" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
    <meta name="author" content="<?php echo Lang() == 'ar' ? setting()->site_name_ar : setting()->site_name_en; ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('student.includes.orange-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <section class="content-section mt-4 mb-4 py-4 px-4 px-md-0 ">
        <div class="container" data-aos="fade-up" data-aos-duration="1500">
            <div class="row justify-content-between align-items-center">


                <!-- begin::course -------------------------------------------------------------------------------->
                <div class="col-lg-12 col-md-12 mb-12">
                    <div class="box-program p-4 br-5">
                        <div class=" container py-4">

                            <div class="course-dt">

                                <div class="cor-img">
                                    <?php if($course->photo): ?>
                                        <img src="<?php echo asset('adminBoard/uploadedImages/courses/' . $course->photo); ?>" width="100%" style="height: 60%"
                                            alt="<?php echo $course->{'title_' . Lang()}; ?>">
                                    <?php else: ?>
                                        <img src="<?php echo asset('site/images/courses.jpg'); ?>" width="100%" style="height: 60%"
                                            alt="<?php echo $course->{'title_' . Lang()}; ?>">
                                    <?php endif; ?>

                                </div>
                                <div class="row  py-3 mt-4">
                                    <div class="col-md-10">
                                        <div class="text-bold">
                                            <?php echo Lang() == 'ar' ? $course->title_ar : $course->title_en; ?>

                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <?php if($course->discount != null || $course->discount != 0): ?>
                                            <span class="net-price mr-2"><?php echo $course->discount; ?>$</span>
                                            <span class="old-price"><?php echo $course->cost; ?>$</span>
                                        <?php else: ?>
                                            <span class="my_price"><?php echo $course->cost; ?>$</span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row mt-1 mx-0 bg-light p-2 br-5">
                                    <div class="col-lg-6 px-1">
                                        <div class="fs-12">
                                            <span><?php echo trans('site.start_at'); ?></span>
                                            <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $course->start_at; ?> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <div class="fs-12 text-right">
                                            <span><?php echo trans('site.end_at'); ?></span>
                                            <span dir="<?php echo Lang() == 'ar' ? 'rtl' : 'ltr'; ?>"> <?php echo $course->end_at; ?> </span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="fs-18 mt-3 text-bold mb-2"><?php echo trans('site.course_details'); ?></div>
                                    <div class="fs-14 mb-4">
                                        <?php echo Lang() == 'ar' ? $course->description_ar : $course->description_en; ?>

                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <?php if(!App\Models\CourseStudent::where('student_id', student()->id())->where('course_id', $course->id)->get()->count()): ?>
                                        <!-- begin:  ------------------------------------------------------------>
                                        <div>
                                            <form action="<?php echo route('student.enroll.course'); ?>" method="post"
                                                enctype="multipart/form-data" id='form_student_enroll_course'>
                                                <?php echo csrf_field(); ?>

                                                <input class="form-control" type="hidden" name="item_type" value="course">
                                                <input class="form-control" type="hidden" name="course_id"
                                                    value="<?php echo $course->id; ?>">
                                                <input class="form-control" type="hidden" name="student_id"
                                                    value="<?php echo student()->id(); ?>">


                                                <button type="submit" class=" btn btn-primary   btn-block mt-2">
                                                    <div class=" d-flex align-items-center justify-content-between">
                                                        <div><?php echo trans('site.enroll_now'); ?></div>
                                                        <div></div>
                                                    </div>
                                                </button>
                                            </form>

                                        </div>
                                        <!-- end:  -------------------------------------------------------------->
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::course ---------------------------------------------------------------------------------->

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        // enroll student
        $('#form_student_enroll_course').on('submit', function(e) {
            e.preventDefault();

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
                success: function(data) {
                    if (data.status == true) {
                        Swal.fire({
                            icon: 'success',
                            title: data.msg,
                            allowOutsideClick: false,
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: `<?php echo trans('site.ok'); ?>`,
                            customClass: {
                                confirmButton: 'success_student_enroll_course_button'
                            }
                        });
                        $('.success_student_enroll_course_button').click(function() {
                            window.location.href = "<?php echo route(name: 'student.courses'); ?>";
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: data.msg,
                            allowOutsideClick: false,
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: `<?php echo trans('site.ok'); ?>`,
                            customClass: {
                                confirmButton: 'error_student_enroll_course_button'
                            }
                        });
                        $('.error_student_enroll_course_button').click(function() {
                            window.location.href = "<?php echo route(name: 'index'); ?>";
                        })
                    }
                }, //end success
            });

        }); //end submit
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/student/course-checkout.blade.php ENDPATH**/ ?>