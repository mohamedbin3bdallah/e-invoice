											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
													<!--begin::Add Button-->
													<a href="{{ route('document-add') }}" class="btn btn-primary" style="@if($cur_lang_dir == 'ltr') margin-right:5px; @else margin-left:5px; @endif">{{ __('trans.add') }}</a>
													<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_search" style="@if($cur_lang_dir == 'ltr') margin-right:5px; @else margin-left:5px; @endif">{{ __('trans.search') }}</a>
													<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_package">{{ __('trans.package') }}</a>
													<!--end::Add Button-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Card toolbar-->