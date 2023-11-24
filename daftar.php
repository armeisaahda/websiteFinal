<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CDN CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Armeisa - Daftar</title>
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
            <a class="nav-link active text-white" aria-current="page" href="index.php">Pilihan Beasiswa</a>
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

  <!--jumbotron first-->
  <div class="jumbotron">
    <div class="container">
      <br><br><br>
      <h1 class="display-4">AYO PILIH BEASISWA <br> YANG SESUAI UNTUKMU!</h1>
      <p class="lead">Pastikan kamu sudah mengetahui berbagai jenis beasiswa yang disediakan oleh "Beasiswa Pintar".</p>
      <hr class="my-4">
      <p>Sudah siap? Ayo daftarkan dirimu pada formulir berikut</p>
    </div>
  </div>
  <br><br><br>
  <!--jumbotron end-->

  <!--form first-->
  <div class="container">
    <h1>Formulir Pendaftaran Beasiswa</h1>
    <br><br>
    <form id="registrationForm" method="post" action="upload.php" enctype="multipart/form-data">

      <!--input nama-->
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" id="inputNama" name="nama">
      </div>

      <!--input email-->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email">
      </div>

      <!--input no hp-->
      <div class="mb-3">
        <label class="form-label">No Handphone</label>
        <input type="tel" class="form-control" id="inputnohp" name="nohp" pattern="[0-9]*">
      </div>

      <!--input semester-->
      <div class="mb-3">
        <label class="form-label">Semester</label>
        <select class="form-select" id="semester" name="semester">
          <option value="" selected> Pilih Semester </option>
          <option value="1"> 1 </option>
          <option value="2"> 2 </option>
          <option value="3"> 3 </option>
          <option value="4"> 4 </option>
          <option value="5"> 5 </option>
          <option value="6"> 6 </option>
          <option value="7"> 7 </option>
          <option value="8"> 8 </option>
        </select>
      </div>

      <!--input ipk-->
      <div class="mb-3">
        <label class="form-label">IPK</label>
        <input type="number" class="form-control" id="inputipk" name="ipk" step="0.01" inputmode="decimal">
      </div>

      <!--input pilih beasiswa-->
      <div class="mb-3">
        <label class="form-label">Beasiswa</label>
        <select class="form-select" id="beasiswa" name="beasiswa">
          <option value="" selected> Pilih Beasiswa </option>
          <option value="Beasiswa Akademik">1. Beasiswa Akademik</option>
          <option value="Beasiswa Non Akademik">2. Beasiswa Non Akademik</option>
        </select>
      </div>
      <br>

      <!--upload berkas-->
      <div class="mb-3">
        <label class="form-label">Upload Berkas Syarat</label>
        <input type="file" class="form-control" id="berkas" name="berkas" required>
        <div class="invalid-feedback">Example invalid form file feedback</div>
      </div>

      <!--button-->
      <br>
      <button type="submit" name="submit" id="submit" class="btn btn-primary"disabled>Daftar</button>
      <button type="reset" class="btn btn-danger">Batal</button>
      <br>
    </form>
  </div>
  <!--form end-->

  <!--CDN JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Menangkap elemen-elemen yang akan diubah statusnya
    var ipkInput = document.getElementById('inputipk');
    var beasiswaSelect = document.getElementById('beasiswa');
    var berkasInput = document.getElementById('berkas');
    var submitButton = document.getElementById('submit');

    // Menonaktifkan button "Daftar"
    submitButton.disabled =true;

    // Mendengarkan perubahan pada input IPK
    ipkInput.addEventListener('change', function () {
      // Mendapatkan nilai IPK
      var ipkValue = parseFloat(ipkInput.value);

      // Nonaktifkan atau aktifkan elemen berdasarkan kondisi
      if (ipkValue < 3) {
        beasiswaSelect.disabled = true;
        berkasInput.disabled = true;
        submitButton.disabled = true;
      } else {
        beasiswaSelect.disabled = false;
        berkasInput.disabled = false;
        submitButton.disabled = false;
      }
    });
  });
</script>

</html>
