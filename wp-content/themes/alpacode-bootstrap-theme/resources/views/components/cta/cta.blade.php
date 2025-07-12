@props([
  'badge' => 'Don\'t Miss!',
  'title' => 'Revolutionize Your Digital Experience Today',
  'description' => 'Strategia accelerates your business growth through innovative solutions and cutting-edge technology. Join thousands of satisfied customers who have transformed their operations.',
  'features' => [
    [
      'icon' => 'bi bi-check-circle-fill',
      'text' => 'Premium Support'
    ],
    [
      'icon' => 'bi bi-check-circle-fill',
      'text' => 'Cloud Integration'
    ],
    [
      'icon' => 'bi bi-check-circle-fill',
      'text' => 'Real-time Analytics'
    ]
  ],
  'primaryAction' => [
    'label' => 'Start Free Trial',
    'url' => '#',
    'class' => 'btn btn-primary'
  ],
  'secondaryAction' => [
    'label' => 'Learn More',
    'url' => '#',
    'class' => 'btn btn-outline'
  ],
  'image' => 'resources/images/misc/misc-5.webp',
  'imageAlt' => 'Digital Platform',
  'floatingCard' => [
    'icon' => 'bi bi-graph-up-arrow',
    'number' => '245%',
    'text' => 'Growth Rate'
  ],
  'showDecorations' => true,
  'backgroundClass' => 'light-background',
  'reverseLayout' => false
])

<section id="call-to-action" class="call-to-action section {{ $backgroundClass }}">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="advertise-1 d-flex flex-column flex-lg-row gap-4 align-items-center position-relative">

      {{-- Content Left --}}
      <div class="content-left flex-grow-1 {{ $reverseLayout ? 'order-2' : 'order-1' }}" 
           data-aos="{{ $reverseLayout ? 'fade-left' : 'fade-right' }}" 
           data-aos-delay="200">
        
        @if($badge)
          <span class="badge text-uppercase mb-2">{{ $badge }}</span>
        @endif
        
        <h2>{{ $title }}</h2>
        <p class="my-4">{{ $description }}</p>

        @if(!empty($features))
          <div class="features d-flex flex-wrap gap-3 mb-4">
            @foreach($features as $feature)
              <div class="feature-item">
                <i class="{{ $feature['icon'] }}"></i>
                <span>{{ $feature['text'] }}</span>
              </div>
            @endforeach
          </div>
        @endif

        @if($primaryAction || $secondaryAction)
          <div class="cta-buttons d-flex flex-wrap gap-3">
            @if($primaryAction)
              <a href="{{ $primaryAction['url'] }}" class="{{ $primaryAction['class'] }}">
                {{ $primaryAction['label'] }}
              </a>
            @endif
            
            @if($secondaryAction)
              <a href="{{ $secondaryAction['url'] }}" class="{{ $secondaryAction['class'] }}">
                {{ $secondaryAction['label'] }}
              </a>
            @endif
          </div>
        @endif
      </div>

      {{-- Content Right --}}
      <div class="content-right position-relative {{ $reverseLayout ? 'order-1' : 'order-2' }}" 
           data-aos="{{ $reverseLayout ? 'fade-right' : 'fade-left' }}" 
           data-aos-delay="300">
        
        <img src="{{ Vite::asset($image) }}" alt="{{ $imageAlt }}" class="img-fluid rounded-4">
        
        @if($floatingCard)
          <div class="floating-card">
            <div class="card-icon">
              <i class="{{ $floatingCard['icon'] }}"></i>
            </div>
            <div class="card-content">
              <span class="stats-number">{{ $floatingCard['number'] }}</span>
              <span class="stats-text">{{ $floatingCard['text'] }}</span>
            </div>
          </div>
        @endif
      </div>

      {{-- Decorative Elements --}}
      @if($showDecorations)
        <div class="decoration">
          <div class="circle-1"></div>
          <div class="circle-2"></div>
        </div>
      @endif

    </div>
  </div>
</section>