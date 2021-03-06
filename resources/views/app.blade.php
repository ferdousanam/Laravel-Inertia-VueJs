<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inertia JS with Laravel and VueJS 2">
    <meta name="author" content="Ferdous Anam">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>{{ config('app.name') }}</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></link>

    @routes

</head>

<body class="light-sidebar-nav">

<section id="container">
    @inertia
</section>

<script src="{{ mix('/js/vendors.js') }}"></script>
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
