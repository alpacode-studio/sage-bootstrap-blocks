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

<style>
  /*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/

/* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
:root {
  --nav-color: #f8f8f8;  /* The default color of the main navmenu links */
  --nav-hover-color: #e59d02; /* Applied to main navmenu links when they are hovered over or active */
  --nav-mobile-background-color: #1b1a1a; /* Used as the background color for mobile navigation menu */
  --nav-dropdown-background-color: #1b1a1a; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
  --nav-dropdown-color: #f8f8f8; /* Used for navigation links of the dropdown items in the navigation menu. */
  --nav-dropdown-hover-color: #e59d02; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
}

.header {
  --background-color: rgba(255, 255, 255, 0);
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 15px 0;
  transition: all 0.5s;
  z-index: 997;
}

.header .logo {
  line-height: 1;
}

.header .logo img {
  max-height: 36px;
  margin-right: 8px;
}

.header .logo h1 {
  font-size: 30px;
  margin: 0;
  font-weight: 700;
  color: var(--heading-color);
}

.header .btn-getstarted,
.header .btn-getstarted:focus {
  color: var(--contrast-color);
  background: var(--accent-color);
  font-size: 14px;
  padding: 8px 26px;
  margin: 0;
  border-radius: 50px;
  transition: 0.3s;
}

.header .btn-getstarted:hover,
.header .btn-getstarted:focus:hover {
  color: var(--contrast-color);
  background: color-mix(in srgb, var(--accent-color), transparent 15%);
}

@media (max-width: 1200px) {
  .header .logo {
    order: 1;
  }

  .header .btn-getstarted {
    order: 2;
    margin: 0 15px 0 0;
    padding: 6px 20px;
  }

  .header .navmenu {
    order: 3;
  }
}

.scrolled .header::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  z-index: -1;
  pointer-events: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  /* optional border */
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Navmenu - Desktop */
@media (min-width: 1200px) {
  .navmenu {
    padding: 0;
  }

  .navmenu ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navmenu li {
    position: relative;
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-color);
    padding: 18px 15px;
    font-size: 16px;
    font-family: var(--nav-font);
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    transition: 0.3s;
  }

  .navmenu li:last-child a {
    padding-right: 0;
  }

  .navmenu li:hover>a,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-hover-color);
  }

  .navmenu .dropdown ul {
    margin: 0;
    padding: 10px 0;
    background: var(--nav-dropdown-background-color);
    display: block;
    position: absolute;
    visibility: hidden;
    left: 14px;
    top: 130%;
    opacity: 0;
    transition: 0.3s;
    border-radius: 4px;
    z-index: 99;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  }

  .navmenu .dropdown ul li {
    min-width: 200px;
  }

  .navmenu .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    color: var(--nav-dropdown-color);
  }

  .navmenu .dropdown ul a i {
    font-size: 12px;
  }

  .navmenu .dropdown ul a:hover,
  .navmenu .dropdown ul .active:hover,
  .navmenu .dropdown ul li:hover>a {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navmenu .dropdown .dropdown ul {
    top: 0;
    left: -90%;
    visibility: hidden;
  }

  .navmenu .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: -100%;
    visibility: visible;
  }
}

/* Navmenu - Mobile */
@media (max-width: 1199px) {
  .mobile-nav-toggle {
    color: var(--nav-color);
    font-size: 28px;
    line-height: 0;
    margin-right: 10px;
    cursor: pointer;
    transition: color 0.3s;
  }

  .navmenu {
    padding: 0;
    z-index: 9997;
  }

  .navmenu ul {
    display: none;
    list-style: none;
    position: absolute;
    inset: 60px 20px 20px 20px;
    padding: 10px 0;
    margin: 0;
    border-radius: 6px;
    background-color: var(--nav-mobile-background-color);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-dropdown-color);
    padding: 10px 20px;
    font-family: var(--nav-font);
    font-size: 17px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: 0.3s;
    background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
  }

  .navmenu a i:hover,
  .navmenu a:focus i:hover {
    background-color: var(--accent-color);
    color: var(--contrast-color);
  }

  .navmenu a:hover,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .active i,
  .navmenu .active:focus i {
    background-color: var(--accent-color);
    color: var(--contrast-color);
    transform: rotate(180deg);
  }

  .navmenu .dropdown ul {
    position: static;
    display: none;
    z-index: 99;
    padding: 10px 0;
    margin: 10px 20px;
    background-color: var(--nav-dropdown-background-color);
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    box-shadow: none;
    transition: all 0.5s ease-in-out;
  }

  .navmenu .dropdown ul ul {
    background-color: rgba(33, 37, 41, 0.1);
  }

  .navmenu .dropdown>.dropdown-active {
    display: block;
    background-color: rgba(33, 37, 41, 0.03);
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .mobile-nav-toggle {
    color: #fff;
    position: absolute;
    font-size: 32px;
    top: 15px;
    right: 15px;
    margin-right: 0;
    z-index: 9999;
  }

  .mobile-nav-active .navmenu {
    position: fixed;
    overflow: hidden;
    inset: 0;
    background: rgba(33, 37, 41, 0.8);
    transition: 0.3s;
  }

  .mobile-nav-active .navmenu>ul {
    display: block;
  }
}
</style>