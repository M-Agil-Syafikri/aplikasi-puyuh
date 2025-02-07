<?php
require "koneksi.php"; // Menghubungkan ke database
$mysqli = new mysqli($hostname, $username, $password, $dbname); 

if ($mysqli->connect_error) {
    die('Connection Error: ' . $mysqli->connect_error);
}

$stok_test = mysqli_query($mysqli, "SELECT * FROM stok");
$stok = [];
while ($row = mysqli_fetch_assoc($stok_test)) {
    $stok[] = $row;
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Informasi Peternakan Puyuh</title>
  </head>
  <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #099ae2">
      <div class="container">
        <a class="navbar-brand" href="#">Informasi Peternakan Puyuh</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="button" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pemeliharaan.php">Pemeliharaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Akhir Navbar -->

    <!-- Jumbotron -->

    <section class="jumbotron text-center">
      <img src="puyuh/logo.png" alt="Infomsi Peternakan Puyuh" width="200" />
      <h1 class="display-4">Informasi Peternakan Puyuh</h1>
      <p class="lead"></p>

    </section>

    <!-- Akhir Jumbotron -->

    <!-- Profile -->

    <section id="profile">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Pengertian Tentang Puyuh</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md">
            <h4><u></u></h4>
            <p>Burung Puyuh adalah hewan unggas yang memiliki ukuran badan kecil dan gemuk.</p> 
            <p>Berbeda dengan burung lainnya, Burung Puyuh tidak membuat sarang di atas </p>
            <p>pohon namun bersarang di permukaan tanah. Masyarakat Indonesia sudah tidak</p>
            <p>asing lagi mendengar burung puyuh.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir Profile -->

    <!-- Galeri -->

    <section id="galeri">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Hal-Hal Yang Di Perlukan Untuk Beternak Puyuh</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="puyuh/1.jpg" class="card-img-top" alt="Galeri 1">
              <div class="card-body">
                <p class="card-text">Sekitar 80% makanan burung puyuh adalah biji gandum. Sebagian besar makanan burung puyuh atau burung lainnya mengandung remah jagung kering, aneka jenis gandum, millet, milo, pecahan oat, popcorn, biji safflower, dan biji bunga matahari.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="puyuh/2.jpg" class="card-img-top" alt="Galeri 2">
              <div class="card-body">
                <p class="card-text">Sama dengan vitamin E pada sayuran dan buah-buahan, vitamin E pada burung puyuh dapat mencegah penuaan dini. Vitamin E pada burung puyuh juga dapat digunakan untuk regenerasi kulit. Puyuh mengandung fosfor dan kalsium dalam dagingnya.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="puyuh/5.jpg" class="card-img-top" alt="Galeri 3">
              <div class="card-body">
                <p class="card-text">Sistem litter (lantai sekam) dan sistem sangkar (batere). Ukuran kandang untuk 1 m2 diisi 90-100 ekor anak puyuh, selanjuntnya menjadi 60 ekor untuk umur 10 hari sampai lepas masa anakan. Terakhir menjadi 40 ekor/m2 sampai bertelur.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="puyuh/4.jpg" class="card-img-top" alt="Galeri 4">
              <div class="card-body">
                <p class="card-text">antibiotik adalah jenis obat yang berfungsi melawan infeksi bakteri. Selain sebagai perlawanan, manfaat antibiotik adalah untuk mencegah terjadinya infeksi bakteri pada kondisi tertentu.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="puyuh/6.jpg" class="card-img-top" alt="Galeri 5">
              <div class="card-body">
                <p class="card-text">Lampu pemanas ini akan terus dihidupkan sampai anak ayam berumur 6 hari untuk menjaga kehangatan kandang. Kondisi pemanas harus dipastikan berfungsi dengan baik pada suhu yang tepat.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="puyuh/3.jpg" class="card-img-top" alt="Galeri 6">
              <div class="card-body">
                <p class="card-text">Karton telur puyuh ini berguna untuk meletakkan telur puyuh, dan satu karton puyuh ini bisa menyimpan telur sebanyak 100 butir telur.</p>
              </div>
            </div>
          </div>
         
      
    </section>

    <!-- Akhir Galeri -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
  </body>
</html>
