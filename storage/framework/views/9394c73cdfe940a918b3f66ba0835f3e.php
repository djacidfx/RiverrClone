<?php $__env->startComponent('mail::message'); ?>

<p><?php echo $msg; ?></p>
 
<?php echo app('translator')->get('messages.t_regards'); ?>,<br>
<?php echo e(config('app.name')); ?><br>
<?php echo $__env->renderComponent(); ?><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\mail\admin\support\reply.blade.php ENDPATH**/ ?>