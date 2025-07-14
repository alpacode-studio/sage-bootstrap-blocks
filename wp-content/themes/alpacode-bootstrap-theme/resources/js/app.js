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

// Simple PureCounter fix - just create a working version
window.PureCounter = function(options = {}) {
  const counters = document.querySelectorAll('.purecounter');
  
  counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-purecounter-end') || counter.textContent);
    const duration = parseInt(counter.getAttribute('data-purecounter-duration') || 2000);
    const start = parseInt(counter.getAttribute('data-purecounter-start') || 0);
    
    let current = start;
    const increment = (target - start) / (duration / 16); // 60fps
    
    counter.textContent = current;
    
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      counter.textContent = Math.floor(current);
    }, 16);
  });
  
  console.log('✅ Custom PureCounter initialized');
};

// Import instant.js immediately
import('./instant-theme.js');

console.log('✅ App.js loaded - libraries available globally');