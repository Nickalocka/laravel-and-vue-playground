<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>

    <div class="outer_container" id="app">

        <header class="header_main">
            <div class="wrapper_main-inner">
                <h1 class="site-title">Sassy Strife</h1>
            </div>
            <nav class="navigation_main">
                <div class="navigation_main-inner">
                    <a class="navigation-link" href="/"><span> - </span>Home<span> - </span></a>
                    {{--@@foreach($main_navigation_links as $main_navigation_link)--}}
                    {{--<a class="navigation-link" href="{{ $main_navigation_link->url }}">{{ $main_navigation_link->label }}</a>--}}
                    {{--@endforeach--}}
                    {{--<a class="navigation-link _end" data-toggle="sidebar_main"><span> - </span>menu<span> - </span></a>--}}
                </div>
            </nav>
        </header>

        <div class="wrapper_main">
            @yield('main_body')
        </div>

        <footer class="footer_main">
            <div class="wrapper_main-inner">
                Nick Strife &copy; {{ \Illuminate\Support\Carbon::now()->format('Y') }}
            </div>
        </footer>

        <sidebar-main></sidebar-main>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>
