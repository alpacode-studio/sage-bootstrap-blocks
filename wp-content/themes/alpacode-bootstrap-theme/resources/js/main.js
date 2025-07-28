import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap-icons/font/bootstrap-icons.css'
import 'aos/dist/aos.css'
import 'glightbox/dist/css/glightbox.min.css'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'

import 'bootstrap/dist/js/bootstrap.bundle.min.js'
import AOS from 'aos'
import GLightbox from 'glightbox'
import imagesLoaded from 'imagesloaded'
import Isotope from 'isotope-layout'
import Swiper from 'swiper'
import { Navigation, Pagination, Autoplay } from 'swiper/modules'
import Typed from 'typed.js'

// Configure Swiper modules
Swiper.use([Navigation, Pagination, Autoplay])

// Make libraries globally available for legacy code
window.AOS = AOS
window.GLightbox = GLightbox
window.Swiper = Swiper
window.Typed = Typed
window.Isotope = Isotope
window.imagesLoaded = imagesLoaded

// Core imports
import { AppController } from './core/AppController.js'
import { EventBus } from './core/EventBus.js'
import { DOM } from './utils/dom.js'

// Feature imports
import { ScrollEffects } from './features/ScrollEffects.js'
import { MobileNavigation } from './features/MobileNavigation.js'
import { LazyLoader } from './features/LazyLoader.js'
import { Preloader } from './features/PreLoader.js'
import { ScrollTop } from './features/ScrollTop.js'
import { HashLinks } from './features/HashLinks.js'
import { Scrollspy } from './features/Scrollspy.js'

// Vendor imports
import { initializeVendors } from './vendors/index.js'

class App {
  constructor() {
    this.controller = new AppController()
    this.eventBus = new EventBus()
    this.features = new Map()
    
    // Configuration - easily customizable
    this.config = {
      enableLazyLoading: true,
      enableVendorLibs: true,
      features: {
        scrollEffects: true,
        mobileNav: true,
        preloader: true,
        scrollTop: true,
        hashLinks: true,
        scrollspy: true
      }
    }
    
    this.initialize()
  }

  async initialize() {
    // Initialize core features based on config
    await this.initializeFeatures()
    
    // Initialize vendor libraries
    if (this.config.enableVendorLibs) {
      await initializeVendors(this.controller)
    }

    // Emit ready event
    this.eventBus.emit('app:ready', { app: this })
  }

  async initializeFeatures() {
    // Core features with config checks
    if (this.config.features.scrollEffects) {
      this.addFeature('scrollEffects', new ScrollEffects(this.controller))
    }
    
    if (this.config.features.mobileNav) {
      this.addFeature('mobileNav', new MobileNavigation(this.controller))
    }
    
    if (this.config.enableLazyLoading) {
      this.addFeature('lazyLoader', new LazyLoader(this.controller))
    }
    
    if (this.config.features.preloader) {
      this.addFeature('preloader', new Preloader(this.controller))
    }
    
    if (this.config.features.scrollTop) {
      this.addFeature('scrollTop', new ScrollTop(this.controller))
    }
    
    if (this.config.features.hashLinks) {
      this.addFeature('hashLinks', new HashLinks(this.controller))
    }
    
    if (this.config.features.scrollspy) {
      this.addFeature('scrollspy', new Scrollspy(this.controller))
    }

    // Emit features ready event
    this.eventBus.emit('features:ready', { features: Array.from(this.features.keys()) })
  }

  addFeature(name, feature) {
    // Pass eventBus to features that need inter-module communication
    if (feature.controller && !feature.eventBus) {
      feature.eventBus = this.eventBus
    }
    
    this.features.set(name, feature)
    this.eventBus.emit('feature:added', { name, feature })
    return this
  }

  getFeature(name) {
    return this.features.get(name)
  }

  removeFeature(name) {
    const feature = this.features.get(name)
    if (feature?.destroy) {
      feature.destroy()
    }
    this.features.delete(name)
    this.eventBus.emit('feature:removed', { name })
    return this
  }

  // Method to enable/disable features dynamically
  toggleFeature(name, enabled) {
    if (enabled && !this.features.has(name)) {
      // Dynamically load and enable feature
      this.loadFeature(name)
    } else if (!enabled && this.features.has(name)) {
      // Disable and remove feature
      this.removeFeature(name)
    }
  }

  async loadFeature(name) {
    try {
      const featureMap = {
        scrollEffects: () => new ScrollEffects(this.controller),
        mobileNav: () => new MobileNavigation(this.controller),
        lazyLoader: () => new LazyLoader(this.controller),
        preloader: () => new Preloader(this.controller),
        scrollTop: () => new ScrollTop(this.controller),
        hashLinks: () => new HashLinks(this.controller),
        scrollspy: () => new Scrollspy(this.controller)
      }

      if (featureMap[name]) {
        const feature = featureMap[name]()
        this.addFeature(name, feature)
      }
    } catch (error) {
      console.error(`Failed to load feature: ${name}`, error)
    }
  }

  // Get app statistics
  getStats() {
    return {
      featuresCount: this.features.size,
      features: Array.from(this.features.keys()),
      listenersCount: this.controller.listeners.size,
      instancesCount: this.controller.instances.size,
      observersCount: this.controller.observers.size
    }
  }

  destroy() {
    // Emit destroy event before cleanup
    this.eventBus.emit('app:destroy')
    
    // Destroy all features
    this.features.forEach(feature => {
      if (feature?.destroy) feature.destroy()
    })
    this.features.clear()
    
    // Cleanup controller
    this.controller.cleanup()
    
    // Clear event bus
    this.eventBus.clear()
  }
}

// Initialize app
let appInstance
DOM.ready(() => {
  appInstance = new App()
  
  // Make app globally available for debugging
  if (typeof window !== 'undefined') {
    window.app = appInstance
  }

  // Optional: Log app ready state
  appInstance.eventBus.on('app:ready', () => {
    console.log('App initialized successfully:', appInstance.getStats())
  })

  // Optional: Handle feature events
  appInstance.eventBus.on('feature:added', ({ name }) => {
    console.log(`Feature added: ${name}`)
  })

  // Optional: Handle errors
  window.addEventListener('error', (event) => {
    appInstance.eventBus.emit('app:error', event)
  })
})

// Cleanup on page unload
window.addEventListener('unload', () => {
  if (appInstance) {
    appInstance.destroy()
  }
})

// Export for external use
export { appInstance as app, App as default }

/* 

// Runtime feature management
app.toggleFeature('analytics', true)

// Real-time debugging
app.getStats() // See performance metrics
app.eventBus.emit('debug:log', data)

// Configuration-driven
const config = { features: { faq: false } } // Disable via config

*/