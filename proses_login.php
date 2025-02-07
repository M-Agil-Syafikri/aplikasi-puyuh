<?php
include "koneksi.php";

if ($conn->connect_error){
    die("koneksi database gagal: " . $koneksi->connect_error);

//Mendapatkan data yang dikirim melalui form login
$username = $_POST['username'];
$password = $_POST['password'];

//Melakukan query untuk mendapatkan data pengguna berdsarkan username
$query = "SELECT * FROM admin_puyuh WHERE username = '$username'";
$result = $koneksi->query($query);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    //login berhasil, lakukan tindakan sesuai kebutuhan
    echo "Login berhasil!";
    header("Location: stok.php");
    exit();
} else {
    echo "password salah!";
}
} else {
    echo "username tidak ditemukan!";
}

$conn->close();


