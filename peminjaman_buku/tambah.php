<?php 
		include "../koneksi.php";
		$data_buku = mysqli_query($koneksi, "SELECT * FROM buku");
		$data_peminjam = mysqli_query($koneksi, "SELECT * FROM peminjam");
        // $parsing_buku = mysqli_fetch_array($data_buku);
        // $parsing_pinjam = mysqli_fetch_assoc($data_peminjam)->result();
        //                 echo "<pre>";

        //         var_dump($parsing_pinjam);
        //         echo "</pre>";
        //         die();
		?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>

<body>
    <form action="tambah-action.php" method="post">
        <!-- <div>
            <label for="id_peminjaman_buku">Id peminjaman buku</label>
            <input type="text" id="id_peminjaman_buku" name="id_peminjaman_buku">
        </div> -->
        <div>
            <label for="id_buku">Nama Buku</label>
            <select name="id_buku">
                <option selected>-- Pilih Buku --</option>
            <?php while ($p = mysqli_fetch_array($data_buku)) { ?>
            <option value="<?php echo $p['id_buku']; ?>"><?php echo $p['nama_buku']; ?></option>
            <?php }
            ?>
            </select>
        </div>
        <div>
            <label for="id_peminjam">Nama Peminjam</label>
            <select name="id_peminjam">
                <option default>-- Pilih Peminjam --</option>
            <?php while ($p = mysqli_fetch_array($data_peminjam)) { ?>
            <option value="<?php echo $p['id_peminjam']; ?>"><?php echo $p['nama']; ?></option>
            <?php }
            ?>
            </select>
            
        </div>
        <div>
            <label for="tanggal_peminjaman">Tanggal peminjaman</label>
            <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman">
        </div>
        <div>
            <label for="tanggal_pengembalian">Tanggal pengembalian</label>
            <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian">
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>