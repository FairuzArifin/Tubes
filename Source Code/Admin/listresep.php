<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Resep</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="../Sidebar/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    </style>
</head>
<body style="background-color: rgb(235, 235, 235);">

    <?php 
	    session_start();
	    if($_SESSION['level']=="anggota"){
		    header("location:../Akun/login.php?pesan=gagal");
	    } else if($_SESSION['level']==""){
		    header("location:../Akun/login.php?pesan=gagal");
        }
    ?>

   <!-- Sidebar --> 

    <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
          <a href="#" class="img logo rounded-circle mb-3" style="background-image: url(https://storage.googleapis.com/fastwork-static/4cdb5e84-df58-4096-94fd-e4ed4df6d28f.jpg);"></a>
          <center><span><b><?php echo $_SESSION['nama'] ?></b></span></center>
            <ul class="list-unstyled components mb-5 mt-3">
            <li>
              <a href="../index.php">Laman Resep</a>
            </li>
            <li>
              <a href="../Akun/logout.php">Keluar</a>
            </li>
            <li>
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Daftar Akun</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="akunadmin.php">Daftar Akun Admin</a>
              </li>
              <li>
                <a href="akunanggota.php">Daftar Akun Anggota</a>
              </li>
            </ul>
            </li>            
            <li class="active">
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Postingan</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="buatpostingan.php">Buat Postingan</a>
              </li>
              <li class="active">
                <a href="listresep.php">List Resep</a>
              </li>
              <li>
                <a href="lihatpostingan.php">Lihat Postingan</a>
              </li>
              </ul>
            </li>
            <li>
              <a href="feedback.php">Feedback</a>
            </li>
            <li>
              <a href="komentar.php">Komentar Resep</a>
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
                  <a class="nav-link" href="../index.php">Laman Resep</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="admin.php">Laman Admin</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link disabled" href="#">Hubungi</a>
              </li>
            </ul>
        </div>
      </nav>

    <!-- Judul dan Carousel -->

    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Resep</h1>
    </div>
    
    <div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Resep Terdaftar</h6>
                <h6><button style="margin-top:10px; background-color:black;"><a href="laporan-resep.php">Download Laporan PDF</a></button></h6>
            </div>
            <div class="card-body" style="overflow-x:auto;">
    <br>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th><center>No.</center></th>
            <th><center>Nama Resep</center></th>
        </tr>
        </thead>
        <?php

        include "../includes/koneksi.php";
        
        if (isset($_GET['halaman']) && $_GET['halaman'] != ""){
          $halaman = $_GET['halaman'];
        } else {
          $halaman = 1;
        }
        $limit = 50;
        if ($halaman > 1) {
          $offset = ($halaman * $limit) - $limit;
        } else $offset = 0;
        $sebelum = $halaman - 1;
        $sesudah = $halaman + 1;
        
        $sql="SELECT * FROM makanan ORDER BY id ASC";

        $result = mysqli_query($koneksi, $sql);
        $jlh_data = mysqli_num_rows($result);
        $jlh_halaman = ceil($jlh_data / $limit);
        $hal_akhir = $jlh_halaman;
        $query2 = "SELECT * FROM makanan ORDER BY id ASC LIMIT $offset,$limit";
        $result2 = mysqli_query($koneksi,$query2);

        $hasil=mysqli_query($koneksi,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($result2)) {
            $no++;
            ?>       
            <tr>
                <td><center><?php echo $data["id"];?></center></td>
                <td><center><a href="../Resep/<?php echo $data["link2"] ?>"><?php echo $data["makanan"]; ?></center></a></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    
    </table>
    </div>
    </div>
    <div class="row">
      <nav class="mx-auto">
        <ul class="pagination">
          <?php
          for ($i=1; $i<=$jlh_halaman; $i++){
            echo "<li class=page-item><a class=page-link href=listresep.php?halaman=$i>$i</a></li>";
          }
          ?>
        </ul>
      </nav>
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
                <a href="../Resep/cari.php">List Makanan Tradisional</a>
              </p>
              <p>
                <a href="#!" class="disabled">List Makanan Modern<br>( Dalam Pengerjaan )</a>
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

    <script src="../Sidebar/js/jquery.min.js"></script>
    <script src="../Sidebar/js/popper.js"></script>
    <script src="../Sidebar/js/bootstrap.min.js"></script>
    <script src="../Sidebar/js/main.js"></script>
    <script src="../js/bootstrap.js"></script>
  
</body>
</html>