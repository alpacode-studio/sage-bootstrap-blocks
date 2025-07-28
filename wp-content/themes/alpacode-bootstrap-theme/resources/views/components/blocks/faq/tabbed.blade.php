{{-- Tabbed Categories FAQ Component --}}
<section id="faq-tabbed" class="faq-tabbed section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Help Center</h2>
        <p class="lead text-muted">Browse questions by category or search for specific topics.</p>
      </div>
    </div>

    {{-- FAQ Tabs --}}
    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        {{-- Tab Navigation --}}
        <ul class="nav nav-tabs justify-content-center mb-4" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#general">
              <i class="bi bi-info-circle me-2"></i>General
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#pricing">
              <i class="bi bi-credit-card me-2"></i>Pricing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#technical">
              <i class="bi bi-gear me-2"></i>Technical
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#support">
              <i class="bi bi-headset me-2"></i>Support
            </a>
          </li>
        </ul>
        
        {{-- Tab Content --}}
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          
          {{-- General Tab --}}
          <div class="tab-pane fade show active" id="general">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">What is your service?</h5>
                    <p class="card-text text-muted">We provide comprehensive business solutions that help companies streamline their operations and increase efficiency.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">How do I get started?</h5>
                    <p class="card-text text-muted">Simply sign up for an account, complete the onboarding process, and you'll be ready to use our platform immediately.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">Is there a mobile app?</h5>
                    <p class="card-text text-muted">Yes! Our mobile app is available for both iOS and Android devices with full feature parity.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">What integrations do you support?</h5>
                    <p class="card-text text-muted">We integrate with over 200+ popular business tools including CRM, accounting, and project management software.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          {{-- Pricing Tab --}}
          <div class="tab-pane fade" id="pricing">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">What are your pricing plans?</h5>
                    <p class="card-text text-muted">We offer flexible plans starting from $9/month for individuals, $29/month for teams, and custom enterprise pricing.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">Is there a free trial?</h5>
                    <p class="card-text text-muted">Yes! We offer a 14-day free trial with full access to all features. No credit card required.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">Can I change plans anytime?</h5>
                    <p class="card-text text-muted">Absolutely! You can upgrade or downgrade your plan at any time. Changes take effect immediately.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">What payment methods do you accept?</h5>
                    <p class="card-text text-muted">We accept all major credit cards, PayPal, and wire transfers for enterprise customers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          {{-- Technical Tab --}}
          <div class="tab-pane fade" id="technical">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">Is your platform secure?</h5>
                    <p class="card-text text-muted">Yes! We use enterprise-grade security with 256-bit encryption, regular security audits, and compliance with industry standards.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">What is your uptime guarantee?</h5>
                    <p class="card-text text-muted">We guarantee 99.9% uptime with redundant servers and automatic failover systems to ensure continuous service.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">Do you provide API access?</h5>
                    <p class="card-text text-muted">Yes! We offer comprehensive REST API documentation and SDKs for popular programming languages.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">How do you handle data backups?</h5>
                    <p class="card-text text-muted">We perform automated daily backups with geo-redundant storage across multiple data centers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          {{-- Support Tab --}}
          <div class="tab-pane fade" id="support">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">How can I contact support?</h5>
                    <p class="card-text text-muted">Our support team is available 24/7 via live chat, email, and phone. Premium customers get priority support.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">Do you offer training?</h5>
                    <p class="card-text text-muted">Yes! We provide comprehensive onboarding, video tutorials, and live training sessions for enterprise customers.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">What is your response time?</h5>
                    <p class="card-text text-muted">We typically respond within 1 hour for urgent issues and within 24 hours for general inquiries.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="faq-card card border-0 shadow-sm h-100">
                  <div class="card-body p-4">
                    <h5 class="card-title">Is there a knowledge base?</h5>
                    <p class="card-text text-muted">Yes! Our comprehensive knowledge base includes articles, tutorials, and best practices to help you succeed.</p>
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
.faq-tabbed .nav-tabs {
  border: none;
  gap: 1rem;
}

.faq-tabbed .nav-tabs .nav-link {
  border: 2px solid var(--bs-gray-200);
  border-radius: 50px;
  padding: 12px 24px;
  color: var(--bs-gray-600);
  font-weight: 500;
  transition: all 0.3s ease;
}

.faq-tabbed .nav-tabs .nav-link.active {
  border-color: var(--bs-primary);
  background-color: var(--bs-primary);
  color: white;
}

.faq-tabbed .nav-tabs .nav-link:hover {
  border-color: var(--bs-primary);
  color: var(--bs-primary);
}

.faq-tabbed .faq-card {
  border-radius: 1rem;
  transition: all 0.3s ease;
}

.faq-tabbed .faq-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
}

.faq-tabbed .card-title {
  color: var(--bs-primary);
  font-weight: 600;
  margin-bottom: 1rem;
}

@media (max-width: 768px) {
  .faq-tabbed .nav-tabs {
    flex-direction: column;
    align-items: center;
  }
  
  .faq-tabbed .nav-tabs .nav-link {
    text-align: center;
    min-width: 200px;
  }
}
</style>