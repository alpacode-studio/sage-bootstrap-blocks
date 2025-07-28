// ===========================================
// features/ScrollTop.js - Back to top button
// ===========================================
import { DOM } from '../utils/dom.js'
import { CONSTANTS } from '../utils/constants.js'
import { Performance } from '../utils/performance.js'

export class ScrollTop {
  constructor(app) {
    this.app = app
    this.init()
  }

  init() {
    this.app.initOnce('scroll-top', () => {
      const scrollTop = DOM.select(CONSTANTS.SELECTORS.SCROLL_TOP)
      if (!scrollTop) return

      // Handle click
      this.app.addListener(scrollTop, 'click', this.handleClick.bind(this))

      // Handle scroll visibility
      const throttledScroll = Performance.throttle(this.handleScroll.bind(this), CONSTANTS.SCROLL.THROTTLE_DELAY)
      this.app.addListener(window, 'scroll', throttledScroll, { passive: true })
      this.app.addListener(window, 'load', this.handleScroll.bind(this))

      this.scrollTopButton = scrollTop
    })
  }

  handleClick(e) {
    e.preventDefault()
    
    if (Performance.prefersReducedMotion()) {
      window.scrollTo(0, 0)
    } else {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      })
    }
  }

  handleScroll() {
    if (!this.scrollTopButton) return

    const shouldShow = window.scrollY > CONSTANTS.SCROLL.BACK_TO_TOP_THRESHOLD
    this.scrollTopButton.classList.toggle(CONSTANTS.CLASSES.ACTIVE, shouldShow)
  }

  destroy() {
    // Cleanup handled by AppController
  }
}