<div class="row justify-content-center">
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="item-course">
                <div class="img-course">
                    <?php if($article->photo): ?>
                        <img src="<?php echo asset('adminBoard/uploadedImages/articles/' . $article->photo); ?>" alt="<?php echo $article->{'title_' . Lang()}; ?>">
                    <?php else: ?>
                        <img src="<?php echo asset('site/images/articles.jpg'); ?>" class="img-fluid" alt="<?php echo $article->{'title_' . Lang()}; ?>">
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
                            <a href="article/<?php echo $article->{'title_' . Lang() . '_slug'}; ?>" class="btn btn-primary br-30 text-bold">
                                <?php echo trans('site.read_more'); ?>

                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="pagination_section">
                <?php echo e($articles->links('vendor.pagination.bootstrap-4')); ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/blog/articles-paging.blade.php ENDPATH**/ ?>