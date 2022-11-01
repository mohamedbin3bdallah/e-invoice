<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" direction="{{ $cur_lang_dir }}" dir="{{ $cur_lang_dir }}" style="direction: {{ $cur_lang_dir }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'E-Invoice') }}</title>

        <!-- Fonts -->
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">-->
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

        <!-- Styles -->
		<link rel="stylesheet" href="{{ asset('metronic/demo22/dist/assets/plugins/global/plugins.bundle.'.$cur_lang_dir.'.css') }}">
		<link rel="stylesheet" href="{{ asset('metronic/demo22/dist/assets/css/style.bundle.'.$cur_lang_dir.'.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <!--<body id="kt_body" class="app-blank app-blank">-->
	<body id="kt_body" class="bg-gray">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
        
		<div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
		
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('metronic/demo22/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('metronic/demo22/dist/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="{{ asset('metronic/demo22/dist/assets/js/custom/authentication/sign-in/general.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
    </body>
</html>
