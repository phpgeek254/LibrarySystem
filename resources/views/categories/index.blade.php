@extends(Auth::check() && Auth::user()->admin ? 'layouts.admin_master' : 'layouts.master')

@section('content')
	<div class="row">
		<div class="col s6">
			<h5> Categories </h5>
		</div><br>
		<div class="col s6">
			@include('components.create_action', ['object_name' => 'Category'])
		</div>
	</div>
	 @include('categories.list', compact('categories'))
	 @include('forms.create', ['object_name'=>'Category'])
@endsection