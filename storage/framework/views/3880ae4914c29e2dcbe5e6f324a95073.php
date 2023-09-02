<div class="w-full">

    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">
    
                <div class="min-w-0 flex-1">
    
                    
                    <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        <?php echo app('translator')->get('messages.t_edit_my_proposal'); ?>
                    </h2>
    
                    
                    <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                            
                            <li>
                                <div class="flex items-center">
                                    <a href="<?php echo e(url('/')); ?>" class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                        <?php echo app('translator')->get('messages.t_home'); ?>
                                    </a>
                                </div>
                            </li>
            
                            
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                    <a href="<?php echo e(url('seller/home')); ?>" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        <?php echo app('translator')->get('messages.t_my_dashboard'); ?>
                                    </a>
                                </div>
                            </li>
            
                            
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        <?php echo app('translator')->get('messages.t_my_bids'); ?>
                                    </span>
                                </div>
                            </li>
            
                        </ol>
                    </div>
                    
                </div>
    
                
                <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                    
                    <span class="block">
                        <a href="<?php echo e(url('seller/projects/bids')); ?>" class="inline-flex items-center rounded-sm border border-gray-300 bg-white px-4 py-2 text-[13px] font-semibold text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:bg-zinc-800 dark:border-zinc-800 dark:text-zinc-100 dark:hover:bg-zinc-900 dark:focus:ring-offset-zinc-900 dark:focus:ring-zinc-900">
                            <?php echo app('translator')->get('messages.t_back_to_proposals'); ?>
                        </a>
                    </span>

                    
                    <span class="sm:ltr:ml-3 sm:rtl:mr-3">
						<a href="<?php echo e(url('project/' . $bid->project->pid . '/' . $bid->project->slug)); ?>" target="_blank" class="inline-flex items-center rounded-sm border border-transparent bg-primary-600 px-4 py-2 text-[13px] font-semibold text-white shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
							<?php echo app('translator')->get('messages.t_view_project'); ?>
						</a>
					</span>
        
                </div>
    
            </div>
        </div>
    </div>

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
        <div class="grid grid-cols-1 <?php echo e(settings('projects')->is_premium_bidding && $can_promote ? 'lg:grid-cols-2 lg:gap-x-5' : ''); ?> gap-y-6">

            
            <div class="bg-white shadow-sm border border-gray-200 px-9 py-10 rounded-lg dark:bg-zinc-800 dark:border-transparent">
                <h4 class="text-base text-zinc-700 font-bold mb-8 dark:text-zinc-100"><?php echo app('translator')->get('messages.t_my_proposal'); ?></h4>
                <div class="grid grid-cols-12 md:gap-x-6 gap-y-6 py-2">
		
                    
                    <div class="col-span-12 md:col-span-6">
                        <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_bid_amount')),'placeholder' => '0.00','model' => 'bid_amount','suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(settings('currency')->code),'hint' => ''.e(money(convertToNumber($bid->project->budget_min),settings('currency')->code, true)).' / '.e(money(convertToNumber($bid->project->budget_max),settings('currency')->code, true)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12 md:col-span-6">
                        <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['disabled' => true,'readonly' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_paid_to_you')),'placeholder' => '0.00','model' => 'bid_amount_paid','suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(settings('currency')->code),'hint' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_bid_paid_to_you_tooltip'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12">
                        <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_this_project_will_be_delivered_in')),'model' => 'bid_days','suffix' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(strtoupper(__('messages.t_days')))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
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
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_describe_ur_proposal')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_describe_ur_proposal_placeholder')),'model' => 'bid_description','rows' => 8,'svg_icon' => '<svg class="w-5 h-5 text-gray-500" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>']); ?>
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
<?php $component->withAttributes(['action' => 'update','text' => ''.e(__('messages.t_update')).'','block' => 1]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
                    </div>

                </div>
            </div>

            
            <?php if(settings('projects')->is_premium_bidding && $plans && $can_promote): ?>
                <div class="bg-white shadow-sm border border-gray-200 px-9 py-10 rounded-lg dark:bg-zinc-800 dark:border-transparent">
                    <fieldset>
                        
                        
                        <legend class="text-base text-zinc-700 font-bold mb-8 dark:text-zinc-100"><?php echo app('translator')->get('messages.t_optional_upgrades'); ?></legend>

                        <div class="space-y-2 divide-y divide-gray-200 dark:divide-zinc-700 w-full">
                            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                
                                <?php if($plan->plan_type === 'sponsored' && !$bid->is_sponsored): ?>
                                    <div class="relative flex items-center w-full py-4">
                                        <div class="flex items-center h-5">
                                            <input id="bid-promotion-plan-<?php echo e($plan->uid); ?>" name="bidding_selected_plans" wire:model.defer="bid_<?php echo e($plan->plan_type); ?>" value="<?php echo e($plan->uid); ?>" type="checkbox" class="focus:ring-transparent focus:outline-none ring-offset-0 focus:shadow-none h-5 w-5 text-primary-600 border-gray-300 border-2 rounded-sm cursor-pointer dark:bg-transparent dark:border-zinc-600 dark:text-zinc-500 dark:focus:ring-offset-zinc-500">
                                        </div>
                                        <div class="ltr:ml-4 rtl:mr-4 text-sm w-full">
                                            <label for="bid-promotion-plan-<?php echo e($plan->uid); ?>" class="font-medium text-gray-700 flex items-center justify-between">
                
                                                
                                                <div class="inline-flex px-2 py-1 rounded-full text-xs font-medium tracking-widest uppercase min-w-[120px] justify-center" style="color: <?php echo e($plan->badge_text_color); ?>;background-color: <?php echo e($plan->badge_bg_color); ?>;">
                                                    <?php echo app('translator')->get('messages.t_' . $plan->plan_type); ?>
                                                </div>
                                                
                                                
                                                <span class="text-sm font-semibold text-zinc-700 bg-gray-100 rounded-md px-3 py-2 dark:bg-zinc-900 dark:text-zinc-200"><?php echo money($plan->price, settings('currency')->code, true); ?></span>
                
                                            </label>
                
                                            
                                            <p class="text-gray-600 dark:text-zinc-300 leading-relaxed mt-2">
                                                <?php echo e(__('messages.t_bidding_plan_' . $plan->plan_type . '_subtitle')); ?>

                                            </p>
                                            
                                        </div>
                                    </div>
                                <?php endif; ?>

                                
                                <?php if($plan->plan_type === 'sealed' && !$bid->is_sealed): ?>
                                    <div class="relative flex items-center w-full py-4">
                                        <div class="flex items-center h-5">
                                            <input id="bid-promotion-plan-<?php echo e($plan->uid); ?>" name="bidding_selected_plans" wire:model.defer="bid_<?php echo e($plan->plan_type); ?>" value="<?php echo e($plan->uid); ?>" type="checkbox" class="focus:ring-transparent focus:outline-none ring-offset-0 focus:shadow-none h-5 w-5 text-primary-600 border-gray-300 border-2 rounded-sm cursor-pointer dark:bg-transparent dark:border-zinc-600 dark:text-zinc-500 dark:focus:ring-offset-zinc-500">
                                        </div>
                                        <div class="ltr:ml-4 rtl:mr-4 text-sm w-full">
                                            <label for="bid-promotion-plan-<?php echo e($plan->uid); ?>" class="font-medium text-gray-700 flex items-center justify-between">
                
                                                
                                                <div class="inline-flex px-2 py-1 rounded-full text-xs font-medium tracking-widest uppercase min-w-[120px] justify-center" style="color: <?php echo e($plan->badge_text_color); ?>;background-color: <?php echo e($plan->badge_bg_color); ?>;">
                                                    <?php echo app('translator')->get('messages.t_' . $plan->plan_type); ?>
                                                </div>
                                                
                                                
                                                <span class="text-sm font-semibold text-zinc-700 bg-gray-100 rounded-md px-3 py-2 dark:bg-zinc-900 dark:text-zinc-200"><?php echo money($plan->price, settings('currency')->code, true); ?></span>
                
                                            </label>
                
                                            
                                            <p class="text-gray-600 dark:text-zinc-300 leading-relaxed mt-2">
                                                <?php echo e(__('messages.t_bidding_plan_' . $plan->plan_type . '_subtitle')); ?>

                                            </p>
                                            
                                        </div>
                                    </div>
                                <?php endif; ?>

                                
                                <?php if($plan->plan_type === 'highlight' && !$bid->is_highlight): ?>
                                    <div class="relative flex items-center w-full py-4">
                                        <div class="flex items-center h-5">
                                            <input id="bid-promotion-plan-<?php echo e($plan->uid); ?>" name="bidding_selected_plans" wire:model.defer="bid_<?php echo e($plan->plan_type); ?>" value="<?php echo e($plan->uid); ?>" type="checkbox" class="focus:ring-transparent focus:outline-none ring-offset-0 focus:shadow-none h-5 w-5 text-primary-600 border-gray-300 border-2 rounded-sm cursor-pointer dark:bg-transparent dark:border-zinc-600 dark:text-zinc-500 dark:focus:ring-offset-zinc-500">
                                        </div>
                                        <div class="ltr:ml-4 rtl:mr-4 text-sm w-full">
                                            <label for="bid-promotion-plan-<?php echo e($plan->uid); ?>" class="font-medium text-gray-700 flex items-center justify-between">
                
                                                
                                                <div class="inline-flex px-2 py-1 rounded-full text-xs font-medium tracking-widest uppercase min-w-[120px] justify-center" style="color: <?php echo e($plan->badge_text_color); ?>;background-color: <?php echo e($plan->badge_bg_color); ?>;">
                                                    <?php echo app('translator')->get('messages.t_' . $plan->plan_type); ?>
                                                </div>
                                                
                                                
                                                <span class="text-sm font-semibold text-zinc-700 bg-gray-100 rounded-md px-3 py-2 dark:bg-zinc-900 dark:text-zinc-200"><?php echo money($plan->price, settings('currency')->code, true); ?></span>
                
                                            </label>
                
                                            
                                            <p class="text-gray-600 dark:text-zinc-300 leading-relaxed mt-2">
                                                <?php echo e(__('messages.t_bidding_plan_' . $plan->plan_type . '_subtitle')); ?>

                                            </p>
                                            
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                    </fieldset>
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>

<?php $__env->startPush('scripts'); ?>
    <script>

        // Get bid amount element
        const target_bid_amount      = document.getElementById('text-input-component-id-bid_amount');

        // Get bid amount paid
        const target_bid_amount_paid = document.getElementById('text-input-component-id-bid_amount_paid');

        // Calculate net profit
        const calculateProfit = function(e) {

            // Get amount
            const amount     = e.target.value;

            // Set type
            const type       = "<?php echo e(settings('projects')->commission_type); ?>";

            // Set commission
            const commission = <?php echo e(settings('projects')->commission_from_freelancer); ?>;

            // Check if number
            if (!isNaN(amount)) {
                
                // Check fixed
                if (type === 'fixed') {
                    
                    // Get value
                    const value = amount - commission;

                    // Check value
                    if (value % 1 != 0) {
                        
                        // Set value
                        target_bid_amount_paid.value = (Math.round(value * 100) / 100).toFixed(2);
                        
                    } else {
                        
                        // Set value
                        target_bid_amount_paid.value = value;

                    }

                }

                // Check percentage
                if (type === 'percentage') {
                
                    // Get value
                    const value = (amount * commission) / 100;

                    // Check value
                    if ((amount - value) % 1 != 0) {
                        
                        // Set value
                        target_bid_amount_paid.value = (Math.round((amount - value) * 100) / 100).toFixed(2);
                        
                    } else {
                        
                        // Set value
                        target_bid_amount_paid.value = amount - value;
                        
                    }

                }

            }

        }

        // Fire event
        target_bid_amount.addEventListener('input', calculateProfit);

    </script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\main\seller\projects\bids\options\edit.blade.php ENDPATH**/ ?>