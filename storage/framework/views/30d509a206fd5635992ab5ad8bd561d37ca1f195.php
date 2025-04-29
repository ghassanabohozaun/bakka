<section class=" content-section  px-4 px-md-0 my-5 pb-5" id="courses_section">
    <div class=" container">

        <div class="row justify-content-center">
            <div class="col-lg-11 px-md-0">
                <?php if($courses->isEmpty()): ?>
                    <img src="<?php echo asset('site/images/noRecordFound.svg'); ?>"
                         class="img-fluid" id="no_data_img" title="<?php echo trans('site.no_date'); ?>">
                <?php else: ?>
                    <div id="courses_date">

                        <?php echo $__env->make('site.courses-paging', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">

        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: "/<?php echo Lang(); ?>/courses/paging?page=" + page,
                success: function (data) {
                    $('#courses_date').html(data);
                    $('html, body').animate({
                        scrollTop: $("#courses_section").offset().top
                    }, 1000);
                }
            });
        }

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/courses/our-courses.blade.php ENDPATH**/ ?>