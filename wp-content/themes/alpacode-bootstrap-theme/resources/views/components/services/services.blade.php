@props([
  'sectionTitle' => 'Services',
  'sectionDescription' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit',
  'intro' => [
    'badge' => [
      'icon' => 'bi bi-star-fill',
      'text' => 'WHAT WE DO'
    ],
    'title' => 'Transforming Ideas into Outstanding Results',
    'description' => 'We believe in crafting exceptional experiences that drive meaningful growth for your business. Our dedicated team combines creativity with technical excellence to deliver solutions that make a difference.',
    'ctaText' => 'Explore Our Work',
    'ctaUrl' => '#',
    'image' => 'resources/images/services/services-1.webp',
    'imageAlt' => 'Services'
  ],
  'services' => [
    [
      'number' => '01',
      'title' => 'Custom Application Development',
      'description' => 'Building robust applications tailored to your specific needs using modern frameworks and cutting-edge technologies.',
      'url' => '#'
    ],
    [
      'number' => '02',
      'title' => 'Strategic Planning',
      'description' => 'Comprehensive roadmaps that align technology solutions with your business objectives and market opportunities.',
      'url' => '#'
    ],
    [
      'number' => '03',
      'title' => 'Identity Design',
      'description' => 'Creating compelling visual narratives that resonate with your audience and strengthen brand recognition across all touchpoints.',
      'url' => '#'
    ],
    [
      'number' => '04',
      'title' => 'Digital Marketing',
      'description' => 'Maximizing your online presence through targeted campaigns that drive engagement and convert visitors into loyal customers.',
      'url' => '#'
    ],
    [
      'number' => '05',
      'title' => 'User Experience Design',
      'description' => 'Crafting intuitive interfaces that prioritize user needs while delivering seamless interactions across desktop and mobile platforms.',
      'url' => '#'
    ],
    [
      'number' => '06',
      'title' => 'Data Intelligence',
      'description' => 'Transforming raw data into actionable insights that inform strategic decisions and optimize business performance effectively.',
      'url' => '#'
    ]
  ],
  'reverseIntro' => false,
  'gridColumns' => 3
])

<section id="services" class="services section">
  {{-- Section Title --}}
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ $sectionTitle }}</h2>
    <p>{{ $sectionDescription }}</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    
    {{-- Intro Section --}}
    <div class="row align-items-center">
      
      {{-- Intro Content --}}
      <div class="col-lg-6 {{ $reverseIntro ? 'order-2' : 'order-1' }}">
        <div class="intro-content" data-aos="{{ $reverseIntro ? 'fade-left' : 'fade-right' }}" data-aos-delay="100">
          
          @if($intro['badge'])
            <div class="section-badge mb-3" data-aos="zoom-in" data-aos-delay="50">
              <i class="{{ $intro['badge']['icon'] }}"></i>
              <span>{{ $intro['badge']['text'] }}</span>
            </div>
          @endif
          
          <h2 class="section-heading mb-4">{{ $intro['title'] }}</h2>
          <p class="section-description mb-4">{{ $intro['description'] }}</p>
          
          @if($intro['ctaText'])
            <a href="{{ $intro['ctaUrl'] }}" class="cta-button" data-aos="{{ $reverseIntro ? 'fade-left' : 'fade-right' }}" data-aos-delay="200">
              {{ $intro['ctaText'] }}
            </a>
          @endif
        </div>
      </div>
      
      {{-- Intro Image --}}
      <div class="col-lg-6 {{ $reverseIntro ? 'order-1' : 'order-2' }}">
        <div class="hero-visual" data-aos="{{ $reverseIntro ? 'fade-right' : 'fade-left' }}" data-aos-delay="150">
          <img src="{{ Vite::asset($intro['image']) }}" alt="{{ $intro['imageAlt'] }}" class="img-fluid">
        </div>
      </div>
      
    </div>

    {{-- Services Grid --}}
    @if(!empty($services))
      <div class="services-grid mt-5">
        <div class="row g-4">
          @foreach($services as $index => $service)
            <div class="col-lg-{{ 12 / $gridColumns }} col-md-6" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ 100 + (($index % $gridColumns) * 100) }}">
              <div class="service-card">
                <div class="card-number">
                  <span>{{ $service['number'] }}</span>
                </div>
                <div class="card-content">
                  <h5 class="service-title">
                    <a href="{{ $service['url'] }}">{{ $service['title'] }}</a>
                  </h5>
                  <p class="service-description">{{ $service['description'] }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endif

  </div>
</section>

<style>
  /*--------------------------------------------------------------
# Service Details Section
--------------------------------------------------------------*/
.service-details .service-hero {
  position: relative;
  margin-bottom: 40px;
  border-radius: 12px;
  overflow: hidden;
}

.service-details .service-hero img {
  width: 100%;
  height: 400px;
  object-fit: cover;
}

.service-details .service-hero .service-badge {
  position: absolute;
  top: 20px;
  right: 20px;
  background: var(--accent-color);
  color: var(--contrast-color);
  padding: 8px 20px;
  border-radius: 25px;
  font-size: 14px;
  font-weight: 600;
}

.service-details .service-content .service-header {
  margin-bottom: 40px;
}

.service-details .service-content .service-header h2 {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 20px;
  color: var(--heading-color);
}

.service-details .service-content .service-header .service-intro {
  font-size: 18px;
  line-height: 1.7;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
}

.service-details .service-content h4 {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 30px;
  color: var(--heading-color);
}

.service-details .service-features {
  margin-bottom: 50px;
}

.service-details .service-features .feature-item {
  display: flex;
  align-items: flex-start;
  padding: 20px;
  background: var(--surface-color);
  border-radius: 8px;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  transition: all 0.3s ease;
}

.service-details .service-features .feature-item:hover {
  box-shadow: 0 8px 25px color-mix(in srgb, var(--default-color), transparent 90%);
  transform: translateY(-2px);
}

.service-details .service-features .feature-item .feature-icon {
  background: color-mix(in srgb, var(--accent-color), transparent 90%);
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 20px;
  flex-shrink: 0;
}

.service-details .service-features .feature-item .feature-icon i {
  font-size: 24px;
  color: var(--accent-color);
}

.service-details .service-features .feature-item .feature-content h5 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 8px;
  color: var(--heading-color);
}

.service-details .service-features .feature-item .feature-content p {
  font-size: 14px;
  margin: 0;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
}

.service-details .service-process {
  margin-bottom: 50px;
}

.service-details .service-process .process-steps .process-step {
  display: flex;
  margin-bottom: 30px;
  position: relative;
}

.service-details .service-process .process-steps .process-step:not(:last-child)::after {
  content: "";
  position: absolute;
  left: 25px;
  top: 60px;
  width: 2px;
  height: 40px;
  background: color-mix(in srgb, var(--accent-color), transparent 70%);
}

.service-details .service-process .process-steps .process-step .step-number {
  background: var(--accent-color);
  color: var(--contrast-color);
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  margin-right: 25px;
  flex-shrink: 0;
  font-size: 16px;
}

.service-details .service-process .process-steps .process-step .step-content h5 {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 10px;
  color: var(--heading-color);
}

.service-details .service-process .process-steps .process-step .step-content p {
  font-size: 15px;
  line-height: 1.6;
  margin: 0;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
}

.service-details .service-gallery {
  margin-bottom: 30px;
}

.service-details .service-gallery img {
  transition: transform 0.3s ease;
}

.service-details .service-gallery img:hover {
  transform: scale(1.05);
}

.service-details .service-sidebar .service-menu {
  background: var(--surface-color);
  padding: 30px;
  border-radius: 10px;
  margin-bottom: 30px;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.service-details .service-sidebar .service-menu h4 {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 25px;
  color: var(--heading-color);
}

.service-details .service-sidebar .service-menu .menu-list .menu-item {
  display: flex;
  align-items: center;
  padding: 15px 0;
  border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  color: var(--default-color);
  text-decoration: none;
  transition: all 0.3s ease;
}

.service-details .service-sidebar .service-menu .menu-list .menu-item:last-child {
  border-bottom: none;
}

.service-details .service-sidebar .service-menu .menu-list .menu-item:hover,
.service-details .service-sidebar .service-menu .menu-list .menu-item.active {
  color: var(--accent-color);
  padding-left: 10px;
}

.service-details .service-sidebar .service-menu .menu-list .menu-item:hover i,
.service-details .service-sidebar .service-menu .menu-list .menu-item.active i {
  color: var(--accent-color);
}

.service-details .service-sidebar .service-menu .menu-list .menu-item i {
  margin-right: 12px;
  font-size: 16px;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  transition: color 0.3s ease;
}

.service-details .service-sidebar .service-menu .menu-list .menu-item span {
  font-weight: 500;
}

.service-details .service-sidebar .service-info {
  background: var(--surface-color);
  padding: 30px;
  border-radius: 10px;
  margin-bottom: 30px;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.service-details .service-sidebar .service-info h4 {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 25px;
  color: var(--heading-color);
}

.service-details .service-sidebar .service-info .info-list .info-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 0;
  border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.service-details .service-sidebar .service-info .info-list .info-item:last-child {
  border-bottom: none;
}

.service-details .service-sidebar .service-info .info-list .info-item .info-label {
  font-weight: 500;
  color: var(--default-color);
}

.service-details .service-sidebar .service-info .info-list .info-item .info-value {
  font-weight: 600;
  color: var(--accent-color);
}

.service-details .service-sidebar .contact-card {
  background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), #000 20%));
  padding: 30px;
  border-radius: 10px;
  color: var(--contrast-color);
}

.service-details .service-sidebar .contact-card .contact-content h4 {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 15px;
  color: var(--contrast-color);
}

.service-details .service-sidebar .contact-card .contact-content p {
  margin-bottom: 20px;
  opacity: 0.9;
  font-size: 14px;
  line-height: 1.6;
}

.service-details .service-sidebar .contact-card .contact-content .contact-info {
  margin-bottom: 25px;
}

.service-details .service-sidebar .contact-card .contact-content .contact-info .contact-item {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.service-details .service-sidebar .contact-card .contact-content .contact-info .contact-item i {
  margin-right: 10px;
  opacity: 0.8;
}

.service-details .service-sidebar .contact-card .contact-content .contact-info .contact-item span {
  font-size: 14px;
}

.service-details .service-sidebar .contact-card .contact-content .btn {
  background: var(--contrast-color);
  color: var(--accent-color);
  border: none;
  padding: 12px 25px;
  font-weight: 600;
  border-radius: 6px;
  transition: all 0.3s ease;
}

.service-details .service-sidebar .contact-card .contact-content .btn:hover {
  background: color-mix(in srgb, var(--contrast-color), transparent 10%);
  transform: translateY(-2px);
}

@media (max-width: 768px) {
  .service-details .service-hero img {
    height: 250px;
  }

  .service-details .service-hero .service-badge {
    top: 15px;
    right: 15px;
    padding: 6px 15px;
    font-size: 12px;
  }

  .service-details .service-content .service-header h2 {
    font-size: 24px;
  }

  .service-details .feature-item {
    padding: 15px !important;
  }

  .service-details .feature-item .feature-icon {
    width: 50px !important;
    height: 50px !important;
    margin-right: 15px !important;
  }

  .service-details .feature-item .feature-icon i {
    font-size: 20px !important;
  }

  .service-details .service-sidebar {
    margin-top: 30px;
  }
}
</style>