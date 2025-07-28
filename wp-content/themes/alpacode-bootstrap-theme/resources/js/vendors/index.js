// ===========================================
// vendors/index.js - Vendor loader
// ===========================================
import { initAOS } from './AOS.js'
import { initGLightbox } from './GLightbox.js'
import { initIsotope } from './Isotope.js'
import { initSwiper } from './Swiper.js'
import { initTyped } from './Typed.js'
import { CONSTANTS } from '../utils/constants.js'

export async function initializeVendors(app) {
  const vendors = []

  // Check what's available and initialize accordingly
  if (typeof AOS !== 'undefined') {
    vendors.push(initAOS(app))
  }

  if (typeof GLightbox !== 'undefined') {
    vendors.push(initGLightbox(app))
  }

  if (typeof Isotope !== 'undefined') {
    vendors.push(initIsotope(app))
  }

  if (typeof Swiper !== 'undefined') {
    vendors.push(initSwiper(app))
  }

  if (typeof Typed !== 'undefined') {
    vendors.push(initTyped(app))
  }

  // Wait for all vendors to initialize
  await Promise.all(vendors)

  // Emit event when all vendors are loaded
  if (app.eventBus) {
    app.eventBus.emit(CONSTANTS.EVENTS.VENDORS_LOADED)
  }
}