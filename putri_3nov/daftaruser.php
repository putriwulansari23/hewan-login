<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login</title>
</head>
<body>
    <h2>Daftar User Anda</h2>
</br>

<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Daftar Gagal! username dan password salah!";
    }else if($_GET['pesan'] == "daftar"){
        echo "Anda Telah Berhasil daftar";
    }else if($_GET['pesan'] == "belum_daftar"){
        echo "Anda Harus daftar terlebih dahulu";
    }
}
?>
<br/>
<br/>
<form action="proses_daftar.php" method="POST"> 
    <form>
    <table>
            <p>
                <label for="username">Username : </label>
                <input type="text" name="username" placeholder="Buat Username">
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="Buat Password">
            </p>
            <p>
                <label for="email">Email : </label>
                <input type="text" name="email" placeholder="Buat Username">
            </p>
            <p>
                <label for="umur">Umur : </label>
                <input type="number" name="umur" placeholder="Masukkan Umur Anda">
            </p>
            <p>
                <input type="submit" name="daftar" value="Daftar">
            </p>
        </table>

</form>
</center>
</body>
</html>