@forelse($books->chunk(3) as $chunk)
    <div class="row animated fadeInUp">
        @foreach($chunk as $book)
            <div class="col s12 m4">
            @include('books.book')
            </div>

        @endforeach
    </div>
@empty
@endforelse

