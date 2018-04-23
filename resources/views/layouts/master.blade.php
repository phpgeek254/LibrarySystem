@include('templates.header')
 <body>
<header>
	@include('nav.navbar')
</header>
<main>
<div id="app">
@if (Session::has('message'))
        <div class="message noPrint" style="display: none;">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="">
        @yield('content')
    </div>

</div>
</main>
@include('templates.footer')
</body>
</html>
