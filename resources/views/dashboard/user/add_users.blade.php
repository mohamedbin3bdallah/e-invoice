<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.add').' '.__('trans.users'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.users')=>'users', __('trans.add').' '.__('trans.users')=>'users-add']])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>'.__('trans.add').' '.__('trans.users').'</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('users-store') }}" enctype="multipart/form-data">
														@csrf
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.upload') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="file" class="form-control form-control-solid" name="file" />
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
															<button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">{{ __('trans.cancel') }}</button>
															<!--end::Button-->
															<!--begin::Button-->
															<button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
																<span class="indicator-label">{{ __('trans.save') }}</span>
																<span class="indicator-progress">{{ __('trans.please_wait') }}
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