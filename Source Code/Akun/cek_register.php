<?php
    require_once '../includes/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="Style CSS/registerphp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="register">
        <img src="logo.jpg" alt="">

        <?php
            
            $username = $_POST['username'];
            $password1 = $_POST['password1'];
	        $password2 = $_POST['password2'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $level = $_POST['level'];

            $cekdulu = "SELECT * FROM akun WHERE username='$_POST[username]'";
            $prosescek = mysqli_query($koneksi, $cekdulu);
	    
	    if (empty($_POST['password1']) || empty($_POST['password2'])) {
        	echo "<script>alert('Password Kosong.');history.go(-1) </script>";    
    	    } else if (($_POST['password1']) != ($_POST['password2'])) {
                header("location:register.php?pesan=beda");    
    	    }
    
            if (mysqli_num_rows($prosescek)>0) { 
                header("location:register.php?pesan=ganda");
            }
            else { 
    			$sql = "INSERT INTO akun (username,password,nama,email,level) VALUES ('$username', '$password1', '$nama','$email','$level')";          			                
            if($koneksi->query($sql)===TRUE){
				echo "<h1 style='margin-top:30px; color:green; text-align:center;'>Registrasi Akun Anda Berhasil</h1>";
			} else {
				echo "Terjadi kesalahan: " .$sql."<br/>".$koneksi->error;
			}
            }
            $koneksi->close();

	    ?>
        
        <h4>Klik disini untuk login</h4>
        <button type="submit"><a href="login.php">Login</a></button><br><br>

        </form>
    </div>

    <script src="Style CSS/navbar.js"></script>
</body>
</html>