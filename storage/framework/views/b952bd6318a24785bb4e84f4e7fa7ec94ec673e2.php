<?php if(!$testimonials->isEmpty()): ?>
    <section class="our_testim">
        <div class=" container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <section id="testim" class="testim">
                        <div class="testim-cover">
                            <div class="wrap">
                                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                                <ul id="testim-dots" class="dots">
                                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="dot <?php if($loop->first): ?> active <?php endif; ?>"></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                                <div id="testim-content" class="cont">
                                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="<?php if($loop->first): ?> active <?php endif; ?>">
                                            <div class="img">
                                                <?php if(!empty($testimonial->photo)): ?>
                                                    <img src="<?php echo asset('adminBoard/uploadedImages/testimonials/' . $testimonial->photo); ?>" alt="<?php echo $testimonial->{'opinion_' . Lang()}; ?>">
                                                <?php else: ?>
                                                    <?php if($testimonial->gender == 'male'): ?>
                                                        <img src="<?php echo e(asset('adminBoard/images/male.jpeg')); ?>"
                                                            alt="<?php echo $testimonial->{'opinion_' . Lang()}; ?>">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('adminBoard/images/female.jpeg')); ?>"
                                                            alt="<?php echo $testimonial->{'opinion_' . Lang()}; ?>">
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                            <h2><?php echo $testimonial->{'name_' . Lang()}; ?> ,

                                                <?php echo $testimonial->gender == 'male' ? __('general.male') : __('general.female'); ?> ,
                                                <?php echo $testimonial->age; ?> <?php echo __('site.years'); ?> ,
                                                <?php echo $testimonial->country; ?>


                                            </h2>
                                            <p><?php echo $testimonial->{'opinion_' . Lang()}; ?></p>
                                            <h2 id='testim-rating'>
                                                <?php if($testimonial->rating != null): ?>
                                                    {
                                                    <span>
                                                        <?php for($i = 1; $i <= $testimonial->rating; $i++): ?>
                                                            <i class="fa fa-star" style="color:#FFA400"></i>
                                                        <?php endfor; ?>
                                                    </span>
                                                    }
                                                <?php endif; ?>
                                                </p>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/index/mission.blade.php ENDPATH**/ ?>