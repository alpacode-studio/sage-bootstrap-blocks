export class AppController {
  constructor() {
    this.initialized = new Set()
    this.listeners = new Map()
    this.instances = new Map()
    this.observers = new Map()
  }

  initOnce(feature, callback) {
    if (!this.initialized.has(feature)) {
      callback()
      this.initialized.add(feature)
    }
  }

  addListener(element, event, handler, options = {}) {
    if (!element) return
    
    const key = `${element.tagName || 'window'}_${event}_${handler.name || 'anonymous'}_${Date.now()}`
    if (!this.listeners.has(key)) {
      element.addEventListener(event, handler, options)
      this.listeners.set(key, { element, event, handler, options })
    }
  }

  addObserver(elements, callback, options = {}) {
    const observer = new IntersectionObserver(callback, {
      threshold: 0.1,
      rootMargin: '0px 0px -100px 0px',
      ...options
    })

    elements.forEach(el => observer.observe(el))
    const key = `observer-${Date.now()}`
    this.observers.set(key, observer)
    return observer
  }

  setInstance(name, instance) {
    if (this.instances.has(name)) {
      const old = this.instances.get(name)
      if (old?.destroy) old.destroy()
    }
    this.instances.set(name, instance)
  }

  cleanup() {
    this.listeners.forEach(({ element, event, handler, options }) => {
      element.removeEventListener(event, handler, options)
    })
    this.listeners.clear()

    this.instances.forEach(instance => {
      if (instance?.destroy) instance.destroy()
    })
    this.instances.clear()

    this.observers.forEach(observer => observer.disconnect())
    this.observers.clear()

    this.initialized.clear()
  }
}