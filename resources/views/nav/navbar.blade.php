<nav class="darkgreen">
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo white-text hide-on-med-and-down"
           style="padding: 5px;">
            {!! Html::image(asset('images/logo.png'), null, ['width'=>50]) !!}
           {{ env('APP_NAME') }}
        </a>
        <a href="#!" class="brand-logo white-text center hide-on-med-and-up"
           style="padding: 5px;">
            {!! Html::image(asset('images/logo.jpg'), null, ['width'=>50]) !!}
        </a>

        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            @include('nav.nav_links')
        </ul>
    </div>
</nav>

<ul class="sidenav" style="background:darkgreen" id="mobile-demo">
    <li>
        {!! Html::image(asset('images/logo.png'), null, ['style' => 'width:100%; max-height: 300px;']) !!}
    </li>
    @include('nav.nav_links')
</ul>