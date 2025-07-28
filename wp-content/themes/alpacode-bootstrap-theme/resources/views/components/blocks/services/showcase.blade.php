{{-- Basic usage --}}
<x-blocks.services.services />

<x-blocks.services.grid />
<x-blocks.services.comparison />
<x-blocks.services.tabs />

{{-- Custom section title --}}
<x-blocks.services.services 
  sectionTitle="What We Offer"
  sectionDescription="Discover our comprehensive range of professional services designed to help your business thrive."
/>

{{-- Reverse intro layout (image on left) --}}
<x-blocks.services.services :reverseIntro="true" />

{{-- Custom intro content --}}
<x-blocks.services.services 
  :intro="[
    'badge' => [
      'icon' => 'bi bi-rocket',
      'text' => 'OUR EXPERTISE'
    ],
    'title' => 'Innovative Solutions for Modern Challenges',
    'description' => 'We combine cutting-edge technology with deep industry knowledge to deliver exceptional results that exceed expectations.',
    'ctaText' => 'View Portfolio',
    'ctaUrl' => '/portfolio',
    'image' => 'resources/images/team-working.webp',
    'imageAlt' => 'Our Team Working'
  ]"
/>

{{-- Custom services (fewer items) --}}
<x-blocks.services.services 
  :services="[
    [
      'number' => '01',
      'title' => 'Web Development',
      'description' => 'Modern, responsive websites built with the latest technologies.',
      'url' => '/services/web-development'
    ],
    [
      'number' => '02',
      'title' => 'Mobile Apps',
      'description' => 'Native and cross-platform mobile applications.',
      'url' => '/services/mobile-apps'
    ],
    [
      'number' => '03',
      'title' => 'Cloud Solutions',
      'description' => 'Scalable cloud infrastructure and migration services.',
      'url' => '/services/cloud'
    ]
  ]"
  :gridColumns="3"
/>

{{-- 2-column layout --}}
<x-blocks.services.services :gridColumns="2" />

{{-- 4-column layout --}}
<x-blocks.services.services :gridColumns="4" />

{{-- No intro section (services only) --}}
<x-blocks.services.services 
  :intro="null"
  :services="[
    [
      'number' => 'A',
      'title' => 'Consulting',
      'description' => 'Strategic business consulting services.',
      'url' => '/consulting'
    ],
    [
      'number' => 'B',
      'title' => 'Implementation',
      'description' => 'End-to-end solution implementation.',
      'url' => '/implementation'
    ]
  ]"
/>

{{-- Custom numbering --}}
<x-blocks.services.services 
  :services="[
    [
      'number' => '★',
      'title' => 'Premium Service',
      'description' => 'Our flagship premium offering.',
      'url' => '/premium'
    ],
    [
      'number' => '♦',
      'title' => 'Specialized Service',
      'description' => 'Specialized solutions for unique needs.',
      'url' => '/specialized'
    ]
  ]"
/>

{{-- No CTA button --}}
<x-blocks.services.services 
  :intro="[
    'badge' => ['icon' => 'bi bi-gear', 'text' => 'SERVICES'],
    'title' => 'Professional Services',
    'description' => 'Comprehensive solutions for your business needs.',
    'ctaText' => null,
    'ctaUrl' => null,
    'image' => 'resources/images/services.webp',
    'imageAlt' => 'Services'
  ]"
/>

{{-- No badge --}}
<x-blocks.services.services 
  :intro="[
    'badge' => null,
    'title' => 'Our Core Services',
    'description' => 'Excellence in every solution we deliver.',
    'ctaText' => 'Learn More',
    'ctaUrl' => '/about',
    'image' => 'resources/images/office.webp',
    'imageAlt' => 'Our Office'
  ]"
/>