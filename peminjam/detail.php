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
	$nomor = 1;
	while($data = mysqli_fetch_assoc($query_mysql)){
	?>
        <h4>Judul = <?php echo $data['nama']; ?></h4>
        <h4>Judul = <?php echo $data['alamat']; ?></h4>
        <h4>Judul = <?php echo $data['no_hp']; ?></h4>

    <?php } ?>
</body>
</html>