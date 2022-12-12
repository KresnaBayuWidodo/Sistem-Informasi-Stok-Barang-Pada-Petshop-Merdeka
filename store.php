<?php
include "koneksi.php";

(!isset($_POST) || empty($_POST)) ? header('location: idex.php?pesan=Data gagal disimpan') : '';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$npm = rand(100, 999);

$query = "INSERT INTO mahasiswa (npm, nama, alamat) VALUES ('$npm','$nama','$alamat')";

$hasil_query = mysqli_query($koneksi, $query);

header('location: index.php?pesan=Data sukses disimpan');

?>