{{-- FAQ Search Filter Component --}}
<section id="faq-search" class="faq-search section py-5">
  <div class="container">
    
    {{-- Header with Search --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Find Your Answer</h2>
        <p class="lead text-muted mb-4">Search through our knowledge base or browse by category.</p>
        
        {{-- Search Box --}}
        <div class="search-box mb-4">
          <div class="input-group input-group-lg">
            <span class="input-group-text bg-white border-end-0">
              <i class="bi bi-search text-muted"></i>
            </span>
            <input type="text" 
                   class="form-control border-start-0" 
                   placeholder="Search for answers..."
                   id="faqSearch">
          </div>
        </div>
        
        {{-- Popular Searches --}}
        <div class="popular-searches">
          <small class="text-muted me-2">Popular:</small>
          <button class="btn btn-outline-secondary btn-sm me-2 mb-2 search-tag">Pricing</button>
          <button class="btn btn-outline-secondary btn-sm me-2 mb-2 search-tag">Setup</button>
          <button class="btn btn-outline-secondary btn-sm me-2 mb-2 search-tag">Integration</button>
          <button class="btn btn-outline-secondary btn-sm me-2 mb-2 search-tag">Support</button>
        </div>
      </div>
    </div>

    {{-- FAQ List --}}
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="faq-results" id="faqResults">
          
          <div class="faq-item" data-category="pricing" data-tags="pricing cost payment">
            <div class="card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h5 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq1">
                    <i class="bi bi-credit-card text-primary me-2"></i>
                    What are your pricing plans?
                  </button>
                </h5>
              </div>
              <div id="faq1" class="collapse" data-bs-parent="#faqResults">
                <div class="card-body">
                  We offer flexible pricing plans starting from $9/month for individuals, $29/month for teams, and custom enterprise pricing for large organizations.
                </div>
              </div>
            </div>
          </div>

          <div class="faq-item" data-category="setup" data-tags="setup installation getting started">
            <div class="card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h5 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq2">
                    <i class="bi bi-gear text-success me-2"></i>
                    How do I set up my account?
                  </button>
                </h5>
              </div>
              <div id="faq2" class="collapse" data-bs-parent="#faqResults">
                <div class="card-body">
                  Setting up your account is simple. Just sign up, verify your email, and follow our step-by-step onboarding guide.
                </div>
              </div>
            </div>
          </div>

          <div class="faq-item" data-category="integration" data-tags="integration api connect">
            <div class="card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h5 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq3">
                    <i class="bi bi-plug text-info me-2"></i>
                    What integrations are available?
                  </button>
                </h5>
              </div>
              <div id="faq3" class="collapse" data-bs-parent="#faqResults">
                <div class="card-body">
                  We integrate with over 200+ popular tools including Slack, Google Workspace, Salesforce, and many more.
                </div>
              </div>
            </div>
          </div>

          <div class="faq-item" data-category="support" data-tags="support help contact">
            <div class="card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h5 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq4">
                    <i class="bi bi-headset text-warning me-2"></i>
                    How can I contact support?
                  </button>
                </h5>
              </div>
              <div id="faq4" class="collapse" data-bs-parent="#faqResults">
                <div class="card-body">
                  Our support team is available 24/7 through live chat, email, and phone. Premium customers get priority support.
                </div>
              </div>
            </div>
          </div>

          <div class="faq-item" data-category="pricing" data-tags="trial free demo">
            <div class="card border-0 shadow-sm mb-3">
              <div class="card-header bg-white border-0">
                <h5 class="mb-0">
                  <button class="btn btn-link text-start p-0 w-100 text-decoration-none" 
                          data-bs-toggle="collapse" 
                          data-bs-target="#faq5">
                    <i class="bi bi-gift text-danger me-2"></i>
                    Do you offer a free trial?
                  </button>
                </h5>
              </div>
              <div id="faq5" class="collapse" data-bs-parent="#faqResults">
                <div class="card-body">
                  Yes! We offer a 14-day free trial with full access to all features. No credit card required to get started.
                </div>
              </div>
            </div>
          </div>

        </div>
        
        {{-- No Results Message --}}
        <div class="no-results text-center py-5 d-none" id="noResults">
          <i class="bi bi-search display-1 text-muted mb-3"></i>
          <h4>No results found</h4>
          <p class="text-muted">Try adjusting your search or browse our categories above.</p>
        </div>
        
      </div>
    </div>
    
  </div>
</section>

<style>
.faq-search .search-box .input-group {
  max-width: 500px;
  margin: 0 auto;
  border-radius: 50px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.faq-search .search-box .input-group-text {
  border-radius: 50px 0 0 50px;
  padding: 15px 20px;
}

.faq-search .search-box .form-control {
  border-radius: 0 50px 50px 0;
  padding: 15px 20px;
  font-size: 1rem;
}

.faq-search .search-box .form-control:focus {
  box-shadow: none;
  border-color: var(--bs-primary);
}

.faq-search .search-tag {
  border-radius: 20px;
  transition: all 0.3s ease;
}

.faq-search .search-tag:hover {
  background-color: var(--bs-primary);
  border-color: var(--bs-primary);
  color: white;
}

.faq-search .faq-item {
  transition: all 0.3s ease;
}

.faq-search .faq-item.highlight {
  transform: scale(1.02);
  box-shadow: 0 10px 30px rgba(var(--bs-primary-rgb), 0.2) !important;
}

.faq-search .card {
  border-radius: 1rem;
  transition: all 0.3s ease;
}

.faq-search .card:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
}

.faq-search .btn-link {
  color: var(--bs-dark);
  font-weight: 500;
}

.faq-search .btn-link:hover {
  color: var(--bs-primary);
}

.faq-search .card-body {
  color: var(--bs-gray-700);
  line-height: 1.6;
}
</style>

<!--
<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('faqSearch');
  const faqItems = document.querySelectorAll('.faq-item');
  const noResults = document.getElementById('noResults');
  const searchTags = document.querySelectorAll('.search-tag');
  
  // Search functionality
  function filterFAQs(searchTerm) {
    const term = searchTerm.toLowerCase();
    let hasResults = false;
    
    faqItems.forEach(item => {
      const question = item.querySelector('.btn-link').textContent.toLowerCase();
      const answer = item.querySelector('.card-body').textContent.toLowerCase();
      const tags = item.getAttribute('data-tags').toLowerCase();
      
      if (question.includes(term) || answer.includes(term) || tags.includes(term)) {
        item.style.display = 'block';
        hasResults = true;
        
        // Highlight matching items
        if (term.length > 0) {
          item.classList.add('highlight');
        } else {
          item.classList.remove('highlight');
        }
      } else {
        item.style.display = 'none';
        item.classList.remove('highlight');
      }
    });
    
    // Show/hide no results message
    if (hasResults || term.length === 0) {
      noResults.classList.add('d-none');
    } else {
      noResults.classList.remove('d-none');
    }
  }
  
  // Search input event
  searchInput.addEventListener('input', function() {
    filterFAQs(this.value);
  });
  
  // Search tag clicks
  searchTags.forEach(tag => {
    tag.addEventListener('click', function() {
      const searchTerm = this.textContent;
      searchInput.value = searchTerm;
      filterFAQs(searchTerm);
    });
  });
});
</script>
-->