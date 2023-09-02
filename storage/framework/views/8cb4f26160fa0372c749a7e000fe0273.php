<div class="favorite-list-item">
    <div data-contact="<?php echo e(strtolower($user->uid)); ?>" data-contact-id="<?php echo e($user->id); ?>" data-action="0" class="avatar av-m" style="background-image: url('<?php echo e(src($user->avatar)); ?>');">
    </div>
    <p><?php echo e(strlen($user->username) > 5 ? substr($user->username,0,6).'..' : $user->username); ?></p>
</div>
<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\vendor\Chatify\layouts\favorite.blade.php ENDPATH**/ ?>