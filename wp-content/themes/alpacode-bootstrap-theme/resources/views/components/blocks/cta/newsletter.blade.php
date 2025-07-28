{{-- Newsletter Signup CTA Component --}}
<section id="cta-newsletter" class="cta-newsletter section py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="newsletter-card card border-0 shadow-lg" data-aos="fade-up">
          <div class="card-body p-5 text-center">
            <div class="newsletter-icon mb-4">
              <i class="bi bi-envelope-heart text-primary" style="font-size: 3rem;"></i>
            </div>
            <h3 class="card-title mb-3">Stay in the Loop</h3>
            <p class="text-muted mb-4">Get the latest updates, tips, and exclusive offers delivered straight to your inbox.</p>
            
            <form class="newsletter-form">
              <div class="input-group input-group-lg mb-3">
                <input type="email" class="form-control" placeholder="Enter your email address" required>
                <button class="btn btn-primary" type="submit">
                  <i class="bi bi-send me-2"></i>Subscribe
                </button>
              </div>
              <small class="text-muted">
                <i class="bi bi-shield-check me-1"></i>
                We respect your privacy. Unsubscribe at any time.
              </small>
            </form>
            
            <div class="newsletter-stats mt-4">
              <div class="row text-center">
                <div class="col-4">
                  <div class="stat-number h5 text-primary mb-1">25K+</div>
                  <small class="text-muted">Subscribers</small>
                </div>
                <div class="col-4">
                  <div class="stat-number h5 text-success mb-1">Weekly</div>
                  <small class="text-muted">Updates</small>
                </div>
                <div class="col-4">
                  <div class="stat-number h5 text-info mb-1">0</div>
                  <small class="text-muted">Spam</small>
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
.cta-newsletter .newsletter-card {
  border-radius: 1.5rem;
  background: linear-gradient(135deg, var(--bs-white), var(--bs-gray-100));
}

.cta-newsletter .input-group .form-control {
  border-radius: 50px 0 0 50px;
  border: 2px solid var(--bs-gray-300);
  padding: 15px 20px;
}

.cta-newsletter .input-group .form-control:focus {
  border-color: var(--bs-primary);
  box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.25);
}

.cta-newsletter .input-group .btn {
  border-radius: 0 50px 50px 0;
  padding: 15px 25px;
  transition: all 0.3s ease;
}

.cta-newsletter .input-group .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(var(--bs-primary-rgb), 0.3);
}

.cta-newsletter .newsletter-stats {
  border-top: 1px solid var(--bs-gray-200);
  padding-top: 1.5rem;
}

@media (max-width: 768px) {
  .cta-newsletter .input-group {
    flex-direction: column;
  }
  
  .cta-newsletter .input-group .form-control,
  .cta-newsletter .input-group .btn {
    border-radius: 50px;
    width: 100%;
  }
  
  .cta-newsletter .input-group .btn {
    margin-top: 0.5rem;
  }
}
</style>