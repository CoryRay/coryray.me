<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coryray - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="none">
    <link rel="stylesheet" href="{{ mix('/css/plants.css') }}">
</head>
<body>
    <main>@yield('content')</main>
</body>
</html>
