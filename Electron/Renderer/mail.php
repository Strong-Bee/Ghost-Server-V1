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
          class="group flex items-center px-3 py-2 text-base font-medium rounded-lg bg-indigo-100 text-indigo-700">
          Mail
        </a>
        <a href="setting.php"
          class="group flex items-center px-3 py-2 text-base font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900">
          Setting
        </a>
        <!-- Tambahkan menu lainnya sama seperti di atas -->
      </nav>
    </aside>

    <!-- Backdrop overlay untuk mobile -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-30 hidden z-40 md:hidden"></div>
    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-y-auto">
      <h1 class="text-3xl font-bold text-gray-900 mb-4">SMTP Mail</h1>

      <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition w-full max-w-6xl">
        <form class="space-y-4">
          <!-- SMTP Host -->
          <div>
            <label class="block text-gray-700 font-medium mb-1">SMTP Host</label>
            <input type="text" placeholder="mail.example.com"
              class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>

          <!-- SMTP Port -->
          <div>
            <label class="block text-gray-700 font-medium mb-1">Port</label>
            <input type="number" placeholder="587"
              class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>

          <!-- Username -->
          <div>
            <label class="block text-gray-700 font-medium mb-1">Username</label>
            <input type="text" placeholder="your@email.com"
              class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>

          <!-- Password -->
          <div>
            <label class="block text-gray-700 font-medium mb-1">Password</label>
            <input type="password" placeholder="********"
              class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>

          <!-- Encryption -->
          <div>
            <label class="block text-gray-700 font-medium mb-1">Encryption</label>
            <select class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
              <option value="none">None</option>
              <option value="ssl">SSL</option>
              <option value="tls">TLS</option>
            </select>
          </div>

          <!-- From Email -->
          <div>
            <label class="block text-gray-700 font-medium mb-1">From Email</label>
            <input type="email" placeholder="noreply@example.com"
              class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>

          <!-- Save Button -->
          <div class="pt-4">
            <button type="submit"
              class="px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
              Save Settings
            </button>
          </div>
        </form>
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