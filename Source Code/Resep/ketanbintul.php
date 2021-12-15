<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ganti title nya dengan nama masakannya -->
    <title>Ketan Bintul</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="Sidebar/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    </style>
</head>
<body style="background-color: rgb(235, 235, 235);">

<?php 
	    session_start();
	    if($_SESSION['level']==""){
		    header("location:../Akun/login.php?pesan=gagal");
	    }
    ?>

   <!-- Sidebar --> 

    <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
      <a href="#" class="img logo rounded-circle mb-3" style="background-image: url(https://img.pikbest.com/png-images/qiantu/hand-drawn-noodle-restaurant-chef-chef-illustration_2720597.png!c1024wm0/compress/true/progressive/true/format/webp/fw/1024);"></a>
          <center><span><b><?php echo $_SESSION['nama'] ?></b></span></center>
          <ul class="list-unstyled components mb-5 mt-3">
            <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">List Makanan</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <!-- Di tag <li> dibawah gunakan class="active" sesuai pulau nya masing masing. Khusus Bali dan Nusa Tenggara gabungkan aja ke Jawa ya -->
              <!-- Contohnya seperti <li class="active"> diatas tag <a>Masakan Sumatera dan Jawa</a> -->
              <li class="active">
                <a href="cari1.php">Masakan Sumatera dan Jawa</a>
              </li>
              <li>
                <a href="cari2.php">Masakan Kalimantan dan Sulawesi</a>
              </li>
              <li>
                <a href="cari3.php">Masakan Maluku dan Papua</a>
              </li>
            </ul>
            </li>
            <li>
              <a href="../Profil/tentangkami.php">Tentang Kami</a>
            </li>
            <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Akun</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="../Akun/logout.php">Keluar</a>
              </li>
              </ul>
            </li>
            <li>
              <a class="disabled">Hubungi Kami</a>
            </li>
            <li>
              <a href="../Saran/saran.php">Saran dan Kritikan</a>
            </li>
          </ul>
      </div>
    </nav>

    <div id="content" class="p-4 p-md-5">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="../index.php">Halaman Utama</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../Profil/tentangkami.php">Tentang Kami</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link disabled" href="#">Hubungi</a>
              </li>
            </ul>
        </div>
      </nav>

    <!-- Copy Paste aja div yang di namamakanan.html masing masing dari sini sampai di tempat komentar yang kutandai -->

    <div class="container">
      <div class="row mb-4" style="text-align:center;">
          <h1 style="font-family: 'Lobster', cursive;">Ketan Bintul</h1>
          <br>
          <h3 style="font-family: 'Lobster', cursive;">RESEP MAKANAN DAERAH KHAS YANG BERASAL DARI PROVINSI BANTEN</h3>
      </div>

      <div class="image">
          <!-- Gambarnya diletak di folder sesuai dengan asal pulaunya. Ukurannya di resize menjadi 700 x 465 biar pas dengan templatenya jadi width sama height nya gausah diubah lagi -->
          <img src="Gambar/Jawa/ketanbintul.jpg" alt="Ketan Bintul" width="1150" height="auto" class="img-fluid">
      </div>        
    </div>
    <br>
        
    <!-- Isi Konten -->

    <section id="ingredients" class="ingredients-container document-section">
        <div class="row">
          <div class="col mt-2">
            <h2 class="text" style="font-family: 'Lobster', cursive; margin-bottom: 20px;">Bahan-bahan :</h2>
            <ul type="disc">
              <li><h5>250 gram ketan beras, rendam 2-3 jam/semalam </h5></li>
              <li><h5>125 ml santan kental (aku 1 sachet santan instan kara 65 ml + air matang 60 ml)</h5></li>
              <li><h5>1 lembar daun pandan</h5></li>
              <li><h5>1/2 buah kelapa setengah tua, parut memanjang (sisihkan sekitar 4-5 sdm untuk campuran di ketan)</h5></li>
            </ul>
            <h2 class="text" style="font-family: 'Lobster', cursive; margin-bottom: 20px;">Bahan-serundeng :</h2>
            <ul type="disc">
              <li><h5>3 butir bawang merah, haluskan</h5></li>
              <li><h5>2 siung bawang putih, haluskan</h5></li>
              <li><h5>3 buah cabai merah, haluskan</h5></li>
              <li><h5>2 buah cabai rawit merah, haluskan</h5></li>
              <li><h5>2 lembar daun jeruk</h5></li>
              <li><h5>1 batang serai, memarkan</h5></li>
              <li><h5>Secukupnya garam (aku pakai 1 sdm)</h5></li>
              <li><h5>Secukupnya gula merah, disisir halus</h5></li>
            </ul>
          </div>
          <div class="col mt-2">
            <h2 class="text" style="font-family: 'Lobster', cursive; margin-bottom: 20px;">Langkahnya :</h2>
            <ul type="circle">
            <li><h5>Cuci beras ketan sampai bersih, beri air. Rendam selama 2-3 jam atau semalaman, tiriskan. Lalu kukus selama 20 menit</h5></li>
            <li><h5>Ditempat terpisah masak santan, beri garam dan daun pandan. Aduk terus hingga matang, sisihkan (aku hanya sampai hangat saja, karena menggunakan santan instan)</h5></li>
            <li><h5>Angkat ketan yang sudah dikukus sebelumnya ke dalam wadah. Tuang campuran santan ke dalam ketan. Aduk hingga santan meresap ke dalam ketan. Diamkan selama 10 menit. Lalu kukus lagi selama 25 menit sampai matang (10 menit terakhir sebelum diangkat tambahkan 4-5 sdm kelapa parut).</h5></li>
            <li><h5>Campurkan kelapa parut dengan bumbu halus, batang serai dan daun jeruk. Lalu sangrai hingga kuning kecoklatan dan terasa ringan. Tambahkan garam dan gula merah</h5></li>
            <li><h5>Angkat ketan bila sudah matang. Tumbuk hingga halus</h5></li>
            <li><h5>Ambil 2-3 sdm ketan yang sudah ditumbuk, lalu bentuk bulat agak pipih</h5></li>
            <li><h5>Sajikan dengan taburan serundeng</h5></li>
            </ul>         
          </div>
        </div>    
    </section>
    <br>

    <!-- SAMPAI SINI copy pastenya ya guys -->

        <!-- Kolom Komentar -->

        <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">Tinggalkan Komentar</h3>
      </div>
      <div class="panel-body">
        <form method="POST" action="simpan_komentar.php">
          <input type="hidden" name="idresep"><div class="form-group">
            <label>Nama Anda : </label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Email Anda : </label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Isi Komentar : </label>
            <textarea class="form-control" name="isi"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="simpan" class="btn btn-primary" value="Simpan Komentar">
          </div>
        </form>
        <br><br>
      </div>
    </div>

    <!-- Tampilan Semua Komentar yg udah ditampung-->
    <?php
    include "../includes/koneksi.php";
    $result = mysqli_query($koneksi, "SELECT * FROM komentar");
    $komentar = [];
    while($row = mysqli_fetch_assoc($result)){
      $komentar[]= $row;
    }
    //var_dump($komentar);
    echo "<table class='table table-bordered'>";
    echo "<tr><th>Nama</th><th>Email</th><th>Isi Komentar</th><th>Tanggal</th></tr>";
     foreach ($komentar as $data) {
         echo "<tr>";
         echo "<td>$data[nama]";
         echo "<td>$data[email]";
         echo "<td>$data[komentar]";
         echo "<td>$data[tanggal]";
         echo "</tr>";
     }
    echo "</table>";
    ?>

    <!-- Login dan Sebagainya -->

    <br><br>
    <center><h3 style="font-family: 'Lobster', cursive;">Resep Lainnya :</h3></center>
    <div class="row">
      <div class="col">
          <div class="card-deck">
            <div class="card mb-4">
              <a href="keraktelor.php"><img src="Gambar/Homepage/keraktelor.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                  <h4 class="card-title" style="font-family: 'Lobster', cursive;">Kerak Telor</h4>
                  <p class="card-text">Siapa sih yang tidak tahu makanan khas Betawi ini</p>
                  <p class="card-text"><small class="text-muted">Diposting 2 Menit yang Lalu</small></p>
                  <a class="btn btn-success" href="keraktelor.php" role="button">Resepnya...</a>
              </div>
              </div>
              <div class="card mb-4">
                <a href="pendap.php"><img src="Gambar/Homepage/pendap.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                  <h4 class="card-title" style="font-family: 'Lobster', cursive;">Pendap</h4>
                  <p class="card-text">Makanan favorite masyarakat Bengkulu </p>
                  <p class="card-text"><small class="text-muted">Diposting 5 Hari yang Lalu</small></p>
                  <a class="btn btn-success" href="pendap.php" role="button">Resepnya...</a>
              </div>
              </div>
              <div class="card mb-4">
                <a href="papeda.php"><img src="Gambar/Homepage/papeda.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                  <h4 class="card-title" style="font-family: 'Lobster', cursive;">Papeda</h4>
                  <p class="card-text">Bagi para pecinta sagu tentu ini menjadi favorit</p>
                  <p class="card-text"><small class="text-muted">Diposting 1 Minggu yang Lalu</small></p>
                  <a class="btn btn-success" href="papeda.php" role="button">Resepnya...</a>
              </div>
              </div>
              </div>
            </div>
        </div>   
      </div>
    </div>
    </div>
    

    <!-- Footer -->

    <section style="background-color: #000000;">
        <div style="background-color: #ff9900;">
          <div class="container">
            <div class="row py-4 d-flex align-items-center">
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0" style="color: white;">
                <h6 class="mb-0">Ayo bergabung dengan media sosial kami</h6>
              </div>
              <div class="col-md-6 col-lg-7 text-center text-md-right">
                <a class="fb-ic">
                  <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>
                <a class="tw-ic">
                  <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                <a class="gplus-ic">
                  <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>
                <a class="li-ic">
                  <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>
                <a class="ins-ic">
                  <i class="fab fa-instagram white-text"> </i>
                </a>
              </div>      
            </div>      
          </div>
        </div>
        <div class="container text-center text-md-left mt-5" style="color: white;">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Tugas Akhir Kelompok 4</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>Kami dengan bangga mempersembahkan hasil dari kerja kami berupa web resep makanan. Mohon maaf jika ada kesalahan dalam penulisan dan kesalahan lainnya. Terima kasih</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Resep</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="cari.php">Makanan Tradisional</a>
              </p>
              <p>
                <a href="#!" class="disabled">Makanan Modern<br>( Dalam Pengerjaan )</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Link Singkat</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="../Akun/logout.php">Keluar</a>
              </p>
              <p>
                <a href="../Saran/saran.php">Kolom Saran</a>
              </p>
              <p>
                <a class="disabled">Menjadi Distributor Resep</a>
              </p>
              <p>
                <a class="disabled">Bantuan</a>
              </p>  
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase font-weight-bold">Kontak</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <i class="fas fa-home mr-3"></i> Medan, USU Fasilkom TI, Teknologi Informasi</p>
              <p>
                <i class="fas fa-envelope mr-3"></i> Kelompok4tubes@gmail.com</p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 62 812 3456 7890</p>
            </div>
          </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
          <a href="../index.php"> Kelompok 4 Tubes Pemrograman Web</a>
        </div>
    </section>

    <!-- Script -->

    <script src="Sidebar/js/jquery.min.js"></script>
    <script src="Sidebar/js/popper.js"></script>
    <script src="Sidebar/js/bootstrap.min.js"></script>
    <script src="Sidebar/js/main.js"></script>
    <script src="js/bootstrap.js"></script>
  
</body>
</html>