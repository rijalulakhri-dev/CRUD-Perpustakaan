<?php 
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjam WHERE id_peminjam='$id'");
 
if ($query) {
    header("location:index.php");
} else {
    echo "<h1>Gagal hapus Data</h1>";
 }
?>