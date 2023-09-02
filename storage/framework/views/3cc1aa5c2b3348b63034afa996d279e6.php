<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('select.option')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => $value,'label' => $label,'description' => $description,'disabled' => $disabled,'readonly' => $readonly,'option' => $option]); ?>
    <div class="flex items-center gap-x-3">
        <img src="<?php echo e(data_get($option, 'src', $src)); ?>" class="shrink-0 h-6 w-6 object-cover rounded-full">

        <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['text-sm' => (bool) $description]); ?>">
            <?php echo e($label); ?>


            <?php if($description): ?>
                <div class="text-xs text-gray-400"><?php echo e($description); ?></div>
            <?php endif; ?>
        </span>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\vendor\wireui\components\select\user-option.blade.php ENDPATH**/ ?>