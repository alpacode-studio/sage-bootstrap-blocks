@props([
  'newsletter' => [
    'title' => 'Join our newsletter',
    'description' => 'Stay updated with our latest templates and offers—join our newsletter today!',
    'placeholder' => 'Email your email',
    'buttonText' => 'Subscribe',
    'action' => '#',
    'method' => 'POST'
  ],
  'about' => [
    'title' => 'About',
    'description' => 'Utilize our tools to develop your concepts and bring your vision to life. Once complete, effortlessly share your creations.'
  ],
  'links' => [
    [
      'title' => 'Company',
      'items' => [
        ['label' => 'Leadership', 'url' => 'page-about.html'],
        ['label' => 'Careers', 'url' => 'page-careers.html', 'badge' => 'we\'re hiring'],
        ['label' => 'Case Studies', 'url' => 'page-case-studies.html'],
        ['label' => 'Terms & Conditions', 'url' => 'page-terms-conditions.html'],
        ['label' => 'Privacy Policy', 'url' => 'page-privacy-policy.html'],
        ['label' => '404 page', 'url' => 'page-404.html']
      ]
    ],
    [
      'title' => 'Accounts',
      'items' => [
        ['label' => 'Register', 'url' => 'page-signup.html'],
        ['label' => 'Sign in', 'url' => 'page-signin.html'],
        ['label' => 'Forgot Password', 'url' => 'page-forgot-password.html'],
        ['label' => 'Coming soon', 'url' => 'page-coming-soon.html'],
        ['label' => 'Portfolio Masonry', 'url' => 'page-portfolio-masonry.html']
      ]
    ]
  ],
  'contact' => [
    'title' => 'Contact',
    'items' => [
      [
        'icon' => 'bi bi-geo-alt-fill',
        'text' => '123 Main Street Apt 4B Springfield, <br> IL 62701 United States',
        'type' => 'address'
      ],
      [
        'icon' => 'bi bi-envelope-fill',
        'text' => 'info@mydomain.com',
        'url' => 'mailto:info@mydomain.com',
        'type' => 'email'
      ],
      [
        'icon' => 'bi bi-telephone-fill',
        'text' => '+1 (234) 5678 9900',
        'url' => 'tel://+123456789900',
        'type' => 'phone'
      ],
      [
        'icon' => 'bi bi-globe',
        'text' => 'FreeBootstrap.net',
        'url' => 'https://freebootstrap.net',
        'type' => 'website'
      ]
    ]
  ],
  'credits' => [
    'companyName' => 'Nova',
    'designedBy' => [
      'text' => 'FreeBootstrap.net',
      'url' => 'https://freebootstrap.net'
    ],
    'distributedBy' => [
      'text' => 'ThemeWagon',
      'url' => 'https://themewagon.com'
    ]
  ]
])

<footer class="footer pt-5 pb-5">
  <div class="container">
    {{-- Newsletter Section --}}
    <div class="row mb-5 pb-4">
      <div class="col-md-7">
        <h2 class="fs-5">{{ $newsletter['title'] }}</h2>
        <p>{{ $newsletter['description'] }}</p>
      </div>
      <div class="col-md-5">
        <form class="d-flex gap-2" action="{{ $newsletter['action'] }}" method="{{ $newsletter['method'] }}">
          @if($newsletter['method'] === 'POST')
            @csrf
          @endif
          <input class="form-control" type="email" placeholder="{{ $newsletter['placeholder'] }}" required>
          <button class="btn btn-primary fs-6" type="submit">{{ $newsletter['buttonText'] }}</button>
        </form>
      </div>
    </div>

    {{-- Main Footer Content --}}
    <div class="row justify-content-between mb-5 g-xl-5">
      {{-- About Section --}}
      <div class="col-md-4 mb-5 mb-lg-0">
        <h3 class="mb-3">{{ $about['title'] }}</h3>
        <p class="mb-4">{{ $about['description'] }}</p>
      </div>

      {{-- Links and Contact Section --}}
      <div class="col-md-7">
        <div class="row g-2">
          {{-- Dynamic Link Columns --}}
          @foreach ($links as $linkGroup)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
              <h3 class="mb-3">{{ $linkGroup['title'] }}</h3>
              <ul class="list-unstyled">
                @foreach ($linkGroup['items'] as $item)
                  <li>
                    <a href="{{ $item['url'] }}">
                      {{ $item['label'] }}
                      @if (isset($item['badge']))
                        <span class="badge ms-1">{{ $item['badge'] }}</span>
                      @endif
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach

          {{-- Contact Section --}}
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 quick-contact">
            <h3 class="mb-3">{{ $contact['title'] }}</h3>
            @foreach ($contact['items'] as $contactItem)
              @if ($contactItem['type'] === 'address')
                <p class="d-flex mb-3">
                  <i class="{{ $contactItem['icon'] }} me-3"></i>
                  <span>{!! $contactItem['text'] !!}</span>
                </p>
              @else
                <a class="d-flex mb-3" href="{{ $contactItem['url'] }}">
                  <i class="{{ $contactItem['icon'] }} me-3"></i>
                  <span>{{ $contactItem['text'] }}</span>
                </a>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>

    {{-- Credits Section --}}
    <div class="row credits pt-3">
      <div class="col-xl-8 text-center text-xl-start mb-3 mb-xl-0">
        &copy;
        <script>document.write(new Date().getFullYear());</script>
        {{ $credits['companyName'] }}.
        All rights reserved. Designed with <i class="bi bi-heart-fill text-danger"></i> by 
        <a href="{{ $credits['designedBy']['url'] }}">{{ $credits['designedBy']['text'] }}</a>
      </div>
      <div class="col-xl-4 justify-content-start justify-content-xl-end quick-links d-flex flex-column flex-xl-row text-center text-xl-start gap-1">
        Distributed by <a href="{{ $credits['distributedBy']['url'] }}" target="_blank">{{ $credits['distributedBy']['text'] }}</a>
      </div>
    </div>
  </div>
</footer>