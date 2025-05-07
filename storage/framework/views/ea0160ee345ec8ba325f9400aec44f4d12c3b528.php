<?php if(App\Models\Certification::where('student_id', $student->id)->where('course_id', $course->id)->first()): ?>
    <a href="<?php echo asset(
        'adminBoard/uploadedFiles/certifications/' .
            App\Models\Certification::where('student_id', $student->id)->where('course_id', $course->id)->first()->file,
    ); ?>" target="_blank"><?php echo __('courses.certitfication'); ?></a>
<?php else: ?>
    <span class="text-danger"> <?php echo __('courses.no_certification'); ?></span>
<?php endif; ?>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/students/parts/profile-certification.blade.php ENDPATH**/ ?>