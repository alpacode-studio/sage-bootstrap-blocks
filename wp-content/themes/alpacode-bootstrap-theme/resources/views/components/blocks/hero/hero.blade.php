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

<style>
  /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  padding-top: 120px;
  min-height: 100vh;
  display: flex;
  align-items: center;
  position: relative;
  background: linear-gradient(135deg, color-mix(in srgb, var(--accent-color), transparent 96%) 0%, var(--background-color) 40%, color-mix(in srgb, var(--accent-color), transparent 98%) 100%);
  padding-bottom: 60px;
}

.hero::before {
  content: "";
  position: absolute;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, color-mix(in srgb, var(--accent-color), transparent 85%) 0%, transparent 70%);
  border-radius: 50%;
  top: -20%;
  right: -10%;
  animation: float 6s ease-in-out infinite;
  z-index: 1;
}

.hero::after {
  content: "";
  position: absolute;
  width: 200px;
  height: 200px;
  background: color-mix(in srgb, var(--accent-color), transparent 88%);
  border-radius: 50%;
  bottom: 10%;
  left: 5%;
  filter: blur(40px);
  animation: float 4s ease-in-out infinite reverse;
  z-index: 1;
}

.hero .hero-wrapper {
  width: 100%;
  max-width: 900px;
  margin: 0 auto;
}

.hero .hero-title {
  font-size: 48px;
  font-weight: 900;
  color: var(--heading-color);
  line-height: 1.1;
  margin-bottom: 25px;
  letter-spacing: -0.02em;
}

@media (max-width: 768px) {
  .hero .hero-title {
    font-size: 36px;
  }
}

@media (max-width: 575px) {
  .hero .hero-title {
    font-size: 28px;
  }
}

.hero .hero-title .typed {
  background: linear-gradient(135deg, var(--accent-color) 0%, color-mix(in srgb, var(--accent-color), #8b5cf6 50%) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  position: relative;
}

.hero .hero-title .typed::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(135deg, var(--accent-color) 0%, color-mix(in srgb, var(--accent-color), #8b5cf6 50%) 100%);
  border-radius: 2px;
}

.hero .hero-description {
  font-size: 1.2rem;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  line-height: 1.6;
  margin-bottom: 40px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.hero .hero-actions {
  display: flex;
  gap: 20px;
  justify-content: center;
  margin-bottom: 60px;
}

.hero .hero-actions .action-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 16px 32px;
  border-radius: 50px;
  font-weight: 600;
  font-size: 16px;
  transition: all 0.3s ease;
  text-decoration: none;
  position: relative;
  overflow: hidden;
}

.hero .hero-actions .action-btn.primary {
  background: var(--accent-color);
  color: var(--contrast-color);
  border: 2px solid var(--accent-color);
}

.hero .hero-actions .action-btn.primary::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, color-mix(in srgb, var(--accent-color), #8b5cf6 30%) 0%, var(--accent-color) 100%);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.hero .hero-actions .action-btn.primary span,
.hero .hero-actions .action-btn.primary i {
  position: relative;
  z-index: 1;
}

.hero .hero-actions .action-btn.primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 30px color-mix(in srgb, var(--accent-color), transparent 60%);
}

.hero .hero-actions .action-btn.primary:hover::before {
  opacity: 1;
}

.hero .hero-actions .action-btn.secondary {
  background: transparent;
  color: var(--default-color);
  border: 2px solid color-mix(in srgb, var(--default-color), transparent 80%);
}

.hero .hero-actions .action-btn.secondary:hover {
  background: var(--surface-color);
  border-color: var(--accent-color);
  color: var(--accent-color);
  transform: translateY(-2px);
  box-shadow: 0 8px 25px color-mix(in srgb, var(--default-color), transparent 90%);
}

.hero .hero-image-showcase {
  position: relative;
}

.hero .hero-image-showcase .image-wrapper {
  position: relative;
  background: var(--surface-color);
  border-radius: 20px;
  padding: 15px;
  box-shadow: 0 20px 60px color-mix(in srgb, var(--default-color), transparent 88%);
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 92%);
}

.hero .hero-image-showcase .image-wrapper img {
  border-radius: 15px;
  width: 100%;
  height: auto;
}

.hero .hero-image-showcase .floating-card {
  position: absolute;
  background: var(--surface-color);
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 8px 30px color-mix(in srgb, var(--default-color), transparent 85%);
  backdrop-filter: blur(10px);
}

.hero .hero-image-showcase .floating-card.card-1 {
  top: 20%;
  left: -60px;
  animation: float 3s ease-in-out infinite;
}

.hero .hero-image-showcase .floating-card.card-2 {
  bottom: 15%;
  right: -60px;
  animation: float 3s ease-in-out infinite reverse;
}

.hero .hero-image-showcase .floating-card .card-content {
  display: flex;
  align-items: center;
  gap: 15px;
}

.hero .hero-image-showcase .floating-card .card-content .card-icon {
  background: color-mix(in srgb, var(--accent-color), transparent 90%);
  width: 50px;
  height: 50px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero .hero-image-showcase .floating-card .card-content .card-icon i {
  color: var(--accent-color);
  font-size: 20px;
}

.hero .hero-image-showcase .floating-card .card-content .card-info h4 {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--heading-color);
  margin: 0;
  line-height: 1;
}

.hero .hero-image-showcase .floating-card .card-content .card-info p {
  margin: 5px 0 0;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  font-size: 0.85rem;
  white-space: nowrap;
}

@keyframes float {

  0%,
  100% {
    transform: translateY(0px);
  }

  50% {
    transform: translateY(-15px);
  }
}

@keyframes pulse {

  0%,
  100% {
    opacity: 0.4;
  }

  50% {
    opacity: 0.8;
  }
}

@media (max-width: 991px) {
  .hero {
    min-height: auto;
  }

  .hero .floating-card.card-1 {
    left: -30px;
    top: 10%;
  }

  .hero .floating-card.card-2 {
    right: -30px;
    bottom: 10%;
  }

  .hero .hero-actions {
    margin-bottom: 40px;
  }
}

@media (max-width: 768px) {
  .hero .hero-actions {
    flex-direction: column;
    align-items: center;
    gap: 15px;
  }

  .hero .hero-actions .action-btn {
    width: 100%;
    max-width: 280px;
    justify-content: center;
  }

  .hero .floating-card {
    display: none;
  }
}

@media (max-width: 576px) {
  .hero {
    padding: 100px 0 30px;
  }

  .hero .hero-badge {
    margin-bottom: 20px;
  }

  .hero .hero-description {
    font-size: 1.1rem;
    margin-bottom: 30px;
  }

  .hero .hero-actions {
    margin-bottom: 30px;
  }
}
</style>