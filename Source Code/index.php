<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubes</title>
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
		    header("location:Akun/login.php?pesan=curang");
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
            <li>
                <a href="Resep/cari1.php">Masakan Sumatera dan Jawa</a>
              </li>
              <li>
                <a href="Resep/cari2.php">Masakan Kalimantan dan Sulawesi</a>
              </li>
              <li>
                <a href="Resep/cari3.php">Masakan Maluku dan Papua</a>
              </li>
            </ul>
            </li>
            <li>
              <a href="Profil/tentangkami.php">Tentang Kami</a>
            </li>
            <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Akun</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="Akun/logout.php">Keluar</a>
              </li>
              </ul>
            </li>
            <li>
              <a href="#pageTubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Postingan</a>
            <ul class="collapse list-unstyled" id="pageTubmenu">
              <li>
                <a href="Posting/lihatpostingan.php">Resep Dari Anggota Lainnya</a>
              </li>
              <li>
                <a href="Posting/buatpostingan.php">Berbagi Resep Anda Disini</a>
              </li>
            </ul>
            </li>
            <li>
              <a href="Saran/saran.php">Saran dan Kritikan</a>
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
                  <a class="nav-link" href="index.php">Halaman Utama</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="Profil/tentangkami.php">Tentang Kami</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link disabled" href="#">Hubungi</a>
              </li>
            </ul>
        </div>
      </nav>

    <!-- Judul dan Carousel -->

    <div class="container">
      <div class="row mb-4" style="text-align:center;">
          <h1 style="font-family: 'Lobster', cursive;">RESEP MASAKAN</h1>
          <h4 style="font-family: 'Lobster', cursive;">Gak makan, gak hidup. Yuk pelajari resep resep makanan tradisional di sini</h4>
      </div>

      <div id="demo" class="carousel slide d-none d-sm-block" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="Resep/mieaceh.php"><img src="Gambar/mieaceh.jpg" alt="Mie Aceh" width="1150" height="auto" class="img-fluid" style="filter: blur(3px);"></a>
              <div class="carousel-caption">
              <a href="Resep/mieaceh.php"><h1 style="color: rgb(255, 255, 255); font-family: 'Lobster', cursive;"><b>Mie Aceh</b></h1></a>
                <p style="font-size: medium;">Mie khas Aceh yang terkenal ata bumbunya yang sedap</p>
              </div>
            </div>
            <div class="carousel-item">
            <a href="Resep/pempekpalembang.php"><img src="Gambar/pempek.jpg" alt="Pempek Palembang" width="1150" height="auto" class="img-fluid" style="filter: blur(3px);"></a>
              <div class="carousel-caption">
              <a href="Resep/pempekpalembang.php"><h1 style="color: rgb(255, 255, 255); font-family: 'Lobster', cursive;"><b>Pempek Palembang</b></h1></a>
                <p style="font-size: medium;">Makanan legendaris khas Sumatera Selatan</p>
              </div>
            </div>
            <div class="carousel-item">
            <a href="Resep/sotomedan.php"><img src="Gambar/soto.jpg" alt="Soto Medan" width="1150" height="auto" class="img-fluid" style="filter: blur(3px);"></a>
              <div class="carousel-caption">
              <a href="Resep/sotomedan.php"><h1 style="color: rgb(255, 255, 255); font-family: 'Lobster', cursive;"><b>Soto Medan</b></h1></a>
                <p style="font-size: medium;">Berbeda dari soto pada umumunya</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
    </div>
    <div class="row mt-3">
      <form action="Resep/cari.php">
          <input class="search" type="text" placeholder="Cari Resep yang Kamu Cari Disini" required>	
          <a href="Resep/cari.php"><input class="button" type="button" value="Cari"></a>
      </form>
    </div>
        
    <!-- Isi Konten -->

    <div class="row">
        <div class="col">
            <div class="card-columns">
              <div class="card mb-4">
                <a href="Resep/keraktelor.php"><img src="Gambar/keraktelor.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Lobster', cursive;">Kerak Telor</h4>
                    <p class="card-text">Siapa sih yang tidak tahu makanan khas Betawi ini</p>
                    <p class="card-text"><small class="text-muted">Diposting 2 Menit yang Lalu</small></p>
                    <a class="btn btn-success" href="Resep/keraktelor.php" role="button">Resepnya...</a>
                </div>
                </div>
              <div class="card mb-4 d-none d-sm-block">
                <a href="Resep/supkonro.php"><img src="Gambar/supkonro.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Lobster', cursive;">Sup Konro</h4>
                    <p class="card-text">Sup iga sapi khas Indonesia</p>
                    <p class="card-text"><small class="text-muted">Diposting 2 Hari yang Lalu</small></p>
                    <a class="btn btn-success" href="Resep/supkonro.php" role="button">Resepnya...</a>
                </div>
                </div>
                <div class="card mb-2">
                  <a href="Resep/ikanbakarmanokwari.php"><img src="Gambar/ikanbakarmanokwari.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                      <h4 class="card-title" style="font-family: 'Lobster', cursive;">Ikan Bakar Manokwari</h4>
                      <p class="card-text">Berbahan dasar ikan yang memiliki bumbu khas Papua.</p>
                      <p class="card-text"><small class="text-muted">Diposting 6 Hari yang Lalu</small></p>
                      <a class="btn btn-success" href="Resep/ikanbakarmanokwari.php" role="button">Resepnya...</a>
                  </div>
                  </div>
                <div class="card mb-4 d-none d-sm-block">
                  <a href="Resep/bebekbetutu.php"><img src="Gambar/bebekbetutu.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                      <h4 class="card-title" style="font-family: 'Lobster', cursive;">Bebek Betutu</h4>
                      <p class="card-text">Gurihnya nampol</p>
                      <p class="card-text"><small class="text-muted">Diposting 5 Menit yang Lalu</small></p>
                      <a class="btn btn-success" href="Resep/bebekbetutu.php" role="button">Resepnya...</a>
                  </div>
                  </div>
                <div class="card mb-4">
                  <a href="Resep/gudegsolo.php"><img src="Gambar/gudegsolo.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Lobster', cursive;">Gudeg Solo</h4>
                    <p class="card-text">Salah satu menu makanan daerah yang cukup populer di kota Solo</p>
                    <p class="card-text"><small class="text-muted">Diposting 5 Hari yang Lalu</small></p>
                    <a class="btn btn-success" href="Resep/gudegsolo.php" role="button">Resepnya...</a>
                </div>
                </div>
                <div class="card mb-2">
                  <a href="Resep/papeda.php"><img src="Gambar/papeda.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Lobster', cursive;">Papeda</h4>
                    <p class="card-text">Bagi para pecinta sagu tentu ini menjadi favorit</p>
                    <p class="card-text"><small class="text-muted">Diposting 1 Minggu yang Lalu</small></p>
                    <a class="btn btn-success" href="Resep/papeda.php" role="button">Resepnya...</a>
                </div>
                </div>
                <div class="card mb-4 d-none d-sm-block">
                  <a href="Resep/angeunlada.php"><img src="Gambar/angeunladabanten.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Lobster', cursive;">Angeun Lada</h4>
                    <p class="card-text">Makanan khas Banten ini menjadi favorit para wisatawan</p>
                    <p class="card-text"><small class="text-muted">Diposting 5 Jam yang Lalu</small></p>
                    <a class="btn btn-success" href="Resep/angeunlada.php" role="button">Resepnya...</a>
                </div>
                </div>
                <div class="card mb-4">
                  <a href="Resep/pendap.php"><img src="Gambar/pendap.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Lobster', cursive;">Pendap</h4>
                    <p class="card-text">Makanan favorite masyarakat Bengkulu </p>
                    <p class="card-text"><small class="text-muted">Diposting 5 Hari yang Lalu</small></p>
                    <a class="btn btn-success" href="Resep/pendap.php" role="button">Resepnya...</a>
                </div>
                </div>
                <div class="card mb-2">
                  <a href="Resep/bikaambon.php"><img src="Gambar/bikaambon.jpg" class="card-img-top" alt="..."></a>
                  <div class="card-body">
                      <h4 class="card-title" style="font-family: 'Lobster', cursive;">Bika Ambon</h4>
                      <p class="card-text">Bukan dari Ambon loh</p>
                      <p class="card-text"><small class="text-muted">Diposting 1 Minggu Lalu</small></p>
                      <a class="btn btn-success" href="Resep/bikaambon.php" role="button">Resepnya...</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <!-- Login dan Sebagainya -->

    <div class="component-wrapper section">
      <div class="container">
      <center><img src="Gambar/logo.jpg" alt="Situs Kelompok 4" width="30%" height="auto"></center>
      <p style="text-align: center;">&nbsp;</p>
      <h2 style="text-align: center;"><b>Daftar sekarang dan jelajahi dunia penuh cita rasa!</b></h2>
      <br>
      <p style="text-align: center; font-family: 'Lobster', cursive; font-size: large;">Apa jenis masakan favorit kalian ? Kami siap memberi referensi terbaik!</p>
      <br>
      <br>
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
                <a href="Resep/cari.php">Makanan Tradisional</a>
              </p>
              <p>
                <a href="#!" class="disabled">Makanan Modern<br>( Dalam Pengerjaan )</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Link Singkat</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="Akun/logout.php">Keluar</a>
              </p>
              <p>
                <a href="Saran/saran.php">Kolom Saran</a>
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
          <?php
          if($_SESSION['level']=="admin"){
            echo "<a href='admin/admin.php'>Kelompok 4 Tubes Pemrograman Web</a>";
          } else {
          echo "<a href='index.php'>Kelompok 4 Tubes Pemrograman Web</a>";
          }
          ?>
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