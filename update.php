<?php
include "koneksi.php";

$npm = $_GET['npm'];

(!isset($npm) || empty($npm)) ? header('location: index.php?pesan=Data gagal diupdate') : '';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$query = "UPDATE mahasiswa SET nama = '$nama', alamat ='$alamat' WHERE npm =$npm";

$hasil_query = mysqli_query($koneksi, $query);

header('location: index.php?pesan=Data sukses diupdate');
?>