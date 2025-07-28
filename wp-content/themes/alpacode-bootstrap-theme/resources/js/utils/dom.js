export const DOM = {
  ready(callback) {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', callback)
    } else {
      callback()
    }
  },

  select(selector, context = document) {
    return context.querySelector(selector)
  },

  selectAll(selector, context = document) {
    return Array.from(context.querySelectorAll(selector))
  },

  createElement(tag, attributes = {}, content = '') {
    const el = document.createElement(tag)
    Object.entries(attributes).forEach(([key, value]) => {
      if (key === 'className') el.className = value
      else el.setAttribute(key, value)
    })
    if (content) el.innerHTML = content
    return el
  },

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
  }
}