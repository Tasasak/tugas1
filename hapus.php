<?php
    include ("koneksi.php");
    $page=$_GET['page'];
    $proses=$_GET['proses'];

    if ($page=='order' AND $proses=='hapus') {
        mysqli_query($database,"DELETE FROM barang_2020 WHERE id='$_GET[id]'");
        header('location:index.php?p='.$page);
    }

    elseif ($page=='supplier' AND $proses=='hapus') {
        mysqli_query($database,"DELETE FROM supplier_2020 WHERE id_supplier='$_GET[id]'");
        header('location:index.php?p='.$page);
    }

    elseif ($page=='jenis' AND $proses=='hapus') {
        mysqli_query($database,"DELETE FROM jenis_2020 WHERE id_jenis='$_GET[id]'");
        header('location:index.php?p='.$page);
    }
?>