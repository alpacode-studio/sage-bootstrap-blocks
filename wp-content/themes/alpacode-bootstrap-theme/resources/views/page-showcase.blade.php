{{-- resources/views/page-showcase.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="showcase-container">
  {{-- Header --}}
  <header class="showcase-header">
    <div class="header-content">
      <div class="header-left">
        <h1 class="header-title">Component Library</h1>
        <span class="component-count">{{ count($components ?? []) }} components</span>
      </div>
      
      <div class="header-right">
        <div class="search-container">
          <input type="text" 
                 id="search" 
                 placeholder="Search components..."
                 class="search-input">
          <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        
        <select id="category-filter" class="category-select">
          <option value="">All Categories</option>
          @foreach($categories ?? [] as $category)
            <option value="{{ $category }}">{{ ucfirst($category) }}</option>
          @endforeach
        </select>
      </div>
    </div>
  </header>

  <div class="main-content">
    {{-- Sidebar Navigation --}}
    <aside class="sidebar">
      <nav class="sidebar-nav">
        <div class="nav-card">
          <div class="nav-header">
            <h3>Categories</h3>
          </div>
          <div class="nav-content">
            <button class="category-btn active" data-category="">
              All Components
            </button>
            @foreach($categories ?? [] as $category)
              <button class="category-btn" data-category="{{ $category }}">
                {{ ucfirst(str_replace('-', ' ', $category)) }}
              </button>
            @endforeach
          </div>
        </div>
      </nav>
    </aside>

    {{-- Main Content --}}
    <main class="content-area">
      <div id="components-grid" class="components-grid">
        {{-- Sample Component Card --}}
        <div class="component-card">
          <div class="component-header">
            <div class="component-info">
              <h3 class="component-title">Sample Component</h3>
              <p class="component-description">This is a sample component description</p>
              
              <div class="component-tags">
                <span class="tag tag-blue">button</span>
                <span class="tag tag-green">primary</span>
                <span class="tag tag-purple">action</span>
              </div>
            </div>
            
            <div class="component-actions">
              <button onclick="copyCode('sample')" class="action-btn">
                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                Copy
              </button>
              
              <button onclick="toggleCode('sample')" class="action-btn">
                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
                <span class="code-toggle-text">View Code</span>
              </button>
            </div>
          </div>

          <div class="component-preview">
            <div class="preview-area">
              <div class="sample-content">
                <button class="sample-button">Sample Button</button>
                <p class="preview-text">This is where your component will be rendered</p>
              </div>
            </div>
          </div>

          <div class="component-code hidden">
            <div class="code-area">
              <pre><code id="code-sample">&lt;button class="sample-button"&gt;
  Sample Button
&lt;/button&gt;</code></pre>
              <button onclick="copyCode('sample')" class="copy-btn">Copy</button>
            </div>
          </div>
        </div>

        {{-- Second Sample Component --}}
        <div class="component-card">
          <div class="component-header">
            <div class="component-info">
              <h3 class="component-title">Card Component</h3>
              <p class="component-description">A sample card component</p>
              
              <div class="component-tags">
                <span class="tag tag-indigo">card</span>
                <span class="tag tag-gray">layout</span>
              </div>
            </div>
            
            <div class="component-actions">
              <button class="action-btn">
                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                Copy
              </button>
              <button class="action-btn">
                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
                View Code
              </button>
            </div>
          </div>

          <div class="component-preview">
            <div class="preview-area">
              <div class="sample-card">
                <div class="card-content">
                  <h4 class="card-title">Card Title</h4>
                  <p class="card-text">This is a sample card component with some content.</p>
                </div>
                <div class="card-footer">
                  <span class="card-tag">#sample</span>
                  <span class="card-tag">#card</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- No Results Message --}}
      <div id="no-results" class="no-results hidden">
        <svg class="no-results-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
        </svg>
        <h3 class="no-results-title">No components found</h3>
        <p class="no-results-text">Try adjusting your search or filter criteria.</p>
      </div>
    </main>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('search');
  const categoryFilter = document.getElementById('category-filter');
  const categoryBtns = document.querySelectorAll('.category-btn');
  const componentItems = document.querySelectorAll('.component-card');
  const noResults = document.getElementById('no-results');

  // Search functionality
  searchInput.addEventListener('input', filterComponents);
  categoryFilter.addEventListener('change', filterComponents);

  // Category buttons
  categoryBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      categoryBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      categoryFilter.value = this.dataset.category;
      filterComponents();
    });
  });

  function filterComponents() {
    const searchTerm = searchInput.value.toLowerCase();
    const selectedCategory = categoryFilter.value;
    let visibleCount = 0;

    componentItems.forEach(item => {
      const name = item.querySelector('.component-title').textContent.toLowerCase();
      const description = item.querySelector('.component-description').textContent.toLowerCase();
      
      const matchesSearch = name.includes(searchTerm) || description.includes(searchTerm);
      const matchesCategory = !selectedCategory; // For now, show all since we don't have real data

      if (matchesSearch && matchesCategory) {
        item.style.display = 'block';
        visibleCount++;
      } else {
        item.style.display = 'none';
      }
    });

    // Show/hide no results
    if (visibleCount === 0) {
      noResults.classList.remove('hidden');
    } else {
      noResults.classList.add('hidden');
    }
  }
});

function toggleCode(componentName) {
  const componentItem = document.querySelector(`[data-name="${componentName}"]`) || 
                       document.querySelector('.component-card'); // Fallback for samples
  const codeSection = componentItem.querySelector('.component-code');
  const toggleText = componentItem.querySelector('.code-toggle-text');
  
  if (codeSection && codeSection.classList.contains('hidden')) {
    codeSection.classList.remove('hidden');
    if (toggleText) toggleText.textContent = 'Hide Code';
  } else if (codeSection) {
    codeSection.classList.add('hidden');
    if (toggleText) toggleText.textContent = 'View Code';
  }
}

function copyCode(componentName) {
  const codeElement = document.getElementById(`code-${componentName}`) || 
                     document.querySelector('code'); // Fallback for samples
  if (!codeElement) return;
  
  const text = codeElement.textContent;
  
  navigator.clipboard.writeText(text).then(function() {
    // Visual feedback
    const button = event.target.closest('button');
    if (!button) return;
    
    const originalText = button.textContent;
    button.textContent = 'Copied!';
    button.style.backgroundColor = '#10b981';
    button.style.color = 'white';
    
    setTimeout(() => {
      button.textContent = originalText;
      button.style.backgroundColor = '';
      button.style.color = '';
    }, 2000);
  }).catch(function() {
    console.log('Copy failed');
  });
}
</script>

<style>

.showcase-container {
  min-height: 100vh;
  background-color: #f9fafb;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

/* Header Styles */
.showcase-header {
  background: white;
  border-bottom: 1px solid #e5e7eb;
  position: sticky;
  top: 0;
  z-index: 50;
}

.header-content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 64px;
}

.header-left {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.header-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: #111827;
  margin: 0;
}

.component-count {
  font-size: 0.875rem;
  color: #6b7280;
}

.header-right {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.search-container {
  position: relative;
}

.search-input {
  width: 256px;
  padding: 0.5rem 0.75rem 0.5rem 2.5rem;
  border: 1px solid #d1d5db;
  border-radius: 0.5rem;
  font-size: 0.875rem;
  transition: all 0.2s;
}

.search-input:focus {
  outline: none;
  border-color: #3b82f6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.search-icon {
  position: absolute;
  left: 0.75rem;
  top: 50%;
  transform: translateY(-50%);
  width: 1.25rem;
  height: 1.25rem;
  color: #9ca3af;
}

.category-select {
  padding: 0.5rem 0.75rem;
  border: 1px solid #d1d5db;
  border-radius: 0.5rem;
  font-size: 0.875rem;
  background: white;
  cursor: pointer;
  transition: all 0.2s;
}

.category-select:focus {
  outline: none;
  border-color: #3b82f6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Main Content */
.main-content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
  display: flex;
  gap: 2rem;
}

/* Sidebar */
.sidebar {
  width: 256px;
  flex-shrink: 0;
}

.sidebar-nav {
  position: sticky;
  top: 96px;
}

.nav-card {
  background: white;
  border-radius: 0.5rem;
  border: 1px solid #e5e7eb;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.nav-header {
  padding: 1rem;
  border-bottom: 1px solid #e5e7eb;
}

.nav-header h3 {
  margin: 0;
  font-size: 1rem;
  font-weight: 600;
  color: #111827;
}

.nav-content {
  padding: 0.5rem;
}

.category-btn {
  width: 100%;
  text-align: left;
  padding: 0.75rem;
  border: none;
  background: none;
  border-radius: 0.375rem;
  font-size: 0.875rem;
  font-weight: 500;
  color: #6b7280;
  cursor: pointer;
  transition: all 0.2s;
  display: block;
  margin-bottom: 0.25rem;
}

.category-btn:hover {
  color: #111827;
  background-color: #f3f4f6;
}

.category-btn.active {
  color: #3b82f6;
  background-color: #dbeafe;
}

/* Content Area */
.content-area {
  flex: 1;
}

.components-grid {
  display: flex;
  flex-direction: column;
  gap: 3rem;
}

/* Component Cards */
.component-card {
  background: white;
  border-radius: 0.5rem;
  border: 1px solid #e5e7eb;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: all 0.2s;
}

.component-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.component-header {
  padding: 1.5rem;
  border-bottom: 1px solid #e5e7eb;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.component-info {
  flex: 1;
}

.component-title {
  font-size: 1.125rem;
  font-weight: 600;
  color: #111827;
  margin: 0 0 0.5rem 0;
}

.component-description {
  font-size: 0.875rem;
  color: #6b7280;
  margin: 0 0 1rem 0;
}

.component-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.tag {
  padding: 0.25rem 0.5rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 500;
}

.tag-blue { background-color: #dbeafe; color: #1e40af; }
.tag-green { background-color: #d1fae5; color: #065f46; }
.tag-purple { background-color: #e9d5ff; color: #7c2d12; }
.tag-indigo { background-color: #e0e7ff; color: #3730a3; }
.tag-gray { background-color: #f3f4f6; color: #374151; }

.component-actions {
  display: flex;
  gap: 0.5rem;
}

.action-btn {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 0.75rem;
  border: 1px solid #d1d5db;
  border-radius: 0.375rem;
  background: white;
  color: #374151;
  font-size: 0.875rem;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.2s;
}

.action-btn:hover {
  background-color: #f9fafb;
}

.action-btn:focus {
  outline: none;
  border-color: #3b82f6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.btn-icon {
  width: 1rem;
  height: 1rem;
}

/* Component Preview */
.component-preview {
  padding: 1.5rem;
  background-color: #f9fafb;
}

.preview-area {
  background: white;
  border-radius: 0.5rem;
  border: 2px dashed #d1d5db;
  padding: 2rem;
}

.sample-content {
  text-align: center;
}

.sample-button {
  background-color: #3b82f6;
  color: white;
  font-weight: 600;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 0.375rem;
  cursor: pointer;
  transition: background-color 0.2s;
}

.sample-button:hover {
  background-color: #2563eb;
}

.preview-text {
  color: #6b7280;
  margin-top: 1rem;
  margin-bottom: 0;
}

.sample-card {
  background: white;
  border-radius: 0.5rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  max-width: 320px;
  margin: 0 auto;
}

.card-content {
  padding: 1.5rem;
}

.card-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: #111827;
  margin: 0 0 0.5rem 0;
}

.card-text {
  color: #374151;
  margin: 0;
}

.card-footer {
  padding: 1rem 1.5rem 0.5rem;
}

.card-tag {
  display: inline-block;
  background-color: #e5e7eb;
  color: #374151;
  padding: 0.25rem 0.75rem;
  border-radius: 9999px;
  font-size: 0.75rem;
  font-weight: 600;
  margin-right: 0.5rem;
  margin-bottom: 0.5rem;
}

/* Code Section */
.component-code {
  border-top: 1px solid #e5e7eb;
}

.code-area {
  background-color: #1f2937;
  color: #f9fafb;
  padding: 1.5rem;
  position: relative;
}

.code-area pre {
  margin: 0;
  font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
  font-size: 0.8125rem;
  line-height: 1.5;
  overflow-x: auto;
}

.code-area code {
  color: #f9fafb;
}

.copy-btn {
  position: absolute;
  top: 1rem;
  right: 1rem;
  background-color: #374151;
  color: white;
  border: none;
  padding: 0.5rem 0.75rem;
  border-radius: 0.375rem;
  font-size: 0.75rem;
  cursor: pointer;
  transition: background-color 0.2s;
}

.copy-btn:hover {
  background-color: #4b5563;
}

/* No Results */
.no-results {
  text-align: center;
  padding: 3rem;
}

.no-results-icon {
  width: 4rem;
  height: 4rem;
  color: #9ca3af;
  margin: 0 auto 1rem;
  display: block;
}

.no-results-title {
  font-size: 1.125rem;
  font-weight: 500;
  color: #111827;
  margin: 0 0 0.5rem 0;
}

.no-results-text {
  color: #6b7280;
  margin: 0;
}

/* Utility Classes */
.hidden {
  display: none;
}

/* Responsive Design */
@media (max-width: 768px) {
  .header-content {
    flex-direction: column;
    height: auto;
    padding: 1rem;
    gap: 1rem;
  }
  
  .header-right {
    width: 100%;
    justify-content: space-between;
  }
  
  .search-input {
    width: 200px;
  }
  
  .main-content {
    flex-direction: column;
    padding: 1rem;
  }
  
  .sidebar {
    width: 100%;
  }
  
  .component-header {
    flex-direction: column;
    gap: 1rem;
  }
  
  .component-actions {
    width: 100%;
  }
}
</style>
@endsection