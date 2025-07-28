{{-- Features Icon Grid Component --}}
<section id="features-icon-grid" class="features-icon-grid section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Powerful Features</h2>
        <p class="lead text-muted">Everything you need to build amazing digital experiences.</p>
      </div>
    </div>

    {{-- Features Grid --}}
    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card text-center h-100">
          <div class="feature-icon mb-4">
            <div class="icon-wrapper bg-primary bg-opacity-10 text-primary">
              <i class="bi bi-lightning-charge fs-1"></i>
            </div>
          </div>
          <h4 class="feature-title mb-3">Lightning Fast</h4>
          <p class="feature-description text-muted">Built for speed with optimized performance and lightning-fast load times that keep your users engaged.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card text-center h-100">
          <div class="feature-icon mb-4">
            <div class="icon-wrapper bg-success bg-opacity-10 text-success">
              <i class="bi bi-shield-check fs-1"></i>
            </div>
          </div>
          <h4 class="feature-title mb-3">Secure & Reliable</h4>
          <p class="feature-description text-muted">Enterprise-grade security with 99.9% uptime guarantee and automatic backups to keep your data safe.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card text-center h-100">
          <div class="feature-icon mb-4">
            <div class="icon-wrapper bg-info bg-opacity-10 text-info">
              <i class="bi bi-phone fs-1"></i>
            </div>
          </div>
          <h4 class="feature-title mb-3">Mobile First</h4>
          <p class="feature-description text-muted">Responsive design that looks perfect on all devices, from smartphones to desktop computers.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-card text-center h-100">
          <div class="feature-icon mb-4">
            <div class="icon-wrapper bg-warning bg-opacity-10 text-warning">
              <i class="bi bi-gear fs-1"></i>
            </div>
          </div>
          <h4 class="feature-title mb-3">Easy to Customize</h4>
          <p class="feature-description text-muted">Flexible configuration options and intuitive controls make customization simple and powerful.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="feature-card text-center h-100">
          <div class="feature-icon mb-4">
            <div class="icon-wrapper bg-danger bg-opacity-10 text-danger">
              <i class="bi bi-headset fs-1"></i>
            </div>
          </div>
          <h4 class="feature-title mb-3">24/7 Support</h4>
          <p class="feature-description text-muted">Our expert support team is available around the clock to help you succeed with fast response times.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="feature-card text-center h-100">
          <div class="feature-icon mb-4">
            <div class="icon-wrapper bg-secondary bg-opacity-10 text-secondary">
              <i class="bi bi-graph-up-arrow fs-1"></i>
            </div>
          </div>
          <h4 class="feature-title mb-3">Analytics Included</h4>
          <p class="feature-description text-muted">Comprehensive analytics and reporting tools to track performance and make data-driven decisions.</p>
        </div>
      </div>
      
    </div>
    
  </div>
</section>

<style>
.features-icon-grid .feature-card {
  padding: 2rem 1.5rem;
  transition: all 0.3s ease;
}

.features-icon-grid .feature-card:hover {
  transform: translateY(-10px);
}

.features-icon-grid .icon-wrapper {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  transition: all 0.3s ease;
}

.features-icon-grid .feature-card:hover .icon-wrapper {
  transform: scale(1.1);
}

.features-icon-grid .feature-title {
  color: var(--bs-dark);
  font-weight: 600;
}

.features-icon-grid .feature-description {
  line-height: 1.6;
}
</style>