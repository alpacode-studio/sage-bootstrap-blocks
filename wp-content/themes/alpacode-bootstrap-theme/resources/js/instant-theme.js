/**
 * Animation on scroll initialization
 * Use with: Any component that needs scroll animations
 * Requires: AOS library to be loaded
 */
function initAOSAnimations() {
  function aosInit() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    } else {
      console.warn('AOS library not loaded - animations disabled');
    }
  }
  
  window.addEventListener('load', aosInit);
}

// Initialize when component with animations mounts
initAOSAnimations();

/**
 * GLightbox initialization for image galleries
 * Use with: Gallery/Portfolio components
 * Requires: GLightbox library to be loaded
 */
function initLightbox() {
  if (typeof GLightbox !== 'undefined') {
    const glightbox = GLightbox({
      selector: '.glightbox'
    });
    return glightbox;
  } else {
    console.warn('GLightbox library not loaded - lightbox functionality disabled');
    return null;
  }
}

// Initialize when gallery component mounts
const lightbox = initLightbox();

/**
 * Swiper slider initialization
 * Use with: Testimonials, Team, Portfolio slider components
 * Requires: Swiper library to be loaded
 */
function initSwiperSliders() {
  function initSwiper() {
    if (typeof Swiper === 'undefined') {
      console.warn('Swiper library not loaded - sliders disabled');
      return;
    }

    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      const configElement = swiperElement.querySelector(".swiper-config");
      if (!configElement) {
        console.warn('Swiper config not found for element:', swiperElement);
        return;
      }

      try {
        let config = JSON.parse(configElement.innerHTML.trim());

        if (swiperElement.classList.contains("swiper-tab")) {
          initSwiperWithCustomPagination(swiperElement, config);
        } else {
          new Swiper(swiperElement, config);
        }
      } catch (error) {
        console.error('Failed to initialize Swiper:', error);
      }
    });
  }

  function initSwiperWithCustomPagination(swiperElement, config) {
    // Custom pagination logic for tabbed swipers
    new Swiper(swiperElement, config);
  }

  window.addEventListener("load", initSwiper);
}

// Initialize when slider component mounts
initSwiperSliders();

/**
 * Correct scrolling position for URLs with hash links
 * Use with: Any component that has anchor links
 */
function initHashScrollCorrection() {
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      const targetElement = document.querySelector(window.location.hash);
      if (targetElement) {
        setTimeout(() => {
          let scrollMarginTop = getComputedStyle(targetElement).scrollMarginTop;
          window.scrollTo({
            top: targetElement.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });
}

// Initialize when component with hash links mounts
initHashScrollCorrection();

/**
 * Cleanup functions for components that need to remove event listeners
 * Use these when components are unmounted/destroyed
 */

// Cleanup for scroll effects
function cleanupScrollEffects() {
  // Remove scroll event listeners if needed
  document.removeEventListener('scroll', toggleScrolled);
  window.removeEventListener('load', toggleScrolled);
}

// Cleanup for mobile navigation
function cleanupMobileNavigation() {
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.removeEventListener('click', mobileNavToggle);
  }
}

// Cleanup for typed animation
function cleanupTypedAnimation(typedInstance) {
  if (typedInstance && typeof typedInstance.destroy === 'function') {
    typedInstance.destroy();
  }
}

// Cleanup for swiper instances
function cleanupSwipers() {
  document.querySelectorAll('.swiper').forEach(swiperEl => {
    if (swiperEl.swiper) {
      swiperEl.swiper.destroy(true, true);
    }
  });
}

/**
   * Typed.js initialization for typing animation
   * Use with: Hero section or any component with typing effect
   * Requires: Typed.js library to be loaded
   */
  function initTypedAnimation(selector = '.typed') {
    const selectTyped = document.querySelector(selector);
    
    if (selectTyped && typeof Typed !== 'undefined') {
      let typed_strings = selectTyped.getAttribute('data-typed-items');
      if (typed_strings) {
        typed_strings = typed_strings.split(',');
        return new Typed(selector, {
          strings: typed_strings,
          loop: true,
          typeSpeed: 100,
          backSpeed: 50,
          backDelay: 2000
        });
      }
    } else if (!selectTyped) {
      console.warn(`Typed element with selector "${selector}" not found`);
    } else {
      console.warn('Typed.js library not loaded - typing animation disabled');
    }
    return null;
  }

  // Initialize when hero component mounts
  const typedInstance = initTypedAnimation('.typed');