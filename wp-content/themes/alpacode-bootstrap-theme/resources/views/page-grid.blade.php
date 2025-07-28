@extends('layouts.app')

<div class="grid grid-cols-1 gap-6">
  @foreach ($componentCategories as $category => $components)
    <div class="border rounded p-4">
      <h2 class="text-xl font-bold capitalize">{{ $category }}</h2>
      <div class="grid grid-cols-2 gap-4 mt-2">
        @foreach ($components as $component)
          <div class="p-2 border rounded">
            <div class="text-sm font-semibold">{{ $component }}</div>
            <div class="mt-2">
              @include("components.blocks.{$category}.{$component}")
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @endforeach
</div>

