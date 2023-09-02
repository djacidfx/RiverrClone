<style>
    :root {
        --messengerColor: <?php echo e($messengerColor); ?>,
    }
/* NProgress background */
#nprogress .bar{
	background: <?php echo e($messengerColor); ?> !important;
}
#nprogress .peg {
    box-shadow: 0 0 10px <?php echo e($messengerColor); ?>, 0 0 5px <?php echo e($messengerColor); ?> !important;
}
#nprogress .spinner-icon {
  border-top-color: <?php echo e($messengerColor); ?> !important;
  border-left-color: <?php echo e($messengerColor); ?> !important;
}

.m-header svg{
    color: <?php echo e($messengerColor); ?>;
}

.m-list-active,
.m-list-active:hover,
.m-list-active:focus{
    background-color: #e9eef5;
}

.dark .m-list-active,
.dark .m-list-active:hover,
.dark .m-list-active:focus{
    background-color: #373737;
}

.m-list-active b{
	color: #fff !important;
	background: <?php echo e($messengerColor); ?> !important;
}

.messenger-list-item td .new-messages-counter {
    background: <?php echo e($messengerColor); ?>;
}

.messenger-infoView nav a{
    color: <?php echo e($messengerColor); ?>;
}

.messenger-infoView-btns a.default{
	color: <?php echo e($messengerColor); ?>;
}

.mc-sender .msg-card-content {
    background: <?php echo e($messengerColor); ?> !important;
    border: unset;
    box-shadow: unset;
}

.messenger-sendCard button svg{
    color: <?php echo e($messengerColor); ?>;
}

.messenger-listView-tabs a,
.messenger-listView-tabs a:hover,
.messenger-listView-tabs a:focus{
    color: <?php echo e($messengerColor); ?>;
}

.active-tab{
	border-bottom: 2px solid <?php echo e($messengerColor); ?>;
}

.lastMessageIndicator{
    color: <?php echo e($messengerColor); ?> !important;
}

.messenger-favorites div.avatar{
    box-shadow: 0px 0px 0px 2px <?php echo e($messengerColor); ?>;
}

.dark-mode-switch{
    color: <?php echo e($messengerColor); ?>;
}
.m-list-active .activeStatus{
    border-color: #e9eef5 !important;
}
.dark .m-list-active .activeStatus{
    border-color: #373737 !important;
}
</style>
<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\vendor\Chatify\layouts\messengerColor.blade.php ENDPATH**/ ?>