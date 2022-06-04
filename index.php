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
  <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body x-data="{ isOpen: true, modalCollectionOpen: false }">
  <!-- This example requires Tailwind CSS v2.0+ -->
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
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900 hover:font-bold">About</a>

                <a href="#" class="font-medium text-gray-500 hover:text-gray-900 hover:font-bold">Collections</a>

                <a href="#" class="font-medium text-gray-500 hover:text-gray-900 hover:font-bold">Facility</a>

                <a href="#" class="font-medium text-gray-500 hover:text-gray-900 hover:font-bold">Pricing</a>

                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 hover:font-bold">Log in</a>
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
                <div x-show ="!isOpen" class="-mr-2 flex items-center md:hidden">
                  <button type="button" @click="isOpen = !isOpen" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
                <div x-show ="isOpen" class="-mr-2">
                  <button type="button" @click="isOpen = !isOpen" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Collection</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Facility</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Pricing</a>
              </div>
              <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Log in </a>
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
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Find all the books of knowledge, novel,  journal, science articles, etc in all the collections that we have digitally without the hassle of having to search manually in conventional libraries.</p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow hover:shadow-slate-500">
                <button
                  @click="modalCollectionOpen = !modalCollectionOpen"
                  class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"
                > Example Collection </button>
                <!-- <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Example Collection </a> -->
              </div>
              <div class="relative">
                <div class="mt-3 sm:mt-0 sm:ml-3">
                  <div class="absolute top-0 right-0 -mr-4 -mt-1 w-4 h-4 rounded-full bg-sky-300 animate-ping"></div>
                  <div class="absolute top-0 right-0 -mr-4 -mt-1 w-4 h-4 rounded-full bg-sky-400 opacity-75"></div>
                </div>
                <a href="#" class="mt-3 sm:mt-0 sm:ml-3 w-full flex items-center justify-center px-8 py-3 border border-transparent md:py-4 md:text-lg md:px-10 text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 hover:shadow-slate-300 hover:shadow-md"> Be Our Member </a>
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
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#" class="hover:underline">Meidhita Nurwigia Putri</a>. All Rights Reserved.
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

  <!-- Modal Example Collections -->
  <div 
    x-show="modalCollectionOpen"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="relative z-10"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
  >
  <div class="fixed inset-0 bg-gray-200 bg-opacity-75"></div>

  <div class="fixed z-20 inset-0 overflow-y-auto">
    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
      <div
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform sm:my-8 sm:max-w-lg sm:w-full"
      >
        <div class="flex flex-row-reverse p-2 -mb-8">
          <button type="button" @click="modalCollectionOpen = !modalCollectionOpen" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
            <span class="sr-only">Close main menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="items-center bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="mt-4 sm:mt-0 sm:ml-4">
            <h3 class="text-center text-lg leading-6 font-medium text-gray-900" id="modal-title">Our Collection</h3>
          </div>
          <div class="flex items-start mt-4 w-full bg-white">
            <img src="assets/images/example-book/lima-menara.jpg" alt="Lima Menara" class="mx-auto w-60 h-60 rounded-lg overflow-hidden">
            <div class="flex ml-4 w-60 h-full text-left">
              <ul>
                <li class="font-medium">Judul:</li>
                <li class="font-thin">Negeri Lima Menara</li>
                <li class="font-medium">Pengarang:</li>
                <li class="font-thin">Ahmad Fuadi</li>
                <li class="font-medium">Genre:</li>
                <li class="font-thin">Edukasi, Religi, Roman</li>
                <li class="font-medium">Tanggal Terbit:</li>
                <li class="font-thin">Juli 2009</li>
                <li class="font-medium">ISBN:</li>
                <li class="font-thin">ISBN 978-979-22-4861-6</li>
              </ul> 
            </div>
          </div>
        </div>
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
          <div>
            <nav class="relative z-50 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
              <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Previous</span>
                <!-- Heroicon name: solid/chevron-left -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </a>
              <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
              <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
              <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                <span class="sr-only">Next</span>
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Example Collections -->
</body>
</html>