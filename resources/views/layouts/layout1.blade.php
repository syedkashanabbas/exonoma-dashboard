<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Investor Dashboard')</title>

    {{-- Fonts and CSS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- AOS CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    @stack('styles')
</head>

<body>
    <article>
        {{-- Sidebar --}}
        <div data-aos="fade-right" data-aos-duration="800">
            @include('partials.sidebar')
        </div>

        <section id="wrapper">
            {{-- Navbar --}}
            <div data-aos="fade-down" data-aos-duration="800">
                @include('partials.navbar')
            </div>

            <div id="content" class="pt-2" data-aos="fade-up" data-aos-duration="1000">
                <div class="contentBody">
                    @yield('content')
                </div>
            </div>
        </section>
    </article>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>

    {{-- AOS JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script>
        AOS.init();
    </script>

    @stack('scripts')
</body>
</html>
