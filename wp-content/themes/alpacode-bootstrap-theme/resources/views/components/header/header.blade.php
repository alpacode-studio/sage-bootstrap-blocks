@props([
  'headerClass' => 'header d-flex align-items-center fixed-top',
  'logo' => [
    'text' => 'Instant',
    'url' => 'index.html',
    'image' => null // Optional: 'resources/images/logo.webp'
  ],
  'navigation' => [
    [
      'label' => 'Home',
      'url' => '#hero',
      'active' => true
    ],
    [
      'label' => 'About',
      'url' => '#about',
      'active' => false
    ],
    [
      'label' => 'Features',
      'url' => '#features',
      'active' => false
    ],
    [
      'label' => 'Services',
      'url' => '#services',
      'active' => false
    ],
    [
      'label' => 'Pricing',
      'url' => '#pricing',
      'active' => false
    ],
    [
      'label' => 'Dropdown',
      'type' => 'dropdown',
      'url' => '#',
      'items' => [
        [
          'label' => 'Dropdown 1',
          'url' => '#'
        ],
        [
          'label' => 'Deep Dropdown',
          'type' => 'dropdown',
          'url' => '#',
          'items' => [
            ['label' => 'Deep Dropdown 1', 'url' => '#'],
            ['label' => 'Deep Dropdown 2', 'url' => '#'],
            ['label' => 'Deep Dropdown 3', 'url' => '#'],
            ['label' => 'Deep Dropdown 4', 'url' => '#'],
            ['label' => 'Deep Dropdown 5', 'url' => '#']
          ]
        ],
        [
          'label' => 'Dropdown 2',
          'url' => '#'
        ],
        [
          'label' => 'Dropdown 3',
          'url' => '#'
        ],
        [
          'label' => 'Dropdown 4',
          'url' => '#'
        ]
      ]
    ],
    [
      'label' => 'Contact',
      'url' => '#contact',
      'active' => false
    ]
  ],
  'ctaButton' => [
    'text' => 'Get Started',
    'url' => 'index.html#about',
    'class' => 'btn-getstarted'
  ],
  'mobileToggleIcon' => 'bi bi-list',
  'dropdownIcon' => 'bi bi-chevron-down'
])

<header id="header" class="{{ $headerClass }}">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    {{-- Logo --}}
    <a href="{{ $logo['url'] }}" class="logo d-flex align-items-center me-auto me-xl-0">
      @if($logo['image'])
        <img src="{{ Vite::asset($logo['image']) }}" alt="{{ $logo['text'] }}">
      @endif
      <h1 class="sitename">{{ $logo['text'] }}</h1>
    </a>

    {{-- Navigation --}}
    <nav id="navmenu" class="navmenu">
      <ul>
        @foreach($navigation as $item)
          @if(isset($item['type']) && $item['type'] === 'dropdown')
            <li class="dropdown">
              <a href="{{ $item['url'] }}">
                <span>{{ $item['label'] }}</span> 
                <i class="{{ $dropdownIcon }} toggle-dropdown"></i>
              </a>
              <ul>
                @foreach($item['items'] as $subItem)
                  @if(isset($subItem['type']) && $subItem['type'] === 'dropdown')
                    <li class="dropdown">
                      <a href="{{ $subItem['url'] }}">
                        <span>{{ $subItem['label'] }}</span> 
                        <i class="{{ $dropdownIcon }} toggle-dropdown"></i>
                      </a>
                      <ul>
                        @foreach($subItem['items'] as $deepItem)
                          <li><a href="{{ $deepItem['url'] }}">{{ $deepItem['label'] }}</a></li>
                        @endforeach
                      </ul>
                    </li>
                  @else
                    <li><a href="{{ $subItem['url'] }}">{{ $subItem['label'] }}</a></li>
                  @endif
                @endforeach
              </ul>
            </li>
          @else
            <li>
              <a href="{{ $item['url'] }}" class="{{ $item['active'] ? 'active' : '' }}">
                {{ $item['label'] }}
              </a>
            </li>
          @endif
        @endforeach
      </ul>
      <i class="mobile-nav-toggle d-xl-none {{ $mobileToggleIcon }}"></i>
    </nav>

    {{-- CTA Button --}}
    @if($ctaButton)
      <a class="{{ $ctaButton['class'] }}" href="{{ $ctaButton['url'] }}">
        {{ $ctaButton['text'] }}
      </a>
    @endif

  </div>
</header>