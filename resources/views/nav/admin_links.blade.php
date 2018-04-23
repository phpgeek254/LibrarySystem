@if(Auth::check())
    <li>
        {!! Html::image(asset('images/logo.png'), null, ['style' => 'width:100%; max-height: 250px;']) !!}
    </li>
    <li>{{ link_to('/', 'Home') }}</li>
    <li>{{ link_to('books', 'Books') }}</li>
    <li>{{ link_to('categories', 'Categories') }}</li>
    <li>{{ link_to('galleries', 'Galleries') }}</li>
    <li>{{ link_to('Auth', 'Members') }}</li>
    <li>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
@endif


