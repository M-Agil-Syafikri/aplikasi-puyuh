<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        
        .box-login {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .box-login h2 {
            text-align: center;
            color: #333;
        }
        
        .input-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        
        .btn-login {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }
        
        .btn-login:hover {
            background-color: #45a049;
        }

        .btn-back {
            display: block;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            color: #555;
        }
    </style>
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn-login">
            <a href="profile.php" class="btn-back">Kembali ke Profil</a>
        </form>
        <?php
            session_start();

            if(isset($_POST['submit'])){
                include 'koneksi.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM admin_puyuh WHERE username = '".$user."' AND password = '".$pass."'");
                if(mysqli_num_rows($cek) > 0){
                    $a = mysqli_fetch_object($cek);

                    $_SESSION['stat_login'] = true;
                    $_SESSION['id'] = $a->id;
                    $_SESSION['nama'] = $a->nama;
                    echo '<script>window.location="stok.php"</script>';
                }else{
                    echo '<script>alert("Gagal, Username atau Password salah")</script>';
                }
            }
        ?>
    </div>
</body>
</html>
