<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login</title>
</head>
<body>
    <h2>Latihan Logiin XII RPL SMKN 1 Sayung</h2>
    <br/>
    <?php
    if(isset($GET['pesan'])){
    if ($_GET['pesan']=="gagal"){
    echo "Login gagal! username dan password salah!";
    }else if ($_GET['pesan']== "Logout"){
        echo "Anda telah berhasil Logout";   
    }else if($_GET['pesan']== "belum_login"){
        echo "Anda harus login untuk mengakses halaman admin"; 
    }
  }
  ?>
  <br/>
  <br/>
  <form method="POST" action="cek_login.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukkan username"></td>
</tr>
<tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="Masukkan password"></td>
</tr>
<tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="LOGIN" ></td>
            <td><a href="daftaruser.php"> <input type="button" value="DAFTAR" name="daftar"></a></td>
</tr>
</table>
</form>
</body>
</html>