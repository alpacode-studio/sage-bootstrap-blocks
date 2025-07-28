// ===========================================
// features/Scrollspy.js - Navigation scrollspy
// ===========================================
import { DOM } from '../utils/dom.js'
import { CONSTANTS } from '../utils/constants.js'
import { Performance } from '../utils/performance.js'

export class Scrollspy {
  constructor(app) {
    this.app = app
    this.sections = new Map()
    this.init()
  }

  init() {
    this.app.initOnce('scrollspy', () => {
      const navLinks = DOM.selectAll(CONSTANTS.SELECTORS.NAV_LINKS)
      
      // Build sections map
      navLinks.forEach(link => {
        if (link.hash) {
          const section = DOM.select(link.hash)
          if (section) {
            this.sections.set(link.hash, { link, section })
          }
        }
      })

      if (this.sections.size === 0) return

      // Throttled scroll handler
      const throttledScrollspy = Performance.throttle(
        this.updateActiveLinks.bind(this), 
        CONSTANTS.SCROLL.THROTTLE_DELAY
      )

      this.app.addListener(window, 'scroll', throttledScrollspy, { passive: true })
      this.app.addListener(window, 'load', this.updateActiveLinks.bind(this))
    })
  }

  updateActiveLinks() {
    const scrollPosition = window.scrollY + CONSTANTS.SCROLL.SCROLLSPY_OFFSET
    let activeSection = null

    // Find the current section
    this.sections.forEach(({ section }, hash) => {
      const sectionTop = section.offsetTop
      const sectionBottom = sectionTop + section.offsetHeight

      if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
        activeSection = hash
      }
    })

    // Update active states
    this.sections.forEach(({ link }, hash) => {
      const isActive = hash === activeSection
      link.classList.toggle(CONSTANTS.CLASSES.ACTIVE, isActive)
    })
  }

  destroy() {
    this.sections.clear()
  }
}