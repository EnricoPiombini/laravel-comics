<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

    <title>@yield('page_title')</title>
</head>

<body>
    <header>
        @include('partials.header')
    </header>
    
        <main>
            @yield('main_content')
            @yield('bannerBlue_content')
        </main>
    
    <footer>
        @include('partials.footer')
    </footer>

    <script src=" {{ asset('js/app.js') }} "></script>
</body>

</html>
