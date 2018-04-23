<footer class="page-footer">
    <div class="row">
    <div class="footer-copyright">
        <div class="container white-text">
            {{ env('APP_NAME') }} 
            <a class="grey-text text-lighten-4 right">Powered by ER.Labs {{ date('Y') }}</a>
        </div>
    </div>
    </div>
</footer>
@include('assets.js')
@yield('js')
