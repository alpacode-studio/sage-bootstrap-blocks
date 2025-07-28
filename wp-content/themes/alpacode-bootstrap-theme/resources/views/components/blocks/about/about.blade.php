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

<style>
  /*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
.about .image-wrapper {
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

.about .image-wrapper:hover {
  transform: translateY(-5px);
}

.about .content h2 {
  font-weight: 700;
  position: relative;
  display: inline-block;
}

.about .content h2:after {
  content: "";
  position: absolute;
  width: 50px;
  height: 3px;
  background-color: var(--accent-color);
  left: 0;
  bottom: -10px;
}

.about .content h5 {
  font-weight: 500;
  color: color-mix(in srgb, var(--heading-color), transparent 20%);
}

.about .content p {
  font-size: 1rem;
  line-height: 1.8;
  margin-bottom: 1.5rem;
}

.about .features-list {
  margin-top: 2rem;
}

.about .features-list .feature-item {
  padding: 20px;
  background-color: var(--surface-color);
  border-radius: 8px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
  height: 100%;
}

.about .features-list .feature-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.about .features-list .feature-item i {
  font-size: 2rem;
  color: var(--accent-color);
  margin-bottom: 15px;
  display: block;
}

.about .features-list .feature-item h5 {
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 10px;
}

.about .features-list .feature-item p {
  font-size: 0.9rem;
  margin-bottom: 0;
}

.about .btn {
  padding: 10px 25px;
  border-radius: 50px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.about .btn.btn-primary {
  background-color: var(--accent-color);
  border-color: var(--accent-color);
  color: var(--contrast-color);
}

.about .btn.btn-primary:hover {
  background-color: color-mix(in srgb, var(--accent-color), #000 10%);
  border-color: color-mix(in srgb, var(--accent-color), #000 10%);
}

.about .btn.btn-outline-primary {
  border-color: var(--accent-color);
  color: var(--accent-color);
}

.about .btn.btn-outline-primary:hover {
  background-color: var(--accent-color);
  color: var(--contrast-color);
}

@media (max-width: 992px) {
  .about .image-wrapper {
    margin-bottom: 2rem;
  }

  .about .content {
    text-align: center;
  }

  .about .content h2:after {
    left: 50%;
    transform: translateX(-50%);
  }

  .about .signature-area {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
}

@media (max-width: 768px) {
  .about .features-list .feature-item {
    margin-bottom: 1.5rem;
  }
}
</style>