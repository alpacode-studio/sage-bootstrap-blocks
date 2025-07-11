<?php $__env->startSection('content'); ?>


<br>
<br>

<?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header.header','data' => ['navigation' => [
    ['label' => 'Home', 'url' => '/', 'active' => true],
    ['label' => 'About', 'url' => '/about'],
    ['label' => 'Contact', 'url' => '/contact']
  ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['navigation' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
    ['label' => 'Home', 'url' => '/', 'active' => true],
    ['label' => 'About', 'url' => '/about'],
    ['label' => 'Contact', 'url' => '/contact']
  ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginal04f02f1e0f152287a127192de01fe241 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal04f02f1e0f152287a127192de01fe241 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero.hero','data' => ['title' => 'Next-Gen Banking Tools','subtitle' => 'Powering Modern Finance','description' => 'Simplify your financial operations with intuitive and secure tools.','ctaPrimary' => ['label' => 'Join Now', 'url' => '/signup'],'ctaSecondary' => ['label' => 'See Features', 'url' => '/features'],'logos' => [
    ['src' => 'resources/images/logo/actual-size/logo-air-bnb__black.svg', 'alt' => 'Airbnb', 'width' => '110px'],
    ['src' => 'resources/images/logo/actual-size/logo-ibm__black.svg', 'alt' => 'IBM', 'width' => '80px'],
    ['src' => 'resources/images/logo/actual-size/logo-google__black.svg', 'alt' => 'Google', 'width' => '110px'],
  ],'imageMain' => 'resources/images/hero-img-1-min.jpg','imageCard' => 'resources/images/card-expenses.png']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Next-Gen Banking Tools','subtitle' => 'Powering Modern Finance','description' => 'Simplify your financial operations with intuitive and secure tools.','ctaPrimary' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['label' => 'Join Now', 'url' => '/signup']),'ctaSecondary' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['label' => 'See Features', 'url' => '/features']),'logos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
    ['src' => 'resources/images/logo/actual-size/logo-air-bnb__black.svg', 'alt' => 'Airbnb', 'width' => '110px'],
    ['src' => 'resources/images/logo/actual-size/logo-ibm__black.svg', 'alt' => 'IBM', 'width' => '80px'],
    ['src' => 'resources/images/logo/actual-size/logo-google__black.svg', 'alt' => 'Google', 'width' => '110px'],
  ]),'imageMain' => 'resources/images/hero-img-1-min.jpg','imageCard' => 'resources/images/card-expenses.png']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $attributes = $__attributesOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__attributesOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $component = $__componentOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__componentOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalff6de83cb070587833d4f86022c57961 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff6de83cb070587833d4f86022c57961 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.about.about','data' => ['values' => ['Innovation', 'Security', 'Trust', 'Excellence'],'description' => ['Custom paragraph 1', 'Custom paragraph 2'],'title' => 'Custom title here','missionDescription' => 'Custom mission statement']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['Innovation', 'Security', 'Trust', 'Excellence']),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['Custom paragraph 1', 'Custom paragraph 2']),'title' => 'Custom title here','missionDescription' => 'Custom mission statement']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff6de83cb070587833d4f86022c57961)): ?>
<?php $attributes = $__attributesOriginalff6de83cb070587833d4f86022c57961; ?>
<?php unset($__attributesOriginalff6de83cb070587833d4f86022c57961); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff6de83cb070587833d4f86022c57961)): ?>
<?php $component = $__componentOriginalff6de83cb070587833d4f86022c57961; ?>
<?php unset($__componentOriginalff6de83cb070587833d4f86022c57961); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalef4cc57ced9b28544dce586d33e591dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef4cc57ced9b28544dce586d33e591dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact.contact','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef4cc57ced9b28544dce586d33e591dd)): ?>
<?php $attributes = $__attributesOriginalef4cc57ced9b28544dce586d33e591dd; ?>
<?php unset($__attributesOriginalef4cc57ced9b28544dce586d33e591dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef4cc57ced9b28544dce586d33e591dd)): ?>
<?php $component = $__componentOriginalef4cc57ced9b28544dce586d33e591dd; ?>
<?php unset($__componentOriginalef4cc57ced9b28544dce586d33e591dd); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginalc457016352c9443b6633e7dc1fd2d1f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc457016352c9443b6633e7dc1fd2d1f7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.faq.faq','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('faq'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc457016352c9443b6633e7dc1fd2d1f7)): ?>
<?php $attributes = $__attributesOriginalc457016352c9443b6633e7dc1fd2d1f7; ?>
<?php unset($__attributesOriginalc457016352c9443b6633e7dc1fd2d1f7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc457016352c9443b6633e7dc1fd2d1f7)): ?>
<?php $component = $__componentOriginalc457016352c9443b6633e7dc1fd2d1f7; ?>
<?php unset($__componentOriginalc457016352c9443b6633e7dc1fd2d1f7); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginalf67dc3bc3f984190149e50f478986108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf67dc3bc3f984190149e50f478986108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.features.features','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('features'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf67dc3bc3f984190149e50f478986108)): ?>
<?php $attributes = $__attributesOriginalf67dc3bc3f984190149e50f478986108; ?>
<?php unset($__attributesOriginalf67dc3bc3f984190149e50f478986108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf67dc3bc3f984190149e50f478986108)): ?>
<?php $component = $__componentOriginalf67dc3bc3f984190149e50f478986108; ?>
<?php unset($__componentOriginalf67dc3bc3f984190149e50f478986108); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginalf8f47993ae8d883b42988c1d399fddfb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8f47993ae8d883b42988c1d399fddfb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pricing.pricing','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pricing'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8f47993ae8d883b42988c1d399fddfb)): ?>
<?php $attributes = $__attributesOriginalf8f47993ae8d883b42988c1d399fddfb; ?>
<?php unset($__attributesOriginalf8f47993ae8d883b42988c1d399fddfb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8f47993ae8d883b42988c1d399fddfb)): ?>
<?php $component = $__componentOriginalf8f47993ae8d883b42988c1d399fddfb; ?>
<?php unset($__componentOriginalf8f47993ae8d883b42988c1d399fddfb); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginal973531a6f9801fe04d3a0e840c62c25d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal973531a6f9801fe04d3a0e840c62c25d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.services.services','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('services'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal973531a6f9801fe04d3a0e840c62c25d)): ?>
<?php $attributes = $__attributesOriginal973531a6f9801fe04d3a0e840c62c25d; ?>
<?php unset($__attributesOriginal973531a6f9801fe04d3a0e840c62c25d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal973531a6f9801fe04d3a0e840c62c25d)): ?>
<?php $component = $__componentOriginal973531a6f9801fe04d3a0e840c62c25d; ?>
<?php unset($__componentOriginal973531a6f9801fe04d3a0e840c62c25d); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginalda50c8a736c70542f601e56d53889e42 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda50c8a736c70542f601e56d53889e42 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stats.stats','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stats'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda50c8a736c70542f601e56d53889e42)): ?>
<?php $attributes = $__attributesOriginalda50c8a736c70542f601e56d53889e42; ?>
<?php unset($__attributesOriginalda50c8a736c70542f601e56d53889e42); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda50c8a736c70542f601e56d53889e42)): ?>
<?php $component = $__componentOriginalda50c8a736c70542f601e56d53889e42; ?>
<?php unset($__componentOriginalda50c8a736c70542f601e56d53889e42); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginal985d63eb9d25c76e5b6118ba47e513c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal985d63eb9d25c76e5b6118ba47e513c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.testimonials.testimonials','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('testimonials'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal985d63eb9d25c76e5b6118ba47e513c5)): ?>
<?php $attributes = $__attributesOriginal985d63eb9d25c76e5b6118ba47e513c5; ?>
<?php unset($__attributesOriginal985d63eb9d25c76e5b6118ba47e513c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal985d63eb9d25c76e5b6118ba47e513c5)): ?>
<?php $component = $__componentOriginal985d63eb9d25c76e5b6118ba47e513c5; ?>
<?php unset($__componentOriginal985d63eb9d25c76e5b6118ba47e513c5); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>


<br>
<br>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\alpacode-bootstrap\wp-content\themes\alpacode-bootstrap-theme\resources\views/index.blade.php ENDPATH**/ ?>