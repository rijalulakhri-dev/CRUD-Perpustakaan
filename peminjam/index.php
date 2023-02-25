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
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Opsi</th>		
            </tr>
		<?php 
		include "../koneksi.php";
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM peminjam");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><a href="detail.php?id=<?php echo $data['id_peminjam']; ?>"><?php echo $data['nama']; ?></a></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['no_hp']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id_peminjam']; ?>">Edit</a> |
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id_peminjam']; ?>">Hapus</a>					
                </td>
            </tr>
		<?php 
        } 
        ?>
	</table>
</body>
</html>