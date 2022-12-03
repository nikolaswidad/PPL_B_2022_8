<?php

require_once('config.php');
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user(email, password, user_type) VALUES('$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAP-SIAP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                            </div>
                            <form class="user" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <!-- <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="firstName"
                                            placeholder="Nama Awal">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="lastName"
                                            placeholder="Nama Akhir">
                                    </div>
                                </div> -->
                                <!-- <div class="form-group">
                                    <input type="text" name="name" required placeholder="Masukkan Nama" class="form-control form-control-user">
                                </div> -->
                                <div class="form-group">
                                    <input type="email" name="email" required placeholder="Masukkan Email Anda" class="form-control form-control-user">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" required placeholder="Masukkan Kata Sandi" class="form-control form-control-user">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="cpassword" required placeholder="Konfirmasi Kata Sandi" class="form-control form-control-user">
                                </div>
                                <div class="form-group" >
                                   <select name="user_type" class="form-control btn dropdown-toggle">
                                       <option value="" selected disabled>Pilih Tipe User</option>
                                       <option value="mahasiswa">Mahasiswa</option>
                                       <option value="dosen">Dosen</option>
                                       <option value="admin">Admin</option>
                                       <option value="departemen">Departemen</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="submit" id="submit">Buat</button>
                                <!-- <a href="index.php" class="btn btn-primary btn-user btn-block
                                type="submit" name="submit" value="submit"
                                >
                                    Generate Account
                                </a> -->
                                <hr>
                            </form>

                            <div class="text-center">
                                <a class="small" href="index.php">Sudah Punya Akun? Masuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>