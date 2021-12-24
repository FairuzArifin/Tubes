<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="Style CSS/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="register">
        <img src="logo.jpg" alt="">
        <h1>Daftar</h1>

        <form method="POST" action="cek_register.php">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password1" id="password" required>
                <span>
                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                </span>
            </div>
            
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="password2" id="password" required>
                <span>
                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                </span>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required>
            </div>
            
            <div class="form-group">
                <label >E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div hidden class="form-group">
                <label for="">Level User</label>
                <input type="text" name="level" id="level" readonly value="anggota">
            </div>
            
            <button type="submit">Daftar</button><br><br>

            <div class="already">
                Sudah Punya Akun ?<a href="login.php">Login</a>
            </div>

        </form>
    </div>

    <?php 
	    if(isset($_GET['pesan'])){
		    if($_GET['pesan']=="ganda"){
			    echo "<div class='alert' style='margin-top:95px; margin-left:590px; position:absolute; color:red;'><h5>Username Sudah Digunakan !</h5></div>";
		    }  else if($_GET['pesan']=="beda"){
			    echo "<div class='alert' style='margin-top:95px; margin-left:580px; position:absolute; color:red;'><h5>Konfirmasi Password Berbeda !</h5></div>";
		    }
	    }
	?>

    <script src="Style CSS/navbar.js"></script>
</body>
</html>