<?php 
include '../koneksi.php';
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jumlah_halaman = $_POST['jumlah_halaman'];

$sql = "INSERT INTO buku (nama_buku, nama_pengarang, jml_halaman) VALUES('$judul','$pengarang','$jumlah_halaman')";
$query =  mysqli_query($koneksi ,$sql);


 if ($query) {
    echo "<script>alert('Horee !! data berhasil disimpan')</script>";
    header("location:index.php?pesan=berhaasil");
 } else {
    echo mysqli_error($query);
    echo "<h1>Gagal Input Data</h1>";
 }
?>