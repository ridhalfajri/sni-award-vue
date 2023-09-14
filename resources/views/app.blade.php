<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>:: Crush On :: Page Empty</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ asset('assets2/plugins/bootstrap/css/bootstrap.min.css') }}" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('assets2/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}" />
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="font-opensans horizontal h_menu sidebar_dark">
    @inertia
    <script src="{{ asset('assets2/bundles/lib.vendor.bundle.js') }}"></script>

    <script src="{{ asset('assets2/js/core.js') }}"></script>
</body>

</html>
