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
    <style href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css' rel="stylesheet"> </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="sub-header">
        <div class=" container text-center content-header">
            <h2 class="mb-3"><?php echo $title; ?></h2>
            <p class="text-center fs-16-i">
            </p>
        </div>
        <div class="back-sub-header"><img src="<?php echo asset('site/img/Courses.jpg'); ?>" alt=""></div>
    </section>
    <section class=" content-section  px-4  my-5 pb-5" id="courses_section">
        <div class=" container">
            <div class="row justify-content-center">
                <div class="col-lg-12 ">

                    <div class="wrapper  text-center">
                        <?php if($faqs->isEmpty()): ?>
                            <h2><?php echo __('site.no_faqs'); ?></h2>
                        <?php else: ?>
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="faq_container">
                                    <div class="faq_question">
                                        <?php echo $faq->{'question_' . Lang()}; ?>

                                    </div>

                                    <div class="answercont">
                                        <div class="faq_answer"> <?php echo $faq->{'answer_' . Lang()}; ?></div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/site/faq.blade.php ENDPATH**/ ?>