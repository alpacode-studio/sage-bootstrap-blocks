
@props([
    'items' => [],
    'columns' => 4,
    'style' => 'modern', // modern, classic, minimal, card
    'showSocial' => true,
    'showSkills' => true,
    'showContact' => true,
    'animation' => 'fade-up',
    'title' => null,
    'subtitle' => null,
    'emptyMessage' => 'No team members to display',
    'layout' => 'grid' // grid, list
])

<div class="team-grid-component">
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
        <div class="team-{{ $layout }} {{ $layout === 'grid' ? 'row g-4' : '' }}">
            @foreach($items as $index => $item)
                <div class="{{ $layout === 'grid' ? 'col-lg-' . (12 / $columns) . ' col-md-6 col-sm-12' : 'team-list-item' }}" 
                     data-aos="{{ $animation }}" 
                     data-aos-delay="{{ $index * 120 }}">
                    <div class="team-card team-{{ $style }}">
                        <div class="team-image">
                            @if(isset($item['image']))
                                <img src="{{ $item['image'] }}" 
                                     alt="{{ $item['name'] ?? '' }}" 
                                     class="team-photo"
                                     loading="lazy">
                            @else
                                <div class="team-placeholder">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                            @endif
                            
                            @if($showSocial && isset($item['social']))
                                <div class="team-social">
                                    @foreach($item['social'] as $social)
                                        <a href="{{ $social['url'] }}" 
                                           class="social-link" 
                                           target="_blank" 
                                           rel="noopener noreferrer"
                                           aria-label="{{ $social['platform'] ?? 'Social Link' }}">
                                            <i class="bi {{ $social['icon'] }}"></i>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            
                            @if(isset($item['status']))
                                <div class="team-status status-{{ $item['status'] }}">
                                    <span class="status-indicator"></span>
                                    {{ ucfirst($item['status']) }}
                                </div>
                            @endif
                        </div>
                        
                        <div class="team-content">
                            @if(isset($item['name']))
                                <h5 class="team-name">{{ $item['name'] }}</h5>
                            @endif
                            
                            @if(isset($item['position']))
                                <div class="team-position">{{ $item['position'] }}</div>
                            @endif
                            
                            @if(isset($item['department']))
                                <div class="team-department">{{ $item['department'] }}</div>
                            @endif
                            
                            @if(isset($item['bio']))
                                <p class="team-bio">{{ $item['bio'] }}</p>
                            @endif
                            
                            @if($showSkills && isset($item['skills']))
                                <div class="team-skills">
                                    @foreach($item['skills'] as $skill)
                                        <span class="skill-tag">{{ $skill }}</span>
                                    @endforeach
                                </div>
                            @endif
                            
                            @if(isset($item['experience']))
                                    <i class="bi bi-briefcase text-primary"></i>
                                    <span>{{ $item['experience'] }} years experience</span>
                                </div>
                            @endif
                            
                            @if(isset($item['location']))
                                <div class="team-location">
                                    <i class="bi bi-geo-alt text-muted"></i>
                                    <span>{{ $item['location'] }}</span>
                                </div>
                            @endif
                            
                            @if($showContact && (isset($item['email']) || isset($item['phone'])))
                                <div class="team-contact">
                                    @if(isset($item['email']))
                                        <a href="mailto:{{ $item['email'] }}" class="contact-link">
                                            <i class="bi bi-envelope me-2"></i>
                                            {{ $layout === 'list' ? $item['email'] : 'Email' }}
                                        </a>
                                    @endif
                                    
                                    @if(isset($item['phone']))
                                        <a href="tel:{{ $item['phone'] }}" class="contact-link">
                                            <i class="bi bi-telephone me-2"></i>
                                            {{ $layout === 'list' ? $item['phone'] : 'Call' }}
                                        </a>
                                    @endif
                                </div>
                            @endif
                            
                            @if(isset($item['achievements']))
                                <div class="team-achievements">
                                    <h6>Key Achievements:</h6>
                                    <ul>
                                        @foreach($item['achievements'] as $achievement)
                                            <li>{{ $achievement }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-state text-center py-5" data-aos="fade-up">
            <i class="bi bi-people display-1 text-muted mb-3"></i>
            <h4 class="text-muted">{{ $emptyMessage }}</h4>
        </div>
    @endif
</div>

<style>
    .team-grid-component {
        .team-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            
            &.team-modern {
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                
                &:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
                }
            }
            
            &.team-classic {
                border: 2px solid #e9ecef;
                
                &:hover {
                    border-color: #007bff;
                    box-shadow: 0 10px 30px rgba(0, 123, 255, 0.1);
                }
            }
            
            &.team-minimal {
                box-shadow: none;
                border: 1px solid #f1f3f4;
                
                &:hover {
                    background: #f8f9ff;
                }
            }
            
            &.team-card {
                .team-content {
                    padding: 32px 24px;
                }
            }
        }
        
        .team-list {
            .team-list-item {
                margin-bottom: 24px;
                
                &:last-child {
                    margin-bottom: 0;
                }
            }
            
            .team-card {
                display: flex;
                align-items: center;
                text-align: left;
                padding: 24px;
                
                .team-image {
                    flex-shrink: 0;
                    margin-right: 24px;
                    
                    .team-photo {
                        width: 100px;
                        height: 100px;
                        border-radius: 50%;
                    }
                }
                
                .team-content {
                    flex: 1;
                }
                
                .team-contact {
                    display: flex;
                    gap: 16px;
                    margin-top: 12px;
                }
            }
        }
        
        .team-image {
            position: relative;
            overflow: hidden;
            
            .team-photo {
                width: 100%;
                height: 280px;
                object-fit: cover;
                transition: transform 0.3s ease;
            }
            
            .team-placeholder {
                width: 100%;
                height: 280px;
                background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                color: #6c757d;
                font-size: 4rem;
            }
            
            &:hover .team-photo {
                transform: scale(1.05);
            }
        }
        
        .team-social {
            position: absolute;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            opacity: 0;
            transition: opacity 0.3s ease;
            
            .social-link {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.9);
                color: #007bff;
                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
                
                &:hover {
                    background: #007bff;
                    color: white;
                    transform: scale(1.1);
                }
            }
        }
        
        .team-status {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(255, 255, 255, 0.9);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
            backdrop-filter: blur(10px);
            
            .status-indicator {
                width: 8px;
                height: 8px;
                border-radius: 50%;
            }
            
            &.status-online .status-indicator {
                background: #28a745;
            }
            
            &.status-busy .status-indicator {
                background: #dc3545;
            }
            
            &.status-away .status-indicator {
                background: #ffc107;
            }
        }
        
        .team-card:hover .team-social {
            opacity: 1;
        }
        
        .team-content {
            padding: 24px;
        }
        
        .team-name {
            color: #2c3e50;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        .team-position {
            color: #007bff;
            font-weight: 500;
            margin-bottom: 4px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        
        .team-department {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 16px;
        }
        
        .team-bio {
            color: #6c757d;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }
        
        .team-skills {
            margin-bottom: 16px;
            
            .skill-tag {
                display: inline-block;
                background: #f8f9fa;
                color: #495057;
                padding: 4px 12px;
                border-radius: 20px;
                font-size: 0.8rem;
                margin: 2px;
                border: 1px solid #e9ecef;
                transition: all 0.3s ease;
                
                &:hover {
                    background: #007bff;
                    color: white;
                    transform: scale(1.05);
                }
            }
        }
        
        .team-experience,
        .team-location {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .team-contact {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: 16px;
            
            .contact-link {
                color: #007bff;
                text-decoration: none;
                font-weight: 500;
                transition: color 0.3s ease;
                display: flex;
                align-items: center;
                
                &:hover {
                    color: #0056b3;
                }
            }
        }
        
        .team-achievements {
            margin-top: 16px;
            text-align: left;
            
            h6 {
                color: #2c3e50;
                margin-bottom: 8px;
                font-size: 0.9rem;
            }
            
            ul {
                list-style: none;
                padding: 0;
                margin: 0;
                
                li {
                    padding: 4px 0;
                    color: #6c757d;
                    font-size: 0.9rem;
                    position: relative;
                    padding-left: 20px;
                    
                    &:before {
                        content: '';
                        position: absolute;
                        left: 0;
                        top: 12px;
                        width: 4px;
                        height: 4px;
                        background: #007bff;
                        border-radius: 50%;
                    }
                }
            }
        }
        
        @media (max-width: 768px) {
            .team-card {
                .team-content {
                    padding: 20px;
                }
            }
            
            .team-list .team-card {
                flex-direction: column;
                text-align: center;
                
                .team-image {
                    margin-right: 0;
                    margin-bottom: 16px;
                }
                
                .team-contact {
                    flex-direction: column;
                    align-items: center;
                }
            }
        }
    }
</style>
  