@extends(Auth::check() && Auth::user()->admin ? 'layouts.admin_master' : 'layouts.master')

@section('content')
	<div class="row">
		<div class="col s12">
			<h5> {{ $book->title }} </h5>
		</div>
	</div>
	<div class="row">
		<div class="col m6 s12">
	 @include('books.book')
		</div>
		<div class="col m6 s12">
	 	<ul class="collection with-header">
	 		<li class="collection-item"> 
				<h5> Details </h5>
	 		</li>
	 		<li class="collection-item">Title : {{ $book->title }}</li>
	 		<li class="collection-item">Author {{ $book->author }}</li>
	 		<li class="collection-item">Available: {{ $book->available ? "Yes" :"No" }}</li>
	 	</ul>
		</div>
	</div>
@endsection