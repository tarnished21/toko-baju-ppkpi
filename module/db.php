<?php

date_default_timezone_set('Asia/Jakarta');

$host = "localhost";
$user = "root";
$pass = "ppkpi";
$db   = "toko_baju"; // Ganti sesuai nama database-mu

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>