<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--css icon file-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

      <?php 

      include 'layout/header.php';
      ?>


 <!-- Menampilkan data mahasiswa dari database -->

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
	  
      <div class="container mt-3">
        <h1> Data Mahasiswa</h1>
          <hr></hr>

          <a href="tambah-data.php" class="btn btn-primary">Tambah Data</a>
        <?php 
          include 'koneksi.php';
          $no = 1;
          $data = mysqli_query($koneksi,"select * from mhsswa ");

              ?>

      <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
          <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>No.Telepon</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Jenis kelamin</th>
                <th>OPSI</th>
          </tr>
          </thead>

          <tbody>
            <?php
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['name']; ?></td>
                    <td><?php echo $d['Nim']; ?></td>
                    <td><?php echo $d['Prodi']; ?></td>
                    <td><?php echo $d['no_hp']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td><?php echo $d['Jk']; ?></td>
                    <td width="25%" class="text-center">
                    <a href="Detail_mahasiswa.php?id=<?php echo $d['id']; ?>" class="btn btn-secondary"><i class="fas fa-eye"></i> Detail</a>
                    <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn sm" onclick="return conrifm('Yakin akan dihapus.?');">
                    <i class="fas fa-trash-alt"></i> Hapus</a>
                  </td>
            </tr>
              <?php
              }
              ?>
          </tbody>
        </table>
      </div>
     
      <?php 

include 'layout/footer.php';

?>
     
