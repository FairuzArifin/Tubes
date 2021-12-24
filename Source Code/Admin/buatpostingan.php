<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan</title>
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
    <?php
        include '../includes/koneksi.php';
        $blogs = mysqli_query($koneksi, "SELECT * FROM posting ORDER BY id DESC");
        if(isset($_POST['submit']))
        {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $resep = $_POST['resep'];
        if( trim(!empty($judul)) && trim(!empty($resep)) )
        {
            mysqli_query($koneksi, "INSERT INTO posting VALUES('','$judul', '$penulis', '$resep')");
            header("location:buatpostingan.php?sukses");
        }
        else
        {
            header("location:buatpostingan.php?error");
        }
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
              <li class="active">
                <a href="buatpostingan.php">Buat Postingan</a>
              </li>
              <li>
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
        <h1 class="h3 mb-0 text-gray-800">Buat Postingan</h1>
    </div>
    <div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Posting dengan CKEditor</h6>
            </div>
        <div class="card-body" style="overflow-x:auto;">
        <h2 align="center"><font color="orange" face="arial">Posting Resep Kamu Disini</font></h2>
        <br>
	    <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	    <link rel="stylesheet" href="style.css"><br>
            <form action="" method="POST">
		        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	            <tr>
                    <td><center><input type="text" name="judul" placeholder="Judul" class="in"></center><br></td>
				</tr>
				<tr>
				    <td><center><input type="text" name="penulis" class="in" readonly value="<?php echo $_SESSION['nama'] ?>"></center><br></td>
				</tr>
                <tr>
		    		<td><textarea class="ckeditor" id="ckedtor" name="resep"></textarea></td>
    	        </tr>
	            <tr>
	    			<td>&nbsp;</td>
		    	</tr>
		        <tr>
	    		    <td><input type="submit" class="submit" name="submit" value="submit" /></td>
    			</tr>
		        </table>
	        </form>
            
            <?php if(isset($_GET["error"])){ ?>
    	    <div id="error" class="wow swing">
        	<h1>Jangan Kosong !!</h1>
	        </div>
            <?php }else if(isset($_GET["sukses"])){?>
            <div id="sukses" class="wow swing">
	        <h1>Sukses Di buat</h1>
	        </div>		
            <?php } ?>
            
            <br>
            <center><button class="btn btn-primary"><a href="lihatpostingan.php" style="color:black">Hasil Postingan</a></button></center>
				
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
    
    <!-- CKEditor JavaScript -->
    <script src=”https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js”></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
  
</body>
</html>