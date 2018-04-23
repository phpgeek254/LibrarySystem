<div class="input-field col s12">
	{!! Form::label('title', 'Title') !!} <br/>
	{!! Form::text('title') !!}
</div>

<div class="input-field col s12">
	{!! Form::label('author', 'Author') !!} <br/>
	{!! Form::text('author') !!}
</div>
{!! Form::hidden('category_id', isset($category) ? $category->id : null) !!}
{!! Form::hidden('user_id', Auth::check() ? Auth::id() : null) !!}
<div class="file-field input-field">
  <div class="btn">
  	<span>Upload File</span>
    <input type="file" name="file">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text" placeholder="Upload File here">
  </div>
</div>
