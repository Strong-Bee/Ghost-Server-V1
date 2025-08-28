const { app, BrowserWindow } = require('electron');
const { exec } = require('child_process');

let phpServer;

const createWindow = () => {
  // Jalankan PHP built-in server di port 3000
  phpServer = exec('php -S 127.0.0.1:3000 -t Renderer', (error, stdout, stderr) => {
    if (error) {
      console.error(`PHP Server Error: ${error.message}`);
      return;
    }
    if (stderr) {
      console.error(`PHP Server Stderr: ${stderr}`);
      return;
    }
    console.log(`PHP Server: ${stdout}`);
  });

  // Buat jendela Electron
  const win = new BrowserWindow({
    width: 1200,
      height: 800,
    autoHideMenuBar: true,
    webPreferences: {
      nodeIntegration: false,
    },
  });

  // Load index.php via localhost
  win.loadURL('http://127.0.0.1:3000/index.php'); // cukup index.php
};

// Matikan PHP server kalau aplikasi ditutup
app.on('will-quit', () => {
  if (phpServer) phpServer.kill();
});

app.whenReady().then(createWindow);
