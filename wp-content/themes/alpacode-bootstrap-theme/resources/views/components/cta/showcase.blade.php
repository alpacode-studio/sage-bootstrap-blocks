{{-- Basic usage --}}
<x-cta.cta />

{{-- Custom content --}}
<x-cta.cta 
  badge="Limited Time!"
  title="Transform Your Business Today"
  description="Discover how our platform can revolutionize your workflow and boost productivity by 300%."
  image="resources/images/dashboard-preview.webp"
  imageAlt="Dashboard Preview"
/>

{{-- Reverse layout (image on left) --}}
<x-cta.cta :reverseLayout="true" />

{{-- Custom features --}}
<x-cta.cta 
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
<x-cta.cta 
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
<x-cta.cta 
  :floatingCard="[
    'icon' => 'bi bi-trophy',
    'number' => '98%',
    'text' => 'Success Rate'
  ]"
/>

{{-- Different background --}}
<x-cta.cta backgroundClass="dark-background" />

{{-- No badge --}}
<x-cta.cta :badge="null" />

{{-- No features list --}}
<x-cta.cta :features="[]" />

{{-- No floating card --}}
<x-cta.cta :floatingCard="null" />

{{-- No decorations --}}
<x-cta.cta :showDecorations="false" />

{{-- Single action button --}}
<x-cta.cta 
  :primaryAction="[
    'label' => 'Start Now',
    'url' => '/start',
    'class' => 'btn btn-primary'
  ]"
  :secondaryAction="null"
/>