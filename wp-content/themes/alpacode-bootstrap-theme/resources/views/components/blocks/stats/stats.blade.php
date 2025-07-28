@props([
  'backgroundClass' => 'light-background',
  'avatars' => [
    [
      'image' => 'resources/images/person/person-m-2.webp',
      'alt' => 'Avatar 1'
    ],
    [
      'image' => 'resources/images/person/person-m-3.webp',
      'alt' => 'Avatar 2'
    ],
    [
      'image' => 'resources/images/person/person-f-5.webp',
      'alt' => 'Avatar 3'
    ],
    [
      'image' => 'resources/images/person/person-m-5.webp',
      'alt' => 'Avatar 4'
    ]
  ],
  'stats' => [
    [
      'number' => 185,
      'suffix' => '+',
      'label' => 'Nemo enim ipsam',
      'duration' => 1,
      'start' => 0
    ],
    [
      'number' => 32,
      'suffix' => 'K',
      'label' => 'Voluptatem sequi',
      'duration' => 1,
      'start' => 0
    ],
    [
      'number' => 128,
      'suffix' => '+',
      'label' => 'Dolor sit consectetur',
      'duration' => 1,
      'start' => 0
    ]
  ],
  'showAvatars' => true,
  'reverseLayout' => false
])

<section id="stats" class="stats section {{ $backgroundClass }}">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      
      {{-- Avatars Column --}}
      @if($showAvatars && !empty($avatars))
        <div class="col-lg-4 {{ $reverseLayout ? 'order-2' : 'order-1' }}" 
             data-aos="fade-up" 
             data-aos-delay="200">
          <div class="avatars d-flex align-items-center">
            @foreach($avatars as $avatar)
              <img src="{{ Vite::asset($avatar['image']) }}" 
                   alt="{{ $avatar['alt'] }}" 
                   class="rounded-circle" 
                   loading="lazy">
            @endforeach
          </div>
        </div>
      @endif

      {{-- Stats Column --}}
      <div class="col-lg-{{ $showAvatars ? '8' : '12' }} {{ $reverseLayout ? 'order-1' : 'order-2' }}">
        <div class="row counters">
          @foreach($stats as $index => $stat)
            <div class="col-md-{{ $showAvatars ? '4' : (12 / count($stats)) }}" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ 300 + ($index * 100) }}">
              <h2>
                <span data-purecounter-start="{{ $stat['start'] }}" 
                      data-purecounter-end="{{ $stat['number'] }}" 
                      data-purecounter-duration="{{ $stat['duration'] }}" 
                      class="purecounter">{{ $stat['start'] }}</span>{{ $stat['suffix'] }}
              </h2>
              <p>{{ $stat['label'] }}</p>
            </div>
          @endforeach
        </div>
      </div>
      
    </div>
  </div>
</section>

<style>
  /*--------------------------------------------------------------
# Stats Section
--------------------------------------------------------------*/
.stats .avatars {
  position: relative;
}

.stats .avatars img {
  width: 60px;
  height: 60px;
  border: 3px solid var(--accent-color);
  margin-right: -15px;
  transition: transform 0.3s ease;
}

.stats .avatars img:hover {
  transform: translateY(-5px);
  z-index: 2;
}

.stats .counters h2 {
  color: var(--heading-color);
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 10px;
}

.stats .counters h2 span {
  display: inline-block;
}

.stats .counters p {
  color: var(--default-color);
  font-size: 18px;
  margin: 0;
  opacity: 0.9;
}

@media (max-width: 991px) {
  .stats .row {
    text-align: center;
  }

  .stats .avatars {
    justify-content: center;
    margin-bottom: 40px;
  }

  .stats .counters h2 {
    font-size: 36px;
  }

  .stats .counters p {
    font-size: 16px;
  }

  .stats .counters .col-md-4 {
    margin-bottom: 30px;
  }

  .stats .counters .col-md-4:last-child {
    margin-bottom: 0;
  }
}

@media (max-width: 576px) {
  .stats {
    padding: 60px 0;
  }

  .stats .avatars {
    flex-wrap: wrap;
    justify-content: center;
  }

  .stats .avatars img {
    margin: 0 -8px;
  }
}
</style>