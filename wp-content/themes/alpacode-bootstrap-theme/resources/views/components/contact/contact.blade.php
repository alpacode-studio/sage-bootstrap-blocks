@props([
  'sectionTitle' => 'Contact',
  'sectionDescription' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit',
  'infoTitle' => 'Connect With Us',
  'infoDescription' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.',
  'contactInfo' => [
    [
      'icon' => 'bi bi-geo-alt-fill',
      'title' => 'Visit Our Office',
      'content' => '1247 Fifth Avenue, Manhattan, NY 10029',
      'type' => 'address'
    ],
    [
      'icon' => 'bi bi-envelope-fill',
      'title' => 'Send Email',
      'content' => 'contact@businessdemo.com',
      'type' => 'email',
      'link' => 'mailto:contact@businessdemo.com'
    ],
    [
      'icon' => 'bi bi-telephone-fill',
      'title' => 'Call Direct',
      'content' => '+1 (646) 892-3456',
      'type' => 'phone',
      'link' => 'tel:+16468923456'
    ],
    [
      'icon' => 'bi bi-clock-fill',
      'title' => 'Business Hours',
      'content' => 'Mon-Sat: 8AM - 7PM',
      'type' => 'hours'
    ]
  ],
  'socialTitle' => 'Follow Our Journey',
  'socialLinks' => [
    [
      'icon' => 'bi bi-facebook',
      'url' => '#',
      'label' => 'Facebook'
    ],
    [
      'icon' => 'bi bi-twitter-x',
      'url' => '#',
      'label' => 'Twitter'
    ],
    [
      'icon' => 'bi bi-linkedin',
      'url' => '#',
      'label' => 'LinkedIn'
    ],
    [
      'icon' => 'bi bi-youtube',
      'url' => '#',
      'label' => 'YouTube'
    ]
  ],
  'formTitle' => 'Send Us Message',
  'formDescription' => 'Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
  'formAction' => 'forms/contact.php',
  'formMethod' => 'post',
  'formFields' => [
    [
      'name' => 'name',
      'type' => 'text',
      'label' => 'Full Name',
      'placeholder' => 'Enter your full name',
      'required' => true,
      'id' => 'contactName'
    ],
    [
      'name' => 'email',
      'type' => 'email',
      'label' => 'Email Address',
      'placeholder' => 'Enter your email address',
      'required' => true,
      'id' => 'contactEmail'
    ],
    [
      'name' => 'phone',
      'type' => 'tel',
      'label' => 'Phone Number',
      'placeholder' => 'Enter your phone number',
      'required' => false,
      'id' => 'contactPhone'
    ],
    [
      'name' => 'subject',
      'type' => 'text',
      'label' => 'Subject',
      'placeholder' => 'Enter message subject',
      'required' => true,
      'id' => 'contactSubject'
    ],
    [
      'name' => 'message',
      'type' => 'textarea',
      'label' => 'Your Message',
      'placeholder' => 'Enter your message',
      'required' => true,
      'id' => 'contactMessage',
      'rows' => 5
    ]
  ],
  'submitText' => 'Send Message',
  'submitIcon' => 'bi bi-arrow-right',
  'loadingText' => 'Loading',
  'errorMessage' => '',
  'successMessage' => 'Your message has been sent. Thank you!'
])

<section id="contact" class="contact section">
  {{-- Section Title --}}
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ $sectionTitle }}</h2>
    <p>{{ $sectionDescription }}</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      
      {{-- Contact Info Column --}}
      <div class="col-lg-6 mb-5" data-aos="fade-right" data-aos-delay="200">
        <div class="contact-info-section">
          <div class="info-header">
            <h3>{{ $infoTitle }}</h3>
            <p>{{ $infoDescription }}</p>
          </div>

          <div class="contact-info-grid">
            @foreach($contactInfo as $index => $info)
              <div class="info-item" data-aos="zoom-in" data-aos-delay="{{ 250 + ($index * 50) }}">
                <div class="info-icon">
                  <i class="{{ $info['icon'] }}"></i>
                </div>
                <div class="info-content">
                  <h5>{{ $info['title'] }}</h5>
                  @if(isset($info['link']))
                    <p><a href="{{ $info['link'] }}">{{ $info['content'] }}</a></p>
                  @else
                    <p>{{ $info['content'] }}</p>
                  @endif
                </div>
              </div>
            @endforeach
          </div>

          @if(!empty($socialLinks))
            <div class="social-contact" data-aos="fade-up" data-aos-delay="450">
              <h5>{{ $socialTitle }}</h5>
              <div class="social-icons">
                @foreach($socialLinks as $social)
                  <a href="{{ $social['url'] }}" class="social-icon" aria-label="{{ $social['label'] }}">
                    <i class="{{ $social['icon'] }}"></i>
                  </a>
                @endforeach
              </div>
            </div>
          @endif
        </div>
      </div>

      {{-- Contact Form Column --}}
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="contact-form-wrapper">
          <div class="form-header">
            <h3>{{ $formTitle }}</h3>
            <p>{{ $formDescription }}</p>
          </div>

          <form action="{{ $formAction }}" method="{{ $formMethod }}" class="php-email-form">
            @if($formMethod === 'post')
              @csrf
            @endif
            
            @foreach($formFields as $field)
              <div class="mb-{{ $field['type'] === 'textarea' ? '4' : '3' }}">
                <label for="{{ $field['id'] }}" class="form-label">{{ $field['label'] }}</label>
                
                @if($field['type'] === 'textarea')
                  <textarea 
                    class="form-control message-textarea" 
                    name="{{ $field['name'] }}" 
                    id="{{ $field['id'] }}" 
                    rows="{{ $field['rows'] ?? 5 }}" 
                    placeholder="{{ $field['placeholder'] }}"
                    {{ $field['required'] ? 'required' : '' }}
                  ></textarea>
                @else
                  <input 
                    type="{{ $field['type'] }}" 
                    name="{{ $field['name'] }}" 
                    class="form-control" 
                    id="{{ $field['id'] }}" 
                    placeholder="{{ $field['placeholder'] }}"
                    {{ $field['required'] ? 'required' : '' }}
                  >
                @endif
              </div>
            @endforeach

            <div class="my-3">
              <div class="loading">{{ $loadingText }}</div>
              @if($errorMessage)
                <div class="error-message">{{ $errorMessage }}</div>
              @else
                <div class="error-message"></div>
              @endif
              <div class="sent-message">{{ $successMessage }}</div>
            </div>

            <button type="submit" class="submit-btn">
              <span>{{ $submitText }}</span>
              <i class="{{ $submitIcon }}"></i>
            </button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</section>