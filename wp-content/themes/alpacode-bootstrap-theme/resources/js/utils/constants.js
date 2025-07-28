export const CONSTANTS = {
  // Scroll thresholds
  SCROLL: {
    HEADER_THRESHOLD: 100,
    BACK_TO_TOP_THRESHOLD: 100,
    SCROLLSPY_OFFSET: 200,
    THROTTLE_DELAY: 16 // ~60fps
  },

  // Animation durations
  ANIMATION: {
    AOS_DURATION: 600,
    TYPING_SPEED: 100,
    BACK_SPEED: 50,
    BACK_DELAY: 2000,
    HASH_SCROLL_DELAY: 100
  },

  // Selectors
  SELECTORS: {
    HEADER: '#header, .header, header',
    MOBILE_NAV_TOGGLE: '.mobile-nav-toggle',
    NAV_LINKS: '#navmenu a, .navmenu a, .navbar-nav a',
    DROPDOWN_TOGGLE: '.navmenu .toggle-dropdown, .dropdown-toggle',
    PRELOADER: '#preloader, .preloader',
    SCROLL_TOP: '.scroll-top, .back-to-top',
    FAQ_ITEMS: '.faq-item h3, .faq-item .faq-toggle, .faq-item .faq-header',
    GLIGHTBOX: '.glightbox',
    ISOTOPE_LAYOUT: '.isotope-layout',
    ISOTOPE_CONTAINER: '.isotope-container',
    ISOTOPE_ITEM: '.isotope-item',
    ISOTOPE_FILTERS: '.isotope-filters li',
    SWIPER: '.init-swiper',
    SWIPER_CONFIG: '.swiper-config',
    TYPED: '.typed'
  },

  // CSS Classes
  CLASSES: {
    SCROLLED: 'scrolled',
    MOBILE_NAV_ACTIVE: 'mobile-nav-active',
    ACTIVE: 'active',
    FAQ_ACTIVE: 'faq-active',
    DROPDOWN_ACTIVE: 'dropdown-active',
    FILTER_ACTIVE: 'filter-active',
    STICKY_CLASSES: ['scroll-up-sticky', 'sticky-top', 'fixed-top']
  },

  // Events
  EVENTS: {
    SCROLL_EFFECTS_READY: 'scroll-effects:ready',
    MOBILE_NAV_TOGGLED: 'mobile-nav:toggled',
    FAQ_TOGGLED: 'faq:toggled',
    VENDORS_LOADED: 'vendors:loaded'
  }
}