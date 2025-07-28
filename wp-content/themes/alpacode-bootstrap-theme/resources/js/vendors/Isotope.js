// ===========================================
// vendors/Isotope.js - Isotope integration
// ===========================================
import { DOM } from '../utils/dom.js'
import { CONSTANTS } from '../utils/constants.js'

export function initIsotope(app) {
  return new Promise((resolve) => {
    app.initOnce('isotope', () => {
      if (typeof Isotope === 'undefined') {
        resolve()
        return
      }

      const isotopeLayouts = DOM.selectAll(CONSTANTS.SELECTORS.ISOTOPE_LAYOUT)
      if (isotopeLayouts.length === 0) {
        resolve()
        return
      }

      let loadedCount = 0
      const totalLayouts = isotopeLayouts.length

      isotopeLayouts.forEach((isotopeItem, index) => {
        const layout = isotopeItem.getAttribute('data-layout') ?? 'masonry'
        const filter = isotopeItem.getAttribute('data-default-filter') ?? '*'
        const sort = isotopeItem.getAttribute('data-sort') ?? 'original-order'

        // Use modern loading check or fallback to imagesLoaded
        const container = isotopeItem.querySelector(CONSTANTS.SELECTORS.ISOTOPE_CONTAINER)
        if (!container) {
          loadedCount++
          if (loadedCount === totalLayouts) resolve()
          return
        }

        const initLayout = () => {
          const iso = new Isotope(container, {
            itemSelector: CONSTANTS.SELECTORS.ISOTOPE_ITEM,
            layoutMode: layout,
            filter: filter,
            sortBy: sort
          })

          app.setInstance(`isotope-${index}`, iso)

          // Setup filter handlers
          const filterItems = DOM.selectAll(CONSTANTS.SELECTORS.ISOTOPE_FILTERS, isotopeItem)
          filterItems.forEach(filterItem => {
            app.addListener(filterItem, 'click', () => {
              // Remove active class from siblings
              filterItems.forEach(item => item.classList.remove(CONSTANTS.CLASSES.FILTER_ACTIVE))
              
              // Add active class to clicked item
              filterItem.classList.add(CONSTANTS.CLASSES.FILTER_ACTIVE)
              
              // Apply filter
              iso.arrange({ filter: filterItem.getAttribute('data-filter') })
              
              // Refresh AOS if available
              if (typeof AOS !== 'undefined') {
                AOS.refresh()
              }
            })
          })

          loadedCount++
          if (loadedCount === totalLayouts) resolve()
        }

        // Check if images are loaded
        if (typeof imagesLoaded !== 'undefined') {
          imagesLoaded(container, initLayout)
        } else {
          initLayout()
        }
      })

      if (totalLayouts === 0) resolve()
    })
  })
}