@props([
  'subtitle' => 'Contact',
  'title' => 'Contact Us',
  'description' => 'Utilize our tools to develop your concepts and bring your vision to life. Once complete, effortlessly share your creations.',
  'contactInfo' => [
    [
      'icon' => 'bi bi-telephone',
      'label' => 'Phone',
      'value' => '+(01 234 567 890)'
    ],
    [
      'icon' => 'bi bi-send',
      'label' => 'Email',
      'value' => 'info@mydomain.com'
    ],
    [
      'icon' => 'bi bi-geo-alt',
      'label' => 'Address',
      'value' => '123 Main Street Apt 4B Springfield, <br> IL 62701 United States'
    ]
  ],
  'formAction' => '#',
  'formMethod' => 'POST',
  'formId' => 'contactForm',
  'fields' => [
    'name' => [
      'label' => 'Name',
      'type' => 'text',
      'required' => true
    ],
    'email' => [
      'label' => 'Email',
      'type' => 'email',
      'required' => true
    ],
    'subject' => [
      'label' => 'Subject',
      'type' => 'text',
      'required' => false
    ],
    'message' => [
      'label' => 'Message',
      'type' => 'textarea',
      'required' => true,
      'rows' => 5
    ]
  ],
  'submitText' => 'Send Message',
  'successMessage' => 'Message sent successfully!',
  'errorMessage' => 'Message sending failed. Please try again later.'
])

<section class="section contact__v2" id="contact">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 col-lg-7 mx-auto text-center">
        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">{{ $subtitle }}</span>
        <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">{{ $title }}</h2>
        <p data-aos="fade-up" data-aos-delay="100">{{ $description }}</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="d-flex gap-5 flex-column">
          @foreach ($contactInfo as $index => $contact)
            <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
              <div class="icon d-block">
                <i class="{{ $contact['icon'] }}"></i>
              </div>
              <span>
                <span class="d-block">{{ $contact['label'] }}</span>
                @if ($contact['label'] === 'Address')
                  <address class="fw-bold">{!! $contact['value'] !!}</address>
                @else
                  <strong>{{ $contact['value'] }}</strong>
                @endif
              </span>
            </div>
          @endforeach
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
          <form id="{{ $formId }}" action="{{ $formAction }}" method="{{ $formMethod }}">
            @if($formMethod === 'POST')
              @csrf
            @endif
            
            @foreach ($fields as $fieldName => $field)
              @if ($field['type'] === 'textarea')
                <div class="row gap-3 mb-3">
                  <div class="col-md-12">
                    <label class="mb-2" for="{{ $fieldName }}">{{ $field['label'] }}</label>
                    <textarea 
                      class="form-control" 
                      id="{{ $fieldName }}" 
                      name="{{ $fieldName }}" 
                      rows="{{ $field['rows'] ?? 5 }}"
                      @if($field['required']) required @endif
                    ></textarea>
                  </div>
                </div>
              @else
                <div class="row gap-3 mb-3">
                  <div class="col-md-12">
                    <label class="mb-2" for="{{ $fieldName }}">{{ $field['label'] }}</label>
                    <input 
                      class="form-control" 
                      id="{{ $fieldName }}" 
                      type="{{ $field['type'] }}" 
                      name="{{ $fieldName }}"
                      @if($field['required']) required @endif
                    >
                  </div>
                </div>
              @endif
            @endforeach
            
            <button class="btn btn-primary fw-semibold" type="submit">{{ $submitText }}</button>
          </form>
          
          <div class="mt-3 d-none alert alert-success" id="successMessage">{{ $successMessage }}</div>
          <div class="mt-3 d-none alert alert-danger" id="errorMessage">{{ $errorMessage }}</div>
        </div>
      </div>
    </div>
  </div>
</section>