<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', get_bloginfo('name', 'display'))</title>
    <meta name="description" content="@yield('description', get_bloginfo('description', 'display'))">
    <meta name="keywords" content="@yield('keywords', '')">

    <!-- Favicons -->
    <link href="@yield('favicon', get_template_directory_uri() . '/public/img/favicon.png')" rel="icon">
    <link href="@yield('apple_touch_icon', get_template_directory_uri() . '/public/img/apple-touch-icon.png')" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ get_template_directory_uri() }}/public/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="{{ get_template_directory_uri() }}/public/vendors/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ get_template_directory_uri() }}/public/vendors/aos/aos.css" rel="stylesheet">
    <link href="{{ get_template_directory_uri() }}/public/vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="{{ get_template_directory_uri() }}/public/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <!-- Theme switcher -->
    <script>
      (function() {
        const storedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-bs-theme', storedTheme);
      })();
    </script>

    @php(do_action('get_header'))
    @php(wp_head())

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
  </head>

  <body @php(body_class('index-page'))>
    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
    </div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
      <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ get_template_directory_uri() }}/public/vendors/gsap/gsap.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/public/vendors/purecounter/purecounter.js"></script>
    <script src="{{ get_template_directory_uri() }}/public/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/public/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/public/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/public/vendors/glightbox/glightbox.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/public/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/public/vendors/aos/aos.js"></script>
    <script src="{{ get_template_directory_uri() }}/public/vendors/typed.js/typed.umd.js"></script>
    
    @stack('scripts')
    
    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>