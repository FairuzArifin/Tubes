<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ganti title nya dengan nama masakannya -->
    <title>Saran dan Kritikan</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="Sidebar/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    </style>
    <style>
      body {
        font-family: 'Lato', sans-serif
      }

      h1 {
        margin-bottom: 40px
      }

      label {
        color: #333
      }

      .btn-send {
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        width: 80%;
        margin-left: 3px
      }

      .help-block.with-errors {
        color: #ff5050;
        margin-top: 5px
      }

      .card {
        margin-left: 10px;
        margin-right: 10px
      }

    </style>
</head>
<body style="background-color: rgb(235, 235, 235);">

    <?php 
	    session_start();
	    if($_SESSION['level']==""){
		    header("location:login/login.php?pesan=curang");
	    }
    ?>

   <!-- Sidebar --> 

   <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
      <a href="#" class="img logo rounded-circle mb-3" style="background-image: url(https://img.pikbest.com/png-images/qiantu/hand-drawn-noodle-restaurant-chef-chef-illustration_2720597.png!c1024wm0/compress/true/progressive/true/format/webp/fw/1024);"></a>
          <center><span><b><?php echo $_SESSION['nama'] ?></b></span></center>
          <ul class="list-unstyled components mb-5 mt-3">
            <li>
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">List Makanan</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="../Resep/cari1.php">Masakan Sumatera dan Jawa</a>
              </li>
              <li>
                <a href="../Resep/cari2.php">Masakan Kalimantan dan Sulawesi</a>
              </li>
              <li>
                <a href="../Resep/cari3.php">Masakan Maluku dan Papua</a>
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
              <a href="#pageTubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Postingan</a>
            <ul class="collapse list-unstyled" id="pageTubmenu">
              <li>
                <a href="../Posting/lihatpostingan.php">Resep Dari Anggota Lainnya</a>
              </li>
              <li>
                <a href="../Posting/buatpostingan.php">Berbagi Resep Anda Disini</a>
              </li>
            </ul>
            </li>
            <li class="active">
              <a href="saran.php">Saran dan Kritikan</a>
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

    <!-- Form Saran -->

    <div class="container"> <div class=" text-center mt-5 ">
        <h1>Saran Dan Kritikan</h1>
        <h5>Dikarenakan web ini masih dalam pengembangan, kami selaku pengurus dari situs ini mengharapkan partisipasi anda untuk memberikan saran dan kritikan mengenai situs resep makanan yang telah kami buat. Hal ini bertujuan untuk meningkatkan kualitas web kami kedepannya. Atas waktunya kami ucapkan terima kasih buat</h5><br>
    </div>
    <div class="row ">
        <div class="col mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" method="POST" action="cek_saran.php">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_firstname">Nama Depan *</label> <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Masukkan Nama Depan Anda *" required="required" data-error="Nama Depan Tidak Boleh Kosong" > </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Nama Belakang *</label> <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Masukkan Nama Belakang Anda *" required="required" data-error="Nama Belakang Tidak Boleh Kosong"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Masukkan Email Anda *" required="required" data-error="Email Tidak Valid"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Saran Dan Kritikan *</label> <textarea id="form_message" name="saran" class="form-control" placeholder="Tulis Saran dan Kritikan Anda Disini *" rows="4" required="required" data-error="Harap Diisi Saran dan Kritikannya"></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Kirim" > </div>
                                </div>
                            </div>
                        </form>
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
                <a href="../Resep/cari.php">Makanan Tradisional</a>
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
                <a href="saran.php">Kolom Saran</a>
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
          <a href="../index.html"> Kelompok 4 Tubes Pemrograman Web</a>
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