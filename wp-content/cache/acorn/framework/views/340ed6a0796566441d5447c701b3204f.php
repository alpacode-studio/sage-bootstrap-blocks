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
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/aos/aos.css" rel="stylesheet">
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <!-- Theme switcher -->
    <script>
      (function() {
        const storedTheme = localStorage.getItem('theme') || 'light';
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
      <a class="sr-only focus:not-sr-only" href="#main">
        <?php echo e(__('Skip to content', 'sage')); ?>

      </a>

      <?php echo $__env->make('sections.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

      <main id="main" class="main">
        <?php echo $__env->yieldContent('content'); ?>
      </main>

      <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
        <aside class="sidebar">
          <?php echo $__env->yieldContent('sidebar'); ?>
        </aside>
      <?php endif; ?>

      <?php echo $__env->make('sections.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
      <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/gsap/gsap.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/purecounter/purecounter.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/glightbox/glightbox.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/aos/aos.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/typed.js/typed.umd.js"></script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
    
    <?php (do_action('get_footer')); ?>
    <?php (wp_footer()); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\alpacode-bootstrap\wp-content\themes\alpacode-bootstrap-theme\resources\views/layouts/app.blade.php ENDPATH**/ ?>