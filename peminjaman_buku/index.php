<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <form action="tambah.php">
        <button type="submit">tambah</button>
    </form>
    <table border="1" class="table">
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Buku Yang Di Pinjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Opsi</th>		
            </tr>
		<?php 
		include "../koneksi.php";
		// $query_mysql = mysqli_query($koneksi, "SELECT * FROM peminjaman_buku");

        $query = " SELECT * FROM peminjaman_buku INNER JOIN buku ON buku.id_buku=peminjaman_buku.id_buku INNER JOIN peminjam ON peminjam.id_peminjam=peminjaman_buku.id_peminjaman

        ";

        $query_mysql = mysqli_query($koneksi,$query );
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><a href="detail.php?id=<?php echo $data['id_buku']; ?>"><?php echo $data['nama']; ?></a></td>
                <td><?php echo $data['nama_buku']; ?></td>
                <td><?php echo $data['tgl_peminjaman']; ?></td>
                <td><?php echo $data['tgl_pengembalian']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id_peminjaman_buku']; ?>">Edit</a> |
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id_peminjaman_buku']; ?>">Hapus</a>					
                </td>
            </tr>
		<?php 
        } 
        ?>
	</table>
</body>
</html>