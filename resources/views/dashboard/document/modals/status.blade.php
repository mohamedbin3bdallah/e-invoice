									<!--begin::Modal - Package -->
									<div class="modal fade" id="kt_modal_status" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form" method="post" action="{{ route('document-status-change') }}" enctype="multipart/form-data">
													@csrf
													<input type="hidden" name="uuid" value="{{ $uuid }}" />
													
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_status_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">{{ __('trans.change').' '.__('trans.status') }}</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div id="kt_modal_status_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
														<div class="scroll-y me-n7 pe-7" id="kt_modal_status_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_status_header" data-kt-scroll-wrappers="#kt_modal_status_scroll" data-kt-scroll-offset="300px">
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="required">{{ __('trans.status') }}</span>
																	<!--<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>-->
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-control form-control-solid" name="status">
																	<option value="rejected">{{ __('trans.rejected') }}</option>
																	<option value="cancelled">{{ __('trans.cancelled') }}</option>
																</select>
																@error('status')
																	<div class="alert alert-danger">{{ $message }}</div>
																@enderror
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-semibold mb-2">
																	<span class="required">{{ __('trans.reason') }}</span>
																	<!--<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>-->
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<textarea class="form-control form-control-solid" name="reason"></textarea>
																@error('reason')
																	<div class="alert alert-danger">{{ $message }}</div>
																@enderror
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
														<!--<button type="reset" id="kt_modal_status_cancel" class="btn btn-light me-3">Discard</button>-->
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_modal_status_submit" class="btn btn-primary">
															<span class="indicator-label">{{ __('trans.send') }}</span>
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
									<!--end::Modal - Package -->