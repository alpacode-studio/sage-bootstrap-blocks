{{-- Basic usage --}}
<x-blocks.features.features />
<x-blocks.features.tabs />
<x-blocks.features.grid />
<x-blocks.features.comparison />
<x-blocks.features.benefits />

{{-- Custom section title --}}
<x-blocks.features.features 
  sectionTitle="Our Capabilities"
  sectionDescription="Discover the powerful features that make our platform unique and efficient."
/>

{{-- Reverse intro layout (image on left) --}}
<x-blocks.features.features :reverseIntro="true" />

{{-- Custom intro content --}}
<x-blocks.features.features 
  introTitle="Why Choose Our Platform"
  introDescription="Built with cutting-edge technology to deliver exceptional performance and reliability."
  introImage="resources/images/platform-overview.webp"
  introImageAlt="Platform Overview"
/>

{{-- Custom stats --}}
<x-blocks.features.features 
  :stats="[
    ['number' => '500K+', 'label' => 'Users'],
    ['number' => '100%', 'label' => 'Satisfaction'],
    ['number' => '1M+', 'label' => 'Transactions']
  ]"
/>

{{-- No stats --}}
<x-blocks.features.features :showStats="false" />

{{-- Custom features (fewer items) --}}
<x-blocks.features.features 
  :features="[
    [
      'number' => '01',
      'icon' => 'bi bi-rocket',
      'title' => 'Fast Setup',
      'description' => 'Get started in minutes with our streamlined onboarding process.',
      'tags' => ['Quick', 'Easy']
    ],
    [
      'number' => '02',
      'icon' => 'bi bi-shield-lock',
      'title' => 'Bank-Level Security',
      'description' => 'Your data is protected with enterprise-grade encryption.',
      'tags' => ['Secure', 'Encrypted']
    ],
    [
      'number' => '03',
      'icon' => 'bi bi-headset',
      'title' => 'Expert Support',
      'description' => '24/7 support from our team of technical experts.',
      'tags' => ['Support', '24/7']
    ]
  ]"
  :gridColumns="3"
/>

{{-- 2-column grid layout --}}
<x-blocks.features.features :gridColumns="2" />

{{-- 4-column grid layout --}}
<x-blocks.features.features :gridColumns="4" />

{{-- Features without tags --}}
<x-blocks.features.features 
  :features="[
    [
      'number' => '01',
      'icon' => 'bi bi-cpu',
      'title' => 'High Performance',
      'description' => 'Optimized for speed and efficiency.',
      'tags' => []
    ]
  ]"
/>

{{-- Custom feature numbering --}}
<x-blocks.features.features 
  :features="[
    [
      'number' => 'A',
      'icon' => 'bi bi-star',
      'title' => 'Premium Feature',
      'description' => 'Access to exclusive premium functionality.',
      'tags' => ['Premium', 'Exclusive']
    ],
    [
      'number' => 'B',
      'icon' => 'bi bi-gem',
      'title' => 'Advanced Tools',
      'description' => 'Professional-grade tools for power users.',
      'tags' => ['Advanced', 'Professional']
    ]
  ]"
/>


{{-- Basic usage --}}
<x-blocks.features.tabs />

{{-- Custom tabs (simplified example) --}}
<x-blocks.features.tabs 
  :tabs="[
    [
      'id' => 'tab-speed',
      'icon' => 'bi bi-lightning',
      'title' => 'Speed',
      'subtitle' => 'Ultra fast',
      'active' => true,
      'content' => [
        'icon' => 'bi bi-lightning',
        'title' => 'Lightning Speed',
        'description' => 'Experience unprecedented performance with our optimized platform.',
        'features' => [
          'Sub-second load times',
          'Advanced caching',
          'CDN integration'
        ],
        'stats' => [
          ['number' => '0.1s', 'label' => 'Load Time'],
          ['number' => '99%', 'label' => 'Faster']
        ],
        'image' => 'resources/images/speed-demo.webp',
        'floatingCard' => [
          'icon' => 'bi bi-speedometer',
          'label' => 'Speed',
          'value' => 'Blazing Fast'
        ],
        'buttonText' => 'Test Speed',
        'buttonUrl' => '/speed-test',
        'buttonIcon' => 'bi bi-play'
      ]
    ],
    [
      'id' => 'tab-security',
      'icon' => 'bi bi-shield',
      'title' => 'Security',
      'subtitle' => 'Bank-level protection',
      'active' => false,
      'content' => [
        'icon' => 'bi bi-shield',
        'title' => 'Enterprise Security',
        'description' => 'Your data is protected with military-grade encryption.',
        'features' => [
          '256-bit encryption',
          'Two-factor authentication',
          'Regular security audits'
        ],
        'stats' => [
          ['number' => '0', 'label' => 'Breaches'],
          ['number' => 'SOC2', 'label' => 'Certified']
        ],
        'image' => 'resources/images/security-demo.webp',
        'floatingCard' => [
          'icon' => 'bi bi-lock',
          'label' => 'Security',
          'value' => 'Bulletproof'
        ],
        'buttonText' => 'Security Details',
        'buttonUrl' => '/security',
        'buttonIcon' => 'bi bi-shield-check'
      ]
    ]
  ]"
/>

{{-- Custom feature icon --}}
<x-blocks.features.tabs featureIcon="bi bi-check2-circle" />

{{-- Tab without floating card --}}
<x-blocks.features.tabs 
  :tabs="[
    [
      'id' => 'simple-tab',
      'icon' => 'bi bi-star',
      'title' => 'Simple',
      'subtitle' => 'Easy to use',
      'active' => true,
      'content' => [
        'icon' => 'bi bi-star',
        'title' => 'Simple Solution',
        'description' => 'Easy to use and understand.',
        'features' => ['User-friendly', 'Intuitive design'],
        'stats' => [['number' => '5min', 'label' => 'Setup']],
        'image' => 'resources/images/simple.webp',
        'floatingCard' => null, // No floating card
        'buttonText' => 'Get Started',
        'buttonUrl' => '/start',
        'buttonIcon' => 'bi bi-arrow-right'
      ]
    ]
  ]"
/>