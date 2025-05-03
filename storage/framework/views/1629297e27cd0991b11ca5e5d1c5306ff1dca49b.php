<?php if(App\Models\Certification::where('student_id', $courseStudent->pivot->student_id)->where('course_id', $courseStudent->pivot->course_id)->first()): ?>
    <a href="<?php echo asset(
        'adminBoard/uploadedFiles/certifications/' .
            App\Models\Certification::where('student_id', $courseStudent->pivot->student_id)->where('course_id', $courseStudent->pivot->course_id)->first()->file,
    ); ?>" target="_blank"><?php echo __('courses.certitfication'); ?></a>
<?php else: ?>
    <span class="text-danger"> <?php echo __('courses.no_certification'); ?></span>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/courses/enroll-list/parts/certification.blade.php ENDPATH**/ ?>