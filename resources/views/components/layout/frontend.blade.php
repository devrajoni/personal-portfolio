<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ setting('website_title') }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="title" content="{{ setting('website_title') }}" />
        <meta name="author" content="{{ setting('website_name') }}" />
        <meta name="description" content="{{ setting('website_description') }}" />
        <link rel="canonical" href="{{ url()->current() }}" />

        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:title" content="{{ setting('website_title') }}" />
        <meta property="og:description" content="{{ setting('website_description') }}" />
        <meta property="og:image" content="{{ asset(setting('logo')) }}" />

        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="{{ url()->current() }}" />
        <meta property="twitter:title" content="{{ setting('website_title') }}" />
        <meta property="twitter:description" content="{{ setting('website_description') }}" />
        <meta property="twitter:image" content="{{ asset(setting('logo')) }}" />
        <link rel="icon" type="image/png" href="{{ asset(setting('favicon')) }}" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/phosphor-icons@1.4.2/src/css/icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css" />

        <livewire:styles />

        <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" />
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <x-layout.frontend.menu />

        {{ $slot }}

        <x-layout.frontend.footer />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/typed/typed.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
        <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

        <x-flashify::scripts />

        <livewire:scripts />
    </body>
</html>
