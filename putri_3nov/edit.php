<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_hewan WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);
$putri_3nov=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)< 1){
    die("data tidak ditemukan");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Form Edit</h1>
        <form action="proses_edit.php" method="POST">
        <form>
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $putri_3nov['id']?>" />
        <p>
        <label for = "nama_pemilik">Nama Pemilik: </label>
        <input type= "text" name="nama_pemilik" value="<?php echo $putri_3nov['nama_pemilik']?>" />
        </p>
        <p>
        <label for = "jenis_hewan"> Jenis Hewan:</label>
        <select name="jenis_hewan" value="<?php echo $putri_3nov['jenis_hewan']?>">
        <option value="kucing">kucing</option>
        <option value="anjing">anjing</option>
        <option value="ular">ular</option>
        </select>
        </p>
        <p>
        <label for = "keluhan">Keluhan: </label>
        <input type= "text" name="keluhan"value="<?php echo $putri_3nov['keluhan']?>"/>
        </p>
        <p>
        <input type="submit" value = "edit" name="edit">
        </p>
</body>
</html>
</body>
</html>