<!DOCTYPE html>
<html>
<?php
include "koneksi.php";
?>

<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f9f9f9;
        }

        .container {
            margin-top: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .page-header {
            text-align: center;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group .btn-primary {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-lg-8">
            <div class="page-header">
                <h2>TAMBAH</h2>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID Barang</label>
                    <input type="text" name="id_brng" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" name="jenis_brng" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" required>
                </div>

                <div class="form-group">
                    <input type="submit" name="Simpan" value="Simpan Data" class="btn btn-primary">
                    <a href="stok.php" class="btn btn-warning">Batal</a>
                </div>
            </form>
        </div>
    </div>
</body>

<?php
if (isset($_POST['Simpan'])) {

    $sql_simpan = "INSERT INTO stok (`id_brng`, `jenis_brng`, `jumlah`, `keterangan`) VALUES (
            '" . $_POST['id_brng'] . "',
            '" . $_POST['jenis_brng'] . "',
            '" . $_POST['jumlah'] . "',
            '" . $_POST['keterangan'] . "')";
    $query_simpan = mysqli_query($conn, $sql_simpan);

    if ($query_simpan) {
        echo "<script>alert('Tambah Data Sukses')</script>";
        echo "<meta http-equiv='refresh' content='0; url=stok.php'>";
    } else {
        echo "<script>alert('Tambah Data Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0; url=add.php'>";
    }
}
?>

</html>
