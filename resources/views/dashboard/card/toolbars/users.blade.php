											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
													<!--begin::Add Button-->
													<a href="{{ route('user-add') }}" class="btn btn-primary" style="@if($cur_lang_dir == 'ltr') margin-right:5px; @else margin-left:5px; @endif">{{ __('trans.add') }}</a>
													<a href="{{ route('users-add') }}" class="btn btn-primary">{{ __('trans.upload') }}</a>
													<!--end::Add Button-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Card toolbar-->