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