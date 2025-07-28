{{-- Basic usage --}}
<x-blocks.stats.stats />

{{-- Custom avatars --}}
<x-blocks.stats.stats 
  :avatars="[
    [
      'image' => 'resources/images/team/ceo.webp',
      'alt' => 'CEO John Doe'
    ],
    [
      'image' => 'resources/images/team/cto.webp',
      'alt' => 'CTO Jane Smith'
    ],
    [
      'image' => 'resources/images/team/designer.webp',
      'alt' => 'Lead Designer Mike Wilson'
    ]
  ]"
/>

{{-- Custom stats --}}
<x-blocks.stats.stats 
  :stats="[
    [
      'number' => 500,
      'suffix' => '+',
      'label' => 'Happy Clients',
      'duration' => 2,
      'start' => 0
    ],
    [
      'number' => 99,
      'suffix' => '%',
      'label' => 'Success Rate',
      'duration' => 3,
      'start' => 0
    ],
    [
      'number' => 24,
      'suffix' => '/7',
      'label' => 'Support Available',
      'duration' => 1,
      'start' => 0
    ],
    [
      'number' => 1000,
      'suffix' => '+',
      'label' => 'Projects Completed',
      'duration' => 2,
      'start' => 0
    ]
  ]"
/>

{{-- No avatars (stats only) --}}
<x-blocks.stats.stats 
  :showAvatars="false"
  :stats="[
    [
      'number' => 5,
      'suffix' => 'M+',
      'label' => 'Users Worldwide',
      'duration' => 2,
      'start' => 0
    ],
    [
      'number' => 99.9,
      'suffix' => '%',
      'label' => 'Uptime',
      'duration' => 3,
      'start' => 95
    ],
    [
      'number' => 150,
      'suffix' => '+',
      'label' => 'Countries',
      'duration' => 2,
      'start' => 0
    ]
  ]"
/>

{{-- Reverse layout (stats on left) --}}
<x-blocks.stats.stats :reverseLayout="true" />

{{-- Different background --}}
<x-blocks.stats.stats backgroundClass="dark-background" />

{{-- Company achievements --}}
<x-blocks.stats.stats 
  :avatars="[
    [
      'image' => 'resources/images/fou