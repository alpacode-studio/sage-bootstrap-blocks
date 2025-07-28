@props([
  'companyName' => 'TechCorp Solutions',
  'foundedYear' => '2010',
  'description' => 'We are a leading technology company specializing in innovative software solutions that help businesses thrive in the digital age.',
  'headquarters' => [
    'city' => 'San Francisco',
    'country' => 'USA',
    'address' => '123 Innovation Drive, San Francisco, CA 94105'
  ],
  'stats' => [
    ['number' => '500+', 'label' => 'Happy Clients'],
    ['number' => '50+', 'label' => 'Team Members'],
    ['number' => '15+', 'label' => 'Years Experience'],
    ['number' => '25+', 'label' => 'Countries Served']
  ],
  'certifications' => [
    ['name' => 'ISO 9001:2015', 'icon' => 'bi bi-award'],
    ['name' => 'SOC 2 Type II', 'icon' => 'bi bi-shield-check'],
    ['name' => 'GDPR Compliant', 'icon' => 'bi bi-check-circle'],
    ['name' => 'Google Partner', 'icon' => 'bi bi-google']
  ],
  'offices' => [
    ['city' => 'San Francisco', 'country' => 'USA', 'employees' => '25'],
    ['city' => 'London', 'country' => 'UK', 'employees' => '15'],
    ['city' => 'Tokyo', 'country' => 'Japan', 'employees' => '10']
  ],
  'companyImage' => 'resources/images/company/headquarters.webp'
])

<section id="about-company-info" class="about-company-info section py-5">
  <div class="container">
    
    {{-- Company Overview --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
        <div class="company-content">
          <h2 class="display-5 fw-bold mb-3">About {{ $companyName }}</h2>
          <p class="text-muted mb-2">Founded in {{ $foundedYear }}</p>
          <p class="lead mb-4">{{ $description }}</p>
          
          <div class="headquarters-info p-3 bg-dark rounded mb-4">
            <h6 class="fw-bold mb-2">
              <i class="bi bi-geo-alt text-primary me-2"></i>
              Headquarters
            </h6>
            <p class="mb-0 text-muted">{{ $headquarters['address'] }}</p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="company-image">
          <img src="{{ Vite::asset($companyImage) }}" 
               class="img-fluid rounded shadow-lg" 
               alt="{{ $companyName }} Headquarters">
        </div>
      </div>
    </div>

    {{-- Statistics --}}
    <div class="row g-4 mb-5">
      @foreach($stats as $index => $stat)
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
          <div class="stat-card text-center p-4 bg-dark border rounded shadow-sm">
            <div class="stat-number h2 fw-bold text-primary mb-2">{{ $stat['number'] }}</div>
            <div class="stat-label text-muted text-uppercase small">{{ $stat['label'] }}</div>
          </div>
        </div>
      @endforeach
    </div>

    {{-- Certifications & Global Offices --}}
    <div class="row g-4">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="400">
        <div class="certifications-section">
          <h4 class="mb-4">Certifications & Compliance</h4>
          <div class="row g-3">
            @foreach($certifications as $cert)
              <div class="col-md-6">
                <div class="certification-item d-flex align-items-center p-3 bg-dark rounded">
                  <i class="{{ $cert['icon'] }} text-success fs-4 me-3"></i>
                  <span class="fw-semibold">{{ $cert['name'] }}</span>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="600">
        <div class="offices-section">
          <h4 class="mb-4">Global Offices</h4>
          <div class="offices-list">
            @foreach($offices as $office)
              <div class="office-item d-flex justify-content-between align-items-center p-3 bg-dark rounded mb-3">
                <div class="office-info">
                  <h6 class="mb-1">{{ $office['city'] }}</h6>
                  <small class="text-muted">{{ $office['country'] }}</small>
                </div>
                <div class="office-stats">
                  <span class="badge bg-primary">{{ $office['employees'] }} employees</span>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>