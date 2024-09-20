<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Default Title') | TD-ICAV</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.ico')}}">

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/aos.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
          document.documentElement.classList.add("is_dark");
        } 
        if (localStorage.getItem("theme-color") === "light") {
          document.documentElement.classList.remove("is_dark");
        } 
    </script>
</head>

<body>
    @include('layouts.inc.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.inc.footer')

    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/glightbox.min.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>

</body>

</html>