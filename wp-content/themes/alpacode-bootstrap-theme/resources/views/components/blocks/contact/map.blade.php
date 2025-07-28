{{-- Contact Map Location Component --}}
<section id="contact-map" class="contact-map section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Find Us</h2>
        <p class="lead text-muted">Visit our office or get directions to our location.</p>
      </div>
    </div>

    {{-- Map and Location Info --}}
    <div class="row g-4">
      
      {{-- Map --}}
      <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
        <div class="map-container rounded-4 overflow-hidden shadow-lg">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.4010485616945!2d-74.0059413!3d40.7127753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316b820863%3A0x9b8b6f7c8e9f7a6b!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sus!4v1644524636871!5m2!1sen!2sus" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
      
      {{-- Location Details --}}
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
        <div class="location-details">
          
          {{-- Address Card --}}
          <div class="address-card card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
              <div class="d-flex align-items-start mb-3">
                <div class="address-icon bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3">
                  <i class="bi bi-geo-alt-fill fs-4"></i>
                </div>
                <div>
                  <h5 class="card-title mb-2">Our Address</h5>
                  <p class="card-text text-muted mb-0">
                    123 Business Street<br>
                    Suite 100<br>
                    New York, NY 10001<br>
                    United States
                  </p>
                </div>
              </div>
              <hr>
              <div class="d-grid gap-2">
                <a href="https://maps.google.com" class="btn btn-primary" target="_blank">
                  <i class="bi bi-geo-alt me-2"></i>Get Directions
                </a>
                <a href="tel:+15551234567" class="btn btn-outline-success">
                  <i class="bi bi-telephone me-2"></i>Call Us
                </a>
              </div>
            </div>
          </div>
          
          {{-- Office Hours --}}
          <div class="hours-card card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
              <h5 class="card-title mb-3">
                <i class="bi bi-clock text-success me-2"></i>Office Hours
              </h5>
              <div class="hours-list">
                <div class="d-flex justify-content-between mb-2">
                  <span>Monday - Friday:</span>
                  <span class="text-success fw-semibold">9:00 AM - 6:00 PM</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Saturday:</span>
                  <span class="text-warning fw-semibold">10:00 AM - 4:00 PM</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span>Sunday:</span>
                  <span class="text-danger fw-semibold">Closed</span>
                </div>
              </div>
            </div>
          </div>
          
          {{-- Parking Info --}}
          <div class="parking-card card border-0 shadow-sm">
            <div class="card-body p-4">
              <h5 class="card-title mb-3">
                <i class="bi bi-car-front text-info me-2"></i>Parking
              </h5>
              <ul class="list-unstyled mb-0">
                <li class="mb-2">
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Free parking available
                </li>
                <li class="mb-2">
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Wheelchair accessible
                </li>
                <li class="mb-2">
                  <i class="bi bi-check-circle text-success me-2"></i>
                  Visitor parking spaces
                </li>
                <li>
                  <i class="bi bi-info-circle text-info me-2"></i>
                  Enter through main entrance
                </li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>

    {{-- Public Transport --}}
    <div class="row justify-content-center mt-5">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="400">
        <div class="transport-info bg-light rounded-4 p-4">
          <h5 class="text-center mb-4">
            <i class="bi bi-train-front text-primary me-2"></i>Public Transportation
          </h5>
          <div class="row g-3">
            <div class="col-md-4 text-center">
              <div class="transport-option">
                <i class="bi bi-train-front fs-3 text-primary mb-2"></i>
                <h6>Subway</h6>
                <p class="text-muted mb-0">Line 4, 5, 6 - Brooklyn Bridge</p>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="transport-option">
                <i class="bi bi-bus-front fs-3 text-success mb-2"></i>
                <h6>Bus</h6>
                <p class="text-muted mb-0">Routes M15, M22 - City Hall</p>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="transport-option">
                <i class="bi bi-bicycle fs-3 text-info mb-2"></i>
                <h6>Bike Share</h6>
                <p class="text-muted mb-0">Citi Bike station nearby</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<style>
.contact-map .map-container {
  position: relative;
  height: 450px;
}

.contact-map .map-container iframe {
  width: 100%;
  height: 100%;
  border-radius: 1rem;
}

.contact-map .location-details .card {
  border-radius: 1rem;
  transition: all 0.3s ease;
}

.contact-map .location-details .card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
}

.contact-map .address-icon {
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.contact-map .hours-list {
  font-size: 0.9rem;
}

.contact-map .transport-info {
  background: linear-gradient(135deg, var(--bs-light), var(--bs-gray-100)) !important;
}

.contact-map .transport-option {
  padding: 1rem;
  border-radius: 0.5rem;
  transition: all 0.3s ease;
}

.contact-map .transport-option:hover {
  background: white;
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.contact-map .btn {
  border-radius: 2rem;
  transition: all 0.3s ease;
}

.contact-map .btn:hover {
  transform: translateY(-2px);
}

@media (max-width: 768px) {
  .contact-map .map-container {
    height: 300px;
    margin-bottom: 2rem;
  }
  
  .contact-map .location-details {
    text-align: center;
  }
}
</style>