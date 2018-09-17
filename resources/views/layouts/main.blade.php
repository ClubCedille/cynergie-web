<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="/manifest.webmanifest">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="stylesheet" href="css/styles.css" media="screen">
    <link rel='shortcut icon' href='http://cedille.etsmtl.ca/favicon.ico' type='image/x-icon'/>
    <link rel="stylesheet" href="css/animate-min.css" media="screen">
    <link rel="stylesheet" href="css/app.css" media="screen">


</head>
<body>

@yield('content')

<!-- Scripts -->
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="js/main.js"></script>
<script src="js/progressbar.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js" defer></script>


</body>
</html>
