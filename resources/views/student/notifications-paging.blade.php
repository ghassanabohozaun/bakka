<div class="table-responsive notification-table">
    <table class="table  table-hover" style="vertical-align: middle; font-size: 14px">
        <thead>
            <tr>
                <th>#</th>
                <th>{!! __('site.notification_title') !!}</th>
                <th>{!! __('site.notification_details') !!}</th>
                <th>{!! __('site.action') !!}</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($notifications as $key => $notification)
                <tr>
                    <td>{!! $key + 1 !!}</td>
                    <td>
                        {!! $notification->{'title_' . Lang()} !!}
                    </td>
                    <td>
                        {!! $notification->{'details_' . Lang()} !!}
                    </td>
                    <td>
                        <a href="#" title="{!! __('site.mark_as_read') !!}" class="read_student_notification"
                            id='read_student_notification' data-id="{!! $notification->id !!}">
                            <i style="font-size: 20px" class="fa fa-envelope  {!! $notification->notify_class == 'unread' ? 'text-danger' : 'text-info' !!} ">
                            </i>
                        </a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>

    {{ $notifications->links('vendor.pagination.bootstrap-4') }}
</div>
