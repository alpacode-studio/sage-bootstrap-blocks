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

<style>
  /*--------------------------------------------------------------
# Global Footer
--------------------------------------------------------------*/
.footer {
  color: var(--default-color);
  background-color: var(--background-color);
  font-size: 14px;
  position: relative;
}

.footer .footer-top {
  background-color: color-mix(in srgb, var(--background-color), white 5%);
  padding-top: 50px;
}

.footer .footer-about .logo {
  line-height: 1;
  margin-bottom: 25px;
}

.footer .footer-about .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.footer .footer-about .logo span {
  color: var(--heading-color);
  font-family: var(--heading-font);
  font-size: 26px;
  font-weight: 700;
  letter-spacing: 1px;
}

.footer .footer-about p {
  font-size: 14px;
  font-family: var(--heading-font);
}

.footer h4 {
  font-size: 16px;
  font-weight: 600;
  position: relative;
  padding-bottom: 12px;
  margin-bottom: 15px;
}

.footer h4::after {
  content: "";
  position: absolute;
  display: block;
  width: 20px;
  height: 2px;
  background: var(--accent-color);
  bottom: 0;
  left: 0;
}

.footer .footer-links {
  margin-bottom: 30px;
}

.footer .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-links ul i {
  padding-right: 2px;
  font-size: 12px;
  line-height: 0;
}

.footer .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-links ul a {
  color: color-mix(in srgb, var(--default-color), transparent 30%);
  display: inline-block;
  line-height: 1;
}

.footer .footer-links ul a:hover {
  color: var(--accent-color);
}

.footer .footer-contact p {
  margin-bottom: 5px;
}

.footer .copyright {
  padding: 30px 0;
}

.footer .copyright p {
  margin-bottom: 0;
}

.footer .credits {
  margin-top: 5px;
  font-size: 13px;
}

.footer .social-links a {
  font-size: 18px;
  display: inline-block;
  background: color-mix(in srgb, var(--default-color), transparent 92%);
  color: var(--accent-color);
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 4px;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

.footer .social-links a:hover {
  color: var(--contrast-color);
  background: var(--accent-color);
  text-decoration: none;
}
</style>