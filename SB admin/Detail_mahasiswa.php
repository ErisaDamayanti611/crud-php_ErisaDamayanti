<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px; 
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #343a40;
        }

        table {
            margin-top: 20px;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        .btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php 
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM mhsswa WHERE id='$id'");
$mahasiswa = mysqli_fetch_assoc($query);
?>

<div class="container mt-2" style="width: 50%; margin: auto;">
    <h1>Detail Mahasiswa</h1>
    <hr>

    <table class="table table-bordered mt-3">
        <tr>
            <th>Nama</th>
            <td><?php echo $mahasiswa['name']; ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?php echo $mahasiswa['Nim']; ?></td>
        </tr>
        <tr>
            <th>Prodi</th>
            <td><?php echo $mahasiswa['Prodi']; ?></td>
        </tr>
        <tr>
            <th>No. Telepon</th>
            <td><?php echo $mahasiswa['no_hp']; ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo $mahasiswa['alamat']; ?></td>
        </tr>
        <tr>
            <th>Agama</th>
            <td><?php echo $mahasiswa['agama']; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $mahasiswa['Jk']; ?></td>
        </tr>
    </table>

    <a href="index.php" class="btn btn-primary">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-xmF/J3NizG5U0iG3t5gBcev6ewXW0J6yGgo1fkysngfZDD8g6b6wwNXtUGk8gqFZ" crossorigin="anonymous"></script>

</body>
</html>
