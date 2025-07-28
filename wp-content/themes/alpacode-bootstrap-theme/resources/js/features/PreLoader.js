// ===========================================
// features/Preloader.js - Preloader functionality
// ===========================================
import { DOM } from '../utils/dom.js'
import { CONSTANTS } from '../utils/constants.js'

export class Preloader {
  constructor(app) {
    this.app = app
    this.init()
  }

  init() {
    this.app.initOnce('preloader', () => {
      const preloader = DOM.select(CONSTANTS.SELECTORS.PRELOADER)
      if (!preloader) return

      this.app.addListener(window, 'load', () => {
        this.hidePreloader(preloader)
      })

      // Fallback: hide after 5 seconds
      setTimeout(() => {
        if (preloader.parentNode) {
          this.hidePreloader(preloader)
        }
      }, 5000)
    })
  }

  hidePreloader(preloader) {
    preloader.style.opacity = '0'
    preloader.style.transition = 'opacity 0.3s ease'
    
    setTimeout(() => {
      if (preloader.parentNode) {
        preloader.remove()
      }
    }, 300)
  }

  destroy() {
    // Cleanup handled by AppController
  }
}