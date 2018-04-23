
<!-- Modal Structure -->
<div id="create_{{ strtolower($object_name) }}" class="modal">
    {!! Form::open(['route' => [str_plural(strtolower($object_name), $count = 2).'.store'], 'method' => 'POST', 'files' => true]) !!}
    <div class="modal-content">
        <h5> Add New {{ $object_name }} </h5>
        @include(str_plural(strtolower($object_name), $count = 2).'.form')
    </div>
    <div class="modal-footer">
        {!! Form::submit('Save', ['class'=>'left btn']) !!}
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cancel</a>

    </div>
    {!! Form::close() !!}
</div>