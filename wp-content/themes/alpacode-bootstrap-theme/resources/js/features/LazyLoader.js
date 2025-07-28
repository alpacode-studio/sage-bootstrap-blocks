// ===========================================
// features/LazyLoader.js - Lazy loading functionality
// ===========================================
import { DOM } from '../utils/dom.js'

export class LazyLoader {
  constructor(app) {
    this.app = app
    this.observers = new Map()
    this.init()
  }

  init() {
    this.app.initOnce('lazy-loader', () => {
      this.initImageLazyLoading()
      this.initComponentLazyLoading()
    })
  }

  initImageLazyLoading() {
    const images = DOM.selectAll('img[data-src], img[loading="lazy"]')
    if (images.length === 0) return

    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target
          
          if (img.dataset.src) {
            img.src = img.dataset.src
            img.removeAttribute('data-src')
          }
          
          img.classList.add('loaded')
          imageObserver.unobserve(img)
        }
      })
    }, {
      rootMargin: '50px 0px',
      threshold: 0.1
    })

    images.forEach(img => imageObserver.observe(img))
    this.observers.set('images', imageObserver)
  }

  initComponentLazyLoading() {
    const components = DOM.selectAll('[data-lazy-component]')
    if (components.length === 0) return

    const componentObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const element = entry.target
          const componentName = element.dataset.lazyComponent
          
          this.loadComponent(componentName, element)
          componentObserver.unobserve(element)
        }
      })
    }, {
      rootMargin: '100px 0px',
      threshold: 0.1
    })

    components.forEach(component => componentObserver.observe(component))
    this.observers.set('components', componentObserver)
  }

  async loadComponent(name, element) {
    try {
      const module = await import(`./components/${name}.js`)
      if (module.default) {
        new module.default(element, this.app)
      }
      element.classList.add('lazy-loaded')
    } catch (error) {
      console.warn(`Failed to lazy load component: ${name}`, error)
    }
  }

  destroy() {
    this.observers.forEach(observer => observer.disconnect())
    this.observers.clear()
  }
}