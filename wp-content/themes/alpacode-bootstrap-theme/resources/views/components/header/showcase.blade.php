{{-- Basic usage --}}
<x-hero.header />

{{-- Custom logo with image --}}
<x-hero.header 
  :logo="[
    'text' => 'Your Brand',
    'url' => '/',
    'image' => 'resources/images/logo-dark.svg'
  ]"
/>

{{-- Simple navigation (no dropdowns) --}}
<x-hero.header 
  :navigation="[
    ['label' => 'Home', 'url' => '/', 'active' => true],
    ['label' => 'About', 'url' => '/about', 'active' => false],
    ['label' => 'Services', 'url' => '/services', 'active' => false],
    ['label' => 'Portfolio', 'url' => '/portfolio', 'active' => false],
    ['label' => 'Contact', 'url' => '/contact', 'active' => false]
  ]"
/>

{{-- Custom dropdown navigation --}}
<x-hero.header 
  :navigation="[
    ['label' => 'Home', 'url' => '/', 'active' => true],
    [
      'label' => 'Services',
      'type' => 'dropdown',
      'url' => '#',
      'items' => [
        ['label' => 'Web Design', 'url' => '/web-design'],
        ['label' => 'Mobile Apps', 'url' => '/mobile-apps'],
        ['label' => 'SEO Services', 'url' => '/seo'],
        [
          'label' => 'Digital Marketing',
          'type' => 'dropdown',
          'url' => '#',
          'items' => [
            ['label' => 'Social Media', 'url' => '/social-media'],
            ['label' => 'PPC Advertising', 'url' => '/ppc'],
            ['label' => 'Email Marketing', 'url' => '/email']
          ]
        ]
      ]
    ],
    ['label' => 'Contact', 'url' => '/contact', 'active' => false]
  ]"
/>

{{-- Custom CTA button --}}
<x-hero.header 
  :ctaButton="[
    'text' => 'Free Quote',
    'url' => '/quote',
    'class' => 'btn btn-primary'
  ]"
/>

{{-- No CTA button --}}
<x-hero.header :ctaButton="null" />

{{-- Custom header classes --}}
<x-hero.header headerClass="header d-flex align-items-center sticky-top" />

{{-- Custom icons --}}
<x-hero.header 
  dropdownIcon="bi bi-caret-down"
  mobileToggleIcon="bi bi-menu-button-wide"
/>

{{-- Product-focused navigation --}}
<x-hero.header 
  :logo="['text' => 'ProductName', 'url' => '/']"
  :navigation="[