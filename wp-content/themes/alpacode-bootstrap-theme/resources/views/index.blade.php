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

<x-header.header />
<x-scroll_top_button />
<x-hero.hero />
<x-about.about />
<x-features.features />
<x-features.features_tabs />
<x-services.services />
<x-cta.cta />
<x-testimonials.testimonials />
<x-stats.stats />
<x-pricing.pricing />
<x-faq.faq />
<x-team.team />
<x-contact.contact />
<x-footer.footer />

@endsection

{{--
@section('sidebar')
  @include('sections.sidebar')
@endsection
--}}