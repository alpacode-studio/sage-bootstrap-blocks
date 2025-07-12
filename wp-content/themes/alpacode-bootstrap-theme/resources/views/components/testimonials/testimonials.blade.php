@props([
  'sectionTitle' => 'Testimonials',
  'sectionDescription' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit',
  'showNavigation' => true,
  'quoteIcon' => 'bi bi-chat-quote-fill',
  'starIcon' => 'bi bi-star-fill',
  'swiperConfig' => [
    'loop' => true,
    'speed' => 600,
    'autoplay' => [
      'delay' => 4000
    ],
    'slidesPerView' => 1,
    'spaceBetween' => 30,
    'breakpoints' => [
      '768' => [
        'slidesPerView' => 2
      ],
      '1200' => [
        'slidesPerView' => 3
      ]
    ]
  ],
  'testimonials' => [
    [
      'name' => 'Jessica Martinez',
      'position' => 'UX Designer',
      'image' => 'resources/images/person/person-f-12.webp',
      'imageAlt' => 'Jessica Martinez',
      'rating' => 5,
      'testimonial' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit sed eiusmod tempor.'
    ],
    [
      'name' => 'David Rodriguez',
      'position' => 'Software Engineer',
      'image' => 'resources/images/person/person-m-8.webp',
      'imageAlt' => 'David Rodriguez',
      'rating' => 5,
      'testimonial' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa.'
    ],
    [
      'name' => 'Amanda Wilson',
      'position' => 'Creative Director',
      'image' => 'resources/images/person/person-f-6.webp',
      'imageAlt' => 'Amanda Wilson',
      'rating' => 5,
      'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud.'
    ],
    [
      'name' => 'Ryan Thompson',
      'position' => 'Business Analyst',
      'image' => 'resources/images/person/person-m-12.webp',
      'imageAlt' => 'Ryan Thompson',
      'rating' => 5,
      'testimonial' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis.'
    ],
    [
      'name' => 'Rachel Chen',
      'position' => 'Project Manager',
      'image' => 'resources/images/person/person-f-10.webp',
      'imageAlt' => 'Rachel Chen',
      'rating' => 5,
      'testimonial' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.'
    ]
  ]
])

<section id="testimonials" class="testimonials section">
  {{-- Section Title --}}
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ $sectionTitle }}</h2>
    <p>{{ $sectionDescription }}</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="testimonial-slider swiper init-swiper">
      <script type="application/json" class="swiper-config">
        @php
          $config = $swiperConfig;
          if ($showNavigation) {
            $config['navigation'] = [
              'nextEl' => '.swiper-button-next',
              'prevEl' => '.swiper-button-prev'
            ];
          }
        @endphp
        {!! json_encode($config) !!}
      </script>

      <div class="swiper-wrapper">
        @foreach($testimonials as $index => $testimonial)
          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="{{ 200 + ($index * 100) }}">
              
              {{-- Testimonial Header --}}
              <div class="testimonial-header">
                <img src="{{ Vite::asset($testimonial['image']) }}" 
                     alt="{{ $testimonial['imageAlt'] ?? $testimonial['name'] }}" 
                     class="img-fluid" 
                     loading="lazy">
                
                <div class="rating">
                  @for($i = 1; $i <= 5; $i++)
                    <i class="{{ $i <= $testimonial['rating'] ? $starIcon : 'bi bi-star' }}"></i>
                  @endfor
                </div>
              </div>

              {{-- Testimonial Body --}}
              <div class="testimonial-body">
                <p>{{ $testimonial['testimonial'] }}</p>
              </div>

              {{-- Testimonial Footer --}}
              <div class="testimonial-footer">
                <h5>{{ $testimonial['name'] }}</h5>
                <span>{{ $testimonial['position'] }}</span>
                <div class="quote-icon">
                  <i class="{{ $quoteIcon }}"></i>
                </div>
              </div>

            </div>
          </div>
        @endforeach
      </div>

      {{-- Navigation --}}
      @if($showNavigation)
        <div class="swiper-navigation">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      @endif

    </div>

  </div>
</section>