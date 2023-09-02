<main class="w-full" x-data="window.lRtoYGzyUMsMBKk" x-init="initialize">
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

                    
                    <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                        
                        <div class="mb-14">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100"><?php echo e(__('messages.t_preview_review')); ?>

                            </h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_here_is_how_ur_review_looks_like')); ?>

                            </p>
                        </div>

                        
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                            
                            <div class="col-span-12 md:col-span-6">
                                <div class="bg-white dark:bg-zinc-700 dark:border-zinc-600 relative block p-8 overflow-hidden border border-gray-100 rounded-lg mb-6">

                                    <span
                                        class="absolute inset-x-0 bottom-0 h-2  bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"
                                    ></span>

                                    <div class="flex items-center">
                                        <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($review->user->avatar)); ?>" alt="<?php echo e($review->user->username); ?>" class="lazy h-8 w-8 rounded-full">
                                        <div class="ml-4 group">
                                            <a href="<?php echo e(url('profile', $review->user->username)); ?>" target="_blank" class="text-sm font-bold text-gray-900 dark:text-gray-100 flex items-center group-hover:text-primary-600 dark:group-hover:text-primary-600">
                                                <?php echo e($review->user->username); ?>

                                                <?php if($review->user->status === 'verified'): ?>
                                                    <img data-tooltip-target="tooltip-account-verified-<?php echo e($review->id); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg')); ?>" alt="<?php echo e(__('messages.t_account_verified')); ?>">
                                                    <div id="tooltip-account-verified-<?php echo e($review->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                        <?php echo e(__('messages.t_account_verified')); ?>

                                                    </div>
                                                <?php endif; ?>

                                                
                                                <?php if($review->user->country): ?>
                                                    <div class="ml-2">
                                                        <img src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(countryFlag($review->user->country?->code)); ?>" alt="<?php echo e($review->user->country?->name); ?>" class="lazy h-3 -mt-px rounded-sm">
                                                    </div>
                                                <?php endif; ?>

                                            </a>
                                            <div class="mt-1 flex items-start">
                                                <div wire:ignore class="rating-item-container" data-rating-value="<?php echo e($review->rating); ?>"></div>
                                                <span class="ltr:ml-2 rtl:mr-2 text-[11px] font-normal text-gray-400"><span class="pr-2 text-gray-300">•</span> <?php echo e(format_date($review->created_at, 'ago')); ?></span>
                                            </div>
                                        </div>
                                    </div>
                        
                                    
                                    <?php if($review->message): ?>
                                        <div class="mt-4 space-y-6 text-sm italic text-gray-600 dark:text-gray-50">
                                            <p><?php echo e($review->message); ?></p>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>

                            
                            <div class="col-span-12 md:col-span-6">
                                <div class="bg-white dark:bg-zinc-700 dark:border-zinc-600 relative block p-8 overflow-hidden border border-gray-100 rounded-lg mb-6">
                                    <span
                                        class="absolute inset-x-0 bottom-0 h-2  bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"
                                    ></span>

                                    <div class="justify-between sm:flex">
                                        <div>
                                            <a href="<?php echo e(url('service', $review->gig->slug)); ?>" target="_blank" class="text-sm font-bold text-gray-900 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-600">
                                                <?php echo e($review->gig->title); ?>

                                            </a>
                                        </div>

                                        <div class="flex-shrink-0 hidden ltr:ml-3 rtl:mr-3 sm:block">
                                            <img
                                                class="lazy object-cover w-16 h-16 rounded-lg shadow-sm"
                                                src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($review->gig->thumbnail)); ?>"
                                                alt="<?php echo e($review->gig->title); ?>"
                                            />
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</main>

<?php $__env->startPush('scripts'); ?>
    <script>
        function lRtoYGzyUMsMBKk() {
            return {

                initialize() {
                    window.rating({ target: "rating-item-container", fill: "#5b5b5b", background: "#cdcdcd" });
                }

            }
        }
        window.lRtoYGzyUMsMBKk = lRtoYGzyUMsMBKk();
    </script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\main\account\reviews\options\preview.blade.php ENDPATH**/ ?>