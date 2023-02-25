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
	$nomor = 1;
	while($data = mysqli_fetch_assoc($query_mysql)){
	?>
        <h4>Judul = <?php echo $data['nama_buku']; ?></h4>
        <h4>Judul = <?php echo $data['nama_pengarang']; ?></h4>
        <h4>Judul = <?php echo $data['jml_halaman']; ?></h4>

    <?php } ?>
</body>
</html>