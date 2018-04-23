
    <div id="upload_images_{{strtolower($object_name)}}_{{ $object->id }}" class="modal">
        <div class="modal-content">
            <h5>Upload Images</h5>
            <upload-image object_type="{{ $object_name }}"
                          object="{{ $object->id }}">

            </upload-image>
        </div>
        <div class="modal-footer">
            <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Done</a>
        </div>
    </div>
