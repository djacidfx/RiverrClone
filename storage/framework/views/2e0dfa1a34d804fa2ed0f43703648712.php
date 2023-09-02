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
                
    
    <div class="w-full mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">
    
                <div class="min-w-0 flex-1">
    
                    
                    <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        <?php echo app('translator')->get('messages.t_my_projects'); ?>
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
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        <?php echo app('translator')->get('messages.t_my_projects'); ?>
                                    </span>
                                </div>
                            </li>
            
                        </ol>
                    </div>
                    
                </div>
    
                
                <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                    
                    <?php if(settings('projects')->who_can_post === 'both' || settings('projects')->who_can_post === auth()->user()->account_type): ?>
                        <span class="">
                            <a href="<?php echo e(url('post/project')); ?>" class="inline-flex items-center rounded border border-transparent bg-primary-600 px-4 py-3 text-xs font-medium uppercase text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-opacity-25 focus:ring-primary-500 tracking-widest">
                                <?php echo app('translator')->get('messages.t_post_new_project'); ?>
                            </a>
                        </span>
                    <?php endif; ?>
        
                </div>
    
            </div>
        </div>
    </div>

    
    <?php if(session()->has('success')): ?>
        <div class="mb-6 w-full">
            <div class="rounded-sm bg-green-100 p-5">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/> </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <p class="text-sm font-medium text-green-800"><?php echo e(session()->get('success')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if(session()->has('error')): ?>
        <div class="mb-6 w-full">
            <div class="rounded-sm bg-red-100 p-5">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/> </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <p class="text-sm font-medium text-red-800"><?php echo e(session()->get('error')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    
    <?php if(session()->has('message')): ?>
        <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6 mx-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd"/></svg>
                </div>
                <div class="ltr:ml-3 rtl:mr-3 flex items-center">
                    <p class="text-xs font-bold tracking-wide text-red-700">
                        <?php echo e(session()->get('message')); ?>

                    </p>
                </div>
            </div>
        </div>  
    <?php endif; ?>

    
    <div class="w-full">
        <?php if($projects->count()): ?>
            
            
            <div class="mt-8 overflow-x-auto overflow-y-hidden sm:mt-0 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
                <table class="w-full text-left border-spacing-y-[10px] border-separate sm:mt-2">
                    <thead class="">
                        <tr class="bg-slate-200 dark:bg-zinc-600">
    
                            
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right"><?php echo app('translator')->get('messages.t_project'); ?></th>
    
                            
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md"><?php echo app('translator')->get('messages.t_status'); ?></th>
    
                            
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md"><?php echo app('translator')->get('messages.t_budget'); ?></th>
    
                            
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md"><?php echo app('translator')->get('messages.t_submitted_date'); ?></th>
    
                            
                            <th class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md"><?php echo app('translator')->get('messages.t_options'); ?></th>
    
                        </tr>
                    </thead>
                    <thead>
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="intro-x shadow-sm bg-white dark:bg-zinc-800 rounded-md h-16" wire:key="employer-projects-<?php echo e($project->uid); ?>">
    
                                
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md w-52 rtl:text-right">
                                    <div class="flex justify-center flex-col">
                                            
                                        
                                        <a href="<?php echo e(url('project/' . $project->pid . '/' . $project->slug)); ?>" class="text-black font-bold whitespace-nowrap truncate block max-w-xs hover:text-primary-600 dark:text-white text-[0.9375rem] mb-2 dark:hover:text-primary-600" title="<?php echo e($project->title); ?>">
                                            <?php echo e($project->title); ?>

                                        </a>

                                        
                                        <div class="flex items-center text-xs font-normal leading-6 text-gray-500 dark:text-zinc-300 whitespace-nowrap">

                                            
                                            <div class="flex items-center">
                                                <span>
                                                    <?php if((int)$project->bids_count <= 1): ?>
                                                        <?php echo e($project->bids_count); ?>

                                                        <span class="lowercase font-normal"><?php echo app('translator')->get('messages.t_bid'); ?></span>
                                                    <?php else: ?>
                                                        <?php echo e($project->bids_count); ?>

                                                        <span class="lowercase font-normal"><?php echo app('translator')->get('messages.t_bids'); ?></span>
                                                    <?php endif; ?>
                                                </span>
                                            </div>

                                            
                                            <span class="mx-3 h-3 w-px bg-slate-200 dark:bg-zinc-700"></span>

                                            
                                            <div class="flex items-center">
                                                <span>
                                                    <?php if((int)$project->counter_views <= 1): ?>
                                                        <?php echo e($project->counter_views); ?>

                                                        <span class="lowercase font-normal"><?php echo app('translator')->get('messages.t_click'); ?></span>
                                                    <?php else: ?>
                                                        <?php echo e($project->counter_views); ?>

                                                        <span class="lowercase font-normal"><?php echo app('translator')->get('messages.t_clicks'); ?></span>
                                                    <?php endif; ?>
                                                </span>
                                            </div>

                                            
                                            <span class="mx-3 h-3 w-px bg-slate-200 dark:bg-zinc-700"></span>

                                            
                                            <div class="flex items-center">
                                                <span>
                                                    <?php if((int)$project->counter_impressions <= 1): ?>
                                                        <?php echo e($project->counter_impressions); ?>

                                                        <span class="lowercase font-normal"><?php echo app('translator')->get('messages.t_impression'); ?></span>
                                                    <?php else: ?>
                                                        <?php echo e($project->counter_impressions); ?>

                                                        <span class="lowercase font-normal"><?php echo app('translator')->get('messages.t_impressions'); ?></span>
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                            
                                        </div>
    
                                    </div>
                                </td>

                                
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                    <?php switch($project->status):

                                        
                                        case ('active'): ?>
                                            <span class="bg-emerald-100 text-emerald-700 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_active'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('pending_approval'): ?>
                                            <span class="bg-amber-100 text-amber-700 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_pending_approval'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('pending_payment'): ?>
                                            <span class="bg-amber-100 text-amber-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_pending_payment'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('completed'): ?>
                                            <span class="bg-green-100 text-green-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_completed'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('hidden'): ?>
                                            <span class="bg-gray-100 text-gray-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_hidden'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('rejected'): ?>
                                            <span class="bg-red-100 text-red-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_needs_changes'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('under_development'): ?>
                                            <span class="bg-blue-100 text-blue-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_under_development'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('pending_final_review'): ?>
                                            <span class="bg-fuchsia-100 text-fuchsia-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_pending_final_review'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('incomplete'): ?>
                                            <span class="bg-stone-100 text-stone-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_incomplete'); ?>
                                            </span>
                                            <?php break; ?>

                                        
                                        <?php case ('closed'): ?>
                                            <span class="bg-rose-100 text-rose-600 px-4 py-2 inline-block rounded-3xl font-medium text-xs whitespace-nowrap">
                                                <?php echo app('translator')->get('messages.t_closed'); ?>
                                            </span>
                                            <?php break; ?>

                                        <?php default: ?>
                                            
                                    <?php endswitch; ?>
                                </td>

                                
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                    <div class="flex items-center justify-center">
                                        
                                        <span class="text-black dark:text-white font-semibold text-sm whitespace-nowrap">
                                            <?php echo money($project->budget_min, settings('currency')->code, true); ?>
                                        </span>

                                        
                                        <span class="text-sm text-gray-400 px-2">/</span>

                                        
                                        <span class="text-black dark:text-white font-semibold text-sm whitespace-nowrap">
                                            <?php echo money($project->budget_max, settings('currency')->code, true); ?>
                                        </span>
                                    </div>
                                </td>

                                
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                    <div class="text-gray-700 dark:text-gray-100 text-sm font-medium">
                                        <?php echo e(format_date($project->created_at)); ?>

                                    </div>
                                </td>

                                
                                <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                    <div class="flex items-center justify-center space-x-2 rtl:space-x-reverse">

                                        
                                        <?php if($project->status === 'pending_payment' && $project->subscriptions && isset($project->subscriptions[0])): ?>
                                            <div class="flex items-center justify-center">
                                                <a href="<?php echo e(url('account/projects/checkout', $project->subscriptions[0]->uid)); ?>" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-checkout-<?php echo e($project->uid); ?>">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>
                                                </a>
                                                <?php if (isset($component)) { $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $component; } ?>
<?php $component = App\View\Components\Forms\Tooltip::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tooltip-actions-checkout-'.e($project->uid).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_finish_payment'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $component = $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                        
                                        <?php if(in_array($project->status, ['pending_approval', 'pending_payment', 'active', 'rejected'])): ?>
                                            <div class="flex items-center justify-center">
                                                <a href="<?php echo e(url('account/projects/edit', $project->uid)); ?>" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-edit-<?php echo e($project->uid); ?>">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                                </a>
                                                <?php if (isset($component)) { $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $component; } ?>
<?php $component = App\View\Components\Forms\Tooltip::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tooltip-actions-edit-'.e($project->uid).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_edit_project'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $component = $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                        
                                        <?php if($project->awarded_bid && $project->awarded_bid->is_freelancer_accepted): ?>
                                            <div class="flex items-center justify-center">
                                                <a href="<?php echo e(url('account/projects/milestones', $project->uid)); ?>" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-milestones-<?php echo e($project->uid); ?>">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 12h2v4h-2z"></path><path d="M20 7V5c0-1.103-.897-2-2-2H5C3.346 3 2 4.346 2 6v12c0 2.201 1.794 3 3 3h15c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zM5 5h13v2H5a1.001 1.001 0 0 1 0-2zm15 14H5.012C4.55 18.988 4 18.805 4 18V8.815c.314.113.647.185 1 .185h15v10z"></path></svg>
                                                </a>
                                                <?php if (isset($component)) { $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $component; } ?>
<?php $component = App\View\Components\Forms\Tooltip::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tooltip-actions-milestones-'.e($project->uid).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_milestone_payments'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $component = $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                        
                                        <?php if($project->awarded_bid && $project->awarded_bid?->user): ?>
                                            <div class="flex items-center justify-center">
                                                <a href="<?php echo e(url('messages/new', $project->awarded_bid->user->username)); ?>" target="_blank" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-contact-<?php echo e($project->uid); ?>">
                                                    <svg class="w-4 h-4 text-slate-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                                                </a>
                                                <?php if (isset($component)) { $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $component; } ?>
<?php $component = App\View\Components\Forms\Tooltip::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tooltip-actions-contact-'.e($project->uid).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_contact_freelancer'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $component = $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                        
                                        <?php if(in_array($project->status, ['pending_approval', 'pending_payment', 'active', 'rejected', 'hidden'])): ?>
                                            <div class="flex items-center justify-center">
                                                <button wire:click="confirmDelete('<?php echo e($project->uid); ?>')" class="p-2 border-transparent border bg-slate-100 hover:bg-slate-200 dark:bg-zinc-700 dark:hover:bg-zinc-600 cursor-pointer rounded focus:outline-none focus:ring-0 group" data-tooltip-target="tooltip-actions-delete-<?php echo e($project->uid); ?>">
                                                    <svg class="w-4 h-4 text-red-500 dark:text-zinc-400 group-hover:text-slate-600 dark:group-hover:text-zinc-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                                </button>
                                                <?php if (isset($component)) { $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265 = $component; } ?>
<?php $component = App\View\Components\Forms\Tooltip::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tooltip-actions-delete-'.e($project->uid).'','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_delete_project'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265)): ?>
<?php $component = $__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265; ?>
<?php unset($__componentOriginalf78ffbe4a2783cbb9a46d3509ee95265); ?>
<?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                        
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </thead>
                </table>
            </div>

        <?php else: ?>

            
            <div class="border-dashed border-2 dark:border-zinc-500 rounded-md">
                <div class="py-14 px-6 text-center text-sm sm:px-14">
                    <svg class="mx-auto h-14 w-14 text-slate-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z"></path></svg>
                    <p class="mt-4 font-semibold text-slate-700 dark:text-zinc-300 text-[15px]"><?php echo e(__('messages.t_no_projects_yet')); ?></p>
                    <p class="mt-2 text-slate-500 dark:text-zinc-400 max-w-md mx-auto"><?php echo e(__('messages.t_contact_skilled_freelancers_within_mintes')); ?></p>
                </div>
            </div>

        <?php endif; ?>
    </div>

    
    <?php if($projects->hasPages()): ?>
        <div class="flex justify-center pt-12">
            <?php echo $projects->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>
    
</div><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\main\account\projects\projects.blade.php ENDPATH**/ ?>