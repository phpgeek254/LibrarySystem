<div class="card">
        <a href="{{ route('books.show', ['id' => $book->id]) }}">
            <div class="card-image"
                 style="height: 200px;
                         background-image: url('{{count($book->images) > 0 ?
                         asset($book->images->last()->url) :
                         asset("images/logo.png")}}');
                         background-size: cover;
                         background-repeat: no-repeat;
                         background-position: top center;">

                                          <span class="card-title green center"
                                                style="padding: 5px; width: 100%; opacity: .7"> {{ $book->name }}
                                              <span class="badge orange white-text">
                                                 {{ $book->author }}
                                            </span>

                                      </span>
            </div>
        </a>
    <div class="card-action center">
        @include('components.admin_options', ['object' => $book, 'object_name' => 'Book'])
    </div>
</div>
@include('forms.forms', ['object' => $book, 'object_name' => 'Book'])
