<div class="input-field col s12">
	{!! Form::label('name', 'Gallery Name') !!} <br>
	{!! Form::text('name') !!}
</div>
{!! Form::hidden('user_id', Auth::check() ? Auth::id() : null) !!}