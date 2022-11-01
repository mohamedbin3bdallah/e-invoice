<div class="alert alert-custom alert-outline-2x alert-outline-success fade show mb-5" role="alert">
	@if (Session::has('success'))
		<div class="alert alert-success" role="alert">
			{{Session::get('success')}}
		</div>
	@endif
	
	@if (Session::has('warning'))
		<div class="alert alert-warning" role="alert">
			{{Session::get('warning')}}
		</div>
	@endif
	
	@if (Session::has('danger'))
		<div class="alert alert-danger" role="alert">
			{{Session::get('danger')}}
		</div>
	@endif
</div>