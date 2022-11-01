<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>'Show Language File', 'breadcrumbs'=>['home'=>'dashboard', 'languages'=>'languages', 'Show Language File'=>['language-file-show', ['local'=>$local]]]])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>Edit Language File</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('language-file-update', ['local'=>$local]) }}">
														@csrf
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('File') }}</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ __('Language\'s file.') }}"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea class="form-control form-control-solid" rows="25" name="file" />{{ $file }}</textarea>
															@error('file')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														
														<!--begin::Separator-->
														<div class="separator mb-6"></div>
														<!--end::Separator-->
														<!--begin::Action buttons-->
														<div class="d-flex justify-content-end">
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
