<?php
include "koneksi.php";
if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM stok WHERE id_brng='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($conn, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<?php

$sql_hapus = "DELETE FROM stok WHERE id_brng='" . $_GET['kode'] . "'";
$query_hapus = mysqli_query($conn, $sql_hapus);
if ($query_hapus) {
    echo "<script>alert('Hapus Data Sukses')</script>";
    echo "<meta http-equiv='refresh' content='0; url=stok.php'>";
} else {
    echo "<script>alert('Hapus Data Gagal')</script>";
    echo "<meta http-equiv='refresh' content='0; url=stok.php'>";
}

?>

