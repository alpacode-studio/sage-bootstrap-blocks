{{-- Basic usage --}}
<x-testimonials.testimonials />

{{-- Custom section title --}}
<x-testimonials.testimonials 
  sectionTitle="What Our Clients Say"
  sectionDescription="Real feedback from real people who love working with us."
/>

{{-- Custom testimonials --}}
<x-testimonials.testimonials 
  :testimonials="[
    [
      'name' => 'Sarah Johnson',
      'position' => 'CEO, TechCorp',
      'image' => 'resources/images/clients/sarah.webp',
      'imageAlt' => 'Sarah Johnson CEO',
      'rating' => 5,
      'testimonial' => 'Outstanding service and exceptional results. Our ROI increased by 300% in just 6 months!'
    ],
    [
      'name' => 'Michael Brown',
      'position' => 'Marketing Director',
      'image' => 'resources/images/clients/michael.webp',
      'imageAlt' => 'Michael Brown',
      'rating' => 4,
      'testimonial' => 'Professional team that really understands our business needs. Highly recommended!'
    ],
    [
      'name' => 'Emily Davis',
      'position' => 'Startup Founder',
      'image' => 'resources/images/clients/emily.webp',
      'imageAlt' => 'Emily Davis',
      'rating' => 5,
      'testimonial' => 'They helped us scale from idea to successful product. Incredible expertise and support.'
    ]
  ]"
/>

{{-- No navigation arrows --}}
<x-testimonials.testimonials :showNavigation="false" />

{{-- Custom Swiper configuration --}}
<x-testimonials.testimonials 
  :swiperConfig="[
    'loop' => false,
    'speed' => 800,
    'autoplay' => [
      'delay' => 6000,
      'pauseOnMouseEnter' => true
    ],
    'slidesPerView' => 1,
    'spaceBetween' => 40,
    'breakpoints' => [
      '640' => [
        'slidesPerView' => 1,
        'spaceBetween' => 20
      ],
      '1024' => [
        'slidesPerView' => 2,
        'spaceBetween' => 30
      ]
    ]
  ]"
/>

{{-- Mixed ratings --}}
<x-testimonials.testimonials 
  :testimonials="[
    [
      'name' => 'Alex Wilson',
      'position' => 'Product Manager',
      'image' => 'resources/images/clients/alex.webp',
      'rating' => 5,
      'testimonial' => 'Exceeded all expectations. Perfect 5-star experience!'
    ],
    [
      'name' => 'Lisa Park',
      'position' => 'Designer',
      'image' => 'resources/images/clients/lisa.webp',
      'rating' => 4,
      'testimonial' => 'Great work overall, minor room for improvement but very satisfied.'
    ],
    [
      'name' => 'Tom Rodriguez',
      'position' => 'Developer',
      'image' => 'resources/images/clients/tom.webp',
      'rating' => 3,
      'testimonial' => 'Good service, met most of our requirements.'
    ]
  ]"
/>

{{-- Custom icons --}}
<x-testimonials.testimonials 
  quoteIcon="bi bi-quote"
  starIcon="bi bi-star-fill"
/>

{{-- Long testimonials --}}
<x-testimonials.testimonials 
  :testimonials="[
    [
      'name' => 'Jennifer Lee',
      'position' => 'Operations Director',
      'image' => 'resources/images/clients/jennifer.webp',
      'rating' => 5,
      'testimonial' => 'Working with this team has been transformational for our business. They not only delivered an exceptional product but also provided ongoing support that helped us navigate complex challenges. Their expertise, professionalism, and dedication to our success made them feel like an extension of our own team.'
    ]
  ]"
/>

{{-- Minimal testimonials (no position) --}}
<x-testimonials.testimonials 
  :testimonials="[
    [
      'name' => 'Happy Customer',
      'position' => '',
      'image' => 'resources/images/clients/customer1.webp',
      'rating' => 5,
      'testimonial' => 'Simple, effective, and affordable. Exactly what we needed.'
    ]
  ]"
/>