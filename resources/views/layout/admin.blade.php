<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pg Portals
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <link href="{{ asset('/css/app.css?'.rand()) }}" rel="stylesheet">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <style></style>
    
</head>

<body>
<div id="google_translate_element"></div>
    <script> function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element'); } </script>
    <div class="" id="container">
        <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
            @include('layout.admin_header')
            @include('layout.ui')
            <div class="app-main">
                @include('layout.admin_sidebar')
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('content')
                    </div>
                    @include('layout.footer_admin')
                </div>
            </div>
            @yield('modal')
        </div>
    </div>
    <div id="message" class="toast-message">

    </div>
    <script src="/js/app.js"></script>
    @if($errors->any())
<script>
    alert('{{ $errors->first() }}');
</script>
@endif
</body>

</html>