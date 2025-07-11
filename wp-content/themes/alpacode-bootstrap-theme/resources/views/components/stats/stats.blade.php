@props([
  'stats' => [
    [
      'number' => 10,
      'suffix' => 'K+',
      'label' => 'Customer Satisfaction',
      'duration' => 2,
      'start' => 0
    ],
    [
      'number' => 200,
      'suffix' => '%+',
      'label' => 'Revenue Increase',
      'duration' => 2,
      'start' => 0
    ],
    [
      'number' => 20,
      'suffix' => 'x',
      'label' => 'Business Growth',
      'duration' => 2,
      'start' => 0
    ]
  ],
  'showBorders' => true
])

<section class="stats__v3 section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex flex-wrap content rounded-4" data-aos="fade-up" data-aos-delay="0">
          
          {{-- Decorative rounded borders --}}
          @if($showBorders)
            <div class="rounded-borders">
              <div class="rounded-border-1"></div>
              <div class="rounded-border-2"></div>
              <div class="rounded-border-3"></div>
            </div>
          @endif

          {{-- Stats Items --}}
          @foreach($stats as $index => $stat)
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ 100 + ($index * 100) }}">
              <div class="stat-item">
                <h3 class="fs-1 fw-bold">
                  <span class="purecounter" 
                        data-purecounter-start="{{ $stat['start'] ?? 0 }}" 
                        data-purecounter-end="{{ $stat['number'] }}" 
                        data-purecounter-duration="{{ $stat['duration'] ?? 2 }}">
                    {{ $stat['start'] ?? 0 }}
                  </span>
                  <span>{{ $stat['suffix'] ?? '' }}</span>
                </h3>
                <p class="mb-0">{{ $stat['label'] }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>