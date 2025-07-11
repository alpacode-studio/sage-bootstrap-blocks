@props([
  'subtitle' => 'Pricing',
  'title' => 'Plan for every budget',
  'description' => 'Experience the future of finance with our secure, efficient, and user-friendly financial services',
  'plans' => [
    [
      'name' => 'Personal',
      'description' => 'Choose a plan that fits your personal financial needs and start managing your finances more effectively.',
      'price' => [
        'amount' => '$7',
        'period' => '/ month'
      ],
      'buttonText' => 'Get Started',
      'buttonUrl' => '#',
      'buttonClass' => 'btn',
      'type' => 'simple', // simple or featured
      'features' => []
    ],
    [
      'name' => 'Business',
      'description' => 'Optimize your business financial operations with our tailored business plans.',
      'price' => [
        'amount' => '$29',
        'period' => '/ month'
      ],
      'buttonText' => 'Get Started',
      'buttonUrl' => '#',
      'buttonClass' => 'btn btn-white hover-outline',
      'type' => 'featured',
      'featuresTitle' => 'Features',
      'features' => [
        'Personalized financial insights and reports',
        'Priority customer support',
        'Access to exclusive investment opportunities',
        'AI-driven financial recommendations'
      ]
    ]
  ]
])

<section class="section pricing__v2" id="pricing">
  <div class="container">
    {{-- Header Section --}}
    <div class="row mb-5">
      <div class="col-md-5 mx-auto text-center">
        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">{{ $subtitle }}</span>
        <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">{{ $title }}</h2>
        <p data-aos="fade-up" data-aos-delay="200">{{ $description }}</p>
      </div>
    </div>

    {{-- Pricing Plans --}}
    <div class="row">
      @foreach($plans as $index => $plan)
        @if($plan['type'] === 'simple')
          <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="{{ 300 + ($index * 100) }}">
            <div class="p-5 rounded-4 price-table h-100">
              <h3>{{ $plan['name'] }}</h3>
              <p>{{ $plan['description'] }}</p>
              <div class="price mb-4">
                <strong>{{ $plan['price']['amount'] }}</strong>
                <span>{{ $plan['price']['period'] }}</span>
              </div>
              <div>
                <a class="{{ $plan['buttonClass'] }}" href="{{ $plan['buttonUrl'] }}">{{ $plan['buttonText'] }}</a>
              </div>
            </div>
          </div>
        @elseif($plan['type'] === 'featured')
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="{{ 300 + ($index * 100) }}">
            <div class="p-5 rounded-4 price-table popular h-100">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="mb-3">{{ $plan['name'] }}</h3>
                  <p>{{ $plan['description'] }}</p>
                  <div class="price mb-4">
                    <strong class="me-1">{{ $plan['price']['amount'] }}</strong>
                    <span>{{ $plan['price']['period'] }}</span>
                  </div>
                  <div>
                    <a class="{{ $plan['buttonClass'] }}" href="{{ $plan['buttonUrl'] }}">{{ $plan['buttonText'] }}</a>
                  </div>
                </div>
                
                @if(!empty($plan['features']))
                  <div class="col-md-6 pricing-features">
                    <h4 class="text-uppercase fw-bold mb-3">{{ $plan['featuresTitle'] ?? 'Features' }}</h4>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                      @foreach($plan['features'] as $feature)
                        <li class="d-flex gap-2 align-items-start mb-0">
                          <span class="icon rounded-circle position-relative mt-1">
                            <i class="bi bi-check"></i>
                          </span>
                          <span>{{ $feature }}</span>
                        </li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>