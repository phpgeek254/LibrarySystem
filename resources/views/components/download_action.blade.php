@if (Auth::check() && $object_name == "Book")
	<a class="waves-effect waves-light modal-trigger"
   href="{{ $object ? asset($object->file_url) : '#' }}">
   <i class="material-icons">file_download</i>
</a>
@endif