<main class="w-full">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal897c321ee9b9bb967400e80c55835c23 = $component; } ?>
<?php $component = App\View\Components\Main\Account\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main.account.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main\Account\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897c321ee9b9bb967400e80c55835c23)): ?>
<?php $component = $__componentOriginal897c321ee9b9bb967400e80c55835c23; ?>
<?php unset($__componentOriginal897c321ee9b9bb967400e80c55835c23); ?>
<?php endif; ?>
                </aside>

                
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    
                    <div class="py-6 px-4 sm:p-6 lg:pb-8">

                        
                        <div class="mb-14">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100"><?php echo e(__('messages.t_request_refund')); ?>

                            </h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_request_refund_subtitle')); ?></p>
                        </div>

                        
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                            
                            <div class="col-span-12 mb-10">
                                <div class="bg-white dark:bg-zinc-700 border-gray-200 dark:border-zinc-600 border-dashed border-2 rounded-md">
                                    <div class="py-6 px-4 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-x-8 lg:p-8">
                                        <div class="sm:flex lg:col-span-7">
                                            <div class="flex-shrink-0 w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden sm:aspect-none sm:w-28 sm:h-28">
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($item->gig->thumbnail)); ?>" alt="<?php echo e($item->gig->title); ?>" class="lazy w-full h-full object-center object-cover sm:w-full sm:h-full">
                                            </div>

                                            <div class="mt-6 sm:mt-0 sm:ltr:ml-6 sm:rtl:mr-6">
                                                <h3 class="text-base font-medium text-gray-900 dark:text-gray-100 dark:hover:text-primary-600 hover:text-primary-600">
                                                    <a href="<?php echo e(url('service', $item->gig->slug)); ?>" target="_blank"><?php echo e($item->gig->title); ?></a>
                                                </h3>
                                                <?php if($item->has('upgrades')): ?>
                                                    <div class="mt-3 text-sm text-gray-600 dark:text-gray-400">
                                                        <fieldset class="space-y-5">

                                                            <?php $__currentLoopData = $item->upgrades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upgrade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="relative flex items-start">
                                                                    <div class="flex items-center h-5">
                                                                        <input type="checkbox" class="h-4 w-4 text-gray-300 border-gray-200 dark:border-zinc-600 border-2 rounded-sm cursor-not-allowed pointer-events-none" checked disabled>
                                                                    </div>
                                                                    <div class="ltr:ml-3 rtl:mr-3 text-sm mt-[-3px]">
                                                                        <label class="font-medium text-gray-500 text-xs"><?php echo e($upgrade->title); ?></label>
                                                                        <p class="font-normal text-gray-400">
                                                                            <div class="mt-1 flex text-sm">
                                                                                <p class="text-gray-400 text-xs">+ <?php echo money($upgrade->price, settings('currency')->code, true); ?></p>
                                                            
                                                                                <?php if($upgrade->extra_days): ?>
                                                                                    <p class="ltr:ml-4 rtl:mr-4 ltr:pl-4 rtl:pr-4 ltr:border-l rtl:border-r border-gray-200 text-gray-400 text-xs">
                                                                                        <?php echo e(__('messages.t_extra_days_delivery_time_short', ['time' => delivery_time_trans($upgrade->extra_days)])); ?>

                                                                                    </p>
                                                                                <?php else: ?>
                                                                                    <p class="ltr:ml-4 rtl:mr-4 ltr:pl-4 rtl:pr-4 ltr:border-l rtl:border-r border-gray-200 text-gray-400 text-xs">
                                                                                        <?php echo e(__('messages.t_no_changes_delivery_time')); ?>

                                                                                    </p>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        </fieldset>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="mt-6 lg:mt-0 lg:col-span-5">
                                            <dl class="grid grid-cols-2 gap-x-6 text-sm">
                                                <div>
                                                    <dt class="font-medium text-gray-900 dark:text-gray-200"><?php echo e(__('messages.t_amount')); ?></dt>
                                                    <dd class="mt-3 text-gray-500 dark:text-gray-300">
                                                        <span class="block"><?php echo money($item->total_value, settings('currency')->code, true); ?></span>
                                                    </dd>
                                                </div>
                                                <div>
                                                    <dt class="font-medium text-gray-900 dark:text-gray-200"><?php echo e(__('messages.t_quantity')); ?></dt>
                                                    <dd class="mt-3 text-gray-500 dark:text-gray-300 space-y-3">
                                                        <?php echo e($item->quantity); ?>

                                                    </dd>
                                                </div>
                                            </dl>
                                        </div>
                                    </div>

                                    <div class="border-t-2 border-dashed border-gray-200 dark:border-zinc-600 py-6 px-4 sm:px-6 lg:p-8">
                                        <h4 class="sr-only">Status</h4>
                                        <p class="text-sm font-medium text-gray-900 dark:text-gray-300"><?php echo e(__('messages.t_expected_delivery_date_on_date', ['date' => format_date($item->expected_delivery_date, config('carbon-formats.F_j,_Y_h_:_i_A'))])); ?></p>
                                        <div class="mt-6" aria-hidden="true">

                                            <?php
                                                if ($item->status === 'pending') {
                                                    $width = "10%";
                                                } else if ($item->status === 'proceeded') {
                                                    $width = "50%";
                                                } else if ($item->status === 'delivered') {
                                                    $width = "100%";
                                                }
                                                    
                                            ?>

                                            <div class="bg-gray-200 dark:bg-zinc-500 rounded-full overflow-hidden">
                                                <div class="h-2 bg-primary-600 rounded-full"
                                                    style="width: <?php echo e($width); ?>;"></div>
                                            </div>
                                            <div class="hidden sm:grid grid-cols-3 text-sm font-medium text-gray-600 mt-6">
                                                <div class="text-primary-600"><?php echo e(__('messages.t_order_placed')); ?></div>
                                                <div class="text-center <?php echo e(in_array($item->status, ['proceeded', 'delivered']) ? 'text-primary-600' : ''); ?>"><?php echo e(__('messages.t_processing')); ?></div>
                                                <div class="ltr:text-right rtl:text-left <?php echo e($item->status === 'delivered' ? 'text-primary-600' : ''); ?>"><?php echo e(__('messages.t_delivered')); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-span-12">
                                <?php if (isset($component)) { $__componentOriginal2f60389a9e230471cd863683376c182f = $component; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('messages.t_reason')).'','placeholder' => ''.e(__('messages.t_enter_refund_reason')).'','model' => 'reason','rows' => 18,'icon' => 'card-text-outline']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $component = $__componentOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__componentOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
                            </div>

                            
                            <div class="col-span-12">
                                <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'request','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_request_refund')),'block' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</main>
<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\main\account\refunds\options\request.blade.php ENDPATH**/ ?>