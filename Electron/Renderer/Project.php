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
          class="group flex items-center px-3 py-2 text-base font-medium rounded-lg bg-indigo-100 text-indigo-700">
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
      <h1 class="text-3xl font-bold text-gray-900 mb-4">Project</h1>
      <!-- isi -->
      <button command="show-modal" commandfor="dialog"
        class="rounded-md bg-blue-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 transition">
        Tambah Project
      </button>

      <el-dialog>
        <dialog id="dialog" aria-labelledby="dialog-title"
          class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
          <el-dialog-backdrop
            class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

          <div tabindex="0"
            class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel
              class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
              <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div
                    class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                      aria-hidden="true" class="size-6 text-red-400">
                      <path
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All of your
                        data will be permanently removed. This action cannot be undone.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" command="close" commandfor="dialog"
                  class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                <button type="button" command="close" commandfor="dialog"
                  class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
              </div>
            </el-dialog-panel>
          </div>
        </dialog>
      </el-dialog>
      <div class="container mx-auto mt-6">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Project Column -->
    <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Project</h2>
      <ul class="space-y-2">
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Aurora</span>
          <span class="text-sm text-gray-500">Active</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Nebula</span>
          <span class="text-sm text-gray-500">Active</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Orion</span>
          <span class="text-sm text-gray-500">Inactive</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Phoenix</span>
          <span class="text-sm text-gray-500">Active</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Eclipse</span>
          <span class="text-sm text-gray-500">Inactive</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Polaris</span>
          <span class="text-sm text-gray-500">Active</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Vega</span>
          <span class="text-sm text-gray-500">Active</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Lyra</span>
          <span class="text-sm text-gray-500">Inactive</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Andromeda</span>
          <span class="text-sm text-gray-500">Active</span>
        </li>
        <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
          <span>Project Titan</span>
          <span class="text-sm text-gray-500">Inactive</span>
        </li>
      </ul>
    </div>

    <!-- Detail Column -->
    <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Detail</h2>

      <div class="flex flex-row gap-4">
        <!-- Preview Frame -->
        <div class="basis-1/3">
          <div class="relative bg-gray-100 border border-gray-300 rounded-lg overflow-hidden shadow">
            <!-- Label Preview -->
            <div class="absolute bottom-0 left-0 w-full bg-black/60 text-white text-sm px-2 py-1">
              Preview
            </div>
            <!-- Iframe -->
            <iframe src="https://example.com" class="w-full h-64" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>

        <!-- Detail List -->
        <div class="basis-2/3">
          <ul class="space-y-2">
            
            <!-- Terminal -->
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Terminal</span>
              <a href="#"
                class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                Open
              </a>
            </li>

            <!-- VS Code -->
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>VS Code</span>
              <a href="#"
                class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                Open
              </a>
            </li>

            <!-- Tinker -->
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Tinker</span>
              <a href="#"
                class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                Open
              </a>
            </li>

            <!-- PHP Version -->
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>PHP Version</span>
              <select id="php-version" name="php-version"
                class="w-32 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                <option value="8.1">8.1</option>
                <option value="8.2">8.2</option>
                <option value="8.3">8.3</option>
                <option value="8.4">8.4</option>
              </select>
            </li>

            <!-- Node Version -->
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Node Version</span>
              <select id="node-version" name="node-version"
                class="w-32 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                <option value="18">18</option>
                <option value="20">20</option>
                <option value="22">22</option>
                <option value="24">24</option>
              </select>
            </li>
            <!-- Path -->
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>Path</span>
              <a href="#" class="text-blue-600 hover:underline">C:/path/to/project</a>
            </li>
            <!-- URL Site -->
            <li class="flex items-center justify-between p-2 bg-gray-50 rounded hover:bg-gray-100 transition">
              <span>URL Site</span>
              <a href="http://example.test" target="_blank" class="text-blue-600 hover:underline">http://example.test</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

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