import { defineConfig } from 'vite'
// import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin'
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin';

export default defineConfig({
  base: '/app/themes/sage/public/build/',
  plugins: [
//    tailwindcss(),
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/editor.css',
        'resources/js/editor.js',
      ],
      refresh: true,
    }),

    wordpressPlugin(),

    // Generate the theme.json file in the public/build/assets directory
    // based on the Tailwind config and the theme.json file from base theme folder
    wordpressThemeJson({
      disableTailwindColors: false,
      disableTailwindFonts: false,
      disableTailwindFontSizes: false,
    }),
  ],
  resolve: {
    alias: {
      '@scripts': '/resources/js',
      '@styles': '/resources/css',
      '@fonts': '/resources/fonts',
      '@images': '/resources/images',
    },
  },
  // Aggressive bundle optimization
  build: {
    minify: 'terser',
    terserOptions: {
      compress: {
        drop_console: true,
        drop_debugger: true,
      },
    },
    rollupOptions: {
      output: {
        manualChunks: {
          // Critical libraries loaded immediately
          'vendor-core': ['aos'],
          // Heavy animation libraries - lazy load
          'vendor-animation': ['gsap', 'typed.js'],
          // UI libraries - can be lazy loaded
          'vendor-ui': ['glightbox', 'swiper'],
          // Layout libraries - lazy load
          'vendor-layout': ['isotope-layout', 'imagesloaded'],
          // Bootstrap - split into smaller chunks
          'vendor-bootstrap': ['bootstrap'],
        }
      }
    },
    // Enable CSS code splitting
    cssCodeSplit: true,
    // Reduce chunk size warnings threshold
    chunkSizeWarningLimit: 1000,
  },
  // Optimize dependencies
  optimizeDeps: {
    include: [
      'aos',
      'bootstrap',
      'glightbox',
      'gsap',
      'imagesloaded',
      'isotope-layout',
      'swiper',
      'typed.js'
    ],
    exclude: ['waypoints'] // Exclude if not heavily used
  }
})