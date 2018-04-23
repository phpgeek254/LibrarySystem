<nav class="darkgreen">
    <div class="nav-wrapper">
        <a href="/" class="brand-logo right">
            {{ env('APP_NAME') }}
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
            <i class="material-icons">menu</i></a>
    </div>
</nav>
<ul class="sidenav sidenav-fixed green darken-4 white-text" id="mobile-demo">
    @include('nav.admin_links')
</ul>