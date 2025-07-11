@props([
  'title' => 'Transform Your Workflow With',
  'typedItems' => ['Advanced Analytics', 'Seamless Integration', 'Robust Security'],
  'description' => 'Our innovative platform empowers businesses to enhance their productivity and achieve unparalleled operational efficiency across diverse industries.',
  'primaryCta' => ['label' => 'Discover More Today', 'url' => '#'],
  'secondaryCta' => ['label' => 'Watch a Quick Demo', 'url' => 'https://www.youtube.com/watch?v=Y7f98aduVJ8'],
  'mainImage' => 'resources/images/about/about-18.webp',
  'cards' => [
    [
      'icon' => 'bi bi-graph-up-arrow',
      'value' => 89,
      'suffix' => '%',
      'label' => 'Success Benchmark',
      'aos' => 'fade-right',
      'delay' => 600,
    ],
    [
      'icon' => 'bi bi-people',
      'value' => 500,
      'suffix' => '+',
      'label' => 'Satisfied Clients',
      'aos' => 'fade-left',
      'delay' => 700,
    ]
  ],
])

<section id="hero" class="hero section">
  <div class="container">
    <div class="hero-wrapper">

      <div class="hero-main-content text-center">
        <h1 class="hero-title" data-aos="zoom-in" data-aos-delay="200">
          {{ $title }}<br>
          <span
            class="typed"
            data-typed-items="{{ implode(',', $typedItems) }}"
          ></span>
        </h1>

        <p class="hero-description" data-aos="fade-up" data-aos-delay="300">
          {{ $description }}
        </p>

        <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
          <a href="{{ $primaryCta['url'] }}" class="action-btn primary">
            <span>{{ $primaryCta['label'] }}</span>
            <i class="bi bi-arrow-right"></i>
          </a>
          <a href="{{ $secondaryCta['url'] }}" class="action-btn secondary glightbox">
            <i class="bi bi-play-circle"></i>
            <span>{{ $secondaryCta['label'] }}</span>
          </a>
        </div>

        <div class="hero-image-showcase" data-aos="fade-up" data-aos-delay="500">
          <div class="image-wrapper">
            <img src="{{ Vite::asset($mainImage) }}" class="img-fluid" alt="Strategic Overview">
            @foreach ($cards as $card)
              <div class="floating-card {{ $card['class'] ?? '' }}" data-aos="{{ $card['aos'] }}" data-aos-delay="{{ $card['delay'] }}">
                <div class="card-content">
                  <div class="card-icon">
                    <i class="{{ $card['icon'] }}"></i>
                  </div>
                  <div class="card-info">
                    <h4>
                      <span data-purecounter-start="0" data-purecounter-end="{{ $card['value'] }}" class="purecounter"></span>{{ $card['suffix'] ?? '' }}
                    </h4>
                    <p>{{ $card['label'] }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
