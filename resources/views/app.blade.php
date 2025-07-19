<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'SMP Booster') }}</title>

        <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">

        @routes
        @vite(['resources/js/app.js'])
        @inertiaHead
    </head>
    <body class="antialiased">
        @inertia
        <script
            src="https://widget.curacom.io/js/widget-1.0.0.js?id=Nng55nStErRENkUmTYuJaCSdTyLTqOU1"
            id="curacom-17637839499"></script>
    </body>
</html>