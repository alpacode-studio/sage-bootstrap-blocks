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
    
    <!-- Google Fonts - Optimized loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Theme switcher -->
    <script>
      (function() {
        const storedTheme = localStorage.getItem('theme') || 
          (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        document.documentElement.setAttribute('data-bs-theme', storedTheme);
      })();
    </script>

    @php(do_action('get_header'))
    @php(wp_head())

    {{-- Vite Assets - This now handles all CSS and JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
  </head>

  <body @php(body_class('index-page'))>
    @php(wp_body_open())

    <div id="app">
      <!--
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>
      -->

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

    </div>

    @stack('scripts')
    
    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>