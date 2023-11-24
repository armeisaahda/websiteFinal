<?php
// Koneksi ke database
$servername = "localhost:8111";
$username = "root";
$password = "";
$dbname = "pendaftaran";

$sat = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi database
if (!$sat) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
