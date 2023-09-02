<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(config()->get('direction')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dark' => current_theme() === 'dark']); ?>">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <?php echo SEO::generate(); ?>


        
        <link rel="icon" type="image/png" href="<?php echo e(src( settings('general')->favicon )); ?>"/>

        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        
        <?php echo \Livewire\Livewire::styles(); ?>


        
        <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">

        
		<?php echo settings('appearance')->font_link; ?>


		
        <style>
            :root {
                --color-primary  : <?php echo e(settings('appearance')->colors['primary']); ?>;
                --color-primary-h: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[0]); ?>;
                --color-primary-s: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[1]); ?>%;
                --color-primary-l: <?php echo e(hex2hsl( settings('appearance')->colors['primary'] )[2]); ?>%;
            }
            html {
                font-family: <?php echo settings('appearance')->font_family ?>, sans-serif !important;
            }
        </style>

        
        <?php echo $__env->yieldPushContent('styles'); ?>

        
        <script>
            __var_app_url        = "<?php echo e(url('/')); ?>";
            __var_app_locale     = "<?php echo e(app()->getLocale()); ?>";
            __var_rtl            = <?php echo \Illuminate\Support\Js::from(config()->get('direction') === 'ltr' ? false : true)->toHtml() ?>;
            __var_primary_color  = "<?php echo e(settings('appearance')->colors['primary']); ?>";
            __var_axios_base_url = "<?php echo e(url('/')); ?>/";
            __var_currency_code  = "<?php echo e(settings('currency')->code); ?>";
        </script>

        
        <?php if(settings('appearance')->custom_code_head_main_layout): ?>
            <?php echo settings('appearance')->custom_code_head_main_layout; ?>

        <?php endif; ?>

    </head>

    <body class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden <?php echo e(app()->getLocale() === 'ar' ? 'application-ar' : ''); ?>">

        
        <?php if (isset($component)) { $__componentOriginal10717d162484e57a570d6d2cc4597545 = $component; } ?>
<?php $component = WireUi\View\Components\Notifications::resolve(['position' => 'top-center','zIndex' => 'z-[60]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notifications'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Notifications::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10717d162484e57a570d6d2cc4597545)): ?>
<?php $component = $__componentOriginal10717d162484e57a570d6d2cc4597545; ?>
<?php unset($__componentOriginal10717d162484e57a570d6d2cc4597545); ?>
<?php endif; ?>

        
        <div class="min-h-screen flex grow bg-slate-50 dark:bg-zinc-700">
            
            <div class="hidden w-full place-items-center lg:grid">
                <div class="w-full px-2 py-40 sm:py-48 sm:px-12 flex flex-col justify-center relative bg-no-repeat bg-center bg-cover h-full" <?php if(settings('auth')->wallpaper): ?> style="background-image: url(<?php echo e(src(settings('auth')->wallpaper)); ?>)" <?php endif; ?>>
                    <span class="absolute bg-gradient-to-b from-primary-500 to-primary-400 opacity-75 inset-0 z-0"></span>

                    
                    <div class="fixed top-0 ltr:left-0 rtl:right-0 hidden p-6 lg:block lg:px-12">
                        <?php if(settings('general')->logo_dark): ?>
                            <a href="<?php echo e(url('/')); ?>" class="flex items-center">
                                <img src="<?php echo e(src(settings('general')->logo_dark)); ?>" alt="<?php echo e(settings('general')->title); ?>" style="height: <?php echo e(settings('appearance')->sizes['header_desktop_logo_height']); ?>px;">
                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(url('/')); ?>" class="flex items-center">
                                <img src="<?php echo e(src(settings('general')->logo)); ?>" alt="<?php echo e(settings('general')->title); ?>" style="height: <?php echo e(settings('appearance')->sizes['header_desktop_logo_height']); ?>px;">
                            </a>
                        <?php endif; ?>
                    </div>

                    
                    <div class="fixed bottom-0 ltr:left-0 rtl:right-0 hidden p-6 lg:block lg:px-12 text-white font-normal text-[13px]">
                        <?php echo settings('footer')->copyrights; ?>

                    </div>

                </div>
            </div>
            <main class="flex w-full flex-col items-center bg-white dark:bg-zinc-800 lg:max-w-md">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>

        
        <?php echo \Livewire\Livewire::scripts(); ?>


        
        <script >window.Wireui = {hook(hook, callback) {window.addEventListener(`wireui:${hook}`, () => callback())},dispatchHook(hook) {window.dispatchEvent(new Event(`wireui:${hook}`))}}</script>
<script src="http://localhost/wireui/assets/scripts?id=3c15fb3b36f54e2baae1e97b6eb0015e" defer ></script>

        
        <script defer src="<?php echo e(mix('js/app.js')); ?>"></script>

        
        <script src="<?php echo e(url('public/js/utils.js')); ?>"></script>

        
        <?php echo $__env->yieldPushContent('scripts'); ?>

        
        <?php if(settings('appearance')->custom_code_footer_main_layout): ?>
            <?php echo settings('appearance')->custom_code_footer_main_layout; ?>

        <?php endif; ?>

    </body>

</html><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\main\auth\layout\auth.blade.php ENDPATH**/ ?>