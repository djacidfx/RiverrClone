<div class="w-full">
    <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

        
        <div class="col-span-12 xl:col-span-7">
            <div class="bg-white border-gray-200 shadow-sm rounded-lg border">
                <ul role="list" class="divide-y divide-gray-200">

                    <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="p-4 sm:p-6">
                            <div class="flex items-center sm:items-start">
                                <div
                                    class="flex-shrink-0 w-20 h-20 bg-gray-200 rounded-lg overflow-hidden sm:w-20 sm:h-20">
                                    <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($item->gig->thumbnail)); ?>" alt="<?php echo e($item->gig->title); ?>"class="lazy w-full h-full object-center object-cover">
                                </div>
                                <div class="flex-1 ltr:ml-6 rtl:mr-6 text-sm">
                                    <div class="font-bold text-gray-900 sm:flex sm:justify-between">
                                        <a href="<?php echo e(url('service', $item->gig->slug)); ?>" target="_blank" class="hover:text-primary-600"><?php echo e($item->gig->title); ?></a>
                                    </div>
                                    <div class="text-gray-500 mt-6 sm:mt-2">

                                        
                                        <div class="grid sm:!flex text-gray-500 text-xs sm:space-x-12 sm:rtl:space-x-reverse space-y-6 sm:space-y-0">

                                            
                                            <span class="flex ltr:sm:mr-12 rtl:sm:ml-12">
                                                <div class="ltr:text-left rtl:text-right sm:!text-center">
                                                    <p class="text-[10px] tracking-widest text-gray-400 uppercase"><?php echo e(__('messages.t_total')); ?></p>
                                                    <p class="mt-2 text-[11px] text-gray-600 font-medium">
                                                        <?php echo money($item->total_value, settings('currency')->code, true); ?>
                                                    </p>
                                                </div>
                                            </span>

                                            
                                            <span class="flex">
                                                <div class="ltr:text-left rtl:text-right sm:!text-center">
                                                    <p class="text-[10px] tracking-widest text-gray-400 uppercase"><?php echo e(__('messages.t_quantity')); ?></p>
                                                    <p class="mt-2 text-[11px] text-gray-600 font-medium">
                                                        <?php echo e($item->quantity); ?>

                                                    </p>
                                                </div>
                                            </span>

                                            
                                            <span class="flex">
                                                <div class="ltr:text-left rtl:text-right sm:!text-center">
                                                    <p class="text-[10px] tracking-widest text-gray-400 uppercase"><?php echo e(__('messages.t_expected_delivery_date')); ?></p>
                                                    <p class="mt-2 text-[11px] text-gray-600 font-medium">
                                                        <?php if($item->expected_delivery_date): ?>
                                                            <?php echo e(format_date($item->expected_delivery_date, config('carbon-formats.F_j,_Y_h_:_i_A'))); ?>

                                                        <?php else: ?>
                                                            —
                                                        <?php endif; ?>
                                                    </p>
                                                </div>
                                            </span>

                                            
                                            <span class="flex">
                                                <div class="ltr:text-left rtl:text-right sm:!text-center">
                                                    <p class="text-[10px] tracking-widest text-gray-400 uppercase"><?php echo e(__('messages.t_status')); ?></p>

                                                    <?php if($item->order->invoice->status === 'pending'): ?>
                                                        <p class="mt-2 text-[11px] text-amber-500 font-medium">
                                                            <?php echo e(__('messages.t_pending_payment')); ?>

                                                        </p>
                                                    <?php else: ?>
                                                        <?php switch($item->status):

                                                            
                                                            case ('pending'): ?>
                                                                <p class="mt-2 text-[11px] text-amber-500 font-medium">
                                                                    <?php echo e(__('messages.t_pending')); ?>

                                                                </p>
                                                                <?php break; ?>

                                                            
                                                            <?php case ('proceeded'): ?>
                                                                <p data-tooltip-target="orders-<?php echo e($order->uid); ?>-item-<?php echo e($item->id); ?>-status-proceeded" class="mt-2 text-[11px] text-blue-500 font-medium cursor-pointer">
                                                                    <?php echo e(__('messages.t_in_the_process')); ?>

                                                                </p>
                                                                <div id="orders-<?php echo e($order->uid); ?>-item-<?php echo e($item->id); ?>-status-proceeded" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    <?php echo e(format_date($item->proceeded_at, config('carbon-formats.F_j,_Y_h_:_i_A'))); ?>

                                                                </div>
                                                                <?php break; ?>

                                                            
                                                            <?php case ('delivered'): ?>
                                                                <p data-tooltip-target="orders-<?php echo e($order->uid); ?>-item-<?php echo e($item->id); ?>-status-delivered" class="mt-2 text-[11px] text-green-500 font-medium cursor-pointer">
                                                                    <?php echo e(__('messages.t_delivered')); ?>

                                                                </p>
                                                                <div id="orders-<?php echo e($order->uid); ?>-item-<?php echo e($item->id); ?>-status-delivered" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    <?php echo e(format_date($item->delivered_at, config('carbon-formats.F_j,_Y_h_:_i_A'))); ?>

                                                                </div>
                                                                <?php break; ?>

                                                            
                                                            <?php case ('canceled'): ?>
                                                                <p data-tooltip-target="orders-<?php echo e($order->uid); ?>-item-<?php echo e($item->id); ?>-status-canceled" class="mt-2 text-[11px] text-gray-500 font-medium cursor-pointer">
                                                                    <?php echo e(__('messages.t_canceled')); ?>

                                                                </p>
                                                                <div id="orders-<?php echo e($order->uid); ?>-item-<?php echo e($item->id); ?>-status-canceled" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    <?php echo e(format_date($item->canceled_at, config('carbon-formats.F_j,_Y_h_:_i_A'))); ?>

                                                                </div>
                                                                <?php break; ?>
                                                            
                                                            
                                                            <?php case ('refunded'): ?>
                                                                <p data-tooltip-target="orders-<?php echo e($order->uid); ?>-item-<?php echo e($item->id); ?>-status-refunded" class="mt-2 text-[11px] text-red-500 font-medium cursor-pointer">
                                                                    <?php echo e(__('messages.t_refunded')); ?>

                                                                </p>
                                                                <div id="orders-<?php echo e($order->uid); ?>-item-<?php echo e($item->id); ?>-status-refunded" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                    <?php echo e(format_date($item->refunded_at, config('carbon-formats.F_j,_Y_h_:_i_A'))); ?>

                                                                </div>
                                                                <?php break; ?>
                                                                
                                                            <?php default: ?>
                                                                
                                                        <?php endswitch; ?>
                                                    <?php endif; ?>
                                                    
                                                </div>
                                            </span>
                                            
                                        </div>

                                        <?php if($item->has('upgrades')): ?>
                                            <div class="mt-4">
                                                <fieldset class="space-y-5">

                                                    <?php $__currentLoopData = $item->upgrades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upgrade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="relative flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input type="checkbox" class="h-4 w-4 text-gray-300 border-gray-200 border-2 rounded-sm cursor-not-allowed pointer-events-none" checked disabled>
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
                            </div>
                            
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>
        </div>

        
        <div class="col-span-12 xl:col-span-5">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-sm leading-6 font-bold tracking-wide text-gray-900">
                        <?php echo e(__('messages.t_invoice')); ?>

                    </h3>
                    <p class="mt-1 max-w-2xl text-xs text-gray-500">
                        <?php echo e(__('messages.t_invoice_details')); ?>

                    </p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>

                        
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-gray-500">
                                <?php echo e(__('messages.t_payment_method')); ?>

                            </dt>
                            <dd class="mt-1 text-xs font-bold text-gray-900 sm:mt-0">
                               <?php switch($order->invoice->payment_method):
                                   case ('balance'): ?>
                                       <span><?php echo e(__('messages.t_user_credit')); ?></span>
                                       <?php break; ?>
                                   <?php case ('paypal'): ?>
                                       <span class="text-[#3b7bbf]"><?php echo e(__('messages.t_paypal')); ?></span>
                                       <?php break; ?>
                                    <?php case ('stripe'): ?>
                                       <span class="text-[#008cdd]"><?php echo e(__('messages.t_stripe')); ?></span>
                                       <?php break; ?>
                                    <?php case ('offline'): ?>
                                       <span class="text-gray-500"><?php echo e(settings('offline_payment')->name); ?></span>
                                       <?php break; ?>
                                    <?php case ('paystack'): ?>
                                       <span class="text-gray-500"><?php echo e(settings('paystack')->name); ?></span>
                                       <?php break; ?>
                                    <?php case ('cashfree'): ?>
                                       <span class="text-gray-500"><?php echo e(settings('cashfree')->name); ?></span>
                                       <?php break; ?>
                                    <?php case ('xendit'): ?>
                                       <span class="text-gray-500"><?php echo e(settings('xendit')->name); ?></span>
                                       <?php break; ?>
                                   <?php default: ?>
                                       
                               <?php endswitch; ?>
                            </dd>
                        </div>

                        
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-gray-500">
                                <?php echo e(__('messages.t_payment_id')); ?>

                            </dt>
                            <dd class="mt-1 text-xs font-bold text-gray-900 sm:mt-0">
                               <?php echo e($order->invoice->payment_id); ?>

                            </dd>
                        </div>

                        
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-gray-500">
                                <?php echo e(__('messages.t_firstname')); ?>

                            </dt>
                            <dd class="mt-1 text-xs font-bold text-gray-900 sm:mt-0">
                               <?php echo e($order->invoice->firstname); ?>

                            </dd>
                        </div>

                        
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-gray-500">
                                <?php echo e(__('messages.t_lastname')); ?>

                            </dt>
                            <dd class="mt-1 text-xs font-bold text-gray-900 sm:mt-0">
                               <?php echo e($order->invoice->lastname); ?>

                            </dd>
                        </div>

                        
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-gray-500">
                                <?php echo e(__('messages.t_email_address')); ?>

                            </dt>
                            <dd class="mt-1 text-xs font-bold text-gray-900 sm:mt-0">
                               <?php echo e($order->invoice->email); ?>

                            </dd>
                        </div>

                        
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-gray-500">
                                <?php echo e(__('messages.t_company')); ?>

                            </dt>
                            <dd class="mt-1 text-xs font-bold text-gray-900 sm:mt-0">
                                <?php if($order->invoice->company): ?>
                                    <?php echo e($order->invoice->company); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </dd>
                        </div>

                        
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="text-xs font-medium text-gray-500">
                                <?php echo e(__('messages.t_address')); ?>

                            </dt>
                            <dd class="mt-1 text-xs font-bold text-gray-900 sm:mt-0">
                                <?php if($order->invoice->address): ?>
                                    <?php echo e($order->invoice->address); ?>

                                <?php else: ?>
                                    -
                                <?php endif; ?>
                            </dd>
                        </div>
                        
                    </dl>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\admin\orders\options\details.blade.php ENDPATH**/ ?>