import { DOM } from '../utils/DOM'

// features/MobileNavigation.js
export class MobileNavigation {
  constructor(app) {
    this.app = app
    this.init()
  }

  init() {
    this.app.initOnce('mobile-nav', () => {
      this.toggleBtn = DOM.select('.mobile-nav-toggle')
      if (!this.toggleBtn) return

      this.app.addListener(this.toggleBtn, 'click', this.toggle.bind(this))
      this.initNavLinks()
      this.initDropdowns()
    })
  }

  toggle() {
    document.body.classList.toggle('mobile-nav-active')
    this.toggleBtn.classList.toggle('bi-list')
    this.toggleBtn.classList.toggle('bi-x')
  }

  initNavLinks() {
    DOM.selectAll('#navmenu a, .navmenu a, .navbar-nav a').forEach(link => {
      this.app.addListener(link, 'click', () => {
        if (document.body.classList.contains('mobile-nav-active')) {
          this.toggle()
        }
      })
    })
  }

  initDropdowns() {
    DOM.selectAll('.navmenu .toggle-dropdown, .dropdown-toggle').forEach(dropdown => {
      this.app.addListener(dropdown, 'click', this.handleDropdown.bind(this))
    })
  }

  handleDropdown(e) {
    e.preventDefault()
    e.stopPropagation()
    
    const parent = e.target.parentNode
    parent.classList.toggle('active')
    
    const sibling = parent.nextElementSibling
    if (sibling) {
      sibling.classList.toggle('dropdown-active')
    }
  }
}