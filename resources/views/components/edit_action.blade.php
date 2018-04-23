@if (Auth::check() && Auth::user()->admin || Auth::check() && $object->user->id == Auth::id() && $object->name != 'Image')
<a class="waves-effect waves-light modal-trigger"
   href="#edit_{{strtolower($object_name)}}_{{ $object->id }}">
        <i class="material-icons">border_color</i>
</a>	
@endif