{{-- Basic usage --}}
<x-blocks.header.header />

{{-- Custom logo with image --}}
<x-blocks.header.header 
  :logo="[
    'text' => 'Your Brand',
    'url' => '/',
    'image' => 'resources/images/logo-dark.svg'
  ]"
/>

{{-- Simple navigation (no dropdowns) --}}
<x-blocks.header.header 
  :navigation="[
    ['label' => 'Home', 'url' => '/', 'active' => true],
    ['label' => 'About', 'url' => '/about', 'active' => false],
    ['label' => 'Services', 'url' => '/services', 'active' => false],
    ['label' => 'Portfolio', 'url' => '/portfolio', 'active' => false],
    ['label' => 'Contact', 'url' => '/contact', 'active' => false]
  ]"
/>

{{-- Custom dropdown navigation --}}
<x-blocks.header.header 
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
<x-blocks.header.header 
  :ctaButton="[
    'text' => 'Free Quote',
    'url' => '/quote',
    'class' => 'btn btn-primary'
  ]"
/>

{{-- No CTA button --}}
<x-blocks.header.header :ctaButton="null" />

{{-- Custom header classes --}}
<x-blocks.header.header headerClass="header d-flex align-items-center sticky-top" />

{{-- Custom icons --}}
<x-blocks.header.header 
  dropdownIcon="bi bi-caret-down"
  mobileToggleIcon="bi bi-menu-button-wide"
/>

{{-- Product-focused navigation --}}
<x-blocks.header.header 
  :logo="['text' => 'ProductName', 'url' => '/']"
  :navigation="[