<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <meta name="author" content="Estevoo">

    <link rel="shortcut icon" href="{{ asset('icon.svg') }}" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

</head>

<body>

    <div id="app">
        <app-component></app-component>
    </div>

</body>

</html>