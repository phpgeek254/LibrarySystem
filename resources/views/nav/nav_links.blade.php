
@if(!Auth::check())
<li>{{ link_to('/', 'Home') }}</li>
<li>{{ link_to('books', 'Books') }}</li>
<li>{{ link_to('categories', 'Categories') }}</li>
<li>{{ link_to('about', 'About') }}</li>
<li>{{ link_to('contact', 'Contuct Us') }}</li>
<li>{{ link_to_route('register', 'Register') }}</li>
<li>{{ link_to_route('login', 'Login') }}</li>
@endif

@if(Auth::check())
    <li>{{ link_to('books', 'Books') }}</li>
    <li>{{ link_to('Categories', 'Categories') }}</li>
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


