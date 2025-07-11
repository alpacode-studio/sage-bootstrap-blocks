@props([
  'title' => 'Secure, Efficient, and User-Friendly Financial Services',
  'subtitle' => 'Innovative Fintech Solutions',
  'description' => 'Experience the future of finance with our secure, efficient, and user-friendly financial services.',
  'ctaPrimary' => ['label' => 'Get Started Now', 'url' => '#'],
  'ctaSecondary' => ['label' => 'Learn More', 'url' => '#'],
  'logos' => [],
  'imageMain' => 'resources/images/hero-img-1-min.jpg',
  'imageCard' => 'resources/images/card-expenses.png',
])

<section class="hero__v6 section" id="home">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="row">
          <div class="col-lg-11">
            <span class="hero-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="0">{{ $subtitle }}</span>
            <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">{{ $title }}</h1>
            <p class="hero-description mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="200">{{ $description }}</p>

            <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300">
              <a class="btn" href="{{ $ctaPrimary['url'] }}">{{ $ctaPrimary['label'] }}</a>
              <a class="btn btn-white-outline" href="{{ $ctaSecondary['url'] }}">
                {{ $ctaSecondary['label'] }}
                <svg class="lucide lucide-arrow-up-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M7 7h10v10"></path>
                  <path d="M7 17 17 7"></path>
                </svg>
              </a>
            </div>

            @if (!empty($logos))
              <div class="logos mb-4" data-aos="fade-up" data-aos-delay="400">
                <span class="logos-title text-uppercase mb-4 d-block">Trusted by major companies worldwide</span>
                <div class="logos-images d-flex gap-4 align-items-center">
                  @foreach ($logos as $logo)
                    <img class="img-fluid js-img-to-inline-svg" src="{{ Vite::asset($logo['src']) }}" alt="{{ $logo['alt'] }}" style="width: {{ $logo['width'] ?? '100px' }};">
                  @endforeach
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero-img">
          <img class="img-card img-fluid" src="{{ Vite::asset($imageCard) }}" alt="Image card" data-aos="fade-down" data-aos-delay="600">
          <img class="img-main img-fluid rounded-4" src="{{ Vite::asset($imageMain) }}" alt="Hero Image" data-aos="fade-in" data-aos-delay="500">
        </div>
      </div>
    </div>
  </div>
</section>
