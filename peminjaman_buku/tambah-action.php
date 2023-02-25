<?php 
include '../koneksi.php';
// $id_peminjaman_buku = $_POST['id_peminjaman_buku'];
$id_buku = $_POST['id_buku'];
$id_peminjam = $_POST['id_peminjam'];
$tgl_peminjaman = $_POST['tanggal_peminjaman'];
$tgl_pengembalian = $_POST['tanggal_pengembalian'];
 
$query =  mysqli_query($koneksi ,"INSERT INTO peminjaman_buku (id_buku,id_peminjaman,tgl_peminjaman,tgl_pengembalian) VALUES('$id_buku','$id_peminjam','$tgl_peminjaman','$tgl_pengembalian')");
 if ($query) {
    header("location:index.php?pesan=berhaasil");
 } else {
    echo "<h1>Gagal Input Data</h1>";
 }
?>