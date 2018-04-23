@forelse($categories->chunk(3) as $chunk)
    <div class="row animated fadeInUp">
        @foreach($chunk as $category)
            <div class="col s12 m4">
            @include('categories.category')
            </div>

        @endforeach
    </div>
@empty
@endforelse

