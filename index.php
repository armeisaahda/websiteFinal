<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--CDN CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Armeisa - PilihanBeasiswa</title>

  <style>
    /* Custom CSS for the header */
    header {
      background-image: url('image/bghome.jpg');
      background-size: cover;
      background-position: center;
      height: 80vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center;
      margin-bottom: 30px;
    }

    header h1 {
      font-size: 3em;
    }

    header p {
      font-size: 1.5em;
    }

    .card {
      border: none;
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
    }
  </style>
</head>

<body>

  <!--nav section start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
    <div class="container">
      <a class="navbar-brand font-weight-bold text-white" href="#">Beasiswa Pintar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item" style="margin-left: 40px;">
            <a class="nav-link active text-white" aria-current="page" href="index.php
            ">Pilihan Beasiswa</a>
          </li>
          <li class="nav-item" style="margin-left: 40px;">
            <a class="nav-link text-white" href="daftar.php">Daftar</a>
          </li>
          <li class="nav-item" style="margin-left: 40px;">
            <a class="nav-link text-white" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--nav section end-->

  <!-- Header Section first-->
  <header>
    <h1>Welcome to Beasiswa Pintar</h1>
    <p>Discover Opportunities for a Brighter Future</p>
  </header>
  <!-- Header Section end-->

  <!-- card first -->
  <div class="container text-center">
    <div class="row align-items-center">

      <!--beasiswa akademik first card-->
      <div class="col">
        <div class="card">
          <img src="image\book.png" class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h3 class="card-title">Beasiswa Akademik</h3>
            <br>
            <p class="card-text">Dukungan finansial untuk para mahasiswa berprestasi yang bercita-cita tinggi. Beasiswa
              ini dirancang untuk mewujudkan potensi mereka dalam mencapai prestasi akademik luar biasa.</p>
            <br>
            <a href="daftar.php" class="btn btn-primary">DAFTAR</a>
          </div>
        </div>
      </div>
      <!--beasiswa akademik end card-->

      <!--beasiswa non akademik first card-->
      <div class="col">
        <div class="card">
          <img src="image\nonakademik.png" class="card-img-top" alt="Card Image">
          <div class="card-body">
            <h3 class="card-title">Beasiswa Non Akademik</h3>
            <br>
            <p class="card-text">Diberikan kepada individu yang menunjukkan bakat dan keahlian luar biasa dalam seni,
              musik, tari, desain, atau bidang kreatif lainnya. Kami mencari calon yang memiliki potensi untuk membuat
              dampak positif melalui bakat kreatif mereka.</p>
            <br>
            <a href="daftar.php" class="btn btn-primary">DAFTAR</a>
          </div>
        </div>
      </div>
      <!--beasiswa akademik last card-->

    </div>
  </div>
  <!-- card end -->

  <!--CDN JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>