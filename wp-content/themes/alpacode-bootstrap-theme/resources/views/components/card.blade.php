{{-- resources/views/components/card.blade.php --}}
@props([
    'item' => null,
    'type' => 'default',
    'showImage' => true,
    'showMeta' => true,
    'showExcerpt' => true,
    'showButton' => true,
    'buttonText' => 'Read More',
    'imageAspect' => 'aspect-video',
    'animation' => true,
    'class' => ''
])

@php
    $cardTypes = [
        'default' => 'bg-white shadow-md hover:shadow-lg',
        'bordered' => 'bg-white border border-gray-200 hover:border-gray-300',
        'minimal' => 'bg-white hover:bg-gray-50',
        'featured' => 'bg-white shadow-lg hover:shadow-xl ring-1 ring-gray-200',
        'glass' => 'bg-white/80 backdrop-blur-sm border border-white/20 shadow-lg hover:shadow-xl'
    ];

    $aspectClasses = [
        'aspect-square' => 'aspect-square',
        'aspect-video' => 'aspect-video',
        'aspect-[4/3]' => 'aspect-[4/3]',
        'aspect-[3/2]' => 'aspect-[3/2]',
        'aspect-[16/10]' => 'aspect-[16/10]'
    ];

    $cardClass = $cardTypes[$type] ?? $cardTypes['default'];
    $aspectClass = $aspectClasses[$imageAspect] ?? $aspectClasses['aspect-video'];
    $animationClass = $animation ? 'transition-all duration-300 transform hover:-translate-y-1' : '';
@endphp

@if($item)
    <article class="rounded-lg overflow-hidden {{ $cardClass }} {{ $animationClass }} {{ $class }}">
        {{-- Image Section --}}
        @if($showImage && !empty($item['image']))
            <div class="relative {{ $aspectClass }} overflow-hidden">
                <img 
                    src="{{ $item['image'] }}" 
                    alt="{{ $item['title'] ?? 'Card image' }}"
                    class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                    loading="lazy"
                />
                @if(!empty($item['category']))
                    <div class="absolute top-3 left-3">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            {{ $item['category'] }}
                        </span>
                    </div>
                @endif
            </div>
        @endif

        {{-- Content Section --}}
        <div class="p-6">
            {{-- Meta Information --}}
            @if($showMeta && (!empty($item['date']) || !empty($item['author']) || !empty($item['tags'])))
                <div class="flex flex-wrap items-center gap-2 mb-3 text-sm text-gray-500">
                    @if(!empty($item['date']))
                        <time datetime="{{ $item['date'] }}">
                            {{ date('M j, Y', strtotime($item['date'])) }}
                        </time>
                    @endif
                    
                    @if(!empty($item['author']))
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            {{ $item['author'] }}
                        </span>
                    @endif

                    @if(!empty($item['readTime']))
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $item['readTime'] }}
                        </span>
                    @endif
                </div>
            @endif

            {{-- Title --}}
            @if(!empty($item['title']))
                <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                    @if(!empty($item['url']))
                        <a href="{{ $item['url'] }}" class="hover:text-blue-600 transition-colors">
                            {{ $item['title'] }}
                        </a>
                    @else
                        {{ $item['title'] }}
                    @endif
                </h3>
            @endif

            {{-- Excerpt --}}
            @if($showExcerpt && !empty($item['excerpt']))
                <p class="text-gray-600 mb-4 line-clamp-3">
                    {{ $item['excerpt'] }}
                </p>
            @endif

            {{-- Tags --}}
            @if(!empty($item['tags']) && is_array($item['tags']))
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach($item['tags'] as $tag)
                        <span class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            @endif

            {{-- Action Button --}}
            @if($showButton && !empty($item['url']))
                <div class="flex items-center justify-between">
                    <a 
                        href="{{ $item['url'] }}" 
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        {{ $buttonText }}
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </article>
@endif