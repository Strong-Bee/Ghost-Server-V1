const { contextBridge, ipcRenderer } = require('electron')

// Expose API aman ke window (frontend bisa akses lewat window.api)
contextBridge.exposeInMainWorld('api', {
  send: (channel, data) => {
    // daftar channel yang diijinkan
    let validChannels = ['toMain']
    if (validChannels.includes(channel)) {
      ipcRenderer.send(channel, data)
    }
  },
  receive: (channel, func) => {
    let validChannels = ['fromMain']
    if (validChannels.includes(channel)) {
      // listener event dari main process
      ipcRenderer.on(channel, (event, ...args) => func(...args))
    }
  }
})
