<div class="w-full" x-data="window.TBhqVNUmCYEnOEj">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Header --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-10">
        <nav class="justify-between px-4 py-3 text-gray-700 border border-gray-100 rounded-lg shadow-sm sm:flex sm:px-5 bg-white dark:bg-zinc-800 dark:border-zinc-700 dark:shadow-none" aria-label="Breadcrumb">

            {{-- Menu --}}
            <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                {{-- Main home --}}
                <li>
                    <div class="flex items-center">
                        <a href="{{ url('/') }}" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                            @lang('messages.t_home')
                        </a>
                    </div>
                </li>

                {{-- My dashboard --}}
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="{{ url('seller/home') }}" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                            @lang('messages.t_my_dashboard')
                        </a>
                    </div>
                </li>

                {{-- Orders --}}
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="{{ url('seller/orders') }}" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                            @lang('messages.t_orders')
                        </a>
                    </div>
                </li>

                {{-- Order details --}}
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                            @lang('messages.t_order_details')
                        </span>
                    </div>
                </li>

            </ol>

            {{-- Action buttons --}}
            <div class="flex items-center">

                @if (!$order->is_finished && $order->order->invoice && $order->order->invoice->status !== 'pending')

                    {{-- Cancel order --}}
                    @if ($order->status === 'pending')
                        <span class="block ltr:mr-4 rtl:ml-4">
                            <button x-on:click="confirm('{{ __('messages.t_are_u_sure_u_want_to_cancel_order') }}') ? $wire.cancel() : ''" wire:loading.attr="disabled" wire:target="cancel()" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-primary-600">
                                {{ __('messages.t_cancel_order') }}
                            </button>
                        </span>
                    @endif
        
                    {{-- Start the order --}}
                    @if ($order->status === 'pending')
                        <span class="block ltr:mr-4 rtl:ml-4">
                            <button x-on:click="start" type="button" class="inline-flex items-center px-4 py-2 border border-primary-600 rounded-sm shadow-sm text-[13px] font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-50 focus:ring-primary-600">
                                {{ __('messages.t_start_the_order') }}
                            </button>
                        </span>
                    @endif

                    {{-- Deliver work --}}
                    @if ($order->status === 'proceeded' || ($order->status === 'delivered' && !$order->is_finished))
                        <span class="block ltr:mr-4 rtl:ml-4">
                            <a href="{{ url('seller/orders/deliver', $order->uid) }}" type="button" class="inline-flex items-center px-4 py-2 border border-primary-600 rounded-sm shadow-sm text-[13px] font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-50 focus:ring-primary-600">
                                {{ __('messages.t_deliver_work') }}
                            </a>
                        </span>
                    @endif
                        
                @endif

                {{-- Back to orders --}}
                <span class="block">
                    <a href="{{ url('seller/orders') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-700/40 rounded shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-700/40 hover:bg-gray-50 dark:hover:bg-zinc-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-primary-600 dark:focus:ring-offset-zinc-700/40">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 dark:text-zinc-200 ltr:mr-2 rtl:ml-2 rtl:rotate-180" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>

                        {{ __('messages.t_back_to_orders') }}
                    </a>
                </span>
                
            </div>

        </nav>
    </div>

    {{-- Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
        <dl class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm border border-gray-200 dark:border-zinc-700 mb-8">

            {{-- Placed at --}}
            <div class="bg-gray-50 dark:bg-zinc-700/40 px-6 py-5 sm:grid sm:grid-cols-3 sm:gap-4 rounded-t-lg">
                <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_date_placed') }}</dt>
                <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:mt-0 sm:col-span-2">
                    {{ format_date($order->placed_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                </dd>
            </div>

            {{-- Status --}}
            <div class="bg-white dark:bg-zinc-600 px-6 py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_status') }}</dt>
                <dd class="mt-1 sm:mt-0 sm:col-span-2">
                    @if ($order->order->invoice && $order->order->invoice->status === 'pending')
                        <span class="inline-flex items-center px-2.5 py-1 rounded-sm text-[13px] font-medium bg-amber-50 text-amber-800 dark:text-amber-400 dark:bg-transparent">
                            {{ __('messages.t_pending_payment') }}
                        </span>
                    @else
                        @switch($order->status)

                            {{-- Pending --}}
                            @case('pending')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-sm text-[13px] font-medium bg-yellow-50 text-yellow-800 dark:text-yellow-400 dark:bg-transparent">
                                    {{ __('messages.t_pending') }}
                                </span>
                                @break
                            
                            {{-- Delivered --}}
                            @case('delivered')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-sm text-[13px] font-medium bg-green-50 text-green-800 dark:text-green-400 dark:bg-transparent">
                                    {{ __('messages.t_delivered') }}
                                </span>
                                @break

                            {{-- Refunded --}}
                            @case('refunded')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-sm text-[13px] font-medium bg-red-50 text-red-800 dark:text-red-400 dark:bg-transparent">
                                    {{ __('messages.t_refunded') }}
                                </span>
                                @break

                            {{-- Proceeded --}}
                            @case('proceeded')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-sm text-[13px] font-medium bg-blue-50 text-blue-800 dark:text-blue-400 dark:bg-transparent">
                                    {{ __('messages.t_in_the_process') }}
                                </span>
                                @break

                            {{-- Canceled --}}
                            @case('canceled')
                                <span class="inline-flex items-center px-2.5 py-1 rounded-sm text-[13px] font-medium bg-gray-50 text-gray-800 dark:text-gray-300 dark:bg-transparent">
                                    {{ __('messages.t_canceled') }}
                                </span>
                                @break

                            @default
                                
                        @endswitch  
                    @endif
                </dd>
            </div>

            {{-- Expected delivery date --}}
            <div class="bg-gray-50 dark:bg-zinc-700/40 px-6 py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_expected_delivery_date') }}</dt>
                <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:mt-0 sm:col-span-2">
                    @if ($order->expected_delivery_date)
                        {{ format_date($order->expected_delivery_date, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                    @else
                        —
                    @endif
                </dd>
            </div>

            {{-- Quantity --}}
            <div class="bg-white dark:bg-zinc-600 px-6 py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_quantity') }}</dt>
                <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:mt-0 sm:col-span-2">
                    {{ $order->quantity }}
                </dd>
            </div>

            {{-- Total --}}
            <div class="bg-gray-50 dark:bg-zinc-700/40 px-6 py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_total') }}</dt>
                <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:mt-0 sm:col-span-2">
                    @money($order->profit_value, settings('currency')->code, true)
                </dd>
            </div>

            {{-- Gig --}}
            <div class="bg-white dark:bg-zinc-600 px-6 py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_gig') }}</dt>
                <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:mt-0 sm:col-span-2">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-md shadow-sm lazy object-cover object-center" src="{{ placeholder_img() }}" data-src="{{ src($order->gig->thumbnail) }}" alt="">
                        </div>
                        <div class="ltr:ml-4 rtl:mr-4">
                            <h3 class="text-sm leading-6 font-medium text-gray-700 dark:text-gray-50 mb-2 block">
                                {{ $order->gig->title }}
                            </h3>
                            <div class="mt-1 text-xs space-x-2 rtl:space-x-reverse">

                                {{-- View gig --}}
                                <a href="{{ url('service', $order->gig->slug) }}" target="_blank" class="text-primary-600 font-medium">
                                    {{ __('messages.t_view_gig') }}
                                </a>

                                <span class="text-gray-500 dark:text-gray-300 font-black">·</span>

                                {{-- Edit gig --}}
                                <a href="{{ url('seller/gigs/edit', $order->gig->uid) }}" target="_blank" class="text-primary-600 font-medium">
                                    {{ __('messages.t_edit_gig') }}
                                </a>

                            </div>
                        </div>
                    </div>
                </dd>
            </div>

            {{-- List of upgrades --}}
            @if ($order->has('upgrades'))
                <div class="bg-gray-50 dark:bg-zinc-700/40 px-6 py-5 sm:grid sm:grid-cols-3 sm:gap-4 rounded-b-lg">
                    <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_upgrades') }}</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <fieldset class="space-y-5">
                            @foreach ($order->upgrades as $upgrade)
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" class="h-4 w-4 text-gray-300 border-gray-200 border-2 rounded-sm cursor-not-allowed pointer-events-none dark:disabled:bg-zinc-500" checked disabled>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3 text-sm mt-[-3px]">
                                        <label class="font-medium text-gray-500 dark:text-gray-200 text-sm">{{ $upgrade->title }}</label>
                                        <p class="font-normal text-gray-400">
                                            <div class="mt-1 flex text-sm">
                                                <p class="text-gray-400 text-xs">+ @money($upgrade->price, settings('currency')->code, true)</p>
                            
                                                @if ($upgrade->extra_days)
                                                    <p class="ltr:ml-4 ltr:pl-4 ltr:border-l rtl:mr-4 rtl:pr-4 rtl:border-r border-gray-200 text-gray-400 text-xs">
                                                        {{ __('messages.t_extra_days_delivery_time_short', ['time' => delivery_time_trans($upgrade->extra_days)]) }}
                                                    </p>
                                                @else
                                                    <p class="ltr:ml-4 ltr:pl-4 ltr:border-l rtl:mr-4 rtl:pr-4 rtl:border-r border-gray-200 text-gray-400 text-xs">
                                                        {{ __('messages.t_no_changes_delivery_time') }}
                                                    </p>
                                                @endif
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </fieldset>
                    </dd>
                </div>
            @endif

        </dl>
    </div>

</div>

@push('scripts')

    {{-- SweetAlert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- AlpineJs --}}
    <script>
        function TBhqVNUmCYEnOEj() {
            return {

                // Start the order
                start() {
                    const is_requirements_sent = @js($order->is_requirements_sent);

                    if (!is_requirements_sent) {
                        Swal.fire({
                            title             : "<span class='text-lg font-bold text-black'>{{ __('messages.t_attention_needed') }}</span>",
                            html              : "<p class='text-sm text-gray-500 font-normal overflow-hidden px-12'>{{ __('messages.t_buyer_didnt_send_requirements_yet_continue') }}</p>",
                            showCancelButton  : true,
                            cancelButtonText  : "{{ __('messages.t_cancel') }}",
                            confirmButtonText : "{{ __('messages.t_i_have_all_info_needed') }}",
                            confirmButtonColor: '',
                            focusConfirm      : false,
                            allowOutsideClick : false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                @this.start();
                            }
                        });
                    } else {

                        @this.start();

                    }
                }

            }
        }
        window.TBhqVNUmCYEnOEj = TBhqVNUmCYEnOEj();
    </script>

@endpush

@push('styles')
    <style>
        .application .swal2-styled.swal2-cancel {
            background-color: transparent !important;
            color: #8f8f8f;
        }
        .application .swal2-actions button {
            font-size: 13px;
            font-weight: 400;
            letter-spacing: .2px;
        }
    </style>
@endpush