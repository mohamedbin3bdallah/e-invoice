<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.add').' '.__('trans.user'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.users')=>'users', __('trans.add').' '.__('trans.user')=>'user-add']])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>'.__('trans.add').' '.__('trans.user').'</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('user-store') }}" enctype="multipart/form-data">
														@csrf
														
														<div class="mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold mb-3">
																<span class="required">{{ __('trans.image') }}</span>
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
																<span class="required">{{ __('trans.first_name') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="fname" value="{{ old('fname') }}" />
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
															<input type="text" class="form-control form-control-solid" name="lname" value="{{ old('lname') }}" />
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
															<input type="email" class="form-control form-control-solid" name="email" value="{{ old('email') }}" />
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
																<option value="1">{{ __('trans.male') }}</option>
																<option value="2">{{ __('trans.female') }}</option>
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
																<span class="required">{{ __('trans.password') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="password" class="form-control form-control-solid" name="password" value="{{ old('password') }}" />
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
																<option value="0">{{ __('trans.not_active') }}</option>
																<option value="1">{{ __('trans.active') }}</option>
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
															<select name="company" class="form-control form-control-solid" id="company">
																<option>{{ __('trans.choose') }}</option>
																@foreach($resources as $resource)
																	<option value="{{ $resource->id }}">{{ $resource->name }}</option>
																@endforeach
															</select>
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
															<select name="branch" class="form-control form-control-solid" id="branch">
															</select>
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
															<select name="role" class="form-control form-control-solid" id="role">
															</select>
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

@section('scripts')

<script>
	var select2_id_selectors = '#gender, #status, #company, #branch, #role';
</script>
<script>
	$(document).ready(function(){
		$("#company").change(function(){
			var id = $(this).val();
			$.ajax({
				type: 'POST',
				<!--url: "{{ route('branches.roles.get.company', ['id' => "+id+"]) }}",-->
				url: '/dashboard/user/company/'+id,
				data: {
					'_token' : "{{csrf_token()}}",
					'id' : id,
				},
				success: function (response) {
					if(response.code)
					{
						$('#company_alert').hide();
						
						var branch = $('#branch').empty();
						branch.append("<option>{{ __('trans.choose') }}</option>");
						$.each(response.branches, function(id, name) {
							branch.append($('<option>', {value:id, text:name}));
						});
						
						var role = $('#role').empty();
						role.append("<option>{{ __('trans.choose') }}</option>");
						$.each(response.roles, function(id, name) {
							role.append($('<option>', {value:id, text:name}));
						});
					}
					else
					{
						var branch = $('#branch').empty();
						var role = $('#role').empty();
						$('#company_alert_show').append("<div class='alert alert-danger' id='company_alert'>{{ __('trans.record_not_found') }}</div>");
					}
				}
			});
		});
	});
</script>

@endsection

</x-app-layout>