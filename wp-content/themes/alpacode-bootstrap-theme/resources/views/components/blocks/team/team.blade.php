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

<style>
  /*--------------------------------------------------------------
# Team Section
--------------------------------------------------------------*/
.team .team-header {
  margin-bottom: 50px;
}

.team .team-header h2 {
  position: relative;
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
}

.team .team-header h2:before {
  content: "";
  position: absolute;
  width: 70px;
  height: 4px;
  background: var(--accent-color);
  bottom: 0;
  left: 0;
}

.team .team-header p {
  font-size: 17px;
  color: color-mix(in srgb, var(--default-color), transparent 25%);
  max-width: 600px;
}

@media (max-width: 991px) {
  .team .team-header {
    margin-bottom: 30px;
    text-align: center;
  }

  .team .team-header h2:before {
    left: 50%;
    transform: translateX(-50%);
  }

  .team .team-header p {
    margin: 0 auto;
  }

  .team .team-header .team-controls {
    margin-top: 30px;
    justify-content: center;
  }
}

.team .team-controls {
  display: flex;
  gap: 12px;
}

.team .team-controls .team-control-btn {
  width: 46px;
  height: 46px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: transparent;
  border: 2px solid var(--accent-color);
  border-radius: 50%;
  color: var(--accent-color);
  font-size: 18px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.team .team-controls .team-control-btn:hover {
  background: var(--accent-color);
  color: var(--contrast-color);
}

.team .team-slider {
  padding: 10px 5px 40px;
}

.team .team-slider .swiper-wrapper {
  height: auto !important;
}

.team .team-member {
  position: relative;
  border-radius: 10px;
  overflow: hidden;
  background: var(--surface-color);
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  height: 100%;
}

.team .team-member:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.team .team-member:hover .member-image .member-social {
  opacity: 1;
  bottom: 20px;
}

.team .team-member:hover .member-image:before {
  opacity: 0.8;
}

.team .team-member .member-image {
  position: relative;
  overflow: hidden;
}

.team .team-member .member-image:before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 60%;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
  opacity: 0;
  transition: all 0.4s ease;
  z-index: 1;
}

.team .team-member .member-image img {
  width: 100%;
  aspect-ratio: 1/1;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.team .team-member .member-image .member-social {
  position: absolute;
  z-index: 2;
  display: flex;
  gap: 8px;
  justify-content: center;
  width: 100%;
  bottom: -30px;
  opacity: 0;
  transition: all 0.4s ease;
}

.team .team-member .member-image .member-social a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  background: var(--contrast-color);
  border-radius: 50%;
  color: var(--accent-color);
  font-size: 15px;
  transition: all 0.3s ease;
}

.team .team-member .member-image .member-social a:hover {
  background: var(--accent-color);
  color: var(--contrast-color);
  transform: translateY(-3px);
}

.team .team-member .member-content {
  padding: 25px;
}

.team .team-member .member-content h3 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 5px;
}

.team .team-member .member-content span {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: var(--accent-color);
  margin-bottom: 15px;
}

.team .team-member .member-content p {
  font-size: 14px;
  line-height: 1.6;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  margin-bottom: 0;
}
</style>