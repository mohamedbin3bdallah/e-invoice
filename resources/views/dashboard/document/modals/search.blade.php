									<!--begin::Modal - Search -->
									<div class="modal fade" id="kt_modal_search" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form" method="post" action="{{ route('documents-search') }}" enctype="multipart/form-data">
													@csrf
													
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_search_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">{{ __('trans.search') }}</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div id="kt_modal_search_close" class="btn btn-icon btn-sm btn-active-icon-primary">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<!--<span class="svg-icon svg-icon-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																</svg>
															</span>-->
															<!--end::Svg Icon-->
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="scroll-y me-n7 pe-7" id="kt_modal_search_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_search_header" data-kt-scroll-wrappers="#kt_modal_search_scroll" data-kt-scroll-offset="300px">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="">{{ __('trans.document').' '.__('trans.type').' '.__('trans.name') }}</span>
																	<!--<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>-->
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-control form-control-solid" name="documentTypeNames[]" id="type" multiple>
																	<option value="i">{{ __('trans.invoice') }}</option>
																	<option value="c">{{ __('trans.credit') }}</option>
																	<option value="d">{{ __('trans.debit') }}</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="">{{ __('trans.status') }}</span>
																	<!--<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>-->
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-control form-control-solid" name="statuses[]" id="status" multiple>
																	<!--<option value="Submitted">{{ __('trans.submitted') }}</option>-->
																	<option value="Valid">{{ __('trans.valid') }}</option>
																	<option value="Invalid">{{ __('trans.invalid') }}</option>
																	<option value="Rejected">{{ __('trans.rejected') }}</option>
																	<option value="Cancelled">{{ __('trans.cancelled') }}</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="required">{{ __('trans.receiver').' '.__('trans.type') }}</span>
																	<!--<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>-->
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-control form-control-solid" name="receiverSenderType" id="r_s_type">
																	<!--<option value="Submitted">{{ __('trans.submitted') }}</option>-->
																	<option value="0">{{ __('trans.business') }}</option>
																	<option value="1">{{ __('trans.person') }}</option>
																	<option value="2">{{ __('trans.foreign') }}</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="required">{{ __('trans.date').' '.__('trans.from') }}</span>
																	<!--<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>-->
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="datetime-local" class="form-control form-control-solid" name="dateFrom" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-15">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="required">{{ __('trans.date').' '.__('trans.to') }}</span>
																	<!--<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>-->
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="datetime-local" class="form-control form-control-solid" name="dateTo" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Scroll-->
													</div>
													<!--end::Modal body-->
													<!--begin::Modal footer-->
													<div class="modal-footer flex-center">
														<!--begin::Button-->
														<!--<button type="reset" id="kt_modal_search_cancel" class="btn btn-light me-3">Discard</button>-->
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_modal_search_submit" class="btn btn-primary">
															<span class="indicator-label">{{ __('trans.search') }}</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
													<!--end::Modal footer-->
												</form>
												<!--end::Form-->
											</div>
										</div>
									</div>
									<!--end::Modal - Search -->