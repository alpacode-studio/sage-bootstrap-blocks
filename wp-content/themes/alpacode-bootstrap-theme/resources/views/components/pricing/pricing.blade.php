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

<style>
  /*--------------------------------------------------------------
# Pricing Section
--------------------------------------------------------------*/
.pricing {
  --card-border-radius: 20px;
}

.pricing .row {
  justify-content: center;
}

.pricing .pricing-card {
  height: 100%;
  background: var(--surface-color);
  border-radius: var(--card-border-radius);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
  overflow: hidden;
  position: relative;
  transition: all 0.4s;
  margin-bottom: 30px;
  display: flex;
  flex-direction: column;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.pricing .pricing-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.pricing .pricing-card.popular {
  border: 2px solid var(--accent-color);
}

.pricing .pricing-card.popular .plan-cta .btn-plan {
  background-color: var(--accent-color);
  color: var(--contrast-color);
}

.pricing .pricing-card.popular .plan-cta .btn-plan:hover {
  background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
}

.pricing .pricing-card .popular-tag {
  position: absolute;
  top: 20px;
  right: -35px;
  background-color: var(--accent-color);
  color: var(--contrast-color);
  font-size: 13px;
  font-weight: 600;
  padding: 8px 40px;
  transform: rotate(45deg);
}

.pricing .plan-header {
  padding: 30px 30px 20px;
  text-align: center;
}

.pricing .plan-header .plan-icon {
  width: 70px;
  height: 70px;
  margin: 0 auto 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
}

.pricing .plan-header .plan-icon i {
  font-size: 28px;
  color: var(--accent-color);
}

.pricing .plan-header h3 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 10px;
}

.pricing .plan-header p {
  font-size: 15px;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
}

.pricing .plan-pricing {
  text-align: center;
  padding: 10px 30px 20px;
  position: relative;
}

.pricing .plan-pricing .currency {
  font-size: 24px;
  vertical-align: top;
  line-height: 1;
  color: var(--heading-color);
  font-weight: 600;
}

.pricing .plan-pricing .amount {
  font-size: 60px;
  font-weight: 700;
  color: var(--heading-color);
  line-height: 1;
}

.pricing .plan-pricing .period {
  font-size: 16px;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
}

.pricing .plan-features {
  padding: 20px 30px;
  flex: 1;
}

.pricing .plan-features ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.pricing .plan-features ul li {
  padding: 12px 0;
  font-size: 15px;
  display: flex;
  align-items: center;
  gap: 10px;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
}

.pricing .plan-features ul li.disabled {
  color: color-mix(in srgb, var(--default-color), transparent 60%);
}

.pricing .plan-features ul li i {
  font-size: 18px;
}

.pricing .plan-features ul li i.bi-check-circle-fill {
  color: var(--accent-color);
}

.pricing .plan-features ul li i.bi-x-circle-fill {
  color: color-mix(in srgb, var(--default-color), transparent 60%);
}

.pricing .plan-cta {
  padding: 10px 30px 30px;
  text-align: center;
}

.pricing .plan-cta .btn-plan {
  display: inline-block;
  width: 100%;
  padding: 14px 32px;
  background-color: color-mix(in srgb, var(--default-color), transparent 95%);
  color: var(--default-color);
  border-radius: 50px;
  font-size: 16px;
  font-weight: 600;
  transition: all 0.3s;
}

.pricing .plan-cta .btn-plan:hover {
  background-color: color-mix(in srgb, var(--default-color), transparent 80%);
}

@media (max-width: 992px) {
  .pricing .pricing-card {
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
  }
}

@media (max-width: 768px) {
  .pricing .plan-pricing .amount {
    font-size: 48px;
  }

  .pricing .plan-header {
    padding: 25px 20px 15px;
  }

  .pricing .plan-features,
  .pricing .plan-pricing,
  .pricing .plan-cta {
    padding-left: 20px;
    padding-right: 20px;
  }
}
</style>