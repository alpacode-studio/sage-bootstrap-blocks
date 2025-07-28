{{-- Simple Contact Form Component --}}
<section id="contact-simple" class="contact-simple section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Get In Touch</h2>
        <p class="lead text-muted">Have a question or want to work together? We'd love to hear from you.</p>
      </div>
    </div>

    {{-- Simple Form --}}
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6">
        <div class="contact-form-card card border-0 shadow-lg" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body p-5">
            <form action="forms/contact.php" method="post" class="php-email-form">
              @csrf
              
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    <label for="name">Your Name</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    <label for="email">Your Email</label>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    <label for="subject">Subject</label>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 120px" required></textarea>
                    <label for="message">Your Message</label>
                  </div>
                </div>
                
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg px-5 py-3">
                    <i class="bi bi-send me-2"></i>
                    Send Message
                  </button>
                </div>
              </div>
              
              <div class="form-status mt-4 text-center">
                <div class="loading d-none">
                  <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
                <div class="error-message"></div>
                <div class="sent-message alert alert-success d-none">
                  <i class="bi bi-check-circle me-2"></i>
                  Your message has been sent successfully!
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<style>
.contact-simple .contact-form-card {
  border-radius: 1.5rem;
  background: linear-gradient(135deg, var(--bs-light), var(--bs-white));
}

.contact-simple .form-floating > .form-control {
  border-radius: 0.75rem;
  border: 2px solid var(--bs-gray-200);
  padding: 1rem 0.75rem;
}

.contact-simple .form-floating > .form-control:focus {
  border-color: var(--bs-primary);
  box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.25);
}

.contact-simple .form-floating > label {
  color: var(--bs-gray-600);
  font-weight: 500;
}

.contact-simple .btn {
  border-radius: 2rem;
  transition: all 0.3s ease;
}

.contact-simple .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(var(--bs-primary-rgb), 0.3);
}

.contact-simple .form-status .error-message {
  color: var(--bs-danger);
  font-size: 0.875rem;
  margin-top: 0.5rem;
}
</style>