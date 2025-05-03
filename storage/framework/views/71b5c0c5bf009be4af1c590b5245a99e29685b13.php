<span class="text-info font-bolder" style="font-weight: 600">
    <?php echo App\Models\CourseStudent::where('course_id', $course->id)->get()->count(); ?>

</span>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/courses/parts/students-count.blade.php ENDPATH**/ ?>