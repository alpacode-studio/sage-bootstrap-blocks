<x-blocks.hero.hero />
<x-blocks.hero.minimal />
<x-blocks.hero.video />
<x-blocks.hero.split />
<x-blocks.hero.carousel />

<x-blocks.hero.hero 
  title="Revolutionize Your Business With"
  :typedItems="['AI Technology', 'Cloud Solutions', 'Data Analytics']"
  description="Transform your operations with cutting-edge technology solutions."
  :primaryAction="[
    'label' => 'Get Started Free',
    'url' => '/signup',
    'icon' => 'bi bi-rocket'
  ]"
  :secondaryAction="[
    'label' => 'See Demo',
    'url' => 'https://vimeo.com/123456789',
    'icon' => 'bi bi-play-fill',
    'isVideo' => true
  ]"
  image="resources/images/hero-bg.webp"
/>

<x-blocks.hero.hero 
  :floatingCards="[
    [
      'icon' => 'bi bi-trophy',
      'number' => 95,
      'suffix' => '%',
      'label' => 'Client Satisfaction',
      'duration' => 3,
      'delay' => 500,
      'animation' => 'fade-up'
    ],
    [
      'icon' => 'bi bi-award',
      'number' => 50,
      'suffix' => '+',
      'label' => 'Industry Awards',
      'duration' => 2,
      'delay' => 600,
      'animation' => 'fade-down'
    ]
  ]"
/>

<x-blocks.hero.hero :floatingCards="[]" />