
// ===========================================
// features/HashLinks.js - Hash navigation
// ===========================================
import { DOM } from '../utils/dom.js'
import { CONSTANTS } from '../utils/constants.js'
import { Performance } from '../utils/performance.js'

export class HashLinks {
  constructor(app) {
    this.app = app
    this.init()
  }

  init() {
    this.app.initOnce('hash-links', () => {
      // Handle initial hash on page load
      this.app.addListener(window, 'load', this.handleInitialHash.bind(this))
      
      // Handle hash changes
      this.app.addListener(window, 'hashchange', this.handleHashChange.bind(this))
      
      // Handle clicks on hash links
      const hashLinks = DOM.selectAll('a[href^="#"]')
      hashLinks.forEach(link => {
        this.app.addListener(link, 'click', this.handleHashClick.bind(this))
      })
    })
  }

  handleInitialHash() {
    if (window.location.hash) {
      setTimeout(() => {
        this.scrollToHash(window.location.hash)
      }, CONSTANTS.ANIMATION.HASH_SCROLL_DELAY)
    }
  }

  handleHashChange() {
    if (window.location.hash) {
      this.scrollToHash(window.location.hash)
    }
  }

  handleHashClick(e) {
    const link = e.target.closest('a')
    const hash = link.getAttribute('href')
    
    if (hash && hash.startsWith('#') && hash.length > 1) {
      const target = DOM.select(hash)
      if (target) {
        e.preventDefault()
        this.scrollToTarget(target)
        
        // Update URL without triggering hashchange
        history.pushState(null, null, hash)
      }
    }
  }

  scrollToHash(hash) {
    const target = DOM.select(hash)
    if (target) {
      this.scrollToTarget(target)
    }
  }

  scrollToTarget(target) {
    const scrollMarginTop = getComputedStyle(target).scrollMarginTop
    const offset = parseInt(scrollMarginTop) || 0
    const targetPosition = target.offsetTop - offset

    if (Performance.prefersReducedMotion()) {
      window.scrollTo(0, targetPosition)
    } else {
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      })
    }
  }

  destroy() {
    // Cleanup handled by AppController
  }
}