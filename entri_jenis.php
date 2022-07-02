<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
</head>
<body>
<div class="container col-sm-6" style="margin-top: 80px; margin-bottom : 80px;">
	<h2>Entri Jenis Barang</h2><hr>
	<p>
		<a href="?p=jenis" class="btn btn-primary btn-sm"> List Data</a>
	</p>

	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>Jenis Barang</label>
			<input type="text" name="jenis_barang" class="form-control">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<textarea name="keterangan" rows="5" class="form-control"></textarea>
		</div>
		<div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
        </div>
	</form>
	<?php
		if (isset($_POST['submit'])) {
            include 'koneksi.php';
			$simpan=mysqli_query($database,"INSERT INTO jenis_2020 (jenis_barang,keterangan) 
									VALUES(
											'$_POST[jenis_barang]','$_POST[keterangan]')"
									);
			if ($simpan) 
				echo "<script>window.location='index.php?p=jenis'</script>";
		}
	?>
</div>
</body>
</html>