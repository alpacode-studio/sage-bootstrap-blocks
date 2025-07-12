{{-- Basic usage --}}
<x-contact.contact />

{{-- Custom section title --}}
<x-contact.contact 
  sectionTitle="Get In Touch"
  sectionDescription="We'd love to hear from you. Send us a message and we'll respond as soon as possible."
/>

{{-- Custom contact info --}}
<x-contact.contact 
  :contactInfo="[
    [
      'icon' => 'bi bi-geo-alt-fill',
      'title' => 'Head Office',
      'content' => '123 Business St, Suite 100, City, State 12345',
      'type' => 'address'
    ],
    [
      'icon' => 'bi bi-envelope-fill',
      'title' => 'Email Us',
      'content' => 'hello@yourcompany.com',
      'type' => 'email',
      'link' => 'mailto:hello@yourcompany.com'
    ],
    [
      'icon' => 'bi bi-whatsapp',
      'title' => 'WhatsApp',
      'content' => '+1 234 567 8900',
      'type' => 'whatsapp',
      'link' => 'https://wa.me/12345678900'
    ]
  ]"
/>

{{-- Custom social links --}}
<x-contact.contact 
  :socialLinks="[
    [
      'icon' => 'bi bi-instagram',
      'url' => 'https://instagram.com/yourcompany',
      'label' => 'Instagram'
    ],
    [
      'icon' => 'bi bi-tiktok',
      'url' => 'https://tiktok.com/@yourcompany',
      'label' => 'TikTok'
    ]
  ]"
/>

{{-- Custom form fields --}}
<x-contact.contact 
  :formFields="[
    [
      'name' => 'name',
      'type' => 'text',
      'label' => 'Your Name',
      'placeholder' => 'John Doe',
      'required' => true,
      'id' => 'userName'
    ],
    [
      'name' => 'email',
      'type' => 'email',
      'label' => 'Email',
      'placeholder' => 'john@example.com',
      'required' => true,
      'id' => 'userEmail'
    ],
    [
      'name' => 'budget',
      'type' => 'select',
      'label' => 'Project Budget',
      'options' => ['< $5K', '$5K - $10K', '$10K+'],
      'required' => false,
      'id' => 'projectBudget'
    ]
  ]"
/>

{{-- Custom form action (for WordPress/Laravel) --}}
<x-contact.contact 
  formAction="/contact"
  formMethod="post"
  submitText="Send Inquiry"
  submitIcon="bi bi-send"
/>

{{-- No social links --}}
<x-contact.contact :socialLinks="[]" />