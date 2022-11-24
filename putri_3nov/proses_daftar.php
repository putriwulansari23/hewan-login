<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $umur=$_POST['umur'];

    $sql = "INSERT INTO tb_login (email, username, password, umur) VALUES ('$email', '$username', '$password', '$umur')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:login.php?status=sukses');
    }else{
        header('location:login.php?status=gagal');
    }
}
?>