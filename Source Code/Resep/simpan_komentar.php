
<?php

require_once 'includes/koneksi.php';

?>

<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi =$_POST['isi'];
$tanggal = date("Y-m-d");

$sql = "INSERT INTO komentar (nama, email, komentar, tanggal)VALUES('$nama', '$email', '$isi', '$tanggal')";
if($koneksi->query($sql)===TRUE){  
    echo "<script>history.go(-1) </script> "; 
} else {
    echo "Terjadi kesalahan:". $sql."<br/>".$koneksi->error;
}
$koneksi->close();

?>