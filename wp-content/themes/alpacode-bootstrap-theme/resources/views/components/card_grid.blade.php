{{-- resources/views/components/card-grid.blade.php --}}
@props([
    'items' => [],
    'columns' => 'auto',
    'gap' => 'md',
    'cardType' => 'default',
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
    $columnClasses = [
        'auto' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        '1' => 'grid-cols-1',
        '2' => 'grid-cols-1 md:grid-cols-2',
        '3' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        '4' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4',
        '5' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5',
        '6' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6'
    ];

    $gapClasses = [
        'sm' => 'gap-4',
        'md' => 'gap-6',
        'lg' => 'gap-8',
        'xl' => 'gap-12'
    ];

    $gridClass = $columnClasses[$columns] ?? $columnClasses['auto'];
    $gapClass = $gapClasses[$gap] ?? $gapClasses['md'];
@endphp

<div class="w-full {{ $class }}">
    @if(!empty($items))
        <div class="grid {{ $gridClass }} {{ $gapClass }}">
            @foreach($items as $item)
                <x-card 
                    :item="$item"
                    :type="$cardType"
                    :showImage="$showImage"
                    :showMeta="$showMeta"
                    :showExcerpt="$showExcerpt"
                    :showButton="$showButton"
                    :buttonText="$buttonText"
                    :imageAspect="$imageAspect"
                    :animation="$animation"
                />
            @endforeach
        </div>
    @else
        <div class="flex items-center justify-center py-12">
            <div class="text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No items found</h3>
                <p class="text-gray-500">There are no items to display at the moment.</p>
            </div>
        </div>
    @endif
</div>