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

<style>
  /*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
.contact .contact-info-section {
  height: 100%;
}

.contact .contact-info-section .info-header {
  margin-bottom: 40px;
}

.contact .contact-info-section .info-header h3 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 15px;
  color: var(--heading-color);
  position: relative;
  display: inline-block;
}

.contact .contact-info-section .info-header h3:after {
  content: "";
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, var(--accent-color), color-mix(in srgb, var(--accent-color), transparent 50%));
  border-radius: 2px;
}

.contact .contact-info-section .info-header p {
  font-size: 16px;
  line-height: 1.7;
  color: var(--default-color);
  margin-bottom: 0;
}

.contact .contact-info-section .contact-info-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 25px;
  margin-bottom: 40px;
}

.contact .contact-info-section .info-item {
  display: flex;
  align-items: flex-start;
  gap: 20px;
  padding: 25px;
  background: linear-gradient(135deg, var(--surface-color), color-mix(in srgb, var(--surface-color), var(--accent-color) 3%));
  border-radius: 15px;
  border: 1px solid color-mix(in srgb, var(--accent-color), transparent 85%);
  transition: all 0.3s ease;
}

.contact .contact-info-section .info-item:hover {
  transform: translateX(10px);
  border-color: color-mix(in srgb, var(--accent-color), transparent 60%);
  box-shadow: 0 8px 25px color-mix(in srgb, var(--accent-color), transparent 85%);
}

.contact .contact-info-section .info-item:hover .info-icon {
  background-color: var(--accent-color);
}

.contact .contact-info-section .info-item:hover .info-icon i {
  color: var(--contrast-color);
}

.contact .contact-info-section .info-item .info-icon {
  width: 55px;
  height: 55px;
  flex-shrink: 0;
  background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
  border-radius: 12px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.3s ease;
}

.contact .contact-info-section .info-item .info-icon i {
  font-size: 24px;
  color: var(--accent-color);
  transition: all 0.3s ease;
}

.contact .contact-info-section .info-item .info-content {
  flex: 1;
}

.contact .contact-info-section .info-item .info-content h5 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 8px;
  color: var(--heading-color);
}

.contact .contact-info-section .info-item .info-content p {
  font-size: 15px;
  line-height: 1.6;
  color: var(--default-color);
  margin-bottom: 0;
}

.contact .contact-info-section .social-contact {
  padding: 30px;
  background: var(--surface-color);
  border-radius: 20px;
  text-align: center;
}

.contact .contact-info-section .social-contact h5 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 20px;
  color: var(--heading-color);
}

.contact .contact-info-section .social-contact .social-icons {
  display: flex;
  justify-content: center;
  gap: 15px;
}

.contact .contact-info-section .social-contact .social-icons .social-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  background-color: var(--surface-color);
  color: var(--accent-color);
  font-size: 18px;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px color-mix(in srgb, var(--accent-color), transparent 80%);
}

.contact .contact-info-section .social-contact .social-icons .social-icon:hover {
  background-color: var(--accent-color);
  color: var(--contrast-color);
  transform: translateY(-5px) scale(1.1);
  box-shadow: 0 8px 25px color-mix(in srgb, var(--accent-color), transparent 60%);
}

.contact .contact-form-wrapper {
  background: linear-gradient(135deg, var(--surface-color), color-mix(in srgb, var(--surface-color), var(--background-color) 50%));
  padding: 40px;
  border-radius: 25px;
  box-shadow: 0 15px 40px color-mix(in srgb, var(--default-color), transparent 90%);
  border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
}

.contact .contact-form-wrapper .form-header {
  text-align: center;
  margin-bottom: 35px;
}

.contact .contact-form-wrapper .form-header h3 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 15px;
  color: var(--heading-color);
}

.contact .contact-form-wrapper .form-header p {
  font-size: 15px;
  line-height: 1.6;
  color: var(--default-color);
  margin-bottom: 0;
}

.contact .contact-form-wrapper .php-email-form .form-label {
  font-weight: 600;
  color: var(--heading-color);
  margin-bottom: 8px;
  font-size: 14px;
}

.contact .contact-form-wrapper .php-email-form .form-control {
  height: 50px;
  padding: 12px 18px;
  border-radius: 12px;
  border: 2px solid color-mix(in srgb, var(--default-color), transparent 85%);
  background-color: var(--surface-color);
  color: var(--default-color);
  font-size: 16px;
  transition: all 0.3s ease;
}

.contact .contact-form-wrapper .php-email-form .form-control:focus {
  border-color: var(--accent-color);
  box-shadow: 0 0 0 3px color-mix(in srgb, var(--accent-color), transparent 85%);
  background-color: var(--surface-color);
  outline: none;
}

.contact .contact-form-wrapper .php-email-form .form-control::placeholder {
  color: color-mix(in srgb, var(--default-color), transparent 60%);
}

.contact .contact-form-wrapper .php-email-form .message-textarea {
  height: 120px;
  resize: vertical;
  font-family: inherit;
}

.contact .contact-form-wrapper .php-email-form .submit-btn {
  width: 100%;
  background: linear-gradient(135deg, var(--accent-color), color-mix(in srgb, var(--accent-color), #000 20%));
  color: var(--contrast-color);
  border: none;
  padding: 18px 30px;
  border-radius: 15px;
  font-weight: 600;
  font-size: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.contact .contact-form-wrapper .php-email-form .submit-btn:before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, color-mix(in srgb, var(--contrast-color), transparent 80%), transparent);
  transition: left 0.5s ease;
}

.contact .contact-form-wrapper .php-email-form .submit-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 25px color-mix(in srgb, var(--accent-color), transparent 70%);
}

.contact .contact-form-wrapper .php-email-form .submit-btn:hover:before {
  left: 100%;
}

.contact .contact-form-wrapper .php-email-form .submit-btn:hover i {
  transform: translateX(5px);
}

.contact .contact-form-wrapper .php-email-form .submit-btn span {
  position: relative;
  z-index: 1;
}

.contact .contact-form-wrapper .php-email-form .submit-btn i {
  font-size: 18px;
  transition: transform 0.3s ease;
  position: relative;
  z-index: 1;
}

@media (max-width: 992px) {
  .contact .contact-info-section {
    margin-bottom: 40px;
  }

  .contact .contact-info-section .contact-info-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
}

@media (max-width: 768px) {
  .contact .contact-info-section .contact-info-grid {
    grid-template-columns: 1fr;
  }

  .contact .contact-info-section .info-item {
    padding: 20px;
  }

  .contact .contact-info-section .info-item:hover {
    transform: translateY(-5px);
  }

  .contact .contact-form-wrapper {
    padding: 30px 25px;
  }

  .contact .contact-form-wrapper .form-header h3 {
    font-size: 24px;
  }
}
</style>