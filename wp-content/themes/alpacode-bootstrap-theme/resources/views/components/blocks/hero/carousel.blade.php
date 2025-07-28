{{-- Carousel Hero Component --}}
<section id="hero-carousel" class="hero-carousel section">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    
    {{-- Indicators --}}
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    
    {{-- Slides --}}
    <div class="carousel-inner">
      
      {{-- Slide 1 --}}
      <div class="carousel-item active">
        <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('resources/images/hero/slide1.webp');">
          <div class="container">
            <div class="row min-vh-100 align-items-center">
              <div class="col-lg-8 text-white">
                <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">
                  Innovation Meets Excellence
                </h1>
                <p class="fs-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                  Discover solutions that transform your business operations.
                </p>
                <a href="#" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-rocket me-2"></i>Get Started
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {{-- Slide 2 --}}
      <div class="carousel-item">
        <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('resources/images/hero/slide2.webp');">
          <div class="container">
            <div class="row min-vh-100 align-items-center">
              <div class="col-lg-8 text-white">
                <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">
                  Scale Your Success
                </h1>
                <p class="fs-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                  Join thousands of companies growing with our platform.
                </p>
                <a href="#" class="btn btn-success btn-lg" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-graph-up me-2"></i>View Results
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {{-- Slide 3 --}}
      <div class="carousel-item">
        <div class="hero-slide" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('resources/images/hero/slide3.webp');">
          <div class="container">
            <div class="row min-vh-100 align-items-center">
              <div class="col-lg-8 text-white">
                <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">
                  Support That Matters
                </h1>
                <p class="fs-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                  24/7 expert support to help you succeed every step of the way.
                </p>
                <a href="#" class="btn btn-info btn-lg" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-headset me-2"></i>Contact Support
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    {{-- Controls --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    
  </div>
</section>

<style>
.hero-carousel .hero-slide {
  background-size: cover !important;
  background-position: center !important;
  background-repeat: no-repeat !important;
}

.hero-carousel .carousel-indicators {
  bottom: 30px;
}

.hero-carousel .carousel-indicators button {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  border: 2px solid white;
  background: transparent;
  margin: 0 5px;
  transition: all 0.3s ease;
}

.hero-carousel .carousel-indicators button.active {
  background: white;
  transform: scale(1.2);
}

.hero-carousel .btn {
  border-radius: 50px;
  padding: 15px 30px;
  transition: all 0.3s ease;
}

.hero-carousel .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

.hero-carousel .carousel-control-prev,
.hero-carousel .carousel-control-next {
  width: 5%;
  opacity: 0.8;
  transition: opacity 0.3s ease;
}

.hero-carousel .carousel-control-prev:hover,
.hero-carousel .carousel-control-next:hover {
  opacity: 1;
}
</style>