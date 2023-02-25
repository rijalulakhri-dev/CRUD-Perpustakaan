<?php 
 
include '../koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jumlah_halaman = $_POST['jumlah_halaman'];
 
$query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', pengarang='$pengarang', jumlah_halaman='$jumlah_halaman' WHERE id_buku='$id'");
if ($query) {
    header("location:index.php");
} else {
    echo "<h1>Gagal edit Data</h1>";
 }
?>