<a href="#" class="bell-after-login student_notifications_count">
    <div><span class="">{!! $notifications->count() !!}</span><i class="fas fa-bell"></i></div>
</a>

<div class="p-2 br-5 box-noty" uk-dropdown="mode: click ; pos: top-right">
    <span>
        @if ($notifications->isEmpty())
            <div class="item-noty  p-2 br-5">
                <a href="javascript:void(0)">
                    <div class="text-bold text-primary text-left">{!! __('site.no_notifications') !!}</div>
                </a>
            </div>
        @else
            @foreach ($notifications as $notification)
                <div class=" item-noty  p-2 br-5 text-left">
                    <a href="javascript:void(0)">
                        <div class="text-bold text-primary">
                            {!! $notification->{'title_' . Lang()} !!}
                        </div>
                        <div class="fs-12 text-dark">
                            {!! $notification->{'details_' . Lang()} !!}
                        </div>
                    </a>
                </div>
            @endforeach
        @endif

        <a href="{!! route('student.notifications') !!}" class=" btn btn-primary btn-block px-5 br-2"> {!! __('site.show_all_notification') !!}</a>
    </span>
</div>
