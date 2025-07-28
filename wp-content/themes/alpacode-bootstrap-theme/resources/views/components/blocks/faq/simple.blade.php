{{-- Simple FAQ Accordion Component --}}
<section id="faq-simple" class="faq-simple section py-5">
  <div class="container">
    
    {{-- Header --}}
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center" data-aos="fade-up">
        <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
        <p class="lead text-muted">Find answers to common questions about our services.</p>
      </div>
    </div>

    {{-- FAQ Accordion --}}
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="200">
          
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                How does your service work?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Our service provides a comprehensive solution that integrates seamlessly with your existing workflow. Simply sign up, configure your settings, and start seeing results immediately.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                What pricing plans do you offer?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We offer flexible pricing plans including a free tier for getting started, professional plans for growing businesses, and enterprise solutions for large organizations.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Is there a free trial available?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes! We offer a 14-day free trial with full access to all features. No credit card required to get started.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                How do I get support?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Our support team is available 24/7 through live chat, email, and phone. Premium customers also get priority support and dedicated account managers.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                Can I cancel anytime?
              </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Absolutely! You can cancel your subscription at any time with no cancellation fees. Your account will remain active until the end of your current billing period.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
  </div>
</section>

<style>
.faq-simple .accordion {
  border-radius: 1rem;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.faq-simple .accordion-item {
  border: none;
  border-bottom: 1px solid var(--bs-gray-200);
}

.faq-simple .accordion-item:last-child {
  border-bottom: none;
}

.faq-simple .accordion-button {
  font-weight: 600;
  font-size: 1.1rem;
  padding: 1.5rem;
  background: var(--bs-white);
  border: none;
  box-shadow: none;
}

.faq-simple .accordion-button:not(.collapsed) {
  color: var(--bs-primary);
  background-color: var(--bs-light);
}

.faq-simple .accordion-button:focus {
  box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.25);
}

.faq-simple .accordion-body {
  padding: 1.5rem;
  color: var(--bs-gray-700);
  line-height: 1.6;
}
</style>