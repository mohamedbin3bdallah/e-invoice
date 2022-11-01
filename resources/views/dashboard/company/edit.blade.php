<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.edit').' '.__('trans.company'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.companies')=>'companies', __('trans.edit').' '.__('trans.company')=>['company-edit', ['id'=>$resource->id]]]])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>'.__('trans.edit').' '.__('trans.company').'</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('company-update', ['id'=>$resource->id]) }}" enctype="multipart/form-data">
														@csrf
														
														<div class="mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-3">
																<span>{{ __('trans.image') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Image input wrapper-->
															<div class="mt-1">
																<!--begin::Image placeholder-->
																<style>.image-input-placeholder { background-image: url('/metronic8/demo22/assets/media/svg/files/blank-image.svg'); } [data-theme="dark"] .image-input-placeholder { background-image: url('/metronic8/demo22/assets/media/svg/files/blank-image-dark.svg'); }</style>
																<!--end::Image placeholder-->
																<!--begin::Image input-->
																<div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
																	<!--begin::Preview existing avatar-->
																	<div class="image-input-wrapper w-100px h-100px" style="background-image: url(&quot;https://preview.keenthemes.com/metronic8/demo22/apps/contacts/add-contact.html&quot;);"></div>
																	<!--end::Preview existing avatar-->
																	<!--begin::Edit-->
																	<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
																		<i class="bi bi-pencil-fill fs-7"></i>
																		<!--begin::Inputs-->
																		<input type="file" name="image" accept=".png, .jpg, .jpeg">
																		<input type="hidden" name="avatar_remove" value="0">
																		<!--end::Inputs-->
																	</label>
																	<!--end::Edit-->
																	<!--begin::Cancel-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Cancel-->
																	<!--begin::Remove-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Remove-->
																</div>
																<!--end::Image input-->
																@error('image')
																	<div class="alert alert-danger">{{ $message }}</div>
																@enderror
															</div>
															<!--end::Image input wrapper-->
														</div>
														
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.name') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="name" value="{{ $resource->name }}" />
															@error('name')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.address') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="address" value="{{ $resource->address }}" />
															@error('address')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.email') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="email" class="form-control form-control-solid" name="email" value="{{ $resource->email }}" />
															@error('email')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.website') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="url" class="form-control form-control-solid" name="website" value="{{ $resource->website }}" />
															@error('website')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.mobile') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="number" class="form-control form-control-solid" min="0" step="1" name="mobile" value="{{ $resource->mobile }}" />
															@error('mobile')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.landline') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="number" class="form-control form-control-solid" min="0" step="1" name="landline" value="{{ $resource->landline }}" />
															@error('landline')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.type') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															@php $name = 'name_'.app()->getLocale(); $type = $resource->company_type->$name; @endphp
															<input type="text" class="form-control form-control-solid" name="type" value="{{ $type }}" readonly />
															@error('type')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.status') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="status" class="form-control form-control-solid" id="status">
																<option value="0" @if($resource->active == 0) {{ 'selected' }} @endif>{{ __('trans.not_active') }}</option>
																<option value="1" @if($resource->active == 1) {{ 'selected' }} @endif>{{ __('trans.active') }}</option>
															</select>
															@error('status')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-3 rol-cols-md-1 row-cols-lg-3">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.identity') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="identity" value="{{ $resource->identity }}" />
															@error('identity')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.signature').' '.__('trans.type') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select class="form-control form-control-solid" name="sign_type" id="sign_type">
																<option value="I" @if($resource->sign_type == 'I') {{ 'selected' }} @endif>I</option>
																<option value="S" @if($resource->sign_type == 'S') {{ 'selected' }} @endif>S</option>
															</select>
															@error('sign_type')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.signature').' '.__('trans.value') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea class="form-control form-control-solid" name="sign_value">{{ $resource->sign_value }}</textarea>
															@error('sign_value')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-3 rol-cols-md-1 row-cols-lg-3">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7" id="country_alert_show">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.country') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="country" value="{{ $resource->country->name }}" readonly />
															@error('country')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7" id="state_alert_show">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.state') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															@php $name = (app()->getLocale() == 'en')? 'name':'name_'.app()->getLocale(); $state = $resource->state->$name; @endphp
															<input type="text" class="form-control form-control-solid" name="state" value="{{ $state }}" readonly />
															@error('state')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7" id="city_alert_show">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.city') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="city" value="{{ $resource->city->$name }}" readonly />
															@error('city')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.postal').' '.__('trans.code') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="postal_code" value="{{ $resource->postal_code }}" />
															@error('postal_code')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.street') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="street" value="{{ $resource->street }}" />
															@error('street')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-3 rol-cols-md-1 row-cols-lg-3">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.building').' '.__('trans.number') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="building_number" value="{{ $resource->building_number }}" />
															@error('building_number')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.floor') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="floor" value="{{ $resource->floor }}" />
															@error('floor')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.room') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="room" value="{{ $resource->room }}" />
															@error('room')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.landmark') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="landmark" value="{{ $resource->landmark }}" />
															@error('landmark')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.additional').' '.__('trans.information') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="additional_information" value="{{ $resource->additional_information }}" />
															@error('additional_information')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
														<div class="row row-cols-1 row-cols-sm-3 rol-cols-md-1 row-cols-lg-3">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7" id="company_alert_show">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.erp_client_id') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="erp_client_id" value="{{ $resource->erp_client_id }}" />
															@error('erp_client_id')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.erp_client_secret_1') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="erp_client_secret_1" value="{{ $resource->erp_client_secret_1 }}" />
															@error('erp_client_secret_1')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span>{{ __('trans.erp_client_secret_2') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="erp_client_secret_2" value="{{ $resource->erp_client_secret_2 }}" />
															@error('erp_client_secret_2')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														</div>
														</div>
														
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

@section('scripts')

<script>
	var select2_id_selectors = '#status, #sign_type';
</script>

@endsection

</x-app-layout>