<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $page->siteTitle }}</title>        
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
        <style>
            html, body {
                height: 100%;            
            }
        </style>
    </head>
    <body class="antialiased font-sans m-0 font-base leading-normal scrolling-touch" x-data="{ open: false }" :class="{ 'lg:overflow-hidden': open }">
        
        @include('_partials/navigation')

        @yield('content')

        @include('_partials/footer')
    </body>
</html>
