<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elavon Residences</title>
    <meta name="Description" content="The art of New York living">
    <meta name="Keywords" content="luxury, Condo," <!-- bootstrapcdn etc -->
     <meta name="geo.placename" content="Elavon Residences" />

    <meta name="Identifier" content="https://www.Elavon.com/" />
    <meta name="Format" content="text/html" />
    <meta name="Relation" content="Elavon" />
    <meta name="Language" content="en" />
    <meta name="Publisher" content="Elavon" />
    <meta name="Type" content="text/html" />
    <meta name="Coverage" content="https://www.Elavon.com/" />
    <meta name="Rights" content="Copyright &copy;2018 Elavon." />
    <meta name="Title" content="Elavon Residences" />
    <meta name="Subject" content="real, estate, Condo" />
    <meta name="Contributor" content="Elavon" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="https://www.Elavon.com/" />
    <meta property="og:title" content="Elavon Residences" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>