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
            <label for="judul">judul</label>
            <input type="text" id="judul" name="judul">
        </div>
        <div>
            <label for="pengarang">pengarang</label>
            <input type="text" id="pengarang" name="pengarang">
        </div>
        <div>
            <label for="jumlah_halaman">jumlah halaman</label>
            <input type="number" id="jumlah_halaman" name="jumlah_halaman">
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>