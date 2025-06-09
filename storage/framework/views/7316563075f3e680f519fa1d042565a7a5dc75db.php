<?php if(!$sliders->isEmpty()): ?>
    <div class="slider">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">

                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($slider): ?>
                        <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
                            <img uk-scrollspy="cls: uk-animation-kenburns; repeat: true" src="<?php echo asset('/adminBoard/uploadedImages/sliders/' . $slider->photo); ?>"
                                class="d-block w-100" alt="<?php echo $slider->title_en; ?>">
                            <div class="carousel-caption d-none d-md-block">
                                <div class=" container">
                                    <div class=" row align-items-center">
                                        <div class="col">
                                            <?php if($slider->details_status == __('sliders.show')): ?>
                                                <h2 class="text-bold fs-31-i"><?php echo Lang() == 'ar' ? $slider->title_ar : $slider->title_en; ?></h2>
                                                <p class="my-3 text-white fs-16-i">
                                                    <?php echo Lang() == 'ar' ? $slider->details_ar : $slider->details_en; ?>

                                                </p>
                                            <?php endif; ?>
                                            <?php if($slider->button_status == __('sliders.show')): ?>
                                                <div>
                                                    <a href="<?php echo $slider->{'url_' . Lang()}; ?>" target="_blank"
                                                        class="btn btn-primary br-20 px-3 fs-14 mr-2">
                                                        <?php echo __('site.show'); ?>

                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/index/slider.blade.php ENDPATH**/ ?>