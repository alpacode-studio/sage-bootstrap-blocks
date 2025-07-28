@props([
  'mission' => [
    'title' => 'Our Mission',
    'description' => 'To empower businesses with innovative technology solutions that drive growth and create lasting value for our clients and communities.',
    'icon' => 'bi bi-compass'
  ],
  'vision' => [
    'title' => 'Our Vision',
    'description' => 'To be the global leader in transformative technology, setting new standards for innovation and customer success in the digital age.',
    'icon' => 'bi bi-eye'
  ],
  'values' => [
    'title' => 'Our Values',
    'items' => [
      ['name' => 'Innovation', 'icon' => 'bi bi-lightbulb'],
      ['name' => 'Integrity', 'icon' => 'bi bi-shield-check'],
      ['name' => 'Excellence', 'icon' => 'bi bi-trophy'],
      ['name' => 'Collaboration', 'icon' => 'bi bi-people']
    ]
  ]
])

{{-- Mission & Vision About Component --}}
<section id="about-mission-vision" class="about-mission-vision section py-5">
  <div class="container">
    
    {{-- Mission & Vision --}}
    <div class="row g-4 mb-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="mission-card card border-0 shadow-sm h-100">
          <div class="card-body p-4">
            <div class="d-flex align-items-start">
              <div class="icon-wrapper bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
                <i class="{{ $mission['icon'] }} fs-3"></i>
              </div>
              <div class="flex-grow-1">
                <h3 class="card-title mb-3">{{ $mission['title'] }}</h3>
                <p class="card-text text-muted mb-0">{{ $mission['description'] }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="vision-card card border-0 shadow-sm h-100">
          <div class="card-body p-4">
            <div class="d-flex align-items-start">
              <div class="icon-wrapper bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
                <i class="{{ $vision['icon'] }} fs-3"></i>
              </div>
              <div class="flex-grow-1">
                <h3 class="card-title mb-3">{{ $vision['title'] }}</h3>
                <p class="card-text text-muted mb-0">{{ $vision['description'] }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Values --}}
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
      <div class="col-lg-8">
        <div class="values-section text-center">
          <h3 class="mb-4">{{ $values['title'] }}</h3>
          <div class="row g-3">
            @foreach($values['items'] as $value)
              <div class="col-6 col-md-3">
                <div class="value-item p-3">
                  <div class="value-icon text-primary mb-2">
                    <i class="{{ $value['icon'] }} fs-2"></i>
                  </div>
                  <h6 class="mb-0">{{ $value['name'] }}</h6>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<style>
.about-mission-vision .card {
  transition: transform 0.3s ease;
  border-radius: 1rem;
}

.about-mission-vision .card:hover {
  transform: translateY(-5px);
}

.about-mission-vision .icon-wrapper {
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.about-mission-vision .value-item {
  transition: transform 0.3s ease;
}

.about-mission-vision .value-item:hover {
  transform: translateY(-5px);
}

.about-mission-vision .value-icon {
  transition: color 0.3s ease;
}

.about-mission-vision .value-item:hover .value-icon {
  color: var(--bs-success) !important;
}
</style>