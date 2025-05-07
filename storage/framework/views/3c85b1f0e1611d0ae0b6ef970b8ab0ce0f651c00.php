 <?php if($courseStudent->pivot->certification_flag == 'on'): ?>
     <a href="#" class="btn btn-hover-warning btn-icon btn-pill update_student_cetification"
         data-id="<?php echo e($courseStudent->pivot->id); ?>" title="<?php echo e(__('courses.update_certification')); ?>">
         <i class="fa fa-edit fa-1x"></i>
     </a>
 <?php else: ?>
     <a href="#" class="btn btn-hover-info btn-icon btn-pill add_student_cetification"
         data-id="<?php echo e($courseStudent->pivot->id); ?>" title="<?php echo e(__('courses.add_certification')); ?>">
         <i class="fa fa-plus fa-1x"></i>
     </a>
 <?php endif; ?>


 <a href="#" class="btn btn-hover-danger btn-icon btn-pill delete_enrolled_student"
     data-id="<?php echo e($courseStudent->pivot->id); ?>" title="<?php echo e(__('general.delete')); ?>">
     <i class="fa fa-trash fa-1x"></i>
 </a>
<?php /**PATH C:\laragon\www\bakka\resources\views/admin/courses/enroll-list/parts/options.blade.php ENDPATH**/ ?>