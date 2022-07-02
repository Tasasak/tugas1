<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
</head>
<body>
<?php
    include 'koneksi.php';
	$ambil=mysqli_query($database,"SELECT * FROM barang_2020 WHERE id='$_GET[id]'");
	$result=mysqli_fetch_array($ambil);
?>
<div class="container col-sm-6" style="margin-top: 80px; margin-bottom : 80px;">
	<h2>Edit Barang</h2><hr>
	<p>
		<a href="?p=order" class="btn btn-primary btn-sm"> List Data</a>
	</p>

	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>Kode Barang</label>
			<input type="text" name="kode_barang" class="form-control" value="<?php echo $result['kode_barang'] ?>">
		</div>
		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_barang" class="form-control" value="<?php echo $result['nama_barang'] ?>">
		</div>
        <div class="form-group">
			<label>Nama Supplier</label>
			<select name="supplier" class="form-control">
                <option disabled>-- Nama Supplier --</option>
                <?php
                    include 'koneksi.php';
					$q=mysqli_query($database,"SELECT * FROM supplier_2020 order by id_supplier DESC");
					while ($data=mysqli_fetch_array($q)) {
                        $terpilih = ($r['id_supplier']==$data['id_supplier']) ? 'selected' : '';
						echo "<option value=$data[id_supplier]>$data[nama_supplier]</option>";
					}
                ?>
            </select>
		</div>
        <div class="form-group">
			<label>Satuan</label>
			<select name="satuan" class="form-control">
                <option disabled>-- Satuan --</option>
                <option value="Kg" <?php echo ($result['satuan'] == 'Kg' ? 'selected' : '') ?>>Kilogram</option>
                <option value="Buah" <?php echo ($result['satuan'] == 'Buah' ? 'selected' : '') ?>>Buah</option>
                <option value="Helai" <?php echo ($result['satuan'] == 'Helai' ? 'selected' : '') ?>>Helai</option>
            </select>
		</div>
        <div class="form-group">
			<label>Jenis Barang</label>
			<select name="jenis" class="form-control">
				<option disabled>-- Jenis Barang --</option>
				<?php
                    include 'koneksi.php';
                    $q=mysqli_query($database,"SELECT * FROM jenis_2020 order by id_jenis DESC");
                    while ($data=mysqli_fetch_array($q)) {
                        $terpilih = ($result['id_jenis']==$data['id_jenis']) ? 'selected' : '';
                        echo "<option value=$data[id_jenis] $terpilih>$data[jenis_barang]</option>";
                    }
                ?>
			</select>
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input type="number" name="harga" class="form-control" value="<?php echo $result['harga'] ?>">
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="number" name="stok" class="form-control" value="<?php echo $result['stok'] ?>">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<textarea name="ket" class="form-control" rows="5"><?php echo $result['ket'] ?></textarea>
		</div>
		<div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Update</button>
            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
        </div>
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$simpan=mysqli_query($database,"UPDATE barang_2020 SET
                                            kode_barang = '$_POST[kode_barang]',
                                            nama_barang = '$_POST[nama_barang]',
											id_supplier = '$_POST[supplier]',
                                            satuan = '$_POST[satuan]',
                                            id_jenis = '$_POST[jenis]',
                                            harga = '$_POST[harga]',
											stok = '$_POST[stok]',
                                            ket = '$_POST[ket]'
                                        WHERE id = '$_GET[id]'
                                ");
			if ($simpan) 
                echo "<script>window.location='index.php?p=order'</script>";
		}
	?>
</div>
</body>
</html>