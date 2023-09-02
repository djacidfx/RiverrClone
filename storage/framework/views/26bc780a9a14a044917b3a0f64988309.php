<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(config()->get('direction')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dark' => current_theme() === 'dark']); ?>">
<head>

	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="id" content="<?php echo e($id); ?>">
	<meta name="uid" content="<?php echo e($uid); ?>">
	<meta name="type" content="<?php echo e($type); ?>">
	<meta name="messenger-color" content="<?php echo e($messengerColor); ?>">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="authenticated-user" data-user-uid="<?php echo e(auth()->user()->uid); ?>" />
	<meta name="url" content="<?php echo e(url('').'/'.config('chatify.routes.prefix')); ?>" data-user="<?php echo e(auth()->id()); ?>">
	<meta name="time-locale" content="<?php echo e(config()->get('frontend_timing_locale')); ?>" />
	<meta name="time-timezone" content="<?php echo e(config('app.timezone')); ?>" />

	
	<?php echo SEO::generate(); ?>


	
	<?php echo settings('appearance')->font_link; ?>


	
	<link rel="icon" type="image/png" href="<?php echo e(src( settings('general')->favicon )); ?>"/>

	
	<link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(url('public/js/plugins/emojipanel/dist/emojipanel.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(url('public/js/plugins/file-icon-vectors/file-icon-vectors.min.css')); ?>" />
	<link rel='stylesheet' href="<?php echo e(url('public/js/plugins/nprogress/nprogress.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(url('public/css/chatify/style.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(url('public/css/chatify/'.$dark_mode.'.mode.css')); ?>" />

	
	<?php echo $__env->make('Chatify::layouts.messengerColor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	
	<style>
		:root {
			--color-primary-h: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[0]); ?>;
			--color-primary-s: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[1]); ?>%;
			--color-primary-l: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[2]); ?>%;
		}
		html {
			font-family: <?php echo settings('appearance')->font_family ?>, sans-serif !important;
		}
		img.twemoji, img.emoji {
			height: 1.5em;
			width: 1.5em;
			margin: 5px;
			display: inline-block;
		}
		.messenger-messagingView {
			height: 100% !important;
		}
	</style>

	
	<script>
		__var_app_url        = "<?php echo e(url('/')); ?>";
		__var_app_locale     = "<?php echo e(app()->getLocale()); ?>";
		__var_rtl            = <?php echo \Illuminate\Support\Js::from(config()->get('direction') === 'ltr' ? false : true)->toHtml() ?>;
		__var_primary_color  = "<?php echo e(settings('appearance')->colors['primary']); ?>";
		__var_axios_base_url = "<?php echo e(url('/')); ?>/";
		__var_currency_code  = "<?php echo e(settings('currency')->code); ?>";
	</script>

	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="<?php echo e(url('public/js/chatify/autosize.js')); ?>"></script>
	<script defer src="<?php echo e(url('public/js/app.js')); ?>"></script>
	<script src="<?php echo e(url('node_modules/@webcomponents/webcomponentsjs/webcomponents-bundle.js')); ?>"></script>
	<script src="<?php echo e(url('public/js/plugins/twemoji/twemoji.min.js')); ?>"></script>
	<script src="<?php echo e(url('public/js/plugins/nprogress/nprogress.js')); ?>"></script>
	<script src="<?php echo e(url('public/js/plugins/emoji-mart/dist/browser.js')); ?>"></script>
	<script src="<?php echo e(url('public/js/plugins/momentjs/moment-with-locales.js')); ?>"></script>
	<script src="<?php echo e(url('public/js/plugins/momentjs/moment-timezone.min.js')); ?>"></script>
	<script src="<?php echo e(url('public/js/plugins/momentjs/moment-timezone-with-data-1970-2030.min.js')); ?>"></script>

</head><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\vendor\Chatify\layouts\headLinks.blade.php ENDPATH**/ ?>