<?php
include("koneksi.php");

if(isset($_POST['kirim_data'])){
    $nama_pemilik=$_POST['nama_pemilik'];
    $jenis_hewan=$_POST['jenis_hewan'];
    $keluhan=$_POST['keluhan'];

    $sql = "INSERT INTO tb_hewan(nama_pemilik, jenis_hewan, keluhan) VALUES ('$nama_pemilik','$jenis_hewan',' $keluhan')";
    $query= mysqli_query($koneksi, $sql);
    }else{
        ('akses dilarang');
    }
?>