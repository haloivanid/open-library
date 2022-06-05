<div x-show="modalCollectionOpen" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="fixed inset-0 bg-gray-200 bg-opacity-75"></div>
  <div class="fixed z-20 inset-0 overflow-y-auto">
    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
      <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform sm:my-8 sm:max-w-lg sm:w-full">
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
            <h3 class="text-center text-lg leading-6 font-medium text-gray-900" id="modal-title">Our Example Collection</h3>
          </div>
          <div class="owl-carousel">
            <?php
            $list_books = array(
              (object) [
                'title' => 'Negeri Lima Menara',
                'author' => 'Ahmad Fuadi',
                'genre' => 'Edukasi, Religi, Roman',
                'date' => 'Juli 2009',
                'isbn' => '978-979-22-4861-6',
                'img' => 'assets/images/example-book/lima-menara.jpg'
              ],
              (object) [
                'title' => 'Negeri Lima Menara 2',
                'author' => 'Ahmad Fuadi',
                'genre' => 'Edukasi, Religi, Roman',
                'date' => 'Juli 2009',
                'isbn' => '978-979-22-4861-6',
                'img' => 'assets/images/example-book/lima-menara.jpg'
              ],
              (object) [
                'title' => 'Negeri Lima Menara 3',
                'author' => 'Ahmad Fuadi',
                'genre' => 'Edukasi, Religi, Roman',
                'date' => 'Juli 2009',
                'isbn' => '978-979-22-4861-6',
                'img' => 'assets/images/example-book/lima-menara.jpg'
              ],
            );

            foreach ($list_books as $book) {
              echo  '<div class="flex items-center mt-4 bg-white">';
              echo  '<img src="' . $book->img . '" alt="' . $book->title . ' Cover" class="object-contain mx-auto w-60 rounded-lg overflow-hidden">';
              echo  '<div class="flex ml-4 w-60 h-full text-left"><ul>';
              echo  '<li class="font-medium">Judul:</li><li class="font-thin">' . $book->title . '</li>';
              echo  '<li class="font-medium">Pengarang:</li><li class="font-thin">' . $book->author . '</li>';
              echo  '<li class="font-medium">Genre:</li><li class="font-thin">' . $book->genre . '</li>';
              echo  '<li class="font-medium">Tanggal Terbit:</li><li class="font-thin">' . $book->date . '</li>';
              echo  '<li class="font-medium">ISBN:</li><li class="font-thin">' . $book->isbn . '</li>';
              echo  '</ul></div></div>';
            }
            ?>
          </div>

          <script src="library/js/jquery.min.js"></script>
          <script src="library/js/owl-carousel/owl.carousel.min.js"></script>
          <script>
            $(document).ready(function() {
              $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: false,
              });
            });
          </script>
        </div>
        <div class="bg-gray-100 px-4 py-3 flex items-center border-t border-gray-200 sm:px-6 text-gray-700 font-light text-lg text-center">
          <div class="w-50 h-50 text-lime-500 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
          </div>
          To borrow our collection of books, please log in to the member area page or register as a member first.
        </div>
      </div>
    </div>
  </div>
</div>