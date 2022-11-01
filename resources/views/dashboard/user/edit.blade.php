<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.edit').' '.__('trans.user'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.users')=>'users', __('trans.edit').' '.__('trans.user')=>['user-edit', ['id'=>$resource->id]]]])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>'.__('trans.edit').' '.__('trans.user').'</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('user-update', ['id'=>$resource->id]) }}" enctype="multipart/form-data">
														@csrf
														
														<div class="mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-3">
																<span class="required">{{ __('trans.image') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Image input wrapper-->
															<div class="mt-1">
																@if($resource->image_thumbnail) <img src="{{ url('users/images/thumbnails/'.$resource->image_thumbnail) }}">
																@else <img src="{{ url('users/blank.png') }}">
																@endif
															</div>
															<!--end::Image input wrapper-->
														</div>
														
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
														<div class="col">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.first_name') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="fname" value="{{ $resource->fname }}" />
															@error('fname')
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
																<span class="required">{{ __('trans.last_name') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="lname" value="{{ $resource->lname }}" />
															@error('lname')
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
																<span class="required">{{ __('trans.email') }}</span>
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
																<span class="required">{{ __('trans.gender') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="gender" class="form-control form-control-solid" id="gender">
																<option value="1" @if($resource->gender == 1) {{ 'selected' }} @endif>{{ __('trans.male') }}</option>
																<option value="2" @if($resource->gender == 2) {{ 'selected' }} @endif>{{ __('trans.female') }}</option>
															</select>
															@error('gender')
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
																<span>{{ __('trans.password') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="password" class="form-control form-control-solid" name="password" />
															@error('password')
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
														<div class="fv-row mb-7" id="company_alert_show">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.company') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="company" value="@if(isset($resource->company)) {{ $resource->company->name }} @endif" readonly />
															@error('company')
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
																<span class="required">{{ __('trans.branch') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="branch" value="@if(isset($resource->branch)) {{ $resource->branch->name }} @endif" readonly />
															@error('branch')
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
																<span class="required">{{ __('trans.role') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="role" value="{{ $resource->group->name }}" readonly />
															@error('role')
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
	var select2_id_selectors = '#gender, #status';
</script>

@endsection

</x-app-layout>