<div class="w-full px-2">
    <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

        
        <div class="col-span-12 lg:col-span-4">
            <div class="border border-gray-100 rounded-lg bg-white dark:bg-zinc-800 dark:border-zinc-700">
                <div class="flex flex-col items-center py-10">
                    <img class="mb-3 w-24 h-24 rounded-full object-cover lazy" src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($user->avatar)); ?>" alt="<?php echo e($user->username); ?>">
                    <h5 class="mb-1 text-base font-black text-gray-900 dark:text-gray-200 tracking-wide flex items-center">
                        <?php echo e($user->username); ?>

                        <?php if($user->status === 'verified'): ?>
                            <img data-tooltip-target="tooltip-account-verified-<?php echo e($user->id); ?>" class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5" src="<?php echo e(url('public/img/auth/verified-badge.svg')); ?>" alt="<?php echo e(__('messages.t_account_verified')); ?>">
                            <div id="tooltip-account-verified-<?php echo e($user->id); ?>" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                <?php echo e(__('messages.t_account_verified')); ?>

                            </div>
                        <?php endif; ?>
                    </h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400"><?php echo e($user->headline); ?></span>
                    <div class="flex mt-4 space-x-3 rtl:space-x-reverse lg:mt-6">

                        
                        <a href="<?php echo e(url('messages/new', $user->username)); ?>" class="inline-flex items-center py-3 px-4 text-xs font-medium text-center text-white bg-primary-600 rounded-sm hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300"><?php echo e(__('messages.t_contact_me')); ?></a>

                        
                        <a href="<?php echo e(url('profile', $user->username)); ?>" class="inline-flex items-center py-2 px-4 text-xs font-medium text-center text-gray-900 bg-white dark:bg-zinc-700 dark:text-zinc-400 dark:border-zinc-700 dark:hover:bg-zinc-600 rounded-sm border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200"><?php echo e(__('messages.t_view_profile')); ?></a>

                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-span-12 lg:col-span-8">
            <div class="grid grid-cols-12 md:gap-x-6 gap-y-6">

                <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-span-12 lg:col-span-6">
                        <a href="<?php echo e(url('profile/' . $project->user->username . '/portfolio/' . $project->slug)); ?>" class="relative block p-8 overflow-hidden rounded-lg bg-white dark:bg-zinc-800">

                            <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                            <div class="justify-between sm:flex">
                                <div>
                                    <h5 class="text-base font-bold text-gray-900 dark:text-white">
                                        <?php echo e($project->title); ?>

                                    </h5>
                                    <?php if($project->project_link): ?>
                                        <p class="mt-1 text-xs font-normal text-gray-400 dark:text-gray-300 italic"><?php echo e($project->project_link); ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="flex-shrink-0 hidden ltr:ml-3 rtl:mr-3 sm:block">
                                    <img class="object-cover w-16 h-16 rounded-lg shadow-sm lazy" src="<?php echo e(placeholder_img()); ?>" data-src="<?php echo e(src($project->thumbnail)); ?>" alt="<?php echo e($project->title); ?>" />
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                    
                    <div class="col-span-12">
                        <div class="border-dashed border-2 rounded-md mb-6">
                            <div class="py-14 px-6 text-center text-sm sm:px-14">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <p class="mt-4 font-semibold text-gray-900"><?php echo e(__('messages.t_no_projects')); ?></p>
                                <p class="mt-2 text-gray-500 max-w-md mx-auto"><?php echo e(__('messages.t_this_user_has_no_projects_yet')); ?></p>
                                <a href="<?php echo e(url('profile', $user->username)); ?>" class="mt-4 font-medium text-xs text-primary-600 hover:underline block">Back to profile</a>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

            </div>
        </div>

    </div>
</div><?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\livewire\main\profile\portfolio.blade.php ENDPATH**/ ?>