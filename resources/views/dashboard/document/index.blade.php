<x-app-layout>

@include('dashboard.layouts.alerts')

							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
							
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.documents'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.documents')=>'documents']])
									
									@include('dashboard.card.open')
									
										@include('dashboard.card.header', ['title'=>'', 'toolbar'=>'documents'])
										
										<!--begin::Card body-->
										<div class="card-body pt-0">
										
											@error('documents')
												<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											
											<div class="table-responsive">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="dataTable">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
														<th>#</th>
														<th class="min-w-125px">{{ __('trans.taxpayer').' '.__('trans.activity').' '.__('trans.code') }}</th>
														<th class="min-w-125px">{{ __('trans.total').' '.__('trans.amount') }}</th>
														<th class="min-w-125px">{{ __('trans.created_date') }}</th>
														<th class="text-end min-w-70px">{{ __('trans.actions') }}</th>
													</tr>
													<!--end::Table row-->
												</thead>
												
												<tbody class="fw-semibold text-gray-600">
													@foreach($resources as $key => $resource)
													<tr>
														<td>{{ $key + 1 }}</td>
														<td>{{ $activity_codes[$resource['taxpayerActivityCode']] }}</td>
														<td>{{ $resource['totalAmount'] }}</td>
														<td>{{ str_replace('Z', ' ', str_replace('T', ' ', $resource['dateTimeIssued'])) }}</td>
														<td>
															<a href="#" class="btn btn-light-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_status">{{ __('trans.change').' '.__('trans.status') }}</a>
														</td>
													</tr>
													
													@include('dashboard.document.modals.status', ['uuid'=>$resource['uuid']])
													
													@endforeach
												</tbody>
												
												<!--end::Table head-->
											</table>
											<!--end::Table-->
											</div>
										</div>
										<!--end::Card body-->
									
									@include('dashboard.card.close')
									
								@include('dashboard.document.modals.search')
								
								@include('dashboard.document.modals.package', ['package_ids'=>$package_ids])
								
							</div>
							<!--end::Content wrapper-->

@section('scripts')

<script>
	var select2_dropdownParent_id_selector = '#kt_modal_search';
	var select2_id_selectors = '#type, #status, #r_s_type';
	
	var select2_dropdownParent_id_selector_2 = '#kt_modal_package';
	var select2_id_selectors_2 = '#package_id';
	
	var length = "{{ request()->length }}";
	if (typeof length !== 'undefined') var page_length = length;
	else var page_length = 10;
	
	var package_ids = <?= json_encode($package_ids); ?>;
	var search_types = {'Full': "{{ __('trans.full') }}", 'Summary':"{{ __('trans.summary') }}"};
	var receiver_sender_types = ["{{ __('trans.business') }}", "{{ __('trans.person') }}", "{{ __('trans.foreign') }}"];
	var document_types = {'i': "{{ __('trans.invoice') }}", 'c':"{{ __('trans.credit') }}", 'd':"{{ __('trans.debit') }}"};
	var document_statuses = {'Submitted': "{{ __('trans.submitted') }}", 'Valid':"{{ __('trans.valid') }}", 'Invalid':"{{ __('trans.invalid') }}", 'Rejected':"{{ __('trans.rejected') }}", 'Cancelled':"{{ __('trans.cancelled') }}"};
</script>
<script src="{{ asset('metronic/demo22/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
(function($){
	$(document).ready(function () {
        $('#dataTable').DataTable({
			"dom": 'Blfrtip',
			"buttons": [
				'copy', 'csv', 'excel', 'pdf', 'print'
			],
			"bFilter": false,
			"lengthMenu": [[10, 25, 50, 1000000], [10, 25, 50, "All"]],
			"pageLength": page_length,
			"bLengthChange": false,
			"order": [[ 3, "DESC" ]],
			"columnDefs": [
				{ "orderable": false, "targets": [4] }
			],
            "processing": true
        });
		
		$('#package_id').change(function(){
			var documents_package_search = $('#documents_package_search').empty();
			var documents_package_id = $(this).val();
			var package_type_names = '';
			var package_status_names = '';
			
			var id = Object.keys(package_ids).find(key => package_ids[key].documents_package_id === documents_package_id.toString());
			if (typeof package_ids[id] !== 'undefined')
			{
				var package_types = package_ids[id].search.queryParameters.documentTypeNames;
				var package_type_names = package_types.map((x) => document_types[x]).join(', ');
				
				var package_statuses = package_ids[id].search.queryParameters.statuses;
				var package_status_names = package_statuses.map((x) => document_statuses[x]).join(', ');
				
				documents_package_search.html('<div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5">' + "<tr><td>{{ __('trans.type') }}</td><td>" + search_types[package_ids[id].search.type] + "</td></tr><tr><td>{{ __('trans.format') }}</td><td>" + package_ids[id].search.format + "</td></tr><tr><td>{{ __('trans.date').' '.__('trans.from') }}</td><td>" + package_ids[id].search.queryParameters.dateFrom.replace('T', ' ') + "</td></tr><tr><td>{{ __('trans.date').' '.__('trans.to') }}</td><td>" + package_ids[id].search.queryParameters.dateTo.replace('T', ' ')  + "</td></tr><tr><td>{{ __('trans.receiver').' '.__('trans.type') }}</td><td>" + receiver_sender_types[package_ids[id].search.queryParameters.receiverSenderType] + "</td></tr><tr><td>{{ __('trans.document').' '.__('trans.type') }}</td><td>" + package_type_names + "</td></tr><tr><td>{{ __('trans.status') }}</td><td>" + package_status_names + '</td></tr></table></div>');
			}
        });
    });
})(jQuery);
</script>

@endsection

</x-app-layout>