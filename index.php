<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL</title>
    </head>
    <body>
        <h3>Data Mahasiswa</h3>

        <?= (isset($_GET['pesan'])&& !empty($_GET['pesan'])) ? "<i>".$_GET['pesan']."</i>" : ""; ?>

        <br>
        <a href="create.php" type="button">Tambah</a>
        <a href="index.php" type="button">Refresh</a>

        <table border="">
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php
            include "koneksi.php";

            $query = "SELECT * FROM mahasiswa";

            $hasil_query = mysqli_query($koneksi, $query);

            while($data = mysqli_fetch_assoc($hasil_query)): ?>
            <tr>
                <td><?=$data['npm']; ?></td>
                <td><?=$data['nama']; ?></td>
                <td><?=$data['alamat']; ?></td>
                <td><a href="edit.php?npm=<?=$data['npm']; ?>">Edit</td>
                <td><a href="delete.php?npm=<?=$data['npm']; ?>">Hapus</td>
            </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>