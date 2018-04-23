@extends(Auth::check() && Auth::user()->admin ? 'layouts.admin_master' : 'layouts.master')

@section('content')
	<div class="row">
		<div class="col s6">
			<h5> {{ $category->name }} </h5>
		</div>
		<br>
		<div class="col s6">
			@include('components.create_action', ['object_name' => 'Book'])
		</div>
	</div>
	 @include('books.list')
	 @include('forms.create', ['object_name' => 'Book'])
@endsection