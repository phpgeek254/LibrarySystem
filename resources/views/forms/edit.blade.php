<!-- Modal Structure -->
<div id="edit_{{strtolower($object_name)}}_{{ $object->id }}" class="modal">
    {!! Form::model($object, ['route' => [str_plural(strtolower($object_name), $count = 2).'.update', 'id'=>$object->id], 'method' => 'PATCH', 
        'files' => true]) !!}
    <div class="modal-content">
        <h5> Edit {{ strtoupper($object_name) }} </h5>
        @includeif(str_plural(strtolower($object_name), $count = 2).'.form')
    </div>
    <div class="modal-footer">
        {!! Form::submit('Save', ['class'=>'left btn']) !!}
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cancel</a>

    </div>
    {!! Form::close() !!}
</div>