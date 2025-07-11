@extends('layouts.app')

@section('content')
{{--
  @include('partials.page-header')
  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
--}}

<br>
<br>

<x-header 
  :navigation="[
    ['label' => 'Home', 'url' => '/', 'active' => true],
    ['label' => 'About', 'url' => '/about'],
    ['label' => 'Contact', 'url' => '/contact']
  ]"
/>
{{--

<x-header 
  :logo="['text' => 'MyBrand', 'url' => '/']"
  theme="light"
/>

<x-header 
  :cta="['text' => 'Sign Up', 'url' => '/register', 'class' => 'btn btn-success']"
/>
--}}

<x-hero
  title="Next-Gen Banking Tools"
  subtitle="Powering Modern Finance"
  description="Simplify your financial operations with intuitive and secure tools."
  :ctaPrimary="['label' => 'Join Now', 'url' => '/signup']"
  :ctaSecondary="['label' => 'See Features', 'url' => '/features']"
  :logos="[
    ['src' => 'resources/images/logo/actual-size/logo-air-bnb__black.svg', 'alt' => 'Airbnb', 'width' => '110px'],
    ['src' => 'resources/images/logo/actual-size/logo-ibm__black.svg', 'alt' => 'IBM', 'width' => '80px'],
    ['src' => 'resources/images/logo/actual-size/logo-google__black.svg', 'alt' => 'Google', 'width' => '110px'],
  ]"
  imageMain="resources/images/hero-img-1-min.jpg"
  imageCard="resources/images/card-expenses.png"
/>

<x-about 
  :values="['Innovation', 'Security', 'Trust', 'Excellence']"
  :description="['Custom paragraph 1', 'Custom paragraph 2']"
  title="Custom title here"
  missionDescription="Custom mission statement"
/>

<x-contact />
{{--
<x-contact 
  :contactInfo="[
    ['icon' => 'bi bi-telephone', 'label' => 'Phone', 'value' => '+1 555 123 4567'],
    ['icon' => 'bi bi-envelope', 'label' => 'Email', 'value' => 'hello@mycompany.com']
  ]"
  formAction="/contact"
  submitText="Get In Touch"
/>

<x-contact 
  :fields="[
    'name' => ['label' => 'Full Name', 'type' => 'text', 'required' => true],
    'email' => ['label' => 'Email Address', 'type' => 'email', 'required' => true],
    'message' => ['label' => 'Your Message', 'type' => 'textarea', 'required' => true, 'rows' => 3]
  ]"
/>
--}}

<x-faq />
{{--
<x-faq 
  :faqs="[
    [
      'id' => 'faq-pricing',
      'question' => 'What are your pricing plans?',
      'answer' => 'We offer three main pricing tiers to suit different needs...',
      'expanded' => true
    ],
    [
      'id' => 'faq-support',
      'question' => 'Do you offer customer support?',
      'answer' => 'Yes, we provide 24/7 customer support...',
      'expanded' => false
    ]
  ]"
  title="Got Questions?"
  subtitle="Help Center"
/>
 
<x-faq 
  accordionId="pricingFAQ"
  title="Pricing Questions"
/>
--}}

<x-features />
{{--

<x-features 
  title="Our Key Benefits"
  :features="[
    [
      'icon' => 'bi bi-rocket',
      'title' => 'Fast Performance',
      'description' => 'Lightning-fast loading speeds for optimal user experience.'
    ],
    [
      'icon' => 'bi bi-gear',
      'title' => 'Customizable',
      'description' => 'Fully customizable to match your brand and requirements.'
    ]
  ]"
/>

<x-features 
  :showVideo="false"
  title="Why We're Different"
/>

<x-features 
  videoUrl="https://vimeo.com/123456789"
  videoText="See Demo"
  title="Product Overview"
/>

<x-features 
  :features="[
    ['icon' => 'bi bi-check-circle', 'title' => 'Reliable', 'description' => 'Proven track record.'],
    ['icon' => 'bi bi-star', 'title' => 'Quality', 'description' => 'Premium service.']
  ]"
/>
--}}

<x-pricing />
{{--
<x-pricing 
  title="Choose Your Plan"
  subtitle="Packages"
  :plans="[
    [
      'name' => 'Starter',
      'description' => 'Perfect for individuals getting started.',
      'price' => ['amount' => 'Free', 'period' => ''],
      'buttonText' => 'Start Free',
      'buttonUrl' => '/signup',
      'buttonClass' => 'btn btn-outline-primary',
      'type' => 'simple',
      'features' => []
    ],
    [
      'name' => 'Pro',
      'description' => 'Advanced features for growing businesses.',
      'price' => ['amount' => '$49', 'period' => '/ month'],
      'buttonText' => 'Get Pro',
      'buttonUrl' => '/subscribe/pro',
      'buttonClass' => 'btn btn-primary',
      'type' => 'featured',
      'features' => [
        'Advanced analytics dashboard',
        '24/7 priority support',
        'Custom integrations',
        'Unlimited users'
      ]
    ]
  ]"
/>

<x-pricing 
  :plans="[
    [
      'name' => 'Enterprise',
      'description' => 'Custom solutions for large organizations.',
      'price' => ['amount' => 'Custom', 'period' => 'pricing'],
      'buttonText' => 'Contact Sales',
      'buttonUrl' => '/contact',
      'buttonClass' => 'btn btn-success',
      'type' => 'featured',
      'featuresTitle' => 'Everything Included',
      'features' => [
        'Dedicated account manager',
        'Custom implementation',
        'SLA guarantees',
        'Advanced security features'
      ]
    ]
  ]"
/>
--}}

<x-services />
{{--
<x-services 
  title="What We Offer"
  subtitle="Solutions"
  :services="[
    [
      'icon' => '<i class=\"bi bi-shield-check fs-1\"></i>',
      'title' => 'Security First',
      'description' => 'Top-notch security measures to protect your data.',
      'link' => ['url' => '/security', 'text' => 'Learn more']
    ],
    [
      'icon' => '<i class=\"bi bi-lightning fs-1\"></i>',
      'title' => 'Fast Performance',
      'description' => 'Lightning-fast response times for optimal experience.',
      'link' => ['url' => '/performance', 'text' => 'See details']
    ]
  ]"
/>

<x-services 
  :services="[
    [
      'icon' => '<i class=\"bi bi-gear fs-1\"></i>',
      'title' => 'Custom Solutions',
      'description' => 'Tailored solutions for your specific needs.'
    ]
  ]"
/>
--}}

<x-stats />
{{--
<x-stats 
  :stats="[
    [
      'number' => 500,
      'suffix' => '+',
      'label' => 'Happy Clients',
      'duration' => 3,
      'start' => 0
    ],
    [
      'number' => 99,
      'suffix' => '%',
      'label' => 'Success Rate',
      'duration' => 2,
      'start' => 0
    ],
    [
      'number' => 24,
      'suffix' => '/7',
      'label' => 'Support Available',
      'duration' => 1,
      'start' => 0
    ],
    [
      'number' => 15,
      'suffix' => 'M+',
      'label' => 'Transactions Processed',
      'duration' => 4,
      'start' => 0
    ]
  ]"
/>

<x-stats 
  :showBorders="false"
  :stats="[
    ['number' => 1000, 'suffix' => '+', 'label' => 'Projects Completed'],
    ['number' => 50, 'suffix' => '+', 'label' => 'Team Members']
  ]"
/>

<x-stats 
  :stats="[
    [
      'number' => 100,
      'suffix' => '%',
      'label' => 'Client Satisfaction',
      'duration' => 5,  // Slower animation
      'start' => 90     // Start from 90 instead of 0
    ]
  ]"
/>
--}}

<x-testimonials />
{{--
<x-testimonials 
  title="Client Success Stories"
  subtitle="Reviews"
  description="Hear what our satisfied customers have to say about their experience."
  :testimonials="[
    [
      'quote' => 'Absolutely amazing service! Highly recommend to everyone.',
      'author' => [
        'name' => 'Alex Johnson',
        'title' => 'CEO, TechCorp',
        'image' => 'resources/images/alex.jpg',
        'alt' => 'Alex Johnson Photo'
      ]
    ],
    [
      'quote' => 'The best investment I\'ve made for my business this year.',
      'author' => [
        'name' => 'Maria Garcia',
        'title' => 'Marketing Director',
        'image' => 'resources/images/maria.jpg'
      ]
    ]
  ]"
/>

<x-testimonials 
  :useMasonry="false"
  :testimonials="[
    [
      'quote' => 'Simple and effective solution.',
      'author' => [
        'name' => 'David Chen',
        'title' => 'Developer',
        'image' => 'resources/images/david.jpg'
      ]
    ]
  ]"
/>

<x-testimonials 
  subtitle="Customer Feedback"
  title="Why People Love Our Platform"
  description="Discover the impact we've made on businesses and individuals worldwide."
/>
--}}

<x-footer />
{{--


<x-footer 
  :newsletter="[
    'title' => 'Stay Connected',
    'description' => 'Get the latest updates and news.',
    'action' => '/newsletter/subscribe',
    'buttonText' => 'Join Now'
  ]"
/>

<x-footer 
  :credits="[
    'companyName' => 'Your Company',
    'designedBy' => ['text' => 'Your Agency', 'url' => 'https://youragency.com']
  ]"
/>

<x-footer 
  :links="[
    [
      'title' => 'Products',
      'items' => [
        ['label' => 'Web Design', 'url' => '/web-design'],
        ['label' => 'SEO Services', 'url' => '/seo', 'badge' => 'popular']
      ]
    ]
  ]"
/>

<x-footer 
  :contact="[
    'title' => 'Get in Touch',
    'items' => [
      [
        'icon' => 'bi bi-envelope',
        'text' => 'hello@company.com',
        'url' => 'mailto:hello@company.com',
        'type' => 'email'
      ]
    ]
  ]"
/>
--}}

<br>
<br>

@endsection

{{--
@section('sidebar')
  @include('sections.sidebar')
@endsection
--}}