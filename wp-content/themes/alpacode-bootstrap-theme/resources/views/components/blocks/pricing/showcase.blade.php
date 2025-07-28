{{-- Basic usage --}}
<x-blocks.pricing.pricing />

{{-- Custom section title --}}
<x-blocks.pricing.pricing 
  sectionTitle="Choose Your Plan"
  sectionDescription="Select the perfect plan to meet your business needs and budget."
/>

{{-- Simple 2-plan layout --}}
<x-blocks.pricing.pricing 
  :plans="[
    [
      'name' => 'Basic',
      'description' => 'Perfect for getting started',
      'icon' => 'bi bi-person',
      'price' => ['currency' => '$', 'amount' => '9', 'period' => '/month'],
      'features' => [
        ['text' => '5 Projects', 'included' => true],
        ['text' => '10GB Storage', 'included' => true],
        ['text' => 'Email Support', 'included' => true],
        ['text' => 'Priority Support', 'included' => false],
        ['text' => 'Advanced Analytics', 'included' => false]
      ],
      'buttonText' => 'Get Started',
      'buttonUrl' => '/signup/basic',
      'popular' => false
    ],
    [
      'name' => 'Pro',
      'description' => 'For growing businesses',
      'icon' => 'bi bi-star',
      'price' => ['currency' => '$', 'amount' => '29', 'period' => '/month'],
      'features' => [
        ['text' => 'Unlimited Projects', 'included' => true],
        ['text' => '100GB Storage', 'included' => true],
        ['text' => 'Priority Support', 'included' => true],
        ['text' => 'Advanced Analytics', 'included' => true],
        ['text' => 'White-label Options', 'included' => true]
      ],
      'buttonText' => 'Go Pro',
      'buttonUrl' => '/signup/pro',
      'popular' => true,
      'popularText' => 'Recommended'
    ]
  ]"
/>

{{-- Annual pricing --}}
<x-blocks.pricing.pricing 
  :plans="[
    [
      'name' => 'Annual Basic',
      'description' => 'Save 20% with annual billing',
      'icon' => 'bi bi-calendar-check',
      'price' => ['currency' => '$', 'amount' => '99', 'period' => '/year'],
      'features' => [
        ['text' => 'Everything in Basic', 'included' => true],
        ['text' => '2 months free', 'included' => true],
        ['text' => 'No setup fees', 'included' => true]
      ],
      'buttonText' => 'Save 20%',
      'buttonUrl' => '/signup/annual',
      'popular' => true,
      'popularText' => 'Best Value'
    ]
  ]"
/>

{{-- Free plan --}}
<x-blocks.pricing.pricing 
  :plans="[
    [
      'name' => 'Free',
      'description' => 'Perfect for trying out our service',
      'icon' => 'bi bi-gift',
      'price' => ['currency' => '', 'amount' => 'Free', 'period' => ''],
      'features' => [
        ['text' => '1 Project', 'included' => true],
        ['text' => '1GB Storage', 'included' => true],
        ['text' => 'Community Support', 'included' => true],
        ['text' => 'Premium Features', 'included' => false]
      ],
      'buttonText' => 'Start Free',
      'buttonUrl' => '/signup/free',
      'popular' => false
    ]
  ]"
/>

{{-- Custom pricing (Contact us) --}}
<x-blocks.pricing.pricing 
  :plans="[
    [
      'name' => 'Enterprise',
      'description' => 'Custom solutions for large teams',
      'icon' => 'bi bi-building',
      'price' => ['currency' => '', 'amount' => 'Custom', 'period' => ''],
      'features' => [
        ['text' => 'Unlimited Everything', 'included' => true],
        ['text' => 'Dedicated Support', 'included' => true],
        ['text' => 'Custom Integrations', 'included' => true],
        ['text' => 'SLA Guarantee', 'included' => true]
      ],
      'buttonText' => 'Contact Sales',
      'buttonUrl' => '/contact-sales',
      'popular' => false
    ]
  ]"
/>

{{-- Different currencies --}}
<x-blocks.pricing.pricing 
  :plans="[
    [
      'name' => 'EU Plan',
      'description' => 'For European customers',
      'icon' => 'bi bi-geo-alt',
      'price' => ['currency' => '€', 'amount' => '25', 'period' => '/month'],
      'features' => [
        ['text' => 'GDPR Compliant', 'included' => true],
        ['text' => 'EU Data Centers', 'included' => true]
      ],
      'buttonText' => 'Choose Plan',
      'buttonUrl' => '/signup/eu',
      'popular' => false
    ]
  ]"
/>

{{-- Custom icons --}}
<x-blocks.pricing.pricing 
  includedIcon="bi bi-check2-circle"
  excludedIcon="bi bi-dash-circle"
/>