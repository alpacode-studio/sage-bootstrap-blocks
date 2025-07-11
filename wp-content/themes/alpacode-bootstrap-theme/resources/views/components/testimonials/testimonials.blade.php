@props([
  'subtitle' => 'Testimonials',
  'title' => 'What Our Users Are Saying',
  'description' => 'Real Stories of Success and Satisfaction from Our Diverse Community',
  'useMasonry' => true,
  'testimonials' => [
    [
      'quote' => 'This platform has completely transformed the way I manage my business finances. The real-time transaction tracking and seamless payment options have saved me so much time and effort!',
      'author' => [
        'name' => 'John Davis',
        'title' => 'Small Business Owner',
        'image' => 'resources/images/person-sq-2-min.jpg',
        'alt' => 'John Davis'
      ]
    ],
    [
      'quote' => 'As a freelancer, managing my finances can be overwhelming. The budgeting tools and personalized insights have made it so much easier to stay on top of my expenses and plan for the future.',
      'author' => [
        'name' => 'Emily Smith',
        'title' => 'Freelancer',
        'image' => 'resources/images/person-sq-1-min.jpg',
        'alt' => 'Emily Smith'
      ]
    ],
    [
      'quote' => 'The investment options and portfolio management tools on this platform are top-notch. The variety of choices caters to all types of investors, from conservative to aggressive. I especially appreciate how the tailored recommendations align perfectly with my financial goals. It\'s a game-changer for anyone serious about growing their wealth.',
      'author' => [
        'name' => 'Michael Rodriguez',
        'title' => 'Investor',
        'image' => 'resources/images/person-sq-5-min.jpg',
        'alt' => 'Michael Rodriguez'
      ]
    ],
    [
      'quote' => 'I never thought managing money could be this simple! The user-friendly interface and secure transaction process give me the confidence to handle my finances independently.',
      'author' => [
        'name' => 'Sarah Lee',
        'title' => 'College Student',
        'image' => 'resources/images/person-sq-3-min.jpg',
        'alt' => 'Sarah Lee'
      ]
    ],
    [
      'quote' => 'The security features are outstanding. Knowing that my financial data is protected gives me peace of mind, and the platform\'s efficiency makes it a pleasure to use.',
      'author' => [
        'name' => 'James Kim',
        'title' => 'IT Consultant',
        'image' => 'resources/images/person-sq-7-min.jpg',
        'alt' => 'James Kim'
      ]
    ],
    [
      'quote' => 'The platform\'s intuitive design and robust features have been a game-changer for my startup. It\'s helped me streamline operations and focus on growing my business.',
      'author' => [
        'name' => 'Laura Brown',
        'title' => 'Entrepreneur',
        'image' => 'resources/images/person-sq-8-min.jpg',
        'alt' => 'Laura Brown'
      ]
    ]
  ]
])

<section class="section testimonials__v2" id="testimonials">
  <div class="container">
    {{-- Header Section --}}
    <div class="row mb-5">
      <div class="col-lg-5 mx-auto text-center">
        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">{{ $subtitle }}</span>
        <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">{{ $title }}</h2>
        <p data-aos="fade-up" data-aos-delay="200">{{ $description }}</p>
      </div>
    </div>

    {{-- Testimonials Grid --}}
    <div class="row g-4" @if($useMasonry) data-masonry='{"percentPosition": true}' @endif>
      @foreach($testimonials as $index => $testimonial)
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
          <div class="testimonial rounded-4 p-4">
            <blockquote class="mb-3">
              &ldquo;{{ $testimonial['quote'] }}&rdquo;
            </blockquote>
            
            <div class="testimonial-author d-flex gap-3 align-items-center">
              <div class="author-img">
                <img class="rounded-circle img-fluid" 
                     src="{{ Vite::asset($testimonial['author']['image']) }}" 
                     alt="{{ $testimonial['author']['alt'] ?? $testimonial['author']['name'] }}">
              </div>
              <div class="lh-base">
                <strong class="d-block">{{ $testimonial['author']['name'] }}</strong>
                <span>{{ $testimonial['author']['title'] }}</span>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>