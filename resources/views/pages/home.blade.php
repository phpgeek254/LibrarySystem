@extends(Auth::check() && Auth::user()->admin ? 'layouts.admin_master' : 'layouts.master')

@section('content')
    <div class="row">
        <div class="col s12">
            @include('components.slider', ['object'=>$gallery])
        </div>
        <div class="col s12 m4">
            <h4 class="center"> UOE Library System </h4>
            <p>
                The University Library core mandate is to strengthen and enhance the teaching, research and service of the University of Eldoret. Our main duty is to promote intellectual growth and creativity by developing collections, facilitating access to information resources, teaching the effective use of information resources and critical evaluation skills and offering innovative research assistance.

                The University Library’s vision is to engage in learning and discovery as essential participants in the educational community. 
            </p>
        </div>
        <div class="col s12 m4">
            <h4 class="center"> What we Stand For </h4>
            <ul class="collection with-header">

                <li class="collection-item">
                    <i class="material-icons">library_books</i>
                Provide library services and resources in multiple formats that meet our users’ needs.
                </li>
                <li class="collection-item">
                    <i class="material-icons">library_books</i>
                    Reimagine the physical space of the library to better meet the demands of our students and faculty in the future.
                </li>
                <li class="collection-item">
                    <i class="material-icons">library_books</i>
                Educate users about the library’s services and resources.
                </li>
                <li class="collection-item">
                    <i class="material-icons">library_books</i>
                Increase collaboration with students, faculty, staff, and the community.
                </li>
            </ul>
        </div>
        <div class="col s12 m4">
            <h4 class="center">
                Browse Books
            </h4>
            <ul class="collection">
                @forelse ($books as $book)
                    <li class="collection-item avatar">
                        <div class="row">
        <div class="col s2 center">
            {{ Html::image(asset(
                count($book->images) > 0 ? $book->images[0]->url: 'images/logo.png' ),
            null,
            ['style' => 'width:40px; margin: 10px;', 'class'=>'responsive-img circle']) }}
        </div>
        <div class="col s10">
            <h6 class="center">
                <a  class="bnt" href="{{ route('books.show',
             ['id'=>$book->id]) }}"
               class="waves-effect">
             {{ $book->title }}
            </a>
            </h6>
        </div>
    </div>
                </li>
                @empty
                    {{-- empty expr --}}
                @endforelse
            </ul>
        </div>
    </div>
@endsection