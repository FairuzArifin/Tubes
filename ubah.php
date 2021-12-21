<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Akun</title>
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
            <li class="active">
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
            <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Postingan</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
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
        <h1 class="h3 mb-0 text-gray-800">Ubah Akun</h1>
    </div>

    <div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Update Akun</h6>
            </div>
            <div class="card-body" style="overflow-x:auto;">
                <?php
                include '../includes/koneksi.php';
                $id = $_POST['id'];
                $query = "SELECT * FROM akun WHERE id=$id ";
                $hasil = mysqli_query($koneksi,$query);
                foreach($hasil as $data){
                ?>
				
                <h4 class="card-title">Update</h4>
				        <form method="POST" class="my-login-validation"  novalidate="">
                <input hidden type="number" name="id" value="<?php echo $data['id']?>">
    				    <div class="form-group">
					    	<label for="username">Username</label>
				    		<input value="<?php echo $data['username']; ?>" id="username" type="text" class="form-control" name="username" required autofocus>
				  			<div class="invalid-feedback">
								Apa Username Anda ?
					  		</div>
				      	</div>
            
                <div class="form-group">
					    	<label for="password">Password</label>
			    			<input value="<?php echo $data['password']; ?>" id="password" type="password" class="form-control" name="password" required data-eye>
    						<div class="invalid-feedback">
								Isi Password !
					  		</div>
					      </div>

					<div class="form-group">
						<label for="name">Nama</label>
    					<input value="<?php echo $data['nama']; ?>" id="name" type="text" class="form-control" name="nama" required autofocus>
    						<div class="invalid-feedback">
								Siapa Nama Anda ?
							</div>
					</div>

					<div class="form-group">
						<label for="email">Alamat E-Mail</label>
						<input value="<?php echo $data['email']; ?>" id="email" type="email" class="form-control" name="email" required>
							<div class="invalid-feedback">
								Email Invalid
							</div>
					</div>
          <br>


					<div class="form-group m-0">
						<button name="btnUbah" type="submit" class="btn btn-primary btn-block">
							Update
						</button>
					</div>

					</form>
            <?php }?>
            <?php
              if(isset($_POST['btnUbah'])){
                $no = $_POST['id'];
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $nama = $_POST['nama'];
                $email = $_POST['email'];
              if ($koneksi){
                $sql = "UPDATE akun SET username='$user',password='$pass',nama='$nama',email='$email' WHERE id=$no";
                mysqli_query($koneksi,$sql);
                  echo "<p class='alert alert-success text-center'><b>Perubahan Akun Berhasil Disimpan. <a href='akun.php' class='btn btn-primary'>Kembali</a></b></p>";
              } elseif ($koneksi->connect_error) {
                echo "<p class='alert alert-danger text-center><b>Terjadi kesalahan: $error</b></p>";
              }       
            }?>
			</div>
                
                    

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