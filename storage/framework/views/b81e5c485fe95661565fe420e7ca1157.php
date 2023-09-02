<script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>


<?php if(auth()->guard('admin')->check()): ?>
	<script>
		var pusher_key = "<?php echo e(config('chatify.pusher.key')); ?>";

		// Check if key is exists
		if (!pusher_key) {
			alert('You need to add Pusher keys first. Go to dashboard => settings => live chat');
		}
	</script>
<?php endif; ?>

<script>

	// Gloabl Chatify variables from PHP to JS
	window.chatify = {
		enable_attachments       : Boolean(<?php echo e(settings('live_chat')->enable_attachments); ?>),
		enable_emojis            : Boolean(<?php echo e(settings('live_chat')->enable_emojis); ?>),
		enable_notification_sound: Boolean(<?php echo e(settings('live_chat')->play_notification_sound); ?>),
		notification_sound       : "<?php echo e(url('public/js/chatify/sounds/new-message-sound.mp3')); ?>"
	};

	// Disable pusher logging
	Pusher.logToConsole = false;

	var pusher = new Pusher("<?php echo e(config('chatify.pusher.key')); ?>", {
		encrypted   : Boolean(<?php echo e(config('chatify.pusher.options.encrypted') ? 1 : 0); ?>),
		cluster     : "<?php echo e(config('chatify.pusher.options.cluster')); ?>",
		authEndpoint: '<?php echo e(route("pusher.auth")); ?>',
		auth        : {
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		}
	});

	// Bellow are all the methods/variables that using php to assign globally.
	const allowedImages        = <?php echo json_encode( explode(',', settings('live_chat')->allowed_images) ); ?> || [];
	const allowedFiles         = <?php echo json_encode( explode(',', settings('live_chat')->allowed_files) ); ?> || [];
	const getAllowedExtensions = [...allowedImages, ...allowedFiles];
	const getMaxUploadSize     = <?php echo e(settings('live_chat')->max_file_size * 1048576); ?>;

</script>

<script src="<?php echo e(url('public/js/chatify/utils.js')); ?>"></script>
<script src="<?php echo e(url('public/js/chatify/code.js')); ?>"></script>
<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\vendor\Chatify\layouts\footerLinks.blade.php ENDPATH**/ ?>