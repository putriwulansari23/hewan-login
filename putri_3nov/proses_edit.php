<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $nama_pemilik=$_POST['nama_pemilik'];
    $jenis_hewan=$_POST['jenis_hewan'];
    $keluhan=$_POST['keluhan'];

    $sql="UPDATE tb_hewan SET nama_pemilik='$nama_pemilik', jenis_hewan='$jenis_hewan', keluhan='$keluhan' WHERE id=$kode";
    $query= mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php');
    }else{
        die("gagal mengedit");
    }}
else{ 
        die("berhasil mengedit");

} 
?>