<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'placeholder', 'model', 'options', 'isDefer', 'isAssociative', 'componentId', 'value', 'text', 'selected' => null, 'class' => null, 'show_option_insead' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'placeholder', 'model', 'options', 'isDefer', 'isAssociative', 'componentId', 'value', 'text', 'selected' => null, 'class' => null, 'show_option_insead' => false]); ?>
<?php foreach (array_filter((['label', 'placeholder', 'model', 'options', 'isDefer', 'isAssociative', 'componentId', 'value', 'text', 'selected' => null, 'class' => null, 'show_option_insead' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="relative default-select2 <?php echo e($errors->first($model) ? 'select2-custom-has-error' : ''); ?>">
    <label class="text-[0.8125rem] font-medium block mb-2 <?php echo e($errors->first($model) ? 'text-red-600 dark:text-red-500' : 'text-gray-700 dark:text-white'); ?>"><?php echo e(htmlspecialchars_decode($label)); ?></label>

    <select data-pharaonic="select2" data-component-id="<?php echo e($componentId); ?>" wire:model<?php echo e($isDefer ? '.defer' : ''); ?>="<?php echo e($model); ?>" id="select2-id-<?php echo e($model); ?>" data-placeholder="<?php echo e($placeholder); ?>" class="<?php echo e($class ? $class : 'select2'); ?>" <?php echo e($attributes); ?> data-dir="<?php echo e(config()->get('direction')); ?>" style="display: none" onload="this.style.display = 'block'">
        <option value=""></option>
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            
            <?php if(!$isAssociative): ?>
                <option value="<?php echo e($option[$value]); ?>" <?php echo e($selected && $selected === $option[$value] ? "selected" : ""); ?>><?php echo e($option[$text]); ?></option> 
            <?php elseif($show_option_insead): ?>
                <option value="<?php echo e($option); ?>" <?php echo e($selected && $selected === $option ? "selected" : ""); ?>><?php echo e($option); ?></option>
            <?php else: ?>
                <option value="<?php echo e($key); ?>" <?php echo e($selected && $selected === $key ? "selected" : ""); ?>><?php echo e($key); ?></option>
            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
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

</div>

<?php if (! $__env->hasRenderedOnce('0fc792db-8e31-446d-9d4a-022752e48a28')): $__env->markAsRenderedOnce('0fc792db-8e31-446d-9d4a-022752e48a28');
$__env->startPush('styles'); ?>

    
    <link href="<?php echo e(url('node_modules/select2/dist/css/select2.min.css')); ?>" rel="stylesheet" />

<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('f9886184-f575-4e89-bf9f-43770369dfe1')): $__env->markAsRenderedOnce('f9886184-f575-4e89-bf9f-43770369dfe1');
$__env->startPush('scripts'); ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    <script src="<?php echo e(url('node_modules/select2/dist/js/select2.min.js')); ?>"></script>

    
    <script src="<?php echo e(url('public/vendor/pharaonic/pharaonic.select2.min.js')); ?>"></script>

<?php $__env->stopPush(); endif; ?><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\components\forms\select2.blade.php ENDPATH**/ ?>