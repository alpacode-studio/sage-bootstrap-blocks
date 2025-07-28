// ===========================================
// vendors/AOS.js - AOS integration
// ===========================================
import { CONSTANTS } from '../utils/constants.js'
import { Performance } from '../utils/performance.js'

export function initAOS(app) {
  return new Promise((resolve) => {
    app.initOnce('aos', () => {
      if (typeof AOS === 'undefined') {
        resolve()
        return
      }

      const config = {
        duration: CONSTANTS.ANIMATION.AOS_DURATION,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      }

      // Disable animations for reduced motion preference
      if (Performance.prefersReducedMotion()) {
        config.disable = true
      }

      AOS.init(config)
      resolve()
    })
  })
}