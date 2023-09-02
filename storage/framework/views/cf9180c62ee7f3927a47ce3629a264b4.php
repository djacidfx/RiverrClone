<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label' => null, 'placeholder' => null, 'model', 'type' => 'text', 'icon' => null, 'svg_icon' => null, 'suffix' => false, 'hint' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label' => null, 'placeholder' => null, 'model', 'type' => 'text', 'icon' => null, 'svg_icon' => null, 'suffix' => false, 'hint' => null]); ?>
<?php foreach (array_filter((['label' => null, 'placeholder' => null, 'model', 'type' => 'text', 'icon' => null, 'svg_icon' => null, 'suffix' => false, 'hint' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>

    
    <?php if($label): ?>
        <label for="text-input-component-id-<?php echo e($model); ?>" class="block text-sm font-medium tracking-wide <?php echo e($errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-600 dark:text-white'); ?>"><?php echo e(htmlspecialchars_decode($label)); ?></label>
    <?php endif; ?>
    
    
    <div class="<?php echo e($label ? 'mt-2.5' : ''); ?> relative">

        
        <input 
            type="<?php echo e($type); ?>" 
            <?php if($placeholder): ?> placeholder="<?php echo e(htmlspecialchars_decode($placeholder)); ?>" <?php endif; ?>
            wire:model.defer="<?php echo e($model); ?>" 
            id="text-input-component-id-<?php echo e($model); ?>" 
            <?php echo e($type === 'password' ? 'readonly' : ''); ?> 
            onfocus="<?php echo e($type === 'password' ? "this.removeAttribute('readonly');" : ""); ?>" 
            class="disabled:cursor-not-allowed focus:!ring-1 block w-full ltr:pr-10 ltr:pl-4 rtl:pl-10 rtl:!pr-4 py-3.5 placeholder:font-normal placeholder:text-[13px] dark:placeholder-zinc-300 text-sm font-medium text-zinc-800 dark:text-white rounded-md dark:bg-transparent <?php echo e($errors->first($model) ? 'focus:!ring-red-600 focus:!border-red-600 border-red-500' : 'focus:!ring-primary-600 focus:!border-primary-600 border-gray-300 dark:border-zinc-500'); ?>" 
            <?php echo e($attributes); ?> />

        <?php if($suffix): ?>
            
            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-3 rtl:pl-3 flex items-center pointer-events-none text-sm font-medium tracking-wider">
                <span class="<?php echo e($errors->first($model) ? 'text-red-400' : 'text-gray-400'); ?>"><?php echo e($suffix); ?></span>
            </div>
        <?php elseif($icon): ?>
            
            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-4 rtl:pl-4 flex items-center pointer-events-none">
                <i class="mdi mdi-<?php echo e($icon); ?> <?php echo e($errors->first($model) ? 'text-red-400' : 'text-gray-400'); ?>"></i>
            </div>
        <?php elseif($svg_icon): ?>
            
            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 ltr:pr-4 rtl:pl-4 flex items-center pointer-events-none">
                <?php echo $svg_icon; ?>

            </div>
        <?php endif; ?>

    </div>

    
    <?php if($hint): ?>
        <p class="mt-1 text-xs text-gray-400 dark:text-gray-200"><?php echo $hint; ?></p>
    <?php endif; ?>

    
    <?php $__errorArgs = [$model];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first($model)); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\components\forms\text-input.blade.php ENDPATH**/ ?>