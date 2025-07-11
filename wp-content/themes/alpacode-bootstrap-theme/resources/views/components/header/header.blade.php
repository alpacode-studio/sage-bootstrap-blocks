@props([
  'logo' => [
    'text' => null,
    'dark' => 'resources/images/logo-dark.svg',
    'light' => 'resources/images/logo-light.svg',
    'url' => 'index.html',
    'alt' => 'Logo'
  ],
  'navigation' => [
    [
      'label' => 'Home',
      'url' => '#home',
      'active' => true,
      'scroll' => true
    ],
    [
      'label' => 'About',
      'url' => '#about',
      'scroll' => true
    ],
    [
      'label' => 'Pricing',
      'url' => '#pricing',
      'scroll' => true
    ],
    [
      'label' => 'How It Works',
      'url' => '#how-it-works',
      'scroll' => true
    ],
    [
      'label' => 'Services',
      'url' => '#services',
      'scroll' => true
    ],
    [
      'label' => 'Dropdown',
      'type' => 'dropdown',
      'items' => [
        [
          'label' => 'Multipages',
          'url' => '#',
          'scroll' => true
        ],
        [
          'label' => 'Services',
          'url' => '#services',
          'scroll' => true
        ],
        [
          'label' => 'Pricing',
          'url' => '#pricing',
          'scroll' => true
        ],
        [
          'label' => 'Dropstart',
          'type' => 'dropstart',
          'items' => [
            [
              'label' => 'Services',
              'url' => '#services',
              'scroll' => true
            ],
            [
              'label' => 'Pricing',
              'url' => '#pricing',
              'scroll' => true
            ],
            [
              'label' => 'Dropstart',
              'type' => 'dropstart',
              'items' => [
                [
                  'label' => 'Services',
                  'url' => '#services',
                  'scroll' => true
                ],
                [
                  'label' => 'Pricing',
                  'url' => '#pricing',
                  'scroll' => true
                ],
                [
                  'label' => 'Something else here',
                  'url' => '#'
                ],
                [
                  'label' => 'Dropend',
                  'type' => 'dropend',
                  'items' => [
                    [
                      'label' => 'Services',
                      'url' => '#services',
                      'scroll' => true
                    ],
                    [
                      'label' => 'Pricing',
                      'url' => '#pricing',
                      'scroll' => true
                    ],
                    [
                      'label' => 'Something else here',
                      'url' => '#'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    [
      'label' => 'Contact',
      'url' => '#contact',
      'scroll' => true
    ]
  ],
  'cta' => [
    'text' => 'Get Started',
    'url' => '#',
    'class' => 'btn btn-primary py-2'
  ],
  'offcanvasId' => 'fbs__net-navbars',
  'theme' => 'dark'
])

<header class="fbs__net-navbar navbar navbar-expand-lg {{ $theme }}" aria-label="freebootstrap.net navbar">
  <div class="container d-flex align-items-center justify-content-between">
    
    {{-- Logo --}}
    <a class="navbar-brand w-auto" href="{{ $logo['url'] }}">
      @if($logo['text'])
        {{ $logo['text'] }}
      @else
        {{-- Logo Dark --}}
        <img class="logo dark img-fluid" src="{{ Vite::asset($logo['dark']) }}" alt="{{ $logo['alt'] }}">
        {{-- Logo Light --}}
        <img class="logo light img-fluid" src="{{ Vite::asset($logo['light']) }}" alt="{{ $logo['alt'] }}">
      @endif
    </a>
    
    {{-- Offcanvas Navigation --}}
    <div class="offcanvas offcanvas-start w-75" id="{{ $offcanvasId }}" tabindex="-1" aria-labelledby="{{ $offcanvasId }}Label">
      
      <div class="offcanvas-header">
        <div class="offcanvas-header-logo">
          @if($logo['text'])
            <h5 id="{{ $offcanvasId }}Label" class="offcanvas-title">{{ $logo['text'] }}</h5>
          @else
            <a class="logo-link" id="{{ $offcanvasId }}Label" href="{{ $logo['url'] }}">
              <img class="logo dark img-fluid" src="{{ Vite::asset($logo['dark']) }}" alt="{{ $logo['alt'] }}">
              <img class="logo light img-fluid" src="{{ Vite::asset($logo['light']) }}" alt="{{ $logo['alt'] }}">
            </a>
          @endif
        </div>
        <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      
      <div class="offcanvas-body align-items-lg-center">
        <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
          @foreach($navigation as $item)
            @if(isset($item['type']) && $item['type'] === 'dropdown')
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ $item['label'] }} <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  @foreach($item['items'] as $dropdownItem)
                    @include('components.nav-item', ['item' => $dropdownItem, 'level' => 1])
                  @endforeach
                </ul>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link {{ isset($item['scroll']) && $item['scroll'] ? 'scroll-link' : '' }} {{ isset($item['active']) && $item['active'] ? 'active' : '' }}" 
                   @if(isset($item['active']) && $item['active']) aria-current="page" @endif
                   href="{{ $item['url'] }}">
                  {{ $item['label'] }}
                </a>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
    
    {{-- CTA and Mobile Toggle --}}
    <div class="ms-auto w-auto">
      <div class="header-social d-flex align-items-center gap-1">
        <a class="{{ $cta['class'] }}" href="{{ $cta['url'] }}">{{ $cta['text'] }}</a>
        
        <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto" 
                data-bs-toggle="offcanvas" 
                data-bs-target="#{{ $offcanvasId }}" 
                aria-controls="{{ $offcanvasId }}" 
                aria-label="Toggle navigation" 
                aria-expanded="false">
          <svg class="fbs__net-icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="21" x2="3" y1="6" y2="6"></line>
            <line x1="15" x2="3" y1="12" y2="12"></line>
            <line x1="17" x2="3" y1="18" y2="18"></line>
          </svg>
          <svg class="fbs__net-icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>

{{-- Nav Item Partial (for recursive dropdown rendering) --}}
@pushOnce('nav-item-partial')
  <template id="nav-item-template">
    @php
      // This would typically be in a separate partial file: resources/views/components/nav-item.blade.php
    @endphp
    @if(isset($item['type']))
      @if($item['type'] === 'dropstart')
        <li class="nav-item dropstart">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $item['label'] }} <i class="bi bi-chevron-right"></i>
          </a>
          <ul class="dropdown-menu">
            @foreach($item['items'] as $subItem)
              @include('components.nav-item', ['item' => $subItem, 'level' => ($level ?? 0) + 1])
            @endforeach
          </ul>
        </li>
      @elseif($item['type'] === 'dropend')
        <li class="nav-item dropend">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $item['label'] }} <i class="bi bi-chevron-right"></i>
          </a>
          <ul class="dropdown-menu">
            @foreach($item['items'] as $subItem)
              @include('components.nav-item', ['item' => $subItem, 'level' => ($level ?? 0) + 1])
            @endforeach
          </ul>
        </li>
      @endif
    @else
      <li>
        <a class="nav-link {{ isset($item['scroll']) && $item['scroll'] ? 'scroll-link' : '' }} dropdown-item" 
           href="{{ $item['url'] }}">
          {{ $item['label'] }}
        </a>
      </li>
    @endif
  </template>
@endPushOnce