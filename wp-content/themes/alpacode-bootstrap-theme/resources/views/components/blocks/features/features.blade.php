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

<style>
  /*--------------------------------------------------------------
# Features Section
--------------------------------------------------------------*/
.features .intro-content h2 {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 25px;
  color: var(--heading-color);
  line-height: 1.3;
}

.features .intro-content p {
  font-size: 18px;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  margin-bottom: 35px;
  line-height: 1.6;
}

.features .intro-content .feature-stats {
  display: flex;
  gap: 30px;
}

.features .intro-content .feature-stats .stat-item {
  text-align: center;
}

.features .intro-content .feature-stats .stat-item .stat-number {
  display: block;
  font-size: 28px;
  font-weight: 700;
  color: var(--accent-color);
  line-height: 1;
}

.features .intro-content .feature-stats .stat-item .stat-label {
  font-size: 14px;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  font-weight: 500;
  margin-top: 5px;
  display: block;
}

.features .intro-image {
  position: relative;
}

.features .intro-image img {
  border-radius: 20px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
}

.features .intro-image::before {
  content: "";
  position: absolute;
  top: -20px;
  left: -20px;
  width: 100px;
  height: 100px;
  background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), transparent 40%));
  border-radius: 50%;
  z-index: -1;
  opacity: 0.7;
}

.features .intro-image::after {
  content: "";
  position: absolute;
  bottom: -30px;
  right: -30px;
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, var(--heading-color), color-mix(in srgb, var(--heading-color), transparent 40%));
  border-radius: 20px;
  z-index: -1;
  opacity: 0.5;
}

.features .features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 30px;
  margin-top: 60px;
}

.features .feature-item {
  position: relative;
  background: var(--surface-color);
  padding: 35px;
  border-radius: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  overflow: hidden;
}

.features .feature-item::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 3px;
  background: linear-gradient(90deg, var(--accent-color), color-mix(in srgb, var(--accent-color), transparent 50%));
  transition: left 0.5s ease;
}

.features .feature-item .feature-number {
  position: absolute;
  top: 20px;
  right: 25px;
  font-size: 48px;
  font-weight: 900;
  color: color-mix(in srgb, var(--accent-color), transparent 90%);
  line-height: 1;
  z-index: 1;
}

.features .feature-item .feature-content {
  position: relative;
  z-index: 2;
}

.features .feature-item .feature-content .feature-icon {
  margin-bottom: 25px;
}

.features .feature-item .feature-content .feature-icon i {
  font-size: 32px;
  color: var(--contrast-color);
  background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), transparent 30%));
  width: 70px;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 16px;
  transition: all 0.3s ease;
  box-shadow: 0 8px 25px color-mix(in srgb, var(--accent-color), transparent 70%);
}

.features .feature-item .feature-content h4 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 18px;
  color: var(--heading-color);
  line-height: 1.3;
}

.features .feature-item .feature-content p {
  font-size: 15px;
  color: color-mix(in srgb, var(--default-color), transparent 25%);
  margin-bottom: 25px;
  line-height: 1.6;
}

.features .feature-item .feature-content .feature-tags {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
}

.features .feature-item .feature-content .feature-tags .tag {
  font-size: 12px;
  font-weight: 600;
  padding: 6px 12px;
  background: color-mix(in srgb, var(--accent-color), transparent 90%);
  color: var(--accent-color);
  border-radius: 20px;
  transition: all 0.3s ease;
}

.features .feature-item:hover {
  transform: translateY(-15px);
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.features .feature-item:hover::before {
  left: 0;
}

.features .feature-item:hover .feature-number {
  color: color-mix(in srgb, var(--accent-color), transparent 80%);
  transform: scale(1.1);
}

.features .feature-item:hover .feature-icon i {
  transform: scale(1.1) rotate(5deg);
  box-shadow: 0 12px 35px color-mix(in srgb, var(--accent-color), transparent 60%);
}

.features .feature-item:hover .feature-tags .tag {
  background: var(--accent-color);
  color: var(--contrast-color);
}

@media (max-width: 991px) {
  .features .intro-content {
    margin-bottom: 40px;
  }

  .features .intro-content h2 {
    font-size: 32px;
  }

  .features .intro-content .feature-stats {
    justify-content: center;
    gap: 25px;
  }

  .features .features-grid {
    grid-template-columns: 1fr;
    margin-top: 40px;
    gap: 25px;
  }
}

@media (max-width: 767px) {
  .features .intro-content .feature-stats {
    flex-direction: column;
    align-items: center;
    gap: 20px;
  }

  .features .intro-content .feature-stats .stat-item {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .features .intro-content .feature-stats .stat-item .stat-number {
    font-size: 24px;
  }

  .features .intro-content .feature-stats .stat-item .stat-label {
    margin-top: 0;
  }

  .features .feature-item {
    padding: 25px;
  }

  .features .feature-item .feature-number {
    font-size: 36px;
    top: 15px;
    right: 20px;
  }

  .features .feature-item .feature-content h4 {
    font-size: 20px;
  }

  .features .features-grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 575px) {
  .features .intro-content h2 {
    font-size: 28px;
  }

  .features .intro-content p {
    font-size: 16px;
  }
}
</style>