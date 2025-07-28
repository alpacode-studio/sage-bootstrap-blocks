// ===========================================
// vendors/Typed.js - Typed.js integration
// ===========================================
import { DOM } from '../utils/dom.js'
import { CONSTANTS } from '../utils/constants.js'

export function initTyped(app) {
  return new Promise((resolve) => {
    app.initOnce('typed', () => {
      if (typeof Typed === 'undefined') {
        resolve()
        return
      }

      const typedElement = DOM.select(CONSTANTS.SELECTORS.TYPED)
      if (!typedElement) {
        resolve()
        return
      }

      const strings = typedElement.getAttribute('data-typed-items')
      if (!strings) {
        resolve()
        return
      }

      const config = {
        strings: strings.split(',').map(s => s.trim()),
        loop: true,
        typeSpeed: CONSTANTS.ANIMATION.TYPING_SPEED,
        backSpeed: CONSTANTS.ANIMATION.BACK_SPEED,
        backDelay: CONSTANTS.ANIMATION.BACK_DELAY,
        showCursor: true,
        cursorChar: '|'
      }

      const typed = new Typed(CONSTANTS.SELECTORS.TYPED, config)
      app.setInstance('typed', typed)
      resolve()
    })
  })
}