{{-- FAQ Contact Combo Component --}}
<section id="faq-contact" class="faq-contact section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Questions & Support</h2>
        <p class="lead text-muted">Find answers or get in touch with our support team.</p>
      </div>
    </div>

    <div class="row g-4">
      
      {{-- FAQ Column --}}
      <div class="col-lg-8" data-aos="fade-right">
        <div class="faq-section">
          <h4 class="mb-4">Frequently Asked Questions</h4>
          
          <div class="faq-list">
            <div class="faq-item card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h6 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none faq-toggle" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq1">
                    <i class="bi bi-plus-circle text-primary me-2"></i>
                    How quickly can I get started?
                  </button>
                </h6>
              </div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                <div class="card-body">
                  You can get started immediately! Sign up takes less than 2 minutes and you'll have full access to all features right away.
                </div>
              </div>
            </div>

            <div class="faq-item card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h6 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none faq-toggle" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq2">
                    <i class="bi bi-plus-circle text-primary me-2"></i>
                    What if I need help during setup?
                  </button>
                </h6>
              </div>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                <div class="card-body">
                  Our support team is available 24/7 to help you with setup, configuration, and any questions you might have.
                </div>
              </div>
            </div>

            <div class="faq-item card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h6 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none faq-toggle" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq3">
                    <i class="bi bi-plus-circle text-primary me-2"></i>
                    Can I cancel my subscription anytime?
                  </button>
                </h6>
              </div>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                <div class="card-body">
                  Yes! You can cancel your subscription at any time with no penalties. Your account remains active until the end of your billing period.
                </div>
              </div>
            </div>

            <div class="faq-item card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h6 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none faq-toggle" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq4">
                    <i class="bi bi-plus-circle text-primary me-2"></i>
                    Do you offer team discounts?
                  </button>
                </h6>
              </div>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                <div class="card-body">
                  Yes! We offer special pricing for teams of 5+ users and custom enterprise packages for larger organizations.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {{-- Contact Column --}}
      <div class="col-lg-4" data-aos="fade-left">
        <div class="contact-section">
          <div class="contact-card bg-light rounded-4 p-4 mb-4">
            <h5 class="mb-3">Still have questions?</h5>
            <p class="text-muted mb-4">Can't find what you're looking for? Our support team is here to help.</p>
            
            <div class="contact-options">
              <a href="#" class="btn btn-primary w-100 mb-3">
                <i class="bi bi-chat-dots me-2"></i>Start Live Chat
              </a>
              <a href="mailto:support@company.com" class="btn btn-outline-primary w-100 mb-3">
                <i class="bi bi-envelope me-2"></i>Email Support
              </a>
              <a href="tel:+1234567890" class="btn btn-outline-success w-100">
                <i class="bi bi-telephone me-2"></i>Call Us
              </a>
            </div>
          </div>
          
          <div class="support-stats card border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <h6 class="mb-3">Our Support Stats</h6>
              <div class="row text-center">
                <div class="col-4">
                  <div class="stat-item">
                    <div class="h5 text-primary mb-1">2min</div>
                    <small class="text-muted">Avg Response</small>
                  </div>
                </div>
                <div class="col-4">
                  <div class="stat-item">
                    <div class="h5 text-success mb-1">24/7</div>
                    <small class="text-muted">Available</small>
                  </div>
                </div>
                <div class="col-4">
                  <div class="stat-item">
                    <div class="h5 text-info mb-1">98%</div>
                    <small class="text-muted">Satisfaction</small>
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
.faq-contact .faq-section h4 {
  color: var(--bs-primary);
  font-weight: 600;
  border-bottom: 2px solid var(--bs-primary);
  padding-bottom: 0.5rem;
}

.faq-contact .faq-item {
  border-radius: 1rem;
  transition: all 0.3s ease;
}

.faq-contact .faq-item:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
}

.faq-contact .faq-toggle {
  color: var(--bs-dark);
  font-weight: 500;
  transition: all 0.3s ease;
}

.faq-contact .faq-toggle:hover {
  color: var(--bs-primary);
}

.faq-contact .faq-toggle i {
  transition: transform 0.3s ease;
}

.faq-contact .faq-toggle[aria-expanded="true"] i {
  transform: rotate(45deg);
}

.faq-contact .contact-card {
  background: linear-gradient(135deg, var(--bs-light), var(--bs-gray-100)) !important;
  border: 1px solid var(--bs-gray-200);
}

.faq-contact .btn {
  border-radius: 50px;
  transition: all 0.3s ease;
}

.faq-contact .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.faq-contact .support-stats {
  border-radius: 1rem;
}

.faq-contact .stat-item {
  padding: 0.5rem;
}

@media (max-width: 991px) {
  .faq-contact .contact-section {
    margin-top: 2rem;
  }
}
</style>

<!--
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Update FAQ toggle icons
  const faqToggles = document.querySelectorAll('.faq-toggle');
  
  faqToggles.forEach(toggle => {
    toggle.addEventListener('click', function() {
      const icon = this.querySelector('i');
      const isExpanded = this.getAttribute('aria-expanded') === 'true';
      
      // Update icon based on state
      if (isExpanded) {
        icon.className = 'bi bi-dash-circle text-primary me-2';
      } else {
        icon.className = 'bi bi-plus-circle text-primary me-2';
      }
    });
  });
});
</script>
-->