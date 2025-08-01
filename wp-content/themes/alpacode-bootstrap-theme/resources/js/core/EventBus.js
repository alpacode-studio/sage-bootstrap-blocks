// ===========================================
// core/EventBus.js - Inter-module communication
// ===========================================
export class EventBus {
  constructor() {
    this.events = new Map()
  }

  on(event, callback) {
    if (!this.events.has(event)) {
      this.events.set(event, [])
    }
    this.events.get(event).push(callback)
  }

  off(event, callback) {
    if (!this.events.has(event)) return
    
    const callbacks = this.events.get(event)
    const index = callbacks.indexOf(callback)
    if (index > -1) {
      callbacks.splice(index, 1)
    }
  }

  emit(event, data = null) {
    if (!this.events.has(event)) return
    
    this.events.get(event).forEach(callback => {
      try {
        callback(data)
      } catch (error) {
        console.error(`EventBus error in ${event}:`, error)
      }
    })
  }

  once(event, callback) {
    const onceCallback = (data) => {
      callback(data)
      this.off(event, onceCallback)
    }
    this.on(event, onceCallback)
  }

  clear(event = null) {
    if (event) {
      this.events.delete(event)
    } else {
      this.events.clear()
    }
  }
}