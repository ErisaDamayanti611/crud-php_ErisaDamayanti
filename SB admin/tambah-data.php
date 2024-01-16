<?php 

include 'layout/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<style>
			.button-container button {
			margin-right: 10px;
			margin-left : 10px;
		}

	</style>
</head>
<body>
	

<br>
<div class="container mt-1">
	<h4 class="text-center p-3">TAMBAH DATA MAHASISWA</h4>
	
	<form class="border shadow p-3 rounded" method="post" action="tambah_aksi.php" style="width: 50%; margin: auto;">
		<div class="mb-2">
			<label for="name" class="form-label">Nama</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama.." required>
		</div>
		<div class="mb-3">
			<label for="Nim" class="form-label">NIM</label>
			<input type="number" class="form-control" id="Nim" name="Nim" placeholder="Masukan NIM.." required>
		</div>
        <div class="mb-3">
			<label for="Prodi" class="form-label">Prodi</label>
			<input type="text" class="form-control" id="Prodi" name="Prodi" placeholder="Masukan Prodi.." required>
		</div>
		<div class="mb-3">
			<label for="no_hp" class="form-label">No.Telepon</label>
			<input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan No.Telepon.." required>
		</div>
		<div class="mb-3">
			<label for="alamat" class="form-label">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat.." required>
		</div>
		<div class="row">
		<div class="mb-3">
			<label for="agama" class="form-label">Agama</label>
			<select name="agama" id="agama" class="form-control" required>
			<option value="">--Pilih Agama--</option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Khatolik">Khatolik</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Konghucu">Konghucu</option>
			</select>
		</div>
	</div>
	<div class="mb-3">
			<label for="Jk" class="form-label">Jenis Kelamin</label>
			<select name="Jk" class="form-control" id="Jk" required>
			<option value="">--Pilih Jenis Kelamin--</option>
			<option value="laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			</select>
		</div>
        <button type="submit" name="simpan" class="btn btn-primary" style="float: right;">Simpan</button>
		<a href="index.php" class="btn btn-primary"  style="float: right;">Kembali</a>

	</form>
</div>
</body>
</html>

<?php 

include 'layout/footer.php';

?>