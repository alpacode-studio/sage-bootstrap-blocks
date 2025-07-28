@props([
    'items' => [],
    'columns' => 3,
    'gap' => '34px',
    'animation' => 'fade-up',
    'delay' => 100,
    'title' => null,
    'subtitle' => null,
    'emptyMessage' => 'No items to display',
    'showFilters' => false,
    'filters' => []
])

<div class="masonry-wrapper">
    <div class="container-fluid px-3 px-md-4 py-5">
        <div class="masonry-component">
            @if($title || $subtitle)
                <div class="mb-5 text-center" data-aos="fade-up">
                    @if($title)
                        <h2 class="hero-title mb-3">{{ $title }}</h2>
                    @endif
                    @if($subtitle)
                        <p class="hero-subtitle">{{ $subtitle }}</p>
                    @endif
                </div>
            @endif

            @if($showFilters && !empty($filters))
                <div class="filter-controls mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
                    <button class="filter-btn active" data-filter="*">All</button>
                    @foreach($filters as $filter)
                        <button class="filter-btn" data-filter="{{ $filter }}">{{ $filter }}</button>
                    @endforeach
                </div>
            @endif

            @if(!empty($items))
                <div class="masonry-grid" data-gap="{{ $gap }}">
                    @foreach($items as $index => $item)
                        <div class="masonry-item {{ $item['category'] ?? '' }}" 
                             data-aos="{{ $animation }}" 
                             data-aos-delay="{{ $index * $delay }}">
                            <div class="masonry-card">
                                @if(isset($item['image']))
                                    <div class="card-image">
                                        <img src="{{ $item['image'] }}" 
                                             alt="{{ $item['title'] ?? '' }}" 
                                             loading="lazy">
                                    </div>
                                @endif
                                
                                <div class="card-content">
                                    @if(isset($item['title']))
                                        <h3 class="card-title">{{ $item['title'] }}</h3>
                                    @endif
                                    
                                    @if(isset($item['description']))
                                        <p class="card-description">{{ $item['description'] }}</p>
                                    @endif
                                    
                                    @if(isset($item['tags']))
                                        <div class="card-tags">
                                            @foreach($item['tags'] as $tag)
                                                <span class="tag">{{ $tag }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                    
                                    @if(isset($item['link']))
                                        <a href="{{ $item['link'] }}" class="card-link">
                                            {{ $item['linkText'] ?? 'Learn More' }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state text-center py-5" data-aos="fade-up">
                    <div class="empty-icon mb-3">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <path d="M9 9L15 15M15 9L9 15"/>
                        </svg>
                    </div>
                    <h4 class="empty-title">{{ $emptyMessage }}</h4>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
.masonry-wrapper {
    font-family: var(--default-font);
    color: var(--default-color);
}

.masonry-component {
    max-width: 1600px;
    margin: 0 auto;
}

/* Hero Section */
.hero-title {
    font-size: 2.5rem;
    font-weight: 700;
    background: linear-gradient(135deg, var(--accent-color) 0%, #f4a261 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1.2;
    font-family: var(--heading-font);
    color: var(--heading-color);
}

.hero-subtitle {
    font-size: 1.1rem;
    color: var(--default-color);
    opacity: 0.8;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Filter Controls */
.filter-controls {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 0.5rem 1.2rem;
    border: 2px solid var(--surface-color);
    border-radius: 50px;
    background: var(--surface-color);
    color: var(--default-color);
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover {
    border-color: var(--accent-color);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(229, 157, 2, 0.2);
}

.filter-btn.active {
    background: var(--accent-color);
    border-color: var(--accent-color);
    color: var(--contrast-color);
    box-shadow: 0 4px 12px rgba(229, 157, 2, 0.3);
}

/* Masonry Layout - Using CSS Columns with explicit classes */
.masonry-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 24px;
}

.masonry-item {
  width: 100%;
}

/*
.masonry-item {
    break-inside: avoid;
    margin-bottom: 24px;
    display: block;
    width: 100%;
}
*/

/* Column count classes */
.masonry-cols-1 { column-count: 1; }
.masonry-cols-2 { column-count: 2; }
.masonry-cols-3 { column-count: 3; }
.masonry-cols-4 { column-count: 4; }
.masonry-cols-5 { column-count: 5; }

.masonry-card {
    background: var(--surface-color);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.masonry-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.2), 0 10px 10px rgba(0, 0, 0, 0.1);
    border-color: rgba(229, 157, 2, 0.3);
}

.card-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 16/9;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.card-image:hover img {
    transform: scale(1.05);
}

.card-content {
    padding: 1.5rem;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--heading-color);
    margin-bottom: 0.75rem;
    line-height: 1.4;
    font-family: var(--heading-font);
}

.card-description {
    color: var(--default-color);
    opacity: 0.8;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.card-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.tag {
    padding: 0.25rem 0.75rem;
    background: rgba(229, 157, 2, 0.1);
    border: 1px solid rgba(229, 157, 2, 0.3);
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--accent-color);
    transition: all 0.2s ease;
}

.tag:hover {
    background: var(--accent-color);
    color: var(--contrast-color);
    border-color: var(--accent-color);
}

.card-link {
    display: inline-flex;
    align-items: center;
    padding: 0.75rem 1.5rem;
    background: var(--accent-color);
    color: var(--contrast-color);
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.card-link:hover {
    background: color-mix(in srgb, var(--accent-color), transparent 15%);
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(229, 157, 2, 0.3);
    color: var(--contrast-color);
}

/* Empty State */
.empty-state {
    padding: 3rem 1rem;
}

.empty-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    background: var(--surface-color);
    border-radius: 50%;
    color: var(--default-color);
    opacity: 0.5;
    margin: 0 auto;
}

.empty-title {
    color: var(--default-color);
    font-weight: 500;
    margin-bottom: 0;
    opacity: 0.7;
}

/* Responsive */
@media (max-width: 768px) {
    .masonry-grid {
        column-count: 1 !important;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .card-content {
        padding: 1.25rem;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .masonry-grid {
        column-count: 2 !important;
    }
}

/* Set gap dynamically via JavaScript */
.masonry-grid[data-gap] {
    column-gap: var(--gap);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Set CSS gap from data attribute
    const grid = document.querySelector('.masonry-grid');
    if (grid) {
        const gap = grid.dataset.gap || '34px';
        grid.style.setProperty('--gap', gap);
        grid.style.columnGap = gap;
        
        // Also update margin-bottom for items
        const items = grid.querySelectorAll('.masonry-item');
        items.forEach(item => {
            item.style.marginBottom = gap;
        });
    }
    
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.masonry-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            items.forEach(item => {
                if (filter === '*' || item.classList.contains(filter)) {
                    item.style.display = 'inline-block';
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        item.style.transition = 'all 0.3s ease';
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 100);
                } else {
                    item.style.transition = 'all 0.3s ease';
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(-20px)';
                    
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>