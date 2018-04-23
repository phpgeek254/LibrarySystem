@if ($object)
    <slider
            :object="{{ $object->toJson() }}"
            admin="{{Auth::check()}}"
            style="margin-top: 2px;">
    </slider>
@endif