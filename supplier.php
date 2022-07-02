<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
	include ("koneksi.php");
?>
<div class="col-sm" style="margin-top: 70px">
	<h3>Supplier</h3><hr>
	<a href=?p=entri_supplier class="btn btn-primary btn-sm"><img src="icons/goods.svg" width="15px">  Entri Data</a>
	<p>
		<table class="table table-hover table-bordered table-hover" id="dataTables-example">
			<thead class="table-info" disabled>
				<tr class="text-center">
					<th>No</th>
                    <th>Nama Supplier</th>
					<th>Email</th>
					<th>No Telepon</th>
					<th>Alamat</th>
					<?php
						if ($_SESSION['level']=='administrator') {
							echo "<th>Aksi</th>";
						}	
					?>
				</tr>
			</thead>
			<tbody>
				<?php
					include 'koneksi.php';
					$no=1;
					$tampil=mysqli_query($database,"SELECT * FROM supplier_2020");
					while ($data=mysqli_fetch_array($tampil)) {
				?>
				<tr>
					<td align="center"><?php echo $no++,"."; ?></td>
					<td class="text-center"><?php echo $data['nama_supplier']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td class="text-center"><?php echo $data['notelp'] ?></td>
                    <td class="text-center"><?php echo $data['alamat'] ?></td>
					<?php
						if ($_SESSION['level']=='administrator') {
					?>
						<td class="text-center">
							<a href="?p=edit_supplier&id=<?php echo $data['id_supplier'] ?>"> <input type="submit" class="btn btn-primary btn-sm" value="edit"> </a> |
							<a href="hapus.php?page=supplier&proses=hapus&id=<?php echo $data['id_supplier'] ?>" onclick="return confirm('Yakin akan menghapus data ?')"> <input type="submit" class="btn btn-danger btn-sm" value="hapus"> </a>
						</td>
					<?php
						}
					?>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<div class="text-dark">
        <?php
			$jumlah = mysqli_query($database,"SELECT COUNT(*) AS jumlah FROM supplier_2020");
			$hasil = mysqli_fetch_array($jumlah);
			echo "Jumlah Data : {$hasil['jumlah']}";
		?>
        </div>
	</p>
</div>
</body>
</html>