{{-- Comparison Table Services Component --}}
<section id="services-comparison" class="services-comparison section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Choose Your Service Plan</h2>
        <p class="lead text-muted">Compare our service packages and find the perfect fit for your business needs.</p>
      </div>
    </div>

    {{-- Comparison Table --}}
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="comparison-table-wrapper" data-aos="fade-up" data-aos-delay="200">
          <div class="table-responsive">
            <table class="table comparison-table">
              <thead>
                <tr>
                  <th scope="col" class="feature-column">Features</th>
                  <th scope="col" class="plan-column">
                    <div class="plan-header">
                      <h4 class="plan-name">Starter</h4>
                      <div class="plan-price">$299<span>/month</span></div>
                    </div>
                  </th>
                  <th scope="col" class="plan-column featured">
                    <div class="plan-header">
                      <div class="popular-badge">Most Popular</div>
                      <h4 class="plan-name">Professional</h4>
                      <div class="plan-price">$599<span>/month</span></div>
                    </div>
                  </th>
                  <th scope="col" class="plan-column">
                    <div class="plan-header">
                      <h4 class="plan-name">Enterprise</h4>
                      <div class="plan-price">$999<span>/month</span></div>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="feature-name">Website Development</td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                </tr>
                <tr>
                  <td class="feature-name">Mobile App Development</td>
                  <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                </tr>
                <tr>
                  <td class="feature-name">SEO Optimization</td>
                  <td class="text-center">Basic</td>
                  <td class="text-center">Advanced</td>
                  <td class="text-center">Premium</td>
                </tr>
                <tr>
                  <td class="feature-name">Support Hours</td>
                  <td class="text-center">10 hrs/month</td>
                  <td class="text-center">25 hrs/month</td>
                  <td class="text-center">Unlimited</td>
                </tr>
                <tr>
                  <td class="feature-name">Custom Integrations</td>
                  <td class="text-center">2 integrations</td>
                  <td class="text-center">5 integrations</td>
                  <td class="text-center">Unlimited</td>
                </tr>
                <tr>
                  <td class="feature-name">Analytics & Reporting</td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                </tr>
                <tr>
                  <td class="feature-name">Priority Support</td>
                  <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                </tr>
                <tr>
                  <td class="feature-name">Dedicated Account Manager</td>
                  <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                  <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                </tr>
                <tr class="action-row">
                  <td class="feature-name"></td>
                  <td class="text-center">
                    <a href="#" class="btn btn-outline-primary">Choose Plan</a>
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-primary">Choose Plan</a>
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-outline-primary">Choose Plan</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    {{-- Additional Info --}}
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="400">
        <div class="additional-info">
          <h5 class="mb-3">Need a Custom Solution?</h5>
          <p class="text-muted mb-4">We also offer custom packages tailored to your specific requirements and budget.</p>
          <a href="#" class="btn btn-success btn-lg">
            <i class="bi bi-chat-dots me-2"></i>Contact Sales
          </a>
        </div>
      </div>
    </div>
    
  </div>
</section>

<style>
.services-comparison .comparison-table-wrapper {
  background: white;
  border-radius: 1rem;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.services-comparison .comparison-table {
  margin-bottom: 0;
}

.services-comparison .comparison-table th,
.services-comparison .comparison-table td {
  padding: 1.5rem;
  vertical-align: middle;
  border-bottom: 1px solid var(--bs-gray-200);
}

.services-comparison .feature-column {
  background: var(--bs-gray-50);
  font-weight: 600;
  width: 25%;
}

.services-comparison .plan-column {
  width: 25%;
  text-align: center;
  position: relative;
}

.services-comparison .plan-column.featured {
  background: linear-gradient(135deg, var(--bs-primary), var(--bs-info));
  color: white;
}

.services-comparison .plan-column.featured .plan-header {
  color: white;
}

.services-comparison .plan-header {
  padding: 1rem;
}

.services-comparison .popular-badge {
  background: var(--bs-warning);
  color: var(--bs-dark);
  padding: 0.25rem 0.75rem;
  border-radius: 50px;
  font-size: 0.8rem;
  font-weight: 600;
  position: absolute;
  top: -10px;
  left: 50%;
  transform: translateX(-50%);
}

.services-comparison .plan-name {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 0.5rem;
}

.services-comparison .plan-price {
  font-size: 2rem;
  font-weight: 700;
  color: var(--bs-primary);
}

.services-comparison .plan-column.featured .plan-price {
  color: white;
}

.services-comparison .plan-price span {
  font-size: 1rem;
  font-weight: 400;
  color: var(--bs-gray-600);
}

.services-comparison .plan-column.featured .plan-price span {
  color: rgba(255, 255, 255, 0.8);
}

.services-comparison .feature-name {
  font-weight: 500;
  color: var(--bs-dark);
}

.services-comparison .action-row td {
  padding: 2rem 1.5rem;
  border-bottom: none;
}

.services-comparison .btn {
  border-radius: 50px;
  padding: 0.75rem 2rem;
  font-weight: 500;
  transition: all 0.3s ease;
}

.services-comparison .btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.services-comparison .additional-info {
  padding: 2rem;
  background: var(--bs-light);
  border-radius: 1rem;
}

@media (max-width: 768px) {
  .services-comparison .comparison-table {
    font-size: 0.9rem;
  }
  
  .services-comparison .comparison-table th,
  .services-comparison .comparison-table td {
    padding: 1rem 0.5rem;
  }
  
  .services-comparison .plan-name {
    font-size: 1.1rem;
  }
  
  .services-comparison .plan-price {
    font-size: 1.5rem;
  }
}
</style>