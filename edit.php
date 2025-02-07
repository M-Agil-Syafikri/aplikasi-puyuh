<?php
include 'koneksi.php';

if (isset($_GET['id_brng'])) {
    $id_brng = $_GET['id_brng'];

    $query = "SELECT * FROM stok WHERE id_brng = '$id_brng'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $data = mysqli_fetch_assoc($result);
        $jenis_brng = $data['jenis_brng'];
        $jumlah = $data['jumlah'];
        $keterangan = $data['keterangan'];
    } else {
        header("Location: stok.php");
        exit();
    }
} else {
    header("Location: stok.php");
    exit();
}

// Cek apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai-nilai yang diinputkan dari form
    $id_brng = $_POST['id_brng'];
    $jenis_brng = $_POST['jenis_brng'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];

    // Jika data valid, lakukan proses penyimpanan ke database
    $query = "UPDATE stok SET jenis_brng = '$jenis_brng', jumlah = '$jumlah', keterangan = '$keterangan' WHERE id_brng = '$id_brng'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: stok.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data BARANG</title>
</head>
<body>
    <h1>Edit Data BARANG</h1>
    <form action="" method="POST">
        <input type="hidden" name="id_brng" value="<?php echo $id_brng; ?>">
        <label for="jenis_brng">JENIS BARANG:</label>
        <input type="text" id="jenis_brng" name="jenis_brng" value="<?php echo $jenis_brng; ?>" required><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="text" id="jumlah" name="jumlah" value="<?php echo $jumlah; ?>" required><br><br>

        <label for="keterangan">Keterangan:</label>
        <input type="text" id="keterangan" name="keterangan" value="<?php echo $keterangan; ?>" required><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
