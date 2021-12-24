<?php

    session_start();
    include '../includes/koneksi.php';
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$username' AND PASSWORD='$password'");
    $sql = "SELECT * FROM AKUN WHERE username = '{$username}' and password = '{$password}'";
    $cek = mysqli_num_rows($login);
    $query = mysqli_query($koneksi, $sql);
 
    if($cek > 0){
	    $data = mysqli_fetch_assoc($login);

        while ($row = mysqli_fetch_array($query)){
			$user = $row['username'];
			$pass = $row['password'];
			$nama = $row['nama'];
			$email = $row['email'];
        }

	    if($data['level']=="admin"){
		    $_SESSION['username'] = $username;
		    $_SESSION['level'] = "admin";     
		    header("location:../admin/admin.php");
            $_SESSION['nama'] = $nama;
            $_SESSION['email'] = $email;
            
        } else if ($data['level']=="anggota"){
	        $_SESSION['username'] = $username;
	        $_SESSION['level'] = "anggota";
		    header("location:../index.php");
            $_SESSION['nama'] = $nama;
            $_SESSION['email'] = $email;
	    } else {
		    header("location:login.php?pesan=gagal");
    	}	
    } else {
	    header("location:login.php?pesan=gagal");
    }
 
?>