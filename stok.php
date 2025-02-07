<!DOCTYPE html>
<html>
<?php
include "koneksi.php";
?>

<head>
    <title>SISTEM INFORMASI PUYUH</title>
    <!-- Tambahkan link ke file Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .container {
            margin-top: 30px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-group {
            float: right;
        }

        .btn-group .btn {
            margin-left: 5px;
        }

        .table {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="col-lg-12">
            <div class="page-header">
                <h2>DATA BARANG</h2>
                <div class="btn-group">
                    <a href="add.php" class="btn btn-success">Tambah Data</a>
                    <a href="logout.php" class="btn btn-danger">Log Out</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID BARANG</th>
                            <th>JENIS BARANG</th>
                            <th>JUMLAH</th>
                            <th>KETERANGAN</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_tampil ="SELECT * FROM stok";
                        $query_tampil = mysqli_query($conn, $sql_tampil);
                        $no = 1;
                        while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $no; ?>
                                </td>
                                <td>
                                    <?php echo $data['id_brng']; ?>
                                </td>
                                <td>
                                    <?php echo $data['jenis_brng']; ?>
                                </td>
                                <td>
                                    <?php echo $data['jumlah']; ?>
                                </td>
                                <td>
                                    <?php echo $data['keterangan']; ?>
                                </td>
                             
                                <td>
                                    <a href="edit.php?kode=<?php echo $data['id_brng']; ?>" class='btn btn-warning btn-sm'>Ubah</a>
                                    <a href="del.php?kode=<?php echo $data['id_brng']; ?>" onclick="return confirm('Hapus data ini ?')" class='btn btn-danger btn-sm'>Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                      
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tambahkan script untuk Bootstrap JavaScript (opsional) -->
    <!-- Pastikan untuk menghubungkan ke jQuery terlebih dahulu -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
