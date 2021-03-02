<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/images/favicon/safari-pinned-tab.svg') }}" color="#7400b8">
    <link rel="shortcut icon" href="{{ asset('/images/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#7400b8">
    <meta name="msapplication-config" content="{{ asset('/images/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <title>OpenOverlay - @yield('title', 'Self manage Twitch Overlay & Bot')</title>
</head>
<body class="bg-gray-50">
@include('theme.components.navbar')
@yield('content')
@include('theme.components.footer')
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
