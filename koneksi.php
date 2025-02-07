<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "db_puyuh";

    $conn = new mysqli("localhost", "root", "" ,"db_puyuh") or die ("gagal terhubung ke database");

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>

