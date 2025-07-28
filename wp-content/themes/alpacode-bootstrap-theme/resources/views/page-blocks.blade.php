@extends('layouts.app')
@php
    $cards = [
        [
            'title' => $items[0] ?? 'Project Beta',
            'description' => 'Mobile app for real-time collaboration. Lorum ipsum dolor sit amet, consectetur adipiscing',
            'image' => asset('images/projects/beta.jpg'),
            'category' => 'Mobile',
            'number' => isset($items) ? count($items) : 0,
            'link' => null,
        ],
        [
            'title' => $items[1] ?? 'Project Gamma',
            'description' => 'E-commerce platform with AI recommendations.',
            'image' => asset('images/projects/gamma.jpg'),
            'category' => 'E-commerce',
            'number' => isset($items) ? count($items) : 0,
            'link' => url('/projects/gamma'),
        ],
        [
            'title' => $items[2] ?? 'Project Omega',
            'description' => 'E-commerce platform with AI recommendations.',
            'image' => asset('images/projects/omega.jpg'),
            'category' => 'E-commerce',
            'number' => isset($items) ? count($items) : 0,
            'link' => url('/projects/omega'),
        ],
        [
            'title' => $items[2] ?? 'Project Omega',
            'description' => 'E-commerce platform with AI recommendations.',
            'image' => asset('images/projects/omega.jpg'),
            'category' => 'E-commerce',
            'number' => isset($items) ? count($items) : 0,
            'link' => url('/projects/omega'),
        ],
        
    ];
@endphp
@section('content')
    <x-grids.masonry 
        :items="$cards"
        :columns="3"
        :showFilters="true"
        :filters="$filters"
        title="Ready to use Bootstrap blocks"
    />
<!--
    <x-grids.cards
        :items="$services"
        :columns="4"
        cardStyle="modern"
        hoverEffect="lift"
        title="Our Services"
    />

    <x-grids.pricing 
        :items="$plans"
        :featured="1"
        :showAnnualToggle="true"
        title="Choose Your Plan"
    />

    <x-grids.team 
        :items="$team"
        :columns="4"
        style="modern"
        :showSocial="true"
        layout="grid"
        title="Meet Our Team"
    />
-->
@endsection