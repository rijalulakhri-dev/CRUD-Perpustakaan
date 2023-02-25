<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <form action="tambah.php" method="POST">
        <button type="submit">tambah</button>
    </form>
    <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Jumlah Halaman</th>
                <th>Opsi</th>
            </tr>
		<?php
		include "../koneksi.php";
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM buku");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
      <td><?php echo $nomor++; ?></td>
      <td><a href="detail.php?id=<?php echo $data['id_buku']; ?>"><?php echo $data['nama_buku']; ?></a></td>
      <td><?php echo $data['nama_pengarang']; ?></td>
      <td><?php echo $data['jml_halaman']; ?></td>
      <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id_buku']; ?>">Edit</a> |
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id_buku']; ?>">Hapus</a>
                </td>
            </tr>
		<?php
        }
        ?>
	</table>
</body>
</html>
