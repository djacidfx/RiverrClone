@extends('livewire.main.layout.app')

@section('content')
    <div class="w-full">

        {{-- Loading --}}
        <x-forms.loading />

        {{-- Section --}}
        <div class="lg:grid lg:grid-cols-12">

            {{-- Sidebar --}}
            <aside class="lg:col-span-3 py-6 hidden lg:block bg-white shadow-sm border border-gray-200 rounded-lg dark:bg-zinc-800 dark:border-transparent" wire:ignore>
                <x-main.account.sidebar />
            </aside>

            {{-- Container --}}
            <div class="lg:col-span-9 lg:ltr:ml-8 lg:rtl:mr-8">

                {{-- Head --}}
                <div class="w-full mb-16">
                    <div class="mx-auto max-w-7xl">
                        <div class="lg:flex lg:items-center lg:justify-between">
                
                            <div class="min-w-0 flex-1">
                
                                {{-- Breadcrumbs --}}
                                <div class="mb-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                                    <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                                        {{-- Main home --}}
                                        <li>
                                            <div class="flex items-center">
                                                <a href="{{ url('/') }}" class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                                    @lang('messages.t_home')
                                                </a>
                                            </div>
                                        </li>
                        
                                        {{-- My projects --}}
                                        <li aria-current="page">
                                            <div class="flex items-center">
                                                <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                                <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                                    @lang('messages.t_my_projects')
                                                </span>
                                            </div>
                                        </li>
                        
                                    </ol>
                                </div>
                
                                {{-- Section heading --}}
                                <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                                    @lang('messages.t_edit_project')
                                </h2>
                                
                            </div>
                
                            {{-- Actions --}}
                            <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                                {{-- View project --}}
                                <span class="block">
                                    <a href="{{ url('project/' . $project->pid . '/' . $project->slug) }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-primary-600">
                                        <svg class="h-5 w-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"></path></svg>
                                        {{ __('messages.t_view_project') }}
                                    </a>
                                </span>
                    
                            </div>
                
                        </div>
                    </div>
                </div>

                {{-- Content --}}
                <div class="w-full">
                    <div id="app">

                        {{-- Php varialbles --}}
                        @php
                            
                            // Set translations
                            $translations = [
                                't_project_title'                     => __('messages.t_project_title'),
                                't_project_description'               => __('messages.t_project_description'),
                                't_post_project_description_hint'     => __('messages.t_post_project_description_hint'),
                                't_choose_category'                   => __('messages.t_choose_category'),
                                't_post_project_category_hint'        => __('messages.t_post_project_category_hint'),
                                't_post_project_skills_hint'          => __('messages.t_post_project_max_skills_hint', ['max' => settings('projects')->max_skills]),
                                't_what_skills_are_required'          => __('messages.t_what_skills_are_required'),
                                't_how_do_u_want_to_pay'              => __('messages.t_how_do_u_want_to_pay'),
                                't_price_placeholder_0_00'            => __('messages.t_price_placeholder_0_00'),
                                't_min'                               => __('messages.t_min'),
                                't_max'                               => __('messages.t_max'),
                                't_budget'                            => __('messages.t_budget'),
                                't_fixed_price'                       => __('messages.t_fixed_price'),
                                't_hourly_price'                      => __('messages.t_hourly_price'),
                                't_days'                              => strtolower(__('messages.t_days')),
                                't_selected'                          => __('messages.t_selected'),
                                't_select'                            => __('messages.t_select'),
                                't_save_and_continue'                 => __('messages.t_save_and_continue'),
                                't_no_results_found'                  => __('messages.t_no_results_found'),
                                't_max_5_skills_allowed'              => __('messages.t_max_5_skills_allowed'),
                                't_validator_required'                => __('messages.t_validator_required'),
                                't_validator_required_title'          => __('messages.t_validator_max', ['max' => 100]),
                                't_toast_something_went_wrong'        => __('messages.t_toast_something_went_wrong'),
                                't_toast_select_at_least_5_skills'    => __('messages.t_toast_select_at_least_5_skills'),
                                't_back'                              => __('messages.t_back'),
                                't_invalid_price_format'              => __('messages.t_invalid_price_format'),
                                't_promotion'                         => __('messages.t_promotion'),
                                't_make_ur_project_premium'           => $settings->is_free ? __('messages.t_make_ur_project_premium_optional') : __('messages.t_make_ur_project_premium'),
                                't_home'                              => __('messages.t_home'),
                                't_my_projects'                       => __('messages.t_my_projects'),
                                't_post_new_project'                  => __('messages.t_post_new_project'),
                                't_total'                             => __('messages.t_total'),
                                't_post_project'                      => __('messages.t_post_project'),
                                't_toast_select_plan_to_post_project' => __('messages.t_toast_select_plan_to_post_project'),
                                't_max_project_price_must_be_greater' => __('messages.t_max_project_price_must_be_greater'),
                                't_toast_operation_success'           => __('messages.t_toast_operation_success'),
                                't_recaptcha_error_message'           => __('messages.t_recaptcha_error_message'),
                                't_update_project'                    => __('messages.t_update_project'),
                                't_max_allowed_skills_reached'        => __('messages.t_max_allowed_skills_reached')
                            ]
            
                        @endphp
                        
                        {{-- Form --}}
                        <edit-project 
                            _project='@json($project)'
                            categories="{{ json_encode($categories) }}"
                            translations="{{ json_encode($translations) }}"
                            plans="{{ json_encode($plans) }}"
                            _settings="{{ $settings }}"
                            currency_symbol="{{ $currency_symbol }}"
                            is_recaptcha="{{ settings('security')->is_recaptcha }}"
                            recaptcha_site_key="{{ config('recaptcha.site_key') }}" />

                    </div>
                </div>

            </div>

        </div>
                    
    </div>
@endsection

@push('styles')

	{{-- Select2.css --}}
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endpush