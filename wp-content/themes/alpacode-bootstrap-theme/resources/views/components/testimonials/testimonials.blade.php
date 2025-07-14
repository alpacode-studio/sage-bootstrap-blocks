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

<style>
  /*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
.testimonials {
  position: relative;
  overflow: hidden;
  /* Swiper Navigation */
  /* Swiper Pagination */
  /* Responsive Styles */
}

.testimonials .testimonial-slider {
  position: relative;
  padding-bottom: 50px;
}

.testimonials .testimonial-slider .swiper-wrapper {
  height: auto !important;
}

.testimonials .testimonial-item {
  background: linear-gradient(135deg, var(--surface-color) 0%, color-mix(in srgb, var(--surface-color), var(--accent-color) 2%) 100%);
  border-radius: 20px;
  padding: 0;
  height: 100%;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  transition: all 0.4s ease;
  overflow: hidden;
  position: relative;
}

.testimonials .testimonial-item::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--accent-color), color-mix(in srgb, var(--accent-color), var(--heading-color) 30%));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s ease;
}

.testimonials .testimonial-item:hover {
  border-color: var(--accent-color);
}

.testimonials .testimonial-item:hover::before {
  transform: scaleX(1);
}

.testimonials .testimonial-item:hover .testimonial-header img {
  transform: scale(1.05);
}

.testimonials .testimonial-item:hover .quote-icon {
  color: var(--accent-color);
  transform: scale(1.1);
}

.testimonials .testimonial-header {
  position: relative;
  text-align: center;
  padding: 30px 30px 20px;
  background: linear-gradient(135deg, color-mix(in srgb, var(--surface-color), var(--accent-color) 3%) 0%, var(--surface-color) 100%);
}

.testimonials .testimonial-header img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid color-mix(in srgb, var(--accent-color), transparent 70%);
  margin-bottom: 15px;
  transition: all 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.testimonials .testimonial-header .rating {
  display: flex;
  justify-content: center;
  gap: 3px;
}

.testimonials .testimonial-header .rating i {
  color: #ffc107;
  font-size: 0.9rem;
}

.testimonials .testimonial-body {
  padding: 0 30px 20px;
}

.testimonials .testimonial-body p {
  font-size: 1rem;
  line-height: 1.6;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
  margin: 0;
  font-style: italic;
  text-align: center;
  position: relative;
}

.testimonials .testimonial-body p::before,
.testimonials .testimonial-body p::after {
  content: '"';
  font-size: 1.5rem;
  color: var(--accent-color);
  opacity: 0.6;
  font-family: serif;
  position: absolute;
}

.testimonials .testimonial-body p::before {
  top: -5px;
  left: -10px;
}

.testimonials .testimonial-body p::after {
  bottom: -20px;
  right: -5px;
}

.testimonials .testimonial-footer {
  padding: 20px 30px 30px;
  text-align: center;
  position: relative;
}

.testimonials .testimonial-footer h5 {
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--heading-color);
  margin: 0 0 5px;
}

.testimonials .testimonial-footer span {
  font-size: 0.85rem;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  display: block;
  margin-bottom: 15px;
}

.testimonials .testimonial-footer .quote-icon {
  position: absolute;
  bottom: 15px;
  right: 25px;
  color: color-mix(in srgb, var(--accent-color), transparent 60%);
  font-size: 1.5rem;
  transition: all 0.3s ease;
}

.testimonials .swiper-navigation {
  position: relative;
  margin-top: 25px;
  display: flex;
  justify-content: flex-end;
}

.testimonials .swiper-button-prev,
.testimonials .swiper-button-next {
  position: static;
  width: 45px;
  height: 45px;
  margin: 0 10px;
  background: var(--accent-color);
  border-radius: 50%;
  color: var(--contrast-color);
  font-size: 16px;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.testimonials .swiper-button-prev:hover,
.testimonials .swiper-button-next:hover {
  background: color-mix(in srgb, var(--accent-color), var(--heading-color) 20%);
  transform: scale(1.05);
}

.testimonials .swiper-button-prev::after,
.testimonials .swiper-button-next::after {
  font-size: 16px;
  font-weight: 600;
}

.testimonials .swiper-pagination {
  position: static;
  margin-top: 30px;
  text-align: center;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background: color-mix(in srgb, var(--default-color), transparent 70%);
  opacity: 1;
  margin: 0 6px;
  transition: all 0.3s ease;
}

.testimonials .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background: var(--accent-color);
  transform: scale(1.2);
}

@media (max-width: 1199px) {
  .testimonials .testimonial-item .testimonial-header {
    padding: 25px 25px 15px;
  }

  .testimonials .testimonial-item .testimonial-header img {
    width: 70px;
    height: 70px;
  }

  .testimonials .testimonial-item .testimonial-body,
  .testimonials .testimonial-item .testimonial-footer {
    padding-left: 25px;
    padding-right: 25px;
  }
}

@media (max-width: 991px) {
  .testimonials .testimonial-item {
    margin-bottom: 30px;
  }
}

@media (max-width: 767px) {
  .testimonials .testimonial-item .testimonial-header {
    padding: 20px 20px 10px;
  }

  .testimonials .testimonial-item .testimonial-header img {
    width: 60px;
    height: 60px;
  }

  .testimonials .testimonial-item .testimonial-header .rating i {
    font-size: 0.8rem;
  }

  .testimonials .testimonial-item .testimonial-body {
    padding: 0 20px 15px;
  }

  .testimonials .testimonial-item .testimonial-body p {
    font-size: 0.95rem;
  }

  .testimonials .testimonial-item .testimonial-footer {
    padding: 15px 20px 20px;
  }

  .testimonials .testimonial-item .testimonial-footer h5 {
    font-size: 1rem;
  }

  .testimonials .testimonial-item .testimonial-footer span {
    font-size: 0.8rem;
  }

  .testimonials .testimonial-item .testimonial-footer .quote-icon {
    font-size: 1.3rem;
    bottom: 10px;
    right: 15px;
  }

  .testimonials .swiper-button-prev,
  .testimonials .swiper-button-next {
    width: 40px;
    height: 40px;
    font-size: 14px;
  }

  .testimonials .swiper-button-prev::after,
  .testimonials .swiper-button-next::after {
    font-size: 14px;
  }
}

@media (max-width: 575px) {
  .testimonials .testimonial-slider {
    padding-bottom: 30px;
  }

  .testimonials .testimonial-item .testimonial-header {
    padding: 15px 15px 10px;
  }

  .testimonials .testimonial-item .testimonial-header img {
    width: 55px;
    height: 55px;
  }

  .testimonials .testimonial-item .testimonial-body {
    padding: 0 15px 10px;
  }

  .testimonials .testimonial-item .testimonial-body p {
    font-size: 0.9rem;
  }

  .testimonials .testimonial-item .testimonial-footer {
    padding: 10px 15px 15px;
  }

  .testimonials .testimonial-item .testimonial-footer h5 {
    font-size: 0.95rem;
  }

  .testimonials .testimonial-item .testimonial-footer .quote-icon {
    font-size: 1.2rem;
  }

  .testimonials .swiper-navigation {
    margin-top: 10px;
  }
}
</style>