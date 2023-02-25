<?php 
 
include '../koneksi.php';
$id = $_POST['id'];
$id_buku = $_POST['id_buku'];
$id_peminjam = $_POST['id_peminjam'];
$tgl_peminjaman = $_POST['tanggal_peminjaman'];
$tgl_pengembalian = $_POST['tanggal_pengembalian'];

$query = "UPDATE peminjaman_buku SET id_buku='$id_buku', id_peminjaman='$id_peminjam', tgl_peminjaman='$tgl_peminjaman',tgl_pengembalian='$tgl_pengembalian' WHERE id_peminjaman_buku='$id'";
$query =  mysqli_query($koneksi ,$query);
 if ($query) {
    header("location:index.php?pesan=berhaasil");
 } else {
    echo "<h1>Gagal Input Data</h1>";
 }
?>