{{-- Basic usage --}}
<x-blocks.cta.cta />

<x-blocks.cta.banner />
<x-blocks.cta.newsletter />
<x-blocks.cta.countdown />
<x-blocks.cta.social />

{{-- Custom content --}}
<x-blocks.cta.cta 
  badge="Limited Time!"
  title="Transform Your Business Today"
  description="Discover how our platform can revolutionize your workflow and boost productivity by 300%."
  image="resources/images/dashboard-preview.webp"
  imageAlt="Dashboard Preview"
/>

{{-- Reverse layout (image on left) --}}
<x-blocks.cta.cta :reverseLayout="true" />

{{-- Custom features --}}
<x-blocks.cta.cta 
  :features="[
    [
      'icon' => 'bi bi-shield-check',
      'text' => 'Enterprise Security'
    ],
    [
      'icon' => 'bi bi-lightning',
      'text' => 'Lightning Fast'
    ],
    [
      'icon' => 'bi bi-people',
      'text' => '24/7 Support'
    ],
    [
      'icon' => 'bi bi-award',
      'text' => 'Award Winning'
    ]
  ]"
/>

{{-- Custom action buttons --}}
<x-blocks.cta.cta 
  :primaryAction="[
    'label' => 'Get Started Now',
    'url' => '/signup',
    'class' => 'btn btn-success'
  ]"
  :secondaryAction="[
    'label' => 'Watch Demo',
    'url' => '/demo',
    'class' => 'btn btn-outline-primary'
  ]"
/>

{{-- Custom floating card --}}
<x-blocks.cta.cta 
  :floatingCard="[
    'icon' => 'bi bi-trophy',
    'number' => '98%',
    'text' => 'Success Rate'
  ]"
/>

{{-- Different background --}}
<x-blocks.cta.cta backgroundClass="dark-background" />

{{-- No badge --}}
<x-blocks.cta.cta :badge="null" />

{{-- No features list --}}
<x-blocks.cta.cta :features="[]" />

{{-- No floating card --}}
<x-blocks.cta.cta :floatingCard="null" />

{{-- No decorations --}}
<x-blocks.cta.cta :showDecorations="false" />

{{-- Single action button --}}
<x-blocks.cta.cta 
  :primaryAction="[
    'label' => 'Start Now',
    'url' => '/start',
    'class' => 'btn btn-primary'
  ]"
  :secondaryAction="null"
/>