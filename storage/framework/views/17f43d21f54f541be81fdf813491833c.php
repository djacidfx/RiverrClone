<div class="flex flex-col rounded-lg shadow bg-white overflow-hidden">

    
    <div wire:loading wire:loading.block wire:target="approve">
        <div class="absolute w-full h-full flex items-center justify-center bg-black bg-opacity-50 z-50 rounded-lg">
            <div class="lds-ripple"><div></div><div></div></div>
        </div>
    </div>
   
    
    <div class="py-4 px-5 lg:px-6 w-full sm:flex sm:justify-between sm:items-center">
        <div class="flex justify-center sm:justify-left">
            <h3 class="inline-flex items-center font-semibold">
                <span><?php echo app('translator')->get('messages.t_transactions_history'); ?></span>
            </h3>
        </div>
    </div>
    
    
    <div class="grow w-full">
        <div class="overflow-x-auto min-w-full bg-white">
            <table class="min-w-full text-sm align-middle whitespace-nowrap">
                
                <thead>
                    <tr>
                        <th class="px-7 py-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest ltr:text-left rtl:text-right">
                            <?php echo app('translator')->get('messages.t_user'); ?>
                        </th>
                        <th class="px-7 py-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest ltr:text-left rtl:text-right">
                            <?php echo app('translator')->get('messages.t_payment_method'); ?>
                        </th>
                        <th class="px-7 py-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest ltr:text-left rtl:text-right">
                            <?php echo app('translator')->get('messages.t_payment_id'); ?>
                        </th>
                        <th class="p-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest text-center">
                            <?php echo app('translator')->get('messages.t_amount'); ?>
                        </th>
                        <th class="p-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest text-center">
                            <?php echo app('translator')->get('messages.t_date'); ?>
                        </th>
                        <th class="p-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest text-center">
                            <?php echo app('translator')->get('messages.t_status'); ?>
                        </th>
                        <th class="p-3 text-slate-600 bg-slate-100 font-bold text-[10px] uppercase tracking-widest text-center">
                            <?php echo app('translator')->get('messages.t_options'); ?>
                        </th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr wire:key="users-transactions-<?php echo e($t->uid); ?>">

                            
                            <td class="px-7 py-3 ltr:text-left rtl:text-right">
                                <a href="<?php echo e(url('profile', $t->user->username)); ?>" target="_blank" class="flex items-center">
                                    <div class="w-8 h-8">
                                        <img class="w-full h-full rounded object-cover lazy" src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($t->user->avatar)); ?>" alt="<?php echo e($t->user->username); ?>" />
                                    </div>
                                    <div class="ltr:pl-4 rtl:pr-4">
                                        <p class="font-medium text-xs flex items-center">
                                            <?php echo e($t->user->username); ?>

                                            <?php if($t->user->status === 'verified'): ?>
                                                <img data-tooltip-target="tooltip-account-verified-<?php echo e($t->id); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-3.5 w-3.5 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg')); ?>" alt="<?php echo e(__('messages.t_account_verified')); ?>">
                                                <div id="tooltip-account-verified-<?php echo e($t->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    <?php echo e(__('messages.t_account_verified')); ?>

                                                </div>
                                            <?php endif; ?>
                                        </p>
                                        <p class="text-[11px] leading-3 text-gray-600 pt-2"><?php echo e($t->user->email); ?></p>
                                    </div>
                                </a>
                            </td>

                            
                            <td class="px-7 py-3 ltr:text-left rtl:text-right">
                                <span class="text-gray-500 font-semibold text-[13px]">
                                    <?php echo e(settings($t->payment_method)?->name); ?>

                                </span>
                            </td>

                            
                            <td class="px-7 py-3 ltr:text-left rtl:text-right">
                                <span class="text-gray-500 font-semibold text-[13px]">
                                    <?php echo e($t->transaction_id); ?>

                                </span>
                            </td>

                            
                            <td class="p-3 text-center">
                                <span class="text-gray-500 font-semibold text-[13px]">
                                    <?php echo money($t->amount_total, settings('currency')->code, true); ?>    
                                </span>
                            </td>

                            
                            <td class="p-3 text-center font-bold">
                                <span class="text-gray-500 font-semibold text-[13px]">
                                    <?php echo e(format_date($t->created_at, 'ago')); ?>

                                </span>
                            </td>

                            
                            <td class="p-3 text-center">
                                <?php switch($t->status):
                                    case ('paid'): ?>
                                        <span class="px-4 py-1 text-xs rounded-2xl font-semibold text-green-500 bg-green-50">
                                            <?php echo e(__('messages.t_paid')); ?>

                                        </span>
                                        <?php break; ?>
                                    <?php case ('pending'): ?>
                                        <span class="px-4 py-1 text-xs rounded-2xl font-semibold text-amber-500 bg-amber-50">
                                            <?php echo e(__('messages.t_pending')); ?>

                                        </span>
                                        <?php break; ?>
                                    <?php case ('rejected'): ?>
                                        <span class="px-4 py-1 text-xs rounded-2xl font-semibold text-red-500 bg-red-50">
                                            <?php echo e(__('messages.t_rejected')); ?>

                                        </span>
                                        <?php break; ?>
                                    <?php default: ?>
                                        
                                <?php endswitch; ?>
                            </td>
                            
                            
                            <td class="p-3 text-center">
                                <?php if($t->status === 'pending'): ?>
                                    
                                    
                                    <div class="space-x-4 rtl:space-x-reverse">

                                        
                                        <button type="button" wire:click="approve('<?php echo e($t->id); ?>')" data-tooltip-target="tooltip-action-approve-<?php echo e($t->id); ?>" class="inline-flex justify-center items-center border font-semibold focus:outline-none w-8 h-8 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                                            <svg class="w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path></svg>
                                        </button>
                                        <div id="tooltip-action-approve-<?php echo e($t->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            <?php echo e(__('messages.t_approve_payment')); ?>

                                        </div>
        
                                        
                                        <button type="button" id="modal-reject-payment-button-<?php echo e($t->id); ?>" data-tooltip-target="tooltip-action-reject-<?php echo e($t->id); ?>" class="inline-flex justify-center items-center border font-semibold focus:outline-none w-8 h-8 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                                            <svg class="w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
                                        </button>
                                        <div id="tooltip-action-reject-<?php echo e($t->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            <?php echo e(__('messages.t_reject_payment')); ?>

                                        </div>

                                    </div>

                                    
                                    <?php if (isset($component)) { $__componentOriginal626cd0ad8c496eb8a190505b15f0d732 = $component; } ?>
<?php $component = App\View\Components\Forms\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modal-reject-payment-container-'.e($t->id).'','target' => 'modal-reject-payment-button-'.e($t->id).'','uid' => 'modal_'.e(uid()).'','placement' => 'center-center','size' => 'max-w-md']); ?>

                                        
                                         <?php $__env->slot('title', null, []); ?> <?php echo e(__('messages.t_rejection_reason')); ?> <?php $__env->endSlot(); ?>

                                        
                                         <?php $__env->slot('content', null, []); ?> 

                                                
                                                <div class="w-fill mb-6">
                                                    
                                                    <div class="relative w-full shadow-sm">
                                    
                                                        
                                                        <textarea wire:model.defer="rejection_reason" id="bid-report-description-input" class="<?php echo e($errors->first('rejection_reason') ? 'focus:ring-red-600 focus:border-red-600 border-red-500' : 'focus:ring-primary-600 focus:border-primary-600 border-gray-300'); ?> border text-gray-900 text-sm rounded-lg font-medium block w-full ltr:pr-12 rtl:pl-12 p-4  dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 placeholder:font-normal" rows="8" placeholder="<?php echo e(__('messages.t_enter_rejection_reason')); ?>"></textarea>
                                    
                                                        
                                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3 font-bold text-xs tracking-widest dark:text-gray-300 uppercase">
                                                            <svg class="w-5 h-5 text-gray-500" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z"></path><path d="M11 6h2v8h-2zm0 10h2v2h-2z"></path></svg>
                                                        </div>
                                    
                                                    </div>
                                    
                                                    
                                                    <?php $__errorArgs = ['rejection_reason'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="mt-1.5 text-[13px] tracking-wide text-red-600 font-medium ltr:pl-1 rtl:pr-1">
                                                            <?php echo e($errors->first('rejection_reason')); ?>

                                                        </p>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>

                                                
                                                <div>
                                                    <button 
                                                        wire:click="reject(<?php echo e($t->id); ?>)"
                                                        wire:loading.class="border-gray-200 bg-gray-200 text-gray-700 cursor-not-allowed"
                                                        wire:loading.class.remove="border-red-200 bg-red-200 text-red-700 hover:text-red-700 hover:bg-red-300 hover:border-red-300 active:bg-red-200 focus:ring-red-500"
                                                        wire:loading.attr="disabled" 
                                                        type="button" 
                                                        class="w-full inline-flex text-xs justify-center items-center border font-semibold focus:outline-none px-3 py-2 leading-5 rounded border-red-200 bg-red-200 text-red-700 hover:text-red-700 hover:bg-red-300 hover:border-red-300 active:bg-red-200 focus:ring-red-500 focus:ring focus:ring-opacity-50">

                                                        
                                                        <div wire:loading wire:target="reject(<?php echo e($t->id); ?>)">
                                                            <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                            </svg>
                                                        </div>

                                                        
                                                        <div wire:loading.remove wire:target="reject(<?php echo e($t->id); ?>)">
                                                            <?php echo app('translator')->get('messages.t_reject_payment'); ?>
                                                        </div>

                                                    </button>
                                                </div>

                                         <?php $__env->endSlot(); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732)): ?>
<?php $component = $__componentOriginal626cd0ad8c496eb8a190505b15f0d732; ?>
<?php unset($__componentOriginal626cd0ad8c496eb8a190505b15f0d732); ?>
<?php endif; ?>

                                <?php endif; ?>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>

    
    <?php if($transactions->hasPages()): ?>
        <div class="px-4 py-5 sm:px-6 flex justify-center">
            <?php echo $transactions->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>

</div><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\admin\users\transactions\transactions.blade.php ENDPATH**/ ?>