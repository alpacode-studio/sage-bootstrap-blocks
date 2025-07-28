{{-- Features Comparison List Component --}}
<section id="features-comparison" class="features-comparison section py-5 bg-light">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Why Choose Us</h2>
        <p class="lead text-muted">See how we stack up against the competition with superior features and value.</p>
      </div>
    </div>

    <div class="row align-items-center">
      
      {{-- Image Column --}}
      <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
        <div class="comparison-image">
          <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDUwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjZjhmOWZhIiByeD0iMTAiLz4KPGNpcmNsZSBjeD0iMjUwIiBjeT0iMjAwIiByPSI2MCIgZmlsbD0iIzAwN2RmZiIvPgo8c3ZnIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiB4PSIyMjAiIHk9IjE3MCI+CjxwYXRoIGQ9Ik05IDEyTDExIDE0TDE1IDEwTTIxIDEyQzIxIDE2Ljk3MDYgMTYuOTcwNiAyMSAxMiAyMUM3LjAyOTQ0IDIxIDMgMTYuOTcwNiAzIDEyQzMgNy4wMjk0NCA3LjAyOTQ0IDMgMTIgM0MxNi45NzA2IDMgMjEgNy4wMjk0NCAyMSAxMloiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+Cjwvc3ZnPgo8L3N2Zz4=" class="img-fluid rounded-4 shadow-lg" alt="Feature Comparison">
        </div>
      </div>
      
      {{-- Features List Column --}}
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="features-list">
          
          <div class="feature-item d-flex align-items-start mb-4">
            <div class="feature-check bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
              <i class="bi bi-check2 fw-bold"></i>
            </div>
            <div class="feature-content">
              <h5 class="feature-title mb-2">Advanced Security</h5>
              <p class="feature-description text-muted mb-0">Multi-layer security with SSL encryption, two-factor authentication, and regular security audits.</p>
            </div>
          </div>

          <div class="feature-item d-flex align-items-start mb-4">
            <div class="feature-check bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
              <i class="bi bi-check2 fw-bold"></i>
            </div>
            <div class="feature-content">
              <h5 class="feature-title mb-2">Real-time Collaboration</h5>
              <p class="feature-description text-muted mb-0">Work together seamlessly with live editing, comments, and instant notifications for your team.</p>
            </div>
          </div>

          <div class="feature-item d-flex align-items-start mb-4">
            <div class="feature-check bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
              <i class="bi bi-check2 fw-bold"></i>
            </div>
            <div class="feature-content">
              <h5 class="feature-title mb-2">Unlimited Storage</h5>
              <p class="feature-description text-muted mb-0">Store as much as you need with unlimited cloud storage and automatic backup capabilities.</p>
            </div>
          </div>

          <div class="feature-item d-flex align-items-start mb-4">
            <div class="feature-check bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
              <i class="bi bi-check2 fw-bold"></i>
            </div>
            <div class="feature-content">
              <h5 class="feature-title mb-2">API Integration</h5>
              <p class="feature-description text-muted mb-0">Connect with 200+ popular tools and services through our comprehensive API ecosystem.</p>
            </div>
          </div>

          <div class="feature-item d-flex align-items-start mb-4">
            <div class="feature-check bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
              <i class="bi bi-check2 fw-bold"></i>
            </div>
            <div class="feature-content">
              <h5 class="feature-title mb-2">Priority Support</h5>
              <p class="feature-description text-muted mb-0">Get help when you need it with 24/7 priority support and dedicated success managers.</p>
            </div>
          </div>

          {{-- CTA Button --}}
          <div class="mt-4">
            <a href="#" class="btn btn-primary btn-lg">
              <i class="bi bi-arrow-right me-2"></i>Explore All Features
            </a>
          </div>
          
        </div>
      </div>
      
    </div>
    
  </div>
</section>

<style>
.features-comparison .comparison-image {
  position: relative;
}

.features-comparison .feature-check {
  width: 40px;
  height: 40px;
  font-size: 1.2rem;
}

.features-comparison .feature-title {
  color: var(--bs-dark);
  font-weight: 600;
}

.features-comparison .feature-description {
  line-height: 1.6;
}

.features-comparison .feature-item {
  transition: all 0.3s ease;
}

.features-comparison .feature-item:hover {
  transform: translateX(10px);
}

.features-comparison .btn {
  border-radius: 50px;
  transition: all 0.3s ease;
}

.features-comparison .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(var(--bs-primary-rgb), 0.3);
}
</style>