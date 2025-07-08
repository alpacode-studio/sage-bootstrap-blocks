<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS - Simple approach -->
    <link href="{{ get_template_directory_uri() }}/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="{{ get_template_directory_uri() }}/vendor/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ get_template_directory_uri() }}/vendor/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="{{ get_template_directory_uri() }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ get_template_directory_uri() }}/vendor/aos/aos.css" rel="stylesheet">
    
    <!-- Theme switcher -->
    <script>
      (function() {
        const storedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-bs-theme', storedTheme);
      })();
    </script>

    @php(do_action('get_header'))
    @php(wp_head())

    {{-- Comment out Vite for now --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
  </head>

  <body @php(body_class())>
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

    <!-- Vendor JS -->
    <script src="{{ get_template_directory_uri() }}/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/vendor/glightbox/glightbox.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ get_template_directory_uri() }}/vendor/aos/aos.js"></script>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>