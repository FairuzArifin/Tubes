<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Style CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="login">
        <img src="logo.jpg" alt="">
        <h1>Login</h1>

        <form method="POST" action="cek_login.php">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="password">
                <span>
                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                </span>
            </div>
            
            <div class="rememberme">
                <input type="checkbox" name="pengingat">
                <label>Ingat Saya</label>
            </div>

            <div class="forget" style="margin-top:15px">
                 <center><a href="lupa_password.html">Lupa Password ?</a></center>
            </div>

            <button type="submit" name="btnlogin">Login</button><br><br>

            <div class="already" style="margin-top:2px">
                Belum Punya Akun ? <a href="register.php">Buat Akun Baru</a>
            </div>

        </form>
    </div>

    <?php 
	    if(isset($_GET['pesan'])){
		    if($_GET['pesan']=="gagal"){
			    echo "<div class='alert' style='margin-top:170px; margin-left:590px; position:absolute; color:red;'><h5>Username tidak ditemukan !</h5></div>";
		    }  else if($_GET['pesan']=="curang"){
			    echo "<div class='alert' style='margin-top:170px; margin-left:610px; position:absolute; color:red;'><h5>Anda Belum Login !</h5></div>";
		    }
	    }
	?>

    <script src="Style CSS/navbar.js"></script>
</body>
</html>