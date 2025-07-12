@props([
  'title' => 'Transform Your Workflow With',
  'typedItems' => ['Advanced Analytics', 'Seamless Integration', 'Robust Security'],
  'description' => 'Our innovative platform empowers businesses to enhance their productivity and achieve unparalleled operational efficiency across diverse industries.',
  'primaryAction' => [
    'label' => 'Discover More Today',
    'url' => '#',
    'icon' => 'bi bi-arrow-right'
  ],
  'secondaryAction' => [
    'label' => 'Watch a Quick Demo',
    'url' => 'https://www.youtube.com/watch?v=Y7f98aduVJ8',
    'icon' => 'bi bi-play-circle',
    'isVideo' => true
  ],
  'image' => 'resources/images/about/about-18.webp',
  'imageAlt' => 'Strategic Overview',
  'floatingCards' => [
    [
      'icon' => 'bi bi-graph-up-arrow',
      'number' => 89,
      'suffix' => '%',
      'label' => 'Success Benchmark',
      'duration' => 2,
      'delay' => 600,
      'animation' => 'fade-right'
    ],
    [
      'icon' => 'bi bi-people',
      'number' => 500,
      'suffix' => '+',
      'label' => 'Satisfied Clients',
      'duration' => 2,
      'delay' => 700,
      'animation' => 'fade-left'
    ]
  ]
])

<section id="hero" class="hero section">
  <div class="container">
    <div class="hero-wrapper">
      <div class="hero-main-content text-center">
        
        <h1 class="hero-title" data-aos="zoom-in" data-aos-delay="200">
          {{ $title }}<br>
          <span class="typed" data-typed-items="{{ implode(',', $typedItems) }}"></span>
        </h1>

        <p class="hero-description" data-aos="fade-up" data-aos-delay="300">
          {{ $description }}
        </p>

        <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
          <a href="{{ $primaryAction['url'] }}" class="action-btn primary">
            <span>{{ $primaryAction['label'] }}</span>
            <i class="{{ $primaryAction['icon'] }}"></i>
          </a>
          
          <a href="{{ $secondaryAction['url'] }}" 
             class="action-btn secondary{{ $secondaryAction['isVideo'] ? ' glightbox' : '' }}">
            <i class="{{ $secondaryAction['icon'] }}"></i>
            <span>{{ $secondaryAction['label'] }}</span>
          </a>
        </div>

        <div class="hero-image-showcase" data-aos="fade-up" data-aos-delay="500">
          <div class="image-wrapper">
            <img src="{{ Vite::asset($image) }}" class="img-fluid" alt="{{ $imageAlt }}">
            
            @foreach($floatingCards as $index => $card)
              <div class="floating-card card-{{ $index + 1 }}" 
                   data-aos="{{ $card['animation'] }}" 
                   data-aos-delay="{{ $card['delay'] }}">
                <div class="card-content">
                  <div class="card-icon">
                    <i class="{{ $card['icon'] }}"></i>
                  </div>
                  <div class="card-info">
                    <h4>
                      <span data-purecounter-start="0" 
                            data-purecounter-end="{{ $card['number'] }}" 
                            data-purecounter-duration="{{ $card['duration'] }}"
                            class="purecounter">0</span>{{ $card['suffix'] }}
                    </h4>
                    <p>{{ $card['label'] }}</p>
                  </div>
                </div>
              </div>
            @endforeach
            
          </div>
        </div>

      </div>
    </div>
  </div>
</section>