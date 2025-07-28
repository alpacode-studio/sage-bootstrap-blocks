@props([
  'title' => 'Our Culture',
  'subtitle' => 'What makes working here special',
  'description' => 'We believe that great work happens when people feel valued, inspired, and empowered to do their best.',
  'culturalValues' => [
    [
      'title' => 'Work-Life Balance',
      'description' => 'Flexible hours and remote work options to help you thrive.',
      'icon' => 'bi bi-scale',
      'color' => 'primary'
    ],
    [
      'title' => 'Continuous Learning',
      'description' => 'Annual learning budget and conference attendance for growth.',
      'icon' => 'bi bi-book',
      'color' => 'success'
    ],
    [
      'title' => 'Open Communication',
      'description' => 'Transparent feedback and regular one-on-ones with leadership.',
      'icon' => 'bi bi-chat-dots',
      'color' => 'info'
    ],
    [
      'title' => 'Innovation Time',
      'description' => '20% time for personal projects and creative exploration.',
      'icon' => 'bi bi-lightbulb',
      'color' => 'warning'
    ]
  ],
  'benefits' => [
    'Competitive salary and equity',
    'Health, dental, and vision insurance',
    'Flexible PTO and sabbatical options',
    'Modern office with game room',
    'Free lunch and snacks',
    'Remote work opportunities'
  ],
  'workEnvironment' => [
    'title' => 'Our Environment',
    'description' => 'A collaborative, inclusive space where everyone can contribute their best work.',
    'highlights' => [
      'Open floor plan with quiet zones',
      'Standing desks and ergonomic setups',
      'Collaboration spaces and meeting rooms',
      'Meditation room and wellness area'
    ]
  ],
  'cultureImage' => 'resources/images/culture/office-culture.webp'
])

<section id="about-culture" class="about-culture section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">{{ $title }}</h2>
        <p class="lead text-muted mb-4">{{ $subtitle }}</p>
        <p class="text-muted">{{ $description }}</p>
      </div>
    </div>

    {{-- Cultural Values --}}
    <div class="row g-4 mb-5">
      @foreach($culturalValues as $index => $value)
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
          <div class="culture-card card border-0 shadow-sm h-100 text-center p-4">
            <div class="culture-icon mb-3">
              <div class="bg-{{ $value['color'] }} bg-opacity-10 text-{{ $value['color'] }} rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                <i class="{{ $value['icon'] }} fs-4"></i>
              </div>
            </div>
            <h5 class="card-title mb-3">{{ $value['title'] }}</h5>
            <p class="card-text text-muted">{{ $value['description'] }}</p>
          </div>
        </div>
      @endforeach
    </div>

    {{-- Benefits & Environment --}}
    <div class="row g-4">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="400">
        <div class="benefits-section">
          <h4 class="mb-4">Employee Benefits</h4>
          <div class="benefits-list">
            @foreach($benefits as $benefit)
              <div class="benefit-item d-flex align-items-center mb-3">
                <div class="benefit-icon me-3">
                  <i class="bi bi-check-circle-fill text-success fs-5"></i>
                </div>
                <span>{{ $benefit }}</span>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="600">
        <div class="environment-section">
          <h4 class="mb-4">{{ $workEnvironment['title'] }}</h4>
          <p class="text-muted mb-4">{{ $workEnvironment['description'] }}</p>
          
          <div class="environment-highlights">
            @foreach($workEnvironment['highlights'] as $highlight)
              <div class="highlight-item d-flex align-items-center mb-3">
                <div class="highlight-icon me-3">
                  <i class="bi bi-arrow-right text-primary"></i>
                </div>
                <span>{{ $highlight }}</span>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    {{-- Culture Image --}}
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="800">
        <div class="culture-image-section text-center">
          <img src="{{ Vite::asset($cultureImage) }}" 
               class="img-fluid rounded shadow-lg" 
               alt="Our Culture">
          <div class="mt-4">
            <p class="text-muted mb-4">Experience our vibrant workplace culture</p>
            <a href="/careers" class="btn btn-primary btn-lg px-4">
              <i class="bi bi-people me-2"></i>
              Join Our Team
            </a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>