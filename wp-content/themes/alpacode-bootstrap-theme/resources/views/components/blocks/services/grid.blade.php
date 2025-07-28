{{-- Icon Grid Services Component --}}
<section id="services-icon-grid" class="services-icon-grid section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Our Services</h2>
        <p class="lead text-muted">Comprehensive solutions tailored to your business needs.</p>
      </div>
    </div>

    {{-- Services Grid --}}
    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="service-icon mb-3">
            <div class="icon-circle bg-primary bg-opacity-10 text-primary mx-auto">
              <i class="bi bi-code-slash fs-2"></i>
            </div>
          </div>
          <h4 class="card-title mb-3">Web Development</h4>
          <p class="card-text text-muted">Custom websites and web applications built with modern technologies and best practices.</p>
          <a href="#" class="btn btn-outline-primary">Learn More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="service-icon mb-3">
            <div class="icon-circle bg-success bg-opacity-10 text-success mx-auto">
              <i class="bi bi-phone fs-2"></i>
            </div>
          </div>
          <h4 class="card-title mb-3">Mobile Apps</h4>
          <p class="card-text text-muted">Native and cross-platform mobile applications for iOS and Android devices.</p>
          <a href="#" class="btn btn-outline-success">Learn More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="service-icon mb-3">
            <div class="icon-circle bg-info bg-opacity-10 text-info mx-auto">
              <i class="bi bi-palette fs-2"></i>
            </div>
          </div>
          <h4 class="card-title mb-3">UI/UX Design</h4>
          <p class="card-text text-muted">User-centered design solutions that create engaging and intuitive experiences.</p>
          <a href="#" class="btn btn-outline-info">Learn More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="service-icon mb-3">
            <div class="icon-circle bg-warning bg-opacity-10 text-warning mx-auto">
              <i class="bi bi-megaphone fs-2"></i>
            </div>
          </div>
          <h4 class="card-title mb-3">Digital Marketing</h4>
          <p class="card-text text-muted">Strategic marketing campaigns that increase your online visibility and drive results.</p>
          <a href="#" class="btn btn-outline-warning">Learn More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="service-icon mb-3">
            <div class="icon-circle bg-danger bg-opacity-10 text-danger mx-auto">
              <i class="bi bi-cloud fs-2"></i>
            </div>
          </div>
          <h4 class="card-title mb-3">Cloud Solutions</h4>
          <p class="card-text text-muted">Scalable cloud infrastructure and migration services for modern businesses.</p>
          <a href="#" class="btn btn-outline-danger">Learn More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="service-icon mb-3">
            <div class="icon-circle bg-secondary bg-opacity-10 text-secondary mx-auto">
              <i class="bi bi-headset fs-2"></i>
            </div>
          </div>
          <h4 class="card-title mb-3">Support & Maintenance</h4>
          <p class="card-text text-muted">Ongoing support and maintenance services to keep your systems running smoothly.</p>
          <a href="#" class="btn btn-outline-secondary">Learn More</a>
        </div>
      </div>
      
    </div>
    
  </div>
</section>

<style>
.services-icon-grid .service-card {
  border-radius: 1rem;
  transition: all 0.3s ease;
}

.services-icon-grid .service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1) !important;
}

.services-icon-grid .icon-circle {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  transition: all 0.3s ease;
}

.services-icon-grid .service-card:hover .icon-circle {
  transform: scale(1.1);
}

.services-icon-grid .btn {
  border-radius: 50px;
  transition: all 0.3s ease;
}

.services-icon-grid .btn:hover {
  transform: translateY(-2px);
}
</style>