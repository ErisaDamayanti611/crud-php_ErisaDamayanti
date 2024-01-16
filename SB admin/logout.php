<?php 

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['level']);

session_destroy();
echo "<script>alert('Yakin akan keluar dari halaman?');document.location='Login.php'</script>";



?>
