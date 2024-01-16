<?php 

include 'layout/header.php';
?>

<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mhsswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		
?>

<div class="container mt-2">
	
	
	<h4 class="text-center p-3">EDIT DATA MAHASISWA</h4>
 <br>
	

		<form class="border shadow p-3 rounded" method="post" action="update.php" style="width: 50%; margin: auto;">

			<input type="hidden" name="id" value="<?= $d['id']; ?>">

		<div class="mb-2">
			<label for="name" class="form-label">Nama</label>
			<input type="text" class="form-control" id="name" name="name" value="<?php echo $d['name']; ?>">
		</div>
		<div class="mb-3">
			<label for="Nim" class="form-label">NIM</label>
			<input type="number" class="form-control" id="Nim" name="Nim" value="<?php echo $d['Nim']; ?>" >
		</div>
        <div class="mb-3">
			<label for="Prodi" class="form-label">Prodi</label>
			<input type="text" class="form-control" id="Prodi" name="Prodi" value="<?php echo $d['Prodi']; ?>" >
		</div>
		<div class="mb-3">
			<label for="no_hp" class="form-label">No.Telepon</label>
			<input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $d['no_hp']; ?>">
		</div>
		<div class="mb-3">
			<label for="alamat" class="form-label">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $d['alamat']; ?>">
		</div>
		<div class="row">
		<div class="mb-3">
			<label for="agama" class="form-label">Agama</label>
			<select name="agama" id="agama" class="form-control" required>
			<?php $agama =$mahasiswa['agama']; ?>
			<option value="Islam" <?=$d['agama']== 'Islam'? 'selected' : null ?>>Islam</option>
			<option value="Kristen" <?= $d['agama'] == 'Kristen'? 'selected' : null ?>>Kristen</option>
			<option value="Khatolik"<?= $d['agama'] == 'Khatolik'? 'selected' : null ?>>Khatolik</option>
			</select>
		</div>
	</div>
	<div class="mb-3">
			<label for="Jk" class="form-label">Jenis Kelamin</label>
			<select name="Jk" class="form-control" id="Jk" required>
			<option value="">--Pilih Jenis Kelamin--</option>
			<option value="laki-laki" <?= $d['Jk'] == 'laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
			<option value="Perempuan" <?= $d['Jk'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
			</select>
		</div>
		<button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
	</form>
 </div>


</body>
		<?php 
	}
	?>
 
</body>
</html>

<?php 

include 'layout/footer.php';

?>