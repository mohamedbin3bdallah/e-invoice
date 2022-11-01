<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.permissions'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.roles')=>'roles', __('trans.permissions')=>['permissions-show', ['id'=>$role->id]]]])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>'.__('trans.update').' '.$role->name.' '.__('trans.permissions').'</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('permissions-update', ['id'=>$role->id]) }}">
														@csrf
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.permissions') }}</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{ __('trans.choose_role_permissions') }}"></i>
															</label>
															<!--end::Label-->
															@error('permissions')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--begin::Input-->
															@php
																$name = 'name_'.$cur_lang_local;
															@endphp
															@foreach($resources as $key => $resource)
																@if($key % 4 == 0) <div class="row mt-3"> @endif
																	<div class="col-md-3">
																	<input type="checkbox" class="form-check-input"  name="permissions[]" value="{{ $resource->id }}" @if(in_array($resource->id, $role_permissions)) {{ 'checked' }} @endif />
																	<label>{{ $resource->$name }}</label>
																	</div>
																@if($key % 4 == 3) </div> @endif
															@endforeach
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
																<span class="indicator-label">{{ __('trans.update') }}</span>
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
