<?php

date_default_timezone_set('Asia/Jakarta');

$host = "localhost";
$user = "root";
$pass = "ppkpi";
$db   = "db_alif"; // Ganti sesuai nama database-mu

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo"Koneksi gagal: ";
}
?>
