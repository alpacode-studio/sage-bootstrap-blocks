{{-- Process Steps Services Component --}}
<section id="services-process" class="services-process section py-5 bg-light">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Our Process</h2>
        <p class="lead text-muted">A proven methodology that delivers exceptional results every time.</p>
      </div>
    </div>

    {{-- Process Steps --}}
    <div class="row">
      
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="process-step text-center">
          <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3">
            <span class="fw-bold">01</span>
          </div>
          <h4 class="step-title mb-3">Discovery</h4>
          <p class="text-muted">We start by understanding your business goals, challenges, and requirements through detailed consultation.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="process-step text-center">
          <div class="step-number bg-success text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3">
            <span class="fw-bold">02</span>
          </div>
          <h4 class="step-title mb-3">Planning</h4>
          <p class="text-muted">We create a comprehensive strategy and roadmap tailored to your specific needs and objectives.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="process-step text-center">
          <div class="step-number bg-info text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3">
            <span class="fw-bold">03</span>
          </div>
          <h4 class="step-title mb-3">Development</h4>
          <p class="text-muted">Our expert team brings your vision to life using cutting-edge technologies and best practices.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="process-step text-center">
          <div class="step-number bg-warning text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3">
            <span class="fw-bold">04</span>
          </div>
          <h4 class="step-title mb-3">Launch</h4>
          <p class="text-muted">We deploy your solution and provide ongoing support to ensure optimal performance and success.</p>
        </div>
      </div>
      
    </div>

    {{-- CTA Section --}}
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="500">
        <div class="cta-card bg-primary text-white rounded-4 p-5">
          <h3 class="mb-3">Ready to Start Your Project?</h3>
          <p class="mb-4">Let's discuss your requirements and create something amazing together.</p>
          <a href="#" class="btn btn-light btn-lg">
            <i class="bi bi-arrow-right me-2"></i>Get Started Today
          </a>
        </div>
      </div>
    </div>
    
  </div>
</section>

<style>
.services-process .step-number {
  width: 80px;
  height: 80px;
  font-size: 1.5rem;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.services-process .process-step:hover .step-number {
  transform: scale(1.1);
}

.services-process .step-title {
  color: var(--bs-dark);
  font-weight: 600;
}

.services-process .cta-card {
  background: linear-gradient(135deg, var(--bs-primary), var(--bs-info)) !important;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.services-process .btn {
  border-radius: 50px;
  transition: all 0.3s ease;
}

.services-process .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
}
</style>