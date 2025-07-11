@props([
  'subtitle' => 'FAQ',
  'title' => 'Frequently Asked Questions',
  'description' => 'Utilize our tools to develop your concepts and bring your vision to life. Once complete, effortlessly share your creations.',
  'accordionId' => 'accordionPanelsStayOpenExample',
  'faqs' => [
    [
      'id' => 'panelsStayOpen-collapseOne',
      'question' => 'What services does your web agency offer?',
      'answer' => 'Our web agency offers a comprehensive range of services including web design and development, e-commerce solutions, SEO optimization, content creation, website maintenance, and digital marketing strategies. We tailor our services to meet the unique needs of each client, ensuring a customized approach to every project.',
      'expanded' => true
    ],
    [
      'id' => 'panelsStayOpen-collapseTwo',
      'question' => 'How much does it cost to build a website?',
      'answer' => 'The cost of building a website can vary widely depending on the complexity, features, and specific requirements of your project. We offer several pricing packages to accommodate different budgets and needs. After an initial consultation, we can provide a detailed quote based on your specific goals and objectives.',
      'expanded' => false
    ],
    [
      'id' => 'panelsStayOpen-collapseThree',
      'question' => 'How long does it take to design and develop a website?',
      'answer' => 'The timeline for designing and developing a website depends on the project\'s complexity and scope. Typically, a standard business website takes about 4-6 weeks to complete, while more complex projects like e-commerce sites or custom applications may take longer. We work closely with our clients to establish a realistic timeline and keep you informed throughout the process.',
      'expanded' => false
    ],
    [
      'id' => 'panelsStayOpen-collapseFour',
      'question' => 'Will my website be mobile-friendly?',
      'answer' => 'Absolutely! All the websites we design and develop are fully responsive, meaning they are optimized to work seamlessly across all devices, including desktops, tablets, and smartphones. Ensuring a great user experience on mobile devices is a top priority in our development process.',
      'expanded' => false
    ],
    [
      'id' => 'panelsStayOpen-collapseFive',
      'question' => 'Do you provide ongoing support and maintenance for websites?',
      'answer' => 'Yes, we offer ongoing support and maintenance services to ensure your website remains up-to-date, secure, and functioning smoothly. Our maintenance packages can include regular updates, security monitoring, backups, and technical support to address any issues that may arise. We\'re here to help you keep your website running efficiently long after it\'s launched.',
      'expanded' => false
    ]
  ]
])

<section class="section faq__v2" id="faq">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-6 col-lg-7 mx-auto text-center">
        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">{{ $subtitle }}</span>
        <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">{{ $title }}</h2>
        <p data-aos="fade-up" data-aos-delay="100">{{ $description }}</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
        <div class="faq-content">
          <div class="accordion custom-accordion" id="{{ $accordionId }}">
            @foreach ($faqs as $index => $faq)
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button 
                    class="accordion-button {{ $faq['expanded'] ? '' : 'collapsed' }}" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#{{ $faq['id'] }}" 
                    aria-expanded="{{ $faq['expanded'] ? 'true' : 'false' }}" 
                    aria-controls="{{ $faq['id'] }}"
                  >
                    {{ $faq['question'] }}
                  </button>
                </h2>
                <div 
                  class="accordion-collapse collapse {{ $faq['expanded'] ? 'show' : '' }}" 
                  id="{{ $faq['id'] }}"
                >
                  <div class="accordion-body">
                    {{ $faq['answer'] }}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>