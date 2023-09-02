<?php $__env->startComponent('mail::message'); ?>

<p class="grid-cols-1 grid-cols-2 grid-cols-3 grid-cols-4 grid-cols-5"><?php echo app('translator')->get('messages.t_mail_newsletter_welcome_line'); ?></p>

<?php echo app('translator')->get('messages.t_regards'); ?>,<br>
<?php echo e(config('app.name')); ?><br>

<?php echo $__env->renderComponent(); ?><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\mail\user\everyone\newsletter_approved.blade.php ENDPATH**/ ?>