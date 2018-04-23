@include('templates.header')
<style type="text/css">
        header,
main,
footer {
    padding-left: 300px;
    padding-right: 0px;
}

@media only screen and (max-width: 992px) {
    header,
    main,
    footer {
        padding-left: 0;
    }
}
</style>

<body>
<header class="noPrint">
    @include('nav.admin_nav')
</header>
<main>
    <div id="app">
    @if (Session::has('message'))
        <div class="noPrint">
            <h3 class="center">{{ Session::get('message') }}</h3>
        </div>
    @endif
          @yield('content')
    </div>
   
</main>
@include('templates.footer')
</body>
</html>