<div class="card">
	{{-- // Image card --}}
	<a href="{{ route('galleries.show', ['id'=> $gallery->id]) }}">
		<div class="card-image"
             style="height: 200px;
                     background-image: url('{{count($gallery->images) > 0 ? $gallery->images[0]->url : "images/logo.png"}}');
                     background-size: cover;
                     background-repeat: no-repeat;
                     background-position: center center;">
		</div>
	</a>
	<div class="card-content">
		
	</div>
	<div class="card-action center">
		 @include('components.admin_options', 
		['object_name' => 'Gallery', 'object' => $gallery])
	</div>
</div>

@include('forms.forms', ['object_name' => 'Gallery', 'object' => $gallery])