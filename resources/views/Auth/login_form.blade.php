
{{-- Email Field --}}
<div class="input-field col s12">
	{!! Form::label('email', 'Email') !!}  <br>
	{!! Form::text('email', null, ['placeholder' => 'Enter Email eg. johndoe@gmail.com', 'autocomplete' => 'off']) !!}
	@if ($errors->has('email'))
		<span class="error animated fadeInDown"> {{ $errors->first('email') }}</span>
	@endif
</div>
{{-- Password Field --}}
<div class="input-field col s12">
	{!! Form::label('password', 'Password') !!} <br>
	{!! Form::password('password', null, ['placeholder' => 'Enter password, more than 6 characters', 'autocomplete' => 'off']) !!}
	@if ($errors->has('password'))
		<span class="error animated fadeInDown"> {{ $errors->first('password') }} </span>
	@endif
</div>
<div class="input-field col s12">
	{!! Form::submit($info ? : 'Submit', ['class'=>'btn left']) !!}
	<a class="btn-flat right" style="font-size: 10px;" href="{{ route('password.request') }}">
		Reset Password
	</a>
	@if(isset($show_link) and $show_link == true)
		{!! link_to_route('register', 'Or Register', [], ['class'=>'btn']) !!}
	@endif
</div>

