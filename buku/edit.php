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
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
	while($data = mysqli_fetch_assoc($query_mysql)){
	?>
    <form action="edit-action.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id_buku'] ?>">
        <div>
            <label for="judul">judul</label>
            <input type="text" id="judul" name="judul" value="<?php echo $data['nama_buku'] ?>">
        </div>
        <div>
            <label for="pengarang">pengarang</label>
            <input type="text" id="pengarang" name="pengarang" value="<?php echo $data['nama_pengarang'] ?>">
        </div>
        <div>
            <label for="jumlah_halaman">jumlah halaman</label>
            <input type="number" id="jumlah_halaman" name="jumlah_halaman" value="<?php echo $data['jml_halaman'] ?>">
        </div>
        <button type="submit">Simpan</button>
        <button><a href="index.php">Kembali</a></button>
    </form>
    <?php } ?>
</body>
</html>