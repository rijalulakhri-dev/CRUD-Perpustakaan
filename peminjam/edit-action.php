<?php 
 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
 
$query = mysqli_query($koneksi, "UPDATE peminjam SET id_peminjam='$id_peminjam', nama='$nama', no_hp='$no_hp' WHERE id_nama='$id'");
if ($query) {
    header("location:index.php");
} else {
    echo "<h1>Gagal edit Data</h1>";
 }
?>