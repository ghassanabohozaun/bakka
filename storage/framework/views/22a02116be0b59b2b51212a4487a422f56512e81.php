<?php if(!$articles->isEmpty()): ?>
    <section class="our-articles pb-5 py-5">
        <div class=" container">
            <div class=" text-center">
                <h2 class=" text-bold mb-3" data-aos="fade-down" data-aos-duration="1800">
                    <?php echo __('site.latest_articles'); ?>

                </h2>

            </div>
            <div class="row mt-5 justify-content-center">
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 col-md-6 mb-8" data-aos="fade-down" data-aos-duration="1900">
                        <div class="item-course">
                            <div class="img-course">
                                <?php if($article->photo): ?>
                                    <img src="<?php echo asset('adminBoard/uploadedImages/articles/' . $article->photo); ?>" height="500" alt="<?php echo $article->{'title_' . Lang()}; ?>">
                                <?php else: ?>
                                    <img src="<?php echo asset('site/images/articles.svg'); ?>" class="img-fluid" height="500"
                                        alt="<?php echo $article->{'title_' . Lang()}; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="content-item">
                                <div class="row justify-content-between align-items-center">
                                    <div class=" col-auto date-item fs-12">
                                        <?php echo $article->publish_date; ?>

                                    </div>
                                    <div class="col-auto">
                                        <span class=" btn bg-warning-light py-1 br-20 text-warning">
                                            <?php echo $article->publisher_name; ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="fs-16 text-bold my-2 text-dark">
                                    <?php echo $article->{'title_' . Lang()}; ?>

                                </div>
                                <p class="mb-3 fs-12">
                                    <?php echo \Illuminate\Support\Str::limit(strip_tags($article->{'abstract_' . Lang()}), $limit = 250, $end = '...'); ?>

                                </p>


                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <a href="article/<?php echo $article->{'title_' . Lang() . '_slug'}; ?>"
                                            class="btn btn-primary br-30 text-bold">
                                            <?php echo trans('site.read_more'); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/index/articles.blade.php ENDPATH**/ ?>