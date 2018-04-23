@if (Auth::check() and Auth::user()->admin)
    <div id="delete_{{strtolower($object_name)}}_{{ $object->id }}" class="modal">
        <div class="modal-content center">
            {{ Html::image(asset('images/delete.png'), null, ['class' => 'responsive-img', 'style' => 'max-width: 150px;'])}}
            <h5>Are you sure you want to delete this {{ $object_name }}?</h5>
        </div>
        <div class="modal-footer">

            {!! Form::open(['route' => [str_plural(strtolower($object_name), $count = 2).'.destroy',  'id' => $object->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class'=>'left btn-flat']) !!}
            <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cancel</a>
            {!! Form::close() !!}
        </div>
    </div>
@endif
