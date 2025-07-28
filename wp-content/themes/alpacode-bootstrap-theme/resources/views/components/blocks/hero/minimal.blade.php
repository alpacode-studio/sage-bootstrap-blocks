{{-- Minimal Hero Component --}}
<section id="hero-minimal" class="hero-minimal section">
  <div class="container">
    <div class="row min-vh-100 align-items-center justify-content-center">
      <div class="col-lg-8 text-center">
        <h1 class="display-2 fw-bold mb-4" data-aos="fade-up">
          Transform Your Business
        </h1>
        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">
          Simple, powerful solutions that help you grow faster and achieve more.
        </p>
        <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
          <a href="#" class="btn btn-primary btn-lg me-3">Get Started</a>
          <a href="#" class="btn btn-outline-secondary btn-lg">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.hero-minimal {
  background: linear-gradient(135deg, var(--bs-light) 0%, var(--bs-white) 100%);
}

.hero-minimal .btn {
  border-radius: 50px;
  padding: 12px 30px;
  transition: all 0.3s ease;
}

.hero-minimal .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}
</style>