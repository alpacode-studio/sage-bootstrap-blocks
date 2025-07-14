// Import file assets
import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Import CSS
import '@styles/app.css';

// Import and make libraries globally available for instant.js
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import AOS from 'aos';
import GLightbox from 'glightbox';
import { Swiper } from 'swiper';
import Typed from 'typed.js';

// Import CSS for libraries
import 'aos/dist/aos.css';
import 'glightbox/dist/css/glightbox.min.css';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Make libraries globally available for instant.js
window.AOS = AOS;
window.GLightbox = GLightbox;
window.Swiper = Swiper;
window.Typed = Typed;

// Handle PureCounter with error handling
import('@srexi/purecounterjs').then(module => {
  const PureCounter = module.default || module.PureCounter || module;
  window.PureCounter = PureCounter;
  
  // Now import instant.js after libraries are available
  import('./instant.js');
}).catch(error => {
  console.warn('PureCounter not available:', error);
  // Create a dummy PureCounter for instant.js
  window.PureCounter = function() { console.warn('PureCounter not loaded'); };
  
  // Import instant.js anyway
  import('./instant.js');
});

console.log('✅ App.js loaded - libraries available globally');