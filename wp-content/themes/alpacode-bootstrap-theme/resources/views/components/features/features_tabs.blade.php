@props([
  'tabs' => [
    [
      'id' => 'features-tabs-tab-1',
      'icon' => 'bi bi-rocket-takeoff',
      'title' => 'Innovation',
      'subtitle' => 'Cutting-edge solutions',
      'active' => true,
      'content' => [
        'icon' => 'bi bi-rocket-takeoff',
        'title' => 'Innovation Excellence',
        'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis.',
        'features' => [
          'Excepteur sint occaecat cupidatat non proident',
          'Sunt in culpa qui officia deserunt mollit anim',
          'At vero eos et accusamus et iusto odio',
          'Et harum quidem rerum facilis est et expedita'
        ],
        'stats' => [
          ['number' => '99%', 'label' => 'Uptime'],
          ['number' => '50K+', 'label' => 'Users'],
          ['number' => '24/7', 'label' => 'Support']
        ],
        'image' => 'resources/images/features/features-4.webp',
        'floatingCard' => [
          'icon' => 'bi bi-graph-up-arrow',
          'label' => 'Speed',
          'value' => 'Ultra Fast'
        ],
        'buttonText' => 'Learn More',
        'buttonUrl' => '#',
        'buttonIcon' => 'bi bi-arrow-right'
      ]
    ],
    [
      'id' => 'features-tabs-tab-2',
      'icon' => 'bi bi-shield-shaded',
      'title' => 'Security',
      'subtitle' => 'Advanced protection',
      'active' => false,
      'content' => [
        'icon' => 'bi bi-shield-shaded',
        'title' => 'Advanced Security',
        'description' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore.',
        'features' => [
          'Temporibus autem quibusdam et aut officiis',
          'Nam libero tempore cum soluta nobis',
          'Itaque earum rerum hic tenetur a sapiente',
          'Quis autem vel eum iure reprehenderit qui'
        ],
        'stats' => [
          ['number' => '256-bit', 'label' => 'Encryption'],
          ['number' => 'ISO', 'label' => 'Certified'],
          ['number' => 'GDPR', 'label' => 'Compliant']
        ],
        'image' => 'resources/images/features/features-2.webp',
        'floatingCard' => [
          'icon' => 'bi bi-shield-check',
          'label' => 'Security',
          'value' => 'Military Grade'
        ],
        'buttonText' => 'Learn More',
        'buttonUrl' => '#',
        'buttonIcon' => 'bi bi-arrow-right'
      ]
    ],
    [
      'id' => 'features-tabs-tab-3',
      'icon' => 'bi bi-lightning-charge',
      'title' => 'Performance',
      'subtitle' => 'Lightning fast speed',
      'active' => false,
      'content' => [
        'icon' => 'bi bi-lightning-charge',
        'title' => 'Lightning Performance',
        'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.',
        'features' => [
          'Optimized for maximum speed',
          'Advanced caching mechanisms',
          'Real-time data processing',
          'Minimal resource consumption'
        ],
        'stats' => [
          ['number' => '0.2s', 'label' => 'Load Time'],
          ['number' => '99.9%', 'label' => 'Uptime'],
          ['number' => '85%', 'label' => 'Faster']
        ],
        'image' => 'resources/images/features/features-3.webp',
        'floatingCard' => [
          'icon' => 'bi bi-speedometer2',
          'label' => 'Performance',
          'value' => '+85% Improvement'
        ],
        'buttonText' => 'Learn More',
        'buttonUrl' => '#',
        'buttonIcon' => 'bi bi-arrow-right'
      ]
    ],
    [
      'id' => 'features-tabs-tab-4',
      'icon' => 'bi bi-heart-pulse',
      'title' => 'Support',
      'subtitle' => '24/7 assistance',
      'active' => false,
      'content' => [
        'icon' => 'bi bi-heart-pulse',
        'title' => 'Premium Support',
        'description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
        'features' => [
          'Neque porro quisquam est qui dolorem ipsum',
          'Quia dolor sit amet consectetur adipisci velit',
          'Sed quia non numquam eius modi tempora',
          'Incidunt ut labore et dolore magnam aliquam'
        ],
        'stats' => [
          ['number' => '24/7', 'label' => 'Available'],
          ['number' => '2min', 'label' => 'Response'],
          ['number' => 'Expert', 'label' => 'Team']
        ],
        'image' => 'resources/images/features/features-1.webp',
        'floatingCard' => [
          'icon' => 'bi bi-headset',
          'label' => 'Support',
          'value' => 'Always Here'
        ],
        'buttonText' => 'Learn More',
        'buttonUrl' => '#',
        'buttonIcon' => 'bi bi-arrow-right'
      ]
    ]
  ],
  'featureIcon' => 'bi bi-check-circle-fill'
])

<section id="features-tabs" class="features-tabs section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="tabs-wrapper">
      
      {{-- Tab Navigation --}}
      <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
        @foreach($tabs as $tab)
          <li class="nav-item">
            <a class="nav-link {{ $tab['active'] ? 'active show' : '' }}" 
               data-bs-toggle="tab" 
               data-bs-target="#{{ $tab['id'] }}">
              <div class="tab-icon">
                <i class="{{ $tab['icon'] }}"></i>
              </div>
              <div class="tab-content">
                <h5>{{ $tab['title'] }}</h5>
                <span>{{ $tab['subtitle'] }}</span>
              </div>
            </a>
          </li>
        @endforeach
      </ul>

      {{-- Tab Content --}}
      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
        @foreach($tabs as $tab)
          <div class="tab-pane fade {{ $tab['active'] ? 'active show' : '' }}" id="{{ $tab['id'] }}">
            <div class="row align-items-center">
              
              {{-- Content Column --}}
              <div class="col-lg-5">
                <div class="content-wrapper">
                  <div class="icon-badge">
                    <i class="{{ $tab['content']['icon'] }}"></i>
                  </div>
                  <h3>{{ $tab['content']['title'] }}</h3>
                  <p>{{ $tab['content']['description'] }}</p>

                  {{-- Features List --}}
                  @if(!empty($tab['content']['features']))
                    <div class="feature-grid">
                      @foreach($tab['content']['features'] as $feature)
                        <div class="feature-item">
                          <i class="{{ $featureIcon }}"></i>
                          <span>{{ $feature }}</span>
                        </div>
                      @endforeach
                    </div>
                  @endif

                  {{-- Stats Row --}}
                  @if(!empty($tab['content']['stats']))
                    <div class="stats-row">
                      @foreach($tab['content']['stats'] as $stat)
                        <div class="stat-item">
                          <div class="stat-number">{{ $stat['number'] }}</div>
                          <div class="stat-label">{{ $stat['label'] }}</div>
                        </div>
                      @endforeach
                    </div>
                  @endif

                  {{-- Action Button --}}
                  @if(isset($tab['content']['buttonText']))
                    <a href="{{ $tab['content']['buttonUrl'] }}" class="btn-primary">
                      {{ $tab['content']['buttonText'] }} 
                      <i class="{{ $tab['content']['buttonIcon'] }}"></i>
                    </a>
                  @endif
                </div>
              </div>

              {{-- Visual Column --}}
              <div class="col-lg-7">
                <div class="visual-content">
                  <div class="main-image">
                    <img src="{{ Vite::asset($tab['content']['image']) }}" alt="{{ $tab['content']['title'] }}" class="img-fluid">
                    
                    {{-- Floating Card --}}
                    @if(isset($tab['content']['floatingCard']))
                      <div class="floating-card">
                        <i class="{{ $tab['content']['floatingCard']['icon'] }}"></i>
                        <div class="card-content">
                          <span>{{ $tab['content']['floatingCard']['label'] }}</span>
                          <strong>{{ $tab['content']['floatingCard']['value'] }}</strong>
                        </div>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        @endforeach
      </div>
      
    </div>
  </div>
</section>