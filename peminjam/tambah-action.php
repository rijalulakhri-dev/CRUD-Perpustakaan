<?php 
include '../koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$sql = "INSERT INTO peminjam (nama,alamat,no_hp) VALUES('$nama','$alamat','$no_hp')";
$query =  mysqli_query($koneksi ,$sql);
 if ($query) {
    echo "<script>alert('Horee !! data berhasil disimpan')</script>";
    header("location:index.php?pesan=berhaasil");
 } else {
    echo mysqli_error($koneksi);
    echo "<h1>Gagal Input Data</h1>";
 }
?>