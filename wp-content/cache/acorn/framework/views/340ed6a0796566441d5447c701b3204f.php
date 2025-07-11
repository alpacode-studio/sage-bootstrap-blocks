<!doctype html>
<html <?php (language_attributes()); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS - Public directory -->
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo e(get_template_directory_uri()); ?>/public/vendors/aos/aos.css" rel="stylesheet">
    
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
  </head>

  <body <?php (body_class()); ?>>
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

    <!-- Vendors JS - Public directory -->
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/gsap/gsap.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/purecounter/purecounter.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/isotope/isotope.pkgd.min.js"></script>

    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/glightbox/glightbox.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo e(get_template_directory_uri()); ?>/public/vendors/aos/aos.js"></script>

    <?php (do_action('get_footer')); ?>
    <?php (wp_footer()); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\alpacode-bootstrap\wp-content\themes\alpacode-bootstrap-theme\resources\views/layouts/app.blade.php ENDPATH**/ ?>