

@props([
    'items' => [],
    'columns' => 3,
    'style' => 'modern', // modern, classic, minimal
    'featured' => null, // index of featured plan
    'animation' => 'fade-up',
    'title' => null,
    'subtitle' => null,
    'emptyMessage' => 'No pricing plans to display',
    'showAnnualToggle' => false,
    'annualDiscount' => 20
])

<div class="pricing-table-component">
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

    @if($showAnnualToggle)
        <div class="billing-toggle mb-5 text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="btn-group" role="group">
                <input type="radio" class="btn-check" name="billing" id="monthly" checked>
                <label class="btn btn-outline-primary" for="monthly">Monthly</label>
                
                <input type="radio" class="btn-check" name="billing" id="annual">
                <label class="btn btn-outline-primary" for="annual">
                    Annual <span class="badge bg-success ms-2">Save {{ $annualDiscount }}%</span>
                </label>
            </div>
        </div>
    @endif

    @if(!empty($items))
        <div class="row g-4 justify-content-center">
            @foreach($items as $index => $item)
                <div class="col-lg-{{ 12 / min($columns, count($items)) }} col-md-6 col-sm-12" 
                     data-aos="{{ $animation }}" 
                     data-aos-delay="{{ $index * 150 }}">
                    <div class="pricing-card pricing-{{ $style }} {{ $index === $featured ? 'featured' : '' }}">
                        @if($index === $featured)
                            <div class="featured-badge">
                                <span>{{ $item['featuredText'] ?? 'Most Popular' }}</span>
                            </div>
                        @endif
                        
                        <div class="pricing-header">
                            @if(isset($item['icon']))
                                <div class="pricing-icon">
                                    <i class="bi {{ $item['icon'] }}"></i>
                                </div>
                            @endif
                            
                            <h4 class="pricing-title">{{ $item['title'] ?? 'Plan' }}</h4>
                            
                            @if(isset($item['description']))
                                <p class="pricing-description">{{ $item['description'] }}</p>
                            @endif
                            
                            <div class="pricing-price">
                                @if(isset($item['currency']))
                                    <span class="currency">{{ $item['currency'] }}</span>
                                @endif
                                <span class="amount monthly-price">{{ $item['monthlyPrice'] ?? $item['price'] ?? '0' }}</span>
                                @if($showAnnualToggle && isset($item['annualPrice']))
                                    <span class="amount annual-price" style="display: none;">{{ $item['annualPrice'] }}</span>
                                @endif
                                @if(isset($item['period']))
                                    <span class="period">{{ $item['period'] }}</span>
                                @endif
                            </div>
                            
                            @if(isset($item['originalPrice']))
                                <div class="original-price">
                                    <span class="text-muted text-decoration-line-through">{{ $item['originalPrice'] }}</span>
                                </div>
                            @endif
                        </div>
                        
                        <div class="pricing-body">
                            @if(isset($item['features']))
                                <ul class="pricing-features">
                                    @foreach($item['features'] as $feature)
                                        <li class="feature-item {{ ($feature['available'] ?? true) ? 'available' : 'unavailable' }}">
                                            <i class="bi {{ ($feature['available'] ?? true) ? 'bi-check-circle text-success' : 'bi-x-circle text-muted' }}"></i>
                                            <span>{{ is_array($feature) ? $feature['text'] : $feature }}</span>
                                            @if(isset($feature['tooltip']))
                                                <i class="bi bi-info-circle text-muted ms-2" data-bs-toggle="tooltip" title="{{ $feature['tooltip'] }}"></i>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            
                            @if(isset($item['highlight']))
                                <div class="pricing-highlight">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span>{{ $item['highlight'] }}</span>
                                </div>
                            @endif
                        </div>
                        
                        <div class="pricing-footer">
                            <a href="{{ $item['link'] ?? '#' }}" 
                               class="btn {{ $index === $featured ? 'btn-primary' : 'btn-outline-primary' }} btn-lg w-100 pricing-btn"
                               data-plan="{{ $item['title'] ?? 'Plan' }}">
                                {{ $item['buttonText'] ?? 'Get Started' }}
                            </a>
                            
                            @if(isset($item['note']))
                                <small class="pricing-note">{{ $item['note'] }}</small>
                            @endif
                            
                            @if(isset($item['guarantee']))
                                <div class="pricing-guarantee">
                                    <i class="bi bi-shield-check text-success"></i>
                                    <span>{{ $item['guarantee'] }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-state text-center py-5" data-aos="fade-up">
            <i class="bi bi-currency-dollar display-1 text-muted mb-3"></i>
            <h4 class="text-muted">{{ $emptyMessage }}</h4>
        </div>
    @endif
</div>

<style>
    .pricing-table-component {
        .billing-toggle {
            .btn-group {
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                border-radius: 50px;
                overflow: hidden;
                
                .btn {
                    border-radius: 0;
                    padding: 12px 24px;
                    font-weight: 500;
                    
                    &:first-child {
                        border-top-left-radius: 50px;
                        border-bottom-left-radius: 50px;
                    }
                    
                    &:last-child {
                        border-top-right-radius: 50px;
                        border-bottom-right-radius: 50px;
                    }
                }
                
                .btn-check:checked + .btn {
                    background-color: #007bff;
                    border-color: #007bff;
                    color: white;
                }
            }
        }
        
        .pricing-card {
            background: white;
            border-radius: 16px;
            padding: 32px 24px;
            text-align: center;
            position: relative;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            
            &.pricing-modern {
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                border: 2px solid transparent;
                
                &:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
                }
                
                &.featured {
                    border-color: #007bff;
                    transform: scale(1.05);
                    
                    &:hover {
                        transform: scale(1.05) translateY(-8px);
                    }
                }
            }
            
            &.pricing-classic {
                border: 2px solid #e9ecef;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                
                &.featured {
                    border-color: #007bff;
                    box-shadow: 0 10px 30px rgba(0, 123, 255, 0.2);
                }
            }
            
            &.pricing-minimal {
                box-shadow: none;
                border: 1px solid #f1f3f4;
                
                &.featured {
                    background: linear-gradient(135deg, #f8f9ff 0%, #e3f2fd 100%);
                }
            }
        }
        
        .featured-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            padding: 6px 20px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        }
        
        .pricing-header {
            margin-bottom: 32px;
        }
        
        .pricing-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 20px;
            transition: transform 0.3s ease;
            
            &:hover {
                transform: scale(1.1);
            }
        }
        
        .pricing-title {
            color: #2c3e50;
            margin-bottom: 12px;
            font-weight: 600;
        }
        
        .pricing-description {
            color: #6c757d;
            margin-bottom: 24px;
            line-height: 1.5;
        }
        
        .pricing-price {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 4px;
            margin-bottom: 8px;
            
            .currency {
                font-size: 1.2rem;
                color: #6c757d;
            }
            
            .amount {
                font-size: 3rem;
                font-weight: 700;
                color: #2c3e50;
                transition: all 0.3s ease;
            }
            
            .period {
                color: #6c757d;
                font-size: 1rem;
            }
        }
        
        .original-price {
            margin-bottom: 16px;
            font-size: 0.9rem;
        }
        
        .pricing-body {
            flex: 1;
            margin-bottom: 32px;
        }
        
        .pricing-features {
            list-style: none;
            padding: 0;
            margin: 0;
            
            .feature-item {
                display: flex;
                align-items: center;
                padding: 12px 0;
                gap: 12px;
                text-align: left;
                
                &.unavailable {
                    opacity: 0.5;
                    
                    span {
                        text-decoration: line-through;
                    }
                }
                
                i {
                    font-size: 1.2rem;
                    flex-shrink: 0;
                }
            }
        }
        
        .pricing-highlight {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            padding: 12px;
            border-radius: 8px;
            margin-top: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            color: #856404;
        }
        
        .pricing-footer {
            .pricing-note {
                display: block;
                margin-top: 12px;
                color: #6c757d;
                font-style: italic;
            }
            
            .pricing-guarantee {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                margin-top: 16px;
                color: #28a745;
                font-size: 0.9rem;
                font-weight: 500;
            }
        }
        
        .pricing-btn {
            transition: all 0.3s ease;
            font-weight: 600;
            
            &:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
            }
        }
        
        @media (max-width: 768px) {
            .pricing-card.featured {
                transform: none;
                margin-top: 20px;
            }
            
            .pricing-card {
                padding: 24px 20px;
            }
        }
    }
</style>

<style>
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
