<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>'Add Language', 'breadcrumbs'=>['home'=>'dashboard', 'languages'=>'languages', 'Add Language'=>'language-add']])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>Add New Language</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('language-store') }}">
														@csrf
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('Name') }}</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ __('Enter the language\'s name.') }}"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="name" value="{{ old('name') }}" />
															@error('name')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('Local') }}</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ __('Enter the language\'s local (ex: \'en\').') }}"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="local" value="{{ old('local') }}" />
															@error('local')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('Direction') }}</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ __('Choose the language\'s direction.') }}"></i>
															</label>
															<!--end::Label-->
															<!--begin::Select-->
															<select class="form-control form-control-solid" name="dir">
																<option value="0">{{ __('LTR') }}</option>
																<option value="1">{{ __('RTL') }}</option>
															</select>
															@error('dir')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Select-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('Default') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" name="def"/>
															</div>
															@error('def')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Checkbox-->
														</div>
														<!--end::Input group-->
														<!--begin::Separator-->
														<div class="separator mb-6"></div>
														<!--end::Separator-->
														<!--begin::Action buttons-->
														<div class="d-flex justify-content-end">
															<!--begin::Button-->
															<button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
															<!--end::Button-->
															<!--begin::Button-->
															<button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
																<span class="indicator-label">Save</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
															<!--end::Button-->
														</div>
														<!--end::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Card body-->
									
									@include('dashboard.card.close')
									
							</div>
							<!--end::Content wrapper-->
</x-app-layout>
