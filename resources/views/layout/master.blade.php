<!DOCTYPE html>
<html lang="en">

<head>

    <title>MediHelp</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">



<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
</header>

   <!-- FOOTER -->
   <footer data-stellar-background-ratio="5">
     <section class="info_section layout_padding2">
          <div class="container">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-2 d-flex justify-content-center">
                <h1 class="mamura-title">MediHelp</h1>
              </div>
              <div class="col-md-1 d-flex justify-content-center">
                <div class="vertical-line"></div>
              </div>
              <div class="col-md-4 info_col">
                <div class="info_contact">
                  <h4>Contact</h4>
                  <div class="contact_link_box">
                    <a href="{{ url('/#') }}">
                      <i class="fa fa-whatsapp" aria-hidden="true"></i>
                      <span>+621234567890</span>
                    </a>
                    <a href="{{ url('/#') }}">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                      <span>medihelp@gmail.com</span>
                    </a>
                  </div>
                </div>
                <div class="info_social">
                  <a href="{{ url('/#') }}">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="{{ url('/#') }}">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="{{ url('/#') }}">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-4 info_col">
                <div class="info_link_box">
                  <h4>Links</h4>
                  <div class="info_links">
                    <a class="active" href="{{ url('/home') }}">Home</a>
                    <a href="{{ url('/saranobat') }}">Saran Obat</a>
                    <a href="{{ url('/apotek') }}">Apotek</a>
                    <a href="{{ url('/konsultasi') }}">Konsultasi</a>
                    <a href="{{ url('/transaksi') }}">Pesan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>


</body>
@yield('content')
</html>
