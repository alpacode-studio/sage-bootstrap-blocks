{{-- Countdown Offer CTA Component --}}
<section id="cta-countdown" class="cta-countdown section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="offer-card bg-dark text-white rounded-4 p-5 position-relative overflow-hidden" data-aos="fade-up">
          
          {{-- Background Pattern --}}
          <div class="offer-pattern position-absolute"></div>
          
          <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="offer-content position-relative">
                <div class="offer-badge bg-warning text-dark px-3 py-1 rounded-pill d-inline-block mb-3">
                  <i class="bi bi-lightning-fill me-1"></i>Limited Time
                </div>
                <h2 class="display-5 fw-bold mb-3">50% OFF Everything!</h2>
                <p class="fs-5 mb-4">Don't miss out on this exclusive offer. Get premium features at half the price.</p>
                <a href="#" class="btn btn-warning btn-lg">
                  <i class="bi bi-cart-plus me-2"></i>Claim Your Discount
                </a>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="countdown-timer text-center">
                <h5 class="mb-4">Offer Ends In:</h5>
                <div class="countdown-display d-flex justify-content-center gap-3">
                  <div class="time-unit">
                    <div class="time-number bg-warning text-dark rounded-3 p-3">
                      <span class="h2 fw-bold mb-0" id="days">00</span>
                    </div>
                    <small class="text-muted mt-2 d-block">Days</small>
                  </div>
                  <div class="time-unit">
                    <div class="time-number bg-warning text-dark rounded-3 p-3">
                      <span class="h2 fw-bold mb-0" id="hours">00</span>
                    </div>
                    <small class="text-muted mt-2 d-block">Hours</small>
                  </div>
                  <div class="time-unit">
                    <div class="time-number bg-warning text-dark rounded-3 p-3">
                      <span class="h2 fw-bold mb-0" id="minutes">00</span>
                    </div>
                    <small class="text-muted mt-2 d-block">Minutes</small>
                  </div>
                  <div class="time-unit">
                    <div class="time-number bg-warning text-dark rounded-3 p-3">
                      <span class="h2 fw-bold mb-0" id="seconds">00</span>
                    </div>
                    <small class="text-muted mt-2 d-block">Seconds</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.cta-countdown .offer-card {
  background: linear-gradient(135deg, var(--bs-dark), var(--bs-secondary)) !important;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

.cta-countdown .offer-pattern {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
  opacity: 0.3;
}

.cta-countdown .time-unit {
  min-width: 80px;
}

.cta-countdown .time-number {
  min-height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
  transition: all 0.3s ease;
}

.cta-countdown .time-number:hover {
  transform: scale(1.05);
}

.cta-countdown .btn {
  border-radius: 50px;
  padding: 15px 30px;
  transition: all 0.3s ease;
}

.cta-countdown .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(255, 193, 7, 0.4);
}

@media (max-width: 768px) {
  .cta-countdown .countdown-display {
    flex-wrap: wrap;
    gap: 1rem !important;
  }
  
  .cta-countdown .time-unit {
    min-width: 60px;
  }
  
  .cta-countdown .time-number {
    min-height: 60px;
  }
  
  .cta-countdown .time-number span {
    font-size: 1.5rem !important;
  }
}
</style>