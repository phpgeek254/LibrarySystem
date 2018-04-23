<div class="input-field col s12">
	{!! Form::label('name', 'Full Name') !!} <br>
	{!! Form::text('name', null, ['placeholder'=>'Name']) !!}
	@if ($errors->has('name'))
		<span class="error">{{ $errors->first('name') }}</span>
	@endif
</div>

<div class="input-field col s12">
	{!! Form::label('email', 'Email') !!} <br>
	{!! Form::email('email', null, ['placeholder'=>'Email']) !!}
	@if ($errors->has('email'))
		<span class="error"> {{ $errors->first('email') }}</span>
	@endif
</div>

<div class="input-field col s12">
	{!! Form::label('password', 'Password') !!}<br>
	{!! Form::password('password', null, ['placeholder'=>'Password']) !!} 
	@if ($errors->has('password'))
		<span class="error">
			{{ $errors->first('password') }}
		</span>
	@endif
</div>

<div class="input-field col s12">
	{!! Form::label('password_confirmation', 'Confirm Password') !!}  <br>
	{!! Form::password('password_confirmation', null, ['placeholder'=>'Confirm Password']) !!} 

	@if ($errors->has('password_confirmation'))
		<span class="error">{{ $errors->first('password_confirm') }}</span>
	@endif
</div>


<div class="input-field col s12">
	{!! Form::submit('Register', ['class'=>'btn']) !!}

	@if( isset($show_link) and $show_link==true )
		{{ link_to_route('login', 'or Login', null, ['class'=>'btn right']) }}
	@endif
</div>



