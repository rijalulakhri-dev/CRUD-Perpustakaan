<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM peminjaman_buku INNER JOIN buku ON buku.id_buku = peminjaman_buku.id_buku INNER JOIN peminjam ON peminjam.id_peminjam = peminjaman_buku.id_peminjaman WHERE id_peminjaman_buku='$id'" );
    $no =1 ;
    while ($row = mysqli_fetch_array($query_mysql)) {?>
      <strong>Nama ; </strong><?= $row['nama'] ?>
      <br />
      <strong>Alamat ; </strong><?= $row['alamat'] ?>
      <br />
      <strong>Nomor HP ; </strong><?= $row['no_hp'] ?>
    <?php
  } ?>
</body>
</html>