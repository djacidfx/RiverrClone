<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config()->get('direction') }}" @class(['dark' => current_theme() === 'dark'])>
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Generate seo tags --}}
        {!! SEO::generate() !!}

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{ src( settings('general')->favicon ) }}"/>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        {{-- Livewire styles --}}
        @livewireStyles

        {{-- Styles --}}
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        {{-- Custom fonts --}}
		{!! settings('appearance')->font_link !!}

		{{-- Custom css --}}
        <style>
            :root {
                --color-primary  : {{ settings('appearance')->colors['primary'] }};
                --color-primary-h: {{ hex2hsl( settings('appearance')->colors['primary'] )[0] }};
                --color-primary-s: {{ hex2hsl( settings('appearance')->colors['primary'] )[1] }}%;
                --color-primary-l: {{ hex2hsl( settings('appearance')->colors['primary'] )[2] }}%;
            }
            html {
                font-family: @php echo settings('appearance')->font_family @endphp, sans-serif !important;
            }
        </style>

        {{-- Styles --}}
        @stack('styles')

        {{-- JavaScript variables --}}
        <script>
            __var_app_url        = "{{ url('/') }}";
            __var_app_locale     = "{{ app()->getLocale() }}";
            __var_rtl            = @js(config()->get('direction') === 'ltr' ? false : true);
            __var_primary_color  = "{{ settings('appearance')->colors['primary'] }}";
            __var_axios_base_url = "{{ url('/') }}/";
            __var_currency_code  = "{{ settings('currency')->code }}";
        </script>

        {{-- Custom head code --}}
        @if (settings('appearance')->custom_code_head_main_layout)
            {!! settings('appearance')->custom_code_head_main_layout !!}
        @endif

    </head>

    <body class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden {{ app()->getLocale() === 'ar' ? 'application-ar' : '' }}">

        {{-- Notification --}}
        <x-notifications position="top-center" z-index="z-[60]" />

        {{-- Container --}}
        <div class="min-h-screen flex grow bg-slate-50 dark:bg-zinc-700">
            
            <div class="hidden w-full place-items-center lg:grid">
                <div class="w-full px-2 py-40 sm:py-48 sm:px-12 flex flex-col justify-center relative bg-no-repeat bg-center bg-cover h-full" @if(settings('auth')->wallpaper) style="background-image: url({{ src(settings('auth')->wallpaper) }})" @endif>
                    <span class="absolute bg-gradient-to-b from-primary-500 to-primary-400 opacity-75 inset-0 z-0"></span>

                    {{-- Logo --}}
                    <div class="fixed top-0 ltr:left-0 rtl:right-0 hidden p-6 lg:block lg:px-12">
                        @if (settings('general')->logo_dark)
                            <a href="{{ url('/') }}" class="flex items-center">
                                <img src="{{ src(settings('general')->logo_dark) }}" alt="{{ settings('general')->title }}" style="height: {{ settings('appearance')->sizes['header_desktop_logo_height'] }}px;">
                            </a>
                        @else
                            <a href="{{ url('/') }}" class="flex items-center">
                                <img src="{{ src(settings('general')->logo) }}" alt="{{ settings('general')->title }}" style="height: {{ settings('appearance')->sizes['header_desktop_logo_height'] }}px;">
                            </a>
                        @endif
                    </div>

                    {{-- Copyrights --}}
                    <div class="fixed bottom-0 ltr:left-0 rtl:right-0 hidden p-6 lg:block lg:px-12 text-white font-normal text-[13px]">
                        {!! settings('footer')->copyrights !!}
                    </div>

                </div>
            </div>
            <main class="flex w-full flex-col items-center bg-white dark:bg-zinc-800 lg:max-w-md">
                @yield('content')
            </main>
        </div>

        {{-- Livewire scripts --}}
        @livewireScripts

        {{-- Wire UI --}}
        <wireui:scripts />

        {{-- Core Js --}}
        <script defer src="{{ mix('js/app.js') }}"></script>

        {{-- Helpers --}}
        <script src="{{ url('public/js/utils.js') }}"></script>

        {{-- Custom scripts --}}
        @stack('scripts')

        {{-- Custom footer code --}}
        @if (settings('appearance')->custom_code_footer_main_layout)
            {!! settings('appearance')->custom_code_footer_main_layout !!}
        @endif

    </body>

</html>