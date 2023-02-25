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
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM peminjam WHERE id_peminjam='$id'");
	while($data = mysqli_fetch_assoc($query_mysql)){
	?>
    <form action="edit-action.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id_peminjam'] ?>">
        <div>
            <label for="nama">nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
        </div>
        <div>
            <label for="alamat">alamat</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>">
        </div>
        <div>
            <label for="no_hp">no hp</label>
            <input type="number" id="no_hp" name="no_hp" value="<?php echo $data['no_hp'] ?>">
        </div>
        <button type="submit">Simpan</button>
        <button><a href="index.php">Kembali</a></button>
    </form>
    <?php } ?>
</body>
</html>