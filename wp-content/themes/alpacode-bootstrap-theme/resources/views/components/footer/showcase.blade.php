{{-- Basic usage --}}
<x-hero.footer />

{{-- Custom logo with image --}}
<x-hero.footer 
  :logo="[
    'text' => 'Your Company',
    'url' => '/',
    'image' => 'resources/images/logo-white.svg'
  ]"
/>

{{-- Custom contact info --}}
<x-hero.footer 
  :contact="[
    'address' => [
      '123 Business Street',
      'Suite 100',
      'Los Angeles, CA 90210'
    ],
    'phone' => '+1 (555) 123-4567',
    'email' => 'hello@yourcompany.com'
  ]"
/>

{{-- Custom link columns --}}
<x-hero.footer 
  :linkColumns="[
    [
      'title' => 'Company',
      'links' => [
        ['label' => 'About Us', 'url' => '/about'],
        ['label' => 'Careers', 'url' => '/careers'],
        ['label' => 'Contact', 'url' => '/contact']
      ]
    ],
    [
      'title' => 'Products',
      'links' => [
        ['label' => 'Web Design', 'url' => '/web-design'],
        ['label' => 'Mobile Apps', 'url' => '/mobile-apps'],
        ['label' => 'Consulting', 'url' => '/consulting']
      ]
    ]
  ]"
/>

{{-- Custom social links --}}
<x-hero.footer 
  :socialLinks="[
    [
      'icon' => 'bi bi-github',
      'url' => 'https://github.com/yourcompany',
      'label' => 'GitHub'
    ],
    [
      'icon' => 'bi bi-youtube',
      'url' => 'https://youtube.com/yourcompany',
      'label' => 'YouTube'
    ],
    [
      'icon' => 'bi bi-discord',
      'url' => 'https://discord.gg/yourserver',
      'label' => 'Discord'
    ]
  ]"
/>

{{-- Custom copyright --}}
<x-hero.footer 
  :copyright="[
    'company' => 'Your Company Name',
    'text' => 'All Rights Reserved'
  ]"
/>

{{-- No credits section --}}
<x-hero.footer 
  :credits="['show' => false]"
/>

{{-- Custom credits --}}
<x-hero.footer 
  :credits="[
    'show' => true,
    'text' => 'Built by',
    'link' => [
      'label' => 'Your Agency',
      'url' => 'https://youragency.com'
    ]
  ]"
/>

{{-- Dark background --}}
<x-hero.footer backgroundClass="dark-background" />

{{-- No social links --}}
<x-hero.footer :socialLinks="[]" />

{{-- Minimal footer (2 columns) --}}
<x-hero.footer 
  :linkColumns="[
    [
      'title' => 'Quick Links',
      'links' => [
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'About', 'url' => '/about'],
        ['label' => 'Services', 'url' => '/services'],
        ['label' => 'Contact', 'url' => '/contact']
      ]
    ],
    [
      'title' => 'Legal',
      'links' => [
        ['label' => 'Privacy Policy', 'url' => '/privacy'],
        ['label' => 'Terms of Service', 'url' => '/terms'],
        ['label' => 'Cookie Policy', 'url' => '/cookies']
      ]
    ]
  ]"
/>