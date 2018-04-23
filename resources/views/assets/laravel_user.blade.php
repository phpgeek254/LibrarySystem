<script>
    window.Laravel = {!!
            json_encode([
                'csrf_token' => csrf_token(),
                'authenticated'=> Auth::check(),
                'auth_user' => Auth::check() ? Auth::user() : null,
                'auth_id' => Auth::check() ? Auth::id() : null
            ])

         !!}
</script>