<main class="w-full" x-data>
    <div class="px-4 sm:px-6 lg:px-8">

        
        <?php if(session()->has('success')): ?>
            <div class="p-4 relative flex bg-emerald-50 dark:bg-emerald-500 text-emerald-500 dark:text-emerald-50 text-xs font-semibold rounded-lg mb-4">
                <div class="flex items-center">
                    <span class="text-2xl text-emerald-400 dark:text-emerald-50">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <div class="ltr:ml-2 rtl:mr-2"><?php echo e(session()->get('success')); ?></div>
                </div>
            </div>
        <?php endif; ?>

        
        <?php if(session()->has('error')): ?>
            <div class="p-4 relative flex bg-red-50 dark:bg-red-500 text-red-500 dark:text-red-50 text-xs font-semibold rounded-lg mb-4">
                <div class="flex items-center">
                    <span class="text-2xl text-red-400 dark:text-red-50">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                    </span>
                    <div class="ltr:ml-2 rtl:mr-2"><?php echo e(session()->get('error')); ?></div>
                </div>
            </div>
        <?php endif; ?>

        
        <?php if(session()->has('warning')): ?>
            <div class="p-4 relative flex bg-amber-50 dark:bg-amber-500 text-amber-500 dark:text-amber-50 text-xs font-semibold rounded-lg mb-4">
                <div class="flex items-center">
                    <span class="text-2xl text-amber-400 dark:text-amber-50">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                    </span>
                    <div class="ltr:ml-2 rtl:mr-2"><?php echo e(session()->get('warning')); ?></div>
                </div>
            </div>
        <?php endif; ?>

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

                    
                    <div class="w-full">

                        
                        <div class="mb-14 py-6 px-4 sm:p-4">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100"><?php echo e(__('messages.t_deposit_history')); ?></h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_deposit_history_subtitle')); ?></p>
                        </div>
                        
                        <div class="bg-white dark:bg-zinc-800 overflow-y-auto border !border-t-0 !border-b-0 dark:border-zinc-600">
                            <table class="w-full whitespace-nowrap old-tables">
                                <thead class="bg-gray-100 dark:bg-zinc-700">
                                    <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white">
                                        <th class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider text-center"><?php echo e(__('messages.t_date')); ?></th>
                                        <th class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider ltr:text-left ltr:pl-4 rtl:text-right rtl:pr-4"><?php echo e(__('messages.t_payment_method')); ?></th>
                                        <th class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider text-center"><?php echo e(__('messages.t_amount')); ?></th>
                                        <th class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider text-center"><?php echo e(__('messages.t_status')); ?></th>
                                    </tr>
                                </thead>
                                <tbody class="w-full">
                    
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="focus:outline-none text-sm leading-none text-gray-800 bg-white dark:bg-zinc-600 hover:bg-gray-100 dark:hover:bg-zinc-700 border-b border-t border-gray-100 dark:border-zinc-700/40" wire:key="transactions-<?php echo e($t->id); ?>">

                                            
                                            <td class="ltr:pl-4 rtl:pr-4">

                                                
                                                <?php
                                                    $formatted_date = \Carbon\Carbon::create($t->created_at);
                                                ?>

                                                <div class="grid items-center text-center justify-center" data-tooltip-target="tooltip-year-date-<?php echo e($t->id); ?>">
                                                    <span class="text-base font-medium text-gray-500 dark:text-gray-200 mb-2">
                                                        <?php echo e($formatted_date->format('d')); ?>

                                                    </span>
                                                    <span class="text-[10px] text-gray-400 dark:text-gray-300 uppercase tracking-widest">
                                                        <?php echo e($formatted_date->format('F')); ?>

                                                    </span>
                                                </div>

                                                <div id="tooltip-year-date-<?php echo e($t->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-semibold text-white bg-gray-900 rounded-md shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    <?php echo e($formatted_date->format('Y')); ?>

                                                </div>

                                            </td>

                                            
                                            <td>
                                                <div class="flex items-center justify-between p-4">
                                                    <div class="flex items-center">

                                                        
                                                        <?php if(settings($t->payment_method)->logo): ?>
                                                            <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src( settings($t->payment_method)->logo )); ?>" alt="<?php echo e(settings($t->payment_method)->name); ?>" class="lazy max-w-[50px]">
                                                        <?php endif; ?>

                                                        <div class="ml-3 rtl:mr-3">
                                                            <div class="flex items-center">
                                                                <div class="text-gray-700 dark:text-gray-100 font-bold text-sm">
                                                                    <?php echo e(settings($t->payment_method)->name); ?>

                                                                </div>
                                                            </div>
                                                            <span class="text-gray-500 dark:text-gray-300 font-medium text-xs mt-2 block"><?php echo e($t->transaction_id); ?></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>

                                            
                                            <td class="text-center font-black text-gray-600 dark:text-white text-[13px]">
                                                <?php echo e(_price($t->amount_net)); ?>

                                            </td>

                                            
                                            <td class="text-center px-4">
                                                <?php switch($t->status):

                                                    
                                                    case ('paid'): ?>
                                                        <div class="rounded-sm px-1 py-2 bg-green-50 text-green-400 text-xs font-semibold">
                                                            <?php echo e(__('messages.t_paid')); ?>

                                                        </div>
                                                        <?php break; ?>

                                                    <?php case ('pending'): ?>
                                                        <div class="rounded-sm px-1 py-2 bg-amber-50 text-amber-400 text-xs font-semibold">
                                                            <?php echo e(__('messages.t_pending')); ?>

                                                        </div>
                                                        <?php break; ?>

                                                    <?php case ('rejected'): ?>
                                                        <div class="rounded-sm px-1 py-2 bg-red-50 text-red-400 text-xs font-semibold">
                                                            <?php echo e(__('messages.t_rejected')); ?>

                                                        </div>
                                                        <?php break; ?>
                                                    <?php default: ?>
                                                        
                                                <?php endswitch; ?>
                                            </td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    
                        
                        <?php if($transactions->hasPages()): ?>
                            <div class="bg-gray-100 px-4 py-5 sm:px-6 rounded-bl-lg rounded-br-lg flex justify-center border-t-0 border-r border-l border-b">
                                <?php echo $transactions->links('pagination::tailwind'); ?>

                            </div>
                        <?php endif; ?>

                    </div>

                </div>

            </div>
        </div>
    </div>
</main><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\main\account\deposit\history.blade.php ENDPATH**/ ?>