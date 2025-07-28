// ===========================================
// vendors/GLightbox.js - GLightbox integration
// ===========================================
import { CONSTANTS } from '../utils/constants.js'

export function initGLightbox(app) {
  return new Promise((resolve) => {
    app.initOnce('glightbox', () => {
      if (typeof GLightbox === 'undefined') {
        resolve()
        return
      }

      const lightbox = GLightbox({
        selector: CONSTANTS.SELECTORS.GLIGHTBOX,
        touchNavigation: true,
        loop: false,
        autoplayVideos: false
      })

      app.setInstance('glightbox', lightbox)
      resolve()
    })
  })
}