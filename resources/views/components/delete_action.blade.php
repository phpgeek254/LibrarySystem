@if (Auth::check() && Auth::user()->admin || Auth::check() && $object->user->id == Auth::id())
<a class="waves-effect waves-light modal-trigger"
   href="#delete_{{strtolower($object_name)}}_{{ $object->id }}">
    <i class="material-icons">delete</i>
</a>
@endif