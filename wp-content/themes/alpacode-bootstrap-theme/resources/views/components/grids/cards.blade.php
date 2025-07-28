
@props([
    'items' => [],
    'columns' => 4,
    'gap' => 4,
    'cardStyle' => 'modern', // modern, classic, minimal
    'hoverEffect' => 'lift', // lift, zoom, glow
    'animation' => 'fade-up',
    'delay' => 100,
    'title' => null,
    'subtitle' => null,
    'emptyMessage' => 'No items to display'
])

<div class="card-grid-component">
    @if($title || $subtitle)
        <div class="mb-5 text-center" data-aos="fade-up">
            @if($title)
                <h2 class="display-5 fw-bold mb-3">{{ $title }}</h2>
            @endif
            @if($subtitle)
                <p class="lead text-muted">{{ $subtitle }}</p>
            @endif
        </div>
    @endif

    @if(!empty($items))
        <div class="row g-{{ $gap }}">
            @foreach($items as $index => $item)
                <div class="col-lg-{{ 12 / $columns }} col-md-6 col-sm-12" 
                     data-aos="{{ $animation }}" 
                     data-aos-delay="{{ $index * $delay }}">
                    <div class="custom-card card-{{ $cardStyle }} hover-{{ $hoverEffect }}">
                        @if(isset($item['image']))
                            <div class="card-image-wrapper">
                                <img src="{{ $item['image'] }}" 
                                     alt="{{ $item['title'] ?? '' }}" 
                                     class="card-img-top"
                                     loading="lazy">
                                @if(isset($item['badge']))
                                    <div class="card-badge">{{ $item['badge'] }}</div>
                                @endif
                            </div>
                        @endif
                        
                        <div class="card-body">
                            @if(isset($item['category']))
                                <div class="card-category">{{ $item['category'] }}</div>
                            @endif
                            
                            @if(isset($item['title']))
                                <h5 class="card-title">{{ $item['title'] }}</h5>
                            @endif
                            
                            @if(isset($item['description']))
                                <p class="card-text">{{ $item['description'] }}</p>
                            @endif
                            
                            @if(isset($item['meta']))
                                <div class="card-meta">
                                    @foreach($item['meta'] as $meta)
                                        <span class="meta-item">
                                            <i class="bi {{ $meta['icon'] }}"></i>
                                            {{ $meta['text'] }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                            
                            @if(isset($item['link']))
                                <a href="{{ $item['link'] }}" class="btn btn-primary btn-sm">
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
            <i class="bi bi-grid display-1 text-muted mb-3"></i>
            <h4 class="text-muted">{{ $emptyMessage }}</h4>
        </div>
    @endif
</div>

<style>
    .card-grid-component {
        .custom-card {
            height: 100%;
            border: none;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
            
            &.card-modern {
                background: white;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            }
            
            &.card-classic {
                background: white;
                border: 1px solid #e9ecef;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            }
            
            &.card-minimal {
                background: white;
                box-shadow: none;
                border: 1px solid rgba(0, 0, 0, 0.05);
            }
            
            &.hover-lift:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            }
            
            &.hover-zoom:hover {
                transform: scale(1.02);
            }
            
            &.hover-glow:hover {
                box-shadow: 0 0 30px rgba(0, 123, 255, 0.3);
            }
        }
        
        .card-image-wrapper {
            position: relative;
            overflow: hidden;
            
            img {
                width: 100%;
                height: 200px;
                object-fit: cover;
                transition: transform 0.3s ease;
            }
            
            &:hover img {
                transform: scale(1.05);
            }
        }
        
        .card-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .card-category {
            color: #6c757d;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        
        .card-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid #e9ecef;
            
            .meta-item {
                display: flex;
                align-items: center;
                gap: 6px;
                font-size: 0.9rem;
                color: #6c757d;
            }
        }
        
        @media (max-width: 768px) {
            .card-meta {
                flex-direction: column;
                gap: 8px;
            }
        }
    }

    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
</style>

