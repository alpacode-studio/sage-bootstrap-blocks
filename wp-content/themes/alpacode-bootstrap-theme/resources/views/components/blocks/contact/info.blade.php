{{-- Contact Info Cards Component --}}
<section id="contact-info" class="contact-info section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Contact Information</h2>
        <p class="lead text-muted">Multiple ways to reach us. Choose what works best for you.</p>
      </div>
    </div>

    {{-- Contact Cards --}}
    <div class="row g-4">
      
      {{-- Office Location --}}
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="contact-icon mb-4">
            <div class="icon-circle bg-primary bg-opacity-10 text-primary mx-auto">
              <i class="bi bi-geo-alt-fill fs-2"></i>
            </div>
          </div>
          <h5 class="card-title mb-3">Visit Our Office</h5>
          <p class="card-text text-muted mb-3">
            123 Business Street<br>
            Suite 100<br>
            New York, NY 10001
          </p>
          <a href="https://maps.google.com" class="btn btn-outline-primary btn-sm" target="_blank">
            <i class="bi bi-map me-2"></i>View on Map
          </a>
        </div>
      </div>
      
      {{-- Phone --}}
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="contact-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="contact-icon mb-4">
            <div class="icon-circle bg-success bg-opacity-10 text-success mx-auto">
              <i class="bi bi-telephone-fill fs-2"></i>
            </div>
          </div>
          <h5 class="card-title mb-3">Call Us</h5>
          <p class="card-text text-muted mb-3">
            Main: (555) 123-4567<br>
            Support: (555) 987-6543<br>
            Mon-Fri: 9AM - 6PM
          </p>
          <a href="tel:+15551234567" class="btn btn-outline-success btn-sm">
            <i class="bi bi-telephone me-2"></i>Call Now
          </a>
        </div>
      </div>
      
      {{-- Email --}}
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="contact-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="contact-icon mb-4">
            <div class="icon-circle bg-info bg-opacity-10 text-info mx-auto">
              <i class="bi bi-envelope-fill fs-2"></i>
            </div>
          </div>
          <h5 class="card-title mb-3">Email Us</h5>
          <p class="card-text text-muted mb-3">
            General: info@company.com<br>
            Support: support@company.com<br>
            Sales: sales@company.com
          </p>
          <a href="mailto:info@company.com" class="btn btn-outline-info btn-sm">
            <i class="bi bi-envelope me-2"></i>Send Email
          </a>
        </div>
      </div>
      
      {{-- Live Chat --}}
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="contact-card card border-0 shadow-sm h-100 text-center p-4">
          <div class="contact-icon mb-4">
            <div class="icon-circle bg-warning bg-opacity-10 text-warning mx-auto">
              <i class="bi bi-chat-dots-fill fs-2"></i>
            </div>
          </div>
          <h5 class="card-title mb-3">Live Chat</h5>
          <p class="card-text text-muted mb-3">
            Get instant help<br>
            Available 24/7<br>
            Average response: 2 min
          </p>
          <button class="btn btn-outline-warning btn-sm" onclick="openChat()">
            <i class="bi bi-chat me-2"></i>Start Chat
          </button>
        </div>
      </div>
      
    </div>

    {{-- Quick Actions --}}
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="500">
        <div class="quick-actions p-4 bg-light rounded-4">
          <h6 class="mb-3">Need immediate assistance?</h6>
          <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="#" class="btn btn-primary">
              <i class="bi bi-calendar-check me-2"></i>Schedule Meeting
            </a>
            <a href="#" class="btn btn-outline-primary">
              <i class="bi bi-download me-2"></i>Download Brochure
            </a>
            <a href="#" class="btn btn-outline-secondary">
              <i class="bi bi-question-circle me-2"></i>FAQ
            </a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<style>
.contact-info .contact-card {
  border-radius: 1rem;
  transition: all 0.3s ease;
}

.contact-info .contact-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
}

.contact-info .icon-circle {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
}

.contact-info .btn {
  border-radius: 2rem;
  transition: all 0.3s ease;
}

.contact-info .btn:hover {
  transform: translateY(-2px);
}

.contact-info .quick-actions {
  background: linear-gradient(135deg, var(--bs-light), var(--bs-gray-100)) !important;
}

@media (max-width: 768px) {
  .contact-info .d-flex {
    flex-direction: column;
    align-items: center;
  }
  
  .contact-info .btn {
    width: 100%;
    max-width: 250px;
  }
}
</style>

<script>
function openChat() {
  alert('Live chat would open here!');
  // In real implementation, this would open your chat widget
}
</script>