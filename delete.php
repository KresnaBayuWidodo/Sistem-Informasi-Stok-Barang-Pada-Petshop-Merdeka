<?php
include "koneksi.php";

$npm = $_GET['npm'];

(!isset($npm) && empty($npm)) ? header('location: index.php'): '';

$query = "DELETE FROM mahasiswa WHERE npm = $npm LIMIT 1";

$hasil_query = mysqli_query($koneksi, $query);

header('location: index.php?pesan= Data sukses dihapus');

?>