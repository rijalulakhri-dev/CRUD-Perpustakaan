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
        <div>
            <label for="judul">nama</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div>
            <label for="pengarang">alamat</label>
            <input type="text" id="alamat" name="alamat">
        </div>
        <div>
            <label for="jumlah_halaman">no hp</label>
            <input type="number" id="no_hp" name="no_hp">
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>