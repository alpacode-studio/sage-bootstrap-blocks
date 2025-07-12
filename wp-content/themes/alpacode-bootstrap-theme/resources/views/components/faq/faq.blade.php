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