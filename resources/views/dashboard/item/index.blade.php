<x-app-layout>

@include('dashboard.layouts.alerts')
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.items'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.items')=>'items']])
									
									@include('dashboard.card.open')
									
										@include('dashboard.card.header', ['title'=>'', 'toolbar'=>'items'])
										
										<!--begin::Card body-->
										<div class="card-body pt-0">
										</div>
										<!--end::Card body-->
									
									@include('dashboard.card.close')
								
							</div>
							<!--end::Content wrapper-->
							
</x-app-layout>