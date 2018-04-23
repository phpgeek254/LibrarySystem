 @if(
 Auth::check()
 && isset($object->user)
 && Auth::id() == $object->user->id
 || isset(Auth::user()->admin))
     @if(isset($object_name)
    && $object_name != 'Image'
    || $object_name != 'Video'
    )
	<a class="waves-effect waves-light modal-trigger" 
	href="#upload_images_{{strtolower($object_name)}}_{{ $object->id }}">
    <i class="material-icons">add_to_photos</i>
    </a>
 @endif
@endif