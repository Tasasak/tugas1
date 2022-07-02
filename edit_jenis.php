<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
</head>
<body>
<?php
    include 'koneksi.php';
	$ambil=mysqli_query($database,"SELECT * FROM jenis_2020 WHERE id_jenis='$_GET[id]'");
	$result=mysqli_fetch_array($ambil);
?>
<div class="container col-sm-6" style="margin-top: 80px; margin-bottom : 80px;">
	<h2>Edit Jenis Barang</h2><hr>
	<p>
		<a href="?p=jenis" class="btn btn-primary btn-sm"> List Data</a>
	</p>

	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>Jenis Barang</label>
			<input type="text" name="jenis_barang" class="form-control" value="<?php echo $result['jenis_barang'] ?>">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<textarea name="keterangan" rows="5" class="form-control"><?php echo $result['keterangan'] ?></textarea>
		</div>
		<div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
        </div>
	</form>
	<?php
		if (isset($_POST['submit'])) {
            include 'koneksi.php';
			$simpan=mysqli_query($database,"UPDATE jenis_2020 SET
											jenis_barang = '$_POST[jenis_barang]',
                                            keterangan = '$_POST[keterangan]'
                                        WHERE id_jenis = '$_GET[id]'
									");
			if ($simpan) 
				echo "<script>window.location='index.php?p=jenis'</script>";
		}
	?>
</div>
</body>
</html>