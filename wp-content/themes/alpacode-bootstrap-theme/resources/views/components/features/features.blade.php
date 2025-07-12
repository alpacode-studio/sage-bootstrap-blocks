@props([
  'sectionTitle' => 'Features',
  'sectionDescription' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit',
  'introTitle' => 'Powerful features to accelerate growth',
  'introDescription' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
  'introImage' => 'resources/images/features/features-2.webp',
  'introImageAlt' => 'Features',
  'stats' => [
    [
      'number' => '150+',
      'label' => 'Features'
    ],
    [
      'number' => '99.9%',
      'label' => 'Uptime'
    ],
    [
      'number' => '24/7',
      'label' => 'Support'
    ]
  ],
  'features' => [
    [
      'number' => '01',
      'icon' => 'bi bi-lightning-charge',
      'title' => 'Lightning Fast Performance',
      'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint.',
      'tags' => ['Speed', 'Optimization']
    ],
    [
      'number' => '02',
      'icon' => 'bi bi-shield-check',
      'title' => 'Enterprise Security',
      'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed.',
      'tags' => ['Secure', 'Protected']
    ],
    [
      'number' => '03',
      'icon' => 'bi bi-people-fill',
      'title' => 'Team Collaboration',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
      'tags' => ['Teamwork', 'Sync']
    ],
    [
      'number' => '04',
      'icon' => 'bi bi-graph-up-arrow',
      'title' => 'Advanced Analytics',
      'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis.',
      'tags' => ['Data', 'Insights']
    ],
    [
      'number' => '05',
      'icon' => 'bi bi-gear-fill',
      'title' => 'Smart Automation',
      'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam.',
      'tags' => ['AI', 'Workflow']
    ],
    [
      'number' => '06',
      'icon' => 'bi bi-cloud-arrow-up',
      'title' => 'Cloud Integration',
      'description' => 'Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.',
      'tags' => ['Cloud', 'Scalable']
    ]
  ],
  'reverseIntro' => false,
  'showStats' => true,
  'gridColumns' => 3
])

<section id="features" class="features section">
  {{-- Section Title --}}
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ $sectionTitle }}</h2>
    <p>{{ $sectionDescription }}</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    
    {{-- Intro Section --}}
    <div class="row align-items-center mb-5">
      
      {{-- Intro Content --}}
      <div class="col-lg-6 {{ $reverseIntro ? 'order-2' : 'order-1' }}" 
           data-aos="{{ $reverseIntro ? 'fade-left' : 'fade-right' }}" 
           data-aos-delay="150">
        <div class="intro-content">
          <h2>{{ $introTitle }}</h2>
          <p>{{ $introDescription }}</p>
          
          @if($showStats && !empty($stats))
            <div class="feature-stats">
              @foreach($stats as $stat)
                <div class="stat-item">
                  <span class="stat-number">{{ $stat['number'] }}</span>
                  <span class="stat-label">{{ $stat['label'] }}</span>
                </div>
              @endforeach
            </div>
          @endif
        </div>
      </div>
      
      {{-- Intro Image --}}
      <div class="col-lg-6 {{ $reverseIntro ? 'order-1' : 'order-2' }}" 
           data-aos="{{ $reverseIntro ? 'fade-right' : 'fade-left' }}" 
           data-aos-delay="200">
        <div class="intro-image">
          <img src="{{ Vite::asset($introImage) }}" alt="{{ $introImageAlt }}" class="img-fluid">
        </div>
      </div>
      
    </div>

    {{-- Features Grid --}}
    @if(!empty($features))
      <div class="features-grid" style="grid-template-columns: repeat({{ $gridColumns }}, 1fr);">
        @foreach($features as $index => $feature)
          <div class="feature-item" data-aos="flip-up" data-aos-delay="{{ 250 + ($index * 50) }}">
            <div class="feature-number">{{ $feature['number'] }}</div>
            <div class="feature-content">
              <div class="feature-icon">
                <i class="{{ $feature['icon'] }}"></i>
              </div>
              <h4>{{ $feature['title'] }}</h4>
              <p>{{ $feature['description'] }}</p>
              
              @if(!empty($feature['tags']))
                <div class="feature-tags">
                  @foreach($feature['tags'] as $tag)
                    <span class="tag">{{ $tag }}</span>
                  @endforeach
                </div>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @endif

  </div>
</section>