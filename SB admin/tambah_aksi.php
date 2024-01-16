<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$name   = $_POST['name'];
$Nim    = $_POST['Nim'];
$Prodi  = $_POST['Prodi'];
$no_hp  = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$agama  = $_POST['agama'];
$Jk = $_POST['Jk'];
 
 
// menginput data ke database
mysqli_query($koneksi,"insert into mhsswa values('','$name','$Nim','$Prodi','$no_hp','$alamat','$agama','$Jk')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>