					<!--begin::Header secondary-->
					<div class="app-header-secondary app-header-mobile-drawer" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_secondary_toggle" data-kt-sticky="true" data-kt-sticky-name="app-header-secondary-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_app_header'}">
						<!--begin::Header secondary container-->
						<div class="app-container container-xxl app-container-fit-mobile d-flex align-items-stretch">
							<!--begin::Menu wrapper-->
							<div class="header-menu d-flex align-items-stretch w-100">
								<!--begin::Menu-->
								<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-400 menu-bullet-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link py-3">
											<span class="menu-title">
												<span class="menu-text">{{ __('trans.users') }}</span>
												<!--<span class="menu-desc">Pages & Utilities</span>-->
											</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
											<!--begin:Pages menu-->
											<div class="menu-active-bg px-4 px-lg-0">
												<!--begin:Tab content-->
												<div class="tab-content py-4 py-lg-8 px-lg-7">
													<!--begin:Tab pane-->
													<div class="tab-pane active w-lg-200px" id="kt_app_header_menu_pages_pages">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-8">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="mb-6 mb-lg-0">
																		<!--begin:Menu heading-->
																		<!--<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>-->
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('roles') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.roles') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('role-add') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.add').' '.__('trans.role') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('users') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.users') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('user-add') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.add').' '.__('trans.user') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-4">
																<img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="" />
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Tab pane-->
												</div>
												<!--end:Tab content-->
											</div>
											<!--end:Pages menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link py-3">
											<span class="menu-title">
												<span class="menu-text">{{ __('trans.companies') }}</span>
												<!--<span class="menu-desc">Pages & Utilities</span>-->
											</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
											<!--begin:Pages menu-->
											<div class="menu-active-bg px-4 px-lg-0">
												<!--begin:Tab content-->
												<div class="tab-content py-4 py-lg-8 px-lg-7">
													<!--begin:Tab pane-->
													<div class="tab-pane active w-lg-200px" id="kt_app_header_menu_pages_pages">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-8">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="mb-6 mb-lg-0">
																		<!--begin:Menu heading-->
																		<!--<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>-->
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('companies') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.companies') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('company-add') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.add').' '.__('trans.company') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-4">
																<img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="" />
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Tab pane-->
												</div>
												<!--end:Tab content-->
											</div>
											<!--end:Pages menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link py-3">
											<span class="menu-title">
												<span class="menu-text">{{ __('trans.items') }}</span>
												<!--<span class="menu-desc">Pages & Utilities</span>-->
											</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
											<!--begin:Pages menu-->
											<div class="menu-active-bg px-4 px-lg-0">
												<!--begin:Tab content-->
												<div class="tab-content py-4 py-lg-8 px-lg-7">
													<!--begin:Tab pane-->
													<div class="tab-pane active w-lg-200px" id="kt_app_header_menu_pages_pages">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-8">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="mb-6 mb-lg-0">
																		<!--begin:Menu heading-->
																		<!--<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>-->
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('items') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.items') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('items-add') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.upload').' '.__('trans.items') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-4">
																<img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="" />
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Tab pane-->
												</div>
												<!--end:Tab content-->
											</div>
											<!--end:Pages menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<!--begin:Menu link-->
										<span class="menu-link py-3">
											<span class="menu-title">
												<span class="menu-text">{{ __('trans.documents') }}</span>
												<!--<span class="menu-desc">Pages & Utilities</span>-->
											</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
											<!--begin:Pages menu-->
											<div class="menu-active-bg px-4 px-lg-0">
												<!--begin:Tab content-->
												<div class="tab-content py-4 py-lg-8 px-lg-7">
													<!--begin:Tab pane-->
													<div class="tab-pane active w-lg-200px" id="kt_app_header_menu_pages_pages">
														<!--begin:Row-->
														<div class="row">
															<!--begin:Col-->
															<div class="col-lg-8">
																<!--begin:Row-->
																<div class="row">
																	<!--begin:Col-->
																	<div class="mb-6 mb-lg-0">
																		<!--begin:Menu heading-->
																		<!--<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>-->
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('documents') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.documents') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="{{ route('document-add') }}" class="menu-link">
																				<span class="menu-title">{{ __('trans.add').' '.__('trans.document') }}</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Col-->
																</div>
																<!--end:Row-->
															</div>
															<!--end:Col-->
															<!--begin:Col-->
															<div class="col-lg-4">
																<img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="" />
															</div>
															<!--end:Col-->
														</div>
														<!--end:Row-->
													</div>
													<!--end:Tab pane-->
												</div>
												<!--end:Tab content-->
											</div>
											<!--end:Pages menu-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::Header secondary container-->
					</div>
					<!--end::Header secondary-->