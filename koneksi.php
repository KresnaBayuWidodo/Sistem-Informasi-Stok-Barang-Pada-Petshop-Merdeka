<?php
// isi nama host, username mysql, dan password mysql anda
$koneksi = mysqli_connect("localhost","root","","unipma");
// isikan dengan nama database yang akan di hubungkan
$db = mysqli_select_db($koneksi,"unipma");
?>