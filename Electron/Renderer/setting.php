<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Ghost Server</title>
</head>

<body class="bg-gray-100 flex flex-col h-screen">

  <!-- Header -->
  <header class="flex items-center justify-between p-4 bg-white shadow-md md:hidden">
    <div class="flex items-center">
      <img src="../Assets/100ppi/Logo 2.png" alt="Logo" class="h-8 w-auto">
      <span class="ml-2 text-xl font-semibold text-gray-800">Ghost Server</span>
    </div>
    <button id="menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none">
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
  </header>

  <div class="flex flex-1 overflow-hidden">
    <!-- Sidebar -->
    <aside id="sidebar"
      class="fixed md:relative z-50 inset-y-0 left-0 w-64 bg-white shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
      <div class="p-4 border-b hidden md:flex items-center">
        <img src="../Assets/100ppi/Logo 2.png" alt="Logo" class="h-8 w-auto">
        <span class="ml-2 text-xl font-semibold text-gray-800">Ghost Server</span>
      </div>
      <nav class="mt-5 px-2 flex flex-col space-y-1">
        <a href="index.php"
          class="group flex items-center px-3 py-2 text-base font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900">
          Dashboard
        </a>
        <a href="Project.php"
          class="group flex items-center px-3 py-2 text-base font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900">
          Projects
        </a>
        <a href="mail.php"
          class="group flex items-center px-3 py-2 text-base font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900">
          Mail
        </a>
        <a href="setting.php"
          class="group flex items-center px-3 py-2 text-base font-medium rounded-lg bg-indigo-100 text-indigo-700">
          Setting
        </a>
        <!-- Tambahkan menu lainnya sama seperti di atas -->
      </nav>
    </aside>

    <!-- Backdrop overlay untuk mobile -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-30 hidden z-40 md:hidden"></div>

    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-y-auto">
      <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">⚙️ Server Settings</h1>
        <p class="text-gray-500 mt-1">Configure your server environment below</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- PHP Version -->
        <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
          <label for="php_version" class="block text-sm font-semibold text-gray-700 mb-1">PHP Version</label>
          <select id="php_version" name="php_version"
            class="w-full px-3 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 text-sm transition">
            <option value="8.2">PHP 8.2</option>
            <option value="8.1">PHP 8.1</option>
            <option value="7.4">PHP 7.4</option>
          </select>
        </div>

        <!-- Node.js Version -->
        <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
          <label for="node_version" class="block text-sm font-semibold text-gray-700 mb-1">Node.js Version</label>
          <select id="node_version" name="node_version"
            class="w-full px-3 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 text-sm transition">
            <option value="20">Node 20.x</option>
            <option value="18">Node 18.x</option>
            <option value="16">Node 16.x</option>
          </select>
        </div>

        <!-- Server Type -->
        <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
          <label for="server_type" class="block text-sm font-semibold text-gray-700 mb-1">Server Type</label>
          <select id="server_type" name="server_type"
            class="w-full px-3 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 text-sm transition">
            <option value="apache">Apache</option>
            <option value="nginx">Nginx</option>
            <option value="caddy">Caddy</option>
          </select>
        </div>

        <!-- Storage Location -->
        <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
          <label for="storage_path" class="block text-sm font-semibold text-gray-700 mb-1">Storage Location</label>
          <input type="text" id="storage_path" name="storage_path" placeholder="/var/www/html"
            class="w-full px-3 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 text-sm transition">
        </div>

        <!-- Port Setting -->
        <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
          <label for="port" class="block text-sm font-semibold text-gray-700 mb-1">Server Port</label>
          <input type="number" id="port" name="port" value="8080"
            class="w-full px-3 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 text-sm transition">
        </div>

        <!-- Log Level -->
        <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
          <label for="log_level" class="block text-sm font-semibold text-gray-700 mb-1">Log Level</label>
          <select id="log_level" name="log_level"
            class="w-full px-3 py-2 rounded-xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 text-sm transition">
            <option value="debug">Debug</option>
            <option value="info" selected>Info</option>
            <option value="warn">Warning</option>
            <option value="error">Error</option>
          </select>
        </div>
      </div>

      <!-- Save Button -->
      <div class="mt-8">
        <button
          class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-indigo-600 text-white font-semibold shadow hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-400 transition">
          💾 Save Settings
        </button>
      </div>
    </main>


  </div>

  <script>
    const menuButton = document.getElementById('menu-button');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    menuButton.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
      overlay.classList.toggle('hidden');
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });
  </script>
</body>

</html>