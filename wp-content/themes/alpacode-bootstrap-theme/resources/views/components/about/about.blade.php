@props([
  'subtitle' => 'About us',
  'title' => 'Experience the future of finance with our secure, efficient, and user-friendly financial services',
  'description' => [
    'Founded with the vision of revolutionizing the financial industry, we are a leading fintech company dedicated to providing innovative and secure financial solutions.',
    'Our cutting-edge platform ensures your transactions are safe, streamlined, and easy to manage, empowering you to take control of your financial journey with confidence and convenience.'
  ],
  'valuesTitle' => 'Key Values and Vision',
  'values' => [
    'Innovation',
    'Security',
    'User-Centric Design',
    'Transparency',
    'Empowerment'
  ],
  'image' => 'resources/images/about_2-min.jpg',
  'imageAlt' => 'About us image',
  'missionTitle' => 'Mission Statement',
  'missionDescription' => 'Our mission is to empower individuals and businesses by delivering secure, efficient, and user-friendly financial services.',
  'missionIcon' => 'bi bi-lightbulb'
])

<section class="about__v4 section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 order-md-2">
        <div class="row justify-content-end">
          <div class="col-md-11 mb-4 mb-md-0">
            <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">{{ $subtitle }}</span>
            <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">{{ $title }}</h2>
            
            <div data-aos="fade-up" data-aos-delay="200">
              @foreach ($description as $paragraph)
                <p>{{ $paragraph }}</p>
              @endforeach
            </div>

            @if (!empty($values))
              <h4 class="small fw-bold mt-4 mb-3" data-aos="fade-up" data-aos-delay="300">{{ $valuesTitle }}</h4>
              <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features" data-aos="fade-up" data-aos-delay="400">
                @foreach ($values as $value)
                  <li class="d-flex align-items-center gap-2">
                    <span class="icon rounded-circle text-center">
                      <i class="bi bi-check"></i>
                    </span>
                    <span class="text">{{ $value }}</span>
                  </li>
                @endforeach
              </ul>
            @endif
          </div>
        </div>
      </div>
      
      <div class="col-md-6"> 
        <div class="img-wrap position-relative">
          <img class="img-fluid rounded-4" src="{{ Vite::asset($image) }}" alt="{{ $imageAlt }}" data-aos="fade-up" data-aos-delay="0">
          
          <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up" data-aos-delay="100">
            <div class="mission-icon text-center rounded-circle">
              <i class="{{ $missionIcon }} fs-4"></i>
            </div>
            <div>
              <h3 class="text-uppercase fw-bold">{{ $missionTitle }}</h3>
              <p class="fs-5 mb-0">{{ $missionDescription }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>