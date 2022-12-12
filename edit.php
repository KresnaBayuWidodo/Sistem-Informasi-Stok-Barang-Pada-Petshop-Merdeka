<body>
    <?php
    include "koneksi.php";

    $npm = $_GET['npm'];

    (isset($npm) && empty($npm)) ? header('location: index.php') : '';

    $query = "SELECT * FROM mahasiswa WHERE npm = $npm LIMIT 1";

    $hasil_query = mysqli_query($koneksi, $query);

    $data = mysqli_fetch_assoc($hasil_query);

    empty($data) ? header('location: index.php') : '';

    ?>

    <form method="POST" action="update.php?npm=<?=$npm; ?>">
        <h3>Form Edit</h3>
        <a href="index.php" type="button">Kembali</a>
        <table>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type="text" name="npm" value="<?=$data['npm']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$data['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?$data['alamat']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>