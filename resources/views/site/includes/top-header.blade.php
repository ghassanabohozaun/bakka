<div class="row justify-content-between align-items-center my-3">
    <div class="col-auto">
        <div class="logo-header">
            <a href="{!! route('index') !!}">
                <img src="{!! asset('site/img/logo.svg') !!}" width="120" alt="">
            </a>
        </div>
    </div>
    <div class="col-lg-4 col text-right">
        <div class="row justify-content-end">


            @if (student()->check())
                <!-- begin:user image --------------------------------------------------->
                <div class="col-auto pr-0">
                    <a href="{!! route('student.courses') !!}" class="img-after-login  br-5 fs-14">
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

                <div class="col-auto px-2" id="student_notifications_section"></div>

                <!-- end:user notifications --------------------------------------------------->
            @else
                <div class="col-auto pl-0">
                    <a href="{!! route('get.student.login') !!}" class="btn btn-primary px-3 br-20 fs-14">
                        {!! __('site.login') !!}
                    </a>
                </div>
                <div class="col-auto pl-0">
                    <a href="{!! route('student.signup') !!}" class=" btn btn-outline-light br-20 mx-1 fs-14">
                        {!! __('site.sign_up') !!}
                    </a>
                </div>
            @endif


            @if (setting()->lang_front_button_status == 'on')
                @if (Lang() == 'ar')
                    <div class="col-auto pl-0">
                        <a href="/en" class="btn btn-outline-light br-50 fs-14 w-h">
                            {!! __('site.ar') !!}
                        </a>
                    </div>
                @else
                    <div class="col-auto pl-0">
                        <a href="/ar" class="btn btn-outline-light br-20 fs-14 w-h">
                            {!! __('site.en') !!}
                        </a>
                    </div>
                @endif
            @endif

        </div>
    </div>
</div>


@push('js')
    <script type="text/javascript">
        //Notifications
        $('#student_notifications_section').load("{!! route('student.get.header.notificatoins') !!}");
    </script>
@endpush
