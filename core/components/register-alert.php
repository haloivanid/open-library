<?php
  $element =
  '<div x-show="alertRegister">' .
  '<div x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed z-20" role="alert">' .
  '<div class="flex w-screen h-screen items-end justify-center bg-gray-200 bg-opacity-75">' .
  '<div class="flex items-center p-4 mb-24 bg-teal-100 rounded-lg dark:bg-teal-200 bg-opacity-75 animate-bounce">' .
  '<svg class="flex-shrink-0 w-5 h-5 text-teal-700 dark:text-teal-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">' .
  '<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>' .
  '<span class="ml-3 text-base font-medium text-teal-700 dark:text-teal-800">Register successful, please login</span>' .
  '<button @click="alertRegister = false" type="button" class="ml-2 -mx-1.5 -my-1.5 bg-teal-100 text-teal-500 rounded-lg focus:ring-2 focus:ring-teal-400 p-1.5 hover:bg-teal-200 inline-flex h-8 w-8 dark:bg-teal-200 dark:text-teal-600 dark:hover:bg-teal-300" data-dismiss-target="#alert-2" aria-label="Close">' .
  '<span class="sr-only">Close</span>' .
  '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">' .
  '<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />' .
  '</svg></button></div></div></div></div>';

  return $element;
?>