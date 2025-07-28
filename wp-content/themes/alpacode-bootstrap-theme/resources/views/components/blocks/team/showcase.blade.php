{{-- Basic usage --}}
<x-blocks.team.team />

{{-- Custom header content --}}
<x-blocks.team.team 
  title="Meet Our Amazing Team"
  description="Our diverse team of experts brings together years of experience and passion for creating exceptional digital solutions."
/>

{{-- Small team (3 members) --}}
<x-blocks.team.team 
  :teamMembers="[
    [
      'name' => 'John Smith',
      'position' => 'CEO & Founder',
      'description' => 'Visionary leader with 15+ years of industry experience.',
      'image' => 'resources/images/team/ceo.webp',
      'imageAlt' => 'John Smith CEO',
      'social' => [
        ['icon' => 'bi bi-linkedin', 'url' => 'https://linkedin.com/in/johnsmith', 'label' => 'LinkedIn'],
        ['icon' => 'bi bi-twitter-x', 'url' => 'https://twitter.com/johnsmith', 'label' => 'Twitter']
      ]
    ],
    [
      'name' => 'Sarah Johnson',
      'position' => 'Head of Design',
      'description' => 'Creative director specializing in user-centered design.',
      'image' => 'resources/images/team/designer.webp',
      'imageAlt' => 'Sarah Johnson Designer',
      'social' => [
        ['icon' => 'bi bi-dribbble', 'url' => 'https://dribbble.com/sarah', 'label' => 'Dribbble'],
        ['icon' => 'bi bi-behance', 'url' => 'https://behance.net/sarah', 'label' => 'Behance']
      ]
    ],
    [
      'name' => 'Mike Chen',
      'position' => 'Lead Developer',
      'description' => 'Full-stack developer passionate about clean code.',
      'image' => 'resources/images/team/developer.webp',
      'imageAlt' => 'Mike Chen Developer',
      'social' => [
        ['icon' => 'bi bi-github', 'url' => 'https://github.com/mikechen', 'label' => 'GitHub'],
        ['icon' => 'bi bi-stack-overflow', 'url' => '#', 'label' => 'Stack Overflow']
      ]
    ]
  ]"
/>

{{-- No navigation controls --}}
<x-blocks.team.team :showControls="false" />

{{-- Custom Swiper configuration --}}
<x-blocks.team.team 
  :swiperConfig="[
    'loop' => false,
    'speed' => 500,
    'autoplay' => [
      'delay' => 3000,
      'pauseOnMouseEnter' => true
    ],
    'slidesPerView' => 1,
    'spaceBetween' => 20,
    'breakpoints' => [
      '768' => [
        'slidesPerView' => 2,
        'spaceBetween' => 30
      ],
      '1024' => [
        'slidesPerView' => 3,
        'spaceBetween' => 40
      ]
    ]
  ]"
/>

{{-- Team members without social links --}}
<x-blocks.team.team 
  :teamMembers="[
    [
      'name' => 'Alex Wilson',
      'position' => 'Marketing Manager',
      'description' => 'Strategic marketing professional with data-driven approach.',
      'image' => 'resources/images/team/marketing.webp',
      'imageAlt' => 'Alex Wilson',
      'social' => [] // No social links
    ]
  ]"
/>

{{-- Custom navigation icons --}}
<x-blocks.team.team 
  prevIcon="bi bi-arrow-left-circle"
  nextIcon="bi bi-arrow-right-circle"
/>

{{-- Minimal team display --}}
<x-blocks.team.team 
  title="Core Team"
  description="The driving force behind our success."
  :teamMembers="[
    [
      'name' => 'Lisa Park',
      'position' => 'Operations Director',
      'description' => 'Ensures smooth operations and team efficiency.',
      'image' => 'resources/images/team/operations.webp',
      'social' => [
        ['icon' => 'bi bi-envelope', 'url' => 'mailto:lisa@company.com', 'label' => 'Email']
      ]
    ],
    [
      'name' => 'Tom Rodriguez',
      'position' => 'Sales Manager',
      'description' => 'Building lasting relationships with our clients.',
      'image' => 'resources/images/team/sales.webp',
      'social' => [
        ['icon' => 'bi bi-telephone', 'url' => 'tel:+1234567890', 'label' => 'Phone'],
        ['icon' => 'bi bi-linkedin', 'url' => '#', 'label' => 'LinkedIn']
      ]
    ]
  ]"
/>