@extends(Auth::check() && Auth::user()->admin  ? 'layouts.admin_master' : 'layouts.master')

@section('content')
	<div class="row">
		<div class="col s6"> 
				
			<h5>
		Galleries 
			</h5>
		</div>
		<div class="col s6">
		{{-- // Add Gallery button --}}
		<br>
		@include('components.create_action',['object_name' =>'Gallery'])
		</div>
	</div>

	 {{-- include all the galleries. --}}
	<div class="row">
		@include('galleries.list')
	</div>

	@include('forms.create', ['object_name' => 'Gallery'])
@endsection