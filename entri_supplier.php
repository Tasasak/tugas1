<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
</head>
<body>
<div class="container col-sm-6" style="margin-top: 80px; margin-bottom : 80px;">
	<h2>Entri Supplier</h2><hr>
	<p>
		<a href="?p=supplier" class="btn btn-primary btn-sm"> List Data</a>
	</p>

	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>Nama Supplier</label>
			<input type="text" name="nama_supplier" class="form-control">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>No Telepon</label>
			<input type="number" name="notelp" class="form-control">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" rows="5" class="form-control"></textarea>
		</div>
		<div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
        </div>
	</form>
	<?php
		if (isset($_POST['submit'])) {
            include 'koneksi.php';
			$simpan=mysqli_query($database,"INSERT INTO supplier_2020 (nama_supplier,email,notelp,alamat) 
									VALUES(
											'$_POST[nama_supplier]','$_POST[email]','$_POST[notelp]','$_POST[alamat]')"
									);
			if ($simpan) 
				echo "<script>window.location='index.php?p=supplier'</script>";
		}
	?>
</div>
</body>
</html>