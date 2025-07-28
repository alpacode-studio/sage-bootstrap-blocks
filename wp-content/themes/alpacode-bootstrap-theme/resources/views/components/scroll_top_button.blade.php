@props([
  'icon' => 'bi bi-arrow-up-short',
  'iconSize' => '24px',
  'buttonSize' => '44px',
  'borderRadius' => '50px',
  'threshold' => 100,
  'position' => [
    'right' => '15px',
    'bottom' => '15px'
  ],
  'colors' => [
    'background' => 'var(--accent-color)',
    'backgroundHover' => 'color-mix(in srgb, var(--accent-color), transparent 20%)',
    'iconColor' => 'var(--contrast-color)',
    'iconColorHover' => 'var(--contrast-color)'
  ],
  'transition' => 'all 0.4s',
  'zIndex' => 99999
])

<!-- Scroll Top Button -->
<a href="#" 
   id="scroll-top" 
   class="scroll-top d-flex align-items-center justify-content-center"
   aria-label="Scroll to top">
  <i class="{{ $icon }}"></i>
</a>

@pushOnce('styles')
<style>
/*--------------------------------------------------------------
# Scroll Top Button
--------------------------------------------------------------*/
.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: {{ $position['right'] }};
  bottom: -{{ $position['bottom'] }};
  z-index: {{ $zIndex }};
  background-color: {{ $colors['background'] }};
  width: {{ $buttonSize }};
  height: {{ $buttonSize }};
  border-radius: {{ $borderRadius }};
  transition: {{ $transition }};
  text-decoration: none;
}

.scroll-top i {
  font-size: {{ $iconSize }};
  color: {{ $colors['iconColor'] }};
  line-height: 0;
}

.scroll-top:hover {
  background-color: {{ $colors['backgroundHover'] }};
  color: {{ $colors['iconColorHover'] }};
  text-decoration: none;
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
  bottom: {{ $position['bottom'] }};
}

/* Mobile responsive adjustments */
@media (max-width: 768px) {
  .scroll-top {
    right: 10px;
    width: 40px;
    height: 40px;
  }
  
  .scroll-top i {
    font-size: 20px;
  }
  
  .scroll-top.active {
    bottom: 10px;
  }
}
</style>
@endPushOnce