@extends(Auth::check() && Auth::user()->admin ? 'layouts.admin_master' : 'layouts.master')

@section('content')
	<div class="row">
		<div class="col s12">
			<h5> Available Books </h5>
		</div>
	</div>
	 @include('Auth.list')
@endsection
