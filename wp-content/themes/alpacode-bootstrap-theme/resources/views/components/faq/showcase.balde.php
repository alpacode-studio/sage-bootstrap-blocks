{{-- Basic usage --}}
<x-faq.faq />

{{-- Custom FAQs --}}
<x-faq.faq 
  :faqs="[
    [
      'question' => 'How does your platform work?',
      'answer' => 'Our platform uses advanced AI technology to streamline your workflow and automate repetitive tasks.',
      'active' => true
    ],
    [
      'question' => 'What pricing plans do you offer?',
      'answer' => 'We offer three pricing tiers: Starter ($9/month), Professional ($29/month), and Enterprise (custom pricing).',
      'active' => false
    ],
    [
      'question' => 'Is there a free trial available?',
      'answer' => 'Yes! We offer a 14-day free trial with full access to all features.',
      'active' => false
    ]
  ]"
/>

{{-- Custom help card --}}
<x-faq.faq 
  :helpCard="[
    'icon' => 'bi bi-headset',
    'title' => 'Need More Help?',
    'description' => 'Our support team is available 24/7 to help you with any questions or technical issues.',
    'buttonText' => 'Get Support',
    'buttonUrl' => '/support'
  ]"
/>

{{-- No help card (full width FAQ) --}}
<x-faq.faq :showHelpCard="false" />

{{-- Custom toggle icons --}}
<x-faq.faq 
  toggleIcon="bi bi-chevron-down"
  activeToggleIcon="bi bi-chevron-up"
/>

{{-- All FAQs closed by default --}}
<x-faq.faq 
  :faqs="[
    [
      'question' => 'First question?',
      'answer' => 'First answer.',
      'active' => false
    ],
    [
      'question' => 'Second question?',
      'answer' => 'Second answer.',
      'active' => false
    ]
  ]"
/>

{{-- Multiple active FAQs --}}
<x-faq.faq 
  :faqs="[
    [
      'question' => 'Question 1?',
      'answer' => 'Answer 1.',
      'active' => true
    ],
    [
      'question' => 'Question 2?',
      'answer' => 'Answer 2.',
      'active' => true
    ]
  ]"
/>

{{-- Different help card content --}}
<x-faq.faq 
  :helpCard="[
    'icon' => 'bi bi-envelope',
    'title' => 'Send us an Email',
    'description' => 'Drop us a line and we\'ll get back to you within 24 hours.',
    'buttonText' => 'Email Us',
    'buttonUrl' => 'mailto:support@yourcompany.com'
  ]"
/>