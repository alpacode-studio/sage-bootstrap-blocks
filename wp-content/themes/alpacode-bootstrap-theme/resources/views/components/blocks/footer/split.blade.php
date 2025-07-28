{{-- Split CTA Footer Component --}}
<footer id="footer-split-cta" class="footer-split-cta">
  
  {{-- CTA Section --}}
  <div class="cta-section bg-primary text-white py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <h2 class="mb-3">Ready to Get Started?</h2>
          <p class="mb-0 fs-5">Transform your business with our innovative solutions. Join thousands of satisfied customers.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="#" class="btn btn-light btn-lg me-3">
            <i class="bi bi-rocket me-2"></i>Get Started
          </a>
          <a href="#" class="btn btn-outline-light btn-lg">
            <i class="bi bi-chat me-2"></i>Contact Us
          </a>
        </div>
      </div>
    </div>
  </div>
  
  {{-- Footer Content --}}
  <div class="footer-content bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        
        {{-- Company Column --}}
        <div class="col-lg-4 mb-4 mb-lg-0">
          <h4 class="mb-3">MyWebsite</h4>
          <p class="text-muted mb-3">We create exceptional digital experiences that help businesses grow and succeed in the modern world.</p>
          
          {{-- Contact Info --}}
          <div class="contact-list">
            <div class="contact-item d-flex align-items-center mb-2">
              <i class="bi bi-geo-alt text-primary me-3"></i>
              <span>123 Business Street, New York, NY 10001</span>
            </div>
            <div class="contact-item d-flex align-items-center mb-2">
              <i class="bi bi-telephone text-primary me-3"></i>
              <span>+1 (555) 123-4567</span>
            </div>
            <div class="contact-item d-flex align-items-center">
              <i class="bi bi-envelope text-primary me-3"></i>
              <span>hello@mywebsite.com</span>
            </div>
          </div>
        </div>
        
        {{-- Services Column --}}
        <div class="col-lg-2 col-md-3 col-6 mb-4 mb-lg-0">
          <h5 class="mb-3">Services</h5>
          <ul class="list-unstyled footer-links">
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Development</a></li>
            <li><a href="#">SEO Optimization</a></li>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">Consulting</a></li>
          </ul>
        </div>
        
        {{-- Company Column --}}
        <div class="col-lg-2 col-md-3 col-6 mb-4 mb-lg-0">
          <h5 class="mb-3">Company</h5>
          <ul class="list-unstyled footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        
        {{-- Support Column --}}
        <div class="col-lg-2 col-md-3 col-6 mb-4 mb-lg-0">
          <h5 class="mb-3">Support</h5>
          <ul class="list-unstyled footer-links">
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Documentation</a></li>
            <li><a href="#">API Reference</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Status</a></li>
          </ul>
        </div>
        
        {{-- Social Column --}}
        <div class="col-lg-2 col-md-3 col-6">
          <h5 class="mb-3">Connect</h5>
          <div class="social-grid">
            <a href="#" class="social-link">
              <i class="bi bi-facebook"></i>
              <span>Facebook</span>
            </a>
            <a href="#" class="social-link">
              <i class="bi bi-twitter-x"></i>
              <span>Twitter</span>
            </a>
            <a href="#" class="social-link">
              <i class="bi bi-instagram"></i>
              <span>Instagram</span>
            </a>
            <a href="#" class="social-link">
              <i class="bi bi-linkedin"></i>
              <span>LinkedIn</span>
            </a>
            <a href="#" class="social-link">
              <i class="bi bi-youtube"></i>
              <span>YouTube</span>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  {{-- Copyright Bar --}}
  <div class="copyright-bar bg-black text-white py-3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <p class="mb-0">© 2024 MyWebsite. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <div class="footer-legal">
            <a href="#" class="text-muted me-3">Privacy Policy</a>
            <a href="#" class="text-muted me-3">Terms of Service</a>
            <a href="#" class="text-muted">Cookie Policy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</footer>

<style>
.footer-split-cta .cta-section {
  background: linear-gradient(135deg, var(--bs-primary), var(--bs-info)) !important;
}

.footer-split-cta .btn {
  border-radius: 50px;
  padding: 12px 30px;
  transition: all 0.3s ease;
}

.footer-split-cta .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
}

.footer-split-cta .footer-links {
  list-style: none;
  padding: 0;
}

.footer-split-cta .footer-links li {
  margin-bottom: 0.5rem;
}

.footer-split-cta .footer-links a {
  color: var(--bs-gray-400);
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-split-cta .footer-links a:hover {
  color: var(--bs-primary);
}

.footer-split-cta .social-grid {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.footer-split-cta .social-link {
  display: flex;
  align-items: center;
  color: var(--bs-gray-400);
  text-decoration: none;
  transition: all 0.3s ease;
}

.footer-split-cta .social-link:hover {
  color: var(--bs-primary);
  transform: translateX(5px);
}

.footer-split-cta .social-link i {
  width: 20px;
  margin-right: 0.5rem;
}

.footer-split-cta .contact-item {
  font-size: 0.9rem;
  color: var(--bs-gray-400);
}

.footer-split-cta .footer-legal a {
  color: var(--bs-gray-500);
  text-decoration: none;
  font-size: 0.9rem;
  transition: color 0.3s ease;
}

.footer-split-cta .footer-legal a:hover {
  color: var(--bs-light);
}

@media (max-width: 768px) {
  .footer-split-cta .cta-section .btn {
    width: 100%;
    margin-bottom: 1rem;
  }
  
  .footer-split-cta .cta-section .btn:last-child {
    margin-bottom: 0;
  }
}
</style>