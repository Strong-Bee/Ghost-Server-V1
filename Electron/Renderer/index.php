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
          class="group flex items-center px-3 py-2 text-base font-medium rounded-lg bg-indigo-100 text-indigo-700">
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
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Dashboard</h1>

      <div class="grid grid-flow-col grid-rows-3 gap-6">
        <!-- Server (row-span-3) -->
        <div class="row-span-3 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <h2 class="text-lg font-semibold text-gray-700 font-bold">Server :</h2>

          <!-- NGINX -->
          <div class="mt-4 flex items-center justify-between">
            <span class="text-gray-500">NGINX</span>
            <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" checked class="sr-only peer">
              <div class="w-11 h-6 bg-gray-200 peer-checked:bg-green-500 rounded-full transition-colors duration-300"></div>
              <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full shadow transition-transform duration-300 peer-checked:translate-x-full"></div>
            </label>
          </div>

          <!-- APACHE -->
          <div class="mt-4 flex items-center justify-between">
            <span class="text-gray-500">APACHE</span>
            <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer">
              <div class="w-11 h-6 bg-gray-200 peer-checked:bg-green-500 rounded-full transition-colors duration-300"></div>
              <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full shadow transition-transform duration-300 peer-checked:translate-x-full"></div>
            </label>
          </div>

          <!-- MYSQL -->
          <div class="mt-4 flex items-center justify-between">
            <span class="text-gray-500">MYSQL</span>
            <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer">
              <div class="w-11 h-6 bg-gray-200 peer-checked:bg-green-500 rounded-full transition-colors duration-300"></div>
              <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full shadow transition-transform duration-300 peer-checked:translate-x-full"></div>
            </label>
          </div>

          <!-- PHP -->
          <div class="mt-4 flex items-center justify-between">
            <span class="text-gray-500">PHP</span>
            <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" checked class="sr-only peer">
              <div class="w-11 h-6 bg-gray-200 peer-checked:bg-blue-500 rounded-full transition-colors duration-300"></div>
              <div class="absolute left-0.5 top-0.5 w-5 h-5 bg-white rounded-full shadow transition-transform duration-300 peer-checked:translate-x-full"></div>
            </label>
          </div>
        </div>

        <!-- Status (col-span-2) -->
        <div class="col-span-2 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <h2 class="text-lg font-semibold text-gray-700">Status</h2>
          <p class="text-gray-500 mt-2">IP :</p>
          <p class="text-gray-500 mt-2">Port :</p>
        </div>

        <!-- Projects (col-span-2 row-span-2) -->
        <div class="col-span-2 row-span-2 bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <h2 class="text-lg font-semibold text-gray-700">Projects</h2>
          <ul class="space-y-2 mt-3">
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Project Aurora</span>
              <button class="px-2 py-1 bg-blue-500 text-white rounded text-xs hover:bg-blue-600">Open</button>
            </li>
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Project Nebula</span>
              <button class="px-2 py-1 bg-blue-500 text-white rounded text-xs hover:bg-blue-600">Open</button>
            </li>
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Project Orion</span>
              <button class="px-2 py-1 bg-blue-500 text-white rounded text-xs hover:bg-blue-600">Open</button>
            </li>
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Project Phoenix</span>
              <button class="px-2 py-1 bg-blue-500 text-white rounded text-xs hover:bg-blue-600">Open</button>
            </li>
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Project Eclipse</span>
              <button class="px-2 py-1 bg-blue-500 text-white rounded text-xs hover:bg-blue-600">Open</button>
            </li>
          </ul>
        </div>
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