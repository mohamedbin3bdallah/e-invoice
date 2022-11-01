								<!--begin::Toolbar-->
								<div id="kt_app_toolbar" class="app-toolbar align-items-center justify-content-between py-2 py-lg-4">
									<!--begin::Toolbar wrapper-->
									<div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
										<!--begin::Page title-->
										<div class="d-flex flex-column align-items-start me-3 gap-2">
											<!--begin::Title-->
											<h1 class="d-flex text-dark fw-bold m-0 fs-3">{{ __($title) }}</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
												
												@foreach($breadcrumbs as $breadcrumb_key => $breadcrumb)
												<!--begin::Item-->
												<li class="breadcrumb-item text-gray-600">
													@if(is_array($breadcrumb))
														<a href="{{ route($breadcrumb[0], $breadcrumb[1]) }}" class="text-gray-600 text-hover-primary">{{ __($breadcrumb_key) }}</a>
													@else
														<a href="{{ route($breadcrumb) }}" class="text-gray-600 text-hover-primary">{{ __($breadcrumb_key) }}</a>
													@endif
												</li>
												<!--end::Item-->
												@endforeach
												
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Toolbar-->