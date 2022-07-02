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
	<h3>Order</h3><hr>
	<a href=?p=entri_order class="btn btn-primary btn-sm"><img src="icons/goods.svg" width="15px">  Entri Data</a>
	<p>
		<table class="table table-hover table-bordered table-hover" id="dataTables-example">
			<thead class="table-info" disabled>
				<tr class="text-center">
					<th>No</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
                    <th>Nama Supplier</th>
					<th>Jenis Barang</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Keterangan</th>
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
					$tampil=mysqli_query($database,"SELECT * FROM barang_2020,jenis_2020,supplier_2020 WHERE barang_2020.id_jenis=jenis_2020.id_jenis AND barang_2020.id_supplier=supplier_2020.id_supplier ORDER BY nama_barang ASC,  kode_barang ASC");
					while ($data=mysqli_fetch_array($tampil)) {
				?>
				<tr>
					<td align="center"><?php echo $no++,"."; ?></td>
					<td class="text-center"><?php echo $data['kode_barang']; ?></td>
					<td><?php echo $data['nama_barang']; ?></td>
					<td class="text-center"><?php echo $data['nama_supplier'] ?></td>
					<td class="text-center"><?php echo $data['jenis_barang']; ?></td>
					<td class="text-center"><?php echo $data['harga']; ?></td>
					<td class="text-center"><?php echo $data['stok'],' ', $data['satuan'] ?></td>
                    <td class="text-center"><?php echo $data['ket'] ?></td>
					<?php
						if ($_SESSION['level']=='administrator') {
					?>
						<td class="text-center">
							<a href="?p=edit_order&id=<?php echo $data['id'] ?>"> <input type="submit" class="btn btn-primary btn-sm" value="edit"> </a> |
							<a href="hapus.php?page=order&proses=hapus&id=<?php echo $data['id'] ?>" onclick="return confirm('Yakin akan menghapus data ?')"><input type="submit" class="btn btn-danger btn-sm" value="hapus"></a>
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
			$jumlah = mysqli_query($database,"SELECT COUNT(*) AS jumlah FROM barang_2020");
			$hasil = mysqli_fetch_array($jumlah);
			echo "Jumlah Data : {$hasil['jumlah']}";
		?>
        </div>
	</p>
</div>
</body>
</html>