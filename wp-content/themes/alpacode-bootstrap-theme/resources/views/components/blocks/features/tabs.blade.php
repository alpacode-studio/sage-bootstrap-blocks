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

<style>
  /*--------------------------------------------------------------
# Features Tabs Section
--------------------------------------------------------------*/
.features-tabs .tabs-wrapper {
  background-color: var(--surface-color);
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 20px 60px color-mix(in srgb, var(--default-color), transparent 90%);
}

.features-tabs .nav-tabs {
  border: 0;
  gap: 20px;
  margin-bottom: 40px;
  display: flex;
  flex-wrap: wrap;
}

@media (max-width: 992px) {
  .features-tabs .nav-tabs {
    flex-direction: column;
    gap: 15px;
  }
}

.features-tabs .nav-item {
  flex: 1;
  min-width: 0;
}

@media (max-width: 992px) {
  .features-tabs .nav-item {
    flex: none;
  }
}

.features-tabs .nav-link {
  background: color-mix(in srgb, var(--surface-color), var(--default-color) 3%);
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
  border-radius: 15px;
  padding: 25px 20px;
  display: flex;
  align-items: center;
  gap: 15px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
  height: auto;
  min-height: 80px;
  cursor: pointer;
}

.features-tabs .nav-link::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), var(--heading-color) 20%));
  opacity: 0;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  z-index: 1;
}

@media (max-width: 768px) {
  .features-tabs .nav-link {
    padding: 20px 15px;
    min-height: 70px;
  }
}

.features-tabs .nav-link .tab-icon {
  position: relative;
  z-index: 2;
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), var(--heading-color) 20%));
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.features-tabs .nav-link .tab-icon i {
  font-size: 24px;
  color: var(--contrast-color);
}

@media (max-width: 768px) {
  .features-tabs .nav-link .tab-icon {
    width: 40px;
    height: 40px;
  }

  .features-tabs .nav-link .tab-icon i {
    font-size: 20px;
  }
}

.features-tabs .nav-link .tab-content {
  position: relative;
  z-index: 2;
  flex: 1;
}

.features-tabs .nav-link .tab-content h5 {
  margin: 0 0 4px 0;
  font-size: 16px;
  font-weight: 600;
  color: var(--heading-color);
  transition: color 0.4s ease;
}

@media (max-width: 768px) {
  .features-tabs .nav-link .tab-content h5 {
    font-size: 14px;
  }
}

.features-tabs .nav-link .tab-content span {
  font-size: 13px;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  transition: color 0.4s ease;
}

@media (max-width: 768px) {
  .features-tabs .nav-link .tab-content span {
    font-size: 12px;
  }
}

.features-tabs .nav-link:hover {
  transform: translateY(-3px);
  border-color: transparent;
  box-shadow: 0 15px 40px color-mix(in srgb, var(--accent-color), transparent 70%);
}

.features-tabs .nav-link:hover::before {
  opacity: 1;
}

.features-tabs .nav-link:hover .tab-icon {
  background: var(--contrast-color);
  box-shadow: 0 8px 25px color-mix(in srgb, var(--default-color), transparent 80%);
}

.features-tabs .nav-link:hover .tab-icon i {
  color: var(--accent-color);
}

.features-tabs .nav-link:hover .tab-content h5,
.features-tabs .nav-link:hover .tab-content span {
  color: var(--contrast-color);
}

.features-tabs .nav-link.active {
  border-color: var(--accent-color);
  box-shadow: 0 15px 40px color-mix(in srgb, var(--accent-color), transparent 70%);
}

.features-tabs .nav-link.active::before {
  opacity: 1;
}

.features-tabs .nav-link.active .tab-icon {
  background: var(--contrast-color);
}

.features-tabs .nav-link.active .tab-icon i {
  color: var(--accent-color);
}

.features-tabs .nav-link.active .tab-content h5,
.features-tabs .nav-link.active .tab-content span {
  color: var(--contrast-color);
}

.features-tabs .tab-content .tab-pane {
  padding: 40px 0;
}

@media (max-width: 768px) {
  .features-tabs .tab-content .tab-pane {
    padding: 20px 0;
  }
}

.features-tabs .content-wrapper {
  padding-right: 40px;
}

@media (max-width: 992px) {
  .features-tabs .content-wrapper {
    padding-right: 0;
    margin-bottom: 40px;
  }
}

.features-tabs .content-wrapper .icon-badge {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), var(--heading-color) 20%));
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 25px;
  box-shadow: 0 10px 30px color-mix(in srgb, var(--accent-color), transparent 70%);
}

.features-tabs .content-wrapper .icon-badge i {
  font-size: 30px;
  color: var(--contrast-color);
}

.features-tabs .content-wrapper h3 {
  font-size: 32px;
  font-weight: 700;
  color: var(--heading-color);
  margin-bottom: 20px;
  line-height: 1.2;
}

@media (max-width: 768px) {
  .features-tabs .content-wrapper h3 {
    font-size: 24px;
  }
}

.features-tabs .content-wrapper p {
  font-size: 16px;
  line-height: 1.7;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  margin-bottom: 30px;
}

.features-tabs .content-wrapper .feature-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 15px;
  margin-bottom: 35px;
}

@media (max-width: 576px) {
  .features-tabs .content-wrapper .feature-grid {
    grid-template-columns: 1fr;
    gap: 12px;
  }
}

.features-tabs .content-wrapper .feature-grid .feature-item {
  display: flex;
  align-items: center;
  gap: 12px;
}

.features-tabs .content-wrapper .feature-grid .feature-item i {
  font-size: 16px;
  color: var(--accent-color);
  flex-shrink: 0;
}

.features-tabs .content-wrapper .feature-grid .feature-item span {
  font-size: 14px;
  color: var(--default-color);
  line-height: 1.4;
}

.features-tabs .content-wrapper .stats-row {
  display: flex;
  gap: 30px;
  margin-bottom: 35px;
}

@media (max-width: 576px) {
  .features-tabs .content-wrapper .stats-row {
    gap: 20px;
  }
}

.features-tabs .content-wrapper .stats-row .stat-item {
  text-align: center;
}

.features-tabs .content-wrapper .stats-row .stat-item .stat-number {
  font-size: 24px;
  font-weight: 700;
  color: var(--accent-color);
  margin-bottom: 5px;
}

@media (max-width: 576px) {
  .features-tabs .content-wrapper .stats-row .stat-item .stat-number {
    font-size: 20px;
  }
}

.features-tabs .content-wrapper .stats-row .stat-item .stat-label {
  font-size: 12px;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  text-transform: uppercase;
  letter-spacing: 1px;
}

.features-tabs .content-wrapper .btn-primary {
  background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), var(--heading-color) 20%));
  color: var(--contrast-color);
  padding: 15px 35px;
  border-radius: 50px;
  font-weight: 600;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  text-decoration: none;
  border: none;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 8px 25px color-mix(in srgb, var(--accent-color), transparent 70%);
}

.features-tabs .content-wrapper .btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 15px 35px color-mix(in srgb, var(--accent-color), transparent 60%);
  color: var(--contrast-color);
}

.features-tabs .content-wrapper .btn-primary:hover i {
  transform: translateX(5px);
}

.features-tabs .content-wrapper .btn-primary i {
  transition: transform 0.3s ease;
}

.features-tabs .visual-content {
  position: relative;
}

.features-tabs .visual-content .main-image {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px color-mix(in srgb, var(--default-color), transparent 85%);
}

.features-tabs .visual-content .main-image img {
  width: 100%;
  height: auto;
  transition: transform 0.6s ease;
}

.features-tabs .visual-content .main-image:hover img {
  transform: scale(1.05);
}

.features-tabs .visual-content .floating-card {
  position: absolute;
  bottom: 30px;
  left: 30px;
  background: var(--surface-color);
  padding: 20px 25px;
  border-radius: 15px;
  display: flex;
  align-items: center;
  gap: 15px;
  box-shadow: 0 15px 40px color-mix(in srgb, var(--default-color), transparent 80%);
  transform: translateY(20px);
  opacity: 0;
  animation: fadeInUp 0.8s ease 0.6s forwards;
}

@media (max-width: 576px) {
  .features-tabs .visual-content .floating-card {
    bottom: 20px;
    left: 20px;
    padding: 15px 20px;
    gap: 10px;
  }
}

.features-tabs .visual-content .floating-card i {
  font-size: 28px;
  color: var(--accent-color);
}

@media (max-width: 576px) {
  .features-tabs .visual-content .floating-card i {
    font-size: 24px;
  }
}

.features-tabs .visual-content .floating-card .card-content span {
  display: block;
  font-size: 12px;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 2px;
}

.features-tabs .visual-content .floating-card .card-content strong {
  display: block;
  font-size: 16px;
  font-weight: 600;
  color: var(--heading-color);
}

@media (max-width: 576px) {
  .features-tabs .visual-content .floating-card .card-content strong {
    font-size: 14px;
  }
}

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>