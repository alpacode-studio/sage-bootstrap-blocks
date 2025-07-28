{{-- Tabs Categories Services Component --}}
<section id="services-tabs" class="services-tabs section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Our Expertise</h2>
        <p class="lead text-muted">Explore our comprehensive range of services across different categories.</p>
      </div>
    </div>

    {{-- Service Tabs --}}
    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        {{-- Tab Navigation --}}
        <ul class="nav nav-pills justify-content-center mb-5" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#development">
              <i class="bi bi-code-slash me-2"></i>Development
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#design">
              <i class="bi bi-palette me-2"></i>Design
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#marketing">
              <i class="bi bi-megaphone me-2"></i>Marketing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#consulting">
              <i class="bi bi-people me-2"></i>Consulting
            </a>
          </li>
        </ul>
        
        {{-- Tab Content --}}
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          
          {{-- Development Tab --}}
          <div class="tab-pane fade show active" id="development">
            <div class="row g-4">
              <div class="col-lg-6">
                <div class="service-feature d-flex align-items-start mb-4">
                  <div class="feature-icon bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3">
                    <i class="bi bi-globe fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Web Development</h5>
                    <p class="text-muted mb-0">Custom websites and web applications using modern frameworks like React, Vue, and Laravel.</p>
                  </div>
                </div>
                
                <div class="service-feature d-flex align-items-start mb-4">
                  <div class="feature-icon bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3">
                    <i class="bi bi-phone fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Mobile Apps</h5>
                    <p class="text-muted mb-0">Native iOS and Android applications, as well as cross-platform solutions using React Native.</p>
                  </div>
                </div>
                
                <div class="service-feature d-flex align-items-start">
                  <div class="feature-icon bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3">
                    <i class="bi bi-cloud fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Cloud Solutions</h5>
                    <p class="text-muted mb-0">Scalable cloud infrastructure on AWS, Azure, and Google Cloud Platform.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="feature-image">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIi8+CjxjaXJjbGUgY3g9IjIwMCIgY3k9IjE1MCIgcj0iNDAiIGZpbGw9IiMwMDdkZmYiLz4KPHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeD0iMTgwIiB5PSIxMzAiPgo8cGF0aCBkPSJNMTIgMkw4IDUuNVYxOUgxNlY1LjVMMTIgMlpNMTQgMTdIMTBWMTNIMTRWMTdaTTEwIDExVjdIMTRWMTFIMTBaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4KPHN2Zz4=" class="img-fluid rounded-3 shadow-sm" alt="Development Services">
                </div>
              </div>
            </div>
          </div>
          
          {{-- Design Tab --}}
          <div class="tab-pane fade" id="design">
            <div class="row g-4">
              <div class="col-lg-6">
                <div class="service-feature d-flex align-items-start mb-4">
                  <div class="feature-icon bg-success bg-opacity-10 text-success rounded-circle p-3 me-3">
                    <i class="bi bi-brush fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">UI/UX Design</h5>
                    <p class="text-muted mb-0">User-centered design solutions that create engaging and intuitive experiences.</p>
                  </div>
                </div>
                
                <div class="service-feature d-flex align-items-start mb-4">
                  <div class="feature-icon bg-success bg-opacity-10 text-success rounded-circle p-3 me-3">
                    <i class="bi bi-image fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Brand Identity</h5>
                    <p class="text-muted mb-0">Complete brand identity packages including logos, color schemes, and style guides.</p>
                  </div>
                </div>
                
                <div class="service-feature d-flex align-items-start">
                  <div class="feature-icon bg-success bg-opacity-10 text-success rounded-circle p-3 me-3">
                    <i class="bi bi-layout-text-window fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Print Design</h5>
                    <p class="text-muted mb-0">Professional print materials including brochures, business cards, and marketing collateral.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="feature-image">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIi8+CjxjaXJjbGUgY3g9IjIwMCIgY3k9IjE1MCIgcj0iNDAiIGZpbGw9IiMxOThlNTIiLz4KPHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeD0iMTgwIiB5PSIxMzAiPgo8cGF0aCBkPSJNMTIgMkwyIDdMMTIgMTJMMjIgN0wxMiAyWk0yIDEyTDEyIDE3TDIyIDEyTDE3IDE0TDEyIDEyTDcgMTRMMiAxMloiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo8L3N2Zz4=" class="img-fluid rounded-3 shadow-sm" alt="Design Services">
                </div>
              </div>
            </div>
          </div>
          
          {{-- Marketing Tab --}}
          <div class="tab-pane fade" id="marketing">
            <div class="row g-4">
              <div class="col-lg-6">
                <div class="service-feature d-flex align-items-start mb-4">
                  <div class="feature-icon bg-info bg-opacity-10 text-info rounded-circle p-3 me-3">
                    <i class="bi bi-search fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">SEO Optimization</h5>
                    <p class="text-muted mb-0">Improve your search engine rankings with comprehensive SEO strategies and implementation.</p>
                  </div>
                </div>
                
                <div class="service-feature d-flex align-items-start mb-4">
                  <div class="feature-icon bg-info bg-opacity-10 text-info rounded-circle p-3 me-3">
                    <i class="bi bi-graph-up fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Social Media Marketing</h5>
                    <p class="text-muted mb-0">Build your brand presence across social platforms with targeted campaigns and content.</p>
                  </div>
                </div>
                
                <div class="service-feature d-flex align-items-start">
                  <div class="feature-icon bg-info bg-opacity-10 text-info rounded-circle p-3 me-3">
                    <i class="bi bi-envelope fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Email Marketing</h5>
                    <p class="text-muted mb-0">Create and manage effective email campaigns that convert subscribers into customers.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="feature-image">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIi8+CjxjaXJjbGUgY3g9IjIwMCIgY3k9IjE1MCIgcj0iNDAiIGZpbGw9IiMwY2IyY2IiLz4KPHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeD0iMTgwIiB5PSIxMzAiPgo8cGF0aCBkPSJNMTIgMkMyIDIgMiA3IDIgMTJTMTIgMjIgMTIgMjJTMjIgMTcgMjIgMTJTMTIgMiAxMiAyWk0xMiA4VjZMMTQgNy41TDEyIDhaTTEyIDEwVjE2SDE0VjEwSDEyWiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cjwvc3ZnPg==" class="img-fluid rounded-3 shadow-sm" alt="Marketing Services">
                </div>
              </div>
            </div>
          </div>
          
          {{-- Consulting Tab --}}
          <div class="tab-pane fade" id="consulting">
            <div class="row g-4">
              <div class="col-lg-6">
                <div class="service-feature d-flex align-items-start mb-4">
                  <div class="feature-icon bg-warning bg-opacity-10 text-warning rounded-circle p-3 me-3">
                    <i class="bi bi-lightbulb fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Strategy Consulting</h5>
                    <p class="text-muted mb-0">Strategic planning and roadmap development to align technology with business goals.</p>
                  </div>
                </div>
                
                <div class="service-feature d-flex align-items-start mb-4">
                  <div class="feature-icon bg-warning bg-opacity-10 text-warning rounded-circle p-3 me-3">
                    <i class="bi bi-gear fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Process Optimization</h5>
                    <p class="text-muted mb-0">Streamline your business processes and improve operational efficiency.</p>
                  </div>
                </div>
                
                <div class="service-feature d-flex align-items-start">
                  <div class="feature-icon bg-warning bg-opacity-10 text-warning rounded-circle p-3 me-3">
                    <i class="bi bi-shield-check fs-4"></i>
                  </div>
                  <div>
                    <h5 class="mb-2">Technology Audit</h5>
                    <p class="text-muted mb-0">Comprehensive evaluation of your current technology stack and recommendations.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="feature-image">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjZjhmOWZhIi8+CjxjaXJjbGUgY3g9IjIwMCIgY3k9IjE1MCIgcj0iNDAiIGZpbGw9IiNmZmM5MDciLz4KPHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeD0iMTgwIiB5PSIxMzAiPgo8cGF0aCBkPSJNMTIgMkw4IDVWMTBIMTBWN0gxNFYxMEgxNlY1TDEyIDJaTTEwIDEyVjIwSDhWMTJIMTBaTTE2IDEyVjIwSDE0VjEySDE2WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cjwvc3ZnPg==" class="img-fluid rounded-3 shadow-sm" alt="Consulting Services">
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
.services-tabs .nav-pills .nav-link {
  border-radius: 50px;
  padding: 12px 24px;
  margin: 0 0.5rem;
  background: transparent;
  border: 2px solid var(--bs-gray-300);
  color: var(--bs-gray-600);
  font-weight: 500;
  transition: all 0.3s ease;
}

.services-tabs .nav-pills .nav-link.active {
  background: var(--bs-primary);
  border-color: var(--bs-primary);
  color: white;
}

.services-tabs .nav-pills .nav-link:hover {
  border-color: var(--bs-primary);
  color: var(--bs-primary);
}

.services-tabs .feature-icon {
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.services-tabs .service-feature {
  transition: all 0.3s ease;
}

.services-tabs .service-feature:hover {
  transform: translateX(10px);
}

.services-tabs .feature-image {
  border-radius: 1rem;
  overflow: hidden;
}

@media (max-width: 768px) {
  .services-tabs .nav-pills {
    flex-direction: column;
    align-items: center;
  }
  
  .services-tabs .nav-pills .nav-link {
    margin: 0.25rem 0;
    text-align: center;
    min-width: 200px;
  }
}
</style>