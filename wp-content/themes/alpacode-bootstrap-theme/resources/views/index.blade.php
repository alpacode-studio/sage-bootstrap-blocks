@extends('layouts.app')

@section('content')
{{--
  @include('partials.page-header')
  @if (! have_posts())
    <x-blocks.alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-blocks.alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
--}}

<x-blocks.header.header />
<x-scroll_top_button />
<x-blocks.hero.hero />
<x-blocks.about.about />
<x-blocks.features.features />
<x-blocks.features.tabs />
<x-blocks.services.services />
<x-blocks.cta.cta />
<x-blocks.testimonials.testimonials />
<x-blocks.stats.stats />
<x-blocks.pricing.pricing />
<x-blocks.faq.faq />
<x-blocks.team.team />
<x-blocks.contact.contact />
<x-blocks.footer.footer />

@endsection

{{--
@section('sidebar')
  @include('sections.sidebar')
@endsection
--}}