@if (App\Models\Certification::where('student_id', $student->id)->where('course_id', $course->id)->first())
    <a href="{!! asset(
        'adminBoard/uploadedFiles/certifications/' .
            App\Models\Certification::where('student_id', $student->id)->where('course_id', $course->id)->first()->file,
    ) !!}" target="_blank">{!! __('courses.certitfication') !!}</a>
@else
    <span class="text-danger"> {!! __('courses.no_certification') !!}</span>
@endif
