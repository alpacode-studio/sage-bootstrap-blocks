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

<style>
  /*--------------------------------------------------------------
# Call To Action Section
--------------------------------------------------------------*/
.call-to-action {
  position: relative;
  padding: 3rem;
  border-radius: 1rem;
  overflow: hidden;
}

.call-to-action .badge {
  background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
  color: var(--accent-color);
  padding: 0.5rem 1rem;
  font-size: 0.875rem;
  font-weight: 500;
  border-radius: 2rem;
}

.call-to-action h2 {
  font-size: clamp(1.75rem, 3vw, 2.5rem);
  font-weight: 700;
  line-height: 1.2;
  margin: 0;
}

.call-to-action p {
  font-size: 1.125rem;
  line-height: 1.6;
  opacity: 0.9;
}

.call-to-action .features .feature-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 1rem;
  background-color: var(--surface-color);
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease;
}

.call-to-action .features .feature-item:hover {
  transform: translateY(-2px);
}

.call-to-action .features .feature-item i {
  color: var(--accent-color);
  font-size: 1.25rem;
}

.call-to-action .features .feature-item span {
  font-weight: 500;
}

.call-to-action .cta-buttons .btn {
  padding: 0.75rem 1.5rem;
  font-weight: 500;
  border-radius: 0.5rem;
  transition: all 0.3s ease;
  border-radius: 50px;
}

.call-to-action .cta-buttons .btn.btn-primary {
  background-color: var(--accent-color);
  border-color: var(--accent-color);
  color: var(--contrast-color);
}

.call-to-action .cta-buttons .btn.btn-primary:hover {
  background-color: color-mix(in srgb, var(--accent-color), transparent 15%);
  border-color: color-mix(in srgb, var(--accent-color), transparent 15%);
  transform: translateY(-2px);
}

.call-to-action .cta-buttons .btn.btn-outline {
  border: 2px solid color-mix(in srgb, var(--accent-color), transparent 70%);
  color: var(--accent-color);
}

.call-to-action .cta-buttons .btn.btn-outline:hover {
  background-color: var(--accent-color);
  border-color: var(--accent-color);
  color: var(--contrast-color);
  transform: translateY(-2px);
}

.call-to-action .content-right {
  flex-shrink: 0;
  max-width: 100%;
  width: 450px;
}

.call-to-action .content-right img {
  width: 100%;
  height: auto;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.call-to-action .content-right .floating-card {
  position: absolute;
  bottom: 2rem;
  right: -1rem;
  background: var(--surface-color);
  padding: 1rem;
  border-radius: 1rem;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
  gap: 1rem;
  animation: float 3s ease-in-out infinite;
}

.call-to-action .content-right .floating-card .card-icon {
  width: 3rem;
  height: 3rem;
  background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
  border-radius: 0.75rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.call-to-action .content-right .floating-card .card-icon i {
  color: var(--accent-color);
  font-size: 1.5rem;
}

.call-to-action .content-right .floating-card .card-content {
  display: flex;
  flex-direction: column;
}

.call-to-action .content-right .floating-card .card-content .stats-number {
  font-size: 1.25rem;
  font-weight: 700;
  color: var(--accent-color);
}

.call-to-action .content-right .floating-card .card-content .stats-text {
  font-size: 0.875rem;
  opacity: 0.8;
}

.call-to-action .decoration {
  position: absolute;
  inset: 0;
  pointer-events: none;
  overflow: hidden;
  z-index: 1;
}

.call-to-action .decoration .circle-1,
.call-to-action .decoration .circle-2 {
  position: absolute;
  border-radius: 50%;
  background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
}

.call-to-action .decoration .circle-1 {
  width: 300px;
  height: 300px;
  top: -150px;
  right: -150px;
  opacity: 0.5;
}

.call-to-action .decoration .circle-2 {
  width: 200px;
  height: 200px;
  bottom: -100px;
  left: -100px;
  opacity: 0.3;
}

@media (max-width: 991.98px) {
  .call-to-action {
    padding: 2rem;
  }

  .call-to-action .content-right {
    width: 100%;
    margin-top: 2rem;
  }

  .call-to-action .content-right .floating-card {
    position: relative;
    bottom: auto;
    right: auto;
    margin-top: -3rem;
    margin-right: 1rem;
    z-index: 1;
  }
}

@keyframes float {

  0%,
  100% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(-10px);
  }
}
</style>