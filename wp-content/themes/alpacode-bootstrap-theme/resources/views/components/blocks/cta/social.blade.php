{{-- Social Proof CTA Component --}}
<section id="cta-social-proof" class="cta-social-proof section py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="social-proof-card card border-0 shadow-lg" data-aos="fade-up">
          <div class="card-body p-5">
            
            {{-- Trust Indicators --}}
            <div class="trust-indicators text-center mb-4">
              <div class="row g-3">
                <div class="col-md-3 col-6">
                  <div class="trust-item">
                    <div class="trust-number h3 text-primary mb-1">50K+</div>
                    <small class="text-muted">Happy Customers</small>
                  </div>
                </div>
                <div class="col-md-3 col-6">
                  <div class="trust-item">
                    <div class="trust-number h3 text-success mb-1">4.9★</div>
                    <small class="text-muted">Average Rating</small>
                  </div>
                </div>
                <div class="col-md-3 col-6">
                  <div class="trust-item">
                    <div class="trust-number h3 text-info mb-1">99%</div>
                    <small class="text-muted">Success Rate</small>
                  </div>
                </div>
                <div class="col-md-3 col-6">
                  <div class="trust-item">
                    <div class="trust-number h3 text-warning mb-1">24/7</div>
                    <small class="text-muted">Support</small>
                  </div>
                </div>
              </div>
            </div>
            
            {{-- Main CTA Content --}}
            <div class="text-center mb-4">
              <h2 class="display-6 fw-bold mb-3">Join the Success Stories</h2>
              <p class="fs-5 text-muted mb-4">Trusted by industry leaders and growing businesses worldwide</p>
            </div>
            
            {{-- Customer Avatars --}}
            <div class="customer-avatars d-flex justify-content-center mb-4">
              <div class="avatar-stack">
                <div class="avatar-item">
                  <div class="avatar-placeholder bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-fill"></i>
                  </div>
                </div>
                <div class="avatar-item">
                  <div class="avatar-placeholder bg-success text-white rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-fill"></i>
                  </div>
                </div>
                <div class="avatar-item">
                  <div class="avatar-placeholder bg-info text-white rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-fill"></i>
                  </div>
                </div>
                <div class="avatar-item">
                  <div class="avatar-placeholder bg-warning text-white rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-fill"></i>
                  </div>
                </div>
                <div class="avatar-item">
                  <div class="avatar-more bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center">
                    <small class="fw-bold">+5K</small>
                  </div>
                </div>
              </div>
            </div>
            
            {{-- CTA Actions --}}
            <div class="text-center">
              <a href="#" class="btn btn-primary btn-lg me-3">
                <i class="bi bi-rocket me-2"></i>Start Your Success Story
              </a>
              <a href="#" class="btn btn-outline-secondary btn-lg">
                <i class="bi bi-chat-quote me-2"></i>Read Reviews
              </a>
            </div>
            
            {{-- Recent Activity --}}
            <div class="recent-activity mt-5 pt-4 border-top">
              <div class="activity-items">
                <div class="activity-item d-flex align-items-center justify-content-between p-3 bg-light rounded mb-2">
                  <div class="d-flex align-items-center">
                    <div class="activity-dot bg-success rounded-circle me-3"></div>
                    <span>Sarah from New York just signed up</span>
                  </div>
                  <small class="text-muted">2 min ago</small>
                </div>
                <div class="activity-item d-flex align-items-center justify-content-between p-3 bg-light rounded mb-2">
                  <div class="d-flex align-items-center">
                    <div class="activity-dot bg-primary rounded-circle me-3"></div>
                    <span>Mike from California upgraded to Pro</span>
                  </div>
                  <small class="text-muted">5 min ago</small>
                </div>
                <div class="activity-item d-flex align-items-center justify-content-between p-3 bg-light rounded">
                  <div class="d-flex align-items-center">
                    <div class="activity-dot bg-info rounded-circle me-3"></div>
                    <span>Emma from London started free trial</span>
                  </div>
                  <small class="text-muted">8 min ago</small>
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
.cta-social-proof .social-proof-card {
  border-radius: 1.5rem;
  background: linear-gradient(135deg, var(--bs-white), var(--bs-gray-50));
}

.cta-social-proof .trust-item {
  padding: 1rem;
  border-radius: 0.5rem;
  transition: all 0.3s ease;
}

.cta-social-proof .trust-item:hover {
  background: var(--bs-white);
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.cta-social-proof .avatar-stack {
  display: flex;
  align-items: center;
}

.cta-social-proof .avatar-item {
  margin-right: -10px;
  position: relative;
}

.cta-social-proof .avatar-placeholder,
.cta-social-proof .avatar-more {
  width: 50px;
  height: 50px;
  border: 3px solid white;
  font-size: 1.2rem;
  transition: all 0.3s ease;
}

.cta-social-proof .avatar-placeholder:hover,
.cta-social-proof .avatar-more:hover {
  transform: scale(1.1);
  z-index: 10;
}

.cta-social-proof .activity-dot {
  width: 8px;
  height: 8px;
  animation: pulse 2s infinite;
}

.cta-social-proof .btn {
  border-radius: 50px;
  padding: 15px 30px;
  transition: all 0.3s ease;
}

.cta-social-proof .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

@media (max-width: 768px) {
  .cta-social-proof .text-center .btn {
    display: block;
    width: 100%;
    margin-bottom: 1rem;
  }
  
  .cta-social-proof .text-center .btn.me-3 {
    margin-right: 0 !important;
  }
}
</style>