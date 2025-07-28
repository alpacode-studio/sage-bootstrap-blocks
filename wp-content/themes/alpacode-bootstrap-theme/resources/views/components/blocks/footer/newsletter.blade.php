{{-- Newsletter Footer Component --}}
<footer id="footer-newsletter" class="footer-newsletter bg-primary text-white">
  
  {{-- Newsletter Section --}}
  <div class="newsletter-section py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h3 class="mb-2">Stay Updated</h3>
          <p class="mb-0">Subscribe to our newsletter for the latest news and updates.</p>
        </div>
        <div class="col-lg-6">
          <form class="newsletter-form">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Enter your email" required>
              <button class="btn btn-light" type="submit">
                <i class="bi bi-send me-2"></i>Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  {{-- Footer Links --}}
  <div class="footer-links bg-dark py-4">
    <div class="container">
      <div class="row">
        
        {{-- Company Info --}}
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="mb-3">MyWebsite</h5>
          <p class="text-muted mb-3">Building amazing digital experiences for modern businesses.</p>
          <div class="contact-info">
            <p class="mb-1"><i class="bi bi-geo-alt me-2"></i>123 Business St, NY</p>
            <p class="mb-1"><i class="bi bi-telephone me-2"></i>+1 234 567 8900</p>
            <p class="mb-0"><i class="bi bi-envelope me-2"></i>info@mywebsite.com</p>
          </div>
        </div>
        
        {{-- Quick Links --}}
        <div class="col-lg-2 col-md-3 col-6">
          <h6 class="mb-3">Quick Links</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">About Us</a></li>
            <li><a href="#" class="text-muted">Services</a></li>
            <li><a href="#" class="text-muted">Portfolio</a></li>
            <li><a href="#" class="text-muted">Contact</a></li>
          </ul>
        </div>
        
        {{-- Services --}}
        <div class="col-lg-2 col-md-3 col-6">
          <h6 class="mb-3">Services</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Web Design</a></li>
            <li><a href="#" class="text-muted">Development</a></li>
            <li><a href="#" class="text-muted">SEO</a></li>
            <li><a href="#" class="text-muted">Marketing</a></li>
          </ul>
        </div>
        
        {{-- Support --}}
        <div class="col-lg-2 col-md-3 col-6">
          <h6 class="mb-3">Support</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Help Center</a></li>
            <li><a href="#" class="text-muted">Documentation</a></li>
            <li><a href="#" class="text-muted">Privacy Policy</a></li>
            <li><a href="#" class="text-muted">Terms of Service</a></li>
          </ul>
        </div>
        
        {{-- Social Links --}}
        <div class="col-lg-3 col-md-3 col-6">
          <h6 class="mb-3">Follow Us</h6>
          <div class="social-icons">
            <a href="#" class="btn btn-outline-light btn-sm me-2 mb-2">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm me-2 mb-2">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm me-2 mb-2">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm mb-2">
              <i class="bi bi-linkedin"></i>
            </a>
          </div>
        </div>
        
      </div>
      
      {{-- Copyright --}}
      <hr class="my-4">
      <div class="text-center">
        <p class="text-muted mb-0">© 2024 MyWebsite. All Rights Reserved.</p>
      </div>
    </div>
  </div>
  
</footer>

<style>
.footer-newsletter .newsletter-form .input-group {
  border-radius: 50px;
  overflow: hidden;
}

.footer-newsletter .newsletter-form .form-control {
  border: none;
  padding: 15px 20px;
}

.footer-newsletter .newsletter-form .btn {
  border: none;
  padding: 15px 25px;
  font-weight: 500;
}

.footer-newsletter .footer-links a {
  color: var(--bs-gray-400);
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-newsletter .footer-links a:hover {
  color: var(--bs-primary);
}

.footer-newsletter .social-icons .btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.footer-newsletter .social-icons .btn:hover {
  background-color: var(--bs-light);
  color: var(--bs-dark);
  transform: translateY(-2px);
}

.footer-newsletter .contact-info {
  font-size: 0.9rem;
}
</style>