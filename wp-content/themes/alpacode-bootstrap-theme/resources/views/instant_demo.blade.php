@extends('layouts.app')

@section('title', 'Alpacode Bootstrap Theme')
@section('description', 'Build modern websites with the Alpacode Bootstrap Theme, featuring responsive design and customizable components.')
@section('keywords', 'bootstrap, theme, responsive, modern, website, alpacode, web development, frontend, design, html, css, javascript, blade, laravel, wordpress, alpacode-bootstrap, alpacode-bootstrap-theme')

@php
// Get theme from URL parameter or WordPress customizer
$theme = request()->get('theme', get_theme_mod('site_theme', 'instant'));

// Validate theme exists
$availableThemes = ['instant', 'corporate', 'creative', 'minimal'];
$theme = in_array($theme, $availableThemes) ? $theme : 'instant';
@endphp

@push('styles')
{{-- Let Vite handle the theme CSS files --}}
@vite(['resources/css/themes/' . $theme . '.css'])

{{-- Optional: Load theme components if they exist --}}
@if(file_exists(resource_path("css/themes/{$theme}-components.css")))
  @vite(['resources/css/themes/' . $theme . '-components.css'])
@endif
@endpush

@section('content')



@endsection

@push('scripts')
{{-- Let Vite handle the theme JS files --}}
@vite(['resources/js/themes/' . $theme . '.js'])

{{-- Optional: Load theme interactions if they exist --}}
@if(file_exists(resource_path("js/themes/{$theme}-interactions.js")))
  @vite(['resources/js/themes/' . $theme . '-interactions.js'])
@endif

{{-- Theme-specific initialization --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Set theme data attribute for CSS targeting
  document.documentElement.setAttribute('data-theme', '{{ $theme }}');
  
  // Initialize theme-specific functionality
  if (typeof window.{{ $theme }}Theme !== 'undefined') {
    window.{{ $theme }}Theme.init();
  }
});
</script>
@endpush