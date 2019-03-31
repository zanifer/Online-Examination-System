<?php /* C:\xampp\htdocs\Final_auth\resources\views/teacher_home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
  <table class="table table-condensed table-bordered table-hover">
     <tr class="warning">
      <th>Id</th>
      <th>Question No</th>
      <th>Question</th>
     </tr>
         <?php $i = 0; ?>
     <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <?php $i++ ?>
     <tr class="success">
        <td><?php echo e($question->id); ?></td>
       <td><?php echo e($question->question_no); ?></td>
       <td><?php echo e($question->question); ?></td>

     </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
   </table>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>