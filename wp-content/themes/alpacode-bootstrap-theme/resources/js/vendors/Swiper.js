// ===========================================
// vendors/Swiper.js - Swiper integration
// ===========================================
import { DOM } from '../utils/dom.js'
import { CONSTANTS } from '../utils/constants.js'

export function initSwiper(app) {
  return new Promise((resolve) => {
    app.initOnce('swiper', () => {
      if (typeof Swiper === 'undefined') {
        resolve()
        return
      }

      const swiperElements = DOM.selectAll(CONSTANTS.SELECTORS.SWIPER)
      if (swiperElements.length === 0) {
        resolve()
        return
      }

      swiperElements.forEach((swiperElement, index) => {
        const configElement = DOM.select(CONSTANTS.SELECTORS.SWIPER_CONFIG, swiperElement)
        if (!configElement) return

        try {
          const config = JSON.parse(configElement.innerHTML.trim())
          
          // Add accessibility improvements
          config.a11y = {
            enabled: true,
            ...config.a11y
          }

          const swiper = new Swiper(swiperElement, config)
          app.setInstance(`swiper-${index}`, swiper)
        } catch (error) {
          console.error(`Swiper config error for element ${index}:`, error)
        }
      })

      resolve()
    })
  })
}