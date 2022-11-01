<x-app-layout>
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								
								@include('dashboard.layouts.toolbar', ['title'=>__('trans.add').' '.__('trans.document'), 'breadcrumbs'=>[__('trans.home')=>'dashboard', __('trans.documents')=>'documents', __('trans.add').' '.__('trans.document')=>'document-add']])
								
									@include('dashboard.card.open')
									
												@include('dashboard.card.header', ['title'=>'<h2>'.__('trans.add').' '.__('trans.document').'</h2>'])
												
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form class="form" method="post" action="{{ route('document-store') }}" enctype="multipart/form-data">
														@csrf
														
														@error('document')
																<div class="alert alert-danger">{{ $message }}</div>
														@enderror
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.receiver') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="receiver" class="form-control form-control-solid" id="receiver">
																<option>{{ __('trans.choose') }}</option>
																@foreach($resources as $resource)
																	<option value="{{ $resource->id }}">{{ $resource->fname.' '.$resource->lname }}</option>
																@endforeach
															</select>
															@error('receiver')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.items') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<p><span class="btn btn-light-primary add">{{ __('trans.add') }}</span></p>
															@error('items')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														
														<div class="remove-fild">
															<div class="add-fild">
															</div>
														</div>
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.total') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" id="total" readonly />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.taxes') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<p><span class="btn btn-light-primary add-tax">{{ __('trans.add') }}</span></p>
															@error('taxes')
																<div class="alert alert-danger">{{ $message }}</div>
															@enderror
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														
														<div class="remove-taxes-fild">
															<div class="add-taxes-fild">
															</div>
														</div>
														
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">{{ __('trans.total_tax') }}</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" id="total_tax" readonly />
															<!--end::Input-->
														</div>
														<!--end::Input group-->

														<!--begin::Separator-->
														<div class="separator mb-6"></div>
														<!--end::Separator-->
														<!--begin::Action buttons-->
														<div class="d-flex justify-content-end">
															<!--begin::Button-->
															<!--<button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">{{ __('trans.cancel') }}</button>-->
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
	var select2_id_selectors = '#receiver';
	
	$(document).ready(function(){
		var items = <?= json_encode($items); ?>;
		var tax_types = <?= json_encode($tax_types); ?>;
		var tax_sub_types = <?= json_encode($tax_sub_types); ?>;
		
        var x = 0;
        $('.add').click(function ()
        {
            $('.add-fild:last').before(
				'<div class="row">'
				+
				'<div class="col-4"><div class="fv-row mb-7"><label class="fs-6 fw-semibold form-label mt-3"><span class="required">{{ __("trans.item") }}</span></label><select class="form-control form-control-solid items_c' + (parseInt(x)) + '" name="items[' + x + ']" autocomplete="off" autofocus="" required="" aria-required="true" id="item_' + x + '"></select></div></div>'
				+
				'<div class="col-4"><div class="fv-row mb-7"><label class="fs-6 fw-semibold form-label mt-3"><span class="required">{{ __("trans.price") }}</span></label><input type="number" step="0.00001" min="0" class="form-control form-control-solid price" name="prices[' + x + ']" /></div></div>'
				+
				'<div class="col-3"><div class="fv-row mb-7"><label class="fs-6 fw-semibold form-label mt-3"><span class="required">{{ __("trans.quantity") }}</span></label><input type="number" step="1" min="0" class="form-control form-control-solid quantity" name="quantities[' + x + ']" /></div></div>'
				+
				'<div class="col-1"><div class="fv-row mb-7"><label class="fs-6 fw-semibold form-label mt-3"><span>{{ __("trans.delete") }}</span></label><div class="form-control btn btn-light-danger remove"><span class="fas fa-times"></span></div></div></div>'
				+
				'</div>'
            );
			
            $.each(items, function (index, el)
            {
                option =
                    '<option value="' + el.codeID + '">' + el.itemCode + ' ' + el.codeNameSecondaryLang + '</option>';
                $('.items_c' + x).append(option);
            });
			
			$('#item_' + x).select2();
			
			x++;
        });
		
        $('.remove-fild').on('click', '.remove', function ()
        {
            $(this).parent().parent().parent().remove();
			total_cal();
        });
		
		$('.remove-fild').on('change', '.price, .quantity', function ()
        {
			total_cal();
        });
		
		$('.remove-fild').on('keyup', '.price, .quantity', function ()
        {
			total_cal();
        });
		
		var x = 0;
		$('.add-tax').click(function ()
        {
            $('.add-taxes-fild:last').before(
				'<div class="row">'
				+
				'<div class="col-4"><div class="fv-row mb-7"><label class="fs-6 fw-semibold form-label mt-3"><span class="required">{{ __("trans.tax") }}</span></label><select class="form-control form-control-solid tax_type_change tax_types' + (parseInt(x)) + '" index_number="' + x + '" name="tax_types[' + x + ']" autocomplete="off" autofocus="" required="" aria-required="true" id="tax_' + x + '"></select></div></div>'
				+
				'<div class="col-4"><div class="fv-row mb-7"><label class="fs-6 fw-semibold form-label mt-3"><span class="required">{{ __("trans.tax_sub") }}</span></label><select class="form-control form-control-solid tax_sub_types' + (parseInt(x)) + '" name="tax_sub_types[' + x + ']" autocomplete="off" autofocus="" required="" aria-required="true" id="subtax_' + x + '"></select></div></div>'
				+
				'<div class="col-3"><div class="fv-row mb-7"><label class="fs-6 fw-semibold form-label mt-3"><span class="required">{{ __("trans.tax_amount") }}</span></label><input type="number" step="0.00001" min="0" class="form-control form-control-solid amount" name="amounts[' + x + ']" /></div></div>'
				+
				'<div class="col-1"><div class="fv-row mb-7"><label class="fs-6 fw-semibold form-label mt-3"><span>{{ __("trans.delete") }}</span></label><div class="form-control btn btn-light-danger remove"><span class="fas fa-times"></span></div></div></div>'
				+
				'</div>'
            );
			
			var option = "<option>{{ __('trans.choose') }}</option>";
            $.each(tax_types, function (index, tt)
            {
                option = option + '<option value="' + index + '">' + tt + '</option>';
            });
			$('.tax_types' + x).html(option);
			
			$('#tax_' + x).select2();
			$('#subtax_' + x).select2();
			
			x++;
        });
		
		$('.remove-taxes-fild').on('change', '.tax_type_change', function ()
		{
			var number = $(this).attr('index_number');
			var value = $(this).val();
			
			$('.tax_sub_types' + number).empty();
			$.each(tax_sub_types[value], function (index, tst)
			{
				option = '<option value="' + index + '">' + tst + '</option>';
				$('.tax_sub_types' + number).append(option);
			});
			
		});
		
		 $('.remove-taxes-fild').on('click', '.remove', function ()
        {
            $(this).parent().parent().parent().remove();
			total_cal();
        });
		
		$('.remove-taxes-fild').on('change', '.amount', function ()
        {
			total_cal();
        });
		
		$('.remove-taxes-fild').on('keyup', '.amount', function ()
        {
			total_cal();
        });
		
		$('#tax_amount').on('change', function ()
        {
			total_cal();
        });
		
		$('#tax_amount').on('keyup', function ()
        {
			total_cal();
        });
		
		$('#tax_type').change(function ()
        {
			$('#tax_sub_type').empty();
			$.each(tax_sub_types[$(this).val()], function (index, tst)
            {
                tax_sub_option = '<option value="' + index + '">' + tst + '</option>';
				$('#tax_sub_type').append(tax_sub_option);
            });
		});
		
		function total_cal()
		{
			var total = 0;
			var taxes = 0;
			var prices = $('input[name^="prices"]');
			var quantities = $('input[name^="quantities"]');
			var amounts = $('input[name^="amounts"]');
			
			$.each(prices, function (i, e)
            {
                total = total + (quantities[i].value * e.value);
            });
			
			$.each(amounts, function (i, e)
            {
                taxes = taxes + (1 * e.value);
            });
			
			$('#total').val(total.toFixed(5));
			
			var total_taxes = (total + taxes).toFixed(5);
			$('#total_tax').val(total_taxes);
			if(total_taxes < 0)
			{
				$('#total_tax').css('border-color', '#f1416c');
				$('#total_tax').css('color', '#f1416c');
			}
			else
			{
				$('#total_tax').css('border-color', 'var(--kt-input-solid-bg)');
				$('#total_tax').css('color', 'var(--kt-input-solid-color)');
			}
		}
	});
</script>

@endsection

</x-app-layout>