@if(isset($item['type']))
  @if($item['type'] === 'dropstart')
    <li class="nav-item dropstart">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $item['label'] }} <i class="bi bi-chevron-right"></i>
      </a>
      <ul class="dropdown-menu">
        @foreach($item['items'] as $subItem)
          @include('components.nav-item', ['item' => $subItem, 'level' => ($level ?? 0) + 1])
        @endforeach
      </ul>
    </li>
  @elseif($item['type'] === 'dropend')
    <li class="nav-item dropend">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $item['label'] }} <i class="bi bi-chevron-right"></i>
      </a>
      <ul class="dropdown-menu">
        @foreach($item['items'] as $subItem)
          @include('components.nav-item', ['item' => $subItem, 'level' => ($level ?? 0) + 1])
        @endforeach
      </ul>
    </li>
  @endif
@else
  <li>
    <a class="nav-link {{ isset($item['scroll']) && $item['scroll'] ? 'scroll-link' : '' }} dropdown-item" 
       href="{{ $item['url'] }}">
      {{ $item['label'] }}
    </a>
  </li>
@endif