{{-- Contact Form Footer Component --}}
<footer id="footer-contact-form" class="footer-contact-form bg-light">
  
  {{-- Contact Section --}}
  <div class="contact-section py-5">
    <div class="container">
      <div class="row">
        
        {{-- Contact Info --}}
        <div class="col-lg-5 mb-5 mb-lg-0">
          <h3 class="mb-4">Get In Touch</h3>
          <p class="text-muted mb-4">Have a project in mind? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
          
          {{-- Contact Details --}}
          <div class="contact-details">
            <div class="contact-item d-flex align-items-start mb-4">
              <div class="contact-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-2">Office Address</h6>
                <p class="text-muted mb-0">123 Business Street<br>New York, NY 10001</p>
              </div>
            </div>
            
            <div class="contact-item d-flex align-items-start mb-4">
              <div class="contact-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-2">Phone Number</h6>
                <p class="text-muted mb-0">+1 (555) 123-4567</p>
              </div>
            </div>
            
            <div class="contact-item d-flex align-items-start">
              <div class="contact-icon bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-2">Email Address</h6>
                <p class="text-muted mb-0">hello@mywebsite.com</p>
              </div>
            </div>
          </div>
        </div>
        
        {{-- Contact Form --}}
        <div class="col-lg-7">
          <div class="contact-form-card card border-0 shadow-sm">
            <div class="card-body p-4">
              <h4 class="mb-4">Send us a Message</h4>
              
              <form class="contact-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" id="message" placeholder="Your Message" style="height: 120px" required></textarea>
                      <label for="message">Your Message</label>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg">
                      <i class="bi bi-send me-2"></i>Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  {{-- Footer Links --}}
  <div class="footer-links bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        
        {{-- Company Info --}}
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="mb-3">MyWebsite</h5>
          <p class="text-muted mb-3">Creating digital solutions that drive business success and growth.</p>
          
          {{-- Social Links --}}
          <div class="social-links">
            <a href="#" class="btn btn-outline-light btn-sm me-2">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm me-2">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm me-2">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="btn btn-outline-light btn-sm">
              <i class="bi bi-linkedin"></i>
            </a>
          </div>
        </div>
        
        {{-- Services --}}
        <div class="col-lg-2 col-md-3 col-6 mb-4 mb-lg-0">
          <h6 class="mb-3">Services</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Web Design</a></li>
            <li><a href="#" class="text-muted">Development</a></li>
            <li><a href="#" class="text-muted">SEO</a></li>
            <li><a href="#" class="text-muted">Marketing</a></li>
          </ul>
        </div>
        
        {{-- Company --}}
        <div class="col-lg-2 col-md-3 col-6 mb-4 mb-lg-0">
          <h6 class="mb-3">Company</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">About</a></li>
            <li><a href="#" class="text-muted">Team</a></li>
            <li><a href="#" class="text-muted">Careers</a></li>
            <li><a href="#" class="text-muted">News</a></li>
          </ul>
        </div>
        
        {{-- Support --}}
        <div class="col-lg-2 col-md-3 col-6 mb-4 mb-lg-0">
          <h6 class="mb-3">Support</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Help Center</a></li>
            <li><a href="#" class="text-muted">Documentation</a></li>
            <li><a href="#" class="text-muted">Contact</a></li>
            <li><a href="#" class="text-muted">Status</a></li>
          </ul>
        </div>
        
        {{-- Legal --}}
        <div class="col-lg-3 col-md-3 col-6">
          <h6 class="mb-3">Legal</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Privacy Policy</a></li>
            <li><a href="#" class="text-muted">Terms of Service</a></li>
            <li><a href="#" class="text-muted">Cookie Policy</a></li>
          </ul>
        </div>
        
      </div>
      
      {{-- Copyright --}}
      <hr class="my-4">
      <div class="text-center">
        <p class="text-muted mb-0">© 2024 MyWebsite. All Rights Reserved.</p>
      </div>
    </div>
  </div>
  
</footer>

<style>
.footer-contact-form .contact-form-card {
  border-radius: 1rem;
  background: linear-gradient(135deg, var(--bs-white), var(--bs-gray-50));
}

.footer-contact-form .contact-icon {
  width: 50px;
  height: 50px;
  font-size: 1.2rem;
}

.footer-contact-form .form-floating > .form-control {
  border-radius: 0.5rem;
  border: 2px solid var(--bs-gray-200);
}

.footer-contact-form .form-floating > .form-control:focus {
  border-color: var(--bs-primary);
  box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.25);
}

.footer-contact-form .btn {
  border-radius: 50px;
  padding: 12px 30px;
  transition: all 0.3s ease;
}

.footer-contact-form .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(var(--bs-primary-rgb), 0.3);
}

.footer-contact-form .footer-links a {
  color: var(--bs-gray-400);
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-contact-form .footer-links a:hover {
  color: var(--bs-primary);
}

.footer-contact-form .social-links .btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.footer-contact-form .social-links .btn:hover {
  background-color: var(--bs-light);
  color: var(--bs-dark);
  transform: translateY(-2px);
}
</style>