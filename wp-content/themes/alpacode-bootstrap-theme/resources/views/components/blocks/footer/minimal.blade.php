{{-- Minimal Footer Component --}}
<footer id="footer-minimal" class="footer-minimal bg-dark text-white py-4">
  <div class="container">
    <div class="row align-items-center">
      
      {{-- Logo & Copyright --}}
      <div class="col-md-6 text-center text-md-start">
        <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2 mb-md-0">
          <span class="fw-bold me-2">MyWebsite</span>
          <span class="text-muted">© 2024 All Rights Reserved</span>
        </div>
      </div>
      
      {{-- Social Links --}}
      <div class="col-md-6 text-center text-md-end">
        <div class="social-links">
          <a href="#" class="text-white me-3">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="#" class="text-white me-3">
            <i class="bi bi-twitter-x"></i>
          </a>
          <a href="#" class="text-white me-3">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" class="text-white">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
      </div>
      
    </div>
  </div>
</footer>

<style>
.footer-minimal .social-links a {
  font-size: 1.2rem;
  transition: all 0.3s ease;
}

.footer-minimal .social-links a:hover {
  color: var(--bs-primary) !important;
  transform: translateY(-2px);
}
</style>