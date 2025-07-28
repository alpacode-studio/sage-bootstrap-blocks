{{-- Split Screen Hero Component --}}
<section id="hero-split" class="hero-split section">
  <div class="container-fluid p-0">
    <div class="row g-0 min-vh-100">
      
      {{-- Left Content --}}
      <div class="col-lg-6 d-flex align-items-center bg-primary text-white">
        <div class="split-content p-5">
          <h1 class="display-4 fw-bold mb-4" data-aos="fade-right">
            Ready to Scale Your Business?
          </h1>
          <p class="fs-5 mb-4" data-aos="fade-right" data-aos-delay="200">
            Join thousands of companies already growing with our platform.
          </p>
          <div class="stats-row mb-4" data-aos="fade-right" data-aos-delay="400">
            <div class="d-flex gap-4">
              <div class="stat-item">
                <div class="h2 fw-bold">500+</div>
                <small>Companies</small>
              </div>
              <div class="stat-item">
                <div class="h2 fw-bold">99%</div>
                <small>Satisfaction</small>
              </div>
              <div class="stat-item">
                <div class="h2 fw-bold">24/7</div>
                <small>Support</small>
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-light btn-lg" data-aos="fade-right" data-aos-delay="600">
            <i class="bi bi-arrow-right me-2"></i>Get Started Today
          </a>
        </div>
      </div>
      
      {{-- Right Image --}}
      <div class="col-lg-6">
        <div class="split-image h-100 position-relative" data-aos="fade-left">
          <img src="resources/images/hero/business-team.webp" class="w-100 h-100 object-fit-cover" alt="Business Team">
          <div class="image-overlay d-flex align-items-center justify-content-center">
            <a href="https://youtube.com/watch?v=demo" class="play-btn glightbox">
              <i class="bi bi-play-fill"></i>
            </a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<style>
.hero-split .split-content {
  max-width: 500px;
  margin: 0 auto;
}

.hero-split .split-image {
  position: relative;
}

.hero-split .image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.hero-split .split-image:hover .image-overlay {
  opacity: 1;
}

.hero-split .play-btn {
  width: 80px;
  height: 80px;
  background: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--bs-primary);
  font-size: 2rem;
  text-decoration: none;
  transition: all 0.3s ease;
}

.hero-split .play-btn:hover {
  transform: scale(1.1);
  color: var(--bs-primary);
}

.hero-split .stat-item {
  text-align: center;
}

.hero-split .btn {
  border-radius: 50px;
  padding: 15px 30px;
  transition: all 0.3s ease;
}

.hero-split .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}
</style>