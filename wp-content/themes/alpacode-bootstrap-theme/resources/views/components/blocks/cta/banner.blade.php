{{-- Simple CTA Banner Component --}}
<section id="cta-banner" class="cta-banner section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="cta-content bg-primary text-white rounded-4 p-5" data-aos="zoom-in">
          <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
          <p class="fs-5 mb-4">Join thousands of satisfied customers and transform your business today.</p>
          <div class="cta-actions">
            <a href="#" class="btn btn-light btn-lg me-3">
              <i class="bi bi-rocket me-2"></i>Start Free Trial
            </a>
            <a href="#" class="btn btn-outline-light btn-lg">
              <i class="bi bi-telephone me-2"></i>Contact Sales
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.cta-banner .cta-content {
  background: linear-gradient(135deg, var(--bs-primary), var(--bs-info)) !important;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
}

.cta-banner .btn {
  border-radius: 50px;
  padding: 15px 30px;
  transition: all 0.3s ease;
}

.cta-banner .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

@media (max-width: 768px) {
  .cta-banner .cta-actions {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    align-items: center;
  }
  
  .cta-banner .btn {
    width: 100%;
    max-width: 300px;
  }
}
</style>