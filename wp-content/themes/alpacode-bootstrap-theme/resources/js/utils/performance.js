// ===========================================
// utils/performance.js - Performance helpers
// ===========================================
export const Performance = {
  // Throttle function execution
  throttle(func, delay) {
    let timeoutId
    let lastExecTime = 0
    return function (...args) {
      const currentTime = Date.now()
      
      if (currentTime - lastExecTime > delay) {
        func.apply(this, args)
        lastExecTime = currentTime
      } else {
        clearTimeout(timeoutId)
        timeoutId = setTimeout(() => {
          func.apply(this, args)
          lastExecTime = Date.now()
        }, delay - (currentTime - lastExecTime))
      }
    }
  },

  // Debounce function execution
  debounce(func, delay) {
    let timeoutId
    return function (...args) {
      clearTimeout(timeoutId)
      timeoutId = setTimeout(() => func.apply(this, args), delay)
    }
  },

  // Request animation frame throttle
  rafThrottle(func) {
    let rafId = null
    return function (...args) {
      if (rafId) return
      rafId = requestAnimationFrame(() => {
        func.apply(this, args)
        rafId = null
      })
    }
  },

  // Measure performance
  measure(name, func) {
    const start = performance.now()
    const result = func()
    const end = performance.now()
    console.log(`${name} took ${end - start} milliseconds`)
    return result
  },

  // Check if user prefers reduced motion
  prefersReducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches
  },

  // Check if device is low-end
  isLowEndDevice() {
    return navigator.hardwareConcurrency <= 2 && navigator.deviceMemory <= 4
  }
}