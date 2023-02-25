<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$koneksi = new mysqli($server, $username, $password, $database);

if ($koneksi) {
    // echo "koneksi berhasil";
}

if (!$koneksi) {
    die(mysqli_connect_error());
}

?>

