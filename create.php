<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL</title>
    </head>
    <body>
        <form method="POST" action="store.php">
            <h3>Form Tambah</h3>
            <a href="index.php" type="button">Kembali</a>
            <table>
                <tr>
                    <td>NPM</td>
                    <td>:</td>
                    <td><input type="text" name="npm" value="<?= rand(100,999); ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="" required></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>