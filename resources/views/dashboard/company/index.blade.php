<x-app-layout>

@include('dashboard.layouts.alerts')

							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.companies'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.companies')=>'companies']])
									
									@include('dashboard.card.open')
									
										@include('dashboard.card.header', ['title'=>'<input type="text" id="search" data-kt-customer-table-filter="search" class="form-control form-control-solid" placeholder="'.__('trans.search').'" >', 'toolbar'=>'companies'])
										
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<div class="table-responsive">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="dataTable">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
														<!--<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
															</div>
														</th>-->
														<th>#</th>
														<th class="min-w-125px">{{ __('trans.image') }}</th>
														<th class="min-w-125px">{{ __('trans.type') }}</th>
														<th class="min-w-125px">{{ __('trans.name') }}</th>
														<th class="min-w-125px">{{ __('trans.country') }}</th>
														<th class="min-w-125px">{{ __('trans.email') }}</th>
														<th class="min-w-125px">{{ __('trans.mobile') }}</th>
														<th class="min-w-125px">{{ __('trans.status') }}</th>
														<th class="min-w-125px">{{ __('trans.created_date') }}</th>
														<th class="text-end min-w-70px">{{ __('trans.actions') }}</th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
											</table>
											<!--end::Table-->
											</div>
										</div>
										<!--end::Card body-->
									
									@include('dashboard.card.close')
								
							</div>
							<!--end::Content wrapper-->
							
@section('scripts')

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
			"pageLength": 10,
			"order": [[ 8, "DESC" ]],
			"columnDefs": [
				{ "orderable": false, "targets": [1,9] }
			],
            "processing": true,
            "serverSide": true,
            "ajax":{
                     "url": "{{ route('companies-get') }}",
                     "dataType": "json",
                     "type": "POST",
                     "data":function ( d ) {
						d._token = "{{csrf_token()}}";
						d.search = $('#search').val();
					 }
                   },
            "columns": [
                { "data": "id" },
                { "data": "image" },
				{ "data": "type" },
				{ "data": "name" },
				{ "data": "country" },
				{ "data": "email" },
				{ "data": "mobile" },
				{ "data": "status" },
                { "data": "created_at" },
				{ "data": "actions" },
            ]
        });
		
		$('#search').on('keyup', function() {
			$tabla = $('#dataTable').DataTable();
			$tabla.ajax.reload( null, false ); 
		});
    });
})(jQuery);
</script>

@endsection

</x-app-layout>