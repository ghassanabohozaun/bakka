<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Mobile Toggle-->
                    <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                        id="kt_subheader_mobile_toggle">
                        <span></span>
                    </button>
                    <!--end::Mobile Toggle-->

                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">

                        </h5>
                        <!--end::Page Title-->
                        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="<?php echo route('admin.students'); ?>" class="text-muted">
                                    <?php echo e(__('menu.students')); ?>

                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">
                                    <?php echo e(__('students.profile')); ?>

                                </a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->

            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Profile Overview-->
                <div class="d-flex flex-row">

                    <!--begin::Aside-->
                    <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                        <!--begin::Profile Card-->
                        <div class="card card-custom card-stretch">
                            <!--begin::Body-->
                            <div class="card-body pt-4">


                                <!--begin::User-->
                                <div class="d-flex align-items-center" style="margin-top: 40px">
                                    <div
                                        class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                        <?php if(!$student->photo): ?>
                                            <?php if($student->gender == __('general.male')): ?>
                                                <div class="symbol-label"
                                                    style="background-image:url(<?php echo asset('adminBoard/images/male.jpeg'); ?>)"></div>
                                            <?php else: ?>
                                                <div class="symbol-label"
                                                    style="background-image:url(<?php echo asset('adminBoard/images/female.jpeg'); ?>)"></div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <div class="symbol-label" style="background-image:url(<?php echo asset('adminBoard/uploadedImages/students/' . $student->photo); ?>)">
                                            </div>
                                        <?php endif; ?>
                                        <i class="symbol-badge bg-success"></i>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)"
                                            class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                                            <?php echo $student->{'name_' . Lang()}; ?>

                                        </a>

                                        <div class="text-muted" style="font-weight: 600;font-size: 12px">
                                            <?php if($student->freeze == 'on'): ?>
                                                <span class="text-danger"><?php echo __('students.Frozen'); ?></span>
                                            <?php else: ?>
                                                <span class="text-success">
                                                    <?php echo __('students.activited'); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!--end::User-->


                                <!--begin::Nav gender-->
                                <div class="navi navi-bold  navi-active navi-link-rounded" style="margin-top: 60px">
                                    <div class="navi-item mb-2">
                                        <a href="javascript:void(0);" class="navi-link py-4 active">
                                            <span class="navi-icon mr-2">
                                                <span class="symbol-label">
                                                    <span
                                                        class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Contact1.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                            viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <circle fill="#000000" opacity="0.3" cx="12"
                                                                    cy="12" r="10" />
                                                                <path
                                                                    d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span>
                                                </span>
                                            </span>
                                            <span class="navi-text font-size-lg">
                                                <?php if($student->gender == 'male'): ?>
                                                    <?php echo __('general.male'); ?>

                                                <?php elseif($student->gender == 'female'): ?>
                                                    <?php echo __('general.female'); ?>

                                                <?php endif; ?>
                                            </span>
                                        </a>
                                    </div>


                                </div>
                                <!--end::Nav-->


                                <!--begin::Nav mobile-->
                                <div class="navi navi-bold  navi-active navi-link-rounded">
                                    <div class="navi-item mb-2">
                                        <a href="javascript:void(0);" class="navi-link py-4 active">
                                            <span class="navi-icon mr-2">
                                                <span class="symbol-label">
                                                    <span
                                                        class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\iPhone-X.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                                <path
                                                                    d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span>
                                                </span>
                                            </span>
                                            <span class="navi-text font-size-lg">
                                                <?php echo $student->mobile; ?>

                                            </span>
                                        </a>
                                    </div>


                                </div>
                                <!--end::Nav-->

                                <!--begin::Nav whatsapp-->
                                <div class="navi navi-bold  navi-active navi-link-rounded">
                                    <div class="navi-item mb-2">
                                        <a href="javascript:void(0);" class="navi-link py-4 active">
                                            <span class="navi-icon mr-2">
                                                <span class="symbol-label">
                                                    <span
                                                        class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Call.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M11.613922,13.2130341 C11.1688026,13.6581534 10.4887934,13.7685037 9.92575695,13.4869855 C9.36272054,13.2054673 8.68271128,13.3158176 8.23759191,13.760937 L6.72658218,15.2719467 C6.67169475,15.3268342 6.63034033,15.393747 6.60579393,15.4673862 C6.51847004,15.7293579 6.66005003,16.0125179 6.92202169,16.0998418 L8.27584113,16.5511149 C9.57592638,16.9844767 11.009274,16.6461092 11.9783003,15.6770829 L15.9775173,11.6778659 C16.867756,10.7876271 17.0884566,9.42760861 16.5254202,8.3015358 L15.8928491,7.03639343 C15.8688153,6.98832598 15.8371895,6.9444475 15.7991889,6.90644684 C15.6039267,6.71118469 15.2873442,6.71118469 15.0920821,6.90644684 L13.4995401,8.49898884 C13.0544207,8.94410821 12.9440704,9.62411747 13.2255886,10.1871539 C13.5071068,10.7501903 13.3967565,11.4301996 12.9516371,11.8753189 L11.613922,13.2130341 Z"
                                                                    fill="#000000" />
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span>
                                                </span>
                                            </span>
                                            <span class="navi-text font-size-lg">
                                                <?php echo $student->whatsapp; ?>

                                            </span>
                                        </a>
                                    </div>


                                </div>
                                <!--end::Nav-->


                                <!--begin::Nav email-->
                                <div class="navi navi-bold  navi-active navi-link-rounded">
                                    <div class="navi-item mb-2">
                                        <a href="javascript:void(0);" class="navi-link py-4 active">
                                            <span class="navi-icon mr-2">
                                                <span class="symbol-label">
                                                    <span
                                                        class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Mail-at.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z"
                                                                    fill="#000000" />
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span>
                                                </span>
                                            </span>
                                            <span class="navi-text font-size-lg">
                                                <?php echo $student->email; ?>

                                            </span>
                                        </a>
                                    </div>


                                </div>
                                <!--end::Nav-->


                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Profile Card-->
                    </div>
                    <!--end::Aside-->


                    <!--begin::Content-->
                    <div class="flex-row-fluid ml-lg-8">
                        <!--begin::Advance Table: Widget 7-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark"><?php echo __('students.enrolled_courses'); ?></span>
                                </h3>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body py-2" style="overflow:auto; height: 520px">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <?php if($courses->isEmpty()): ?>
                                                <img src="<?php echo asset('site/images/noRecordFound.svg'); ?>" class="img-fluid" id="no_data_img"
                                                    title="<?php echo __('site.no_date'); ?>">
                                            <?php else: ?>
                                                <table class="table" style="text-align: center;vertical-align: middle;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col"><?php echo __('courses.title_ar'); ?></th>
                                                            <th scope="col"><?php echo __('courses.title_en'); ?></th>
                                                            <th scope="col"><?php echo __('courses.hours'); ?></th>
                                                            <th scope="col"><?php echo __('courses.cost'); ?></th>
                                                            <th scope="col"><?php echo __('courses.discount'); ?></th>
                                                            <th scope="col"><?php echo __('courses.date'); ?></th>
                                                            <th scope="col"><?php echo __('courses.has_certitfication'); ?></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo $key + 1; ?></td>
                                                                <td><?php echo $course->title_ar; ?></td>
                                                                <td><?php echo $course->title_en; ?></td>
                                                                <td><?php echo $course->hours; ?></td>
                                                                <td><?php echo $course->cost; ?></td>
                                                                <td>
                                                                    <?php if($course->discount == null || $course->discount == 0): ?>
                                                                        <?php echo $course->cost; ?>

                                                                    <?php else: ?>
                                                                        <?php echo $course->discount; ?>

                                                                    <?php endif; ?>
                                                                </td>
                                                                <td><?php echo $course->pivot->enrolled_date; ?></td>
                                                                <td><?php echo $__env->make('admin.students.parts.profile-certification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>

                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </tbody>
                                                </table>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Advance Table Widget 7-->
                    </div>
                    <!--end::Content-->


                </div>
                <!--end::Profile Overview-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->


    <!--end::Main-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bakka\resources\views/admin/students/profile.blade.php ENDPATH**/ ?>