<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['margin' => false, 'rootClass' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['margin' => false, 'rootClass' => null]); ?>
<?php foreach (array_filter((['margin' => false, 'rootClass' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="fixed inset-0 z-20 flex items-end sm:z-10 sm:absolute sm:inset-auto transition-all ease-linear duration-150 <?php echo e($rootClass); ?>"
    style="display: none"
    x-cloak
    x-show="popover"
    x-ref="popover"
    x-on:click.outside="close"
    x-on:keydown.escape.window="handleEscape">
    <div class="fixed inset-0 bg-secondary-400 bg-opacity-60 transition-opacity sm:hidden dark:bg-secondary-700 dark:bg-opacity-60"
        x-show="popover"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-on:click="close"
        aria-hidden="true">
    </div>

    <div
        <?php echo e($attributes->class([
            'w-full rounded-t-md sm:rounded-xl border border-secondary-200 bg-white shadow-lg',
            'dark:bg-secondary-800 dark:border-secondary-600 transition-all relative overflow-hidden',
        ])); ?>

        x-show="popover"
        tabindex="-1"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\vendor\wireui\components\parts\popover.blade.php ENDPATH**/ ?>