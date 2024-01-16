<?php
session_start();
include('koneksi.php'); // Sesuaikan dengan file koneksi Anda

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $selectedLevel = $_POST['selectedLevel'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND level = '$selectedLevel'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        // Otentikasi berhasil
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['level'] = $user['level'];

        // Redirect ke halaman sesuai level
        if ($selectedLevel == 'admin') {
            header("location: Dashboard.php");
        } elseif ($selectedLevel == 'dosen') {
            header("location: dosen_dashboard.php");
        } elseif ($selectedLevel == 'mahasiswa') {
            header("location: mahasiswa_dshbrd.php");
        }
    } else {
        // Otentikasi gagal
        header("location: Login.php?pesan=gagal");
    }
}
?>
