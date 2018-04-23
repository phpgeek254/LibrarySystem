@if (Request::path() != str_plural(strtolower($object_name), 2). '/'. $object->id)
	<a href="{{ route(strtolower(str_plural($object_name, 2)).'.show',
	 ['id'=>$object->id]) }}"
       class="waves-effect">
        <i class="material-icons">arrow_forward</i>
	</a>
@endif
