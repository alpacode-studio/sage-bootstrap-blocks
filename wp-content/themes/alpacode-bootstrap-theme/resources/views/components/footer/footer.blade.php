@props([
  'backgroundClass' => 'light-background',
  'logo' => [
    'text' => 'MyWebsite',
    'url' => 'index.html',
    'image' => null // Optional: 'resources/images/logo.svg'
  ],
  'contact' => [
    'address' => [
      'A108 Adam Street',
      'New York, NY 535022'
    ],
    'phone' => '+1 5589 55488 55',
    'email' => 'info@example.com'
  ],
  'linkColumns' => [
    [
      'title' => 'Useful Links',
      'links' => [
        ['label' => 'Home', 'url' => '#'],
        ['label' => 'About us', 'url' => '#'],
        ['label' => 'Services', 'url' => '#'],
        ['label' => 'Terms of service', 'url' => '#'],
        ['label' => 'Privacy policy', 'url' => '#']
      ]
    ],
    [
      'title' => 'Our Services',
      'links' => [
        ['label' => 'Web Design', 'url' => '#'],
        ['label' => 'Web Development', 'url' => '#'],
        ['label' => 'Product Management', 'url' => '#'],
        ['label' => 'Marketing', 'url' => '#'],
        ['label' => 'Graphic Design', 'url' => '#']
      ]
    ],
    [
      'title' => 'Hic solutasetp',
      'links' => [
        ['label' => 'Molestiae accusamus iure', 'url' => '#'],
        ['label' => 'Excepturi dignissimos', 'url' => '#'],
        ['label' => 'Suscipit distinctio', 'url' => '#'],
        ['label' => 'Dilecta', 'url' => '#'],
        ['label' => 'Sit quas consectetur', 'url' => '#']
      ]
    ],
    [
      'title' => 'Nobis illum',
      'links' => [
        ['label' => 'Ipsam', 'url' => '#'],
        ['label' => 'Laudantium dolorum', 'url' => '#'],
        ['label' => 'Dinera', 'url' => '#'],
        ['label' => 'Trodelas', 'url' => '#'],
        ['label' => 'Flexo', 'url' => '#']
      ]
    ]
  ],
  'copyright' => [
    'company' => 'MyWebsite',
    'text' => 'All Rights Reserved'
  ],
  'credits' => [
    'show' => true,
    'text' => 'Designed by',
    'link' => [
      'label' => 'BootstrapMade',
      'url' => 'https://bootstrapmade.com/'
    ]
  ],
  'socialLinks' => [
    [
      'icon' => 'bi bi-twitter-x',
      'url' => '',
      'label' => 'Twitter'
    ],
    [
      'icon' => 'bi bi-facebook',
      'url' => '',
      'label' => 'Facebook'
    ],
    [
      'icon' => 'bi bi-instagram',
      'url' => '',
      'label' => 'Instagram'
    ],
    [
      'icon' => 'bi bi-linkedin',
      'url' => '',
      'label' => 'LinkedIn'
    ]
  ]
])

<footer id="footer" class="footer {{ $backgroundClass }}">
  
  {{-- Footer Top --}}
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        
        {{-- About/Contact Column --}}
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ $logo['url'] }}" class="logo d-flex align-items-center">
            @if($logo['image'])
              <img src="{{ Vite::asset($logo['image']) }}" alt="{{ $logo['text'] }}">
            @endif
            <span class="sitename">{{ $logo['text'] }}</span>
          </a>
          
          <div class="footer-contact pt-3">
            @foreach($contact['address'] as $addressLine)
              <p>{{ $addressLine }}</p>
            @endforeach
            
            @if($contact['phone'])
              <p class="mt-3">
                <strong>Phone:</strong> 
                <span>{{ $contact['phone'] }}</span>
              </p>
            @endif
            
            @if($contact['email'])
              <p>
                <strong>Email:</strong> 
                <span>{{ $contact['email'] }}</span>
              </p>
            @endif
          </div>
        </div>

        {{-- Link Columns --}}
        @foreach($linkColumns as $column)
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>{{ $column['title'] }}</h4>
            <ul>
              @foreach($column['links'] as $link)
                <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
              @endforeach
            </ul>
          </div>
        @endforeach

      </div>
    </div>
  </div>

  {{-- Copyright Section --}}
  <div class="copyright text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

      <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div>
          © Copyright <strong><span>{{ $copyright['company'] }}</span></strong>. {{ $copyright['text'] }}
        </div>
        
        @if($credits['show'])
          <div class="credits">
            {{ $credits['text'] }} <a href="{{ $credits['link']['url'] }}">{{ $credits['link']['label'] }}</a>
          </div>
        @endif
      </div>

      {{-- Social Links --}}
      @if(!empty($socialLinks))
        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          @foreach($socialLinks as $social)
            <a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}">
              <i class="{{ $social['icon'] }}"></i>
            </a>
          @endforeach
        </div>
      @endif

    </div>
  </div>
  
</footer>