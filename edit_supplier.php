<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
</head>
<body>
<?php
    include 'koneksi.php';
	$ambil=mysqli_query($database,"SELECT * FROM supplier_2020 WHERE id_supplier='$_GET[id]'");
	$result=mysqli_fetch_array($ambil);
?>
<div class="container col-sm-6" style="margin-top: 80px; margin-bottom : 80px;">
	<h2>Edit Supplier</h2><hr>
	<p>
		<a href="?p=supplier" class="btn btn-primary btn-sm"> List Data</a>
	</p>

	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>Nama Supplier</label>
			<input type="text" name="nama_supplier" class="form-control" value="<?php echo $result['nama_supplier'] ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" value="<?php echo $result['email'] ?>">
		</div>
		<div class="form-group">
			<label>No Telepon</label>
			<input type="number" name="notelp" class="form-control" value="<?php echo $result['notelp'] ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" rows="5" class="form-control"><?php echo $result['alamat'] ?></textarea>
		</div>
		<div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">update</button>
            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
        </div>
	</form>
	<?php
		if (isset($_POST['submit'])) {
            include 'koneksi.php';
			$simpan=mysqli_query($database,"UPDATE supplier_2020 SET
											nama_supplier = '$_POST[nama_supplier]',
                                            email = '$_POST[email]',
                                            notelp = '$_POST[notelp]',
                                            alamat = '$_POST[alamat]'
                                        WHERE id_supplier = '$_GET[id]'
									");
			if ($simpan) 
				echo "<script>window.location='index.php?p=supplier'</script>";
		}
	?>
</div>
</body>
</html>