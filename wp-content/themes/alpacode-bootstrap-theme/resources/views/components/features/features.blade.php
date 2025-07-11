@props([
  'title' => 'Why Choose us',
  'description' => 'Experience the future of finance with our secure, efficient, and user-friendly financial services. Our cutting-edge platform ensures your transactions are safe, streamlined, and easy to manage, empowering you to take control of your financial journey with confidence and convenience.',
  'videoUrl' => 'https://www.youtube.com/watch?v=DQx96G4yHd8',
  'videoText' => 'Watch the Video',
  'showVideo' => true,
  'features' => [
    [
      'icon' => 'bi bi-person-check',
      'title' => 'User-Friendly Interface',
      'description' => 'Easy navigation with responsive design for various devices.'
    ],
    [
      'icon' => 'bi bi-graph-up',
      'title' => 'Financial Analytics',
      'description' => 'Budget tracking, expense categorization, and personalized insights.'
    ],
    [
      'icon' => 'bi bi-headset',
      'title' => 'Customer Support',
      'description' => '24/7 service via chat, email, phone, and a detailed help center.'
    ],
    [
      'icon' => 'bi bi-shield-lock',
      'title' => 'Security Features',
      'description' => 'Data encryption, fraud detection, and prevention mechanisms.'
    ]
  ]
])

<section class="section features__v2" id="features">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-lg-flex p-5 rounded-4 content" data-aos="fade-in" data-aos-delay="0">
          <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
              <div class="row"> 
                <div class="col-lg-11">
                  <div class="h-100 flex-column justify-content-between d-flex">
                    <div>
                      <h2 class="mb-4">{{ $title }}</h2>
                      <p class="mb-5">{{ $description }}</p>
                    </div>
                    
                    @if ($showVideo && $videoUrl)
                      <div class="align-self-start">
                        <a class="glightbox btn btn-play d-inline-flex align-items-center gap-2" 
                           href="{{ $videoUrl }}" 
                           data-gallery="video">
                          <i class="bi bi-play-fill"></i> {{ $videoText }}
                        </a>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-7">
              <div class="row justify-content-end">
                <div class="col-lg-11">
                  <div class="row">
                    @foreach ($features as $index => $feature)
                      <div class="col-sm-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="icon text-center mb-4">
                          <i class="{{ $feature['icon'] }} fs-4"></i>
                        </div>
                        <h3 class="fs-6 fw-bold mb-3">{{ $feature['title'] }}</h3>
                        <p>{{ $feature['description'] }}</p>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>