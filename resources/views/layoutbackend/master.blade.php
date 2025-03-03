<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Back Office &mdash; APP</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/components.css') }}">
  
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

        @include('layoutbackend.navbar')

      <div class="main-sidebar sidebar-style-2">
        @include('layoutbackend.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2023 <div class="bullet"></div> Created By <a href="syahrulam.github.io">SAM</a>
        </div>
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/admin/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/admin/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/admin/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/admin/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/stisla.js') }}"></script>

  <!-- JS Libraries -->
  <script src="{{ asset('assets/admin/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('assets/admin/modules/chart.min.js') }}"></script>
  <script src="{{ asset('assets/admin/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/admin/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets/admin/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/admin/js/page/index.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Tambahkan Script Modal Fix -->
  <script>
    $(document).ready(function() {
        // Mencegah modal tertutup otomatis
        $('.modal').modal({
            backdrop: 'static',
            keyboard: false
        });

        // Cek apakah modal tertutup oleh event lain
        $('.modal').on('hidden.bs.modal', function (e) {
            console.log('Modal tertutup');
        });
    });
  </script>

</body>
</html>
