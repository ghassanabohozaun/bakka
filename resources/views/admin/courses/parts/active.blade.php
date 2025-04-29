<div class="cst-switch switch-sm">
    <input type="checkbox" id="change_active" {{ $course->active == 'on' ? 'checked' : '' }} data-id="{{ $course->id }}"
        class="change_active">
</div>
