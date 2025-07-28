<x-blocks.about.about />

<x-blocks.about.mission />
<x-blocks.about.founders />
<x-blocks.about.company />
<x-blocks.about.culture />

<hr>

<x-blocks.about.about 
  title="Why Choose Us"
  subtitle="Leading the industry since 2010"
  description="We deliver exceptional results through innovation, dedication, and cutting-edge technology solutions."
  image="resources/images/team/team-photo.webp"
  imageAlt="Our Team"
/>

<x-blocks.about.about :imageFirst="true" />

<x-blocks.about.about 
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

<x-blocks.about.about 
  :primaryAction="[
    'label' => 'Get Started',
    'url' => '/signup'
  ]"
  :secondaryAction="[
    'label' => 'View Demo',
    'url' => '/demo'
  ]"
/>

<x-blocks.about.about :features="[]" />

<x-blocks.about.about 
  :primaryAction="null"
  :secondaryAction="null"
/>