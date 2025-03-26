<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Homepage</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

  <x-navbar></x-navbar> {{-- Navbar tetap ada --}}

  <div class="container-fluid" id="content">
    {{ $slot }}
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>

  <script>
    $(document).ready(function () {
      $('a.nav-link, a.dropdown-item').click(function (event) {
        event.preventDefault(); // Mencegah reload

        let page = $(this).attr('href'); // Ambil URL
        history.pushState(null, '', page); // Ubah URL tanpa reload

        $('#content').fadeOut(200, function () {
          $('#content').load(page + ' #content > *', function () {
            $('#content').fadeIn(200);
          });
        });

        // Tambahkan class active ke menu yang diklik
        $('a.nav-link, a.dropdown-item').removeClass('active');
        $(this).addClass('active');

        // Tutup navbar di mobile setelah klik
        $('.navbar-collapse').collapse('hide');
      });

      // Handle back/forward button
      window.onpopstate = function () {
        let page = location.pathname;
        $('#content').fadeOut(200, function () {
          $('#content').load(page + ' #content > *', function () {
            $('#content').fadeIn(200);
          });
        });
      };
    });
  </script>

</body>
</html>