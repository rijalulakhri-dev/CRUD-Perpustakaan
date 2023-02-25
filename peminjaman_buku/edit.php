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
    $query = " SELECT * FROM peminjaman_buku INNER JOIN buku ON buku.id_buku=peminjaman_buku.id_buku INNER JOIN peminjam ON peminjam.id_peminjam=peminjaman_buku.id_peminjaman
        WHERE id_peminjaman_buku='$id'";
    $data_buku = mysqli_query($koneksi, "SELECT * FROM buku");
	$data_peminjam = mysqli_query($koneksi, "SELECT * FROM peminjam");
	$query_mysql = mysqli_query($koneksi, $query);
	while($data = mysqli_fetch_assoc($query_mysql)){
	?>
    
    <form action="edit-action.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id_peminjaman_buku'] ?>">
        <div>
            <label for="id_buku">Nama Buku</label>
            <select name="id_buku">
                <option selected value="<?php echo $data['id_buku']; ?>"><?php echo $data['nama_buku']; ?> (Buku Sekarang)</option>
            <?php while ($p = mysqli_fetch_array($data_buku)) { ?>
            <option value="<?php echo $p['id_buku']; ?>"><?php echo $p['nama_buku']; ?></option>
            <?php }
            ?>
            </select>
        </div>
        <div>
            <label for="id_peminjam">Nama Peminjam</label>
            <select name="id_peminjam">
                <option selected value="<?php echo $data['id_peminjaman']; ?>"><?php echo $data['nama']; ?> (Peminjam Sekarang)</option>
            <?php while ($p = mysqli_fetch_array($data_peminjam)) { ?>
            <option value="<?php echo $p['id_peminjam']; ?>"><?php echo $p['nama']; ?></option>
            <?php }
            ?>
            </select>
            
        </div>
        <div>
            <label for="tanggal_peminjaman">Tanggal peminjaman</label>
            <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" value="<?php echo $data['tgl_peminjaman'] ?>">
        </div>
        <div>
            <label for="tanggal_pengembalian">Tanggal pengembalian</label>
            <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?php echo $data['tgl_pengembalian'] ?>">
        </div>
        <button type="submit">Simpan</button>
        <button><a href="index.php">Kembali</a></button>
    </form>
    <?php } ?>
</body>
</html>