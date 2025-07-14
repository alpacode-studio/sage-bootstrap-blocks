<!doctype html>
<html <?php (language_attributes()); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', get_bloginfo('name', 'display')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', get_bloginfo('description', 'display')); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords', ''); ?>">

    <!-- Favicons -->
    <link href="<?php echo $__env->yieldContent('favicon', get_template_directory_uri() . '/public/img/favicon.png'); ?>" rel="icon">
    <link href="<?php echo $__env->yieldContent('apple_touch_icon', get_template_directory_uri() . '/public/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">
    
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

    <?php (do_action('get_header')); ?>
    <?php (wp_head()); ?>

    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
  </head>

  <body <?php (body_class('index-page')); ?>>
    <?php (wp_body_open()); ?>

    <div id="app">
      <!--
      <a class="sr-only focus:not-sr-only" href="#main">
        <?php echo e(__('Skip to content', 'sage')); ?>

      </a>
      -->

      <?php echo $__env->make('sections.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

      <main id="main" class="main">
        <?php echo $__env->yieldContent('content'); ?>
      </main>

      <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
        <aside class="sidebar">
          <?php echo $__env->yieldContent('sidebar'); ?>
        </aside>
      <?php endif; ?>

      <?php echo $__env->make('components.scroll_top_button', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <?php echo $__env->make('sections.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <?php echo $__env->yieldPushContent('scripts'); ?>
    
    <?php (do_action('get_footer')); ?>
    <?php (wp_footer()); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\alpacode-bootstrap\wp-content\themes\alpacode-bootstrap-theme\resources\views/layouts/app.blade.php ENDPATH**/ ?>