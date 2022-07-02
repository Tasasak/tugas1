<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
</head>
<body>
<div class="container col-sm-6" style="margin-top: 80px; margin-bottom : 80px;">
	<h2>Entri Barang</h2><hr>
	<p>
		<a href="?p=order" class="btn btn-primary btn-sm"> List Data</a>
	</p>

	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>Kode Barang</label>
			<input type="text" name="kode_barang" class="form-control">
		</div>
		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" class="form-control">
		</div>
        <div class="form-group">
			<label>Nama Supplier</label>
			<select name="id_supplier" class="form-control">
                <option disabled>-- Nama Supplier --</option>
                <?php
                    include 'koneksi.php';
					$q=mysqli_query($database,"SELECT * FROM supplier_2020 order by id_supplier DESC");
					while ($data=mysqli_fetch_array($q)) {
						echo "<option value=$data[id_supplier]>$data[nama_supplier]</option>";
					}
                ?>
            </select>
		</div>
        <div class="form-group">
			<label>Satuan</label>
			<select name="satuan" class="form-control">
                <option disabled>-- Satuan --</option>
                <option value="Kg">Kilogram</option>
                <option value="Buah">Buah</option>
                <option value="Helai">Helai</option>
            </select>
		</div>
        <div class="form-group">
			<label>Jenis Barang</label>
			<select name="id_jenis" class="form-control">
				<option disabled>-- Jenis Barang --</option>
				<?php
					include 'koneksi.php';
					$q=mysqli_query($database,"SELECT * FROM jenis_2020 order by id_jenis DESC");
					while ($data=mysqli_fetch_array($q)) {
						echo "<option value=$data[id_jenis]>$data[jenis_barang]</option>";
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input type="number" name="harga" class="form-control">
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="number" name="stok" class="form-control">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<textarea name="keterangan" class="form-control" rows="5"></textarea>
		</div>
		<div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
        </div>
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$simpan=mysqli_query($database,"INSERT INTO barang_2020 (kode_barang,nama_barang,id_supplier,satuan,id_jenis,harga,stok,ket) 
									VALUES(
											'$_POST[kode_barang]','$_POST[nama_barang]','$_POST[id_supplier]',
											'$_POST[satuan]','$_POST[id_jenis]','$_POST[harga]','$_POST[stok]',
											'$_POST[ket]')"
									);
			if ($simpan) 
				echo "<script>window.location='index.php?p=order'</script>";
		}
	?>
</div>
</body>
</html>