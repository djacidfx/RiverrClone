<?php echo $__env->make('Chatify::layouts.headLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div class="messenger">
        
        <div class="messenger-listView ltr:border-r rtl:border-l dark:border-zinc-700">

            
            <div class="m-header">

                
                <div class="py-4 px-5 border-b dark:border-zinc-700">
                    <div class="relative flex space-x-3 rtl:space-x-reverse group">
                        <a href="<?php echo e(url('/')); ?>">
                            <span class="h-8 w-8 rounded-full bg-slate-300 group-hover:bg-slate-400 dark:bg-zinc-600 dark:group-hover:bg-slate-200 flex items-center justify-center rtl:-rotate-180">
                                <svg class="h-6 w-6 !text-slate-500 dark:!text-zinc-400 group-hover:!text-zinc-200 dark:group-hover:!text-zinc-600" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path></svg>
                            </span>
                        </a>
                        <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                            <div>
                                <p class="text-sm text-slate-500 dark:text-white">
                                    <?php echo app('translator')->get('messages.t_messages'); ?>
                                </p>
                            </div>
                            <div class="whitespace-nowrap text-right">
                                <div class="listView-x">
                                    <svg class="!text-slate-500 dark:!text-slate-300 h-3.5 w-3.5 mt-0.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <nav class="w-full py-4 border-b dark:border-zinc-700">
                    <div class="w-full px-5">
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center ltr:pl-3 rtl:pr-3">
                                <svg class="h-5 w-5 !text-gray-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><desc></desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path><circle cx="16.5" cy="17.5" r="2.5"></circle><path d="M18.5 19.5l2.5 2.5"></path></svg>
                            </div>
                            <input type="text" class="messenger-search block w-full rounded-md border-gray-300 dark:border-zinc-700 ltr:pl-10 rtl:pr-10 focus:border-primary-600 focus:ring-primary-600 sm:text-sm" placeholder="<?php echo app('translator')->get('messages.t_search_in_ur_contacts'); ?>">
                        </div>
                    </div>
                </nav>
                
            </div>

            
            <div class="m-body contacts-container">
               
               
               <div class="<?php if($type == 'user'): ?> show <?php endif; ?> messenger-tab users-tab app-scroll" data-view="users">
    
                   
                   <div class="favorites-section border-b dark:border-zinc-700">
                    <p class="messenger-title !px-5"><?php echo app('translator')->get('messages.t_favorites'); ?></p>
                    <div class="messenger-favorites app-scroll-thin !px-5"></div>
                   </div>
    
                   
                   <?php echo view('Chatify::layouts.listItem', ['get' => 'saved']); ?>

    
                   
                   <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);position: relative;"></div>
    
               </div>
    
               
               <div class="<?php if($type == 'group'): ?> show <?php endif; ?> messenger-tab groups-tab app-scroll" data-view="groups">
                    
                    <p style="text-align: center;color:grey;margin-top:30px">
                        <a target="_blank" style="color:<?php echo e($messengerColor); ?>;" href="#">Click here</a> for more info!
                    </p>
                 </div>
    
                 
               <div class="messenger-tab search-tab app-scroll" data-view="search">
                    <p class="messenger-title !px-5 mb-2"><?php echo app('translator')->get('messages.t_search'); ?></p>
                    <div class="search-records">
                        <p class="message-hint mt-20"><span><?php echo app('translator')->get('messages.t_type_to_search_in_ur_contacts'); ?></span></p>
                    </div>
                 </div>

            </div>
        </div>
    
        
        <div class="messenger-messagingView">
            
            
            <div class="m-header m-header-messaging py-5 border-b dark:border-zinc-700 px-4" style="display: none">
                <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">

                    
                    <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                        
                        
                        <button type="button" class="md:hidden show-listView">
                            <svg class="h-6 w-6 reflection" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </button>

                        
                        <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                        </div>

                        
                        <span class="user-name show-infoSide cursor-pointer dark:!text-white"><?php echo e(config('app.name')); ?></span>

                    </div>

                    
                    <nav class="m-header-right space-x-3 rtl:space-x-reverse">

                        
                        <button class="focus:outline-none add-to-favorite">
                            <svg class="h-6 w-6 text-slate-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </button>

                    </nav>
                    
                </nav>
            </div>
    
            
            <div class="m-body messages-container app-scroll">

                
                <div class="internet-connection">

                    
                    <span class="ic-connected"><?php echo app('translator')->get('messages.t_chat_connected'); ?></span>

                    
                    <span class="ic-connecting"><?php echo app('translator')->get('messages.t_chat_connecting'); ?></span>

                    
                    <span class="ic-noInternet"><?php echo app('translator')->get('messages.t_chat_no_internet_access'); ?></span>

                </div>

                <div class="messages space-y-10">
                    <p class="message-hint center-el"><span><?php echo app('translator')->get('messages.t_no_conversation_selected_subtitle'); ?></span></p>
                </div>
                
                <div class="typing-indicator">
                    <div class="message-card typing px-5 !mx-0 !mt-4">
                        <p>
                            <span class="typing-dots">
                                <span class="dot dot-1"></span>
                                <span class="dot dot-2"></span>
                                <span class="dot dot-3"></span>
                            </span>
                        </p>
                    </div>
                </div>
    
            </div>
            
            <?php echo $__env->make('Chatify::layouts.sendForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="messenger-infoView app-scroll" style="display: none">
            
            <nav class="py-4">

                
                <a class="cursor-pointer flex justify-end">
                    <svg class="h-6 w-6 text-gray-400 hover:text-gray-600" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                
            </nav>
            <div class="w-full px-6 flex flex-col space-y-8">
                <?php echo view('Chatify::layouts.info')->render(); ?>

            </div>
        </div>
    </div>
    <?php echo $__env->make('Chatify::layouts.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('Chatify::layouts.footerLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php /**PATH C:\Users\Pc\Desktop\1.3.3\resources\views\vendor\Chatify\pages\app.blade.php ENDPATH**/ ?>