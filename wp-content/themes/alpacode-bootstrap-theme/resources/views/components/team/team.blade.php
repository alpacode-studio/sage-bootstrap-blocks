@props([
  'title' => 'Our Professional Team',
  'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo.',
  'showControls' => true,
  'prevIcon' => 'bi bi-chevron-left',
  'nextIcon' => 'bi bi-chevron-right',
  'swiperConfig' => [
    'loop' => true,
    'speed' => 700,
    'autoplay' => [
      'delay' => 5000
    ],
    'slidesPerView' => 1,
    'spaceBetween' => 30,
    'breakpoints' => [
      '576' => [
        'slidesPerView' => 2,
        'spaceBetween' => 20
      ],
      '992' => [
        'slidesPerView' => 3,
        'spaceBetween' => 30
      ],
      '1200' => [
        'slidesPerView' => 4,
        'spaceBetween' => 30
      ]
    ]
  ],
  'teamMembers' => [
    [
      'name' => 'Marcus Wilson',
      'position' => 'Chief Technology Officer',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.',
      'image' => 'resources/images/person/person-m-3.webp',
      'imageAlt' => 'Marcus Wilson',
      'social' => [
        ['icon' => 'bi bi-twitter-x', 'url' => '#', 'label' => 'Twitter'],
        ['icon' => 'bi bi-facebook', 'url' => '#', 'label' => 'Facebook'],
        ['icon' => 'bi bi-instagram', 'url' => '#', 'label' => 'Instagram'],
        ['icon' => 'bi bi-linkedin', 'url' => '#', 'label' => 'LinkedIn']
      ]
    ],
    [
      'name' => 'Sophia Reynolds',
      'position' => 'Product Designer',
      'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.',
      'image' => 'resources/images/person/person-f-5.webp',
      'imageAlt' => 'Sophia Reynolds',
      'social' => [
        ['icon' => 'bi bi-twitter-x', 'url' => '#', 'label' => 'Twitter'],
        ['icon' => 'bi bi-facebook', 'url' => '#', 'label' => 'Facebook'],
        ['icon' => 'bi bi-instagram', 'url' => '#', 'label' => 'Instagram'],
        ['icon' => 'bi bi-linkedin', 'url' => '#', 'label' => 'LinkedIn']
      ]
    ],
    [
      'name' => 'Daniel Chen',
      'position' => 'Marketing Specialist',
      'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.',
      'image' => 'resources/images/person/person-m-8.webp',
      'imageAlt' => 'Daniel Chen',
      'social' => [
        ['icon' => 'bi bi-twitter-x', 'url' => '#', 'label' => 'Twitter'],
        ['icon' => 'bi bi-facebook', 'url' => '#', 'label' => 'Facebook'],
        ['icon' => 'bi bi-instagram', 'url' => '#', 'label' => 'Instagram'],
        ['icon' => 'bi bi-linkedin', 'url' => '#', 'label' => 'LinkedIn']
      ]
    ],
    [
      'name' => 'Olivia Thompson',
      'position' => 'Lead Developer',
      'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
      'image' => 'resources/images/person/person-f-9.webp',
      'imageAlt' => 'Olivia Thompson',
      'social' => [
        ['icon' => 'bi bi-twitter-x', 'url' => '#', 'label' => 'Twitter'],
        ['icon' => 'bi bi-facebook', 'url' => '#', 'label' => 'Facebook'],
        ['icon' => 'bi bi-instagram', 'url' => '#', 'label' => 'Instagram'],
        ['icon' => 'bi bi-linkedin', 'url' => '#', 'label' => 'LinkedIn']
      ]
    ],
    [
      'name' => 'Jason Parker',
      'position' => 'UI/UX Designer',
      'description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.',
      'image' => 'resources/images/person/person-m-12.webp',
      'imageAlt' => 'Jason Parker',
      'social' => [
        ['icon' => 'bi bi-twitter-x', 'url' => '#', 'label' => 'Twitter'],
        ['icon' => 'bi bi-facebook', 'url' => '#', 'label' => 'Facebook'],
        ['icon' => 'bi bi-instagram', 'url' => '#', 'label' => 'Instagram'],
        ['icon' => 'bi bi-linkedin', 'url' => '#', 'label' => 'LinkedIn']
      ]
    ],
    [
      'name' => 'Emily Rodriguez',
      'position' => 'Project Manager',
      'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.',
      'image' => 'resources/images/person/person-f-7.webp',
      'imageAlt' => 'Emily Rodriguez',
      'social' => [
        ['icon' => 'bi bi-twitter-x', 'url' => '#', 'label' => 'Twitter'],
        ['icon' => 'bi bi-facebook', 'url' => '#', 'label' => 'Facebook'],
        ['icon' => 'bi bi-instagram', 'url' => '#', 'label' => 'Instagram'],
        ['icon' => 'bi bi-linkedin', 'url' => '#', 'label' => 'LinkedIn']
      ]
    ]
  ]
])

<section id="team" class="team section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    {{-- Team Header --}}
    <div class="team-header" data-aos="fade-up" data-aos-delay="200">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2>{{ $title }}</h2>
          <p>{{ $description }}</p>
        </div>
        
        @if($showControls)
          <div class="col-lg-6 d-flex justify-content-lg-end">
            <div class="team-controls">
              <button class="team-control-btn team-prev">
                <i class="{{ $prevIcon }}"></i>
              </button>
              <button class="team-control-btn team-next">
                <i class="{{ $nextIcon }}"></i>
              </button>
            </div>
          </div>
        @endif
      </div>
    </div>

    {{-- Team Slider --}}
    <div class="team-slider swiper init-swiper" data-aos="fade-up" data-aos-delay="300">
      <script type="application/json" class="swiper-config">
        @php
          $config = $swiperConfig;
          if ($showControls) {
            $config['navigation'] = [
              'nextEl' => '.team-next',
              'prevEl' => '.team-prev'
            ];
          }
        @endphp
        {!! json_encode($config) !!}
      </script>
      
      <div class="swiper-wrapper">
        @foreach($teamMembers as $member)
          <div class="swiper-slide">
            <div class="team-member">
              <div class="member-image">
                <img src="{{ Vite::asset($member['image']) }}" 
                     class="img-fluid" 
                     alt="{{ $member['imageAlt'] ?? $member['name'] }}" 
                     loading="lazy">
                
                @if(!empty($member['social']))
                  <div class="member-social">
                    @foreach($member['social'] as $social)
                      <a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}">
                        <i class="{{ $social['icon'] }}"></i>
                      </a>
                    @endforeach
                  </div>
                @endif
              </div>
              
              <div class="member-content">
                <h3>{{ $member['name'] }}</h3>
                <span>{{ $member['position'] }}</span>
                <p>{{ $member['description'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>
</section>