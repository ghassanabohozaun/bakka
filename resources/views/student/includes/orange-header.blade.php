<header class="  pb-4 pt-1 custom-header">
    <div class=" container">
        <div class="row justify-content-between align-items-center my-3">
            <div class="col-auto">
                <div class="logo-header">
                    <a href="{!! route('index') !!}">
                        <img src="{!! asset('site/img/logo-white.svg') !!}" width="120" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col text-right">
                <div class="row justify-content-end">

                    @if (student()->check())
                        <!-- begin:user image --------------------------------------------------->
                        <div class="col-auto pr-0">
                            <a href="{!! route('student.courses') !!}" class="img-after-login">

                                @if (student()->user()->photo == null)
                                    @if (student()->user()->gender == 'male')
                                        <img src="{{ asset('adminBoard/images/male.jpeg') }}" alt="">
                                    @else
                                        <img src="{{ asset('adminBoard/images/female.jpeg') }}" alt="">
                                    @endif
                                @else
                                    <img src="{!! asset('adminBoard/uploadedImages/students/' . student()->user()->photo) !!}" alt="">
                                @endif
                            </a>
                        </div>
                        <!-- end:user image --------------------------------------------------->
                        <!-- begin:user notifications --------------------------------------------------->
                        <div class="col-auto px-2" id="student_notifications_section"> </div>
                        <!-- end:user notifications --------------------------------------------------->
                    @else
                        <!-- begin:login --------------------------------------------------->
                        <div class="col-auto pr-0">
                            <a href="{!! route('get.student.login') !!}" class="btn btn-light px-3 br-20 fs-14">
                                {!! __('site.login') !!}
                            </a>
                        </div>
                        <!-- end:login --------------------------------------------------->

                        <!-- begin:signup --------------------------------------------------->
                        <div class="col-auto px-2">
                            <a href="{!! route('student.signup') !!}" class=" btn btn-outline-light br-20 mx-1 fs-14">
                                {!! __('site.sign_up') !!}
                            </a>
                        </div>
                        <!-- end:signup --------------------------------------------------->

                    @endif

                    <!-- begin:language --------------------------------------------------->
                    @if (setting()->lang_front_button_status == 'on')
                        <div class="col-auto pl-0">

                            @if (Lang() == 'ar')
                                <a href="/en" class="btn btn-outline-light br-50 fs-14 w-h">
                                    {!! __('site.en') !!}
                                </a>
                            @else
                                <a href="/ar" class="btn btn-outline-light br-20 fs-14 w-h">
                                    {!! __('site.ar') !!}
                                </a>
                            @endif

                        </div>
                    @endif
                    <!-- begin:language --------------------------------------------------->

                </div>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg border border-right-0 border-left-0 py-0">

            <button class="navbar-toggler  w-100" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>

            <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                <ul class="navbar-nav  d-flex align-items-center justify-content-between w-100">

                    <li class="nav-item  col active">
                        <a class="nav-link" href="{!! route('index') !!}">
                            {!! __('site.index') !!}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item  col ">
                        <a class="nav-link" href="{!! route('courses') !!}">
                            {!! __('site.courses') !!}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>


                    <li class="nav-item  col ">
                        <a class="nav-link" href="{!! route('videos') !!}">
                            {!! __('site.videos') !!}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item  col ">
                        <a class="nav-link" href="{!! route('photo.albums') !!}">
                            {!! __('site.photo_albums') !!}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item  col ">
                        <a class="nav-link" href="{!! route('faq') !!}">
                            {!! __('site.faq') !!}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item col">
                        <a class="nav-link" href="{!! route('index') !!}#contactUs">
                            {!! __('site.contact_us') !!}
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</header>
@push('js')
    <script type="text/javascript">
        //Notifications
        $('#student_notifications_section').load("{!! route('student.get.header.notificatoins') !!}");
    </script>
@endpush
