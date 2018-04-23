@if (Auth::check() && Auth::user()->admin)
<a href="#create_{{ strtolower($object_name) }}" class="btn waves-effect waves-light modal-trigger" >
    <i class="fas fa-plus"></i> Add {{ $object_name }}
</a>
@endif