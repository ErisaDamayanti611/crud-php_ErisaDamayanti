<?php 
// Koneksi ke database
include 'koneksi.php';
 
// Menangkap data yang dikirim dari form
$id     = $_POST['id'];
$name   = $_POST['name'];
$Nim    = $_POST['Nim'];
$Prodi  = $_POST['Prodi'];
$no_hp  = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$agama  = $_POST['agama'];
$Jk     = $_POST['Jk'];
 
// Melakukan pembaruan data ke dalam database
mysqli_query($koneksi, "UPDATE mhsswa SET name='$name', Nim='$Nim', Prodi='$Prodi', no_hp='$no_hp', alamat='$alamat', agama='$agama', Jk='$Jk' WHERE id='$id'");
 
// Mengalihkan halaman kembali ke index.php
header("location: index.php");

?>
