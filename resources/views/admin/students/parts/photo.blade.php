@if ($student->photo)
    <img src="{{ asset('adminBoard/uploadedImages/students/' . $student->photo) }}" width="80" height="80"
        class="img-fluid img-thumbnail table-image" />
@else
    @if ($student->gender == 'male')
        <img src="{{ asset('/adminBoard/images/male.jpeg') }}" width="80" height="80"
            class="img-fluid img-thumbnail table-image" />
    @elseif($student->gender == 'female')
        <img src="{{ asset('/adminBoard/images/female.jpeg') }}" width="80" height="80"
            class="img-fluid img-thumbnail table-image" />
    @endif

@endif
