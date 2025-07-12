@props([
  'title' => 'Our Story',
  'subtitle' => 'Crafting innovative solutions since 2010',
  'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel mauris in magna fringilla finibus. Suspendisse potenti. Integer ut fringilla mi, a aliquam risus. Maecenas ac nibh magna. Aenean fringilla lobortis ex, sit amet iaculis eros facilisis nec.',
  'image' => 'resources/images/about/about-portrait-7.webp',
  'imageAlt' => 'About Us Image',
  'features' => [
    [
      'icon' => 'bi bi-award',
      'title' => 'Excellence',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ],
    [
      'icon' => 'bi bi-lightbulb',
      'title' => 'Innovation',
      'description' => 'Proin vel mauris in magna fringilla finibus.'
    ],
    [
      'icon' => 'bi bi-people',
      'title' => 'Community',
      'description' => 'Suspendisse potenti. Integer ut fringilla mi.'
    ],
    [
      'icon' => 'bi bi-graph-up-arrow',
      'title' => 'Growth',
      'description' => 'Maecenas ac nibh magna. Aenean fringilla lobortis ex.'
    ]
  ],
  'primaryAction' => [
    'label' => 'Learn More',
    'url' => '#'
  ],
  'secondaryAction' => [
    'label' => 'Contact Us',
    'url' => '#'
  ],
  'imageFirst' => false
])

<section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center justify-content-between g-lg-5">
      
      {{-- Image Column --}}
      <div class="col-lg-6 {{ $imageFirst ? 'order-1' : 'order-2' }}" 
           data-aos="{{ $imageFirst ? 'fade-left' : 'fade-right' }}" 
           data-aos-delay="200">
        <div class="image-wrapper">
          <img src="{{ Vite::asset($image) }}" class="img-fluid rounded" alt="{{ $imageAlt }}">
        </div>
      </div>

      {{-- Content Column --}}
      <div class="col-lg-6 {{ $imageFirst ? 'order-2' : 'order-1' }}" 
           data-aos="{{ $imageFirst ? 'fade-right' : 'fade-left' }}" 
           data-aos-delay="300">
        <div class="content">
          <h2 class="mb-4">{{ $title }}</h2>
          <h5 class="mb-4">{{ $subtitle }}</h5>
          
          <p>{{ $description }}</p>

          @if(!empty($features))
            <div class="features-list mt-5" data-aos="fade-up" data-aos-delay="400">
              <div class="row g-4">
                @foreach($features as $feature)
                  <div class="col-md-6">
                    <div class="feature-item">
                      <i class="{{ $feature['icon'] }}"></i>
                      <h5>{{ $feature['title'] }}</h5>
                      <p>{{ $feature['description'] }}</p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endif

          @if($primaryAction || $secondaryAction)
            <div class="mt-5" data-aos="fade-up" data-aos-delay="600">
              @if($primaryAction)
                <a href="{{ $primaryAction['url'] }}" class="btn btn-primary me-3">
                  {{ $primaryAction['label'] }}
                </a>
              @endif
              
              @if($secondaryAction)
                <a href="{{ $secondaryAction['url'] }}" class="btn btn-outline-primary">
                  {{ $secondaryAction['label'] }}
                </a>
              @endif
            </div>
          @endif
        </div>
      </div>
      
    </div>
  </div>
</section>