<a href="{{ route('admin.students.profile', $student->id) }}" class="btn btn-hover-info btn-icon btn-pill "
    title="{{ __('students.profile') }}">
    <i class="fa fa-eye fa-1x"></i>
</a>

<a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-hover-primary btn-icon btn-pill "
    title="{{ __('general.edit') }}">
    <i class="fa fa-edit fa-1x"></i>
</a>

<a href="#" class="btn btn-hover-danger btn-icon btn-pill delete_student_btn" data-id="{{ $student->id }}"
    title="{{ __('general.delete') }}">
    <i class="fa fa-trash fa-1x"></i>
</a>
