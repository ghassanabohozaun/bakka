<?php $__env->startSection('content'); ?>
    <style>
        .card_name_span {
            font-size: 18px
        }
    </style>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                <!--begin::Page Title-->
                <span class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    <?php echo e(__('menu.dashboard')); ?>

                </span>
                <!--end::Page Title-->

                <!--begin::Actions-->

            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->



    <!--begin::content-->
    <div class="d-flex flex-column-fluid" style="margin-bottom: 5px">


        <!--begin::Container-->
        <div class=" container-fluid ">

            <!--begin::Counters-->
            <div class="row">

                <!------------------------- start courses count ---------->
                <div class="col-xl-2">
                    <!--begin::Stats Widget 32-->
                    <div class="card card-custom bg-danger-o-50 card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">

                            <!--begin::Svg Icon-->
                            <span>
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Wallet.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                        version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                                x="3" y="3" width="18" height="7" rx="1" />
                                            <path
                                                d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </span>
                            <!--end::Svg Icon-->

                            <span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 text-hover-primary d-block">
                                <?php echo e(App\Models\Course::withoutTrashed()->count()); ?>

                            </span>
                            <span class="font-weight-bold card_name_span">
                                <?php echo e(__('dashboard.courses_counter')); ?>

                            </span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 32-->
                </div>
                <!------------------------- end courses count ----------->

                <!------------------------- start students count ---------->
                <div class="col-xl-2">
                    <!--begin::Stats Widget 32-->
                    <div class="card card-custom bg-info-o-50 card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">

                            <!--begin::Svg Icon-->
                            <span>
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Wallet.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                        version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                                x="3" y="3" width="18" height="7" rx="1" />
                                            <path
                                                d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </span>
                            <!--end::Svg Icon-->

                            <span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 text-hover-primary d-block">
                                <?php echo e(App\Models\Student::withoutTrashed()->count()); ?>

                            </span>
                            <span class="font-weight-bold card_name_span">
                                <?php echo e(__('dashboard.students_counter')); ?>

                            </span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 32-->
                </div>
                <!------------------------- end students count ----------->

                <!------------------------- start articles count ---------->
                <div class="col-xl-2">
                    <!--begin::Stats Widget 32-->
                    <div class="card card-custom bg-warning-o-50 card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">

                            <!--begin::Svg Icon-->
                            <span>
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Wallet.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                        version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                                x="3" y="3" width="18" height="7" rx="1" />
                                            <path
                                                d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </span>
                            <!--end::Svg Icon-->

                            <span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 text-hover-primary d-block">
                                <?php echo e(App\Models\Article::withoutTrashed()->count()); ?>

                            </span>
                            <span class="font-weight-bold card_name_span">
                                <?php echo e(__('dashboard.article_counter')); ?>

                            </span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 32-->
                </div>
                <!------------------------- end article count ----------->

                <!------------------------- start testimonials count ---------->
                <div class="col-xl-2">
                    <!--begin::Stats Widget 32-->
                    <div class="card card-custom bg-primary-o-50 card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">

                            <!--begin::Svg Icon-->
                            <span>
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Wallet.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5"
                                                r="1.5" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                                x="3" y="3" width="18" height="7" rx="1" />
                                            <path
                                                d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </span>
                            <!--end::Svg Icon-->

                            <span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 text-hover-primary d-block">
                                <?php echo e(App\Models\Testimonial::withoutTrashed()->count()); ?>

                            </span>
                            <span class="font-weight-bold card_name_span">
                                <?php echo e(__('dashboard.testimonials_counter')); ?>

                            </span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 32-->
                </div>
                <!------------------------- end testimonials count ----------->

                <!------------------------- start videos count ---------->
                <div class="col-xl-2">
                    <!--begin::Stats Widget 32-->
                    <div class="card card-custom bg-dark-o-50 card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">

                            <!--begin::Svg Icon-->
                            <span>
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Wallet.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5"
                                                r="1.5" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                                x="3" y="3" width="18" height="7" rx="1" />
                                            <path
                                                d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </span>
                            <!--end::Svg Icon-->

                            <span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 text-hover-primary d-block">
                                <?php echo e(App\Models\Video::withoutTrashed()->count()); ?>

                            </span>
                            <span class="font-weight-bold card_name_span">
                                <?php echo e(__('dashboard.videos_counter')); ?>

                            </span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 32-->
                </div>
                <!------------------------- end videos count ----------->

                <!------------------------- start albums count ---------->
                <div class="col-xl-2">
                    <!--begin::Stats Widget 32-->
                    <div class="card card-custom bg-success-o-50 card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">

                            <!--begin::Svg Icon-->
                            <span>
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Wallet.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5"
                                                r="1.5" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                                                x="3" y="3" width="18" height="7" rx="1" />
                                            <path
                                                d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </span>
                            <!--end::Svg Icon-->

                            <span class="card-title font-weight-bolder font-size-h2 mb-0 mt-6 text-hover-primary d-block">
                                <?php echo e(App\Models\PhotoAlbum::withoutTrashed()->count()); ?>

                            </span>
                            <span class="font-weight-bold card_name_span">
                                <?php echo e(__('dashboard.albums_counter')); ?>

                            </span>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 32-->
                </div>
                <!------------------------- end albums count ----------->

            </div>
            <!--end::Counters-->

            <!--begin::chart-->
            <div class="card card-custom gutter-b">

                <div class="card-body py-2" style="">
                    <div class="container-fluid">
                        <div class="row">

                            <!--begin::students enroll chart-->
                            <div class="col-lg-6">
                                <div class="col-12">
                                    <div style="width: 100% ; margin: auto">
                                        <canvas id="barChart" width="1100" height="600"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end::students enroll chart-->

                            <!--begin::article charts -->
                            <div class="col-lg-6">
                                <div class="col-12">
                                    <div style="width: 100% ; margin: auto">
                                        <canvas id="barChart2" width="1100" height="600"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!--end::article chart-->

                        </div>
                    </div>
                </div>

                <!--end::Body-->
            </div>
            <!--end::chart-->


            <!--begin::Last articles and courses-->
            <div class="card card-custom gutter-b ">

                <!--begin::Body-->
                <div class="card-body py-2" style="">
                    <div class="container-fluid">
                        <div class="row">
                            <!--begin::courses-->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">
                                            <?php echo e(__('dashboard.latest_courses')); ?>

                                        </span>
                                    </h3>
                                </div>
                                <!--end::Header-->

                                <?php if($latest_courses->isEmpty()): ?>
                                    <img src="<?php echo asset('adminBoard/images/noRecordFound.svg'); ?>" class="img-fluid" id="no_data_img">
                                <?php else: ?>
                                    <!--begin::Body-->
                                    <div class="table-responsive ">
                                        <table class="table" style="text-align: center;vertical-align: middle;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"><?php echo __('courses.photo'); ?></th>
                                                    <th scope="col"><?php echo __('courses.title_ar'); ?></th>
                                                    <th scope="col"><?php echo __('courses.title_en'); ?></th>
                                                    <th scope="col"><?php echo __('courses.hours'); ?></th>
                                                    <th scope="col"><?php echo __('courses.start_at'); ?></th>
                                                    <th scope="col"><?php echo __('courses.end_at'); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $latest_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo $loop->iteration; ?></td>
                                                        <td>
                                                            <?php if($course->photo): ?>
                                                                <img src="<?php echo e(asset('adminBoard/uploadedImages/courses/' . $course->photo)); ?>"
                                                                    class="img-fluid img-thumbnail table-image " />
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('adminBoard/images/images-empty.png/')); ?>"
                                                                    class="img-fluid img-thumbnail table-image " />
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo $course->title_ar; ?> </td>
                                                        <td><?php echo $course->title_en; ?></td>
                                                        <td><?php echo $course->hours; ?></td>
                                                        <td><?php echo $course->start_at; ?></td>
                                                        <td><?php echo $course->end_at; ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>
                                <!--end::Body-->
                            </div>
                            <!--end::courses-->


                            <!--begin::articles-->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">
                                            <?php echo e(__('dashboard.latest_articles')); ?>

                                        </span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <?php if($latest_articles->isEmpty()): ?>
                                    <img src="<?php echo asset('adminBoard/images/noRecordFound.svg'); ?>" class="img-fluid" id="no_data_img">
                                <?php else: ?>
                                    <div class="table-responsive ">
                                        <table class="table" style="text-align: center;vertical-align: middle;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col"><?php echo __('articles.photo'); ?></th>
                                                    <th scope="col"><?php echo __('articles.title_ar'); ?></th>
                                                    <th scope="col"><?php echo __('articles.title_en'); ?></th>
                                                    <th scope="col"><?php echo __('index.views_count'); ?></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $latest_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo $key + 1; ?></td>
                                                        <td>
                                                            <?php if($article->photo): ?>
                                                                <img src="<?php echo e(asset('adminBoard/uploadedImages/articles/' . $article->photo)); ?>"
                                                                    class="img-fluid img-thumbnail table-image " />
                                                            <?php else: ?>
                                                                <img src="<?php echo e(asset('adminBoard/images/images-empty.png/')); ?>"
                                                                    class="img-fluid img-thumbnail table-image " />
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo $article->title_ar; ?></td>
                                                        <td><?php echo $article->title_en; ?></td>
                                                        <td><?php echo $article->views; ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <!--end::articles-->



                        </div>
                    </div>
                </div>
                <!--end::Body-->

            </div>
            <!--end::Last articles and courses-->

        </div>
        <!--end::Container-->

    </div>
    <!--end::content-->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
    <script type="text/javascript" src="<?php echo asset('adminBoard/assets/js/Chart.bundle.min.js'); ?>"></script>
    <script type="text/javascript">
        $(function() {
            var datas = <?php echo json_encode($revenueData); ?>;
            var barCanvas = $("#barChart");
            var barChart = new Chart(barCanvas, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: '<?php echo trans('dashboard.chart_revenues'); ?>',
                        data: datas,
                        backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'violet',
                            'purple', 'pink', 'indigo', 'silver', 'gold', 'brown'
                        ]
                    }]
                },
                options: {
                    scales: {
                        yAxis: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            })
        });


        $(function() {
            var articleData = <?php echo json_encode($articleData); ?>;
            var barCanvas = $("#barChart2");
            var barChart = new Chart(barCanvas, {
                type: 'line', //bar
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: '<?php echo __('dashboard.chart_article'); ?>',
                        data: articleData,
                        backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'violet',
                            'purple', 'pink', 'indigo', 'silver', 'gold', 'brown'
                        ]
                    }]
                },
                options: {
                    scales: {
                        yAxis: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>