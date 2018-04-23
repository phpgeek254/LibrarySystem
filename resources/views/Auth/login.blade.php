@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col m6 offset-m3 s12 z-depth-3 center" style="padding: 20px;">
        <h4 class="center"> Login </h4>
        {!! Html::image(asset('images/logo.png'),
         null, ['style'=>'width:200px;']) !!}
        {!! Form::open(['route'=>['login']]) !!}
        @include('Auth.login_form', ['info'=>'Login'])
        {!! Form::close() !!}

	{{-- <div class="col s12">
		<a href="" class="blue">
			<i class="fab fa-facebook black-text"></i>
		</a>
		<a href="" class="">
			<i class="fab fa-twitter black-text"></i>
		</a>
		<a href="" class="">
			<i class="fab fa-google black-text"></i>
		</a>
	</div> --}}
    </div>
</div>

@endsection
