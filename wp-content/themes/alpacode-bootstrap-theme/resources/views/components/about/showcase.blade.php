<x-about.about />

<x-about.about 
  title="Why Choose Us"
  subtitle="Leading the industry since 2010"
  description="We deliver exceptional results through innovation, dedication, and cutting-edge technology solutions."
  image="resources/images/team/team-photo.webp"
  imageAlt="Our Team"
/>

<x-about.about :imageFirst="true" />

<x-about.about 
  :features="[
    [
      'icon' => 'bi bi-shield-check',
      'title' => 'Security First',
      'description' => 'Enterprise-grade security for all your data.'
    ],
    [
      'icon' => 'bi bi-rocket',
      'title' => 'Fast Performance',
      'description' => 'Lightning-fast response times guaranteed.'
    ]
  ]"
/>

<x-about.about 
  :primaryAction="[
    'label' => 'Get Started',
    'url' => '/signup'
  ]"
  :secondaryAction="[
    'label' => 'View Demo',
    'url' => '/demo'
  ]"
/>

<x-about.about :features="[]" />

<x-about.about 
  :primaryAction="null"
  :secondaryAction="null"
/>