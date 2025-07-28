<style>
    .features-benefits {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    }
    
    .feature-badge {
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    .benefit-icon {
        width: 32px;
        height: 32px;
        font-size: 0.9rem;
    }
    
    .feature-image {
        min-height: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }
    
    .feature-image:hover {
        transform: translateY(-5px);
    }
    
    .feature-content h3 {
        color: #2c3e50;
        font-weight: 600;
    }
    
    .benefit-item {
        transition: transform 0.2s ease;
    }
    
    .benefit-item:hover {
        transform: translateX(5px);
    }
    
    .cta-button {
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
    }
    
    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
    }
    
    .stats-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease;
    }
    
    .stats-card:hover {
        transform: translateY(-5px);
    }
</style>

{{-- Features Benefits Split Component --}}
<section id="features-benefits" class="features-benefits section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Features That Drive Results</h2>
        <p class="lead text-muted">Powerful tools designed to boost your productivity and accelerate your success.</p>
      </div>
    </div>
    
    {{-- Feature 1 --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="100">
        <div class="feature-content">
          <div class="feature-badge bg-primary bg-opacity-10 text-primary d-inline-block px-3 py-2 rounded-pill mb-3">
            <i class="bi bi-rocket me-2"></i>Productivity Boost
          </div>
          <h3 class="mb-4">Automate Your Workflow</h3>
          <p class="text-muted mb-4">Save hours every week with intelligent automation that handles repetitive tasks, allowing you to focus on what matters most - growing your business.</p>
          
          <div class="benefits-list">
            <div class="benefit-item d-flex align-items-center mb-3">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Reduce manual work by 80%</span>
            </div>
            <div class="benefit-item d-flex align-items-center mb-3">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Custom workflow templates</span>
            </div>
            <div class="benefit-item d-flex align-items-center">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Smart notifications and alerts</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="feature-image bg-primary bg-opacity-5 rounded-4 p-5 text-center">
          <i class="bi bi-gear-wide-connected text-primary mb-3" style="font-size: 5rem;"></i>
          <h5 class="text-primary">Automation Engine</h5>
          <p class="text-muted mb-0">Smart workflows that work for you</p>
        </div>
      </div>
    </div>
    
    {{-- Feature 2 --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left" data-aos-delay="300">
        <div class="feature-content">
          <div class="feature-badge bg-success bg-opacity-10 text-success d-inline-block px-3 py-2 rounded-pill mb-3">
            <i class="bi bi-people me-2"></i>Team Collaboration
          </div>
          <h3 class="mb-4">Seamless Team Integration</h3>
          <p class="text-muted mb-4">Connect your entire team with real-time collaboration tools that keep everyone on the same page and moving toward shared goals.</p>
          
          <div class="benefits-list">
            <div class="benefit-item d-flex align-items-center mb-3">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Real-time team messaging</span>
            </div>
            <div class="benefit-item d-flex align-items-center mb-3">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Shared project dashboards</span>
            </div>
            <div class="benefit-item d-flex align-items-center">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Advanced permission controls</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-delay="400">
        <div class="feature-image bg-success bg-opacity-5 rounded-4 p-5 text-center">
          <i class="bi bi-people-fill text-success mb-3" style="font-size: 5rem;"></i>
          <h5 class="text-success">Team Hub</h5>
          <p class="text-muted mb-0">Where collaboration happens</p>
        </div>
      </div>
    </div>
    
    {{-- Feature 3 --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="500">
        <div class="feature-content">
          <div class="feature-badge bg-info bg-opacity-10 text-info d-inline-block px-3 py-2 rounded-pill mb-3">
            <i class="bi bi-graph-up me-2"></i>Analytics & Insights
          </div>
          <h3 class="mb-4">Data-Driven Decisions</h3>
          <p class="text-muted mb-4">Make informed decisions with comprehensive analytics and reporting that reveal hidden patterns and opportunities in your business.</p>
          
          <div class="benefits-list">
            <div class="benefit-item d-flex align-items-center mb-3">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Real-time performance metrics</span>
            </div>
            <div class="benefit-item d-flex align-items-center mb-3">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Custom report generation</span>
            </div>
            <div class="benefit-item d-flex align-items-center">
              <div class="benefit-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-check2 fw-bold"></i>
              </div>
              <span>Predictive trend analysis</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="600">
        <div class="feature-image bg-info bg-opacity-5 rounded-4 p-5 text-center">
          <i class="bi bi-bar-chart-line text-info mb-3" style="font-size: 5rem;"></i>
          <h5 class="text-info">Analytics Dashboard</h5>
          <p class="text-muted mb-0">Insights at your fingertips</p>
        </div>
      </div>
    </div>
    
    {{-- Stats Section --}}
    <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="700">
      <div class="col-lg-10">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="stats-card text-center p-4 rounded-4">
              <div class="display-4 fw-bold text-primary mb-2">99%</div>
              <h6 class="text-muted mb-0">Customer Satisfaction</h6>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stats-card text-center p-4 rounded-4">
              <div class="display-4 fw-bold text-success mb-2">50K+</div>
              <h6 class="text-muted mb-0">Active Users</h6>
            </div>
          </div>
          <div class="col-md-4">
            <div class="stats-card text-center p-4 rounded-4">
              <div class="display-4 fw-bold text-info mb-2">24/7</div>
              <h6 class="text-muted mb-0">Support Available</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    {{-- Call to Action --}}
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="800">
      <div class="col-lg-6 text-center">
        <h3 class="mb-4">Ready to Transform Your Business?</h3>
        <p class="text-muted mb-4">Join thousands of companies already using our platform to streamline their operations and boost productivity.</p>
        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
          <button class="btn btn-primary cta-button">
            <i class="bi bi-arrow-right me-2"></i>Start Free Trial
          </button>
          <button class="btn btn-outline-primary rounded-pill px-4 py-2">
            <i class="bi bi-play-circle me-2"></i>Watch Demo
          </button>
        </div>
      </div>
    </div>
    
  </div>
</section>
