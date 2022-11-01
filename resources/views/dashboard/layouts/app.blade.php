<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" direction="{{ $cur_lang_dir }}" dir="{{ $cur_lang_dir }}" style="direction: {{ $cur_lang_dir }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name'.'-Dashboard', 'E-Invoice-Dashboard') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
		<link rel="stylesheet" href="{{ asset('metronic/demo22/dist/assets/plugins/global/plugins.bundle.'.$cur_lang_dir.'.css') }}">
		<link rel="stylesheet" href="{{ asset('metronic/demo22/dist/assets/css/style.bundle.'.$cur_lang_dir.'.css') }}">
		
		@yield('styles')
		
		<style>
		.dataTables_length
		{
			float: @if($cur_lang_dir == 'ltr') {{ 'right' }} @else {{ 'left' }} @endif;
		}
		
		.select2-container--bootstrap5 .select2-selection--multiple:not(.form-select-sm):not(.form-select-lg) .select2-selection__choice .select2-selection__choice__display
		{
			margin-right: @if($cur_lang_dir == 'ltr') {{ '0' }} @else {{ '1.1rem' }} @endif;
			margin-left: @if($cur_lang_dir == 'ltr') {{ '1.1rem' }} @else {{ '0' }} @endif;
		}
		</style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body id="kt_body" data-kt-app-header-stacked="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        

            <!-- Page Heading -->
            <header>
				@include('dashboard.layouts.header')
            </header>

            <!-- Page Content -->
            <main>
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Wrapper container-->
					<div class="app-container container-xxl d-flex flex-row flex-column-fluid">
						<!--begin::Main-->
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							{{ $slot }}
							@include('dashboard.layouts.footer')
						</div>
						<!--end:::Main-->
					</div>
					<!--end::Wrapper container-->
				</div>
				<!--end::Wrapper-->
            </main>
		
			</div>
		</div>
		
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('metronic/demo22/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('metronic/demo22/dist/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="{{ asset('metronic/demo22/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
		<!--end::Custom Javascript-->
		@yield('scripts')
		<!--end::Javascript-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		<script>
			if (typeof select2_dropdownParent_id_selector !== 'undefined') var select2_dropdownParent = $(select2_dropdownParent_id_selector);
			else var select2_dropdownParent = false;
			if (typeof select2_id_selectors !== 'undefined') var select2_id_selectors = select2_id_selectors;
			else var select2_id_selectors = '';
			if (typeof select2_dropdownParent_id_selector_2 !== 'undefined') var select2_dropdownParent_2 = $(select2_dropdownParent_id_selector_2);
			else var select2_dropdownParent_2 = false;
			if (typeof select2_id_selectors_2 !== 'undefined') var select2_id_selectors_2 = select2_id_selectors_2;
			else var select2_id_selectors_2 = '';
			(function($) {
				$(document).ready(function () {
					$(select2_id_selectors).select2({
						//dir: "rtl",
						dropdownParent: select2_dropdownParent
					});
					
					$(select2_id_selectors_2).select2({
						//dir: "rtl",
						dropdownParent: select2_dropdownParent_2
					});
				});
			})(jQuery);
		</script>
    </body>
</html>
