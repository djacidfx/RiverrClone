<main class="w-full">

    
    <div class="fixed top-0 left-0 z-50 bg-black w-full h-full opacity-80" wire:loading wire:target="handle">
        <div class="w-full h-full flex items-center justify-center">
            <div role="status">
                <svg aria-hidden="true" class="mx-auto w-12 h-12 text-gray-500 animate-spin dark:text-gray-600 fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                <span class="text-xs font-medium tracking-wider text-white mt-4 block"><?php echo e(__('messages.t_please_wait_dots')); ?></span>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 lg:px-8" id="scroll-to-deposit-container">
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

                
                <div class="lg:col-span-9">
                    <div class="max-w-lg mx-auto py-12">

                        
                        <?php if($isSucceeded): ?>
                            <div class="text-center">

                                
                                <div class="h-28 w-28 border-2 border-green-100 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                                    <svg class="mx-auto h-9 w-9 text-green-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="9 11 12 14 20 6"></polyline><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path></svg>
                                </div>

                                
                                <h2 class="mt-4 text-base font-bold text-gray-700"><?php echo e(__('messages.t_deposit_successful')); ?></h2>
                                <p class="mt-1 text-sm text-gray-400"><?php echo e(__('messages.t_deposit_success_subtitle')); ?></p>

                                
                                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-4 mt-14">

                                    
                                    <div class="w-full">
                                        <a href="<?php echo e(url('/')); ?>" class="w-full justify-center text-gray-900 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-bold uppercase tracking-widest rounded-md text-[10px] px-5 py-4 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mb-2">
                                            <?php echo app('translator')->get('messages.t_go_shopping'); ?>
                                        </a>
                                    </div>

                                    
                                    <div class="w-full">
                                        <a href="<?php echo e(url('account/deposit/history')); ?>" class="w-full justify-center text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-600 font-bold uppercase tracking-widest rounded-md text-[10px] px-5 py-4 text-center inline-flex items-center dark:focus:ring-primary-500 mr-2 mb-2">
                                            <?php echo app('translator')->get('messages.t_view_history'); ?>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        <?php endif; ?>

                        
                        <?php if(!$isSucceeded): ?>
                            
                            
                            <div class="text-center">

                                
                                <div class="h-28 w-28 border-2 border-gray-100 dark:border-zinc-600 bg-gray-50 dark:bg-zinc-700 rounded-full flex items-center justify-center mx-auto">
                                    <svg class="mx-auto h-8 w-8 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M1023.65 290.48c.464-23.664-5.904-78.848-77.84-98.064L223.394 47.794c-52.944 0-96 43.055-96 96v128.704l-32-.08c-52.752.223-95.632 43.15-95.632 95.967v511.808c0 52.945 43.056 96 96 96h832.464c52.945 0 96-43.055 96-96zM191.393 143.793c0-16.72 12.88-30.463 29.216-31.871l706 142.88c.256.128-5.248 17.935-30.88 17.6H191.393zM960.24 880.21c0 17.664-14.336 32-32 32H95.76c-17.664 0-32-14.336-32-32V368.386c0-17.664 14.336-32 32-32h800.064c31.408 0 64.4-10.704 64.4-31.888V880.21h.016zM191.824 560.498c-35.344 0-64 28.656-64 64s28.656 64 64 64 64-28.656 64-64-28.656-64-64-64z"></path></svg>
                                </div>

                                
                                <h2 class="mt-4 text-base font-bold text-gray-700 dark:text-gray-100"><?php echo e(__('messages.t_add_funds')); ?></h2>
                                <p class="mt-1 text-sm text-gray-400 dark:text-gray-300"><?php echo e(__('messages.t_add_funds_subtitle')); ?></p>

                                
                                <a rel="nofollow" class="text-[13px] font-medium mt-4 text-primary-600 hover:underline dark:text-primary-500" href="<?php echo e(url('account/deposit/history')); ?>">
                                    <?php echo app('translator')->get('messages.t_transactions_history'); ?>
                                </a>

                            </div>

                            
                            <?php if(is_null($selected)): ?>
                                <div class="relative grid grid-cols-3 sm:gap-4 gap-y-4 mt-14" wire:key="deposit-key-select">

                                    
                                    <div class="bg-black dark:bg-zinc-300 dark:bg-opacity-20 absolute w-full h-full rounded-lg bg-opacity-60" wire:loading>
                                        <div role="status" class="flex items-center justify-center w-full h-full">
                                            <svg aria-hidden="true" class="mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-100 fill-primary-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                            </svg>
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>

                                    
                                    <?php if(settings('stripe')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'stripe')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'stripe' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('stripe')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('stripe')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('stripe')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('stripe')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('paypal')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'paypal')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'paypal' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('paypal')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('paypal')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('paypal')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('paypal')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('offline_payment')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'offline_payment')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'offline_payment' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('offline_payment')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('offline_payment')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('offline_payment')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('offline_payment')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('flutterwave')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'flutterwave')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'flutterwave' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('flutterwave')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('flutterwave')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('flutterwave')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('flutterwave')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('paystack')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'paystack')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'paystack' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('paystack')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('paystack')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('paystack')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('paystack')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('cashfree')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'cashfree')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'cashfree' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('cashfree')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('cashfree')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('cashfree')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('cashfree')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('mollie')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'mollie')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'mollie' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('mollie')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('mollie')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('mollie')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('mollie')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('xendit')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'xendit')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'xendit' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('xendit')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('xendit')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('xendit')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('xendit')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('mercadopago')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'mercadopago')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'mercadopago' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('mercadopago')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('mercadopago')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('mercadopago')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('mercadopago')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('vnpay')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'vnpay')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'vnpay' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('vnpay')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('vnpay')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('vnpay')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('vnpay')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('paymob')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'paymob')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'paymob' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('paymob')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('paymob')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('paymob')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('paymob')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('paytabs')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'paytabs')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'paytabs' ? 'ring-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('paytabs')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('paytabs')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('paytabs')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('paytabs')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('paytr')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'paytr')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'paytr' ? 'ring-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('paytr')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('paytr')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('paytr')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('paytr')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('razorpay')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'razorpay')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'razorpay' ? 'ring-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('razorpay')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('razorpay')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('razorpay')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('razorpay')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('jazzcash')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'jazzcash')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'jazzcash' ? 'ring-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('jazzcash')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('jazzcash')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('jazzcash')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('jazzcash')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('youcanpay')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'youcanpay')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'youcanpay' ? 'ring-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('youcanpay')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('youcanpay')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('youcanpay')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('youcanpay')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('nowpayments')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'nowpayments')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'nowpayments' ? 'ring-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('nowpayments')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('nowpayments')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('nowpayments')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('nowpayments')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if(settings('epoint')->is_enabled): ?>
                                        <div 
                                            wire:click="$set('selected', 'epoint')" 
                                            class="py-4 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-2 cursor-pointer grid items-center justify-center text-center transition-all duration-200 <?php echo e($selected === 'epoint' ? 'ring-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm'); ?>">

                                            
                                            <?php if(settings('epoint')->logo): ?>
                                                <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings('epoint')->logo)); ?>" class="lazy w-8/12 mx-auto p-1 mt-2">
                                            <?php endif; ?>

                                            <div class="w-6/12 h-px bg-gray-100 dark:bg-zinc-600 my-4 mx-auto rounded-sm"></div>

                                            
                                            <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2"><?php echo e(settings('epoint')->name); ?></span>

                                            
                                            <span class="text-green-400 text-xs"><?php echo e(settings('epoint')->deposit_fee); ?>% <?php echo e(__('messages.t_fee')); ?></span>

                                        </div>
                                    <?php endif; ?>

                                </div>
                            <?php endif; ?>

                            
                            <?php if(in_array($selected, ['cashfree', 'flutterwave', 'mercadopago', 'mollie', 'offline_payment', 'paymob', 'paypal', 'paystack', 'paytabs', 'paytr', 'razorpay', 'stripe', 'vnpay', 'xendit', 'jazzcash', 'youcanpay', 'nowpayments', 'epoint'])): ?>
                                <div class="w-full mt-14" wire:key="deposit-key-summary">

                                    
                                    <?php
                                        switch ($selected) {

                                            // PayPal
                                            case 'paypal':
                                                $currency = config('paypal.currency');
                                                break;

                                            // Cashfree
                                            case 'cashfree':
                                                $currency = settings('cashfree')->currency;
                                                break;

                                            // Flutterwave
                                            case 'flutterwave':
                                                $currency = settings('flutterwave')->currency;
                                                break;

                                            // Mercadopago
                                            case 'mercadopago':
                                                $currency = settings('mercadopago')->currency;
                                                break;

                                            // Mollie
                                            case 'mollie':
                                                $currency = settings('mollie')->currency;
                                                break;

                                            // Offline payment
                                            case 'offline_payment':
                                                $currency = settings('currency')->code;
                                                break;

                                            // Paymob
                                            case 'paymob':
                                                $currency = settings('paymob')->currency;
                                                break;

                                            // Paystack
                                            case 'paystack':
                                                $currency = settings('paystack')->currency;
                                                break;

                                            // Paytabs
                                            case 'paytabs':
                                                $currency = config('paytabs.currency');
                                                break;

                                            // Paytr
                                            case 'paytr':
                                                $currency = settings('paytr')->currency == 'TRY' ? 'TL' : settings('paytr')->currency;
                                                break;

                                            // Razorpay
                                            case 'razorpay':
                                                $currency = settings('razorpay')->currency;
                                                break;

                                            // Stripe
                                            case 'stripe':
                                                $currency = settings('stripe')->currency;
                                                break;

                                            // Vnpay
                                            case 'vnpay':
                                                $currency = settings('vnpay')->currency;
                                                break;

                                            // Xendit
                                            case 'xendit':
                                                $currency = settings('xendit')->currency;
                                                break;

                                            // Jazzcash
                                            case 'jazzcash':
                                                $currency = settings('jazzcash')->currency;
                                                break;

                                            // Youcanpay
                                            case 'youcanpay':
                                                $currency = settings('youcanpay')->currency;
                                                break;

                                            // Nowpayments
                                            case 'nowpayments':
                                                $currency = settings('nowpayments')->currency;
                                                break;

                                            // Epoint
                                            case 'epoint':
                                                $currency = settings('epoint')->currency;
                                                break;
                                            
                                            default:
                                                $currency = 'USD';
                                                break;
                                        }
                                    ?>

                                    
                                    <?php if(!$is_third_step): ?>
                                        <div class="w-full">
                                            <div class="grid grid-cols-12 md:gap-x-5 gap-y-5">

                                                
                                                <div class="col-span-12">
                                                    <label for="deposit-amount-input" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                        <?php echo app('translator')->get('messages.t_amount'); ?>
                                                    </label>
                                                    <div class="relative w-full">
                                                        <input wire:model.debounce.500ms="amount" type="text" id="deposit-amount-input" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4  dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0.00" required>
                                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3 font-bold text-xs tracking-widest dark:text-gray-300">
                                                            <?php echo e($currency); ?>

                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <?php if($selected === 'paymob'): ?>
                                                
                                                    
                                                    <div class="col-span-12">
                                                        <label for="paymob-input-phone" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                            <?php echo app('translator')->get('messages.t_phone_number'); ?>
                                                        </label>
                                                        <div class="relative w-full">
                                                            <input wire:model.defer="paymob_phone" type="text" id="paymob-input-phone" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="+20" required>
                                                            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                                <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path></svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-span-12 md:col-span-6">
                                                        <label for="paymob-input-firstname" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                            <?php echo app('translator')->get('messages.t_firstname'); ?>
                                                        </label>
                                                        <div class="relative w-full">
                                                            <input wire:model.defer="paymob_firstname" type="text" id="paymob-input-firstname" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="<?php echo e(__('messages.t_enter_firstname')); ?>" required>
                                                            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                                <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="10" r="3"></circle><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path></svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-span-12 md:col-span-6">
                                                        <label for="paymob-input-lastname" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                            <?php echo app('translator')->get('messages.t_lastname'); ?>
                                                        </label>
                                                        <div class="relative w-full">
                                                            <input wire:model.defer="paymob_lastname" type="text" id="paymob-input-lastname" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="<?php echo e(__('messages.t_enter_lastname')); ?>" required>
                                                            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                                <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="10" r="3"></circle><path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path></svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php endif; ?>


                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    
                                    <div class="mt-10 w-full">
                                        <div class="bg-gray-50 dark:bg-zinc-700 rounded-lg px-4 py-6 sm:p-6 lg:p-8">
                                            <div class="flow-root w-full">
                                                <dl class="-my-4 text-sm divide-y divide-gray-200 dark:divide-zinc-600">
        
                                                    
                                                    <div class="py-4 flex items-center justify-between">
                                                        <dt class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('messages.t_payment_method'); ?>
                                                        </dt>
                                                        <dd class="font-medium text-gray-900 dark:text-gray-200">
                                                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-300">
                                                                <?php if(settings($selected)->logo): ?>
                                                                    <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src(settings($selected)->logo)); ?>" class="lazy max-w-[50px]">
                                                                <?php endif; ?>
                                                                <span class="ltr:pl-3 rtl:pr-3 font-bold"><?php echo e(settings($selected)->name); ?></span>
                                                            </div>
                                                        </dd>
                                                    </div>
        
                                                    
                                                    <?php if($is_third_step): ?>
                                                        <div class="py-4 flex items-center justify-between">
                                                            <dt class="text-gray-600 dark:text-gray-300">
                                                                <?php echo app('translator')->get('messages.t_total'); ?>
                                                            </dt>
                                                            <dd class="font-medium text-gray-500 dark:text-gray-300">
                                                                <?php echo e(number_format($amount, 2, '.', ' ')); ?> <?php echo e($currency); ?>

                                                            </dd>
                                                        </div>
                                                    <?php endif; ?>

                                                    
                                                    <div class="py-4 flex items-center justify-between">
                                                        <dt class="text-gray-600 dark:text-gray-300">
                                                            <?php echo app('translator')->get('messages.t_fee'); ?>
                                                        </dt>
                                                        <dd class="font-medium text-gray-500 dark:text-gray-300">
                                                            <?php if($fee): ?>
                                                                <?php echo e(number_format($fee, 2, '.', ' ')); ?> <?php echo e($currency); ?>

                                                            <?php else: ?>
                                                                0.00 <?php echo e($currency); ?>

                                                            <?php endif; ?>
                                                        </dd>
                                                    </div>
                                                    
                                                    
                                                    <div class="py-4 flex items-center justify-between">
                                                        <dt class="text-sm font-bold text-gray-900 dark:text-gray-100">
                                                            <?php echo app('translator')->get('messages.t_u_will_get'); ?>
                                                        </dt>
                                                        <dd class="text-sm font-bold text-gray-900 dark:text-white">
                                                            <?php if($amount): ?>
                                                                <?php echo e(number_format($amount - $fee, 2, '.', ' ')); ?> <?php echo e($currency); ?>

                                                            <?php else: ?>
                                                                0.00 <?php echo e($currency); ?>

                                                            <?php endif; ?>
                                                        </dd>
                                                    </div>
                                                </dl>
                                            </div>
                                        </div>

                                        
                                        <?php if(!$is_third_step): ?>

                                            
                                            <div class="mt-10">
                                                <button
                                                    wire:click="next"
                                                    wire:loading.attr="disabled"
                                                    type="button"
                                                    class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 dark:disabled:bg-zinc-700 disabled:text-gray-600 dark:disabled:text-zinc-500 disabled:cursor-not-allowed disabled:hover:bg-gray-200 dark:disabled:hover:bg-zinc-700">
                                                        
                                                        <div wire:loading wire:target="next">
                                                            <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                            </svg>
                                                        </div>

                                                        
                                                        <div wire:loading.remove wire:target="next">
                                                            <?php echo e(__('messages.t_next')); ?>

                                                        </div>
                                                </button>
                                            </div>
                                
                                            
                                            <div class="mt-6 text-sm text-center text-gray-500">
                                                <button wire:click="back" type="button" class="text-primary-600 font-medium hover:text-primary-500">
                                                    <?php echo app('translator')->get('messages.t_back'); ?>
                                                </button>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            <?php endif; ?>

                            
                            <?php if($is_third_step): ?>
                                <div class="mt-10 w-full" wire:key="deposit-key-third">
                                    
                                    
                                    <?php if($selected === 'paypal' && settings('paypal')->is_enabled): ?>
                                        <div class="w-full">
            
                                            
                                            <div id="paypal-button-container" wire:ignore></div>
            
                                            <script>
                                                // Render the PayPal button into #paypal-button-container
                                                paypal.Buttons({
            
                                                    // Set up the transaction
                                                    createOrder: function(data, actions) {
                                                        return actions.order.create({
                                                            purchase_units: [{
                                                                amount: {
                                                                    value: '<?php echo e($amount); ?>'
                                                                }
                                                            }]
                                                        });
                                                    },
            
                                                    // Finalize the transaction
                                                    onApprove: function(data, actions) {
            
                                                        window.livewire.find('<?php echo e($_instance->id); ?>').handle(data.orderID);

                                                    }
            
                                                    }).render('#paypal-button-container');
                                            </script>
            
                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'stripe' && settings('stripe')->is_enabled): ?>
                                        <div class="w-full">

                                            
                                            <form id="stripe-payment-form" wire:ignore>

                                                
                                                <div id="stripe-payment-element"></div>
                
                                                
                                                <div class="mt-8">
                                                    <button
                                                        type="submit"
                                                        id="stripe-payment-button"
                                                        class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed dark:disabled:bg-zinc-700 dark:disabled:text-zinc-500"
                                                        >
                                                            <?php echo e(__('messages.t_pay')); ?>

                                                    </button>
                                                </div>
                                                
                                            </form>

                                            
                                            <script>

                                                // Stripe public key
                                                const stripe = Stripe("<?php echo e(config('stripe.public_key')); ?>");

                                                // Payment options
                                                const options = {
                                                    clientSecret: '<?php echo e($stripe_intent_secret); ?>',
                                                    appearance  : {
                                                        theme: 'night',
                                                        variables: {
                                                            colorPrimary   : '#0570de',
                                                            colorBackground: "<?php echo e(current_theme() === 'enabled' ? '#333' : '#ffffff'); ?>",
                                                            colorText      : '#30313d',
                                                            colorDanger    : '#df1b41',
                                                            spacingUnit    : '6px',
                                                            borderRadius   : '3px'
                                                        }
                                                    },
                                                };

                                                const elements = stripe.elements(options);

                                                // Create and mount the Payment Element
                                                const paymentElement = elements.create('payment');
                                                paymentElement.mount('#stripe-payment-element');

                                                const form = document.getElementById('stripe-payment-form');

                                                form.addEventListener('submit', async (event) => {
                                                    event.preventDefault();
                                                    document.getElementById("stripe-payment-button").disabled = true;
                                                    await stripe.confirmPayment({
                                                        elements,
                                                        confirmParams: {
                                                            return_url: "<?php echo e(url('account/deposit/callback/stripe')); ?>",
                                                        },
                                                    }).then((response) => {

                                                        // Check if error
                                                        if (response.error) {
                                                            window.$wireui.notify({
                                                                title      : "<?php echo e(__('messages.t_error')); ?>",
                                                                description: response.error.message,
                                                                icon       : 'error'
                                                            });
                                                        }

                                                        document.getElementById("stripe-payment-button").disabled = false;
                                                    }).catch((error) => {
                                                        window.$wireui.notify({
                                                            title      : "<?php echo e(__('messages.t_error')); ?>",
                                                            description: error.message,
                                                            icon       : 'error'
                                                        });
                                                        document.getElementById("stripe-payment-button").disabled = false;
                                                    });
                                                });
                                            </script>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'offline_payment' && settings('offline_payment')->is_enabled): ?>
                                        <div class="w-full bg-gray-50 dark:bg-zinc-700 dark:text-gray-200 rounded-lg px-4 py-6 sm:p-6 lg:p-8">
                                            <?php echo settings('offline_payment')->details; ?>

                                        </div>
                                        <div class="mt-8">
                                            <button
                                                wire:click="handle"
                                                wire:loading.attr="disabled"
                                                class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed"
                                                >
                                                    <?php echo e(__('messages.t_place_order')); ?>

                                            </button>
                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'flutterwave' && settings('flutterwave')->is_enabled): ?>
                                        <div class="w-full">

                                            
                                            <script>
                                                window.makeFlutterwavePayment = function() {
                                                    FlutterwaveCheckout({
                                                        public_key     : "<?php echo e(config('flutterwave.public_key')); ?>",
                                                        tx_ref         : "<?php echo e(uid(32)); ?>",
                                                        amount         : Number(<?php echo e($amount); ?>),
                                                        currency       : "<?php echo e(settings('flutterwave')->currency); ?>",
                                                        payment_options: "card, banktransfer, ussd, account, mpesa, mobilemoneyghana, mobilemoneyfranco, mobilemoneyuganda, mobilemoneyrwanda, mobilemoneyzambia, barter, nqr, credit",
                                                        redirect_url   : "<?php echo e(url('account/deposit/callback/flutterwave')); ?>",
                                                        customer       : {
                                                            email       : "<?php echo e(auth()->user()->email); ?>",
                                                            name        : "<?php echo e(auth()->user()->username); ?>",
                                                        },
                                                        customizations: {
                                                            title      : "<?php echo e(__('messages.t_add_funds')); ?>",
                                                            logo       : "<?php echo e(src(auth()->user()->avatar)); ?>",
                                                        },
                                                    });
                                                }
                                            </script>

                                            
                                            <div class="mt-8">
                                                <button
                                                    @click="window.makeFlutterwavePayment"
                                                    id="flutterwave-payment-button"
                                                    class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed"
                                                    >
                                                        <?php echo e(__('messages.t_pay')); ?>

                                                </button>
                                            </div>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'paystack' && settings('paystack')->is_enabled): ?>
                                        <div class="w-full">

                                            
                                            <script>
                                                window.makePaystackPayment = function(){
                                                    let handler = PaystackPop.setup({
                                                        key     : "<?php echo e(config('paystack.publicKey')); ?>",
                                                        email   : '<?php echo e(auth()->user()->email); ?>',
                                                        amount  : Number(<?php echo e($amount); ?>) * 100,
                                                        currency: "<?php echo e(settings('paystack')->currency); ?>",
                                                        ref     : '<?php echo e(uid(32)); ?>',
                                                        onClose : function(){
                                                            
                                                        },
                                                        callback: function(response){
                                                            window.livewire.find('<?php echo e($_instance->id); ?>').handle(response.reference);
                                                        }
                                                    });

                                                    handler.openIframe();
                                                }
                                            </script>

                                            
                                            <div class="mt-8">
                                                <button
                                                    @click="window.makePaystackPayment"
                                                    id="paystack-payment-button"
                                                    class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed"
                                                    >
                                                        <?php echo e(__('messages.t_pay')); ?>

                                                </button>
                                            </div>

                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'cashfree' && settings('cashfree')->is_enabled): ?>

                                        
                                        <div class="w-full">
                                            <div class="grid grid-cols-12 md:gap-x-5 gap-y-5" id="cashfree-payment-card">

                                                
                                                <div class="col-span-12">
                                                    <label for="cashfree-input-phone" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                        <?php echo app('translator')->get('messages.t_phone_number'); ?>
                                                    </label>
                                                    <div class="relative w-full">
                                                        <input type="text" id="cashfree-input-phone" minlength="10" maxlength="10" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="00 00 00 00 00" required>
                                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                            <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path></svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-span-12">
                                                    <label for="cashfree-input-holder" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                        <?php echo app('translator')->get('messages.t_holder_name'); ?>
                                                    </label>
                                                    <div class="relative w-full">
                                                        <input data-card-holder type="text" id="cashfree-input-holder" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="John Doe" required>
                                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                            <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-span-12">
                                                    <label for="cashfree-input-number" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                        <?php echo app('translator')->get('messages.t_card_number'); ?>
                                                    </label>
                                                    <div class="relative w-full">
                                                        <input data-card-number type="text" id="cashfree-input-number" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="4111111111111111" required>
                                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                            <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="5" width="18" height="14" rx="3"></rect><line x1="3" y1="10" x2="21" y2="10"></line><line x1="7" y1="15" x2="7.01" y2="15"></line><line x1="11" y1="15" x2="13" y2="15"></line></svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-span-12 md:col-span-4">
                                                    <label for="cashfree-input-expiry-mm" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                        <?php echo app('translator')->get('messages.t_card_expiry_month'); ?>
                                                    </label>
                                                    <div class="relative w-full">
                                                        <input data-card-expiry-mm type="text" id="cashfree-input-expiry-mm" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12" required>
                                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                            <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><rect x="8" y="15" width="2" height="2"></rect></svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-span-12 md:col-span-5">
                                                    <label for="cashfree-input-expiry-yy" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                        <?php echo app('translator')->get('messages.t_card_expiry_year'); ?>
                                                    </label>
                                                    <div class="relative w-full">
                                                        <input data-card-expiry-yy maxlength="2" minlength="2" type="text" id="cashfree-input-expiry-yy" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="27" required>
                                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                            <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-span-12 md:col-span-3">
                                                    <label for="cashfree-input-cvv" class="block mb-2 text-xs font-bold text-gray-900 dark:text-white">
                                                        <?php echo app('translator')->get('messages.t_card_cvv'); ?>
                                                    </label>
                                                    <div class="relative w-full">
                                                        <input data-card-cvv type="text" id="cashfree-input-cvv" class="border border-gray-300 text-gray-900 text-sm rounded-lg font-medium focus:ring-primary-500 focus:border-primary-500 block w-full ltr:pr-12 rtl:pl-12 p-4 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="123" required>
                                                        <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center ltr:pr-3 rtl:pl-3">
                                                            <svg class="w-5 h-5 text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path><circle cx="12" cy="11" r="1"></circle><line x1="12" y1="12" x2="12" y2="14.5"></line></svg>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-span-12 mt-8">
                                                    <button
                                                        id="cashfree-payment-button"
                                                        class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed dark:disabled:bg-zinc-700 dark:disabled:text-zinc-500"
                                                        >
                                                            <?php echo e(__('messages.t_pay')); ?>

                                                    </button>
                                                </div>

                                            </div>
                                        </div>

                                        
                                        <script>
                                            $(document).ready(function (e) {

                                                let isCardReadyToPay = true;

                                                const config = {
                                                    onPaymentSuccess: function (data) {
                                                        if (data.order.status == "PAID") {

                                                            $.ajax({
                                                                type   : 'POST',
                                                                data   : { order_id: data.order.orderId },
                                                                url    : "<?php echo e(url('account/deposit/callback/cashfree')); ?>",
                                                                headers: {
                                                                    'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                                                                },
                                                                success: function(response) {
                                                                    window.location.replace(response.redirect);
                                                                },
                                                                error: function(error) {
                                                                    window.$wireui.notify({
                                                                        title      : "<?php echo e(__('messages.t_error')); ?>",
                                                                        description: error,
                                                                        icon       : 'error'
                                                                    });
                                                                }
                                                            });

                                                        } else {

                                                            // Payment failed
                                                            window.$wireui.notify({
                                                                title      : "<?php echo e(__('messages.t_error')); ?>",
                                                                description: "<?php echo e(__('messages.t_we_could_not_handle_ur_deposit_payment')); ?>",
                                                                icon       : 'error'
                                                            });

                                                        }
                                                    },
                                                    onPaymentFailure: function (data) {
                                                        window.$wireui.notify({
                                                            title      : "<?php echo e(__('messages.t_error')); ?>",
                                                            description: data.transaction.txMsg,
                                                            icon       : 'error'
                                                        });
                                                    },
                                                    onError: function (err) {
                                                        window.$wireui.notify({
                                                            title      : "<?php echo e(__('messages.t_error')); ?>",
                                                            description: err.message,
                                                            icon       : 'error'
                                                        });
                                                    },
                                                };

                                                const cfCheckout = Cashfree.initializeApp(config);

                                                cfCheckout.elements([
                                                    {
                                                        pay     : document.getElementById("cashfree-payment-card"),
                                                        type    : "card",
                                                        onChange: cardEventHandler,
                                                    },
                                                ]);

                                                function cardEventHandler(data) {
                                                    isCardReadyToPay = data.isReadyToPay;
                                                }

                                                // Set empty order token
                                                let order_token = null;

                                                // Handle payment
                                                $("#cashfree-payment-button").click(async function () {

                                                    var _this         = this;

                                                    // Disable button
                                                    _this.disabled    = true;
                                                    _this.textContent = "<?php echo e(__('messages.t_please_wait_dots')); ?>";

                                                    // Check if card is valid for payment
                                                    if (isCardReadyToPay) {
                                                        if (!order_token) {

                                                            $.ajax({
                                                                type   : 'POST',
                                                                data   : { phone: document.getElementById('cashfree-input-phone').value, amount: "<?php echo e($amount); ?>" },
                                                                url    : "<?php echo e(url('account/deposit/callback/cashfree/token')); ?>",
                                                                headers: {
                                                                    'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                                                                },
                                                                success: async function (response) {
                                                                    
                                                                    // Check response
                                                                    if (response && response.success === true && response.order_token) {
                                                                        
                                                                        // Set order token
                                                                        order_token = response.order_token;
                                                                        await cfCheckout.pay(order_token, "card");

                                                                    } else {

                                                                        // Something went wrong
                                                                        window.$wireui.notify({
                                                                            title      : "<?php echo e(__('messages.t_error')); ?>",
                                                                            description: "<?php echo e(__('messages.t_toast_something_went_wrong')); ?>",
                                                                            icon       : 'error'
                                                                        });

                                                                    }
                                                                    
                                                                    // Enable button
                                                                    _this.disabled    = false;
                                                                    _this.textContent = "<?php echo e(__('messages.t_pay')); ?>";

                                                                },
                                                                error: function(request, status, error) {
                                                                    
                                                                    // Something went wrong
                                                                    window.$wireui.notify({
                                                                        title      : "<?php echo e(__('messages.t_error')); ?>",
                                                                        description: request.responseJSON.message,
                                                                        icon       : 'error'
                                                                    });

                                                                    // Enable button
                                                                    _this.disabled    = false;
                                                                    _this.textContent = "<?php echo e(__('messages.t_pay')); ?>";

                                                                }
                                                            });

                                                        } else {
                                                            await cfCheckout.pay(order_token, "card");
                                                        }
                                                    } else {

                                                        // Invalid credit card details
                                                        window.$wireui.notify({
                                                            title      : "<?php echo e(__('messages.t_error')); ?>",
                                                            description: "<?php echo e(__('messages.t_pls_check_ur_inputs_and_try_again')); ?>",
                                                            icon       : 'error'
                                                        });

                                                    }
                                                });

                                            });
                                        </script>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'mercadopago' && settings('mercadopago')->is_enabled): ?>

                                        
                                        <div class="w-full relative">

                                            
                                            <div class="bg-gray-50 dark:bg-zinc-700 absolute w-full p-6 rounded-xl flex items-center justify-center" id="mercadopago-waiting">
                                                <div role="status">
                                                    <svg aria-hidden="true" class="mb-1 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-primary-600 mx-auto" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                                    </svg>
                                                    <span class="text-xs font-bold tracking-widest text-gray-500 dark:text-gray-200"><?php echo e(__('messages.t_please_wait_dots')); ?></span>
                                                </div>
                                            </div>

                                            
                                            <div id="walletBrick_container"></div>

                                        </div>

                                        
                                        <script>
                                            const bricksBuilder     = mercadopago.bricks();
                                            const renderWalletBrick = async (bricksBuilder) => {
                                                const settings = {
                                                    initialization: {
                                                        preferenceId: '<?php echo e($mercadopago_preference_id); ?>',
                                                    },
                                                    callbacks: {
                                                        onReady: () => {
                                                            $('#mercadopago-waiting').hide();
                                                        },
                                                        onSubmit: () => {
                                                            //
                                                        },
                                                        onError: (error) => {
                                                            alert(error);
                                                        },
                                                    },
                                                };
                                                window.walletBrickController = await bricksBuilder.create(
                                                    'wallet',
                                                    'walletBrick_container',
                                                    settings
                                                );
                                            };
                                            renderWalletBrick(bricksBuilder);
                                        </script>

                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'paymob' && settings('paymob')->is_enabled): ?>
                                        <div class="w-full">
                                            <iframe src="https://accept.paymobsolutions.com/api/acceptance/iframes/<?php echo e(config('paymob.iframe_id')); ?>?payment_token=<?php echo e($paymob_payment_token); ?>" width="100%" height="500px"></iframe>
                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'razorpay' && settings('razorpay')->is_enabled): ?>

                                        
                                        <div class="w-full">
                                            <script>
                                                window.makeRazorpayPayment = function() {

                                                    // Set options
                                                    var options = {
                                                        "key"        : "<?php echo e(config('razorpay.key_id')); ?>",
                                                        "amount"     : "<?php echo e($this->amount * 100); ?>",
                                                        "currency"   : "<?php echo e(settings('razorpay')->currency); ?>",
                                                        "order_id"   : "<?php echo e($razorpay_order_id); ?>",
                                                        "name"       : "<?php echo e(auth()->user()->username); ?>",
                                                        "description": "<?php echo e(__('messages.t_add_funds')); ?>",
                                                        "image"      : "<?php echo e(src(auth()->user()->avatar)); ?>",
                                                        "handler"    : function (response){
                                                            
                                                            // Handle payment
                                                            window.livewire.find('<?php echo e($_instance->id); ?>').handle({
                                                                razorpay_payment_id: response.razorpay_payment_id,
                                                                razorpay_order_id  : response.razorpay_order_id,
                                                                razorpay_signature : response.razorpay_signature,
                                                            });

                                                        },
                                                    };

                                                    // Start payment
                                                    var rzp1 = new Razorpay(options);

                                                    // On Failed
                                                    rzp1.on('payment.failed', function (response){
                                                        alert(response.error.description);
                                                    });

                                                    // Open modal
                                                    rzp1.open();

                                                }
                                            </script>

                                            
                                            <button
                                                @click="window.makeRazorpayPayment"
                                                wire:loading.attr="disabled"
                                                type="button"
                                                class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed"
                                                >
                                                    <?php echo e(__('messages.t_pay')); ?>

                                            </button>
                                            
                                        </div>

                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'jazzcash' && settings('jazzcash')->is_enabled): ?>
                                        <div class="w-full">

                                            <?php

                                                $jazzcash_env           = config('jazzcash.environment');
                                                $jazzcash_endpoint      = config("jazzcash.$jazzcash_env.endpoint");
                                                $jazzcash_merchant_id   = config("jazzcash.$jazzcash_env.merchant_id");
                                                $jazzcash_password      = config("jazzcash.$jazzcash_env.password");
                                                $jazzcash_salt          = config("jazzcash.$jazzcash_env.integerity_salt");
                                                $jazzcash_return_url    = url('callback/jazzcash');

                                                // Set order details
                                                $pp_amount              = $this->amount * 100;
                                                $pp_billref             = uid();
                                                $pp_description         = __('messages.t_deposit');
                                                $pp_language            = "EN";
                                                $pp_merchant_id         = $jazzcash_merchant_id;
                                                $pp_password            = $jazzcash_password;
                                                $pp_return_url          = $jazzcash_return_url;
                                                $pp_txn_currency        = $currency;
                                                $pp_txn_datetime        = date('Y') . date('m') . date('d') . date('H') . date('i') . date('s');
                                                $pp_txn_expiry_datetime = date('Y') . date('m') . date('d', strtotime('tomorrow')) . date('H') . date('i') . date('s');
                                                $pp_txn_ref_no          = uid();
                                                $pp_txn_type            = "";
                                                $pp_version             = 1.1;
                                                $pp_ppmpf_1             = 1;
                                                $pp_ppmpf_2             = 2;
                                                $pp_ppmpf_3             = 3;
                                                $pp_ppmpf_4             = 4;
                                                $pp_ppmpf_5             = 5;

                                                // Set hash string value
                                                $jazzcash_hash_string   = '';
                                                $jazzcash_hash_string  .= "$jazzcash_salt&";
                                                $jazzcash_hash_string  .= "$pp_amount&";
                                                $jazzcash_hash_string  .= "$pp_billref&";
                                                $jazzcash_hash_string  .= "$pp_description&";
                                                $jazzcash_hash_string  .= "$pp_language&";
                                                $jazzcash_hash_string  .= "$pp_merchant_id&";
                                                $jazzcash_hash_string  .= "$pp_password&";
                                                $jazzcash_hash_string  .= "$pp_return_url&";
                                                $jazzcash_hash_string  .= "$pp_txn_currency&";
                                                $jazzcash_hash_string  .= "$pp_txn_datetime&";
                                                $jazzcash_hash_string  .= "$pp_txn_expiry_datetime&";
                                                $jazzcash_hash_string  .= "$pp_txn_ref_no&";
                                                $jazzcash_hash_string  .= "$pp_version&";
                                                $jazzcash_hash_string  .= "$pp_ppmpf_1&";
                                                $jazzcash_hash_string  .= "$pp_ppmpf_2&";
                                                $jazzcash_hash_string  .= "$pp_ppmpf_3&";
                                                $jazzcash_hash_string  .= "$pp_ppmpf_4&";
                                                $jazzcash_hash_string  .= "$pp_ppmpf_5";

                                                // Generate hash string
                                                $jazzcash_signature     = hash_hmac('sha256', $jazzcash_hash_string, $jazzcash_salt);

                                                // Set session
                                                session()->put('jazzcash_callback', 'deposit');

                                            ?>

                                            
                                            <form method="POST" action="<?php echo e($jazzcash_endpoint); ?>">
                                                <input type="hidden" name="pp_Version" value="<?php echo e($pp_version); ?>">
                                                <input type="hidden" name="pp_TxnType" value="<?php echo e($pp_txn_type); ?>">
                                                <input type="hidden" name="pp_MerchantID" value="<?php echo e($pp_merchant_id); ?>">
                                                <input type="hidden" name="pp_Password" value="<?php echo e($pp_password); ?>">
                                                <input type="hidden" name="pp_ReturnURL" value="<?php echo e($jazzcash_return_url); ?>">
                                                <input type="hidden" name="pp_Language" value="<?php echo e($pp_language); ?>">
                                                <input type="hidden" name="pp_TxnRefNo" value="<?php echo e($pp_txn_ref_no); ?>">
                                                <input type="hidden" name="pp_Amount" value="<?php echo e($pp_amount); ?>">
                                                <input type="hidden" name="pp_TxnCurrency" value="<?php echo e($pp_txn_currency); ?>">
                                                <input type="hidden" name="pp_TxnDateTime" value="<?php echo e($pp_txn_datetime); ?>">
                                                <input type="hidden" name="pp_TxnExpiryDateTime" value="<?php echo e($pp_txn_expiry_datetime); ?>">
                                                <input type="hidden" name="pp_BillReference" value="<?php echo e($pp_billref); ?>">
                                                <input type="hidden" name="pp_Description" value="<?php echo e($pp_description); ?>">
                                                <input type="hidden" name="pp_SecureHash" value="<?php echo e($jazzcash_signature); ?>">
                                                <input type="hidden" name="ppmpf_1" value="<?php echo e($pp_ppmpf_1); ?>">
                                                <input type="hidden" name="ppmpf_2" value="<?php echo e($pp_ppmpf_2); ?>">
                                                <input type="hidden" name="ppmpf_3" value="<?php echo e($pp_ppmpf_3); ?>">
                                                <input type="hidden" name="ppmpf_4" value="<?php echo e($pp_ppmpf_4); ?>">
                                                <input type="hidden" name="ppmpf_5" value="<?php echo e($pp_ppmpf_5); ?>">

                                                
                                                <div class="block mt-8">
                                                    <button
                                                        type="submit"
                                                        class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed dark:disabled:bg-zinc-700 dark:disabled:text-zinc-500"
                                                        >
                                                            <?php echo e(__('messages.t_pay')); ?>

                                                    </button>
                                                </div>

                                            </form>
                                            
                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'vnpay' && settings('vnpay')->is_enabled): ?>
                                        <div class="w-full">
                                            <button
                                                wire:click="handle"
                                                wire:loading.attr="disabled"
                                                class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed"
                                                >
                                                    <?php echo e(__('messages.t_pay')); ?>

                                            </button>
                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'paytr' && settings('paytr')->is_enabled): ?>
                                        <div class="w-full">

                                            
                                            <?php
        
                                                try {
        
                                                    // Generate order id
                                                    $merchant_oid   = "DEPOSIT" . uid();
        
                                                    // Start new payment
                                                    $paytr          = new \App\Utils\PayTR\PayTR(); 
            
                                                    // Set payment gateway api keys
                                                    $paytr->setMerchantId(config('paytr.merchant_id'));
                                                    $paytr->setMerchantKey(config('paytr.merchant_key'));
                                                    $paytr->setMerchantSalt(config('paytr.merchant_salt'));
                                                    $paytr->setMerchantOrderId($merchant_oid);
            
                                                    // Set order details
                                                    $paytr->setEmail(auth()->user()->email);
                                                    $paytr->setPaymentAmount($amount);
                                                    $paytr->setUserName(auth()->user()->username);
                                                    $paytr->setAddress('N/A');
                                                    $paytr->setPhone('5205000000');
                                                    $paytr->setBasket([[ "name"=> __('messages.t_deposit'), "price"=> $amount, "currency"=> $currency ]]);
                                                    $paytr->setCurrency($currency);
                                                    $paytr->setSuccessUrl(url('callback/paytr?status=success&action=deposit'));
                                                    $paytr->setFailUrl(url('callback/paytr?status=failed&action=deposit'));
                                                    $paytr->initialize();
            
                                                    // Get token
                                                    $paytr_token      = $paytr->token;
        
                                                    // Draft Deposit
                                                    $deposit_webhook = $this->depositWebhook([
                                                        'payment_id'     => $merchant_oid,
                                                        'payment_method' => 'paytr'
                                                    ]);
                                                    
                                                } catch (\Throwable $th) {
                                                    throw $th;
                                                }
        
                                            ?>   
                                            
                                            
                                            <iframe src="https://www.paytr.com/odeme/guvenli/<?php echo e($paytr_token); ?>" id="paytriframe" frameborder="0" scrolling="yes" style="width: 100%;" height="600px"></iframe>
                                            <script>iFrameResize({},'#paytriframe');</script>
        
                                        </div>
                                    <?php endif; ?>

                                    
                                    <?php if($selected === 'nowpayments' && settings('nowpayments')->is_enabled): ?>
                                    <div class="w-full flex flex-col items-center justify-center text-center">

                                        
                                        <?php if(settings('nowpayments')->crypto_currency == 'btc'): ?>
                                            <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl=bitcoin:<?php echo e($nowpayments_pay_address); ?>?amount=<?php echo e($nowpayments_pay_amount); ?>" alt="<?php echo e(__('messages.t_checkout')); ?>">
                                        <?php endif; ?>
    
                                        <script>
                                            function wsqrXOUsxxoLywE() {
                                                return {
                                                    is_copied: false,
                                                    // Copy project url to clipboard
                                                    copyToClipboard() {
    
                                                        var _this = this;
    
                                                        // Get input
                                                        const copyText = document.querySelector("#input-nowpayments-io-pay-address");
    
                                                        copyText.select()
                                                        copyText.setSelectionRange(0, 99999)
                                                        document.execCommand("copy")
                                                        _this.is_copied = true;
                                                        setTimeout(() => {
                                                            _this.is_copied = false;
                                                        }, 2000);
                                                    }
                                                }
                                            }
                                            window.wsqrXOUsxxoLywE = wsqrXOUsxxoLywE();
                                        </script>
    
                                        
                                        <div class="w-full mt-4" x-data="window.wsqrXOUsxxoLywE">
                                            <div class="mt-1 relative flex items-center">
                                            <input type="text" id="input-nowpayments-io-pay-address" value="<?php echo e($nowpayments_pay_address); ?>" class="shadow-sm focus:ring-primary-600 focus:border-primary-600 block w-full ltr:pr-16 rtl:pl-16 sm:text-[13px] border-gray-200 font-medium rounded-md">
                                            <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex py-1.5 ltr:pr-1.5 rtl:pl-1.5">
                                                <button x-on:click="copyToClipboard()" type="button" class="inline-flex justify-center items-center rounded border font-semibold focus:outline-none px-2 py-1 leading-5 text-xs border-gray-300 bg-gray-50 text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow">
                                                    <template x-if="is_copied">
                                                        <span><?php echo app('translator')->get('messages.t_copied'); ?></span>
                                                    </template>
                                                    <template x-if="!is_copied">
                                                        <span><?php echo app('translator')->get('messages.t_copy'); ?></span>
                                                    </template>
                                                </button>
                                            </div>
                                            </div>
                                        </div>
    
                                        
                                        <div class="font-bold my-4 text-base text-zinc-900 tracking-wide">
                                            <?php echo e($nowpayments_pay_amount); ?> <?php echo e(settings('nowpayments')->crypto_currency); ?>

                                        </div>
    
                                        
                                        <div class="text-sm text-gray-400 font-normal tracking-wide leading-relaxed">
                                            <?php echo app('translator')->get('messages.t_nowpayments_scan_qr_or_copy_pay_address_info'); ?>
                                        </div>
    
                                        
                                        <button
                                            type="button" 
                                            wire:click="handle"
                                            wire:loading.attr="disabled"
                                            class="inline-flex justify-center items-center rounded border font-semibold focus:outline-none px-12 py-4 leading-5 text-[13px] mt-8 tracking-wide border-transparent bg-primary-500 text-white hover:bg-primary-600 focus:ring focus:ring-primary-500 focus:ring-opacity-25 disabled:bg-gray-200 disabled:hover:bg-gray-200 disabled:text-gray-500 disabled:cursor-not-allowed">
                                            
                                            
                                            <div wire:loading wire:target="handle">
                                                <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                                </svg>
                                            </div>
    
                                            
                                            <div wire:loading.remove wire:target="handle">
                                                <?php echo app('translator')->get('messages.t_i_sent_the_money'); ?>
                                            </div>
    
                                        </button>
    
                                    </div>
                                    <?php endif; ?>

                                </div>
                            <?php endif; ?>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $__env->startPush('styles'); ?>

    
    <?php if(settings('paypal')->is_enabled): ?>

        
        <?php
            $paypal_client_id = config('paypal.mode') === 'sandbox' ? config('paypal.sandbox.client_id') : config('paypal.live.client_id');
            $currency         = config('paypal.currency');
        ?>

        
        <script src="https://www.paypal.com/sdk/js?client-id=<?php echo e($paypal_client_id); ?>&currency=<?php echo e($currency); ?>"></script>

    <?php endif; ?>

    
    <?php if(settings('stripe')->is_enabled): ?>
        <script src="https://js.stripe.com/v3/"></script>
    <?php endif; ?>

    
    <?php if(settings('flutterwave')->is_enabled): ?>
        <script src="https://checkout.flutterwave.com/v3.js"></script>
    <?php endif; ?>

    
    <?php if(settings('paystack')->is_enabled): ?>
        <script src="https://js.paystack.co/v1/inline.js"></script> 
    <?php endif; ?>

    
    <?php if(settings('cashfree')->is_enabled): ?>
        <?php if(config('cashfree.isLive')): ?>
            <script src="https://sdk.cashfree.com/js/core/1.0.26/bundle.prod.js"></script>
        <?php else: ?>
            <script src="https://sdk.cashfree.com/js/core/1.0.26/bundle.sandbox.js"></script>
        <?php endif; ?>
    <?php endif; ?>

    
    <?php if(settings('mercadopago')->is_enabled): ?>
        <script src="https://sdk.mercadopago.com/js/v2"></script>
        <script>
            var mercadopago = new MercadoPago("<?php echo e(config('mercadopago.public_key')); ?>");
        </script>
    <?php endif; ?>

    
    <?php if(settings('razorpay')->is_enabled): ?>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <?php endif; ?>

<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\main\account\deposit\deposit.blade.php ENDPATH**/ ?>