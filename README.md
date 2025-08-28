<p align="center">
  <img src="Electron/Assets/100ppi/Logo 3.png" alt="Ghost Server Logo" width="300"/>
</p>

<h1 align="center">Ghost Server</h1>

<p align="center">
  Web Server Lokal buatan sendiri (alternatif XAMPP/Laragon) yang rapi, fleksibel, dan mendukung project berbasis <b>PHP, Laravel, CodeIgniter, dan Static HTML</b>.  
  Dilengkapi dengan <b>Electron.js Control Panel</b> untuk kemudahan penggunaan melalui GUI.
</p>

---

## 📂 Struktur Folder

```bash
GhostServer/
├── bin/                     # Binary / Executable server
│   ├── php/                 # PHP runtime
│   │   └── php.exe / php.ini
│   ├── nginx/               # Nginx binary
│   │   └── nginx.exe / nginx.conf
│   └── mysql/               # MySQL/MariaDB binary
│       └── mysqld.exe / my.ini
│
├── config/                  # Konfigurasi server
│   ├── vhosts.conf          # Virtual Host konfigurasi
│   ├── php.ini              # Custom konfigurasi PHP
│   └── nginx.conf           # Custom konfigurasi Nginx
│
├── logs/                    # Log server
│   ├── access.log
│   └── error.log
│
├── database/                # Data MySQL/MariaDB
│   ├── mysql/               # Database sistem
│   └── projects/            # Database tiap project
│
├── ssl/                     # Sertifikat SSL lokal
│   ├── localhost.crt
│   ├── localhost.key
│   └── ca.pem
│
├── backup/                  # Backup database & project
│   ├── db/                  # Backup database
│   └── projects/            # Backup project website
│
├── www/                     # Root semua project website
│   ├── project1/            # Contoh project Laravel
│   │   ├── public/          
│   │   ├── app/             
│   │   ├── storage/         
│   │   └── vendor/          
│   │
│   ├── project2/            # Contoh project CodeIgniter
│   │   ├── public/          
│   │   ├── app/             
│   │   ├── storage/         
│   │   └── vendor/          
│   │
│   └── static-site/         
│       ├── public/          
│       └── storage/         
│
├── electron/                # Aplikasi GUI Ghost Server (Electron.js)
│   ├── package.json         # Konfigurasi project Electron
│   ├── main.js              # Main process Electron
│   ├── preload.js           # Preload script (jembatan renderer ↔ main)
│   ├── renderer/            # Frontend GUI (React/Vue/Tailwind, dll.)
│   │   ├── index.html
│   │   ├── styles.css
│   │   └── app.js
│   └── assets/              # Ikon & resource UI
│       └── ghost-icon.png
│
└── README.md                # Dokumentasi Ghost Server
```
## 📦 Cara Instalasi
### 🖥️ Windows

1. Download paket Ghost Server untuk Windows (ZIP/Installer).

2. Extract ke folder yang diinginkan, contoh:

```bash
C:\GhostServer\
```

3. Pastikan folder bin/php/, bin/nginx/, dan bin/mysql/ sudah ada.

4. Jalankan GhostServer.exe (Electron GUI) di folder electron/.

5. Klik Start Server untuk menjalankan PHP, Nginx, dan MySQL.

6. Akses project kamu di browser lewat:

```bash
http://localhost/
```

### 🍏 macOS (MacBook)

1. Download paket Ghost Server untuk macOS (ZIP/DMG).

2. Extract / Install ke folder Applications atau folder pilihan, contoh:

```bash
/Users/<username>/GhostServer/
```


3. Pastikan permission executable sudah aktif:

```bash
chmod +x bin/php/php
chmod +x bin/nginx/nginx
chmod +x bin/mysql/mysqld
```

Jalankan GUI GhostServer.app (Electron GUI).

Klik Start Server untuk menyalakan PHP, Nginx, dan MySQL.

Akses project kamu di browser lewat:

```bash
http://localhost/
```