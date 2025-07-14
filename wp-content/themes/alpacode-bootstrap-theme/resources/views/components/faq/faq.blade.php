@props([
  'faqs' => [
    [
      'question' => 'Vivamus suscipit tortor eget felis porttitor volutpat?',
      'answer' => 'Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.',
      'active' => true
    ],
    [
      'question' => 'Curabitur aliquet quam id dui posuere blandit?',
      'answer' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.',
      'active' => false
    ],
    [
      'question' => 'Sed porttitor lectus nibh ullamcorper sit amet?',
      'answer' => 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum.',
      'active' => false
    ],
    [
      'question' => 'Nulla quis lorem ut libero malesuada feugiat?',
      'answer' => 'Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel.',
      'active' => false
    ],
    [
      'question' => 'Vestibulum ac diam sit amet quam vehicula elementum?',
      'answer' => 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
      'active' => false
    ]
  ],
  'helpCard' => [
    'icon' => 'bi bi-chat-dots-fill',
    'title' => 'Can\'t find answer to your question?',
    'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat.',
    'buttonText' => 'Contact Us',
    'buttonUrl' => '#'
  ],
  'showHelpCard' => true,
  'toggleIcon' => 'bi bi-plus',
  'activeToggleIcon' => 'bi bi-dash'
])

<section id="faq" class="faq section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 justify-content-between">
      
      {{-- FAQ Items Column --}}
      <div class="col-lg-8">
        <div class="faq-list">
          @foreach($faqs as $index => $faq)
            <div class="faq-item {{ $faq['active'] ? 'faq-active' : '' }}" 
                 data-aos="fade-up" 
                 data-aos-delay="{{ 100 + ($index * 100) }}">
              
              <h3>{{ $faq['question'] }}</h3>
              
              <div class="faq-content">
                <p>{{ $faq['answer'] }}</p>
              </div>
              
              <i class="{{ $faq['active'] ? $activeToggleIcon : $toggleIcon }} faq-toggle"></i>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Help Card Column --}}
      @if($showHelpCard && $helpCard)
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="faq-card">
            <i class="{{ $helpCard['icon'] }}"></i>
            <h3>{{ $helpCard['title'] }}</h3>
            <p>{{ $helpCard['description'] }}</p>
            <a href="{{ $helpCard['buttonUrl'] }}" class="btn btn-primary">{{ $helpCard['buttonText'] }}</a>
          </div>
        </div>
      @endif
      
    </div>
  </div>
</section>

<style>
  /*--------------------------------------------------------------
# Faq Section
--------------------------------------------------------------*/
.faq .faq-card {
  height: 100%;
  padding: 40px;
  background-color: color-mix(in srgb, var(--default-color), transparent 96%);
  border-radius: 8px;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  text-align: center;
}

.faq .faq-card i {
  font-size: 48px;
  color: var(--accent-color);
  margin-bottom: 20px;
  display: block;
}

.faq .faq-card h3 {
  font-size: 24px;
  margin-bottom: 15px;
}

.faq .faq-card p {
  margin-bottom: 25px;
  font-size: 15px;
  line-height: 24px;
  color: color-mix(in srgb, var(--default-color), transparent 30%);
}

.faq .faq-card .btn-primary {
  padding: 8px 20px;
  font-size: 16px;
  font-weight: 500;
  border-radius: 50px;
  background-color: var(--accent-color);
  border-color: var(--accent-color);
  color: var(--contrast-color);
}

.faq .faq-card .btn-primary:hover {
  background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
  border-color: color-mix(in srgb, var(--accent-color), transparent 20%);
}

.faq .faq-list {
  padding: 0;
}

.faq .faq-list .faq-item {
  position: relative;
  margin-bottom: 25px;
  padding: 30px;
  background-color: var(--surface-color);
  border-radius: 8px;
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
  cursor: pointer;
}

.faq .faq-list .faq-item:last-child {
  margin-bottom: 0;
}

.faq .faq-list .faq-item h3 {
  font-size: 18px;
  line-height: 28px;
  font-weight: 600;
  padding-right: 40px;
  margin-bottom: 0;
  position: relative;
  cursor: pointer;
}

.faq .faq-list .faq-item .faq-content {
  display: grid;
  grid-template-rows: 0fr;
  transition: 0.3s ease-in-out;
  visibility: hidden;
  opacity: 0;
}

.faq .faq-list .faq-item .faq-content p {
  margin-bottom: 0;
  font-size: 15px;
  line-height: 24px;
  overflow: hidden;
}

.faq .faq-list .faq-item .faq-toggle {
  position: absolute;
  right: 30px;
  top: 30px;
  font-size: 24px;
  color: var(--accent-color);
  transition: transform 0.2s ease;
}

.faq .faq-list .faq-item.faq-active h3 {
  color: var(--accent-color);
}

.faq .faq-list .faq-item.faq-active .faq-content {
  grid-template-rows: 1fr;
  visibility: visible;
  opacity: 1;
  padding-top: 15px;
}

.faq .faq-list .faq-item.faq-active .faq-toggle {
  transform: rotate(45deg);
}

@media (max-width: 768px) {
  .faq .faq-list .faq-item {
    padding: 20px;
  }

  .faq .faq-list .faq-item h3 {
    font-size: 16px;
    line-height: 24px;
  }

  .faq .faq-list .faq-item .faq-toggle {
    right: 20px;
    top: 20px;
    font-size: 20px;
  }
}
</style>

<script>
  /**
 * FAQ accordion functionality
 * Use with: FAQ component
 */
function initFAQAccordion(containerSelector = '.faq-list') {
  const container = document.querySelector(containerSelector);
  if (!container) return;

  const faqItems = container.querySelectorAll('.faq-item h3, .faq-item .faq-toggle, .faq-item .faq-header');
  
  faqItems.forEach((faqItem) => {
    faqItem.addEventListener('click', (e) => {
      e.preventDefault();
      const faqItemContainer = faqItem.closest('.faq-item');
      if (faqItemContainer) {
        faqItemContainer.classList.toggle('faq-active');
      }
    });
  });
}

// Initialize when FAQ component mounts
initFAQAccordion();
</script>