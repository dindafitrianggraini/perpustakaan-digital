<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_POST['register'])) {
                                            $nama = $_POST['nama'];
                                            $username = $_POST['username'];
                                            $username = $_POST['username'];
                                            $username = $_POST['username'];
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);
                                            $data = mysqli_query ($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
                                            $cek = mysqli_num_rows($data);
                                            if($cek > 0 ){
                                                $_SESSION['user'] = mysqli_fetch_array($data);
                                                echo '<script>alert("Selamat Datang, Login Berhasil"); location.href="index.php";</script>';
                                            }else{

                                                echo '<script>alert("Maaf, Username/Password Salah")</script>';
                                            }
                                        }
                                        ?>
                                    <form method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="name" placeholder="Masukkan Nama Lengkap" />
                                                <label> Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="email" placeholder="Masukkan Email" />
                                                <label> Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="no_telepon" placeholder="Masukkan No. Telepon" />
                                                <label> No. Telepon</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <textarea name="alamat" rows="5" class="form-control py-4"></textarea>
                                            <label> Alamat</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="username" name="username" placeholder="Masukkan Username" />
                                                <label> Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Masukkan Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-danger" href="register.php">Register</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                          &copy; 2025 Perpustakaan Digital.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
