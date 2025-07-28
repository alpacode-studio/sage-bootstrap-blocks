// features/ScrollEffects.js
import { DOM } from '../utils/dom.js'

export class ScrollEffects {
  constructor(app) {
    this.app = app
    this.init()
  }

  init() {
    this.app.initOnce('scroll-effects', () => {
      const throttledScroll = DOM.throttle(this.handleScroll.bind(this), 16)
      
      this.app.addListener(document, 'scroll', throttledScroll, { passive: true })
      this.app.addListener(window, 'load', this.handleScroll.bind(this))
    })
  }

  handleScroll() {
    const scrollY = window.scrollY
    const body = document.body
    const header = DOM.select('#header')
    
    if (header) {
      // Check if header has the classes that require scroll effect
      const hasScrollEffect = header.classList.contains('scroll-up-sticky') || 
                             header.classList.contains('sticky-top') || 
                             header.classList.contains('fixed-top')
      
      if (hasScrollEffect) {
        // Add/remove scrolled class based on scroll position
        if (scrollY > 100) {
          body.classList.add('scrolled')
        } else {
          body.classList.remove('scrolled')
        }
      }
    }
  }

  destroy() {
    // Cleanup handled by AppController
  }
}