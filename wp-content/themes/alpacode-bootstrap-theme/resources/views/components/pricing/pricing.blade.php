@props([
  'sectionTitle' => 'Pricing',
  'sectionDescription' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit',
  'plans' => [
    [
      'name' => 'Starter',
      'description' => 'For individuals just getting started',
      'icon' => 'bi bi-box',
      'price' => [
        'currency' => '$',
        'amount' => '12',
        'period' => '/month'
      ],
      'features' => [
        ['text' => 'Nullam accumsan lorem', 'included' => true],
        ['text' => 'Vestibulum auctor dapibus', 'included' => true],
        ['text' => 'Nulla consequat massa', 'included' => true],
        ['text' => 'In enim justo rhoncus ut', 'included' => false],
        ['text' => 'Curabitur ullamcorper ultricies', 'included' => false]
      ],
      'buttonText' => 'Choose Plan',
      'buttonUrl' => '#',
      'popular' => false,
      'popularText' => null
    ],
    [
      'name' => 'Professional',
      'description' => 'For small teams and growing businesses',
      'icon' => 'bi bi-briefcase',
      'price' => [
        'currency' => '$',
        'amount' => '39',
        'period' => '/month'
      ],
      'features' => [
        ['text' => 'Donec quam felis ultricies', 'included' => true],
        ['text' => 'Nam eget dui etiam rhoncus', 'included' => true],
        ['text' => 'Maecenas tempus tellus', 'included' => true],
        ['text' => 'Donec pede justo fringilla', 'included' => true],
        ['text' => 'Cras dapibus vivamus', 'included' => false]
      ],
      'buttonText' => 'Choose Plan',
      'buttonUrl' => '#',
      'popular' => true,
      'popularText' => 'Most Popular'
    ],
    [
      'name' => 'Enterprise',
      'description' => 'For large organizations and corporations',
      'icon' => 'bi bi-building',
      'price' => [
        'currency' => '$',
        'amount' => '79',
        'period' => '/month'
      ],
      'features' => [
        ['text' => 'Etiam sit amet orci eget', 'included' => true],
        ['text' => 'Pellentesque posuere vulputate', 'included' => true],
        ['text' => 'Quisque rutrum aenean', 'included' => true],
        ['text' => 'Fusce vulputate eleifend', 'included' => true],
        ['text' => 'Phasellus viverra nulla', 'included' => true]
      ],
      'buttonText' => 'Choose Plan',
      'buttonUrl' => '#',
      'popular' => false,
      'popularText' => null
    ]
  ],
  'includedIcon' => 'bi bi-check-circle-fill',
  'excludedIcon' => 'bi bi-x-circle-fill'
])

<section id="pricing" class="pricing section">
  {{-- Section Title --}}
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ $sectionTitle }}</h2>
    <p>{{ $sectionDescription }}</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      
      @foreach($plans as $index => $plan)
        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ 200 + ($index * 100) }}">
          <div class="pricing-card {{ $plan['popular'] ? 'popular' : '' }}">
            
            {{-- Popular Tag --}}
            @if($plan['popular'] && $plan['popularText'])
              <div class="popular-tag">{{ $plan['popularText'] }}</div>
            @endif
            
            {{-- Plan Header --}}
            <div class="plan-header">
              <div class="plan-icon">
                <i class="{{ $plan['icon'] }}"></i>
              </div>
              <h3>{{ $plan['name'] }}</h3>
              <p>{{ $plan['description'] }}</p>
            </div>
            
            {{-- Plan Pricing --}}
            <div class="plan-pricing">
              <div class="price">
                <span class="currency">{{ $plan['price']['currency'] }}</span>
                <span class="amount">{{ $plan['price']['amount'] }}</span>
                <span class="period">{{ $plan['price']['period'] }}</span>
              </div>
            </div>
            
            {{-- Plan Features --}}
            <div class="plan-features">
              <ul>
                @foreach($plan['features'] as $feature)
                  <li class="{{ $feature['included'] ? '' : 'disabled' }}">
                    <i class="{{ $feature['included'] ? $includedIcon : $excludedIcon }}"></i> 
                    {{ $feature['text'] }}
                  </li>
                @endforeach
              </ul>
            </div>
            
            {{-- Plan CTA --}}
            <div class="plan-cta">
              <a href="{{ $plan['buttonUrl'] }}" class="btn-plan">{{ $plan['buttonText'] }}</a>
            </div>
            
          </div>
        </div>
      @endforeach
      
    </div>
  </div>
</section>