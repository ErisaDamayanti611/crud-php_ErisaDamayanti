
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <?php 

      include 'All/navbar.php';
      ?>

</head>
<body>

    <div class="row col-8 border rounded mx-auto mt-5 p-2 shadow-lg">
        <div class="col-3">
            <img src="Again.jpg" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
            <div>
                <button class="mx-auto m-3 btn-sm btn btn-secondary">Edit</button>
                <button class="mx-auto m-3 btn-sm btn btn-danger text-white">Delete</button>
            </div>
        </div>
            <div class="col-9">
                <div class="h2 mb-2"> Profile Mahasiswa</div>
                <table class="table table-striped">
                    <tr><th colspan="2">Detail Mahasiswa :</th></tr>
                    <tr><th>Nama Lengkap</th><td>Erisa Damayanti</td></tr>
                    <tr><th>NIM</th><td>220905</td></tr>
                    <tr><th>Jurusan</th><td>Sistem Informasi</td></tr>
                    <tr><th>Jenis Kelamin</th><td>Perempuan</td></tr>
                    <tr><th>Email</th><td>damayantierisa2@gmail.com</td></tr>
                    <tr><th>No.Telepon</th><td>0856 9431 4502</td></tr>
                </table>
            </div>
        </div>
    </div>
  

     
</body>
<?php include 'layout/footer.php';
?>
</html>