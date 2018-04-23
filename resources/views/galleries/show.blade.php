@extends(Auth::check() && Auth::user()->admin  ? 'layouts.admin_master' : 'layouts.master')

@section('content')
<div class="row s12">
	<h4>{{  $gallery->name }}</h4>
</div>
	<div class="row">
        <div class="col s12">
            @include('components.slider', ['object' => $gallery])
        </div>
	</div>

@endsection