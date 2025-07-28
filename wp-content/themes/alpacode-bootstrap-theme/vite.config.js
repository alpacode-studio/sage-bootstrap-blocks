import { defineConfig, loadEnv } from 'vite'
import laravel from 'laravel-vite-plugin'
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin'
import path from 'path'

// https://vitejs.dev/config/
export default defineConfig(({ command, mode }) => {
  // Load env file based on `mode` in the current working directory.
  const env = loadEnv(mode, process.cwd(), '')
  const isProduction = mode === 'production'
  
  return {
    base: env.VITE_BASE_URL || '/app/themes/sage/public/build/',
    
    plugins: [
      laravel({
        input: [
          'resources/css/app.css',
          'resources/js/app.js',
          'resources/css/editor.css',
          'resources/js/editor.js',
        ],
        refresh: [
          'app/**/*.php',
          'resources/views/**/*.php',
          'resources/**/*.js',
          'resources/**/*.css',
        ],
      }),

      wordpressPlugin({
        // Additional WordPress-specific optimizations
        resolveBlockAssets: true,
        resolveViewAssets: true,
      }),

      // Generate the theme.json file
      wordpressThemeJson({
        disableTailwindColors: false,
        disableTailwindFonts: false,
        disableTailwindFontSizes: false,
        // Add custom spacing scale
        customSpacing: true,
        // Include custom properties
        customProperties: true,
      }),
    ],
    
    resolve: {
      alias: {
        '@': path.resolve(__dirname, './resources'),
        '@scripts': path.resolve(__dirname, './resources/js'),
        '@styles': path.resolve(__dirname, './resources/css'),
        '@fonts': path.resolve(__dirname, './resources/fonts'),
        '@images': path.resolve(__dirname, './resources/images'),
        '@components': path.resolve(__dirname, './resources/js/components'),
        '@utils': path.resolve(__dirname, './resources/js/utils'),
      },
    },
    
    server: {
      // Development server configuration
      host: true, // Listen on all local IPs
      port: 3000,
      strictPort: false,
      cors: true,
      // Proxy configuration for WordPress development
      proxy: {
        // Adjust this based on your local WordPress URL
        '/wp-admin': env.VITE_WP_URL || 'http://localhost',
        '/wp-content': env.VITE_WP_URL || 'http://localhost',
        '/wp-includes': env.VITE_WP_URL || 'http://localhost',
      },
      // HMR configuration
      hmr: {
        host: 'localhost',
        protocol: 'ws',
      },
    },
    
    css: {
      // CSS preprocessing options
      preprocessorOptions: {
        scss: {
          additionalData: `@import "@styles/abstracts/_variables.scss";`,
        },
      },
      // PostCSS configuration (if using PostCSS)
      postcss: {
        plugins: [
          // Add PostCSS plugins here if needed
        ],
      },
      // Extract CSS for better caching
      extract: isProduction,
    },
    
    build: {
      // Output directory
      outDir: 'public/build',
      // Assets directory
      assetsDir: 'assets',
      // Generate source maps for production
      sourcemap: isProduction ? 'hidden' : true,
      // Minification settin  
      minify: isProduction ? 'terser' : false,
      terserOptions: {
        compress: {
          drop_console: isProduction,
          drop_debugger: isProduction,
          pure_funcs: isProduction ? ['console.log', 'console.info'] : [],
        },
        format: {
          comments: false,
        },
      },
      // Target modern browsers for smaller bundles
      target: 'es2018',
      // Rollup options
      rollupOptions: {
        output: {
          // Asset naming patterns
          assetFileNames: (assetInfo) => {
            const info = assetInfo.name.split('.')
            const ext = info[info.length - 1]
            if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(ext)) {
              return `assets/images/[name]-[hash][extname]`
            } else if (/woff2?|ttf|otf|eot/i.test(ext)) {
              return `assets/fonts/[name]-[hash][extname]`
            }
            return `assets/[name]-[hash][extname]`
          },
          chunkFileNames: 'assets/js/[name]-[hash].js',
          entryFileNames: 'assets/js/[name]-[hash].js',
          // Manual chunks for optimal code splitting
          manualChunks: (id) => {
            // Node modules chunking strategy
            if (id.includes('node_modules')) {
              // React/Vue/Alpine (if used)
              if (id.includes('react') || id.includes('vue') || id.includes('alpinejs')) {
                return 'vendor-framework'
              }
              // Critical vendor libraries
              if (id.includes('aos') || id.includes('lazysizes')) {
                return 'vendor-critical'
              }
              // Animation libraries (lightweight only)
              if (id.includes('typed.js') || id.includes('anime')) {
                return 'vendor-animation'
              }
              // UI components
              if (id.includes('glightbox') || id.includes('swiper') || id.includes('choices.js')) {
                return 'vendor-ui'
              }
              // Layout libraries
              if (id.includes('isotope-layout') || id.includes('imagesloaded') || id.includes('masonry')) {
                return 'vendor-layout'
              }
              // Bootstrap and related
              if (id.includes('bootstrap') || id.includes('popper')) {
                return 'vendor-bootstrap'
              }
              // All other vendor code
              return 'vendor-misc'
            }
            // Application code chunking
            if (id.includes('resources/js/components')) {
              return 'components'
            }
            if (id.includes('resources/js/utils')) {
              return 'utils'
            }
          },
        },
        // External dependencies (if any)
        external: [],
        // Tree-shaking options
        treeshake: {
          moduleSideEffects: false,
          propertyReadSideEffects: false,
          tryCatchDeoptimization: false,
        },
      },
      // Enable CSS code splitting
      cssCodeSplit: true,
      // Assets inlining threshold (4kb)
      assetsInlineLimit: 4096,
      // Chunk size warnings
      chunkSizeWarningLimit: 1000,
      // Report compressed size
      reportCompressedSize: false,
      // Copy public assets
      copyPublicDir: true,
    },
    
    optimizeDeps: {
      // Include dependencies that need pre-bundling
      include: [
        'aos',
        'bootstrap',
        'glightbox',
        'imagesloaded',
        'isotope-layout',
        'swiper',
        'typed.js',
        'lazysizes',
      ],
      // Exclude dependencies from pre-bundling
      exclude: [
        '@wordpress/block-editor',
        '@wordpress/blocks',
        '@wordpress/components',
      ],
      // Force optimize on deps change
      force: false,
    },
    
    // Performance optimizations
    esbuild: {
      // Drop console and debugger in production
      drop: isProduction ? ['console', 'debugger'] : [],
      // Legal comments
      legalComments: 'none',
      // Target
      target: 'es2018',
    },
    
    // Preview server configuration
    preview: {
      port: 4173,
      strictPort: true,
      host: true,
    },
    
    // Define global constants
    define: {
      'process.env.NODE_ENV': JSON.stringify(mode),
      '__DEV__': !isProduction,
      '__PROD__': isProduction,
    },
    
    // Worker options
    worker: {
      format: 'es',
      rollupOptions: {
        output: {
          entryFileNames: 'assets/worker/[name]-[hash].js',
        },
      },
    },
  }
})