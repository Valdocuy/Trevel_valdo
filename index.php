<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="./css/navbar.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#">Trevel OI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Paket Trevel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Contact</a>
                </li>
            </ul>
            <a class="btn btn-danger" href="./pengajuan.php"><i class="bi bi-clipboard-plus-fill"></i> Pesan</a>
            <a class="btn btn-warning" href="./tabel.php"><i class="bi bi-clipboard-plus-fill"></i> Cek data</a>
        </div>
    </nav>



    <!-- corousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/bg1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kore</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/bg2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Paris</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/bg3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Jepang</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
<!-- corousel -->

<!-- konten -->
<div id="imageSlider" class="carousel slide mt-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <img src="./img/bg1.jpg" class="d-block img-thumbnail" alt="Gambar 1">
            </div>
            <div class="col-md-2">
              <img src="./img/gambar (1).jpg" class="d-block img-thumbnail" alt="Gambar 2">
            </div>
            <div class="col-md-2">
              <img src="./img/gambar (2).jpg" class="d-block img-thumbnail" alt="Gambar 3">
            </div>
            <div class="col-md-2">
              <img src="./img/gambar (3).jpg" class="d-block img-thumbnail" alt="Gambar 4">
            </div>
            <div class="col-md-2">
              <img src="./img//gambar (4).jpg" class="d-block img-thumbnail" alt="Gambar 5">
            </div>
            <div class="col-md-2">
              <img src="./img/gambar (5).jpg" class="d-block img-thumbnail" alt="Gambar 6">
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <!-- Konten -->



  <!-- About -->
  <div class="container mt-4">
    <div class="row">
      <div class="col text-center">
        <h1 class="title">About Trevel OI</h1>
      </div>
    </div>
  </div>
  <div class="container" style="padding: 80px;">
    <div class="row">
      <div class="col-md-6 order-md-2">
        <h2>About Us</h2>
        <p>Selamat datang di situs web perjalanan kami! Kami adalah tim yang bersemangat dalam menyajikan pengalaman perjalanan terbaik bagi Anda. Dengan dedikasi dan pengalaman, kami siap membantu Anda menjelajahi destinasi indah di seluruh dunia dan menciptakan kenangan tak terlupakan. Bersama, mari kita menjelajahi dunia dan menciptakan petualangan yang luar biasa!</p>
        <a href="./pengajuan.php" class="btn btn-primary">Datar Sekarang</a>
      </div>
      <div class="col-md-4 order-md-1 mt-3">
        <img src="./img/about.png" class="img-fluid" alt="About Us Image">
      </div>
    </div>
  </div>
  <!-- About end -->




  <!-- card -->
  <div class="container mt-4">
    <div class="row">
      <div class="col text-center">
        <h1 class="title">Welcome to Our Paket Trevel</h1>
      </div>
    </div>
  </div>
  
  <div class="container mt-4">
    <div class="row">
      <div class="col-6 col-md-3 mb-4">
        <div class="card">
          <img src="./img/Jepang.png" class="card-img-top" alt="Paket Wisata 1">
          <div class="card-body">
            <h5 class="card-title">Paket Trevel Jepang</h5>
            <p class="card-text">Nikmati petualangan seru di pulau terindah dengan pemandangan alam yang menakjubkan.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="card">
          <img src="./img/tv2.jpg" class="card-img-top" alt="Paket Wisata 2">
          <div class="card-body">
            <h5 class="card-title">Paket Trevel Korea </h5>
            <p class="card-text">Jelajahi kota-kota indah dengan wisata sejarah dan kebudayaan yang memukau.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="card">
          <img src="./img/Bromo.png" class="card-img-top" alt="Paket Wisata 3">
          <div class="card-body">
            <h5 class="card-title">Paket Trevel Indonesia</h5>
            <p class="card-text">Nikmati keindahan alam pegunungan dengan pemandangan yang menakjubkan.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="card">
          <img src="./img/tv3.jpg" class="card-img-top" alt="Paket Wisata 4">
          <div class="card-body">
            <h5 class="card-title">Paket Trevel Kanada</h5>
            <p class="card-text">Temukan petualangan menarik di tempat-tempat eksotis yang belum pernah Anda kunjungi sebelumnya.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- card end -->
  
  
  <!-- Galery -->
  <div class="container mt-4">
    <div class="row">
      <div class="col text-center">
        <h1 class="title">Welcome to Our Galry Trevel</h1>
      </div>
    </div>
  </div>
  
  <div class="container gallery-container">
    <div class="row">
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (1).jpg" alt="Gallery Image 1">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (2).jpg" alt="Gallery Image 2">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src=".//img/gy (3).jpg" alt="Gallery Image 3">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (4).jpg" alt="Gallery Image 4">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (5).jpg" alt="Gallery Image 5">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (6).jpg" alt="Gallery Image 6">
      </div>
    </div>
  </div>
  <div class="container gallery-container">
    <div class="row">
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (1).jpg" alt="Gallery Image 1">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (2).jpg" alt="Gallery Image 2">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src=".//img/gy (3).jpg" alt="Gallery Image 3">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (4).jpg" alt="Gallery Image 4">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (5).jpg" alt="Gallery Image 5">
      </div>
      <div class="col-md-2 col-6 gallery-item">
        <img src="./img/gy (6).jpg" alt="Gallery Image 6">
      </div>
    </div>
  </div>
  <!-- Galery end -->


  <!-- Kontak saya  -->

  <div class="container contact-container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-form">
          <h2 class="mb-4">Contact Us</h2>
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <img src="./img/logo.png" class="img-fluid contact-image" alt="Company Image">
      </div>
    </div>
  </div>

  <!-- Kontak saya end -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>