{{-- resources/views/pages/blog.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-7xl mx-auto">
        
        {{-- Page Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Latest Blog Posts</h1>
            <p class="text-xl text-gray-600">Discover insights, tutorials, and updates from our team</p>
        </div>

        {{-- Featured Posts Grid --}}
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-gray-900 mb-8">Featured Posts</h2>
            <x-card-grid 
                :items="$featuredPosts"
                columns="2"
                gap="lg"
                cardType="featured"
                :showImage="true"
                :showMeta="true"
                :showExcerpt="true"
                :showButton="true"
                buttonText="Read Article"
                imageAspect="aspect-video"
                :animation="true"
            />
        </section>

        {{-- All Posts Grid --}}
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-gray-900 mb-8">All Posts</h2>
            <x-card-grid 
                :items="$allPosts"
                columns="3"
                gap="md"
                cardType="default"
                :showImage="true"
                :showMeta="true"
                :showExcerpt="true"
                :showButton="true"
                buttonText="Read More"
                imageAspect="aspect-video"
                :animation="true"
            />
        </section>

        {{-- Minimal Cards Example --}}
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-gray-900 mb-8">Quick Links</h2>
            <x-card-grid 
                :items="$quickLinks"
                columns="4"
                gap="sm"
                cardType="minimal"
                :showImage="false"
                :showMeta="false"
                :showExcerpt="true"
                :showButton="true"
                buttonText="Learn More"
                :animation="false"
            />
        </section>

        {{-- Glass Effect Cards --}}
        <section class="mb-16 bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8">
            <h2 class="text-2xl font-semibold text-gray-900 mb-8">Premium Content</h2>
            <x-card-grid 
                :items="$premiumContent"
                columns="3"
                gap="lg"
                cardType="glass"
                :showImage="true"
                :showMeta="true"
                :showExcerpt="true"
                :showButton="true"
                buttonText="Access Now"
                imageAspect="aspect-[4/3]"
                :animation="true"
            />
        </section>

    </div>
</div>
@endsection

{{-- Controller example for data structure --}}
@php
/*
// app/Http/Controllers/BlogController.php

class BlogController extends Controller
{
    public function index()
    {
        $featuredPosts = [
            [
                'title' => 'Advanced Laravel Techniques',
                'excerpt' => 'Explore advanced Laravel patterns and techniques that will elevate your development skills.',
                'image' => '/images/blog/laravel-advanced.jpg',
                'url' => '/blog/advanced-laravel-techniques',
                'date' => '2024-01-15',
                'author' => 'John Doe',
                'category' => 'Laravel',
                'tags' => ['PHP', 'Laravel', 'Advanced'],
                'readTime' => '8 min read'
            ],
            [
                'title' => 'Modern Frontend Architecture',
                'excerpt' => 'Building scalable frontend applications with modern tools and methodologies.',
                'image' => '/images/blog/frontend-architecture.jpg',
                'url' => '/blog/modern-frontend-architecture',
                'date' => '2024-01-12',
                'author' => 'Jane Smith',
                'category' => 'Frontend',
                'tags' => ['JavaScript', 'React', 'Architecture'],
                'readTime' => '12 min read'
            ]
        ];

        $allPosts = [
            // ... more posts with same structure
        ];

        $quickLinks = [
            [
                'title' => 'Documentation',
                'excerpt' => 'Comprehensive guides and API references.',
                'url' => '/docs',
                'category' => 'Resources'
            ],
            [
                'title' => 'Community',
                'excerpt' => 'Join our developer community and get help.',
                'url' => '/community',
                'category' => 'Support'
            ]
        ];

        $premiumContent = [
            // ... premium content items
        ];

        return view('pages.blog', compact('featuredPosts', 'allPosts', 'quickLinks', 'premiumContent'));
    }
}
*/
@endphp