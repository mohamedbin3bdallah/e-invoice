<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.add').' '.__('trans.items'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.items')=>'items', __('trans.add').' '.__('trans.items')=>'items-add']])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>'.__('trans.add').' '.__('trans.items').'</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('items-store') }}" enctype="multipart/form-data">
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

@section('scripts')
<script>
	$(document).ready(function(){
		$("#country").change(function(){
			var id = $(this).val();
			$.ajax({
				type: 'POST',
				url: '/dashboard/place/states/'+id,
				data: {
					'_token' : "{{csrf_token()}}",
					'id' : id,
				},
				success: function (response) {
					if(response.code)
					{
						$('#country_alert').hide();
						
						var state = $('#state').empty();
						state.append("<option>{{ __('trans.choose') }}</option>");
						$.each(response.states, function(id, name) {
							state.append($('<option>', {value:id, text:name}));
						});
					}
					else
					{
						var state = $('#state').empty();
						var city = $('#city').empty();
						$('#country_alert_show').append("<div class='alert alert-danger' id='country_alert'>{{ __('trans.record_not_found') }}</div>");
					}
				}
			});
		});
		
		$("#state").change(function(){
			var id = $(this).val();
			$.ajax({
				type: 'POST',
				url: '/dashboard/place/cities/'+id,
				data: {
					'_token' : "{{csrf_token()}}",
					'id' : id,
				},
				success: function (response) {
					if(response.code)
					{
						$('#state_alert').hide();
						
						var city = $('#city').empty();
						city.append("<option>{{ __('trans.choose') }}</option>");
						$.each(response.cities, function(id, name) {
							city.append($('<option>', {value:id, text:name}));
						});
					}
					else
					{
						var city = $('#city').empty();
						$('#state_alert_show').append("<div class='alert alert-danger' id='state_alert'>{{ __('trans.record_not_found') }}</div>");
					}
				}
			});
		});
	});
</script>
@endsection

</x-app-layout>