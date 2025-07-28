@props([
  'title' => 'Meet Our Founders',
  'subtitle' => 'The visionaries behind our success',
  'founders' => [
    [
      'name' => 'Sarah Johnson',
      'role' => 'CEO & Co-Founder',
      'bio' => 'Serial entrepreneur with 15+ years in tech. Previously led engineering teams at Google and Amazon.',
      'image' => 'resources/images/founders/sarah.webp',
      'quote' => 'Innovation happens when passion meets purpose.',
      'expertise' => ['Strategy', 'Leadership', 'Product Vision']
    ],
    [
      'name' => 'Michael Chen',
      'role' => 'CTO & Co-Founder',
      'bio' => 'Former Silicon Valley veteran with deep expertise in AI and machine learning architectures.',
      'image' => 'resources/images/founders/michael.webp',
      'quote' => 'Technology should solve real problems for real people.',
      'expertise' => ['AI/ML', 'Architecture', 'Innovation']
    ]
  ],
  'companyStory' => [
    'title' => 'Our Story',
    'description' => 'Founded in 2010 by two college friends who shared a vision of making technology more accessible and impactful for businesses worldwide.',
    'achievements' => [
      'Bootstrapped to $10M revenue',
      'Serving 1000+ clients globally',
      'Team of 50+ experts',
      'Multiple industry awards'
    ]
  ]
])

<section id="about-founders" class="about-founders section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">{{ $title }}</h2>
        <p class="lead text-muted">{{ $subtitle }}</p>
      </div>
    </div>

    {{-- Founders --}}
    <div class="row g-4 mb-5">
      @foreach($founders as $index => $founder)
        <div class="col-lg-6" data-aos="fade-{{ $index % 2 == 0 ? 'right' : 'left' }}" data-aos-delay="{{ $index * 200 }}">
          <div class="founder-card card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-4">
                <img src="{{ Vite::asset($founder['image']) }}" 
                     class="rounded-circle me-3 flex-shrink-0" 
                     width="80" 
                     height="80" 
                     alt="{{ $founder['name'] }}">
                <div>
                  <h4 class="card-title mb-1">{{ $founder['name'] }}</h4>
                  <p class="text-primary mb-2">{{ $founder['role'] }}</p>
                  <p class="card-text text-muted mb-3">{{ $founder['bio'] }}</p>
                </div>
              </div>
              
              <blockquote class="blockquote border-start border-primary border-3 ps-3 mb-4">
                <p class="mb-0 fst-italic">"{{ $founder['quote'] }}"</p>
              </blockquote>
              
              <div class="expertise-tags">
                @foreach($founder['expertise'] as $skill)
                  <span class="badge bg-primary bg-opacity-10 text-primary me-2 mb-2">{{ $skill }}</span>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{-- Company Story --}}
    <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="600">
        <div class="story-section text-center">
          <h3 class="mb-4">{{ $companyStory['title'] }}</h3>
          <p class="lead mb-4">{{ $companyStory['description'] }}</p>
          
          <div class="row g-3">
            @foreach($companyStory['achievements'] as $achievement)
              <div class="col-md-6">
                <div class="achievement-item p-3 bg-dark rounded">
                  <i class="bi bi-check-circle-fill text-success me-2"></i>
                  {{ $achievement }}
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>