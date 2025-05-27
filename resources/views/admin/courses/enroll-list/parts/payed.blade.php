@if ($courseStudent->pivot->enroll_agreement == 'on')
    <span class="text-success"> {!! __('courses.payed') !!}</span>
@else
    <span class="text-danger"> {!! __('courses.not_payed') !!}</span>
@endif
