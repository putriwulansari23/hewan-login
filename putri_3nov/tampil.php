<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pemeriksaan Hewan</title>
</head>
<body>
    <center>
    <br/>

<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
}
?>
<h4>Selamat Datang, <?php echo $_SESSION['username']; ?>! ANDA BERHASIL LOGIN-!!</h4>
 <br/>
 <br/>
    <h2>APLIKASI PEMERIKSAAN HEWAN DI R.S SUMBER WARAS</h2>
    <h2>DESA SUKAMAJU</h2>
    <form action="tampil.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    <table border="1">
        <tr>
        <th>Nama Pemilik</th>
        <th>Jenis Hewan</th>
        <th>Keluhan</th>
</tr>

<?php
include("koneksi.php");
if(isset($_GET['cari'])){
    $cari=$_GET['cari'];
    $sql="SELECT * FROM tb_hewan WHERE nama_pemilik LIKE '%" .$cari."%' ";
    $query=mysqli_query($koneksi, $sql);
}else{
    $sql='SELECT * FROM tb_hewan';
    $query=mysqli_query($koneksi, $sql);
}
while($putri_3nov=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$putri_3nov['nama_pemilik']."</td>";
    echo"<td>".$putri_3nov['jenis_hewan']."</td>";
    echo"<td>".$putri_3nov['keluhan']."</td>";
    echo"<td>";
    echo"<a href='edit.php?id=".$putri_3nov['id']."'>Edit</a> ";
    echo"<a href='hapus.php?id=".$putri_3nov['id']."'>Hapus</a> ";
    echo"</td>";
    echo"</tr>";
}

?>
</center>
</table>
<h4><a href="tambah.php"><input type="submit" name="tambah" value="tambah"/></h4></a>
</body>
</html>



