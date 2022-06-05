<html>
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
          'isbn' => 'ISBN 978-979-22-4861-6',
          'img' => 'assets/images/example-book/lima-menara.jpg'
        ],
        (object) [
          'title' => 'Negeri Lima Menara 2',
          'author' => 'Ahmad Fuadi',
          'genre' => 'Edukasi, Religi, Roman',
          'date' => 'Juli 2009',
          'isbn' => 'ISBN 978-979-22-4861-6',
          'img' => 'assets/images/example-book/lima-menara.jpg'
        ],
        (object) [
          'title' => 'Negeri Lima Menara 3',
          'author' => 'Ahmad Fuadi',
          'genre' => 'Edukasi, Religi, Roman',
          'date' => 'Juli 2009',
          'isbn' => 'ISBN 978-979-22-4861-6',
          'img' => 'assets/images/example-book/lima-menara.jpg'
        ],
      );

      foreach ($list_books as $book) {
        echo  '<div class="flex items-start mt-4 bg-white">';
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
</html>