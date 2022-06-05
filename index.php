<!DOCTYPE html>
<html lang="en">

<head>
  <!-- sites meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This website is the final project of the creator for the lecture on creating a digital open library website of UIN Maulana Malik Ibrahim Malang">
  <meta name="keywords" content="Final Project, Open Library, Digital Library">
  <meta name="author" content="Meidhita Nurwigia Putri">

  <title>Malang Open Public Library</title>
  <link rel="shortcut icon" href="assets/images/icons/Books/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://rsms.me/interx/inter.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="library/js/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="library/js/owl-carousel/owl.theme.default.min.css">
  <script src="https://unpkg.com/alpinejs" defer></script>

  <style>
    [x-cloak] {
      display: none
    }
  </style>
</head>

<body x-cloack x-data="{ 
  isOpen: true, 
  showAlert: false,
  alertMessage: '',
  modalCollectionOpen: false,
  registerModal: false,
}">
  <!-- This example requires Tailwind CSS v2.0+ -->

  <!-- Alert Component -->
  <div x-show="showAlert">
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/core/components/alert.php'; ?>
  </div>
  <!-- End Alert Component -->

  <div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 bg-gradient-to-r from-transparent via-white to-white">
        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white  transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>

        <!-- Top Menu -->
        <div>
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  <span class="sr-only">Workflow</span>
                  <img alt="Workflow" class="h-8 w-auto sm:h-10" src="assets/images/icons/MPDL/android-chrome-512x512.png" alt="MPDL Logo">
                </div>
              </div>
              <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                <a href="#" x-init="alertMessage = 'Sorry 😰, you click unavailable service'" @click="showAlert = !showAlert" class="font-medium text-gray-500 hover:text-gray-900 hover:font-bold">About</a>

                <a href="#" x-init="alertMessage = 'Sorry 😰, you click unavailable service'" @click="showAlert = !showAlert" class="font-medium text-gray-500 hover:text-gray-900 hover:font-bold">Facility</a>

                <a href="#" x-init="alertMessage = 'Sorry 😰, you click unavailable service'" @click="showAlert = !showAlert" class="font-medium text-gray-500 hover:text-gray-900 hover:font-bold">Pricing</a>

                <a href="#" x-init="alertMessage = 'Sorry 😰, you click unavailable service'" @click="showAlert = !showAlert" class="font-medium text-indigo-600 hover:text-indigo-500 hover:font-bold">Log in</a>
              </div>
            </nav>
          </div>

          <!-- Top Menu Responsive -->
          <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-8 w-auto" src="assets/images/icons/MPDL/android-chrome-512x512.png" alt="MPDL Logo">
                </div>
                <div x-show="!isOpen" class="-mr-2 flex items-center md:hidden">
                  <button type="button" @click="isOpen = !isOpen" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
                <div x-show="isOpen" class="-mr-2">
                  <button type="button" @click="isOpen = !isOpen" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div x-show="isOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" x-init="alertMessage = 'Sorry 😰, you click unavailable service'" @click="showAlert = !showAlert" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>

                <a href="#" x-init="alertMessage = 'Sorry 😰, you click unavailable service'" @click="showAlert = !showAlert" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Facility</a>

                <a href="#" x-init="alertMessage = 'Sorry 😰, you click unavailable service'" @click="showAlert = !showAlert" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Pricing</a>
              </div>
              <a href="#" x-init="alertMessage = 'Sorry 😰, you click unavailable service'" @click="showAlert = !showAlert" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Log in </a>
            </div>
          </div>
          <!-- End Top Menu Responsive -->

        </div>
        <!-- End of Top Menu -->

        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline">Expand your knowledge with</span>
              <span class="block text-indigo-600 xl:inline">Malang digital public library</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Find all the books of knowledge, novel, journal, science articles, etc in all the collections that we have digitally without the hassle of having to search manually in conventional libraries.</p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow hover:shadow-slate-500">
                <button @click="modalCollectionOpen = !modalCollectionOpen" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Example Collection </button>
                <!-- <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Example Collection </a> -->
              </div>
              <div class="relative">
                <div class="mt-3 sm:mt-0 sm:ml-0">
                  <div class="absolute top-0 right-0 sm:-mr-4 -mr-1 -mt-1 w-4 h-4 rounded-full bg-sky-300 animate-ping"></div>
                  <div class="absolute top-0 right-0 sm:-mr-4 -mr-1 -mt-1 w-4 h-4 rounded-full bg-sky-400 opacity-75"></div>
                </div>
                <a href="#" @click="registerModal = true" class="mt-3 sm:mt-0 sm:ml-3 w-full flex items-center justify-center px-8 py-3 border border-transparent md:py-4 md:text-lg md:px-10 text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 hover:shadow-slate-300 hover:shadow-md"> Be Our Member </a>
              </div>
            </div>
          </div>
        </main>

      </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:left-0">
      <img class="h-0 lg:h-full lg:w-full opacity-10" src="assets/images/bg/transparent-pattern.png" alt="Background pattern">
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="assets/images/bg/bg-cover-library.jpg" alt="Library Featured Image">
    </div>
  </div>

  <footer class="p-4 md:flex md:items-center md:justify-between md:p-6 bg-white">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
      Creted in 2022
      <a href="#" class="hover:underline">Meidhita Nurwigia Putri</a>.
      This website build with
      <a href="https://tailwindui.com" target="_blank" rel="noopener noreferrer" class="hover:underline">Tailwind UI</a>
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
      </li>
      <li>
        <a href="#" class="mr-4 hover:underline md:mr-6">Terms of Services</a>
      </li>
      <li>
        <a href="#" class="hover:underline">Contact</a>
      </li>
    </ul>
  </footer>

  <!-- Modal Registration -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/register.php'; ?>
  <!-- End Modal Registration -->

  <!-- Modal Example Collections -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/core/components/example-collection.php'; ?>
  <!-- End Modal Example Collections -->

</body>

</html>