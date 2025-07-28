{{-- Video Background Hero Component --}}
<section id="hero-video" class="hero-video section position-relative">
  <div class="video-background">
    <video autoplay muted loop class="w-100 h-100 object-fit-cover">
      <source src="resources/videos/hero-bg.mp4" type="video/mp4">
    </video>
    <div class="video-overlay"></div>
  </div>
  
  <div class="container position-relative">
    <div class="row min-vh-100 align-items-center">
      <div class="col-lg-8 text-white">
        <h1 class="display-3 fw-bold mb-4" data-aos="fade-right">
          Innovation Starts Here
        </h1>
        <p class="fs-4 mb-5" data-aos="fade-right" data-aos-delay="200">
          Experience the future of technology with our cutting-edge solutions.
        </p>
        <div class="hero-actions" data-aos="fade-right" data-aos-delay="400">
          <a href="#" class="btn btn-light btn-lg me-3">
            <i class="bi bi-play-circle me-2"></i>Watch Demo
          </a>
          <a href="#" class="btn btn-outline-light btn-lg">
            <i class="bi bi-arrow-right me-2"></i>Explore Features
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.hero-video {
  overflow: hidden;
}

.hero-video .video-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.hero-video .video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}

.hero-video .btn {
  border-radius: 50px;
  padding: 15px 30px;
  transition: all 0.3s ease;
}

.hero-video .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}
</style>