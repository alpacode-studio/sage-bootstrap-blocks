// Import file assets
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Import CSS
import '@styles/app.css';

// Import libraries in the same way they were loaded before
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import AOS from 'aos';
import GLightbox from 'glightbox';
import { Swiper } from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import Typed from 'typed.js';

// Import CSS
import 'aos/dist/aos.css';
import 'glightbox/dist/css/glightbox.min.css';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Configure Swiper modules
Swiper.use([Navigation, Pagination, Autoplay]);

// Make libraries globally available (exactly like the original)
window.AOS = AOS;
window.GLightbox = GLightbox;
window.Swiper = Swiper;
window.Typed = Typed;

// Handle PureCounter properly
try {
  import('@srexi/purecounterjs').then(module => {
    // Try different export patterns
    const PureCounter = module.default || module.PureCounter || module;
    
    if (typeof PureCounter === 'function') {
      window.PureCounter = PureCounter;
    } else {
      // If it's not a constructor, create a wrapper
      window.PureCounter = function(options) {
        if (PureCounter && PureCounter.start) {
          return PureCounter.start(options);
        }
        console.warn('PureCounter not available as constructor');
      };
    }
  }).catch(error => {
    console.warn('PureCounter not available:', error);
    // Create a dummy PureCounter
    window.PureCounter = function() { 
      console.warn('PureCounter not loaded - feature disabled');
    };
  });
} catch (error) {
  console.warn('PureCounter import failed:', error);
  window.PureCounter = function() { 
    console.warn('PureCounter not loaded - feature disabled');
  };
}

// Import instant.js immediately
import('./instant.js');

console.log('✅ App.js loaded - libraries available globally');